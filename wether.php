<?php 
// $data=file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=india&appid=246a36b93489ef33d26d116b987f46a5");
// $data=file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=surat&appid=246a36b93489ef33d26d116b987f46a5");
$data=file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=London&appid=246a36b93489ef33d26d116b987f46a5");
$mydata=json_decode($data);
print_r($mydata) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WetherAPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<?php 
foreach($mydata as $alldata)
{

?>
<div class="container mt-4">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="<?php echo $alldata->name;?>">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<?php } ?>
</body>
</html>