<?php 
    $nameError = "";
    $passwordError = "";
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username)) {
            $nameError = "Name is Required";
        }
        else {
            $username = trim($username);
            $username = htmlspecialchars($username);
            if (!preg_match("/^[a-zA-Z ]+$/", $username)) {
                $nameError = "Username should contain only Alphabets";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="username" id="name"> 
        <span style="color:red;"><?php echo $nameError?></span> <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"> <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"> <br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
