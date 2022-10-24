<?php
  $login = $_POST['iEmail'];
  $senha = $_POST['iSenha'];
  $entrar = $_POST['buttonEntrar'];
  $sql = "Select  login, senha,tipo from LoginSistema where login='$login' AND senha='senha'";
  $result = $mysqli->query($sql);

  if (isset($entrar)) {
      if($result->num_rows <= 0){
        echo"<script language='javascript' type='text/javascript'>
          alert('Login e/ou senha incorretos');window.location
          .href='login.html';</script>";
      }else{
        if($row["tipo"] == 1)
          header("location:CoordenadorTela.html");
      }
  }
?>