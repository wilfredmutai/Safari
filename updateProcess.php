<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 9:45 AM
 */
if(isset($_POST['ID'])){
    extract($_POST);
    $conn = mysqli_connect("localhost","root","","majina");
    $update = mysqli_query($conn,"UPDATE `majina` SET `ID`='$ID',`Jina`= '$Name',`arafa`='$Email',`siri`='$Password' WHERE ID = $ID");
    header("location:viewUsers.php");
}
?>