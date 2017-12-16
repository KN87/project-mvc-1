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



</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.

//print_r($data);
?>

<?php include("header.php");?>


<div class="container" align="center" style="border:1px solid #cecece">
    <form action="index.php?page=todos&action=create&id=<?php echo $data->id; ?>" method="POST">
        <br>
        <h3><u> VIEW TASK </u></h3>
        <p align="right">** Click on texts to edit your data</p>
        <div class="form-group row">
            <label for="owneremail" class="col-sm-2 col-form-label">Owner Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="owneremail" name="owneremail" value="<?php echo $data->owneremail;?>" readonly>
            </div>

            <label for="ownerid" class="col-sm-2 col-form-label">Owner Id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ownerid" name="ownerid" value="<?php echo $data->ownerid;?>" readonly >
            </div>

            <label for="cdate" class="col-sm-2 col-form-label">Created Date:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cdate" name="cdate" value="<?php echo $data->createddate;?>" readonly>
            </div>

            <label for="duedate" class="col-sm-2 col-form-label">Due Date:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="duedate" name="duedate" value="<?php echo $data->duedate;?>" readonly>
            </div>

            <label for="msg" class="col-sm-2 col-form-label">Message:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="msg" name="msg" value="<?php echo $data->message;?>" readonly>
            </div>

            <label for="done" class="col-sm-2 col-form-label">Is Done:</label>
            <div class="col-sm-10" align="left">
                <label class="radio-inline"><input type="radio" id="done" name="done" value="0"<?php if ($data->isdone == "0") {echo 'checked';}?> /> 0 </label>
                <label class="radio-inline"><input type="radio" id="done" name="done" value="1"<?php if ($data->isdone == "1") {echo 'checked';}?>  /> 1 </label>

            </div>

        </div>
        <!--<button class="btn btn-primary btn-md" id="edit" value="Click Here" >Edit</button> -->

        <button class="btn btn-primary btn-md" type="submit" id="save" value="update">Save Changes</button>

    </form>
    <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
        <br>
        <button class="btn btn-primary btn-md" type="submit" form="form1" value="delete">Delete Task</button>
    </form>
</div>


<!--<script src="js/scripts.js"> -->
<script type="text/javascript">

    $('#owneremail').click(function(){
        $(this).attr("readonly",false) ;
    });
    $('#ownerid').click(function(){
        $(this).attr("readonly",true) ;
    });
    $('#cdate').click(function(){
        $(this).attr("readonly",false) ;
    });
    $('#duedate').click(function(){
        $(this).attr("readonly",false) ;
    });
    $('#msg').click(function(){
        $(this).attr("readonly",false) ;
    });


</script>
</body>
</html>