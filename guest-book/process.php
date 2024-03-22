<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $file = 'comment.txt';

        $data = '$name, $email, $comment\n';
        if(file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
            echo 'Thank you for comment';
        } else {
            echo 'Unable to save the comment';
        }
    } else {
         echo 'Invalid request';
    }
?>