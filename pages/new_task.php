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
session_start();
$ownerId = $_SESSION["userID"];

?>
<?php include("header.php");?>


<div class="container" align="center" style="border:1px solid #cecece">
    <form action="index.php?page=todos&action=create" method="POST">
        <br>
        <h3><u> CREATE NEW TASK </u></h3>

        <div class="form-group row">
            <label for="owneremail" class="col-sm-2 col-form-label">Owner Email:</label>
            <div class="col-sm-10">
                <input type="owneremail" class="form-control" id="owneremail" name="owneremail" placeholder="Enter Email xyz@abc.com">
            </div>

            <label for="lname" class="col-sm-2 col-form-label">Owner Id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="<?php echo $ownerId; ?>" readonly >
            </div>

            <label for="cdate" class="col-sm-2 col-form-label">Created Date:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="cdate" name="cdate" placeholder="Choose date">
            </div>

            <label for="duedate" class="col-sm-2 col-form-label">Due Date:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="duedate" name="duedate" placeholder="Choose date">
            </div>

            <label for="msg" class="col-sm-2 col-form-label">Message:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="msg" name="msg" placeholder="Enter message">
            </div>

            <label for="done" class="col-sm-2 col-form-label">Is Done:</label>
            <div class="col-sm-10" align="left">
                <label class="radio-inline"><input type="radio" id="done" name="done"> 0 </label>
                <label class="radio-inline"><input type="radio" id="done" name="done"> 1 </label>

            </div>

        </div>
        <button class="btn btn-primary btn-md" type="submit" value="Submit form">Submit</button>

    </form>
</div>

<script src="js/scripts.js"></script>
</body>
</html>