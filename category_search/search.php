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

    <div id="Prisijungimas">
        <a href = "/Chromas-main/Register/login.php"> Prisijungimas</a>
    </div>
    <div id="Registracija">
        <a href = "/Chromas-main/Register/Register.html"> Registracija</a>
    </div>

    <form action="/Chromas-main/add_item/Chromas_PrekeP.php" method="get">
        <button class="button button1">Įdėti skelbimą</button>
    </form>
    <div id="Chromas">
        <span>Chromas</span>
    </div>
    <form action="search.php" metod="get">
        <div class="autocomplete">
            <input type="text" name="search" placeholder="Paieška">
        </div>
        <form action="search.php" metod="get">
            <input type="image" name="submit" src="https://cdn.icon-icons.com/icons2/2551/PNG/512/search_icon_152764.png"  alt="submit"  />
        </form>
    </form>

    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==1){
                            echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                        }
                    }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==1){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==2){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==2){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==3){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==3){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==4){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==4){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==5){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==5){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==6){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==6){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==7){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==7){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==8){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {
                
                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==8){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {
                
            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==9){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==9){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==10){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==10){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==11){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==11){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==12){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==12){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==13){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==13){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==14){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==14){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==15){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {

                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==15){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $button = $_GET['submit'];
            $search = $_GET['search'];
            $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
            $run = mysqli_query($con, $sql);
            $foundnum = mysqli_num_rows($run);
            if ($foundnum == 0) {

            } else {
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $getq = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($getq)) {
                    if($row['id']==16){
                        echo "<img class = 'content-image' src = '/add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $button = $_GET['submit'];
                $search = $_GET['search'];
                $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                $run = mysqli_query($con, $sql);
                $foundnum = mysqli_num_rows($run);
                if ($foundnum == 0) {
                 
                } else {
                    $sql = "SELECT * FROM prekes_ikelimas WHERE pavadinimas LIKE '%$search%'";
                    $getq = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($getq)) {
                        if($row['id']==16){
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <svg class="Rectangle_5">
        <rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="1900" height="110">
        </rect>
    </svg>
</div>
</body>
</html>