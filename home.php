<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="sortcut icon" href="images/favicon.gif" type="image/gif"/>;
  
</head>
</html>


<!DOCTYPE html>
<html lang="pt-br">
	
	<head>
		<title>3ds2on - IA Compra e Venda de Criptos</title>
		<LINK rel="stylesheet" type="text/css" href="style3.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="sortcut icon" href="images/favicon.gif" type="image/gif"/>;
	</head>
	
	<body>
	<center>
<?php
		error_reporting(0); //// Bloqueia alartas e errros ao abrir a pagina
	
		//Criando as constantes com as credencias de acesso ao banco de dados
		$servername = 'localhost'; $username = 'u853940274_3ds2on'; $password = '**********************'; $database = 'u853940274_3ds2on';

		//Criar a conexão com banco de dados 
		try {
		$connection = mysqli_connect($servername, $username, $password, $database);
		} catch (PDOException $e) {
		echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
                                  }
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
				
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 0;";
	    $rresult = mysqli_query($connection, $qqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }		

		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'DOTUPUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalDOTUP = 1000; $TotalLucroDOTUP = 0; $TotalPrejuizoDOTUP = 0;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroDOTUP = $TotalLucroDOTUP + $porcentagemFor;
		$TotalDOTUP = $TotalDOTUP + (($porcentagem3/100)*$TotalDOTUP);
		}
		else
		{
		$TotalPrejuizoDOTUP = $TotalPrejuizoDOTUP + $porcentagemFor; 
		$TotalDOTUP = $TotalDOTUP + (($porcentagem3/100)*$TotalDOTUP);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalDOTUP = number_format("$TotalDOTUP",2,".","");
		
	    //Apesentando os dados consolicidados do BTC
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>DOTUP</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroDOTUP %</td>";
	    echo "<td>$TotalPrejuizoDOTUP %</td>";
	    echo "<td>R$ $TotalDOTUP</td>";
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 1;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'AAVEUPUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalETH = 1000; $TotalLucroETH = 0; $TotalPrejuizoETH = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroETH = $TotalLucroETH + $porcentagemFor;
		$TotalETH = $TotalETH + (($porcentagem3/100)*$TotalETH);
		}
		else
		{
		$TotalPrejuizoETH = $TotalPrejuizoETH + $porcentagemFor; 
		$TotalETH = $TotalETH + (($porcentagem3/100)*$TotalETH);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalETH = number_format("$TotalETH",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>AAVEUP</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroETH %</td>";
	    echo "<td>$TotalPrejuizoETH %</td>";
	    echo "<td>R$ $TotalETH</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		
		
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 2;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'SUSHIUPUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalSUSHIUP = 1000; $TotalLucroSUSHIUP = 0; $TotalPrejuizoSUSHIUP = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroSUSHIUP = $TotalLucroSUSHIUP + $porcentagemFor;
		$TotalSUSHIUP = $TotalSUSHIUP + (($porcentagem3/100)*$TotalSUSHIUP);
		}
		else
		{
		$TotalPrejuizoSUSHIUP = $TotalPrejuizoSUSHIUP + $porcentagemFor; 
		$TotalSUSHIUP = $TotalSUSHIUP + (($porcentagem3/100)*$TotalSUSHIUP);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalSUSHIUP = number_format("$TotalSUSHIUP",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>SUSHIUP</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroSUSHIUP %</td>";
	    echo "<td>$TotalPrejuizoSUSHIUP %</td>";
	    echo "<td>R$ $TotalSUSHIUP</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		
		
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 3;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'YFIUPUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalYFIUP = 1000; $TotalLucroYFIUP = 0; $TotalPrejuizoYFIUP = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroYFIUP = $TotalLucroYFIUP + $porcentagemFor;
		$TotalYFIUP = $TotalYFIUP + (($porcentagem3/100)*$TotalYFIUP);
		}
		else
		{
		$TotalPrejuizoYFIUP = $TotalPrejuizoYFIUP + $porcentagemFor; 
		$TotalYFIUP = $TotalYFIUP + (($porcentagem3/100)*$TotalYFIUP);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalYFIUP = number_format("$TotalYFIUP",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>YFIUP</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroYFIUP %</td>";
	    echo "<td>$TotalPrejuizoYFIUP %</td>";
	    echo "<td>R$ $TotalYFIUP</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		
		
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 4;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'XTZUPUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalXTZUP = 1000; $TotalLucroXTZUP = 0; $TotalPrejuizoXTZUP = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroXTZUP = $TotalLucroXTZUP + $porcentagemFor;
		$TotalXTZUP = $TotalXTZUP + (($porcentagem3/100)*$TotalXTZUP);
		}
		else
		{
		$TotalPrejuizoXTZUP = $TotalPrejuizoXTZUP + $porcentagemFor; 
		$TotalXTZUP = $TotalXTZUP + (($porcentagem3/100)*$TotalXTZUP);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalXTZUP = number_format("$TotalXTZUP",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>XTZUP</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroXTZUP %</td>";
	    echo "<td>$TotalPrejuizoXTZUP %</td>";
	    echo "<td>R$ $TotalXTZUP</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		

		
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 5;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'DOTDOWNUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalDOTDOWN = 1000; $TotalLucroDOTDOWN = 0; $TotalPrejuizoDOTDOWN = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroDOTDOWN = $TotalLucroDOTDOWN + $porcentagemFor;
		$TotalDOTDOWN = $TotalDOTDOWN + (($porcentagem3/100)*$TotalDOTDOWN);
		}
		else
		{
		$TotalPrejuizoDOTDOWN = $TotalPrejuizoDOTDOWN + $porcentagemFor; 
		$TotalDOTDOWN = $TotalDOTDOWN + (($porcentagem3/100)*$TotalDOTDOWN);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalDOTDOWN = number_format("$TotalDOTDOWN",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>DOTDOWN</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroDOTDOWN %</td>";
	    echo "<td>$TotalPrejuizoDOTDOWN %</td>";
	    echo "<td>R$ $TotalDOTDOWN</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		

		
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 6;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'AAVEDOWNUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalAAVEDOWN = 1000; $TotalLucroAAVEDOWN = 0; $TotalPrejuizoAAVEDOWN = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroAAVEDOWN = $TotalLucroAAVEDOWN + $porcentagemFor;
		$TotalAAVEDOWN = $TotalAAVEDOWN + (($porcentagem3/100)*$TotalAAVEDOWN);
		}
		else
		{
		$TotalPrejuizoAAVEDOWN = $TotalPrejuizoAAVEDOWN + $porcentagemFor; 
		$TotalAAVEDOWN = $TotalAAVEDOWN + (($porcentagem3/100)*$TotalAAVEDOWN);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalAAVEDOWN = number_format("$TotalAAVEDOWN",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>AAVEDOWN</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroAAVEDOWN %</td>";
	    echo "<td>$TotalPrejuizoAAVEDOWN %</td>";
	    echo "<td>R$ $TotalAAVEDOWN</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		

		
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 7;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'SUSHIDOWNUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalSUSHIDOWN = 1000; $TotalLucroSUSHIDOWN = 0; $TotalPrejuizoSUSHIDOWN = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroSUSHIDOWN = $TotalLucroSUSHIDOWN + $porcentagemFor;
		$TotalSUSHIDOWN = $TotalSUSHIDOWN + (($porcentagem3/100)*$TotalSUSHIDOWN);
		}
		else
		{
		$TotalPrejuizoSUSHIDOWN = $TotalPrejuizoSUSHIDOWN + $porcentagemFor; 
		$TotalSUSHIDOWN = $TotalSUSHIDOWN + (($porcentagem3/100)*$TotalSUSHIDOWN);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalSUSHIDOWN = number_format("$TotalSUSHIDOWN",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>SUSHIDOWN</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroSUSHIDOWN %</td>";
	    echo "<td>$TotalPrejuizoSUSHIDOWN %</td>";
	    echo "<td>R$ $TotalSUSHIDOWN</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 8;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'YFIDOWNUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalYFIDOWN = 1000; $TotalLucroYFIDOWN = 0; $TotalPrejuizoYFIDOWN = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroYFIDOWN = $TotalLucroYFIDOWN + $porcentagemFor;
		$TotalYFIDOWN = $TotalYFIDOWN + (($porcentagem3/100)*$TotalYFIDOWN);
		}
		else
		{
		$TotalPrejuizoYFIDOWN = $TotalPrejuizoYFIDOWN + $porcentagemFor; 
		$TotalYFIDOWN = $TotalYFIDOWN + (($porcentagem3/100)*$TotalYFIDOWN);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalYFIDOWN = number_format("$TotalYFIDOWN",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>YFIDOWN</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroYFIDOWN %</td>";
	    echo "<td>$TotalPrejuizoYFIDOWN %</td>";
	    echo "<td>R$ $TotalYFIDOWN</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qqqquery = "SELECT CONTROLE FROM VENDER WHERE ID = 9;";
	    $rresult = mysqli_query($connection, $qqqquery);     

	    while ($data = mysqli_fetch_array($rresult)) {
		$controleBTC = $data[0];
	    }	
		
		//contabilizando o total de lucros e perdas
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $lpquery = "SELECT PRECO_COMPRA,PRECO_VENDA FROM PUMPS_LOG WHERE NOME_MOEDA = 'XTZDOWNUSDT' AND DATA_VENDA >= '2021-08-01 00:00:00';";
	    $rresult = mysqli_query($connection, $lpquery);      
    
		$TotalLucro = 0; $TotalPrejuizo = 0; $TotalXTZDOWN = 1000; $TotalLucroXTZDOWN = 0; $TotalPrejuizoXTZDOWN = 0 ;
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[0];
		$valorFinal = $data[1];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagem3 = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagem3",2,".","");
			
		if ($porcentagemFor >= 0)
		{
		$TotalLucroXTZDOWN = $TotalLucroXTZDOWN + $porcentagemFor;
		$TotalXTZDOWN = $TotalXTZDOWN + (($porcentagem3/100)*$TotalXTZDOWN);
		}
		else
		{
		$TotalPrejuizoXTZDOWN = $TotalPrejuizoXTZDOWN + $porcentagemFor; 
		$TotalXTZDOWN = $TotalXTZDOWN + (($porcentagem3/100)*$TotalXTZDOWN);
		}
	    }
		
	    //Ajustando casas descimais
		$TotalXTZDOWN = number_format("$TotalXTZDOWN",2,".","");
		
		//Apesentando os dados consolicidados do ETH
	    echo "<table id='demo-table'>";
		
	    echo "<tr>";
	    echo "<th>MOEDA</th>";
	    echo "<th>INVESTIMENTO</th>";
	    echo "<th>GANHOS</th>";
	    echo "<th>PERDAS</th>";
	    echo "<th>SALDO</th>";
	    echo "<th>STATUS</th>";
	    echo "</tr>";
	    		
	    echo "<tr>";
	    echo "<td>XTZDOWN</td>";
	    echo "<td>R$ 1.000</td>";
	    echo "<td>$TotalLucroXTZDOWN %</td>";
	    echo "<td>$TotalPrejuizoXTZDOWN %</td>";
	    echo "<td>R$ $TotalXTZDOWN</td>";  
	    echo "<td><img src='images/$controleBTC.png'></td>";
	    echo "</tr>";

	    echo "</table>"; 
		
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		echo "<p>";   
		echo "</p>";   
		echo "<p>";   
		echo "</p>"; 
		
	    //selecionando o banco de dados 
	    $db = mysqli_select_db($connection, "u853940274_3ds2on");
	    $qquery = "SELECT NOME_MOEDA,PRECO_COMPRA,PRECO_VENDA,DATA_VENDA,LUCRO FROM PUMPS_LOG ORDER BY ID DESC LIMIT 10;";
	    $rresult = mysqli_query($connection, $qquery);      

	    //Apesentando os dados selecionados na tela home.php
	    echo "<table id='demo-table'>";
	    echo "<tr>";
	    echo "<th>NOME_MOEDA</th>";
	    echo "<th>PREÇO DA COMPRA</th>";
	    echo "<th>PREÇO DA VENDA</th>";
	    echo "<th>MOMENTO DA VENDA</th>";
	    echo "<th>LUCRO/PREJU</th>";
	    echo "</tr>";
	    
	    while ($data = mysqli_fetch_array($rresult)) {
		
		//Aferindo a porcentagem do lucro ou prejuiso
		$valorInicial = $data[1];
		$valorFinal = $data[2];
		$porc1 = $valorFinal - $valorInicial;
		$porc2 = $valorInicial * 100;
		$porcentagem1 = $porc1 / $porc2;
		$porcentagem2 = $porcentagem1 / 1.000 * 100;
		$porcentagemFor = $porcentagem2 * 100;
		$porcentagemFor = number_format("$porcentagemFor",2,".","");
			
	    echo "<tr>";
	    echo "<td>$data[0]</td>";
	    echo "<td>$data[1]</td>";
	    echo "<td>$data[2]</td>";
	    echo "<td>$data[3]</td>";
	    echo "<td>$porcentagemFor %  </td>";
	    echo "</tr>";
	    }
	    echo "</table>"; 
 ?>
    </center>
<p>
<p>
<p>	
<center><p>Desenvolvido por... <a href="https://www.github.com/3ds2on" title="Visit 3ds2on">www.3ds2on.com</a></p></center>
<p>
<p>
<p>
<script type="text/javascript" charset="UTF-8">	
$('#btnCadastro').click(function(){
var cadNome = $('#cadNome').val();
if(cadNome.trim() == '' ){
alert('INFORME A MOEDA PARA PESQUISAR !!!');
return;
}		
});	
</script>
	
	</body>
</html>