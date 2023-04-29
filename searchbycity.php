<?php 
$c=mysqli_connect("localhost","root","","stud");
if(!$c){
    exit("Connection faild");
}
// http://localhost/api/searchbyname.php?city={surat}
$city=$_GET['city'];
$q="select * from stud_info where stud_city like '".$city."'";
$res=mysqli_query($c,$q);
$myarry = array();
$i=0;
$count=mysqli_num_rows($res);
if($count>0){
        while($row=mysqli_fetch_assoc($res)){
            $myarry[$i]['stud_id']=$row['stud_id'];
            $myarry[$i]['stud_name']=$row['stud_name'];
            $myarry[$i]['stud_email']=$row['stud_email'];
            $myarry[$i]['stud_num']=$row['stud_num'];
            $myarry[$i]['stud_course']=$row['stud_course'];
            $myarry[$i]['stud_img']=$row['stud_img'];
            $myarry[$i]['stud_city']=$row['stud_city'];
            $i++;
        }
}
else{
    $myarry['message']="NO DATA FOUND";
}
echo  "<pre>".json_encode($myarry,JSON_PRETTY_PRINT)."</pre>";

?>