<?php

  $user = "root";
  $pass = "123";
  $dsn = 'mysql:host=localhost;dbname=rusev.net';
  $sql = 'INSERT INTO mail (email,subject,message)
   VALUES (?,?,?)';

  try {
      $dbh = new PDO($dsn, $user, $pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $dbh->prepare($sql);
      $stmt->execute([$_POST['email'],$_POST['subject'],$_POST['msg']]);
      $dbh = null;
  } catch (PDOException $e) {
      print "Server Error!: " . $e->getMessage() . "<br/>";
      die();
  }
