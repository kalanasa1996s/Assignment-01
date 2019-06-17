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
    <script src="js/Validation.js"></script>
</head>
<body>

<div class="row">
    <div class="col-md-6">
        <div class="mainbord" style="padding: 30px">


            <form>
                <div class="form-group">
                    <label for="inputID">ID</label>
                    <input type="text" class="form-control" id="inputID" aria-describedby="emailHelp" placeholder="ID">


            </form>


            <form>
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp"
                           placeholder="Name">


            </form>


            <form>
                <div class="form-group">
                    <label for="inputEmail">E - mail</label>
                    <input type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                           placeholder="E-mail">


            </form>

            <form>
                <div class="form-group">
                    <label for="inputSalary">Salary</label>
                    <input type="text" class="form-control" id="inputSalary" aria-describedby="emailHelp"
                           placeholder="Salary" required >


            </form>

            <br>

            <form>
                <div class="form-group">
                    <label for="inputSalary">Phone Number</label>
                    <input type="text" class="form-control" id="inputPhoneNO" aria-describedby="emailHelp"
                           placeholder="xxx-xxxxxxx" pattern="^\d{3}-\d{7}$" required>

                    <!--            <input type="submit" value="Submit">-->


            </form>


            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="button" value="Submit" class="btn btn-primary" id="btn01">Submit</button>

        </div>
    </div>

</div>


</body>
</html>
