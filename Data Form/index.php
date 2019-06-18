<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/17/2019
 * Time: 10:14 AM
 */
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">

</head>
<body>

<div class="row">
    <div class="col-md-6">
        <div class="mainbord" style="padding: 30px">




            <form action="main/page%202.php" method="post">
                <div class="form-group">
                    <label for="inputID">ID</label>
                    <input type="text" class="form-control" id="txtID" aria-describedby="emailHelp" placeholder="ID" name="txtID">







                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="txtname" aria-describedby="emailHelp"
                           placeholder="Name" name="txtname">




                <div class="form-group">
                    <label for="inputEmail">E - mail</label>
                    <input type="text" class="form-control" id="txtemail" aria-describedby="emailHelp"
                           placeholder="E-mail" name="txtemail">





                <div class="form-group">
                    <label for="inputSalary">Salary</label>
                    <input type="text" class="form-control" id="txtSalary" aria-describedby="emailHelp"
                           placeholder="Salary" name="txtSalary" >




            <br>


                <div class="form-group">
                    <label for="inputP.Number">Phone Number</label>
                    <input type="text" class="form-control" id="txtPhoneNo" aria-describedby="emailHelp"
                           placeholder="Salary" name="txtPhoneno">
                </div>


                    <br>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>


<!--            ////////////////////////// button////////////////////-->
            <button type="submit" value="send"  class="btn btn-primary" id="btn-Add">Submit</button>

            </form>
        </div>
    </div>

</div>


<script src="js/jquery-3.4.1.min.js"
<script src="js/Validation.js"></script>

</body>
</html>
