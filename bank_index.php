<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bank_style.css">
    <link rel="stylesheet" type="text/css" href="css/bank_navbar.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <title>Basic-Banking-System</title>
  </head>

  <body>
  <?php
  include 'bank_navbar.php';
  ?>
  
      <div class="container-fluid">


      <!--##################### Introduction section #######################-->



            <div class="row intro py-1" style="background-color :#gray ;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" >
                <h1 style="font-size:400%;"> BHARAT BANK</h1>
                  <p></p>
              <div class="photo">
                <img  src="image/bharat.png" width="80" alt="" class=" d-inline-block align-right mr-2 ">
              </div>   
                  <p>safe place to deposite money!!</p>
                 
                  <?php
                   include "bank_slide.php";

                  ?>
                  
                

                
                   <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="image/user.jpg" class="img-fluid" style="width:70%;">
                    <br>
                    <a href="bank_createuser.php"><button style="background-color :#566573; margin-top: 7px;">CREATE  ACCOUNT</button></a>
                  </div> 


                  <div class="col-md act">
                    <img src="image/transition1.jpg" class="img-fluid"style="width:70%;">
                    <br>
                    <a href="bank_transfer_money.php"><button style="background-color : #566573; margin-top: 7px;">MAKE TRANSACTION</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="image/bank.jpg" class="img-fluid" style="width:70%;">
                    <br>
                    <a href="bank_transaction_history.php"><button style="background-color : #566573; margin-top: 7px;">PAYMENT HISTORY</button></a>
                  </div>
            </div>
      </div>
      
      <footer class="text-center mt-5 py-3">
        <p> Copyright&copy; 2021 . All rights Reserved. </p>
          <a href="https://twitter.com/BivhuSriyam" class="twitter"><i class="bx bxl-twitter footer-link">
          </i></a>
          <a href="https://www.facebook.com/sriyambivhu" class="facebook"><i class="bx bxl-facebook footer-link"></i></a>
          <a href="https://www.instagram.com/sriyambivhu4y/" class="instagram"><i class="bx bxl-instagram footer-link"></i></a>
          <a href="https://github.com/sriyambivhu4y" class="github "><i class="bx bxl-github footer-link"></i></a>
          <a href="https://www.linkedin.com/in/sriyam-bivhu-b850b9171/" class="linkedin "><i class="bx bxl-linkedin footer-link"></i></a>
      
      </footer>
      
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>