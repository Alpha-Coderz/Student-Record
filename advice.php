<?php
$x=$_GET['src'];
include 'header.php';
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        
         <li><a href="profile.php?uid=<?php echo $x; ?>">Profile</a></li>
   
        <li><a href="disabilities.php?src=<?php echo $x; ?>"> Dis-Abilities</a></li>
        <li><a href="efforts.php?src=<?php echo $x; ?>"> Efforts </a></li>
        <li class="active"><a href="activity.php?src=<?php echo $x; ?>">Activity</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<p> Here is a list of activity which dis-abled students should do ..</p>
<table class="table table-striped table-bordered">

<tbody>
<tr>

<th>Dis-Ability </th>
<th> Activity </th>

</tr>

</tbody>


<tbody>
<tr>

<td> Basic Activity </td>
<td> 1 - Making New Friends <br> 2 - Learning Independence <br> 3 - Increasing aerobic activity <br> 4 - Participating on a team </td>

</tr>

<tbody>
<tr>

<td>Blindness </td>
<td> 1 - Cycling<br>2 - Swimming<br> 3 - Sports<br>4 - Making New Friends </td>

</tr>

</tbody>

<tbody>
<tr>

<td>Deafness </td>
<td> 1 - Pretend Play <br> 2 - Classroom Responsibility <br> 3 - Story play <br> 4 - Music</td>

</tr>

</tbody>

<tbody>
<tr>

<td>Dumbness</td>
<td> 1 - Creating Art <br> 2 - Yoga for peace <br> 3 - Teamwork <br> 4 - Healthy Eating </td>

</tr>

</tbody>


</tbody>


</table>
