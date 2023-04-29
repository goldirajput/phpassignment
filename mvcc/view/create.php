<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>USER INSERT-DATA</h1>
    <form>
    <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" name="name" class="form-control" value="<?php echo  $data[0]->user_name ?? '';?>"  >
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" value="<?php echo  $data[0]->user_email ?? ''; ?>" >

  </div>
  <div class="form-group mb-2">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" value="<?php echo  $data[0]->user_pass ?? '';?>" >
  </div>
  <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>