<?php

if(isset($_REQUEST['btnsubmit'])){
    $name=$_REQUEST['sname'];
    $email=$_REQUEST['semail'];
    $num=$_REQUEST['snum'];
    $course=$_REQUEST['scourse'];
    $img=$_REQUEST['simg'];
    $city=$_REQUEST['scity'];
    //Insertpage url thi insert thy
    $url="http://localhost/api/urlinsertqueryapi.php?stud_namee=$name&stud_email=$email&stud_num=$num&stud_course=$course&stud_img=$img&stud_city=$city";
    // echo $url;
    $ch = curl_init($url);
    curl_exec($ch);
    curl_close($ch);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data insert using form</title>
</head>
<body>
    <form action="" method="post">
        Name:<div><input type="text" name="sname"/> </div>
        Email:<div><input type="email" name="semail" /></div>
        Phonenum:<div><input type="number" name="snum" /></div>
        Course:<div><input type="text" name="scourse" /></div>
        Img:<div><input type="file" name="simg" /></div>
        City:<div><input type="text" name="scity"/></div>
        <button name="btnsubmit" type="submit"> Submit </button>
    </form>
</body>
</html>