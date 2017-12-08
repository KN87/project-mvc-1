<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <!--
    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>

    -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template
    <link href="signin.css" rel="stylesheet"> -->




</head>

<body>



<div class="container" align="center" style="border:1px solid #cecece">

    <form class="form-signin" action="index.php?page=accounts&action=login" method="POST">
        <img src="http://vignette2.wikia.nocookie.net/gtawiki/images/e/ee/GTAWiki-Todo-Checklist.png/revision/latest?cb=20151027125135"
             class="img-rounded">

        <!--
        Added to display success message Keka
        -->
        <p><br>
            <!--
           Added to display success message Keka
           -->
            <?php
            if(!empty($_GET['message'])) {
                $message = $_GET['message'];
                echo $message;
            }
            ?>
        </p>

        <p><u> For Existing User </u></p>


        <label for="email" class="sr-only">Email address</label>
        <input type="text" id="email" name="email" placeholder="Email address" required autofocus>

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

        <button class="btn btn-primary" type="submit">Sign in</button>
    </form>


    <p> For New User:
        <a href="index.php?page=accounts&action=register">Register Here</a>
    </p>

    <!--
    <form action="index.php?page=accounts&action=register" method="POST">
        <br>
        <button class="btn btn-primary" name="Register" type="register">New User</button>

    </form>
    -->
</div> <!-- /container -->





<!--
<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>


</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

/Prof code -->
<script src="js/scripts.js"></script>
</body>
</html>