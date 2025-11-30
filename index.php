<!DOCTYPE html>
<html>
  <head>
    <title>Ma Todo App</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ajouter une tache</h1>
    <form action="add_task.php" method="POST">
    <input type="text" name="task">
    <button type="submit">Add</button>
    </form>
    <h2>Liste des tâches :</h2>
<pre>
<?php
if (file_exists("tasks.txt")) {
    echo file_get_contents("tasks.txt");
}
?>
</pre>  
  </body>
</html>
