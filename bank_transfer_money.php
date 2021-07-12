<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/bank_table.css">
    <link rel="stylesheet" type="text/css" href="css/bank_navbar.css">
    

    <style type="text/css">
      button{
        transition: 1.2s;
      }
      button:hover{
        background-color:blue;
        color: #fff;
      }
      h2{
          border-bottom:2px solid black;
          word-spacing:3px;
          
      }
    </style>
</head>
<style>
             body{
               background-image: url("image/paper.jpg");
               background-color: #cccccc;
             }
             </style>
<?php
    include 'bank_connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'bank_navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;">List Of Registered Users</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black; border-width:4px;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Email</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <!-- <th scope="col" class="text-center py-2">Time</th> -->
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                     while ($rows = mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <!-- <td class="py-2"><?php echo $rows['time']?></td> -->

                        <td><a href="bank_transaction_to.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #0062cc; width:80%; margin-left:15px;">Make <br> Transaction</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
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