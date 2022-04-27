<?php
    include 'connection.php';
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
	
    <input type="image" name="paieska" alt=""
           src="https://cdn.icon-icons.com/icons2/2551/PNG/512/search_icon_152764.png">
    <form action="search.php" metod="get">
        <div class="autocomplete">
            <input type="text" name="search" placeholder="Paieška" >
        </div>
        <button name="submit" id="slapta">ss</button>
    </form>
   
		<div class="container">
			<div class="content">
				<div class="content-overlay"></div>
                    <?php
                    $sql = "SELECT * FROM prekes_ikelimas WHERE id = 1";
                        $result = mysqli_query($conn, $sql);
                        $query_results = mysqli_num_rows($result);
                        if ($query_results > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
								echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
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
            $sql = "SELECT * FROM prekes_ikelimas WHERE id = 2";
            $result = mysqli_query($conn, $sql);
            $query_results = mysqli_num_rows($result);
            if ($query_results > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                        echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                    }
                }
                ?>
            </div>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 3";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 4";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 5";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 6";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 7";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 8";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 9";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 10";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 11";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 12";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
                  }
              }
              ?>
              <div class="content-details fadeIn-bottom">
                  <?php
                  $sql = "SELECT * FROM prekes_ikelimas WHERE id=12";
                  $result = mysqli_query($conn, $sql);
                  $query_results = mysqli_num_rows($result);
                  if ($query_results > 0){
                      while($row = mysqli_fetch_assoc($result)){
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 13";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 14";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 15";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>
	  <div class="container">
		<div class="content">
		  <a href="product.html" target="_blank">
              <div class="content-overlay"></div>
              <?php
              $sql = "SELECT * FROM prekes_ikelimas WHERE id = 16";
              $result = mysqli_query($conn, $sql);
              $query_results = mysqli_num_rows($result);
              if ($query_results > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<img class = 'content-image' src = '/Mano/add_item/uploads/".$row['Filename']."'>";
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
                          echo "<h3 class= >".$row['pavadinimas']."</h3>
								<p class= >".$row['aprasymas']."</p>";
                      }
                  }
                  ?>
              </div>
		  </a>
		</div>
	  </div>




	<svg class="Rectangle_5">
		<rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="1900" height="110">
		</rect>
	</svg>
	
	  
	  
</div>
</body>
</html>