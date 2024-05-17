<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST['ad']);
    $soyad = htmlspecialchars($_POST['soyad']);
    $eposta = htmlspecialchars($_POST['eposta']);
    $feedback = htmlspecialchars($_POST['feedback']);
    $konu = htmlspecialchars($_POST['konu']);
    $mesaj = htmlspecialchars($_POST['mesaj']);
    ?>
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Başarılı</title>
        <link rel="stylesheet" href="cssler/form.css">
    </head>
    <body>
        <h1>Formunuz başarıyla oluşturulmuştur</h1>
        <p><strong>Adınız:</strong> <?php echo $ad; ?></p>
        <p><strong>Soyadınız:</strong> <?php echo $soyad; ?></p>
        <p><strong>E-Posta Adresiniz:</strong> <?php echo $eposta; ?></p>
        <p><strong>Geri Bildirim Türü:</strong> <?php echo $feedback; ?></p>
        <p><strong>Konu:</strong> <?php echo $konu; ?></p>
        <p><strong>Mesajınız:</strong> <?php echo nl2br($mesaj); ?></p>
    </body>
    </html>
    <?php
} else {
    header("Location: index.html");
    exit();
}
?>