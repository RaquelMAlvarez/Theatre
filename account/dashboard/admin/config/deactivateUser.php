<?php
    include '../../../auth/dbConfig.php';

    $userId = $_GET['uid'];

    $deleteComments = $conn->prepare('DELETE FROM comments WHERE fk_userblog IN (SELECT id FROM userblog WHERE fk_user_id = '.$userId.')');
    $deleteUserBlog = $conn->prepare('DELETE FROM userblog WHERE fk_user_id = '.$userId.'');
    $deleteUser = $conn->prepare('DELETE FROM users WHERE users.id = '.$userId.' ');

    $deleteComments->execute();
    $deleteUserBlog->execute();
    $deleteUser->execute();

    header('Location: ../../a/allUsers');

    ?>
