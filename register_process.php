<?php
//database'i içeri aktar
include("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userName = $_POST['username'];
    $email =$_POST['mail'];
    $password =$_POST['password'];

    //Parolayı güvenli şekilde hashle ,kırılması imkansız 
    //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    //YENİ KAYIT
    $sql = "INSERT INTO users(kullaniciad,email,password) VALUES ('$userName','$email','$password')";

    //başarılı olup olmama durumlarında sonuç olarak dönen mesaj
    if($conn->query($sql)===TRUE){
        echo "Kayıt başarılı Hoşgeldinizz";
    }else{
        echo "Hata:".$sql."<br>".$conn-error;
    }
    $conn->close();
}
?>