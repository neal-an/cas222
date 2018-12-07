<?php

if (isset($_POST['name']))

{
    
    try {
      $pdo = new PDO('mysql:host=localhost;dbname=music', 'music_user', 'mypassword');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
        $error = 'Unable to connect to the database server.';
        include 'error.html.php';
        exit();
    }
    
    try
    {
        $sql = 'INSERT INTO albums SET
          name = :name,
          band = :band,
          year = :year,
          genre = :genre';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':band', $_POST['band']);
        $s->bindValue(':year', $_POST['year']);
        $s->bindValue(':genre', $_POST['genre']);
        $s->execute();
    }
    catch (PDOException $e)
    {
       $error = 'Error adding album: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    
    include 'success.html.php';
    
}

else {
    include "add_album.html.php";
}
