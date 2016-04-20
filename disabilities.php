<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/demo.css">
  <link rel="stylesheet" href="assets/header-fixed.css">
  <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" src="/assets/header-fixed.css">
<style>
.box { border:2px solid black; border-radius:10px;}

</style>

</head>
<body>
<?php include 'header.php'; ?>



</body>


</html>

<?php

if($_SERVER['REQUEST_METHOD']=='GET')
{
  $x=$_GET['src'];
	require 'connection.php';
   if(!empty($x))
   {
    
      $x=trim($x);
      $x=stripslashes($x);
      $length=count($x);
     if($length>18)
     {
     	echo "wrong uid number";
     	exit();
     }
     
   }
   else
   {

   	echo " Please Enter U_ID number";
   	exit();
   }


$sql = "SELECT * FROM disabilities WHERE (uid='$x')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        
        <li ><a href="profile.php?uid=<?php echo $x; ?>">Profile</a></li>
   
        <li class="active"><a href="disabilities.php?src=<?php echo $x; ?>"> Dis-Abilities</a></li>
        <li><a href="efforts.php?src=<?php echo $x; ?>"> Efforts </a></li>
       
        
      </ul>
    </div>
  </div>
</nav>



  <?php
  
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      

      
    	
            

<div class="container box text-center">
<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <tbody>
       <tr>
         <th> U-ID </th>
         <td><?php echo $row["uid"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Full Name   </th>
         <td><?php echo $row["name"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Disabilities </th>
         <td><?php echo $row["disabilities"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> How he/she become disabled ?  </th>
         <td><?php echo $row["how"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Certified </th>
         <td><?php echo $row["certified"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Doctor Name  </th>
         <td><?php echo $row["doct_certified"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Certified Date </th>
         <td><?php echo $row["date_certified"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Percentage of disabilities </th>
         <td><?php echo $row["pr_disabilities"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Treatment </th>
         <td><?php echo $row["treatment_running"]; ?></td>
       </tr>


    </tbody>
    <tbody>
       <tr>
         <th> Where he/she getting treatment ? </th>
         <td><?php echo $row["whr_trtmnt"]; ?></td>
       </tr>


    </tbody>
    <tbody>
       <tr>
         <th> Government Help </th>
         <td><?php echo $row["govt_help"]; ?></td>
       </tr>


    </tbody>
   <tbody>
  <tr>
         <th> How they are getting help from government ? </th>
         <td><?php echo $row["how_govt"]; ?></td>
       </tr>


    </tbody>

  <tbody>
  <tr>
         <th> is there any other disability in family member ? </th>
         <td><?php echo $row["fam_mem"]; ?></td>
       </tr>


    </tbody>

  
  </table>
</div>
</div>
      <?php  
}} else {
    echo "No results found ";
}

mysqli_close($conn);
}
include 'footer.php';
?>
