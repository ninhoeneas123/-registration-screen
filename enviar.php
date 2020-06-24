
<?php
	include("conexao.php");
	include("Pessoa.php");
	include("PessoaDAO.php");
	
/* o echo so um teste pra saber se o ajax esta enviando */


   echo $nome = $_POST['nome'];
    echo $cpf = $_POST['cpf'];
	$sexo = $_POST['sexO'];
	$reservista = $_POST['reservista'];
	$imagem = $_FILES['imagem'];
    $email =  $_POST['email'];
    $senha =  $_POST['senha'];
	echo $pathimage = "imagens/".uniqid()."".$imagem["name"];
/*movendo imagem para pasta*/

if(move_uploaded_file( $imagem["tmp_name"], $pathimage ))
{

	/*movendo os dados para fazer a inserção */

	$p = new Pessoa($nome, $cpf, $sexo, $reservista, $pathimage, $email, $senha);
	$pDao = new PessoaDAO($p);
	echo $pDao->inserirPessoa();


}else{

echo "error";



}



?>