<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>

     <style>
  /* Make the image fully responsive */
  
  }
  </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->

      

            <div class="row intro py-1" style="background-color : #85bf4b ">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">

                	<div class="col-sm-12 col-md img text-center">
                <img src="images/logo1.png" class="img-fluid pt-2" style="height: 130px; width: 130px; margin-top: -30px;" >
              </div>
                 
                  <h1 style="margin-top: 15px;">Basic Banking System</h1>
            
                </div>
              </div>
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">

                  
                  <div class="col-md act">
                    <img src="images/user.png" class="img-fluid" height="220px;" width="220px;" style="margin-top: 20px;">
                    <br>
                    <br>

                    
                    <a href="transfermoney.php"><button style="background-color : #85bf4b ;">Create User</button></a>
                  </div>


                      <div class="col-md act">
                    <img src="images/transaction.png" class="img-fluid" height="250px;" width="250px;" style="margin-top: 60px;">
                    <br>
                    <br>
                    <br>
                    
                    <a href="transfermoney.php"><button style="background-color : #85bf4b ;">Make a Transaction</button></a>
                  </div>






                  <div class="col-md act">
                    <img src="images/history.png" class="img-fluid" height="250px;" width="250px;" style="margin-top: 38px;">
                    <br>
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #85bf4b ;">Transaction History</button></a>
                  </div>
            </div>
      </div>
     <footer class="text-center mt-5 py-2">
             <p>&copy 2021. Made by <b>AKANKSHA NAIK</b> <br> The Sparks Foundation</p>
</footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>