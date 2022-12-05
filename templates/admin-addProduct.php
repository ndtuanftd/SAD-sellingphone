<?php
  function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  function check_password($str){
      $error = "";
      $num_check = false;
      $uppercase_check = false;

      if (strlen($str) < 8){
          $error = "Min length is 8 chars";
      }

      $length = strlen($str);
      for ($i=0; $i<$length; $i++) {
          if (is_numeric($str[$i]) == true){
              $num_check = true;
          }
          if (ctype_upper($str[$i]) == true){
              $uppercase_check = true;
          }
      }

      if ($num_check == false){
          if (strlen($error) == 0){
              $error = "At lease one number";
          }
          else{
              $error = $error . ", at least one number";
          }
      }
      if ($uppercase_check == false){
          if (strlen($error) == 0){
              $error = "At least one uppercase letter";
          }
          else{
              $error = $error . ", at least one uppercase letter";
          }
      }

      if (strlen($error) > 0){
          echo "<script type='text/javascript'>alert('$error');window.location.href='index.php?page=admin-addProduct'</script>";
          return false;
      }
      else{
          return true;
      }
  }

  //! Insert product
  if (isset($_POST['add_products'])) {
      $servername = "localhost";
      $username_server = "root";
      $password_server = "";
      $dbname = "mysad";
      $conn = new mysqli($servername, $username_server, $password_server, $dbname);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $result = $conn->query("SHOW TABLES LIKE 'products'");
      if($result->num_rows == 0){
          $sql = "CREATE TABLE products(
              id int(100) NOT NULL AUTO_INCREMENT,
              imagename varchar(100) UNIQUE NOT NULL,
              productname varchar(100) UNIQUE NOT NULL,
              price varchar(100) NOT NULL,
              description varchar(500) NOT NULL,
              PRIMARY KEY (id)
              )";

          if (mysqli_query($conn, $sql) == false) {
              die("Connection failed: " . $conn->connect_error);
          }
      }

      $imagename = $_FILES["insertfile"]["name"];
      $tempname = $_FILES["insertfile"]["tmp_name"];
      $folder = "./images/" . $imagename;

      if(strlen($imagename) == 0){
          $message = "Please upload an image!";
          echo "<script type='text/javascript'>alert('$message');window.location.href='index.php?page=admin-addProduct';</script>";
      }
      else{
          $productname = $_POST["productname"];
          $price = $_POST["price"];
          $description = $_POST["description"];

          $sql = "SELECT * FROM products";
          $result = mysqli_query($conn, $sql);
          $duplicate_image = false;
          $duplicate_product = false;

          while ($data = mysqli_fetch_assoc($result)) {
              if ($data["imagename"] == $imagename){
                  $duplicate_image = true;
              }
              if ($data["productname"] == $productname){
                  $duplicate_product = true;
              }
          }
          
          if ($duplicate_image == true){
              $message = "Your image\'s name has already existed. Please use another name!";
              echo "<script type='text/javascript'>alert('$message');window.location.href='index.php?page=admin-addProduct';</script>";
          }
          elseif ($duplicate_product == true){
              $message = "Your product\'s name has already existed. Please use another name!";
              echo "<script type='text/javascript'>alert('$message');window.location.href='index.php?page=admin-addProduct';</script>";
          }
          else{
              $sql = "INSERT INTO products (imagename, productname, price, description) VALUES ('$imagename', '$productname', '$price', '$description')";
          
              mysqli_query($conn, $sql);
          
              // Move the uploaded image into the folder: images
              if (move_uploaded_file($tempname, $folder)){
                  $message = "Insert successfully!";
              }
              else{
                  $message = "Failed to upload image!";
              }
              echo "<script type='text/javascript'>alert('$message');window.location.href='index.php?page=admin-addProduct';</script>";
          }
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - add product</title>
</head>

<body>
  <div class="container">
    <section class="h-100 h-custom">
      <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col" style="padding-left: 200px; padding-right: 200px; margin-top: 100px;">
            <div class="card mb-5 mb-lg-0"
              style="border-radius: 16px; box-shadow: 0px 6.25px 14px #171a1f, 0px 0px 2px #171a1f;">
              <div class="card-body p-4">
                <h3>Create new item</h3>
                <form method="POST" action="" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="" class="form-label">
                      <b>Name</b>
                    </label>
                    <input type="text" name="productname" class="form-control" placeholder="Enter item name">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <b>Description</b>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"
                      placeholder="Enter item description"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">
                      <b>Price</b>
                    </label>
                    <input type="text" name="price" class="form-control" placeholder="Enter item price">
                  </div>
                  <h5>Upload images</h5>
                  <div class="form-group">
                    <input type="file" name="insertfile" value="" />
                  </div>
                  <div class="addProduct-button d-flex justify-content-end">
                    <button type="submit" name="add_products" class="btn btn-primary btn-lg">Create</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</body>

</html>