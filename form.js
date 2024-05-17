document.addEventListener("DOMContentLoaded", () =>
{
    const form = document.getElementById("iletisimFormu");

    form.addEventListener("submit", function (event)
    {
        let isValid = true;
        let errorMessage = "";

        const ad = document.getElementById("ad").value.trim();
        const soyad = document.getElementById("soyad").value.trim();
        const mail = document.getElementById("mail").value.trim();
        const feedback = document.getElementById("feedback").value;
        const konu = document.getElementById("konu").value.trim();
        const mesaj = document.getElementById("mesaj").value.trim();

        if (!ad)
        {
            isValid = false;
            errorMessage += "Adınızı giriniz.\n";
        }

        if (!soyad)
        {
            isValid = false;
            errorMessage += "Soyadınızı giriniz.\n";
        }

        if (!mail)
        {
            isValid = false;
            errorMessage += "E-posta adresinizi giriniz.\n";
        } else
        {
            const mailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!mailPattern.test(mail))
            {
                isValid = false;
                errorMessage += "Geçerli bir e-posta adresi giriniz.\n";
            }
        }

        if (!feedback)
        {
            isValid = false;
            errorMessage += "Geri bildirim türünü seçiniz.\n";
        }

        if (!konu)
        {
            isValid = false;
            errorMessage += "Konuyu giriniz.\n";
        }

        if (!mesaj)
        {
            isValid = false;
            errorMessage += "Mesajınızı giriniz.\n";
        }

        if (!isValid)
        {
            alert(errorMessage);
            event.preventDefault();
        }
    });
});
