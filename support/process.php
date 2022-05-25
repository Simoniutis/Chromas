<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:../support/index.php?error');
       }
       else
       {
           $to = "chromas.info@gmail.com";

           if(mail($to, $Subject, $Msg, $Email))
           {
               header("location:../support/index.php?success");
           }
       }
    }
    else
    {
        header("location:../support/index.php");
    }
?>