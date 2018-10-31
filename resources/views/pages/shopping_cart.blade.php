
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Fahkwang" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>Shopping Cart</title>
  </head>
  <body >


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->





  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <i class="fas fa-leaf ml-2"></i>
  <a class="navbar-brand ml-2" href="homepage"> Micah's Tea</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown ml-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tea
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="tea_choice">Green Tea</a>
              <a class="dropdown-item" href="tea_choice">Black Tea</a>
              <a class="dropdown-item" href="tea_choice">Puerh Tea</a>
              <a class="dropdown-item" href="tea_choice">Oolong Tea</a>
              <a class="dropdown-item" href="tea_choice">White Tea</a>
            </div>
      </li>

      <li class="nav-item dropdown ml-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Teaware
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="teaware">Gaiwans</a>
              <a class="dropdown-item" href="teaware">Teapots</a>
              <a class="dropdown-item" href="teaware">Cups</a>
              <a class="dropdown-item" href="teaware">Pitchers</a>
            </div>
          </li>

          <li class="nav-item ml-3">
            <a class="nav-link" href="#">About</a>
          </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <image src="images/magnifying-glass.png" width="23px" alt="mfg" class="glass">
    </form>
    <i class="fas fa-shopping-cart mr-3 ml-5"></i>
  </div>
</nav>






<h1 class="text-center mt-5 mb-4">Cart</h1>



  <table  id="t01" align="right" class="table">
    <tbody>
    <tr class="border-bottom">
      <th class="pl-5">PRODUCT</th>
      <th>&nbsp</th>
      <th>PRICE</th>

    </tr>
    <tr class="border-bottom">
      <td ><image class="ml-4 mr-5"src="images/Assam.jpg" style="max-width:75px;">Green Tea</td>
      <td >Light Nutty Green</td>
      <td>$15.00</td>

    </tr>
    <tr>
      <td ><image class="ml-4 mr-5"src="images/Assam.jpg" style="max-width:75px;">Black Tea</td>
      <td>Malty Dark Delicious</td>
      <td>$12.00</td>

    </tr>
  </tbody>
<tfoot>




    <tr>
      <th class="border-top-0"></th>
      <th class="border-top-0">CART TOTALS</th>
      <th class="border-top-0">&nbsp</th>

    </tr>
    <tr class="border-0">
      <td class="border-top-0" >&nbsp</td>
      <td>SUBTOTAL</td>
      <td>$27.00</td>

    </tr>
    <tr>
      <td class="border-top-0">&nbsp</td>
      <td>SHIPPING</td>
      <td>$10.00</td>

    </tr>
    <tr>
      <td class="border-top-0">&nbsp</td>
      <td>TOTAL</td>
      <td>$37.00</td>

    </tr>
  </tfoot>

  </table>

  <button type="button" class="btn float-right mt-3 mr-3" >Proceed to Checkout</button>




<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="js/tempjs.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
