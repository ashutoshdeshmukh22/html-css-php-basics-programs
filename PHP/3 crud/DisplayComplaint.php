<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mt-5">
            <div class="card-header text-center">
            <h4>Type your Email ID here</h4>
        </div>
        <div class="card-body">
            <form action="" method="GET">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="c_email" value="<?php
                    if(isset($_GET['c_email'])){echo $_GET['c_email'];} ?>" class="form-control">
                </div>
                <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
            <hr>
            <?php
            $con = mysqli_connect("localhost","root","","db_contact");
            if(isset($_GET['c_email']))
            {
            $c_email = $_GET['c_email'];
            $query = "SELECT * FROM test WHERE
            email='$c_email' ";
            $query_run = mysqli_query($con, $query);
            if(mysqli_num_rows($query_run))
            {
            foreach($query_run as $row)
            {
            ?>
            <div class="form-group mb-3">
                <label for="">Name</label>
                    <input type="text" value="<?= $row['name']; ?>"
                    class="form-control">
                </div>
                <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="text" value="<?= $row['email']; ?>"
                class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Device</label>
                <input type="text" value="<?=
                $row['device']; ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Your Complaint</label>
                <input type="text" value="<?=
                $row['message']; ?>" class="form-control">
            </div>
            <?php {{
            else
            {
            echo "No Record Found";
            }}
            ?>
            </div>
        </div>
    </div>
</body>
</html>
