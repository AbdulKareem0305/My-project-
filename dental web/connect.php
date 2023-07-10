<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    // Initialize error messages
    $nameErr = $numberErr = $emailErr = $dateErr = "";

    // Validate input fields
    if (empty($name)) {
        $nameErr = "Name is required";
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters, spaces, and dashes are allowed";
    }
    if (empty($number)) {
        $numberErr = "Phone number is required";
    } else if (!preg_match("/^[0-9]{10}$/", $number)) {
        $numberErr = "Phone number must be 10 digits long";
    }
    if (empty($email)) {
        $emailErr = "Email is required";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    if (empty($date)) {
        $dateErr = "Date is required";
    }

    // Check if there are any errors
    if (!empty($nameErr) || !empty($numberErr) || !empty($emailErr) || !empty($dateErr)) {
        // Display errors if any are found
        echo "<ul>";
        echo "<li>" . $nameErr . "</li>";
        echo "<li>" . $numberErr . "</li>";
        echo "<li>" . $emailErr . "</li>";
        echo "<li>" . $dateErr . "</li>";
        echo "</ul>";
    } else {
        // If no errors, connect to the database and insert data
        $conn = new mysqli('localhost','root','','hakdentaildb');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        } else {
            $stmt = $conn->prepare("insert into forms(name, number, email, date) values(?, ?, ?, ?)");
            $stmt->bind_param("siss", $name, $number, $email, $date);
            $stmt->execute();
            echo "Successfull";
            header("location:http://localhost/dental web/Successful.php");
            $stmt->close();
            $conn->close();
        }
    }
?>
