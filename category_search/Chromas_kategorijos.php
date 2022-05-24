<?php
    include 'connection.php';
$category_slug = $_GET['category'];
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
        <a href = "/Chromas-main/Register/login.php"> Prisijungimas</a>
    </div>
    <div id="Registracija">
        <a href = "/Chromas-main/Register/Register.html"> Registracija</a>
    </div>

    <form action="/Chromas-main/add_item/Chromas_PrekeP.php" method="get">
        <button class="button button1">Įdėti skelbimą</button>
    </form>
    <a href = "../main/index.php">
        <div id="Chromas">
            <span>Chromas</span>
        </div>
    </a>
	
    <input type="image" name="paieska" alt=""
           src="../add_item/uploads/search_icon_152764.png">
    <form action="search.php" metod="get">
        <div class="autocomplete">
            <input type="text" name="search" placeholder="Paieška" >
        </div>
        <button name="submit" id="slapta">ss</button>
    </form>

    <div class="container">
        <a href = "../Product/product.php?id=1">
        <div class="content">
            <div class="content-overlay"></div>
            <?php
            $sql = "SELECT * FROM prekes_ikelimas WHERE id = 1";
            $result = mysqli_query($conn, $sql);
            $query_results = mysqli_num_rows($result);
            if ($query_results > 0){
                while($row = mysqli_fetch_assoc($result)){
                    if($row['kategorija'] == $category_slug){
                        echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                    }
                }
            }
            ?>
            <div class="content-details fadeIn-bottom">
                <?php
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 1";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug) {
                            echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                        }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 2";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 2";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 3";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 3";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 4";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 4";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 5";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 5";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 6";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 6";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 7";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 7";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 8";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 8";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 9";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 9";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 10";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 10";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 11";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 11";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 12";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 12";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 13";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 13";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 14";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 14";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 15";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 15";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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
                $sql = "SELECT * FROM prekes_ikelimas WHERE id = 16";
                $result = mysqli_query($conn, $sql);
                $query_results = mysqli_num_rows($result);
                if ($query_results > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['kategorija'] == $category_slug){
                            echo "<img class = 'content-image' src = '../add_item/uploads/".$row['Filename']."'>";
                        }
                    }
                }
                ?>
                <div class="content-details fadeIn-bottom">
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 16";
                    $result = mysqli_query($conn, $sql);
                    $query_results = mysqli_num_rows($result);
                    if ($query_results > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['kategorija'] == $category_slug) {
                                echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                            }
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