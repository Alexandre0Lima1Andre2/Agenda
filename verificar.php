<?php
    if(isset($_POST['txt_email'],$_POST['txt_senha']) && !empty($_POST['txt_email']) && !empty($_POST['txt_senha'])){
        $email=$_POST['txt_email'];
        $senha=$_POST['txt_senha'];
        header('Location:main.php');
    }else{
        header('Location:entrar.php');
    }
?>