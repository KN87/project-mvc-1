<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <!-- Bootstrap core CSS
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
</head>

<body>
<?php include("header.php");?>
<div class="container" align="center">
    <div class="table-responsive">
    <form action="index.php?page=todos&action=delete" method="POST">
        <h3><u> VIEW MY TO-DO DETAILS </u></h3>
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
    <a href="index.php?page=todos&action=gettaskform" class="btn btn-primary" role="button">Add New</a>

</div>
</div>





<!--<script src="js/scripts.js"></script> -->
<!-- To check or uncheck all checkboxes from header

<script type="text/javascript">
    $(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });

        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
</script>

-->

</body>
</html>