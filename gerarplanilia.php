<?php
require_once ("conexao-banco.php");
require_once('cabecalho.php');
$usu=$_SESSION["nome"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerar execel</title>
</head>
<body>
	

    <?php
    $arquivo = 'produtos.xls';
    $html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="8"><b>Planilha de Produtos</b></tr>';
        $html .= '</tr>';
        $html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Preço de Produção</b></td>';
		$html .= '<td><b>quantidade </b></td>';
        $html .= '<td><b>total gasto</b></td>';
        $html .= '<td><b>Preço de Venda</b></td>';
		$html .= '<td><b>quantidade Venda</b></td>';
		$html .= '<td><b>Total da Venda</b></td>';
        $html .= '<td><b>Total final</b></td>';
		$html .= '</tr>';
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM Produtos_omega where produtor = '$usu'";
		$resultado_msg_contatos = mysqli_query($conexao, $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["idproduto"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
			$html .= '<td>'.$row_msg_contatos["Preco_producao"].'</td>';
			$html .= '<td>'.$row_msg_contatos["quantidade"].'</td>';
			$html .= '<td>'.$row_msg_contatos["Total_gasto"].'</td>';
			$html .= '<td>'.$row_msg_contatos["Preco_venda"].'</td>';
			$html .= '<td>'.$row_msg_contatos["quantida_Venda"].'</td>';
			$html .= '<td>'.$row_msg_contatos["total_venda"].'</td>';
			$html .= '<td>'.$row_msg_contatos["Total_Final"].'</td>';
			
			$html .= '</tr>';
			;
		}
        // Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit;
    ?>
    
</body>
</html>