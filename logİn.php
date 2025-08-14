<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
    <title>Giriş Yap</title>
</head>
<body>
    <div class="container mt-5">
        <!-- sayfa başlık-->
        <h2>Giriş Yap</h2>
        <!-- form içinde bilgileri işlenir,action ile verileri nereye gidecek onlar belirlendi-->
        <form class="login-container" action="login_process.php" method="post">
            <div class="form-group">
                <label>Kullanıcı Adı:</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Şifre:</label>
                <input type="password" name="password"class="form-control">
            </div>
              <!--Buton ile bilgileri veritanına aktarır-->
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
    </div>
    
</body>
</html>