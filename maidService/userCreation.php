<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=maid", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

try{

    $sql = "INSERT INTO users (mailid, password, mobile) VALUES (:mailid, :password, :mobile)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':mailid', $_REQUEST['email']);
    $stmt->bindParam(':password', $_REQUEST['password']);
    $stmt->bindParam(':mobile', $_REQUEST['mobile']);

    // execute the prepared statement
    $stmt->execute();
    ?>
    <script>
    alert("data added successfully Now Login with your user name");
    document.location="login.php";
    </script>
    <?php
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}


unset($pdo);
?>
