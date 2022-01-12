<?php 
class Mediamovel7
{
    public $instrument_id;
    public $periodo;
		
    function calcula_media_movel7()
    {
		
	if($this->periodo == 4)
	{
	
	//Criando as constantes com as credencias de acesso ao banco de dados
    $servername = 'localhost'; $username = 'u853940274_3ds2on'; $password = '**********************'; $database = 'u853940274_3ds2on';
    
    //Criar a conexão com banco de dados 
    try {
    $connection = mysqli_connect($servername, $username, $password, $database);
    } catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
                              }
    					  
    //inserindo no banco de dados 
     $db = mysqli_select_db($connection, "u853940274_3ds2on");   
	
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 1;");   
	while ($data = mysqli_fetch_array($result)){$id1 =   $data[0];$valor1 = $data[1]; $moeda1 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 2;");   
	while ($data = mysqli_fetch_array($result)){$id2 =   $data[0];$valor2 = $data[1]; $moeda2 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 3;");   
	while ($data = mysqli_fetch_array($result)){$id3 =   $data[0];$valor3 = $data[1]; $moeda3 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 4;");   
	while ($data = mysqli_fetch_array($result)){$id4 =   $data[0];$valor4 = $data[1]; $moeda4 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 5;");   
	while ($data = mysqli_fetch_array($result)){$id5 =   $data[0];$valor5 = $data[1]; $moeda5 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 6;");   
	while ($data = mysqli_fetch_array($result)){$id6 =   $data[0];$valor6 = $data[1]; $moeda6 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 7;");   
	while ($data = mysqli_fetch_array($result)){$id7 =   $data[0];$valor7 = $data[1]; $moeda7 = $data[2];}
	
	$resultado = ($valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7)/7;

	return $mms7 = $resultado;
	}
	else if($this->periodo == 1)
	{
	
	//Criando as constantes com as credencias de acesso ao banco de dados
    $servername = 'localhost'; $username = 'u853940274_3ds2on'; $password = '**********************'; $database = 'u853940274_3ds2on';
    
    //Criar a conexão com banco de dados 
    try {
    $connection = mysqli_connect($servername, $username, $password, $database);
    } catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
                              }
    					  
    //inserindo no banco de dados 
     $db = mysqli_select_db($connection, "u853940274_3ds2on");   

	
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM HORA WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 1;");   
	while ($data = mysqli_fetch_array($result)){$id1 =   $data[0];$valor1 = $data[1]; $moeda1 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM HORA WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 2;");   
	while ($data = mysqli_fetch_array($result)){$id2 =   $data[0];$valor2 = $data[1]; $moeda2 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM HORA WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 3;");   
	while ($data = mysqli_fetch_array($result)){$id3 =   $data[0];$valor3 = $data[1]; $moeda3 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM HORA WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 4;");   
	while ($data = mysqli_fetch_array($result)){$id4 =   $data[0];$valor4 = $data[1]; $moeda4 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM HORA WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 5;");   
	while ($data = mysqli_fetch_array($result)){$id5 =   $data[0];$valor5 = $data[1]; $moeda5 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM HORA WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 6;");   
	while ($data = mysqli_fetch_array($result)){$id6 =   $data[0];$valor6 = $data[1]; $moeda6 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM HORA WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 7;");   
	while ($data = mysqli_fetch_array($result)){$id7 =   $data[0];$valor7 = $data[1]; $moeda7 = $data[2];}
	
	$resultado = ($valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7)/7;

	return $mms7 = $resultado;
	}
	else if($this->periodo == 15)
	{
	
	//Criando as constantes com as credencias de acesso ao banco de dados
    $servername = 'localhost'; $username = 'u853940274_3ds2on'; $password = '**********************'; $database = 'u853940274_3ds2on';
    
    //Criar a conexão com banco de dados 
    try {
    $connection = mysqli_connect($servername, $username, $password, $database);
    } catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
                              }
    					  
    //inserindo no banco de dados 
     $db = mysqli_select_db($connection, "u853940274_3ds2on");   

	
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM QUINZE WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 1;");   
	while ($data = mysqli_fetch_array($result)){$id1 =   $data[0];$valor1 = $data[1]; $moeda1 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM QUINZE WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 2;");   
	while ($data = mysqli_fetch_array($result)){$id2 =   $data[0];$valor2 = $data[1]; $moeda2 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM QUINZE WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 3;");   
	while ($data = mysqli_fetch_array($result)){$id3 =   $data[0];$valor3 = $data[1]; $moeda3 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM QUINZE WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 4;");   
	while ($data = mysqli_fetch_array($result)){$id4 =   $data[0];$valor4 = $data[1]; $moeda4 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM QUINZE WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 5;");   
	while ($data = mysqli_fetch_array($result)){$id5 =   $data[0];$valor5 = $data[1]; $moeda5 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM QUINZE WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 6;");   
	while ($data = mysqli_fetch_array($result)){$id6 =   $data[0];$valor6 = $data[1]; $moeda6 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM QUINZE WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 7;");   
	while ($data = mysqli_fetch_array($result)){$id7 =   $data[0];$valor7 = $data[1]; $moeda7 = $data[2];}
	
	$resultado = ($valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7)/7;

	return $mms7 = $resultado;
	}
	else
	{
	echo "O periodo escolhido não é valido!";	
	}
		
	}
	
}                                                                                                                     
?>