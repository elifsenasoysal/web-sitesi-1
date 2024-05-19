document.addEventListener('DOMContentLoaded', (event) =>
{
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event)
    {
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!isEmail(username))
        {
            alert("Kullanıcı adı bir e-posta adresi olmalıdır.");
            event.preventDefault(); // Formun gönderilmesini engeller
        } else if (password === "")
        {
            alert("Şifre boş bırakılamaz.");
            event.preventDefault();
        }
    });

    function isEmail(email)
    {
        //kullanıcı adında @ ve . olup olmadığı kontrol edilir 
        return email.includes('@') && email.includes('.');
    }
});
