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
<?php include("header.php");?>
<?php
    session_start();
    $sessionId = $_SESSION["userID"];

?>

<div class="container" align="center" style="border:1px solid #cecece">
    <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="POST">
        <br>
        <h3><u> VIEW ACCOUNT DETAILS </u></h3>
        <p align="right">** Click on texts to edit your data</p>

        <div class="form-group row">
            <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $data->fname; ?>" readonly>
            </div>

            <label for="lname" class="col-sm-2 col-form-label">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $data->lname; ?>" readonly >
            </div>

            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data->email; ?>" readonly>
            </div>
            <!-- ^\d{3}-\d{3}-\d{4}$ -->
            <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
            <div class="col-sm-10">
                <input type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" class="form-control" id="phone" name="phone" value="<?php echo $data->phone; ?>" readonly>
            </div>

            <label for="bday" class="col-sm-2 col-form-label">Birthday:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="bday" name="bday" value="<?php echo $data->birthday; ?>" readonly>
            </div>

            <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
            <div class="col-sm-10" align="left">
                <label class="radio-inline"><input type="radio" id="gender" name="gender" value="Male"<?php if ($data->gender == "Male") {echo 'checked';}?> /> Male </label>
                <label class="radio-inline"><input type="radio" id="gender" name="gender" value="Female"<?php if ($data->gender == "Female") {echo 'checked';}?>  /> Female </label>
                <label class="radio-inline"><input type="radio" id="gender" name="gender" value="Others"<?php if ($data->gender == "Others") {echo 'checked';}?>  /> Others </label>

            </div>

        </div>
        <!--<button class="btn btn-primary btn-md" id="edit" value="Click Here" >Edit</button> -->

        <button class="btn btn-primary btn-md" type="submit" id="save" value="update">Save Changes</button>

    </form>


    <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
        <br>
        <button class="btn btn-primary btn-md" type="submit" form="form1" value="delete" onclick="return checkID()">Delete Task</button>
    </form>
</div>


<!--<script src="js/scripts.js"> -->
<script type="text/javascript">

    $('#fname').click(function(){
        $(this).attr("readonly",false) ;
    });
    $('#lname').click(function(){
        $(this).attr("readonly",true) ;
    });
    $('#email').click(function(){
        $(this).attr("readonly",false) ;
    });
    $('#phone').click(function(){
        $(this).attr("readonly",false) ;
    });
    $('#bday').click(function(){
        $(this).attr("readonly",false) ;
    });

    function checkID() {
        var sessionid = <?php echo $sessionId ?>;
        var recordid = <?php echo $data->id ?>;
        if (sessionid == recordid){
            var msg = "Do you want to delete your account?";
            if (confirm(msg) == true) {
                alert('You will be logged out !');
                return true;
            } else {
                return false;
            }
        }
        //alert(sessionid);
        //alert(recordid);
        //alert('1');
    }


</script>
<!--

<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<script src="js/scripts.js"></script> -->
</body>
</html>