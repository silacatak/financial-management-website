<?php
//database'i içeri aktar
include("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userName = $_POST['username'];
    $password =$_POST['password'];

    //kullanıciad silacatak kişiyi getir
    $sql = "SELECT * FROM users WHERE kullaniciad = '$userName'";
    $result  = $conn->query($sql); // sonuc olarak döndür


    //result dan dönen satır sayısı 1 tane ise içeri gir
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();//resulttan gelen satırdaki verileri sütun adıyla dön
        if($password === $row['password']){ //şifreler eşleşiyor mu?
            echo "Giriş başarılı , Hoş geldinn ".$row['kullaniciad'];
        }else{
            echo "Giriş başarısız";
        }
    }else{
        echo "Kullanıcı Bulunamadı";
    }

    $conn->close();
}
?>