<?php
include_once("connect.php");
session_start();
error_reporting(E_ERROR | E_PARSE); // siaip negerai naudoti toki (paslepia visus errorus)
// login_check.php reikia? - $_SESSION['user_id'] = $data["id_klientas"];
$user_id = $_SESSION['user_id'];

$id = "";
if (isset($_GET['id']))
{
    $id = $_GET['id'];
}

$sql_query = "SELECT * FROM prekes WHERE id_preke = $id";
$result=$conn->query($sql_query);

if(isset($_POST['isiminti'])){
   if(!isset($user_id)){ 
    echo '<script> alert("Negalima įsiminti neprisijungus");</script>';
   }else{
    $product_pavadinimas = $_POST['product_pavadinimas'];
    $product_kaina = $_POST['product_kaina'];
    $product_aprasas = $_POST['product_aprasas'];
    $product_tel_nr = $_POST['product_tel_nr'];
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `isimintos_prekes` WHERE pavadinimas = '$product_pavadinimas' AND pirkejo_id = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($select_cart) > 0){
       echo '<script> alert("Ši prekė jau yra įsiminta!");</script>';
    }else{
       mysqli_query($conn, "INSERT INTO `isimintos_prekes`(pirkejo_id, pavadinimas, kaina, tel_nr) 
       VALUES('$user_id', '$product_pavadinimas', '$product_kaina', '$product_tel_nr')") or die('query failed');
       echo '<script> alert("Prekė įsiminta!");</script>';
    }
   }
 
 };

?>

<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Prekės langas </title>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="product.css">
    </head>
<body>
    <div class="pagrindinis">
        <!--VIRŠUTINIS NAVIGACIJOS LANGAS-->
        <h1 class="logo"><a href="../main/index.html">Chromas</a></h1>
        <header class="header">
            <ul class="main-nav">
                <li><a href="../saved_products/saved_products.php" class="nav1">Įsimintos prekės</a></li>
                <li><a href="../user_page/vartotojolangas.html"><i class="fa fa-user-circle"></i></a></li>
                <li><a href="logout.php">logout</i></a></li>
                <!--<li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>-->
            </ul>
        </header> 
        <!--VIDURYS-->
        <?php
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                ?>
                <form method="post" class="box" action="">
                <div class="eilute">
                    <div class="stulpelis">
                        <div class="nuotraukos">
                            <div class="pagrNuotrauka">
                                <img src="Nuotraukos/nuotrauka1.jpg" id="pagrNuotrauka" alt="">
                            </div>
                            <div class="smallNuotraukos">
                                <img src="Nuotraukos/nuotrauka1.jpg" alt=""
                                onclick="clickme(this)">
                                <img src="Nuotraukos/nuotrauka2.jpg" alt=""
                                onclick="clickme(this)">
                                <img src="Nuotraukos/nuotrauka3.jpg" alt=""
                                onclick="clickme(this)">
                                <img src="Nuotraukos/nuotrauka4.jpg" alt=""
                                onclick="clickme(this)">
                            </div>
                        </div>
                    </div>          
                    <div class="stulpelis stulpelis2">
                        <div class="turinys">
                            <p class="tipas">Tipas</p>
                            <h2><?php echo $row["pavadinimas"]; ?></h2>
                            <p class="kaina"><?php echo $row["kaina"]; ?> €</p>
                            <input type="submit" value="Įsiminti" name="isiminti" class="button">
                            <p class="prekesInfo"><?php echo $row["aprasas"]; ?>
                            </p>
                            <h3>Susisiekti:</h3>
                            <p class="TelNr"><?php echo $row["tel_nr"]; ?></p>
                            <input type="hidden" name="product_pavadinimas" value="<?php echo $row['pavadinimas']; ?>">
                            <input type="hidden" name="product_kaina" value="<?php echo $row['kaina']; ?>">
                            <input type="hidden" name="product_aprasas" value="<?php echo $row['aprasas']; ?>">
                            <input type="hidden" name="product_tel_nr" value="<?php echo $row['tel_nr']; ?>">
                        </div>
                    </div>
                    <footer class="footer">
                        <h1>Chromas</h1>
                        <h2 class="apacia">Tekstas (angl. text, pranc. texte) – duomenys, 
                            pateikiami ženklais, simboliais, žodžiais, žodžių junginiais, 
                            sakiniais, pastraipomis, lentelėmis, išnašomis ar kitais ženklų 
                            junginiais, parengti siekiant perteikti prasmę ir darant 
                            prielaidą, jog jie suvokiami skaitytojų, mokančių tam tikrą 
                            natūraliąją arba dirbtinę kalbą.
                        </h2>
                    </footer>
                </div>
                </form>
                <?php
            }
        }
        else
        {
            echo '<h3 style="color:gray">Tokios prekės nėra</h3>';
        }
        ?>
    </div>

    <script>
        function clickme(smallImg)
        {
            var pagrImg = document.getElementById("pagrNuotrauka");
            pagrImg.src = smallImg.src;
        }
    </script>
    
    <!--Refreshinant, nukelia į viršų-->
    <script>  
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }; 
    </script>

</body>
</html>