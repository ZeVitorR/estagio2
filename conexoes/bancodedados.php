<?php
    $mysqli = new mysqli("localhost","root","Ze98943531.@","estagio");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }else{
        echo "conexão ok";
    }
    //testando
    $sql = "Select  login, senha from LoginSistema ";
		 
    $result = $mysqli->query($sql);
           
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "\nid: " . $row["ID"]. " - login: " . $row["login"]." -senha: " . $row["senha"]." -tipo: " . $row["tipo"];
        }
      } else {
        echo "\n0 resultados";
      }
