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

<?php include("header.php");?>
<div class="container">

    <form class="form-signin">
        <h2><br>

            <?php
            if(!empty($_GET['msg'])) {
                $errorMsg = $_GET['msg'];
                echo $errorMsg ;
            }
            ?>
        </h2>
    </form>
    <a href="index.php?page=todos&action=gettaskform" class="btn btn-primary" role="button">Add New</a>
</div>
</body>
</html>

