<?php
session_start();
if (!isset($_SESSION['usuarioUser']) || !isset($_SESSION['usuarioPass'])) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: ../login/login.php"); exit;
}
if(isset($_POST['cadastrar'])) {
    include '../conexao.php';
    $hoje = date('Y-m-d');
    $texto = $_POST['editor1'];
    $titulo = $_POST['titulo'];
    $arquivo = $_FILES['arquivo']['name'];
    $op = $_POST['mostrar'];
    if($op == 'sim') {
        $op = 1;
    } else if($op == 'nao') {
        $op = 2;
    }
    //Pasta onde o arquivo vai ser salvo
    $_UP['pasta'] = 'foto/';

    //Tamanho máximo do arquivo em Bytes
    $_UP['tamanho'] = 1024*1024*100; //5mb

    //Array com a extensões permitidas
    $_UP['extensoes'] = array('png', 'jpg', 'jpeg');

    //Renomeiar
    $_UP['renomeia'] = true;

    //Array com os tipos de erros de upload do PHP
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
    if($_FILES['arquivo']['error'] != 0){
        die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
        exit; //Para a execução do script
    }

    //Faz a verificação da extensao do arquivo
    $extensao = strtolower($_FILES['arquivo']['name']);
    $extensao = explode('.', $extensao); 
    $extensao = end($extensao); 

    if(array_search($extensao, $_UP['extensoes'])=== false){		
        echo "
            <script type=\"text/javascript\">
                alert(\"A imagem não foi cadastrada: extensão inválida.\");
            </script>   
        ";
    }

    //Faz a verificação do tamanho do arquivo
    else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
        echo "
            <script type=\"text/javascript\">
                alert(\"Arquivo muito grande.\");
            </script>
        ";
    }

    //O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
    else{
        //Primeiro verifica se deve trocar o nome do arquivo
        if($_UP['renomeia'] == true){
            //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
            $nome_final = time().'.jpg';
        }else{
            //mantem o nome original do arquivo
            $nome_final = $_FILES['arquivo']['name'];
        }
        //Verificar se é possivel mover o arquivo para a pasta escolhida
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
            //Upload efetuado com sucesso, exibe a mensagem
            $query = mysqli_query($conn, "INSERT INTO post (titulo, mostrar, img, texto, data) VALUES ('$titulo', '$op', '$nome_final', '$texto', '$hoje')");
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/mpweb/restrictservice/sistema/work.php'>
                <script type=\"text/javascript\">
                    alert(\"Postagem cadastrada com sucesso!!!\");
                </script>
            ";		
        }else{
            //Upload não efetuado com sucesso, exibe a mensagem
            echo "
                <script type=\"text/javascript\">
                    alert(\"Houve um problema ao cadastrar o post! Contate o administrador do sistema.\");
                </script>
            ";
        }
    }
}
?>
<?php include_once 'includes/head.php'; ?> 
<a href="work.php">Voltar</a><br><br>
<h3>Cadastro de postagens</h3>
<form method="POST" action="" enctype="multipart/form-data">
    <label for="">Mostrar postagem?</label>

    <select id="mostrar" name="mostrar">
        <option value="nao">Não</option>
        <option value="sim">Sim</option>
    </select><br>

    <label for="">Título :</label>
    <input type="text" name="titulo" required><br>

    <label for="">Imagem de apresentação :</label>
    <input type="file" name="arquivo" required><br>

    <textarea name="editor1" id=""cols="30" rows="10" required>Bom texto!!!</textarea>
    <input type="submit" value="Enviar post" name="cadastrar">
</form>
<script src="http://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<?php include_once 'includes/footer.php'; ?>