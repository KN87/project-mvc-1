<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script> -->
    <!--[endif]-->
</head>

<body>
<?php include("header.php");?>
<div class="container" align="center">
    <div class="table-responsive">
        <form action="index.php?page=todos&action=delete" method="POST">
            <h3><u> VIEW ALL ACCOUNT DETAILS </u></h3>
            <table class="table table-bordered">
                <?php
                //this is how you print something
                //print "Keka";
                echo "<br>";
                print utility\htmlTable::genarateTableFromMultiArray($data);
                echo "<br>";
                ?>
            </table>

            <!--<button type="button" class="btn btn-primary">Add New</button> -->
            <!--<button type="button" class="btn btn-primary" name="edit" value="edit">Edit</button> -->
            <!--<a href="index.php?page=todos&action=delete" class="btn btn-primary" role="button">Delete</a>

          <button type="submit" class="btn btn-primary" name="delete" value="delete">Delete</button> -->
        </form>


    </div>
</div>
<!--
<h1>All Accounts</h1>

<h1> HI</h1>

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>


<script src="js/scripts.js"></script> -->
</body>
</html>