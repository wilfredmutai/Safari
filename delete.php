<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 10:59 AM
 */
if( isset($_GET['x'])){
    $conn = mysqli_connect("localhost","root","","majina");
    if(!$conn){
        echo "Failed to connect";
    }else{
        extract($_GET);
        mysqli_query($conn,"DELETE FROM majina WHERE ID = $x");
        header("location:viewUsers.php");
    }
}
?>