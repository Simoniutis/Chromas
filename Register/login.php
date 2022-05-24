<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "chromas");
$msg='';
if(isset($_POST['submit'])){
	$time=time()-30;
	$ip_address=getIpAddr();
	$query=mysqli_query($connect,"select count(*) as total_count from bandymai where bandymo_laikas > $time and ip='$ip_address'");
    $check_login_row=mysqli_fetch_assoc($query);
	$total_count=$check_login_row['total_count'];
  //Checking if the attempt 3, or youcan set the no of attempt her. For now we taking only 3 fail attempted
	if($total_count==3){
		$msg="Išnaudojote visus bandymus prisijungti. Bandykite prisijungti už 30 sekundžių";
	}else{
    //Getting Post Values
		$username=$_POST['username'];
		$password=base64_encode($_POST['password']);
    // Coding for login
		$res=mysqli_query($connect,"select * from klientai where el_pastas='$username' and  slaptazodis='$password'");
		if(mysqli_num_rows($res)){
			$_SESSION['IS_LOGIN']='yes';
            $foo = $res->fetch_array(MYSQLI_ASSOC);
            $_SESSION['el_pastas'] = $foo["el_pastas"];
            $_SESSION['user_id'] = $foo["id_klientas"];
			mysqli_query($connect,"delete from bandymai where ip='$ip_address'");
            echo "<script>window.location.href='/Chromas/user_page/vartotojolangas.php';</script>";
		}else{
			$total_count++;
			$rem_attm=3-$total_count;
			if($rem_attm==0){
				$msg="Išnaudojote visus bandymus prisijungti. Bandykite prisijungti už 30 sekundžių";
			}else{
				$msg="Neteisingi prisijungimo duomenys. Jums liko bandymų: <br/>$rem_attm";
			}
			$try_time=time();
			mysqli_query($connect,"insert into bandymai(id_bandymas, ip, bandymo_laikas) values(not null, '$ip_address','$try_time')");
			
		}
	}
}

// Getting IP Address
function getIpAddr(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
       $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
       $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
       $ipAddr=$_SERVER['REMOTE_ADDR'];
    }
   return $ipAddr;
}
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <meta charset="utf-8">
        <title>Prisijungti</title>
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="./login.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form class="form" id="login--form"  method="post" actions="">
            <h1 class="form__title">Prisijungti</h1>
            <form method="post">
                <div class="form__input-group">
                    <input type="text" name="username" id="username" class="form__input" placeholder="El.paštas">
                </div>
                <div class="form__input-group">
                    <input type="password" name="password" id="password" class="form__input" placeholder="Slaptažodis">
                </div>
                <div id="error"></div>
                <p class="form__text">
                    <a class="form__link" href="./Register.html" id="linkCreateAccount">Kurti naują paskyrą</a>
                </p>
                <div class="form-group">
                  <input type="submit" name="submit" class="form__button" value="Tęsti">
                </div>
                <div id="result"><?php echo $msg?></div>
                <p class="form__text">
                    <a href="#forgot_pswd" class="form__link">Pamiršau slaptažodį</a>
                </p>
                <div class="overlay" id="forgot_pswd">
                    <div class="wrapper">
                        <h2>Keisti slaptažodį</h2>
                        <a href="#" class="close">&times;</a>
                        <div class="content">
                            <div class="container">
                                <form method="post">
                                    <p class="form__email--msg">
                                        <a> El. paštu Jums atsiųsime nuorodą, kurią paspaudę 
                                            slaptažodį galėsite pakeisti
                                        </a>
                                    </p>
                                    <input type="text" name="email" id="email" class="form__input" placeholder="El. paštas">
                                    <button name="send" id="send" class="form__button">Siųsti</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

<script>
    $(document).ready(function(){
    // Sending email if 'Forgot password'
    $('#send').click(function(){
        var email = $('#email').val();
        var varData = 'email=' + email;
        
        $.ajax({
            type: "POST",
            url: 'send.php',
            data: varData,
            success: function() {
                alert("Išsiuntėme laišką nurodytu el.paštu - patikrinkite savo el.pašto dėžutę");
            }
        });
    });
});
</script>
