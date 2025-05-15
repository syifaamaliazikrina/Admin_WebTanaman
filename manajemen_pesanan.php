<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pembayaran</title>
    <link rel="stylesheet" href="pembayaran.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="sidebar">
    <div class="logo">The Secret Garden</div>
    <div class="menu-label">MENU</div>
    <ul class="menu-items">
        
        <li>
        <a class="menu-item" onclick="location.href='dashboard.php'">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
        </li>
        <li>
        <a class="menu-item" onclick="location.href='manajemen_pesanan.php'">
                <i class="fas fa-shopping-cart"></i>
                <span>Management Pesanan</span>
                </a>
        </li>
        <li>
        <a class="menu-item" onclick="location.href='manajemen_produk.php'">
                <i class="fas fa-box"></i>
                <span>Management Produk</span>
                </a>
        </li>
        <li>
        <a class="menu-item" onclick="location.href='manajemen_pengiriman.php'">
                <i class="fas fa-truck"></i>
               <span>Management Pengiriman</span> </a>  
        </li>
        <li>
            <a class="menu-item" onclick="location.href='manajemen_akun.php'">
                <i class="fas fa-user"></i>
                <span>Management Akun</span> </a>
        </li>
        <li>
        <a class="menu-item" onclick="location.href='manajemen_admin.php'">
                <i class="fas fa-user-shield"></i>
                <span>Management Admin</span></a>
        </li>
        <li>
            <a class="menu-item " onclick="location.href='manajemen_pembayaran.php'">
            <i class="fas fa-percent"></i>
            <span>Management Pembayaran</span></a>
        </li>
        <li>
            <a class="menu-item " onclick="location.href='manajemen_diskon.php'">
            <i class="fas fa-percent"></i>
            <span>Management diskon</span></a>
        </li>
        <li>
            <a class="menu-item " onclick="location.href='manajemen_saran.php'">
            <i class="fas fa-heart"></i>
            <span>Management Saran</span></a>
        </li>
     </ul>
 </div>

    <div class="main-content">
        <div class="header">
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="user-profile">
                <span>Admin</span>
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Admin Profile">
            </div>
        </div>

        <?php
        include "koneksi.php";
        $sql= "SELECT * FROM pesanan";
        $query= mysqli_query($koneksi,$sql);

?>

        <div class="content">
            <h2 class="content-title">Management Pesanan</h2>
            
            <div class="data-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id Pesanan</th>
                            <th>Id Pelanggan</th>
                            <th>id Produk</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>NO HP</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                    
        <?php while($pesanan=mysqli_fetch_assoc($query)) { ?>
            <td><?=$pesanan['id_pesanan']?></td>
            <td><?=$pesanan['id_pelanggan']?></td>
            <td><?=$pesanan['id_produk']?></td>
            <td><?=$pesanan['alamat']?></td>
            <td><?=$pesanan['tgl_pesanan']?></td>
            <td><?=$pesanan['no_hp']?></td>
            <td><?=$pesanan['jumlah']?></td>
            <td><?=$pesanan['status_pesanan']?></td>
                            <td class="action-buttons">
                                <!-- <button class="btn-edit"><i class="fas fa-check"></i></button> -->
                                <button class="btn-delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  
                </table>
                
            </div><br><br>
            
     </button>
</div>

        </div>
    </div>
    
</body>
</html>