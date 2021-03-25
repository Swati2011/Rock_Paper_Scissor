<html>
<head>
<style>
table{
             border: 1px solid black;
			 hieght: 10px;
}
th,td{
      
border: 1px solid black;
hieght: 25%;

}


</style>


</head>
<body>



<button onclick="myFunction()">Click me</button>

<!--<p id="demo">-->
<table id="t1" style="width:100%">
  <tr>
    <th style="width:25%">Firstplayer</th>
    <th style="width:25%">Secondplayer</th>
    <th style="width:25%">Thirdplayer</th>
	<th style="width:25%">Forthplayer</th>
  </tr>
  <tr>
    <td style="width:25%" align="center" id="p1"><?php $strings='abc'; 
	$index= rand(0,2);
	$value=$strings[$index];
	
	if($value=="a"){
	                $user1_value="Rock";
	
	                echo $user1_value;
					
	}
	else if($value=="b"){
	
	$user1_value="Paper";
	
	                echo $user1_value;
	
	}
	else
	{
	$user1_value="Scissors";
	echo "$user1_value";
    }
	?></td>
    <td style="width:25%" align="center"><?php $strings='abc'; 
	$index= rand(0,2);
	$value=$strings[$index];
	if($value=="a"){
	                $user2_value="Rock";
	
	                echo $user2_value;
					
	}
	else if($value=="b"){
	
	$user2_value="Paper";
	
	                echo $user2_value;
	
	}
	else{
	$user2_value="Scissors";
	echo "$user2_value";
	}
	?>
	
	</td>
    <td style="width:25%" align="center"><?php $strings='abc'; 
	$index= rand(0,2);
	$value=$strings[$index];
	if($value=="a"){
	                $user3_value="Rock";
	
	                echo $user3_value;
					
	}
	else if($value=="b"){
	
	$user3_value="Paper";
	
	                echo $user3_value;
	
	}
	else
	{
	$user3_value="Scissors";
	echo "$user3_value";
}	?></td>
	
	<td style="width:25%" align="center"><?php $strings='abc'; 
	$index= rand(0,2);
	$value=$strings[$index];
	if($value=="a"){
	                $user4_value="Rock";
	
	                echo $user4_value;
					
	}
	else if($value=="b"){
	
	$user4_value="Paper";
	
	                echo $user4_value;
	
	}
	else{
	$user4_value="Scissors";
	echo "$user4_value";} ?></td>
  </tr>
  
</table>
</br>
</br>
<?php 
 static $p1user1_points=0;
 static $p1user2_points=0;
 static $p1user3_points=0;
 static $p1user4_points=0;
 static $p2user1_points=0;
 static $p2user2_points=0;
 static $p2user3_points=0;
 static $p2user4_points=0;
 static $p3user1_points=0;
 static $p3user2_points=0;
 static $p3user3_points=0;
 static $p3user4_points=0;
 static $p4user1_points=0;
 static $p4user2_points=0;
 static $p4user3_points=0;
 static $p4user4_points=0;
 static $p2u2=0;
 
 if($user1_value=="Rock" and $user2_value=="Rock")
 {
      $p1user1_points=0;
	  $p1user2_points=0;
 }
if($user1_value=="Rock" and $user2_value=="Paper")
 {
      $p1user1_points=0;
	  $p1user2_points=1;
 }
if($user1_value=="Rock" and $user2_value=="Scissors")
 {
      $p1user1_points=1;
	  $p1user2_points=0;
 }
 //
 if($user1_value=="Paper" and $user2_value=="Rock")
 {
      $p1user1_points=1;
	  $p1user2_points=0;
 }
if($user1_value=="Paper" and $user2_value=="Paper")
 {
      $p1user1_points=0;
	  $p1user2_points=0;
 }
if($user1_value=="Paper" and $user2_value=="Scissors")
 {
      $p1user1_points=0;
	  $p1user2_points=1;
 }
 
 //
 if($user1_value=="Scissors" and $user2_value=="Rock")
 {
      $p1user1_points=0;
	  $p1user2_points=1;
 }
