<?php
session_start();
if (!isset($_SESSION['usuarioUser']) || !isset($_SESSION['usuarioPass'])) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: ../login/login.php"); exit;
}
include_once '../conexao.php';
$codmsql = "SELECT * FROM post";
// executa a query
$pesquisa = mysqli_query($conn, $codmsql);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($pesquisa);
// calcula quantos dados retornaram
$total = mysqli_num_rows($pesquisa); 
?>


<?php include_once 'includes/head.php'; ?>

<h3>Bem vindo, <?php echo $_SESSION['usuarioUser']; ?>!!!</h3><br>
<a href="cadastro.php?cad=1">Cadastrar postagem</a><br><br>

<div class="container">
<?php
	if($total > 0) {
		do {
?>
			<div class="row">
        <div class="col-sm">
          <?=$linha['id']?>
        </div>
        <div class="col-sm">
          <?=$linha['titulo']?>
        </div>
        <div class="col-sm">
          <?=$linha['data']?>
        </div>
        <div class="col-sm">
          <?=$linha['mostrar']?>
        </div>
        <div class="col-sm">
          <a href="update.php?id=<?=$linha['id']?>">Editar</a>
        </div>
        <div class="col-sm">
          <a href="visualizar.php?id=<?=$linha['id']?>">Visualizar</a>
        </div>
        <div class="col-sm">
          <a href="excluir.php?id=<?=$linha['id']?>">Excluir</a>
        </div>
      </div>
<?php
		}while($linha = mysqli_fetch_assoc($pesquisa));
	}   
?>
</div>

<br><a href="sair.php">Sair</a> 

<?php include_once 'includes/footer.php'; ?>