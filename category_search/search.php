<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chromas";

$con = mysqli_connect($servername, $username, $password, $database);
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chromas</title>
    <link rel="stylesheet" href="chromas_design.css?v=<?php echo time(); ?>"/>
</head>
<body>
<div id="Chromas_f">

    <svg class="Rectangle_1">
        <rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1900" height="140">
        </rect>
    </svg>
    <div id="Kontaktai">
        <a href = "../contacts/"> Kontaktai</a>
    </div>
    <div id="Prisijungimas">
        <a href = "../Register/login.php"> Prisijungimas</a>
    </div>
    <div id="Registracija">
        <a href = "../Register/Register.html"> Registracija</a>
    </div>

    <form action="../add_item/Chromas_PrekeP.php" method="get">
        <button class="button button1">Įdėti skelbimą</button>
    </form>
    <a href = "../main/index.php">
        <div id="Chromas">
            <span>Chromas</span>
        </div>
    </a>

    <form action="search.php" metod="get">
        <div class="autocomplete">
            <input type="text" name="search" placeholder="Paieška">
        </div>
        <form action="search.php" metod="get">
            <input type="image" name="paieska" src="../add_item/uploads/search_icon_152764.png"  alt=""  />
            <button name="submit" id="slapta">ss</button>
        </form>
    </form>

    <div class="container">
        <a href = "../Product/product.php?id=1">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 1";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'AND id = 1";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        
                    }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 1";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 1";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";

                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=2">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 2";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 2";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                        echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                    
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 2";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 2";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=3">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 3";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 3";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                        echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 3";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 3";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=4">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 4";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 4";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 4";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 4";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=5">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 5";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 5";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 5";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 5";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=6">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 6";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 6";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 6";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 6";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=7">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 7";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 7";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 7";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 7";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=8">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 8";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 8";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 8";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 8";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=9">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 9";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 9";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id =9";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 9";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=10">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 10";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 10";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 10";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 10";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=11">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 11";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 11";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 11";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 11";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=12">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 12";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 12";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 12";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 12";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=13">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 13";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 13";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 13";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 13";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=14">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 14";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 14";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 14";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 14";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=15">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 15";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 15";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 15";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 15";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <div class="container">
        <a href = "../Product/product.php?id=16">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 16";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 16";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {

                    echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";

                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 16";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%' AND id = 16";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {

                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        </a>
    </div>
    <svg class="Rectangle_5">
        <rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="1900" height="110">
        </rect>
    </svg>
</div>
</body>
</html>