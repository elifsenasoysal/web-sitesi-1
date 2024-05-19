<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen kullanıcı adı alınır ve zararlı kod çalışmasını önlemek için temizlenir
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Kullanıcı adı '@' karakterine kadar olan kısmı çıkarılır
    $username_part = strstr($username, '@', true);

    // Şifre, kullanıcı adı '@' karakterine kadar olan kısmına eşit mi kontrol edilir
    if ($username_part === $password) {
        $message = "HOŞGELDİN " . $username_part;
    } else {
        //şifre doğru değilse firiş sayfasına geri gönderir
        header("Location: login.html?error=1");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoş Geldin</title>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <a href="index.html" class="btn">Ana Sayfaya Dön</a>
    </div>
</body>

</html>
