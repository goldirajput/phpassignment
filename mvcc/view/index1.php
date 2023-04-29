<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Student_Info</title>
</head>
<body>
    <div class="m-5 table table-striped">
    <a href="<?php echo $this->burl.'create'?>" class="btn btn-primary">Add New</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($data as $key){ ?>
    <tr>
      <td><?php echo $key->user_id; ?></td>
      <td><?php echo $key->user_name; ?></td>
      <td><?php echo $key->user_email; ?></td>
      <td>
        <a href="<?php echo $this->burl; ?>delete?id=<?php echo $key->user_id ?>" class="btn btn-danger">DELETE</a>
        <a href="<?php echo $this->burl; ?>update?id=<?php echo $key->user_id ?>" class="btn btn-success" name="submit">UPDATE</a>
       
        <td><a href="<?php echo $this->burl;?>update?id=<?php echo $key->user_id?>" 
                class="btn btn-success">Edit</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
</body>
</html>