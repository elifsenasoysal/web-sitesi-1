<?php
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $e_posta=$_POST["eposta"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    $ip=$_SERVER["REMOTE_ADDR"];
     if(!$ad){
        echo("isim kısmı boş bırakılmaz");
     }
     else{
        if(!$soyad){
        echo("soyisim kısmını boş bıraktınız");
        }else{
            if(!$e_posta){
                echo("e posta kısmını boş bırakmayınız");
            }else{
                if(!$konu){
                    echo("konu kısmı boş bırakılmamalı");
                }else{
                    if(!$mesaj){
                        echo("mesaj kısmını boş bırakmayınız");
                    }else{
                        echo("<b>Ad:</b>".$ad."<br>");
                        echo("<b>Soyad:</b>".$soyad."<br>");
                        echo("<b>E-Posta:</b>".$e_posta."<br>");
                        echo("<b>Konu:</b>".$konu."<br>");
                        echo("<b>Mesaj:</b>".$mesaj."<br>");
                        echo("<b>IP:</b>".$ip."<br>");
                    }
                }
            }
        }
     }
?>

<!-- bu işlev javascript ile yapmalısın  -->