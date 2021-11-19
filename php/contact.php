<?php
$nme=$_POST['nme'];
$gml=$_POST['gml'];
$subjt=$_POST['subjt'];
$mess=$_POST['mess'];
$conn=mysqli_connect("localhost","root","","portfolio") or die("Connection can't be denied");
$qry=mysqli_query($conn,"insert into tbl_port (name,email,subject,message)values('$nme','$gml','$subjt','$mess')");
if($qry){
    echo "1";
}else{
    echo mysqli_error($conn);
}
?>