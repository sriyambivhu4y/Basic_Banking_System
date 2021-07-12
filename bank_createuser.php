
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create User</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="css/bank_table.css">
<link rel="stylesheet" type="text/css" href="css/bank_navbar.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/bank_user.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/bank_style.css?v=<?php echo time(); ?>">

</head>

<body>
<?php
include 'bank_connection.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$balance=$_POST['balance'];
$sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
$result=mysqli_query($conn,$sql);
if($result){
echo "<script> alert('Account Created Sucessfully!');
window.location='bank_transfer_money.php';
</script>";

}
}
?>

<?php
include 'bank_navbar.php';
?>
</head>
	<body>
<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left">
			
			<h3>WELCOME!</h3>
			<img src="image/bharat.png" alt=""/>
			<p>safe place to deposite Money...</p>
			<a href="bank_users.php" class="users">All Users</a>  <br/>
		</div>

<div class="col-md-9 register-right">
	
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		<h1 class="register-heading";">Create Account</h1>
		
		<form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"    method="POST">





         <style>
         body {
          background-image: url('image/bharat.png');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
         }
         </style>
			<div class="row register-form ">
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter your name *" name="name" value="" required/>
					</div>
					
					<div class="form-group">
						<input type="tel" class="form-control" placeholder="Email*" name="email" value="" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder=" Balance *" name="balance" value="" required/>
					</div>
						<input type="submit" class="btnRegister"  name="submit" value="Create"/>
						<input type="reset" class="btnRegister"  name="submit" value="Reset"/>
				</div>
			</div>
			

		</form>
	</div>
</div>
</div>
	</div>
</div>


	</body>
</html>



<footer class="text-center mt-5 py-3">
        <p>Copyright&copy; 2021 . All rights Reserved.</p>
          <a href="https://twitter.com/BivhuSriyam" class="twitter"><i class="bx bxl-twitter footer-link"></i></a>
          <a href="https://www.facebook.com/sriyambivhu" class="facebook"><i class="bx bxl-facebook footer-link"></i></a>
          <a href="https://www.instagram.com/sriyambivhu4y/" class="instagram"><i class="bx bxl-instagram footer-link"></i></a>
          <a href="https://github.com/sriyambivhu4y" class="github "><i class="bx bxl-github footer-link"></i></a>
          <a href="https://www.linkedin.com/in/sriyam-bivhu-b850b9171/" class="linkedin "><i class="bx bxl-linkedin footer-link"></i></a>
      
      </footer>
      
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

