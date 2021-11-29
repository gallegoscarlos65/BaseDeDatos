<?php  

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    
    $sql = "SELECT * FROM users2 ORDER BY id ASC";
    $res = mysqli_query($mysqli, $sql);
}else{
	header("Location: login.php");
} 