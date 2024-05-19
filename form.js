document.addEventListener('DOMContentLoaded', (event) =>
{
    const form = document.getElementById('form');


    form.addEventListener('submit', function (event)
    {
        const ad = document.getElementById('ad').value.trim();
        const soyad = document.getElementById('soyad').value.trim();
        const mail = document.getElementById('mail').value.trim();
        const feedback = document.getElementById('feedback').value;
        const konu = document.getElementById('konu').value.trim();
        const mesaj = document.getElementById('mesaj').value.trim();

        if (ad === "")
        {
            alert("Adınızı giriniz.");
            event.preventDefault(); // Formun gönderilmesini engeller
        } else if (soyad === "")
        {
            alert("Soyadınızı giriniz.");
            event.preventDefault();
        } else if (mail === "")
        {
            alert("E-posta adresinizi giriniz.");
            event.preventDefault();
        } else if (feedback === "")
        {
            alert("Geri bildirim türünü seçiniz.");
            event.preventDefault();
        } else if (konu === "")
        {
            alert("Konuyu giriniz.");
            event.preventDefault();
        } else if (mesaj === "")
        {
            alert("Mesajınızı giriniz.");
            event.preventDefault();
        }
    });
});
