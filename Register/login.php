<?php
session_start();

?>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <meta charset="utf-8">
        <title>Prisijungti</title>
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="./login.css">
        <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form class="form" id="login--form">
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
                    <a href="#forgot_pswd" class="form__link">Pamiršau slaptažodį</a>
                </p>
                <div class="overlay" id="forgot_pswd">
                    <div class="wrapper">
                        <h2>Keisti slaptažodį</h2>
                        <a href="#" class="close">&times;</a>
                        <div class="content">
                            <div class="container">
                                <form>
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
                <p class="form__text">
                    <a class="form__link" href="./Register.html" id="linkCreateAccount">Kurti naują paskyrą</a>
                </p>
                <input type="button" name="login" id="login" class="form__button" value="Tęsti">
            </form>
        </div>
    </body>
</html>

<script>
    // Verifying email and password
    $(document).ready(function(){
    $('#login').click(function(){
    var username = $('#username').val();
    var password = $('#password').val();
    if ($.trim(username).length > 0 && $.trim(password).length > 0) {
        $.ajax ({
            url:"login_check.php",
            method:"POST",
            data:{username:username, password:password},
            cache:false,
            success:function(data) {
                if (data) {
                    // if data is correct - wip
                    $('#error').html("<span class='text-danger'>Data accepted</span>");
                    console.log("succesful")
                    window.location.href = "/Chromas-main/user_page/vartotojolangas.php";
                } else {
                    var options = {
                        distance: '40',
                        direction:'left',
                        times:'3'}
                    $('#error').html("<span class='text-danger' style=color:red>Neteisingas el.paštas ar slaptažodis</span>");
                }
            }
        });
    } else {}
    });
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
