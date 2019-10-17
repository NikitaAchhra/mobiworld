<html>
<head>
	<meta charset="utf-8">

    <meta name="description" content="Building modern Responsive website using HTML5 , CSS3, jQuery, Bootstrap and PHP!">

    <meta name="keywords" content="HTML5, CSS3, jQuery,Responsive,Bootstrap,Web Development,Modern Website">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CONTACT US</title>
	<link rel="stylesheet" href="">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    

	<link href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/contact-us.css') }}"/>
	
</head>
<body>


<section id="contact">
<?php
			$servername = "localhost";
			$username = "contact1";
			$password = "contact1";
			$dbname = "contactinfo";
			
			$name = $email =$mobileno=$comment = "";

			if(isset($_POST["submit"])){
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				$sql = "INSERT INTO contact_form1 (name,email,mobileno,comment) VALUES ('$_POST[name]', '$_POST[email]','$_POST[mobileno]','$_POST[comment]')";
				$stmt = mysqli_prepare($conn, $sql);
				mysqli_stmt_execute($stmt);
			}

?> 
<div class="bac-img">
	<div class="container">
	
  <div class="row">
    <div class=" col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
      
	
      <div class="panel panel-primary" style="align:center">
        <div class="panel-heading">
          <h4>Contact US</h4>
          </div>
          <div class="panel-body">
          <form name="form1" action="" method="post" onsubmit="return requiredinfo()">
              <div class="form-group">
              <input id="name" type="text" placeholder="Enter your Name" name="name" class="form-control"  required onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> 
              </div>
              
              <div class="form-group">
               <input type = "email" id="name1" placeholder="someone@example.com" name="email" class="form-control" required>
               <span id="emails" class="text-danger"></span>
              </div>
              
             
			  
			  <div class="form-group">
              <input type = "text" id="mobile" placeholder="enter 10 digits" name="mobileno" class="form-control" required onkeypress="return (event.charCode > 47 && 
	event.charCode < 58)">
             <span id="mobiles" class="text-danger"></span>
              
              </div> 
			  
			  <div class="form-group">
              <textarea name="comment" class="form-control" required placeholder="Message" style="resize: none"></textarea>
              </div>
			  
              
              <input type="submit" class="btn btn-primary" name="submit" value="submit" id="mySubmit">
                </form>
          
          </div>
          
        </div>
     
      </div> 
    </div>
</div>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<!-- <script src="{{ asset('/public/vendors/jquery--3.3.1.min.js')}}"></script> -->
<!-- <script src="{{ asset('/public/vendors/bootstrap/js/bootstrap.min.js')}}"></script> -->
<!-- <script src="validation.js"></script> -->
<!-- <script src="vendors/jquery/jquery-3.3.1.min.js"></script> -->
	<!-- <script src="vendors/bootstrap/js/bootstrap.min.js"></script> -->
</body>
</html>