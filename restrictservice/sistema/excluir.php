<?php
session_start();
if (!isset($_SESSION['usuarioUser']) || !isset($_SESSION['usuarioPass'])) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: ../login/login.php"); exit;
}
$id = $_GET['id'];
include_once '../conexao.php';
$codmsql = "DELETE FROM post WHERE id = $id;";
mysqli_query($conn, $codmsql);
echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=hhttp://localhost/mpweb/restrictservice/sistema/work.php'>
    <script type=\"text/javascript\">
        alert(\"Postagem de id = $id excluída!\");
    </script>
";	