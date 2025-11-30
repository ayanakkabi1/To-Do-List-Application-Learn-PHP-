<?php
$task=$_POST['task']??"";
if (!empty($task)) {
    file_put_contents("tasks.txt", $task . "\n", FILE_APPEND);
}
header("Location:index.php");
exit;
?>