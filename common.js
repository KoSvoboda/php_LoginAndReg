$(document).ready(function() {

    $('[value = "Login"]').submit(function() {
        if (document.form.name.value == '' || document.form.phone.value == '' ) {
            valid = false;
            return valid;
        }
        alert('OK');
        $.ajax({
            type: "POST",
            url: "regAction.php",
            data: $(this).serialize()
        }).done(function() {
           // $('.js-overlay-thank-you').fadeIn();
           // $(this).find('input').val('');
           // $('#form').trigger('reset');
        });
        return false;
    });
});