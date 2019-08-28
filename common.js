$(document).ready(function() {

    $('#loginForm').submit(function() {
        $.ajax({
            type: "POST",
            url: "actions/loginAction.php",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
                var jsonData = JSON.parse(data);
                console.log(jsonData.success);
                $('.msg').html(jsonData.success);
                $('#loginForm').fadeOut();
            }
        });
    });
});