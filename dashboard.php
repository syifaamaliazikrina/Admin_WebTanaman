<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
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
     </ul>
 </div>
       
    
        <div class="main-content">
          <div class="header">
            <div class="search-container">
              <input type="text" placeholder="Search" class="search-input">
              <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </div>
            <div class="user-menu">
              <span>Admin</span>
              <div class="notification">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                <div class="notification-badge"></div>
              </div>
              <div class="profile-pic">
                <img src="https://via.placeholder.com/32" alt="Profile">
              </div>
            </div>
          </div>

          <h1 class="dashboard-title">Dashboard</h1>

          <div class="congrats-banner">
            <div class="congrats-text">
              <h2>Selamat Anda Mencapai</h2>
              <p>5.000 Pesanan</p>
            </div>
            <div class="congrats-image">
              <img src="https://via.placeholder.com/128x96" alt="Achievement">
            </div>
          </div>
    
          <div class="stats-grid">
            <div class="stat-card">
              <h3>Total Tanaman Terjual</h3>
              <p class="value">5,687</p>
              <p class="info">2,659 dari minggu lalu</p>
            </div>
            <div class="stat-card">
              <h3>Saldo Akun</h3>
              <p class="value">Rp. 32,095,000</p>
              <p class="info">10,5% dari minggu lalu</p>
            </div>
            <div class="stat-card">
              <h3>Keuntungan Penjualan</h3>
              <p class="value">Rp. 21,115,000</p>
              <p class="info">7,5% dari minggu lalu</p>
            </div>
            <div class="stat-card">
              <h3>Total Pengeluaran</h3>
              <p class="value">Rp. 500,000</p>
              <p class="info">4,25% dari minggu lalu</p>
            </div>
          </div>

          <div class="charts-grid">
            <div class="chart-card">
              <h3>Jumlah Pendapatan</h3>
              <div class="chart-container">
                <canvas id="incomeChart"></canvas>
              </div>
            </div>
            <div class="chart-card">
              <h3>Tren Penjualan</h3>
              <div class="chart-container">
                <canvas id="salesTrendChart"></canvas>
              </div>
            </div>
          </div>
    
          <div class="info-grid">
            <div class="info-card">
              <h3>Produk Mendominasi</h3>
              <div class="chart-container">
                <canvas id="dominantProductsChart"></canvas>
              </div>
              <div class="chart-legend">
                <div class="legend-item">
                  <div class="legend-color yellow-color"></div>
                  <span>Tanaman Hias daun</span>
                </div>
                <div class="legend-item">
                  <div class="legend-color green-color"></div>
                  <span>Tanaman Hias bunga</span>
                </div>
              </div>
            </div>
            <div class="info-card">
              <h3>Ringkasan Keuangan</h3>
              <div class="financial-item">
                <div class="financial-header">
                  <span>Total Keuntungan</span>
                  <span>Rp. 21,115,000 (70%)</span>
                </div>
                <div class="progress-bar">
                  <div class="progress-fill progress-green" style="width: 70%"></div>
                </div>
              </div>
              <div class="financial-item">
                <div class="financial-header">
                  <span>Total Pendapatan</span>
                  <span>Rp. 30,165,000 (85%)</span>
                </div>
                <div class="progress-bar">
                  <div class="progress-fill progress-green" style="width: 85%"></div>
                </div>
              </div>
              <div class="financial-item">
                <div class="financial-header">
                  <span>Total Pengeluaran</span>
                  <span>Rp. 500,000 (10%)</span>
                </div>
                <div class="progress-bar">
                  <div class="progress-fill progress-red" style="width: 10%"></div>
                </div>
              </div>
            </div>
            <div class="info-card">
              <h3>Target Dan Pencapaian Jumlah Pesanan</h3>
              <div class="target-achievement">
                <p>Target : <span class="target-value">8,000</span> pesanan</p>
                <p>Pencapaian : <span class="achievement-value">5,675</span> pesanan</p>
                <p>(94.75%)</p>
                <p>Status: Mendekati Target</p>
              </div>
            </div>
          </div>
    
          <!-- Orders List -->
          <div class="orders-section">
            <div class="section-header">
              <h3>Daftar Pesanan</h3>
            </div>
            <div class="section-content">
              <div class="empty-list">
                <p>No orders to display</p>
              </div>
            </div>
          </div>

          <div class="bottom-grid">
            <div>
              <div class="section-header">
                <h3>Akun Terbaru</h3>
              </div>
              <div class="accounts-content">
                <div class="account-list">
                  <div class="account-item">
                    <div class="account-info">
                      <p>Nanjo</p>
                      <p>nanjo87@gmail.com</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9  stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                  </div>
                  <div class="account-item">
                    <div class="account-info">
                      <p>Cahyanda</p>
                      <p>yanda23@gmail.com</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                  </div>
                  <div class="account-item">
                    <div class="account-info">
                      <p>Haerin</p>
                      <p>haerin8@gmail.com</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                  </div>
                  <div class="account-item">
                    <div class="account-info">
                      <p>Kassandra</p>
                      <p>kassacc@gmail.com</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                  </div>
                  <div class="account-item">
                    <div class="account-info">
                      <p>Kairi</p>
                      <p>kairi5@gmail.com</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="section-header">
                <h3>Produk Terlaris</h3>
              </div>
              <div class="products-content">
                <div class="product-list">
                  <div class="product-item">
                    <div class="product-image">
                      <img src="https://via.placeholder.com/40" alt="Calathea Orbifolia">
                    </div>
                    <div class="product-info">
                      <div class="product-header">
                        <span class="product-id">1001</span>
                        <span class="product-name">Calathea Orbifolia</span>
                      </div>
                      <div class="product-type">Tanaman Hias Daun</div>
                      <div class="product-prices">
                        <span>Rp. 45,000</span>
                        <span>Rp. 100,000</span>
                      </div>
                    </div>
                    <div class="product-meta">
                      <div class="product-tag">Calathea</div>
                      <div class="product-tag">10 tanaman</div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 15h8M8 9h8m-8 6V9m8 6V9"/></svg>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="product-image">
                      <img src="https://via.placeholder.com/40" alt="Calathea Roseopicta">
                    </div>
                    <div class="product-info">
                      <div class="product-header">
                        <span class="product-id">1002</span>
                        <span class="product-name">Calathea Roseopicta</span>
                      </div>
                      <div class="product-type">Tanaman Hias Daun</div>
                      <div class="product-prices">
                        <span>Rp. 50,000</span>
                        <span>Rp. 200,000</span>
                      </div>
                    </div>
                    <div class="product-meta">
                      <div class="product-tag">Calathea</div>
                      <div class="product-tag">20 tanaman</div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 15h8M8 9h8m-8 6V9m8 6V9"/></svg>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="product-image">
                      <img src="https://via.placeholder.com/40" alt="Pink Rose">
                    </div>
                    <div class="product-info">
                      <div class="product-header">
                        <span class="product-id">1005</span>
                        <span class="product-name">Pink Rose</span>
                      </div>
                      <div class="product-type">Tanaman Hias Bunga</div>
                      <div class="product-prices">
                        <span>Rp. 50,000</span>
                        <span>Rp. 100,000</span>
                      </div>
                    </div>
                    <div class="product-meta">
                      <div class="product-tag">Pink</div>
                      <div class="product-tag">5 tanaman</div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#334d6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 15h8M8 9h8m-8 6V9m8 6V9"/></svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const incomeCtx = document.getElementById('incomeChart').getContext('2d');
          const incomeChart = new Chart(incomeCtx, {
            type: 'bar',
            data: {
              labels: ['November', 'Desember', 'Januari', 'Februari'],
              datasets: [
                {
                  label: 'Pendapatan',
                  data: [15, 25, 20, 10],
                  backgroundColor: '#e5cb00',
                  borderRadius: 20,
                  borderSkipped: false,
                },
                {
                  label: 'Target',
                  data: [20, 30, 35, 25],
                  backgroundColor: '#003d0b',
                  borderRadius: 20,
                  borderSkipped: false,
                }
              ]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: {
                y: {
                  beginAtZero: true,
                  display: false,
                },
                x: {
                  grid: {
                    display: false,
                  }
                }
              },
              plugins: {
                legend: {
                  display: false,
                }
              }
            }
          });
    
          const salesTrendCtx = document.getElementById('salesTrendChart').getContext('2d');
          const salesTrendChart = new Chart(salesTrendCtx, {
            type: 'line',
            data: {
              labels: ['November', 'Desember', 'Januari', 'Februari'],
              datasets: [
                {
                  label: 'Penjualan',
                  data: [10, 25, 45, 60],
                  borderColor: '#273240',
                  backgroundColor: '#273240',
                  tension: 0.4,
                  fill: false,
                }
              ]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: {
                y: {
                  beginAtZero: true,
                  display: false,
                },
                x: {
                  grid: {
                    display: false,
                  }
                }
              },
              plugins: {
                legend: {
                  display: false,
                }
              },
              elements: {
                point: {
                  radius: 0,
                }
              }
            }
          });
    
          const dominantProductsCtx = document.getElementById('dominantProductsChart').getContext('2d');
          const dominantProductsChart = new Chart(dominantProductsCtx, {
            type: 'doughnut',
            data: {
              labels: ['Tanaman Hias Daun', 'Tanaman Hias Bunga'],
              datasets: [
                {
                  data: [70, 30],
                  backgroundColor: ['#e5cb00', '#003d0b'],
                  borderWidth: 0,
                }
              ]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              cutout: '70%',
              plugins: {
                legend: {
                  display: false,
                }
              }
            }
          });
        });
      </script>
</body>
</html>