<?php

function getUser($id){
  $stmt =$dbconn->prepare("SELECT firstname FROM user WHERE user_id=:cid");
        $stmt->bindParam(":cid, $id");
        $stmt->execute();
        $row=$stmt->fetch(PDO::FETCH_BOTH);
        return $row;
}

function registerUser($dbconn, $post){
  $stmt= $dbconn->prepare("INSERT INTO user (firstname, lastname) VALUES (:fn,:ln)");

  $data =[ ':fn' => $post['fname'],
              ':ln'=> $post['lname']];
  $stmt-> execute($data);

  #$post['fname'] = $_SESSION['fname'];
  $_SESSION['name']= $post['fname'];



  $success = "Registration Successfully ";
  header("Location:/main?success=$success&name=$nm");
}

 ?>
