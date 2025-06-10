<?php
include "koneksi.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pesanan = $_POST['id_pesanan'];
    $status = $_POST['status'];
    
    // Validasi input
    if (empty($id_pesanan) || empty($status)) {
        echo json_encode(['success' => false, 'message' => 'Data tidak lengkap']);
        exit;
    }
    
    // Daftar status yang valid
    $valid_statuses = [
        'Menunggu Konfirmasi',
        'Dikonfirmasi', 
        'Sedang Dikemas',
        'Menunggu Kurir',
        'Dalam Pengiriman',
        'Terkirim',
        'Selesai',
        'Dibatalkan'
    ];
    
    if (!in_array($status, $valid_statuses)) {
        echo json_encode(['success' => false, 'message' => 'Status tidak valid']);
        exit;
    }
    
    // Update status pesanan
    $sql = "UPDATE pesanan SET status_pesanan = ? WHERE id_pesanan = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "si", $status, $id_pesanan);
        
        if (mysqli_stmt_execute($stmt)) {
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo json_encode(['success' => true, 'message' => 'Status berhasil diupdate']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Pesanan tidak ditemukan']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Gagal mengupdate status']);
        }
        
        mysqli_stmt_close($stmt);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error dalam query database']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Method tidak diizinkan']);
}

mysqli_close($koneksi);
?>
