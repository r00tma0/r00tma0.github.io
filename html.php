<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your existing meta tags and stylesheets -->
</head>

<header>
    <!-- Your existing header content -->
</header>

<body>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div id="zewform">
                <!-- Your existing form structure -->
                <form autocomplete="off" id="login-form">
                    <!-- Your existing input fields -->

                    <!-- Add a div to display login error message -->
                    <div id="login-error" style="color: red;"></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Your existing scripts -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/zew/js/zewform.js"></script>
    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(event) {
                event.preventDefault();

                var username = $('#username').val();
                var password = $('#password').val();

                $.getJSON('data.json', function(data) {
                    var userFound = false;

                    for (var i = 0; i < data.length; i++) {
                        if (data[i].username === username && data[i].password === password) {
                            userFound = true;
                            break;
                        }
                    }

                    if (userFound) {
                        // Redirect or display success message
                        window.location.href = 'success_page.html';
                    } else {
                        // Display login error message
                        $('#login-error').text('Invalid username or password.');
                    }
                });
            });
        });
    </script>
</body>
</html>
