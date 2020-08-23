<?php

include 'dbh.php';


$dbh = new DB();
$stmt=$dbh->connect()->prepare("select * from users");
$stmt->execute();
// $stmt->bindColumn('first_name',$firstName);
// $stmt->bindColumn('last_name',$lastName);
// $stmt->bindColumn('email',$email);
while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo $row->first_name."\t".$row->last_name."\t".$row->email."\n";
  }

