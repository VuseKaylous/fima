<?php session_start();
include "config.php";

$username = 'username';
$password = 'password';

if (isset($_POST[$username]) && isset($_POST[$password])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Acc = validate($_POST[$username]);
    $Pass = validate($_POST[$password]);
}



$sql = "SELECT * FROM account WHERE username = '$Acc' and password = '$Pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row[$username] === $Acc && $row[$password] === $Pass) {
        echo "Logged in";
        $_SESSION[$username] = $row[$username];
        $_SESSION['AccID'] = $row['AccID'];
        header('Location: main.php?user=' . $username);
        exit();
    } 
    else {
        echo "<h1> Login failed. Invalid username or password.</h1>";  
        header("Location: login.php?error=Incorrect username or password");
        exit();
    }
} else{

    header("Location: login.php?error=Incorect User name or password");

    exit();

}
?>