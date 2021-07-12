<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment history</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bank_table.css">
    <link rel="stylesheet" type="text/css" href="css/bank_navbar.css">
</head>
<body style="background-color : #EAECEE;">
<?php
include 'bank_connection.php';


?>



<?php
  include 'bank_navbar.php';
?>

	<div class="container">
        <h1 class="text-center pt-4" style="color :#000; border-bottom:2px solid black;">PAYMENT ACTIVITY</h1>
        
       <br>
       
    <div class="table-responsive-sm">
<table class="table table-hover table-dark table-striped">
<thead>
        <thead style="color : #fff;">
            <tr>
                <th class="text-center">Sno</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            $sql = "SELECT * FROM transaction";

            $query =mysqli_query($conn, $sql);           

            while ($rows = mysqli_fetch_assoc($query)) {
            
        ?>

            <tr style="color : #fff;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
            </tr> 
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>