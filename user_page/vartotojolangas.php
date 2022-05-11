<?php

session_start();
if(!isset($_SESSION["el_pastas"])){
   header("Location: ../Register/login.php");
}
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Duomenu-Keitimas</title>
	<link rel="stylesheet" href="design.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div id="Web_1920__1">
	<svg class="Rectangle_1">
		<rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1920" height="140">
		</rect>
	</svg>
	<div id="Component_1__1" class="Component_1___1">

		<img id="istockphoto-1223671392-612x612" src="istockphoto-1223671392-612x612.png" srcset="istockphoto-1223671392-612x612.png 1x, istockphoto-1223671392-612x612@2x.png 2x">
	</div>
	<svg class="Rectangle_2">
		<rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="406" height="70">
		</rect>
	</svg>
	<div class="Prisijungimo_duomenys">
		<span>Prisijungimo duomenys</span>
	</div>
	<svg class="Rectangle_3">
		<rect id="Rectangle_3" rx="0" ry="0" x="0" y="0" width="605" height="70">
		</rect>
	</svg>
	<div class="Prisijungimo_duomenys_m">
		<span>Prisijungimo duomenys</span>
	</div>
	<?php
            $sql="SELECT * FROM klientai WHERE el_pastas='{$_SESSION["el_pastas"]}'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                        <div class="Vartojo_Vardas">
                            <h1> <?php echo $row['vardas'];?></h1>
                        </div>
                        <div class="E_Pastas">
                          <h3>  <?php echo $row['pavarde'];?> </h3>
                        </div>
                        <div class="Slaptaodis">
                          <h4><?php echo $row['el_pastas'];?></h4>
                        </div>
                    <?php
                }
            }

        ?>

	<div class="Keisti_duomenis">
	<span>
		<a href="profile.php"><button type="button" class="btn btn-outline-success" > Redaguoti duomenis</button></a>
	</span>

    </div>
	
	<img id="niclas-illg-wzVQp_NRIHg-unspla" src="niclas-illg-wzVQp_NRIHg-unspla.png" srcset="niclas-illg-wzVQp_NRIHg-unspla.png 1x, niclas-illg-wzVQp_NRIHg-unspla@2x.png 2x">
		
	<img id="niclas-illg-wzVQp_NRIHg-unspla_t" src="niclas-illg-wzVQp_NRIHg-unspla_t.png" srcset="niclas-illg-wzVQp_NRIHg-unspla_t.png 1x, niclas-illg-wzVQp_NRIHg-unspla_t@2x.png 2x">
		
	<img id="niclas-illg-wzVQp_NRIHg-unspla_u" src="niclas-illg-wzVQp_NRIHg-unspla_u.png" srcset="niclas-illg-wzVQp_NRIHg-unspla_u.png 1x, niclas-illg-wzVQp_NRIHg-unspla_u@2x.png 2x">
		
	<img id="niclas-illg-wzVQp_NRIHg-unspla_v" src="niclas-illg-wzVQp_NRIHg-unspla_v.png" srcset="niclas-illg-wzVQp_NRIHg-unspla_v.png 1x, niclas-illg-wzVQp_NRIHg-unspla_v@2x.png 2x">
		
	<div class="Pagrindinis_puslapis">
		<a href=/Chromas/main/index.php>Pagrindinis puslapis</a>
	</div>
</div>
<script src="profile.php"></script>
</body>
</html>
