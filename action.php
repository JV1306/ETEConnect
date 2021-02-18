<meta charset="UTF-8">
<?php
//DADOS PARA CONEXÃO
$servidor   =   "localhost";   //SERVIDOR
$bd         =   "companhia";       //DATABASE
$usuario    =   "root";        //USUÁRIO
$senha      =   "";            //SENHA
//CONECTANDO
$conexao    =   mysql_connect($servidor, $usuario, $senha)  or die("ERRO NA CONEXÃO");
//SELECIONA O DATABASE A SER UTILIZADO
$db=mysql_select_db($bd) or die("ERRO NA SELEÇÃO DO DATABASE");
//valores

$escreveNome = $_POST["poster"];
$escreveTitulo = $_POST["titulo"];
$escreveDescricao = $_POST["desc"];
//variável Array responsável por agrupar os dados a serem enviados
$dados = array($escreveNome,$escreveTitulo,$escreveDescricao);
$sql= "INSERT INTO post(poster, post_desc) VALUES ('$escreveNome', '$escreveDescricao')";
 //exibindo as variáveis recebidas através do POST externo
echo "- Nome  ".$escreveNome. " - Descricao ".$escreveDescricao;
$res2=mysql_query("$sql");
       if ($res2)
	{
	     echo"<p align='center'>Post enviado com sucesso ao database!</p>";
	 } 
       else
	  {
   	     $erro=mysql_error();
	     echo "<p align='center'>Erro:$erro</p>";
	  }
?>