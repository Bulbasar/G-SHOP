<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/803701e46b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">

    <title>Landing Page</title>
  </head>
  <body>

  <style>

  a{
    text-decoration: none !important;
    color: #000;
  }
  #search-addon i{
      color: #fff; cursor: pointer; font-size: 1.4em;
  }

  #search-addon .fa-search:hover{
    color: orangered;
  }

  .shop-now-btn button:hover{
    background-color: #333 !important;
    transition: ease 0.3s !important;
  }

  .trends button:hover{
    background-color: #333 !important;
    transition: ease 0.3s !important;
  }
  .txt-type > .txt{
    border-right: 1px solid #000;
  }

  #semi-footer-table thead th{
    color: #000 !important;
  }

  #semi-footer-table tbody tr td a{
    color: gray !important;
  }

  #semi-footer-table tbody tr td a:hover{
    color: black !important;
  }

  #semi-footer-table thead th:nth-child(1){
    width: 25%;
  }

  #semi-footer-table tbody tr td:nth-child(1){
    width: 25%;
  }

  #semi-footer-table thead th:nth-child(2){
    width: 25%;
  }

  #semi-footer-table tbody tr td:nth-child(2){
    width: 25%;
  }

  #semi-footer-table thead th:nth-child(3){
    width: 25%;
  }

  #semi-footer-table tbody tr td:nth-child(3){
    width: 25%;
  }

    #semi-footer-table thead th:nth-child(4){
    width: 25%;
  }

  #semi-footer-table tbody tr td:nth-child(4){
    width: 25%;
  }

  ul {
  list-style-type: none;
  }

  ul li a:hover{
    color: #fff !important;
  }

  /* Bouncing animation for the icon */
  @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-20px);
        }
        60% {
            transform: translateY(-10px);
        }
    }

    /* Apply the bouncing animation to the icon */
    .bouncing-icon {
        animation: bounce 1s infinite;
    }

  </style>

    <div class="container-fliud w-100 h-100">
        <nav class="w-100 navbar  p-2 pl-4 pr-4">
            <div class="w-100 h-100 d-flex flex-row justify-content-between">
                <div>

                </div>
                <div class="h-100 d-flex flex-row justify-content-around nav-links align-items-center">
                    <a href="">Find a Store |</a>
                    <a href="">Help |</a>
                    <a href="">Join Us |</a>
                    <a href="">Sign In</a>
                </div>
            </div>
        </nav>
        <div class="main-nav w-100 shadow-sm p-3 d-flex flex-row justify-content-between">
            <div class="h-100 main-nav-logo pl-4 pr-4">
                <!-- <a href=""><img src="img/nike logo white.png" alt="" srcset="" class="" style="width: 10%; height: 75%; object-fit: cover; "></a> -->
            </div>
            <div class="h-100 main-nav-links d-flex flex-row justify-content-around align-items-center">
                <a href="#" class="h-100 p-2" id="m_link_1">Sale</a>
                <a href="#" class="h-100 p-2" id="m_link_2">New & Featured</a>
                <a href="#" class="h-100 p-2" id="m_link_3">Men</a>
                <a href="#" class="h-100 p-2" id="m_link_4">Women</a>
                <a href="#" class="h-100 p-2" id="m_link_5">Kids</a>
                <a href="#" class="h-100 p-2" id="m_link_6">Customise</a>
                <a href="#" class="h-100 p-2" id="m_link_7">SNKRS</a>
            </div>
            <div class="h-100 main-nav-search d-flex justify-content-center">
                <div class="h-100 d-flex flex-row justify-content-around" style="width: 60%">
                  <!-- search -->
                  <div class="input-group rounded h-100" style="width: 70%;">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon" style="background-color: inherit">
                      <i class="fas fa-search" ></i>
                    </span>
                  </div>
                  <!-- likes -->
                  <div class="likes h-100 d-flex align-items-center" style="width: 10%">
                    <i class="fa-regular fa-heart" title="My Likes" class="h-100" style=" font-size: 1.4em; cursor:pointer"></i>
                  </div>
                  <!-- cart -->
                  <div class="cart h-100 d-flex align-items-center" style="width: 10%">
                    <i class="fa-solid fa-cart-shopping" title="My Cart" class="h-100" style=" font-size: 1.4em; cursor:pointer"></i>
                  </div>
                </div>
            </div>
        </div>
        <div class="main-nav-menus w-100 h-50 shadow position-fixed" id="main-nav-menu">
            <div class="w-100 h-100 ">
                <div class="h-75 mx-auto" style="width: 60%">
                    <!-- table 1 -->
                    <table class="table table-borderless w-100" id="tb_link_1" >
                        <thead>
                            <th>Sale</th>
                            <th>Shop by Discount</th>
                            <th>Men's Sale</th>
                            <th>Women's Sale</th>
                            <th>Kid's Sale</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#">Shop All Sale</a></td>
                            <td><a href="#">Shop All Sale</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Shoes Sale</a></td>
                            <td><a href="#">50% off and up</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Clothing</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Clothing Sale</a></td>
                            <td><a href="#">40% off and up</a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Accessories  & Equipment Sale</a></td>
                            <td><a href="#">30% off and up</a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                          </tr>
                        </tbody>
                    </table>

                    <!-- table 2 -->
                    <table class="table table-borderless w-100" id="tb_link_2" >
                        <thead>
                            <th>New & Featured</th>
                            <th>Shop Icons</th>
                            <th>New for Men</th>
                            <th>New for Women</th>
                            <th>New for Kids</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#">Shop All Sale</a></td>
                            <td><a href="#">Shop All Sale</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Shoes Sale</a></td>
                            <td><a href="#">50% off and up</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Clothing</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Clothing Sale</a></td>
                            <td><a href="#">40% off and up</a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Accessories  & Equipment Sale</a></td>
                            <td><a href="#">30% off and up</a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                          </tr>
                        </tbody>
                    </table>

                    <!-- table 3 -->
                    <table class="table table-borderless w-100" id="tb_link_3" >
                        <thead>
                            <th>Featured</th>
                            <th>Shoes</th>
                            <th>Clothing</th>
                            <th>Shop by Sport</th>
                            <th>Jordan</th>
                            <th>Accessories & Equiment</th>
                            <th>Shop by Brand</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#">Shop All Sale</a></td>
                            <td><a href="#">Shop All Sale</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Shoes Sale</a></td>
                            <td><a href="#">50% off and up</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Clothing Sale</a></td>
                            <td><a href="#">40% off and up</a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Accessories  & Equipment Sale</a></td>
                            <td><a href="#">30% off and up</a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                        </tbody>
                    </table>

                    <!-- table 4 -->
                    <table class="table table-borderless w-100" id="tb_link_4" >
                        <thead>
                            <th>Featured</th>
                            <th>Shoes</th>
                            <th>Clothing</th>
                            <th>Shop by Sport</th>
                            <th>Accessories & Equipment</th>
                            <th>Shop By Brand</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#">Shop All Sale</a></td>
                            <td><a href="#">Shop All Sale</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Shoes Sale</a></td>
                            <td><a href="#">50% off and up</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Clothing</a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Clothing Sale</a></td>
                            <td><a href="#">40% off and up</a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Accessories  & Equipment Sale</a></td>
                            <td><a href="#">30% off and up</a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#"></a></td>
                            <td><a href="#">Shoes</a></td>
                          </tr>
                        </tbody>
                    </table>

                    <!-- table 5 -->
                    <div id="tb_link_5" class="d-flex flex-column p-3">
                      <table class="table table-borderless w-100" id="tb_link_5a">
                          <thead>
                              <th>Featured</th>
                              <th>Boy's Shoes</th>
                              <th>Girl's Shoes</th>
                              <th>Accessories & Equipment</th>
                              
                          </thead>
                          <tbody>
                            <tr>
                              <td><a href="#">Shop All Sale</a></td>
                              <td><a href="#">Shop All Sale</a></td>
                              <td><a href="#">Shoes</a></td>
                              <td><a href="#">Shoes</a></td>
                              
                            </tr>
                            <tr>
                              <td><a href="#">Shoes Sale</a></td>
                              <td><a href="#">50% off and up</a></td>
                              <td><a href="#">Clothing</a></td>
                              <td><a href="#">Clothing</a></td>
                              
                            </tr>
                            <tr>
                              <td><a href="#">Clothing Sale</a></td>
                              <td><a href="#">40% off and up</a></td>
                              <td><a href="#"></a></td>
                              <td><a href="#"></a></td>
                            </tr>
                            <tr>
                              <td><a href="#">Accessories  & Equipment Sale</a></td>
                              <td><a href="#">30% off and up</a></td>
                              <td><a href="#"></a></td>
                              <td><a href="#"></a></td>
                            </tr>
                          </tbody>
                      </table>
                      <table class="table table-borderless w-100" id="tb_link_5b">
                          <thead>
                              <th>Kids by Age</th>
                              <th>Boy's Clothing</th>
                              <th>Girl's Clothing</th>
                              <th>Shop by Sport</th>
                              
                          </thead>
                          <tbody>
                            <tr>
                              <td><a href="#">Shop All Sale</a></td>
                              <td><a href="#">Shop All Sale</a></td>
                              <td><a href="#">Shoes</a></td>
                              <td><a href="#">Shoes</a></td>
                              
                            </tr>
                            <tr>
                              <td><a href="#">Shoes Sale</a></td>
                              <td><a href="#">50% off and up</a></td>
                              <td><a href="#">Clothing</a></td>
                              <td><a href="#">Clothing</a></td>
                              
                            </tr>
                            <tr>
                              <td><a href="#">Clothing Sale</a></td>
                              <td><a href="#">40% off and up</a></td>
                              <td><a href="#"></a></td>
                              <td><a href="#"></a></td>
                            </tr>
                            <tr>
                              <td><a href="#">Accessories  & Equipment Sale</a></td>
                              <td><a href="#">30% off and up</a></td>
                              <td><a href="#"></a></td>
                              <td><a href="#"></a></td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
          <div class="w-100 mt-5" style="height: 75%">
              <div class="mx-auto h-100" style="width: 85%">
                  <div id="carouselExampleIndicators" class="carousel slide w-100 h-100" data-ride="carousel">
                      <!-- <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol> -->
                      <div class="carousel-inner w-100 h-100">
                        <div class="carousel-item active">
                          <img class="d-block" src="img/img-content-1.jpg" alt="First slide" style="object-fit: cover">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block" src="img/img-content-2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block" src="img/img-content-3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block" src="img/img-content-4.jpg" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
          </div>
          <div class="features w-100 h-75">
              <div class="container-fluid h-100 pt-3" style="width: 85%">
                  <div class="feature-title w-100 d-flex justify-content-center" style="height: 10%">
                      <h4 style="font-size: 2.3em; letter-spacing: 2px" class="font-italic">Featured</h4>
                  </div>
                  <div class="w-100 d-flex flex-row justify-content-around" style="height:90%">
                      <div class="card h-100 border d-flex flex-column justify-content-between" style="width: 30%">
                        <div class="w-100 card p-3 border" style="height: 90%">

                        </div>
                        <div class="w-100 border card-title d-flex justify-content-center align-items-center" style="height: 10%">
                            <h6 style="font-size: 1.4em">Title</h6>
                        </div>
                      </div>
                      <div class="card h-100 border d-flex flex-column justify-content-between" style="width: 30%">
                        <div class="w-100 card p-3 border" style="height: 90%">

                        </div>
                        <div class="w-100 border card-title d-flex justify-content-center align-items-center" style="height: 10%">
                            <h6 style="font-size: 1.4em">Title</h6>
                        </div>
                      </div>
                      <div class="card h-100 border d-flex flex-column justify-content-between" style="width: 30%">
                        <div class="w-100 card p-3 border" style="height: 90%">

                        </div>
                        <div class="w-100 border card-title d-flex justify-content-center align-items-center" style="height: 10%">
                            <h6 style="font-size: 1.4em">Title</h6>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="shop-now w-100 mt-3" style="height: 40%">
              <div class="container-fluid h-100  p-3" style="width: 85%">
                  <div class="shop-now-typewriter pl-3 pt-2 ">
                      <h6 style="font-size: 3em;" class="font-italic">Explore G-SHOP for
                        <span class="txt-type" data-wait="2000" data-words='["Fashion", "Design", "Daily Use"]'></span>
                      </h6>
                  </div>
                  <div class="w-100 mt-5">
                      <p style="text-align:center;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi ea quaerat iusto voluptatem omnis nostrum facere fugit dignissimos id, eos voluptatum odit necessitatibus quo recusandae praesentium officia error similique magni itaque voluptates eius eligendi possimus delectus magnam? Omnis, reprehenderit cumque neque saepe voluptates porro nobis ipsam! Doloribus aut odit quibusdam nobis exercitationem veritatis ad quaerat eum maxime consectetur mollitia, officia itaque ex. Similique, laudantium quibusdam.</p>
                  </div>
                  <div class="shop-now-btn w-100 d-flex justify-content-center mt-5" style="height: 15%">
                    <button class="btn d-flex justify-content-center align-items-center" style="width: 7%; height: 100%; background-color: #000; color: #fff;">Shop Now</button>
                  </div>
              </div>
          </div>
          <div class="new-arrival w-100 h-75">
              <div class="container-fluid h-100 p-5 d-flex flex-column justify-content-between" style="width: 85%">
                  <div class="w-100 d-flex flex-row justify-content-between p-3" style="height: 45%">
                      <div class="card h-100 border" style="width: 48%"></div>
                      <div class="card h-100 border" style="width: 48%"></div>
                  </div>
                  <div class="w-100 d-flex flex-row justify-content-between p-3" style="height: 45%">
                      <div class="card h-100 border" style="width: 48%"></div>
                      <div class="card h-100 border" style="width: 48%"></div>
                  </div>
                  <div style="height: 10%" class="w-100 d-flex flex-row justify-content-between pr-3 pl-3">
                      <div class="w-75 h-100 d-flex justify-content-start align-items-center">
                        <h4 style="font-size: 2.3em; letter-spacing: 2px" class="font-italic">Just In</h4>
                      </div>
                      <div class="w-25 h-100 d-flex justify-content-end align-items-center ">
                          <h6 class="font-italic" >More new arrival?<a href="#"> Click here <span><i class="fa-solid fa-arrow-right"></i></a></span></h6>
                      </div>
                  </div>
              </div>
          </div>
          <div class="shop-now w-100 mt-3" style="height: 15%">
              <div class="container-fluid h-100 d-flex justify-content-center flex-column" style="width: 85%">
                  <p style="text-align:center;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae minima unde cupiditate quae porro sapiente labore alias itaque delectus tenetur dignissimos, dolorum quasi. Cum velit asperiores quibusdam sed deserunt ducimus placeat adipisci laborum beatae, tempora eos quisquam officiis quo molestiae assumenda est fuga omnis voluptatem itaque dolorem ratione! Earum?</p>
                  <div class="d-flex justify-content-center w-100 shop-now-btn" style="height: 35%">
                    <button class="btn d-flex justify-content-center align-items-center" style="width: 7%; height: 100%; background-color: #000; color: #fff;">Shop Now</button>
                  </div>
              </div>
          </div>
          <div class="trends w-100 mt-5" style="height: 60%">
              <div class="container-fluid h-100 " style="width: 85%">
                  <div class="trends-title  w-100 d-flex justify-content-center align-items-center" style="height: 13%">
                    <h4 style="font-size: 2.3em; letter-spacing: 2px" class="font-italic">Trend Alert</h4>
                  </div>
                  <div class="trend-container w-100  d-flex flex-row justify-content-around" style="height: 87%">
                      <div class="card h-100 p-3 d-flex flex-column justify-content-between" style="width: 28%">
                          <div class="w-100 card" style="height: 78%">

                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between" style="height: 20%">
                              <div class="trend-container-title w-75 h-100 d-flex flex-column pl-2">
                                    <span style="font-weight: bold; font-size: 1.2em">Name</span>
                                    <span style="color: gray; font-size: 0.9em; font-weight: bold;">Description</span>
                                    <span style="color: gray; font-size: 0.9em; font-weight: bold;">Price</span>
                              </div>
                              <div class="trend-container-btn w-25 h-100 d-flex align-items-center">
                                  <button class="btn d-flex align-items-center justify-content-center" style="background-color: #000; height: 50%; color: white">Buy Now</button>
                              </div>

                          </div>
                      </div>
                      <div class="card h-100 p-3 d-flex flex-column justify-content-between" style="width: 28%">
                          <div class="w-100 card" style="height: 80%">

                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between" style="height: 20%">
                              <div class="trend-container-title w-75 h-100 d-flex flex-column pl-2">
                                  <span style="font-weight: bold; font-size: 1.2em">Name</span>
                                  <span style="color: gray; font-size: 0.9em; font-weight: bold;">Description</span>
                                  <span style="color: gray; font-size: 0.9em; font-weight: bold;">Price</span>
                              </div>
                              <div class="trend-container-btn w-25 h-100 d-flex align-items-center">
                                  <button class="btn d-flex align-items-center justify-content-center" style="background-color: #000; height: 50%; color: white">Buy Now</button>
                              </div>

                          </div>
                      </div>
                      <div class="card h-100 p-3 d-flex flex-column justify-content-between" style="width: 28%">
                          <div class="w-100 card" style="height: 80%">

                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between" style="height: 20%">
                              <div class="trend-container-title w-75 h-100 d-flex flex-column pl-2">
                                  <span style="font-weight: bold; font-size: 1.2em">Name</span>
                                  <span style="color: gray; font-size: 0.9em; font-weight: bold;">Description</span>
                                  <span style="color: gray; font-size: 0.9em; font-weight: bold;">Price</span>
                              </div>
                              <div class="trend-container-btn w-25 h-100 d-flex align-items-center">
                                  <button class="btn d-flex align-items-center justify-content-center" style="background-color: #000; height: 50%; color: white">Buy Now</button>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="semi-footer w-100 h-25 mt-5">
              <div class="container-fluid h-100" style="width: 79%">
                  <table class="mx-auto table table-borderless" id="semi-footer-table" style="width: 70%">
                        <thead>
                          <th>Iconic</th>
                          <th>Best Buy</th>
                          <th>Sale</th>
                          <th>Most Likes</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                            <td><a href="#">Sample</a></td>
                          </tr>
                        </tbody>
                  </table>
              </div>
          </div>
          <footer class="w-100 shadow" style="height: 25%; background-color: #000;">
              <div class="h-100 pr-3 pt-3 pl-3 container-fluid d-flex flex-column justify-content-between" style="width: 85%">
                  <div class="h-75 w-100 d-flex flex-row justify-content-between">
                      <div class="footer-menu w-50 h-100 d-flex flex-row justify-content-around">
                          <div class="h-100 d-flex justify-content-center " style="width: 30%">
                              <ul class="mt-2">
                                <li><a href="" style="color:#fff; font-weight: bold;">Sample</a></li>
                                <li><a href="" style="color:#fff; font-weight: bold;">Sample</a></li>
                                <li><a href="" style="color:#fff; font-weight: bold;">Sample</a></li>
                                <li><a href="" style="color:#fff; font-weight: bold;">Sample</a></li>
                              </ul>
                          </div>
                          <div class="h-100 d-flex justify-content-center " style="width: 30%">
                              <ul class="mt-2">
                                <li><a href="" style="color:#fff; font-weight: bold;">Sample</a></li>
                                <li><a href="" style="color:gray; font-size: 0.9em;">Sample</a></li>
                                <li><a href="" style="color:gray; font-size: 0.9em;">Sample</a></li>
                                <li><a href="" style="color:gray; font-size: 0.9em;">Sample</a></li>
                              </ul>
                          </div>
                          <div class="h-100 d-flex justify-content-center " style="width: 30%">
                              <ul class="mt-2">
                                <li><a href="" style="color:#fff; font-weight: bold;">Sample</a></li>
                                <li><a href="" style="color:gray; font-size: 0.9em;">Sample</a></li>
                                <li><a href="" style="color:gray; font-size: 0.9em;">Sample</a></li>
                                <li><a href="" style="color:gray; font-size: 0.9em;">Sample</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="w-50 h-100 d-flex flex-row justify-content-between">
                          <div class="w-50 h-100"></div>
                          <div class="w-50 h-100 d-flex justify-content-center" id="bouncing-out">
                              <div class="h-100 d-flex flex-row justify-content-around mt-3" style="width: 75%">
                                  <div class="w-25 h-100" id="fb">
                                    <div class="d-flex align-items-center justify-content-center" style="background-color: gray; border-radius: 50%; width: 55%; height: 25%; cursor: pointer;" >
                                      <a href="#"><i class="fa-brands fa-facebook-f" style="font-size: 1.3em"></i></a>
                                    </div>
                                  </div>
                                  <div class="w-25 h-100" id="twt">
                                    <div class="d-flex align-items-center justify-content-center" style="background-color: gray; border-radius: 50%; width: 55%; height: 25%; cursor: pointer;" >
                                      <a href="#"><i class="fa-brands fa-twitter" style="font-size: 1.3em"></i></a>
                                    </div>
                                  </div>
                                  <div class="w-25 h-100" id="ig">
                                    <div class="d-flex align-items-center justify-content-center" style="background-color: gray; border-radius: 50%; width: 55%; height: 25%; cursor: pointer;" >
                                      <a href="#"><i class="fa-brands fa-instagram" style="font-size: 1.3em"></i></a>
                                    </div>
                                  </div>
                                  <div class="w-25 h-100" id="yt">
                                    <div class="d-flex align-items-center justify-content-center" style="background-color: gray; border-radius: 50%; width: 55%; height: 25%; cursor: pointer;" >
                                      <a href="#"><i class="fa-brands fa-youtube" style="font-size: 1.3em"></i></a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="h-25 w-100 d-flex justify-content-center align-items-center">
                      <p style="color: white; font-size:0.8em" class="mt-3">Philippines, &#169; 2023 G-SHOP, All Rights Reserved.</p>
                  </div>
              </div>
          </footer>
    </div>


    <script>
      fb = document.getElementById("fb");
      ig = document.getElementById("ig");
      twt = document.getElementById("twt");
      yt = document.getElementById("yt");
      bounceOut = document.getElementById("bouncing-out");

      fb.addEventListener("mouseover", function(){
          fb.classList.add("bouncing-icon");
          ig.classList.remove("bouncing-icon");
          twt.classList.remove("bouncing-icon");
          yt.classList.remove("bouncing-icon");
      });

      
      ig.addEventListener("mouseover", function(){
          fb.classList.remove("bouncing-icon");
          ig.classList.add("bouncing-icon");
          twt.classList.remove("bouncing-icon");
          yt.classList.remove("bouncing-icon");
      });

      
      twt.addEventListener("mouseover", function(){
          fb.classList.remove("bouncing-icon");
          ig.classList.remove("bouncing-icon");
          twt.classList.add("bouncing-icon");
          yt.classList.remove("bouncing-icon");
      });

      
      yt.addEventListener("mouseover", function(){
          fb.classList.remove("bouncing-icon");
          ig.classList.remove("bouncing-icon");
          twt.classList.remove("bouncing-icon");
          yt.classList.add("bouncing-icon");
      });

      bounceOut.addEventListener("mouseout", function(){
          fb.classList.remove("bouncing-icon");
          ig.classList.remove("bouncing-icon");
          twt.classList.remove("bouncing-icon");
          yt.classList.remove("bouncing-icon");
      });

    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
  </body>
</html>