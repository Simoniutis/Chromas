<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true">
<title>Chromas</title>
    <link rel="stylesheet" href="design.css?v=<?php echo time(); ?>"/>
</head>
<body>
<div id="Chromas">
    <a href = "../main/index.php">
     <div id="Chromas_f">
        <span color="green"> Chromas </span>
      </div>
    </a>

	<svg class="Rectangle_1">
		<rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1900" height="140">
		</rect>
	</svg>
    


    <form action="../add_item/Chromas_PrekeP.php" method="get">
        <button class="button button1">Įdėti skelbimą</button>
    </form>
  
	<div id="Group_3">
		<svg class="Rectangle_3">
			<rect id="Rectangle_3" rx="26" ry="26" x="0" y="0" width="1435" height="70">
			</rect>
		</svg>
	</div>
    <svg class="Rectangle_4">
        <rect id="Rectangle_4" rx="14" ry="14" x="0" y="0" width="70" height="70">
        </rect>
    </svg>
	
	<div id="Registracija">
		<a href = "../Register/Register.html"> Registracija</a>
	</div>
	<div id="Prisijungimas">
		<a href = "../Register/login.php"> Prisijungimas</a>
	</div>
    <div id="Kontaktai">
        <a href = "../contacts/" method="post"> Kontaktai</a>
    </div>
    <svg class="Rectangle_7">
        <rect id="Rectangle_7" rx="100" ry="100" x="0" y="0" width="1190" height="700">
        </rect>
    </svg>
    <div id="Apie_mus">
        <span>Apie mus</span>
    </div>
    <div id="Kontaktaik">
        <span>Kontaktai</span>
    </div>
    <div id="Chromas_yra_skelbim_svetain_ku">
        <span>Chromas yra skelbimų svetainė, kuri leidžia registruotiems naudotojams talpinti savo įvairiausias elektronines prekes ir ieškoti norimų elektroninių prekių.</span>
    </div>
    <div id="Chromas_El_patas_infochromaslt">
        <span>"Chromas"<br/>El. paštas: info@chromas.lt<br/>Telefono numeris dėl informacijos: +37061474478<br/>Administracijos darbo laikas:<br/>I-V: 8.00 - 17.00<br/>VI-VII: nedirba</span><br/>
    </div>
    <svg class="Line_1" viewBox="0 0 245 1">
        <path id="Line_1" d="M 0 0 L 245 0">
        </path>
    </svg>
    <svg class="Line_2" viewBox="0 0 245 1">
        <path id="Line_2" d="M 0 0 L 245 0">
        </path>
    </svg>










    <svg class="Rectangle_8">
        <rect id="Rectangle_8" rx="0" ry="0" x="0" y="0" width="1900" height="110">
        </rect>
    </svg>

   

	<div id="Group_6">
		<div id="Iekoti">
			<span>Ieškoti</span>
		</div>
	</div>
	
	

    <input type="image" name="paieska" alt=""
           src="../add_item/uploads/search_icon_152764.png">
    <form action="../category_search/search.php" metod="get">
        <div class="autocomplete">
            <input type="text" name="search" placeholder="Paieška" >
        </div>
        <button name="submit" id="slapta">ss</button>
    </form>
</div>

</body>
</html>