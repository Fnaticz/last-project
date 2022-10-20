<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard mitra coba</title>
    <!-- material cdn  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <!-- stylsheet  -->
    <link href="{{ asset('css/dash.css') }}" rel="stylesheet" />

</head>
<body>
    <div class="container">
      <aside>
        <div class="top">
          <div class="logo">
            <img src="img/ball.png">
            <h2>COR<span class="primary">NER</span></h2>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>
        <div class="sidebar">
          <a href="#">
            <span class="material-icons-sharp">dashboard</span>
            <h3>Dashboard</h3>
          </a>

          <a href="#" class="active">
            <span class="material-icons-sharp">person_outline</span>
            <h3>Customers</h3>
          </a>
          
          <a href="#">
            <span class="material-icons-sharp">receipt_long</span>
            <h3>Orders</h3>
            <span class="message-count">30</span>
          </a>

          <a href="#">
            <span class="material-icons-sharp">inventory</span>
            <h3>Products</h3>
          </a>
          
          <a href="#">
            <span class="material-icons-sharp">report_gmailerrorred</span>
            <h3>Reports</h3>
          </a>
                
          <a href="#">
            <span class="material-icons-sharp">settings</span>
            <h3>Settings</h3>
          </a>

          <a href="#">
            <span class="material-icons-sharp">add</span>
            <h3>Add Product</h3>
          </a>
          
          <a href="#">
            <span class="material-icons-sharp">logout</span>
            <h3>Logout</h3>
          </a>

        </div>
      </aside>

      <main>
        <h1>Dashboard</h1>
        <div class="date">
           <input type="date">
        </div>

        <div class="insights">
          <div class="sales">
            <span class="material-icons-sharp">analytics</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Products</h3>
                    <h1>36</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx='38' cy='38' r='36'> </circle>
                  </svg>
                  <div class="number">
                    <p>40%</p>
                  </div>
                </div>
            </div>
            <small class="text muted">Last 24 Hours</small>
          </div>
                  <!-- end end -->
                  <div class="expenses">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Products</h3>
                            <h1>36</h1>
                        </div>
                        <div class="progress">
                          <svg>
                            <circle cx='38' cy='38' r='36'> </circle>
                          </svg>
                          <div class="number">
                            <p>40%</p>
                          </div>
                        </div>
                    </div>
                    <small class="text muted">Last 24 Hours</small>
                  </div>
                          <!-- end end -->
                          <div class="income">
                            <span class="material-icons-sharp">stacked_line_chart</span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Total </h3>
                                    <h1>20</h1>
                                </div>
                                <div class="progress">
                                  <svg>
                                    <circle cx='38' cy='38' r='36'> </circle>
                                  </svg>
                                  <div class="number">
                                    <p>30%</p>
                                  </div>
                                </div>
                            </div>
                            <small class="text muted">Last 24 Hours</small>
                          </div>
                                  <!-- end end -->
        </div>
        <!-------------------- end insights -------------------------->
     
          <div class="recent-orders">
            <h2>Recent Orders</h2>
            <table>
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Product Number</th>
                  <th>Product Payment</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Lapangan Sepakbola Giri</td>
                  <td>001</td>
                  <td>Lunas</td>
                  <td class="warning">Disewa</td>
                  <td class="primary">Details</td>
                </tr>
                <tr>
                  <td>Lapangan Sepakbola Giri</td>
                  <td>001</td>
                  <td>Lunas</td>
                  <td class="warning">Disewa</td>
                  <td class="primary">Details</td>
                </tr>
                <tr>
                  <td>Lapangan Sepakbola Giri</td>
                  <td>001</td>
                  <td>Lunas</td>
                  <td class="warning">Disewa</td>
                  <td class="primary">Details</td>
                </tr>
                <tr>
                  <td>Lapangan Sepakbola Giri</td>
                  <td>001</td>
                  <td>Lunas</td>
                  <td class="warning">Disewa</td>
                  <td class="primary">Details</td>
                </tr>
                <tr>
                  <td>Lapangan Sepakbola Giri</td>
                  <td>001</td>
                  <td>Lunas</td>
                  <td class="warning">Disewa</td>
                  <td class="primary">Details</td>
                </tr>
                <tr>
                  <td>Lapangan Sepakbola Giri</td>
                  <td>001</td>
                  <td>Lunas</td>
                  <td class="warning">Disewa</td>
                  <td class="primary">Details</td>
                </tr>
                
              </tbody>
            </table>
            <a href="">Show All</a>
          </div>
      </main>

      <!-- end main -->
        <div class="right">
          <div class="top">
              <button id="menu-btn"> 
                <span class="material-icons-sharp">menu</span>
              </button>
              <div class="theme-toggler">
                <span class="material-icons-sharp active">light_mode </span>
                <span class="material-icons-sharp">dark_mode </span>
              </div>
              <div class="profile">
                <div class="info">
                  <p>Hey, <b>Mochan</b></p>
                <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                  <img src="img/profile1.jpg" alt="">
                </div>
              </div>
          </div>

          <!-- enddd -->
          <div class="recent-updates">
            <h2>Recent Update</h2>
            <div class="updates">
              <div class="update">
                <div class="profile-photo">
                  <img src="../../../public/img/profile1.jpg" alt="">
                </div>
                <div class="message">
                  <p><b>Kazami</b>Booking lapangan basket</p>
                  <small class="text-muted">2 Minutes Ago</small>
                </div>
              </div>
              <div class="update">
                <div class="profile-photo">
                  <img src="../../../public/img/profile1.jpg" alt="">
                </div>
                <div class="message">
                  <p><b>Kazami</b>Booking lapangan basket</p>
                  <small class="text-muted">2 Minutes Ago</small>
                </div>
              </div>
              <div class="update">
                <div class="profile-photo">
                  <img src="../../../public/img/profile1.jpg" alt="">
                </div>
                <div class="message">
                  <p><b>Kazami</b>Booking lapangan basket</p>
                  <small class="text-muted">2 Minutes Ago</small>
                </div>
              </div>
            </div>
          </div>
          <!-- endddddddddd -->
            <div class="sales-analytics">
              <h2>Sales analytics</h2>
              <div class="item online">
                  <div class="icon">
                    <span class="material-icons-sharp">shopping_cart</span>
                  </div>
                  <div class="right">
                    <div class="info">
                      <h3>Lapangan Yang Di Booking</h3>
                      <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <h5 class="success">+10%</h5>
                    <h3>200</h3>
                  </div>
              </div>
              <div class="item offline">
                <div class="icon">
                  <span class="material-icons-sharp">shopping_bag</span>
                </div>
                <div class="right">
                  <div class="info">
                    <h3>Lapangan Ready Siap Booking</h3>
                    <small class="text-muted">Last 24 Hours</small>
                  </div>
                  <h5 class="success">+10%</h5>
                  <h3>200</h3>
                </div>
            </div>
          <div class="item customers">
            <div class="icon">
              <span class="material-icons-sharp">construction</span>
            </div>
            <div class="right">
              <div class="info">
                <h3>Lapangan yang sedang di perbaiki</h3>
                <small class="text-muted">Last 24 Hours</small>
              </div>
              <h5 class="success">+10%</h5>
              <h3>12</h3>
            </div>
        </div>
                  <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Add Product</h3>
                      </div>
                  </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dash.js') }}"></script>
</body>
</html>