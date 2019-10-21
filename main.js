function sendPost() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
        if (form.checkValidity() === false) {
            form.classList.add('was-validated');
        } else {
            form.classList.remove('was-validated');
            // Наша функция, которая будет осуществлять ajax-отправку
            jQuery.ajax({    // Начала конструкции для работы с Ajax через jQuery
                type: "GET", // Метод, которым получаем данные из формы
                url: "/contact-form.php", // Обработчик формы.
                data: jQuery("#form").serialize(), // Этот метод, берет форму с id=form и достает оттуда данные
                success: function (html) {    // функция выполняемая при успешном отправлении данных
                    $('#closeModal').click();
                    alert("Ваше сообщение успешно отправлено. ");
                }
            });
        }
    });
}
$('#closeModal').click(function () {
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.classList.remove('was-validated');
        });
    }
);
$('.close').click(function () {
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.classList.remove('was-validated');
        });
    }
);
