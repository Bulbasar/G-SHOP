<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/803701e46b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styles.scss">

    <title>Landing Page</title>
  </head>
  <body>

  <style>

  #search-addon i{
      color: #fff; cursor: pointer; font-size: 1.4em;
  }

  #search-addon .fa-search:hover{
    color: orangered;
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
              <div class="container-fluid h-100 border border-dark pt-3" style="width: 85%">
                  <div class="feature-title w-100 d-flex justify-content-center" style="height: 10%">
                      <h4 style="font-size: 2.3em; letter-spacing: 2px">Featured</h4>
                  </div>
                  <div class="w-100 border d-flex flex-row justify-content-around" style="height:90%">
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
          <br>
    </div>


    <script>
      m_link_1 = document.getElementById("m_link_1");
      m_link_2 = document.getElementById("m_link_2");
      m_link_3 = document.getElementById("m_link_3");
      m_link_4 = document.getElementById("m_link_4");
      m_link_5 = document.getElementById("m_link_5");
      m_link_6 = document.getElementById("m_link_6");
      m_link_7 = document.getElementById("m_link_7");
      tb_link_1 = document.getElementById("tb_link_1");
      tb_link_2 = document.getElementById("tb_link_2");
      tb_link_3 = document.getElementById("tb_link_3");
      tb_link_4 = document.getElementById("tb_link_4");
      tb_link_5 = document.getElementById("tb_link_5");
      tb_link_5a = document.getElementById("tb_link_5a");
      tb_link_5b = document.getElementById("tb_link_5b");
      menu = document.getElementById("main-nav-menu");

      m_link_1.addEventListener("mouseover", function() {
        menu.style.display = "block";
        tb_link_1.style.display = "table";

        tb_link_2.style.display = 'none';
        tb_link_3.style.display = 'none';
        tb_link_4.style.display = 'none';
        tb_link_5.style.display = 'none';

        tb_link_5a.style.display = "none";
        tb_link_5b.style.display = "none";
        
      });

      m_link_2.addEventListener("mouseover", function() {
        menu.style.display = "block";
        tb_link_2.style.display = "table";

        tb_link_1.style.display = 'none';
        tb_link_3.style.display = 'none';
        tb_link_4.style.display = 'none';
        tb_link_5.style.display = 'none';

        tb_link_5a.style.display = "none";
        tb_link_5b.style.display = "none";
      });
      
      m_link_3.addEventListener("mouseover", function() {
        menu.style.display = "block";
        tb_link_3.style.display = "table";

        tb_link_2.style.display = 'none';
        tb_link_1.style.display = 'none';
        tb_link_4.style.display = 'none';
        tb_link_5.style.display = 'none';

        tb_link_5a.style.display = "none";
        tb_link_5b.style.display = "none";
      });


      m_link_4.addEventListener("mouseover", function() {
        menu.style.display = "block";
        tb_link_4.style.display = "table";

        tb_link_2.style.display = 'none';
        tb_link_3.style.display = 'none';
        tb_link_1.style.display = 'none';
        tb_link_5.style.display = 'none';
        
        tb_link_5a.style.display = "none";
        tb_link_5b.style.display = "none";
      });

    
      m_link_5.addEventListener("mouseover", function() {
        menu.style.display = "block";
        // tb_link_5.style.display = "table";
        tb_link_5a.style.display = "table";
        tb_link_5b.style.display = "table";

        tb_link_2.style.display = 'none';
        tb_link_3.style.display = 'none';
        tb_link_4.style.display = 'none';
        tb_link_1.style.display = 'none';
      });

      m_link_6.addEventListener("mouseover", function() {
        menu.style.display = "none";
        tbl_link_1.style.dislay = "none";
        tbl_link_2.style.dislay = "none";
        tbl_link_3.style.dislay = "none";
        tbl_link_4.style.dislay = "none";
        tbl_link_5.style.dislay = "none";
      });

      m_link_7.addEventListener("mouseover", function() {
        menu.style.display = "none";
        tbl_link_1.style.dislay = "none";
        tbl_link_2.style.dislay = "none";
        tbl_link_3.style.dislay = "none";
        tbl_link_4.style.dislay = "none";
        tbl_link_5.style.dislay = "none";
      });

      
      menu.addEventListener("mouseover", function() {
        menu.style.display = "block";
      });

      menu.addEventListener("mouseout", function() {
        menu.style.display = "none";
        tbl_link_1.style.dislay = "none";
        tbl_link_2.style.dislay = "none";
        tbl_link_3.style.dislay = "none";
        tbl_link_4.style.dislay = "none";
        tbl_link_5.style.dislay = "none";
      });
    
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>