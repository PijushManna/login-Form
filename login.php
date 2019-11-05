<?php include_once('classes/class.validate.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(function() {
            $('#show_register').click(function() {
                $('#login_form').hide();
                $('#register_form').show();
                return false;
            })
        })
        $(function() {
            $('#show_login').click(function() {
                $('#login_form').show();
                $('#register_form').hide();
                return false;
            })
        })
    </script>
</head>

<body>
    <div id="navheader">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">TODO LIST</span>
        </nav>
    </div>
    <br>
    <?php if (isset($error)) {
        echo '<div class="alert alert-error">' . $error . '</div>';
    } ?>
    <br><br><br>




    <form action="login.php" method="post">
        <div id="login_form">
            <input type="text" placeholder="Username" name="login_username" id="username">
            <input type="password" placeholder="password" name="login_password" id="password">
            <input type="submit" class="btn btn-success" name="login"> 
            <p> Don't have an account? <a href="#" id="show_register">Register Here</a></p>
        </div>
        <div id="register_form">
            <div id="inputData">
                <!-- Username -->
                <input type="text" placeholder="Username" name="username" id="username">
                <input type="password" placeholder="password" name="password" id="password">
                <input type="email" placeholder="email" name="email" id="email">
                <input type="submit" value="submit" name="register">
                <p>Already have an account ? <a href="#" id="show_login">Login Here</a>
                </p>
            </div>
        </div>
    </form>
</body>

</html>