<!DOCTYPE html>
<html>

<head>
    <title>Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/bootstrap.min.css">
</head>

<body>
    <form action="send.php" method="POST">
        <div class="container"><br>
            <a href="./display.php"><span background-color: #1ABC9C;" class="btn btn-success">Show Complaint Detail</span></a>
            <h1>Electronic Device Complaint</h1>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <label>Select your Device</label>
            <select name="device" class="input form-control" required>
                <option style="color: black;" value="">Select
                    Device</option>
                <option style="color: black;" value="Mobile">Mobile</option>
                <option style="color: black;" value="Laptop">Laptop</option>
                <option style="color: black;" value="CPU">CPU</option>
                <option style="color: black;" value="TV">TV</option>
            </select><br>
            <div class="form-group">
                <label>Describe your Complaint</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <?php
    if (
        isset($_POST['name']) && isset($_POST['email']) &&
        isset($_POST['device']) && isset($_POST['message'])
    ) {
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "db_contact";
        $conn = mysqli_connect($sname, $uname, $password, $db_name);
        if (!$conn) {
            echo "Connection failed!";
            exit();
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $device = $_POST['device'];
        $message = $_POST['message'];
        $sql = "INSERT INTO test(name, email, device, message)
VALUES('$name', '$email', '$device', '$message')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "Your complaint was successfully Register !";
        } else {
            echo "Your message could not be sent!";
        }
    }
    ?>
</body>

</html>