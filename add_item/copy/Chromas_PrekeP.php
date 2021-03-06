<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web 1920 – 1</title>
<link rel="stylesheet" type="text/css" href="Chromas_Prideti.css" />
    <script type="text/javascript">

        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("kaka").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };
        function PreviewImage1() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("kaka1").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview1").src = oFREvent.target.result;
            };
        }; function PreviewImage2() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("kaka2").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview2").src = oFREvent.target.result;
            };
        };
    </script>
</head>
<body>

<div id="Web_1920__1">

    
    <div id="Chromas">
        <span>Chromas</span>
    </div>
    <svg class="Rectangle_1">
        <rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1900" height="140">
        </rect>
    </svg>
    
    <svg class="Rectangle_5">
        <rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="1900" height="110">
        </rect>
    </svg>

    <svg class="Rectangle_8">
        <rect id="Rectangle_8" rx="20" ry="20" x="0" y="0" width="1680" height="385">
        </rect>
    </svg>

    <svg class="Rectangle_9">
        <rect id="Rectangle_9" rx="20" ry="20" x="0" y="0" width="1680" height="315">
        </rect>
    </svg>
    <svg class="Rectangle_10">
        <rect id="Rectangle_10" rx="20" ry="20" x="0" y="0" width="1680" height="315">
        </rect>
    </svg>
    <svg class="Rectangle_7">
        <rect id="Rectangle_10" rx="20" ry="20" x="0" y="0" width="1680" height="385">
        </rect>
    </svg>
    <div id="IkeltiNuotraukas">
        <span>Ikelkite nuotraukas</span>
    </div>
    <div class = "image-preview" id="image-preview">
        <img id="uploadPreview" style="width: 400px; height: 200px;" />
    </div>
    <div class = "image-preview1" id="image-preview1">
        <img id="uploadPreview1" style="width: 400px; height: 200px;" />
    </div>
    <div class = "image-preview2" id="image-preview2">
        <img id="uploadPreview2" style="width: 400px; height: 200px;" />
    </div>

	<form class="" action="item.php" method="post" autocomplete="off" enctype="multipart/form-data">

        <button class="button button1" name="patvirtinti">Įkelti prekę</button>
        <button class="button button2" name="atsaukti">Atšaukti</button>


        <input type="file" name="choosefile" id ="kaka" value="" onchange="PreviewImage();"/>
        <input type="file" name="choosefile1" id ="kaka1" value="" onchange="PreviewImage1();"/>
        <input type="file" name="choosefile2" id ="kaka2" value="" onchange="PreviewImage2();"/>
        <label for="choosefile">Choose File</label>
            <input type="text"  name="pavadinimas" placeholder="Įveskite pavadinimą" required value="">
            <textarea class="kazkas" placeholder="Aprašykite prekę" class="textarea" name = "aprasymas"></textarea>
			<select class = "dropdown" name="kategorija" required>
		    	<option value = "Kompiuteris" selected>Kompiuteris</option>
		    	<option value = "Pelė">Pelė</option>
		    	<option value = "Monitorius" >Monitorius</option>
		    	<option value = "Kolonėlė" >Kolonėlė</option>
		    	<option value = "Kabelis">Kabelis</option>
		    	<option value = "Pultas">Pultas</option>
			</select>
            <select class = "dropdown1" name ="bukle" required>
                <option value = "Nauja" selected>Nauja</option>
                <option value = "Gera">Gera</option>
                <option value = "Vidutinė" >Vidutinė</option>
                <option value = "Žema" >Žema</option>
            </select>
        <input type="text1" id="kaina" name="kaina" placeholder="Įveskite kainą" required value="">
        <input type="text2" id="telefonas" name="telefonas" placeholder="Įveskite telefono numerį" required value="">
        <input type="text3" id="miestas" name="miestas" placeholder="Įveskite miestą" required value="">
        <input type="text4" id="adresas" name="adresas" placeholder="Įveskite adresą" required value="">
    </form>
    <div id="Preks_apraymas">
        <span>Prekės aprašymas</span>
    </div>

    <div id="Pavadinimas">
        <span>Pavadinimas</span>
    </div>
	
	<div id="Kategorija">
		<span>Kategorija</span>
	</div>
	
	<div id="Bkl">
		<span>Būklė</span>
	</div>
	<div id="Kaina">
		<span>Kaina</span>
	</div>

	<div id="Telefono_nr">
		<span>Telefono nr.</span>
	</div>
	<div id="Adresas">
		<span>Adresas</span>
	</div>
	<div id="Miestas">
		<span>Miestas</span>
	</div>


	<svg class="Line_1" viewBox="0 0 1680 1">
		<path id="Line_1" d="M 0 0 L 1680 0">
		</path>
	</svg>
	<svg class="Line_2" viewBox="0 0 1680 1">
		<path id="Line_2" d="M 0 0 L 1680 0">
		</path>
	</svg>
	<svg class="Line_3" viewBox="0 0 1680 1">
		<path id="Line_3" d="M 0 0 L 1680 0">
		</path>
	</svg>
	<svg class="Line_4" viewBox="0 0 1680 1">
		<path id="Line_4" d="M 0 0 L 1680 0">
		</path>
	</svg>
	<svg class="Line_5" viewBox="0 0 1680 1">
		<path id="Line_5" d="M 0 0 L 1680 0">
		</path>
	</svg>
    <form autocomplete="off" action="second.html">
        <div class="autocomplete">
            <input id="myInput" type="text45" name="myCountry" placeholder="Paieška">
        </div>
        <input type="image" name="submit" src="https://cdn.icon-icons.com/icons2/2551/PNG/512/search_icon_152764.png"  alt="Submit"  />
    </form>

    <script type="text/javascript" src="java.js"></script>
    <script language="javascript">
        autocomplete(document.getElementById("myInput"));
    </script>
    <script type="text/javascript" src="scriptadd.js"></script>
    <script language="javascript"></script>
   
</div>
</body>
</html>