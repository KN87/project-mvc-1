<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>
<body>


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
            <a href="index.php?page=accounts&action=show" class="list-group-item">ACCOUNT DETAILS</a>
            <a href="index.php?page=tasks&action=all" class="list-group-item">TO-DO DETAILS</a>

        </div>

    </form>
</div>
</body>
</html>