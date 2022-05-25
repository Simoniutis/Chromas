<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Contact Us Form In Php</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Parašykite mums </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Užpildykite langelius ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Jūsų žinutė išsiųsta ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="Vardas" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="El. Paštas" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Žinutės pavadinimas" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Jūsų žinutė"></textarea>
                            <button class="btn btn-success" name="btn-send"> Siųsti </button>
                        </form>
                    </div>
                    <div class="Pagrindinis_puslapis">
	            	<a href=/Chromas/main/index.php>Pagrindinis puslapis</a>
	                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
