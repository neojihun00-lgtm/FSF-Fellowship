<?php

include "config.php";

/* Check if form was submitted */

if(isset($_POST['submit'])){

    /* Get Form Data */

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $role = trim($_POST['role']);
    $comment = trim($_POST['comment']);

    /* Insert Data */

    $stmt = mysqli_prepare($conn,
        "INSERT INTO comments(name,email,role,comment)
         VALUES(?,?,?,?)");

    mysqli_stmt_bind_param(
        $stmt,
        "ssss",
        $name,
        $email,
        $role,
        $comment
    );

    if(mysqli_stmt_execute($stmt)){

        header("Location: comments.php?success=1");
        exit();

    }else{

        header("Location: comments.php?error=1");
        exit();

    }

}else{

    header("Location: comments.php");
    exit();

}

?>