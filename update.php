<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<form action="updateProcess.php" method="POST">
        <?php
        /**
         * Created by PhpStorm.
         * User: emobilis
         * Date: 2/13/19
         * Time: 9:42 AM
         */
        extract($_GET);
        $conn = mysqli_connect("localhost","root","","majina");
        $fetch = mysqli_query($conn,"SELECT * FROM majina WHERE ID=$x");
        if(!$fetch){
            echo "Fetching Failed";
        }else {
            $row = mysqli_fetch_assoc($fetch);
                extract($row);

        }
        ?>
        <input type="hidden" name="ID" value="<?php echo $ID;?>"><br>
        <input type="text" name="Name" value="<?php echo $Jina; ?>"><br>
        <input type="email" name="Email" value="<?php echo $arafa; ?>"><br>
        <input type="password" name="Password" value="<?php echo $siri;?>"><br>
        <input type="submit" name="btn btnsubmit" value="update">
</form>
</body>
</html>