if($user1_value=="Scissors" and $user2_value=="Paper")
 {
      $p1user1_points=1;
	  $p1user2_points=0;
 }
if($user1_value=="Scissors" and $user2_value=="Scissors")
 {
      $p1user1_points=0;
	  $p1user2_points=0;
 }
//for user2

if($user2_value=="Rock" and $user3_value=="Rock")
 {
      $p2user2_points=0;
	  $p2user3_points=0;
 }
if($user2_value=="Rock" and $user3_value=="Paper")
 {
      $p2user2_points=0;
	  $p2user3_points=1;
 }
if($user2_value=="Rock" and $user3_value=="Scissors")
 {
      $p2user2_points=1;
	  $p2user3_points=0;
 }
 //
 if($user2_value=="Paper" and $user3_value=="Rock")
 {
      $p2user2_points=1;
	  $p2user3_points=0;
 }
if($user2_value=="Paper" and $user3_value=="Paper")
 {
      $p2user2_points=0;
	  $p2user3_points=0;
 }
if($user2_value=="Paper" and $user3_value=="Scissors")
 {
      $p2user2_points=0;
	  $p2user3_points=1;
 }
 
 //
 if($user2_value=="Scissors" and $user3_value=="Rock")
 {
      $p2user2_points=0;
	  $p2user3_points=1;
 }
if($user2_value=="Scissors" and $user3_value=="Paper")
 {
      $p2user2_points=1;
	  $p2user3_points=0;
 }
if($user2_value=="Scissors" and $user3_value=="Scissors")
 {
      $p2user2_points=0;
	  $p2user3_points=0;
 }
 
 // for user 3
 
 
if($user3_value=="Rock" and $user4_value=="Rock")
 {
      $p3user3_points=0;
	  $p3user4_points=0;
 }
if($user3_value=="Rock" and $user4_value=="Paper")
 {
      $p3user3_points=0;
	  $p3user4_points=1;
 }
if($user3_value=="Rock" and $user4_value=="Scissors")
 {
      $p3user3_points=1;
	  $p3user4_points=0;
 }
 //
 if($user3_value=="Paper" and $user4_value=="Rock")
 {
      $p3user3_points=1;
	  $p3user4_points=0;
 }
if($user3_value=="Paper" and $user4_value=="Paper")
 {
      $p3user3_points=0;
	  $p3user4_points=0;
 }
if($user3_value=="Paper" and $user4_value=="Scissors")
 {
      $p3user3_points=0;
	  $p3user4_points=1;
 }
 
 //
 if($user3_value=="Scissors" and $user4_value=="Rock")
 {
      $p3user3_points=0;
	  $p3user4_points=1;
 }
if($user3_value=="Scissors" and $user4_value=="Paper")
 {
      $p3user3_points=1;
	  $p3user4_points=0;
 }
if($user3_value=="Scissors" and $user4_value=="Scissors")
 {
      $p3user3_points=0;
	  $p3user4_points=0;
 }
  
  //for user 4
  
  
if($user4_value=="Rock" and $user1_value=="Rock")
 {
      $p4user4_points=0;
	  $p4user1_points=0;
 }
if($user4_value=="Rock" and $user1_value=="Paper")
 {
      $p4user4_points=0;
	  $p4user1_points=1;
 }
if($user4_value=="Rock" and $user1_value=="Scissors")
 {
      $p4user4_points=1;
	  $p4user1_points=0;
 }
 //
 if($user4_value=="Paper" and $user1_value=="Rock")
 {
      $p4user4_points=1;
	  $p4user1_points=0;
 }
if($user4_value=="Paper" and $user1_value=="Paper")
 {
      $p4user4_points=0;
	  $p4user1_points=0;
 }
if($user4_value=="Paper" and $user1_value=="Scissors")
 {
      $p4user4_points=0;
	  $p4user1_points=1;
 }
 
 //
 if($user4_value=="Scissors" and $user1_value=="Rock")
 {
      $p4user4_points=0;
	  $p4user1_points=1;
 }
if($user4_value=="Scissors" and $user1_value=="Paper")
 {
      $p4user4_points=1;
	  $p4user1_points=0;
 }
