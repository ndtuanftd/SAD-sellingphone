<?php
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
        $message = "The table is not created. Please insert some items first!";
        echo "<script type='text/javascript'>alert('$message');window.location.href='index.php?page=home';</script>";
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <div class="phones-container">
            <div class="row">
                <div class="col-6">
                    <p class="header-des">Absolutely hot collections</p>
                    <p class="header-text">The Best Place To<br>Find And Buy<br>Phones</p>
                </div>
                <div class="col-6">
                    <img src="../media/phone/phone.PNG" alt="" class="header-image">
                </div>
            </div>

            <div class="wrap">
                <div class="search">
                    <input type="text" class="search-term" placeholder="What are you looking for?">
                    <button type="submit" class="search-button">
                        <i class='bx bx-search-alt-2'></i>
                    </button>
                </div>
            </div>
            <div class="allphones">
                <p class="search-header">Product Result</p>
                <div class="container allphones-container">
                    <?php        
                        $sql = "SELECT * FROM products";
                        $result = mysqli_query($conn, $sql);
                        $i = 0;
                        $mod = 4;
                        
                        while ($data = mysqli_fetch_assoc($result)) {
                            if ($i % $mod == 0){
                    ?>
                            <div class="row  allphones-row">
                                <div class="col-3">
                                    <form method="post" action="index.php?page=productDetail">
                                        <button class="product-button" style="margin: 0;padding: 0;border: none;background: none;">
                                            <div class="container1">
                                                <img src="./images/<?php echo $data['imagename'];?>" alt="" class="image1">
                                                <p class="name1"><?php echo $data['productname'];?></p>
                                                <p class="text1"><?php echo $data['description'];?></p>
                                                <p class="price1"><?php echo $data['price'];?></p>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                    <?php
                            }
                            else{
                    ?>
                                <div class="col-3">
                                    <form method="post" action="index.php?page=productDetail">
                                        <button class="product-button" style="margin: 0;padding: 0;border: none;background: none;">
                                            <div class="container1">
                                                <img src="./images/<?php echo $data['imagename'];?>" alt="" class="image1">
                                                <p class="name1"><?php echo $data['productname'];?></p>
                                                <p class="text1"><?php echo $data['description'];?></p>
                                                <p class="price1"><?php echo $data['price'];?></p>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                    <?php 
                            }
                            if (($i + 1) % $mod == 0){
                    ?>
                            </div>
                    <?php
                            }
                            $i = $i + 1;
                        }
                        if ( $i % $mod != 0) {
                    ?>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>