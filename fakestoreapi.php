<?php 
$data=file_get_contents("https://fakestoreapi.com/products");
$mydata=json_decode($data);
// print_r($mydata) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>fakestoreapi</title>
</head>
<body>
    <table class="table table-striped">
        <tr>
            <td>Id</td>
            <td>NAME</td>
            <td>PRICE</td>
            <td>IMAGE</td>
            <td>PRICE</td>
            <td>DESCRIPTION</td>
        </tr>
        <?php 
        foreach($mydata as $myall){
        ?>
        <tr>
        <td>Id</td>
            <td><?php echo $myall->id ?></td>
            <td><?php echo $myall->title?></td>
            <td><img height="100px" width="100px" src="<?php echo $myall->image?>"/></td>
            <td><?php echo $myall->price ?></td>
            <td><?php echo $myall->description?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
