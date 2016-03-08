<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<title>Student Record</title>

	<link rel="stylesheet" href="assets/header-fixed.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    

</head>

<body>

<?php include 'header.php'; ?>
<style type="text/css">
.srh { margin-top:80px;}	
body { 
  background: url(bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>



<div class="header-fixed-placeholder"></div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');



		if(win.width() > 600){

			
			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<form class="form-search" method="get" id="s" action="profile.php">
    <div class="input-append srh text-center" >
        <input type="number" size="75" height="60" style="height:40px; width:400px; margin-top:70px; border-radius:10px;"  class="input-medium search-query" name="uid" placeholder="U-ID"  required >
       <button type="submit" class="btn btn-success" width="100px">search</button><br><br>
           <a href="org.html"><button type="button" class="btn btn-info" style="margin-top:20px">organizations</button></a>
           <div class="bs-example">
        


    </div>
    
</form>


</body>
<footer>
	<div class="container-fluid bg text-center">
	 <p> &copy; Student Record System </p>
	
	</div>
</footer>
<style>
.bg { margin-top:300px; background-color:black; color:white;}
</style>
</div>
</html>
