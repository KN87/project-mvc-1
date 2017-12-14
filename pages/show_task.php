<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.

print_r($data);
?>

<?php include("header.php");?>


<div class="container" align="center" style="border:1px solid #cecece">
    <form action="index.php?page=todos&action=create" method="POST">
        <br>
        <h3><u> VIEW TASK </u></h3>

        <div class="form-group row">
            <label for="owneremail" class="col-sm-2 col-form-label">Owner Email:</label>
            <div class="col-sm-10">
                <input type="owneremail" class="form-control" id="owneremail" name="owneremail" value="<?php echo $data->owneremail;?>">
            </div>

            <label for="lname" class="col-sm-2 col-form-label">Owner Id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $data->ownerid;?>" readonly >
            </div>

            <label for="cdate" class="col-sm-2 col-form-label">Created Date:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cdate" name="cdate" value="<?php echo $data->createddate;?>">
            </div>

            <label for="duedate" class="col-sm-2 col-form-label">Due Date:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="duedate" name="duedate" value="<?php echo $data->duedate;?>">
            </div>

            <label for="msg" class="col-sm-2 col-form-label">Message:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="msg" name="msg" value="<?php echo $data->message;?>">
            </div>

            <label for="done" class="col-sm-2 col-form-label">Is Done:</label>
            <div class="col-sm-10" align="left">
                <label class="radio-inline"><input type="radio" id="done" name="done" value="0"<?php if ($data->isdone == "0") {echo 'checked';} ?>/> 0 </label>
                <label class="radio-inline"><input type="radio" id="done" name="done" value="1"<?php if ($data->isdone == "1") {echo 'checked';}?> /> 1 </label>

            </div>

        </div>
        <button class="btn btn-primary btn-md" type="submit" value="update">Save Changes</button>

    </form>
    <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
        <br>
        <button class="btn btn-primary btn-md" type="submit" form="form1" value="delete">Delete Task</button>
    </form>
</div>







<script src="js/scripts.js"></script>
</body>
</html>