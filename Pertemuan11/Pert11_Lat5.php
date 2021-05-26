<?php 
 $con=mysqli_connect("localhost","root","root_password"); 
 $table=mysqli_select_db($con,"lat_dbase"); 
 $hasil=mysqli_query($con,"select * from tbl_mhs"); //sudah tidak bisa mysqli db query
 While($data=mysqli_fetch_row($hasil)) 
 { 
 echo "$data[0] $data[1] $data[2]<br>"; 
 } 
?>