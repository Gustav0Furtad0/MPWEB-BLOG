<?php 
session_start();
if(isset($_POST['logar'])) {
  include '../conexao.php';
  $user = mysqli_real_escape_string($conn, $_POST['user']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $result_usuario = "SELECT * FROM admlist WHERE user = '$user' && pass = '$pass' LIMIT 1";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  $resultado = mysqli_num_rows($resultado_usuario);
  echo $user;
  echo $pass;
  if($resultado>0) {
      echo "<script>alert('Login feito com suscesso!');</script>";
      $_SESSION['usuarioUser'] = $user;
      $_SESSION['usuarioPass'] = $pass;
      header("Location: ../sistema/work.php");
  } else {
      echo "<script>alert('Login inválido!');</script>";
  }
}
if(isset($_SESSION['usuarioUser']) && isset($_SESSION['usuarioPass'])) {
  header("Location: ../sistema/work.php");
}
?>
<?php include '../sistema/includes/head.php'; ?>
  <form method="post" action="#">
    <label for="">user</label>
    <input type="text" name="user" required>
    <label for="">pass</label>
    <input type="password" name="pass" required>
    <input type="submit" name="logar" value="Teste">
  </form>
  <p>
    <?php
      if(isset($_SESSION['loginErro'])){
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);
      }
    ?>
  </p>
<?php include '../sistema/includes/footer.php' ?>