if($user4_value=="Scissors" and $user1_value=="Scissors")
 {
      $p4user4_points=0;
	  $p4user1_points=0;
 }
 
 
 //for user2 with user 4 and point of user 2 with user 4 is p2u2
 
 if($user2_value=="Rock" and $user4_value=="Rock")
 {
      $p2u2_points=0;
	  $p2user4_points=0;
 }
if($user2_value=="Rock" and $user4_value=="Paper")
 {
      $p2u2_points=0;
	  $p2user4_points=1;
 }
if($user2_value=="Rock" and $user4_value=="Scissors")
 {
      $p2u2_points=1;
	  $p2user4_points=0;
 }
 //
 if($user2_value=="Paper" and $user4_value=="Rock")
 {
      $p2u2_points=1;
	  $p2user4_points=0;
 }
if($user2_value=="Paper" and $user4_value=="Paper")
 {
      $p2u2_points=0;
	  $p2user4_points=0;
 }
if($user2_value=="Paper" and $user4_value=="Scissors")
 {
      $p2u2_points=0;
	  $p2user4_points=1;
 }
 
 //
 if($user2_value=="Scissors" and $user4_value=="Rock")
 {
      $p2u2_points=0;
	  $p2user4_points=1;
 }
if($user2_value=="Scissors" and $user4_value=="Paper")
 {
      $p2u2_points=1;
	  $p2user4_points=0;
 }
if($user2_value=="Scissors" and $user4_value=="Scissors")
 {
      $p2u2_points=0;
	  $p2user4_points=0;
 }

 //for user 3 with user 1
 
 if($user3_value=="Rock" and $user1_value=="Rock")
 {
      $p3u3_points=0;
	  $p3user1_points=0;
 }
if($user3_value=="Rock" and $user1_value=="Paper")
 {
      $p3u3_points=0;
	  $p3user1_points=1;
 }
if($user3_value=="Rock" and $user1_value=="Scissors")
 {
      $p3u3_points=1;
	  $p3user1_points=0;
 }
 //
 if($user3_value=="Paper" and $user1_value=="Rock")
 {
      $p3u3_points=1;
	  $p3user1_points=0;
 }
if($user3_value=="Paper" and $user1_value=="Paper")
 {
      $p3u3_points=0;
	  $p3user1_points=0;
 }
if($user3_value=="Paper" and $user1_value=="Scissors")
 {
      $p3u3_points=0;
	  $p3user1_points=1;
 }
 
 //
 if($user3_value=="Scissors" and $user1_value=="Rock")
 {
      $p3u3_points=0;
	  $p3user1_points=1;
 }
if($user3_value=="Scissors" and $user1_value=="Paper")
 {
      $p3u3_points=1;
	  $p3user3_points=0;
 }
if($user3_value=="Scissors" and $user1_value=="Scissors")
 {
      $p3u3_points=0;
	  $p3user1_points=0;
 }
 
 
echo "<table style=width:100%>
<tr><th>Total</th><th></th><th colspan=4>Against</th></tr>
<tr><td></td><td></td><td>Player1</td><td>Player2</td><td>Player3</td><td>Player4</td></tr>
<tr><td rowspan=4>Player Wins</td><td> Player1</td><td>-</td><td>$p1user1_points</td><td>$p1user3_points</td><td>$p1user4_points</td></tr>
<tr><td>Player2</td><td>$p1user2_points</td><td>-</td><td>$p2user3_points</td><td>$p2u2_points</td></tr>
<tr><td>Player3</td><td>$p3u3_points</td><td>$p2user3_points</td><td>-</td><td>$p3user4_points</td></tr>
<tr><td>Player4</td><td>$p4user4_points</td><td>$p2user4_points</td><td>$p3user4_points</td><td>-</td></tr>

</table>";


?>

 

<script>
function myFunction() {
   location.reload();
   
   
   
  /*var x=document.getElementById("t1");
  if(x.style.display==="none"){
  x.style.display = "block";
  }
  else
  x.style.display = "none";*/
}
</script>
 




</body>

</html>