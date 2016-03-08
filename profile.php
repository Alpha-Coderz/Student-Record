<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.box { border:2px solid black; border-radius:10px;}

</style>




</head>
<body>
<div class="wrapper">
  <div class="header">
<?php include 'header.php'; ?>
 </div>
</body>

<div class="content">
</html>

<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
   $x=$_GET['uid'];

   $x=mysql_real_escape_string($x);
   $x=htmlentities($x);
   
	require 'connection.php';
   if(!empty($x))
   {
    
     $x=trim($x);
     
     $length=count($x);
     if($length>18)
     {
     	echo "wrong uid number";
     	exit();
     }
     
   }
   else
   {

   	echo " Please Enter UID number";
    include 'searchbox.php';
   	exit();
   }


$sql = "SELECT * FROM tablename WHERE (condition)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>
	
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        
        <li class="active"><a href="#">Profile</a></li>
   
        <li><a href="disabilities.php?src=<?php echo $x; ?>"> Dis-Abilities</a></li>
        <li><a href="efforts.php?src=<?php echo $x; ?>"> Efforts </a></li>
        
        
      </ul>
    </div>
  </div>
</nav>
  <?php
    while($row = mysqli_fetch_assoc($result)) {


      

?>

<div class="container box text-center">
  <?php

   echo '<img width="200" height="200" src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'">';
?>
  
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
         <th> Father Name </th>
         <td><?php echo $row["father_name"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Mother Name  </th>
         <td><?php echo $row["mother_name"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Address  </th>
         <td><?php echo $row["address"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> GR No  </th>
         <td><?php echo $row["gr_no"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Birth Date  </th>
         <td><?php echo $row["bod"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Birth Place </th>
         <td><?php echo $row["b_place"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Religion </th>
         <td><?php echo $row["religion"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Cast </th>
         <td><?php echo $row["cast"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Gender </th>
         <td><?php echo $row["gender"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Parent's Contact Number </th>
         <td><?php echo $row["p_contact"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Parent's Email Id </th>
         <td><?php echo $row["p_email"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Current School  </th>
         <td><?php echo $row["cur_sch"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> School Joining Date</th>
         <td><?php echo $row["cur_sch_j_date"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Last School </th>
         <td><?php echo $row["last_sch"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Standard </th>
         <td><?php echo $row["std"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Division </th>
         <td><?php echo $row["div"]; ?></td>
       </tr>


    </tbody>
     <tbody>
       <tr>
         <th> Blood Group </th>
         <td><?php echo $row["blood_grp"]; ?></td>
       </tr>


    </tbody>
    

    </table>

    </div>
  </div>




<?php

    }
} else {
    ?> <div class="container"> <h1 style="color:maroon"> No results found </h1> </div> <br><br><?php
    include 'searchbox.php'; ?> <p style="margin-top:272px"></p></div><?php
}

mysqli_close($conn);
}?>
<div id="footer"><?php
include 'footer.php';?>
</div></div>
?>
