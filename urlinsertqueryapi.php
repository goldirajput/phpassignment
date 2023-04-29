<?php 
$c=mysqli_connect("localhost","root","","stud");
if(!$c){
    echo "not connected databse";
}
// http://localhost/api/urlinsertqueryapi.php?stud_namee=Yami&stud_email=y@gmail.com&stud_num=123456789&stud_img=my.png&stud_course=bca&stud_city=surat;
$stud_name=$_GET['stud_namee'];
$stud_email=$_GET['stud_email'];
$stud_num=$_GET['stud_num'];
$stud_img=$_GET['stud_img'];
$stud_course=$_GET['stud_course'];
$stud_city=$_GET['stud_city'];
$msg=array();
$q="insert into stud_info set
stud_name='$stud_name',
stud_email='$stud_email',
stud_num='$stud_num',
stud_img='$stud_img',
stud_course='$stud_course',
stud_city='$stud_city'
";
// echo $q;
if(mysqli_query($c,$q)){
    // echo "record Inserted";
    $msg["code"]=200;
    $msg["message"]="DATA INSERTED";
}
else{
    // echo "record Not Inserted";
    $msg["code"]=401;
    $msg["error"]="NO DATA INSERTED";
}
echo json_encode($msg);
?>
