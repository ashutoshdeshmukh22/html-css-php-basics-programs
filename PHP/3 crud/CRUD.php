emp.html
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form action="empaction.php" method="post">
        <pre>
Enter Emp No:
<input type="text" name="eno">
Enter Emp Name:
<input type="text" name="name">
Enter Emp Address: <input type="text" name="address">
Enter Emp Salary: <input type="text" name="salary">
Enter Department No: <input type="text" name="dno">
<button type="submit" name="insert">Insert</button>
<button type="submit" name="Update">Update</button>
<button type="submit" name="delete">Delete</button>
<button type="submit" name="Display">Display</button>
<button type="submit" name="dept">Department</button>
</pre>
    </form>
</body>

</html>
empaction.php :-
<?php
// Insert Data
if (isset($_POST['insert'])) {
    $eno = $_POST['eno'];
    $ename = $_POST['name'];
    $address = $_POST['address'];
    $sal = $_POST['salary'];
    $dept = $_POST['dno'];
    $con = mysqli_connect('localhost:3307', 'root', '') or die("Failed to connect to
the Server");
    $db = mysqli_select_db($con, 'test') or die('Database Error');
    $q = mysqli_query($con, "INSERT INTO employee
values('$eno','$ename','$address','$sal','$dept')");
    if ($q) {
        echo ("Success");
    } else {
        echo ("Failed");
    }
}
// Update
if (isset($_POST['Update'])) {
    $eno = $_POST['eno'];
    $ename = $_POST['name'];
    $address = $_POST['address'];
    $sal = $_POST['salary'];
    $dept = $_POST['dno'];
    $con = mysqli_connect('localhost:3307', 'root', '') or die("Failed to connect to
the Server");
    $db = mysqli_select_db($con, 'test') or die('Database Error');
    $q = mysqli_query($con, "UPDATE `employee` SET
`E_name`='$ename',`E_address`='$address',`Sal`='$sal',`Dept_no`='$dept'
WHERE E_id='$eno'");
    if ($q) {
        echo ("Success");
    } else {
        echo ("Failed");
    }
}
// Delete
if (isset($_POST['delete'])) {
    $eno = $_POST['eno'];
    $ename = $_POST['name'];
    $address = $_POST['address'];
    $sal = $_POST['salary'];
    $dept = $_POST['dno'];
    $con = mysqli_connect('localhost:3307', 'root', '') or die("Failed to connect to
the Server");
    $db = mysqli_select_db($con, 'test') or die('Database Error');
    $q = mysqli_query($con, "DELETE FROM `employee` WHERE
E_id='$eno'");
    if ($q) {
        echo ("Success");
    } else {
        echo ("Failed");
    }
}
// show
if (isset($_POST['Display'])) {
    $eno = $_POST['eno'];
    $ename = $_POST['name'];
    $address = $_POST['address'];
    $sal = $_POST['salary'];
    $dept = $_POST['dno'];
    $con = mysqli_connect('localhost:3307', 'root', '') or die("Failed to connect to
the Server");
    $db = mysqli_select_db($con, 'test') or die('Database Error');
    $q = mysqli_query($con, "select * from employee");
    if (mysqli_num_rows($q) != 0) {
        while ($rows = mysqli_fetch_assoc($q)) {
            echo $rows['E_id'] . " " . $rows['E_name'] . " " . $rows['E_address'] . "
" . $rows['Sal'] . " " . $rows['Dept_no'] . " <br>";
        }
    }
}
// show dept wise
if (isset($_POST['dept'])) {
    $eno = $_POST['eno'];
    $ename = $_POST['name'];
    $address = $_POST['address'];
    $sal = $_POST['salary'];
    $dept = $_POST['dno'];
    $con = mysqli_connect('localhost:3307', 'root', '') or die("Failed to connect to
the Server");
    $db = mysqli_select_db($con, 'test') or die('Database Error');
    $q = mysqli_query($con, "select * from employee where Dept_no='$dept'");
    if (mysqli_num_rows($q) != 0) {
        while ($rows = mysqli_fetch_assoc($q)) {
            echo $rows['E_id'] . " " . $rows['E_name'] . " " . $rows['E_address'] . "
" . $rows['Sal'] . " " . $rows['Dept_no'] . " <br>";
        }
    }
}
?>