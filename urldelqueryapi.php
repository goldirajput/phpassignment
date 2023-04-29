<?php 
$c=mysqli_connect("localhost","root","","stud");
if(!$c){
    echo "not connected databse";
}
// http://localhost/api/urldelqueryapi.php?id=30;
$stud_id=$_GET['id'];
$msg=array();
$q="delete from stud_info where
stud_id='$stud_id'";
// echo $q;
if(mysqli_query($c,$q)){
    // echo "record Inserted";
    $msg["code"]=200;
    $msg["message"]="RECORED DELETED";
}
else{
    // echo "record Not Inserted";
    $msg["code"]=401;
    $msg["error"]="NO DATA FOUND";
}
echo json_encode($msg);
?>
