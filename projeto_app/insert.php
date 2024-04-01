<?php

include 'con.php';

$sql = "INSERT INTO usuarios(nome,email,senha)
VALUES ('John', 'nome@mail.com', '1234')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>