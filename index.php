<?php
  if(isset($_GET["logout"])) {
    session_unset();
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My own CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  </head>
  <body>
  
    <div class="mylogin d-flex">
      <div class="flexhz"></div>
      <div class="cont_1 d-flex flex-column">
        <div class="flexvt"></div>
        <div class="blur myshadow p-4 rounded">
          <div>
            <h1 class="pb-5">Login</h1>
            <form action="index.php" method="get" class="d-flex flex-column">
              <input id="input" name="input" type="text" placeholder="name">
              <div class="d-flex">
                <div class="flexhz"></div>
                <input id="submit" name="submit" type="submit" value="Login" class="p-3 mt-3">
                <div class="flexhz"></div>
              </div>
            </form>
          </div>        
        </div>
        <div class="flexvt"></div>
      </div>
      <div class="flexhz"></div>
    </div>

    <div class="col-12 col-sm-12 col-md-11 col-lg-9 col-xl-8 container">
      <h2 class="text-center p-3">
        <?php 
            if (@$_GET["input"] != "") {
              session_start();
              $_SESSION["user"] = @$_GET["input"];
              echo "Welcome, " . $_SESSION["user"];
            } else if(@$_GET["input"] == "") {
              echo "Welcome, anonymous user";
            }
        ?>
      </h2>
      <?php
        if(@$_GET["input"] != "") {
      ?>
      <form action="index.php" method="get" class="d-flex justify-content-center p-2">
        <input id="logoutbtn" name="logout" type="submit" value="Logout" class="p-1">
      </form>
      <?php
        }
      ?>
      <div class="cart">
        <div class="cart_info">
          <div class="shopping_cart">
            <table  class="table" id="mytable">
              <thead class="thead-dark">
                <tr>
                  <th>GPU</th>
                  <th>Price(&euro;)</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody id="mybody">

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="item nodec w-33 h-100 position-relative">
          <div class="m-3 myzoom border border-secondary rounded myshadow">
            <div class="p-3 d-flex flex-column">
              <h2 id="gpu-1" class="text-center">Gigabyte <br>GTX 1050TI</h2>
              <img src="images/1050ti.jpg" alt="GTX_1080_TI">
              <p id="price-1" class="text-center price">350,- EUR</p>
            </div>
            <div class="specs m-3 p-1">
              <div onclick="show(1);" class="mybtn d-flex">
                <div><i class="fas fai fai-1 fa-chevron-right"></i></div>
                <h3 class="ml-1">Show product specifications</h3>
              </div>
              <div class="clear_desc"></div>
              <div class="desc desc-1">
                <div class="clear_desc"></div>
                <p class="pb-2">- GPU chip: NVIDIA GeForce GTX 1050 Ti</p>
                <p class="pb-2">- Memory: 4 GB (GDDR5, 128 bit)</p>
                <p class="pb-2">- Slot usage: 2 Slots</p>
                <p>             - Core clock speed: 1300MHz</p>
                <p>             - Core clock speed: 1100MHz</p>
              </div>
              <?php 
                if(isset($_SESSION["user"])) {
              ?>
              <div><button class="cartbtn mt-2" onclick="addToCart(1); count();">Add to cart</button></div>
              <?php 
                } else {
              ?>
              <div><p class="font-weight-bold mt-2">You need to be logged in to add something to your cart</p></div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
        <div class="item nodec w-33 h-100">
          <div class="m-3 myzoom border border-secondary rounded myshadow">
            <div class="p-3 d-flex flex-column">
              <h2 id="gpu-2" class="text-center">Gigabyte <br>RTX 2070 mini</h2>
              <img src="images/2070mini.jpg" alt="RTX_2070_MINI">
              <p id="price-2" class="text-center price">480,- EUR</p>
            </div>
            <div class="specs m-3 p-1">
              <div onclick="show(2);" class="mybtn d-flex">
              <div><i class="fas fai fai-2 fa-chevron-right"></i></div>
                <h3 class="ml-1">Show product specifications</h3>
              </div>
              <div class="clear_desc"></div>
              <div class="desc desc-2">
                <div class="clear_desc"></div>
                <p class="pb-2">- GPU chip: NVIDIA GeForce RTX 2070</p>
                <p class="pb-2">- Memory: 8 GB (GDDR6, 256 bit)</p>
                <p class="pb-2">- Slot usage: 2 Slots</p>
                <p>             - Core clock speed: 1200MHz</p>
                <p>             - Core clock speed: 1024MHz</p>
              </div>
              <?php 
                if(isset($_SESSION["user"])) {
              ?>
              <div><button class="cartbtn mt-2" onclick="addToCart(2);">Add to cart</button></div>
              <?php 
                } else {
              ?>
              <div><p class="font-weight-bold mt-2">You need to be logged in to add something to your cart</p></div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
        <div class="item nodec w-33 h-100">
          <div class="m-3 myzoom border border-secondary rounded myshadow">
            <div class="p-3 d-flex flex-column">
              <h2 id="gpu-3" class="text-center">Gigabyte RTX <br>2080 WINDFORCE</h2>
              <img src="images/2080_WINDFORCE.jpg" alt="RTX_2080_WINDFORCE">
              <p id="price-3" class="text-center price">500,- EUR</p>
            </div>
            <div class="specs m-3 p-1">
              <div onclick="show(3);" class="mybtn d-flex">
              <div><i class="fas fai fai-3 fa-chevron-right"></i></div>
                <h3 class="ml-1">Show product specifications</h3>
              </div>
              <div class="clear_desc"></div>
              <div class="desc desc-3">
                <div class="clear_desc"></div>
                <p class="pb-2">- GPU chip: NVIDIA GeForce RTX 2080</p>
                <p class="pb-2">- Memory: 8 GB (GDDR6, 256 bit)</p>
                <p class="pb-2">- Slot usage: 2 Slots</p>
                <p>             - Core clock speed: 1445MHz</p>
                <p>             - Core clock speed: 1200MHz</p>
              </div>
              <?php 
                if(isset($_SESSION["user"])) {
              ?>
              <div><button class="cartbtn mt-2" onclick="addToCart(3);">Add to cart</button></div>
              <?php 
                } else {
              ?>
              <div><p class="font-weight-bold mt-2">You need to be logged in to add something to your cart</p></div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-2">
      <div class="item nodec w-33 h-100">
          <div class="m-3 myzoom border border-secondary rounded myshadow">
            <div class="p-3 d-flex flex-column">
              <h2 id="gpu-4" class="text-center">Phantom ASRock <br>Radeon VII</h2>
              <img src="images/Radeon_VII.jpg" alt="ASRock_Radeon_VII">
              <p id="price-4" class="text-center price">480,- EUR</p>
            </div>
            <div class="specs m-3 p-1">
              <div onclick="show(4);" class="mybtn d-flex">
              <div><i class="fas fai fai-4 fa-chevron-right"></i></div>
                <h3 class="ml-1">Show product specifications</h3>
              </div>
              <div class="clear_desc"></div>
              <div class="desc desc-4">
                <div class="clear_desc"></div>
                <p class="pb-2">- GPU chip: AMD Radeon VII</p>
                <p class="pb-2">- Memory: 16 GB (HBM2, 4096 bit)</p>
                <p class="pb-2">- Slot usage: 2 Slots</p>
                <p>             - Core clock speed: 1500MHz</p>
                <p>             - Core clock speed: 1200MHz</p>
              </div>
              <?php 
                if(isset($_SESSION["user"])) {
              ?>
              <div><button class="cartbtn mt-2" onclick="addToCart(4);">Add to cart</button></div>
              <?php 
                } else {
              ?>
              <div><p class="font-weight-bold mt-2">You need to be logged in to add something to your cart</p></div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
        <div class="item nodec w-33 h-100">
          <div class="m-3 myzoom border border-secondary rounded myshadow">
            <div class="p-3 d-flex flex-column">
              <h2 id="gpu-5" class="text-center">Gigabyte GeForce <br>GT 1030</h2>
              <img src="images/1030.jpg" alt="GT_1030">
              <p id="price-5" class="text-center price">90,- EUR</p>
            </div>
            <div class="specs m-3 p-1">
              <div onclick="show(5);" class="mybtn d-flex">
              <div><i class="fas fai fai-5 fa-chevron-right"></i></div>
                <h3 class="ml-1">Show product specifications</h3>
              </div>
              <div class="clear_desc"></div>
              <div class="desc desc-5">
                <div class="clear_desc"></div>
                <p class="pb-2">- GPU chip: NVIDIA GeForce GT 1030</p>
                <p class="pb-2">- Memory: 2 GB (GDDR5, 64 bit)</p>
                <p class="pb-2">- Slot usage: 1 Slot</p>
                <p>             - Core clock speed: 650MHz</p>
                <p>             - Core clock speed: 600MHz</p>
              </div>
              <?php 
                if(isset($_SESSION["user"])) {
              ?>
              <div><button class="cartbtn mt-2" onclick="addToCart(5);">Add to cart</button></div>
              <?php 
                } else {
              ?>
              <div><p class="font-weight-bold mt-2">You need to be logged in to add something to your cart</p></div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
        <div class="item nodec w-33 h-100">
          <div class="m-3 myzoom border border-secondary rounded myshadow">
            <div class="p-3 d-flex flex-column">
              <h2 id="gpu-6" class="text-center">Gigabyte GeForce <br>GTX 1650</h2>
              <img src="images/1650.jpg" alt="GTX_1650">
              <p id="price-6" class="text-center price">175,- EUR</p>
            </div>
            <div class="specs m-3 p-1">
              <div onclick="show(6);" class="mybtn d-flex">
              <div><i class="fas fai fai-6 fa-chevron-right"></i></div>
                <h3 class="ml-1">Show product specifications</h3>
              </div>
              <div class="clear_desc"></div>
              <div class="desc desc-6">
                <div class="clear_desc"></div>
                <p class="pb-2">- GPU chip: NVIDIA GeForce GTX 1650</p>
                <p class="pb-2">- Memory: 4 GB (GDDR5, 128 bit)</p>
                <p class="pb-2">- Slots usage: 2 Slots</p>
                <p>             - Core clock speed: 950MHz</p>
                <p>             - Core clock speed: 900MHz</p>
              </div>
              <?php 
                if(isset($_SESSION["user"])) {
              ?>
              <div><button class="cartbtn mt-2" onclick="addToCart(6);">Add to cart</button></div>
              <?php 
                } else {
              ?>
              <div><p class="font-weight-bold mt-2">You need to be logged in to add something to your cart</p></div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>  
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script>
    <?php
      if (@$_GET["input"] != "") {
        echo '$(".mylogin").addClass("d-none");
              $(".mylogin").removeClass("d-flex")';
      }
    ?>
    </script>
  </body>
</html>