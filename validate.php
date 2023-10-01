<!-- <?php 

$errors = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    }


    if (empty($name)) {
        $errors[] = "Name is Required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid Email Format";
    }
    if (strlen($password) < 6 ) {
        $errors[] = "Password must be  at least 6 characters long";
    }
    if (empty($errors)){
        echo "Registration Successful!";
    }
    else {
            echo "Errors occurred:<br>";
            foreach ($errors as $error) {
                echo "<span class='error'>" . $error . "</span><br>";
            }
    }

?> -->