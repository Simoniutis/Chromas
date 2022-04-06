<?php
include_once("../Product/connect.php");
session_start();
error_reporting(E_ERROR | E_PARSE); // siaip negerai naudoti toki (paslepia visus errorus)
// login_check.php reikia? - $_SESSION['user_id'] = $data["id_klientas"];
$user_id = $_SESSION['user_id'];

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `isimintos_prekes` WHERE id_isiminta_preke = '$remove_id'") or die('query failed');
    header('location:saved_products.php');
 }

?>


<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Įsimintinos prekės </title>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="saved_products.css">
    </head>
<body>
    <!--VIRŠUTINIS NAVIGACIJOS LANGAS-->
    <h1 class="logo"><a href="../main/index.html">Chromas</a></h1>
        <header class="header">
            <ul class="main-nav">
                <li><a href="../saved_products/saved_products.php" class="nav1">Įsimintos prekės</a></li>
                <li><a href="../user_page/vartotojolangas.html"><i class="fa fa-user-circle"></i></a></li>

                <!--<li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>-->
            </ul>
        </header> 
    <!--VIDURYS-->
    <section class="section-p1">
        <table>
            <thead>
                <tr>
                    <td>Pašalinti</td>
                    <td>Nuotrauka</td>
                    <td>Prekė</td>
                    <td>Kaina</td>
                    <td>Pardavėjo tel. Nr.</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $cart_query = mysqli_query($conn, "SELECT * FROM `isimintos_prekes` WHERE pirkejo_id = '$user_id'") or die('query failed');
            $grand_total = 0;
            if(mysqli_num_rows($cart_query) > 0)
            {
                while($fetch_cart = mysqli_fetch_assoc($cart_query))
                {
                ?>
                <tr>
                    <td><a href="saved_products.php?remove=<?php echo $fetch_cart['id_isiminta_preke']; ?>" 
                    class="pasalinimoMygtukas" name="pasalinti" onclick="return confirm('Ar tikrai norite pašalinti?');"><i class="fa fa-times-circle"></i></a></td>
                    <td> <img src="Nuotraukos/nuotrauka1.jpg" alt=""></td>
                    <td><a class="pavadinimas" href="#"><?php echo $fetch_cart['pavadinimas']; ?></a></td>
                    <td><?php echo $fetch_cart['kaina']; ?>€</td>
                    <td><?php echo $fetch_cart['tel_nr']; ?></td>
                    <form action="" method="post">
                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id_isiminta_preke']; ?>">

                    </form>
                    
                </tr>
                <?php
                }
            }
            else{
                echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">Prekių nėra</td></tr>';
            }
            ?>
            </tbody>
        </table>
    </section>
    <!--APAČIA-->
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
    
    <!--Refreshinant, nukelia į viršų-->
    <script>  
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }; 
    </script>

</body>
</html>