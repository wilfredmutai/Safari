<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:49 AM
 */

if(isset($_POST['btnsubmit'])){
    $name = $_POST['x'];
    $email = $_POST['y'];
    $password = $_POST['z'];
    $encrPassword = md5($password);

    $conn = mysqli_connect("localhost","root","","majina");
    if(!$conn){
        echo "Failed to connect to Database";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `majina`(`ID`, `Jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$encrPassword')");
        if(!$insert){
            echo "Failed to save";
        }else{
            echo "$name Save successfully";
            echo "<a href='userSave.php'>Add User</a>";
        }
    }
}
?>