<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

