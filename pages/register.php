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

<div class="container" align="center" style="border:1px solid #cecece">
<form action="index.php?page=accounts&action=register" method="post">
    <br>
    <h3><u> REGISTRATION FORM </u></h3>

    <div class="form-group row">
        <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="fname" name="fname" maxlength="10" placeholder="Enter First Name" required>
        </div>

        <label for="lname" class="col-sm-2 col-form-label">Last Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lname" name="lname" maxlength="10" placeholder="Enter Last Name" required>
        </div>

        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" maxlength="15" placeholder="Enter Email xyz@abc.com" required>
        </div>

        <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
        <div class="col-sm-10">
            <input type="number" pattern="\d{3}[\-]\d{3}[\-]\d{4}" class="form-control" id="phone" name="phone" placeholder="XXX-XXX-XXXX">
        </div>

        <label for="birthday" class="col-sm-2 col-form-label">Enter Birthday:</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Enter Birthday">
        </div>

        <label for="password" class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" minlength="6" maxlength="10" placeholder="Enter Password" required>
        </div>

        <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
        <div class="col-sm-10" align="left">
        <label class="radio-inline"><input type="radio" id="gender" name="gender">Male</label>
        <label class="radio-inline"><input type="radio" id="gender" name="gender">Female</label>
        <label class="radio-inline"><input type="radio" id="gender" name="gender">Others</label>
        </div>





    </div>
    <button class="btn btn-primary btn-md" type="submit" value="Submit form">Submit</button>
    <!--
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    Birthday: <input type="text" name="birthday"><br>
    Gender: <input type="text" name="gender"><br>
    Password: <input type="password" name="password"><br>
    <button class="btn btn-primary" type="submit" value="Submit form">Submit</button>
    -->
</form>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
