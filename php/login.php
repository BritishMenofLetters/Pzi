<?php
session_start();
if(isset($_POST['submit'])){
    include_once "db.php";
}
else{
    header("Location: signin.php?signup=error");
    exit();
}

//if database is connected or not
if(mysqli_connect_error()){
    header("Location: signin.php?login=db_connect_error");
    exit();
}


if(isset($_POST['usern']) && isset($_POST['psw'])) {
    
    function Validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
else{
    header("Location: signin.php?login=error");
    exit();
} 

$usern = Validate($_POST['usern']);
$pass = $_POST['psw'];


$sql = "SELECT * FROM korisnici WHERE username='$usern'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_assoc($result);
    if(($row['username'] === $usern) && (password_verify($pass,$row['password'])))
    {
        $_SESSION['username'] = $row['username'];
        $_SESSION['ID_k'] = $row['ID_k'];
        echo "<script>location.href = 'index.html';</script>";
    }
    else
    {
        header("Location: signin.php?signup=incorrect");
        exit();
    }

}
else {
    header("Location: signin.php?signup=incorrect");
    exit();
}
?>