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
    <div class="logo"><img src="uploads/logo.png" alt="The Secret Garden"></div>
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
        $sql= "SELECT * FROM pengiriman";
        $query= mysqli_query($koneksi,$sql);

?>

        <div class="content">
            <h2 class="content-title">Management Pengiriman</h2>
            
            <div class="data-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id Pengiriman</th>
                            <th>Id Pesanan</th>
                            <th>Status Pengiriman</th>
                            <th>Kurir</th>
                            <th>Harga</th>
                            <th>Estimasi</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                    
        <?php while($pengiriman=mysqli_fetch_assoc($query)) { ?>
            <td><?=$pengiriman['id_pengiriman']?></td>
            <td><?=$pengiriman['id_pesanan']?></td>
            <td><?=$pengiriman['status_pengiriman']?></td>
            <td><?=$pengiriman['kurir']?></td>
            <td><?=$pengiriman['harga']?></td>
            <td><?=$pengiriman['estimasi']?></td>
           
                   
                            <td class="action-buttons">
                                <button class="btn-edit"><i class="fas fa-check"></i></button>
                                <button class="btn-delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  
                </table>
                
            </div>
            
</div>

        </div>
    </div>
    
</body>
</html>