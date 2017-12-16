<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <!--
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=""> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    -->

</head>
<body>
<?php include("header.php");?>

<div class="container">

    <form class="form-signin">
        <h2><br>

            <?php
            if((!empty($_GET['fname'])) && (!empty($_GET['lname']))) {
                $fname = $_GET['fname'];
                $lname = $_GET['lname'];
                echo 'Welcome '.$fname.' '.$lname;
            }
            ?>
        </h2>

        <div class="list-group">
            <a href="index.php?page=accounts&action=edit" class="list-group-item"><span class="glyphicon glyphicon-user"></span> MY ACCOUNT DETAILS</a>
            <a href="index.php?page=accounts&action=all" class="list-group-item"><span class="glyphicon glyphicon-info-sign"></span> ALL ACCOUNT DETAILS</a>
            <a href="index.php?page=tasks&action=all" class="list-group-item"><span class="glyphicon glyphicon-pushpin"></span> TO-DO DETAILS</a>

        </div>

    </form>
</div>

</body>
</html>