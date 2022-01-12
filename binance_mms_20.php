<?php 
class Mediamovel20
{
    public $instrument_id;

    function calcula_media_movel20()
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
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 8;");   
	while ($data = mysqli_fetch_array($result)){$id8 =   $data[0];$valor8 = $data[1]; $moeda8 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 9;");   
	while ($data = mysqli_fetch_array($result)){$id9 =   $data[0];$valor9 = $data[1]; $moeda9 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 10;");  
	while ($data = mysqli_fetch_array($result)){$id10 =  $data[0];$valor10 = $data[1]; $moeda10 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 11;"); 
	while ($data = mysqli_fetch_array($result)){$id11 =  $data[0];$valor11 = $data[1]; $moeda11 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 12;");  
	while ($data = mysqli_fetch_array($result)){$id12 =  $data[0];$valor12 = $data[1]; $moeda12 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 13;");  
	while ($data = mysqli_fetch_array($result)){$id13 =  $data[0];$valor13 = $data[1]; $moeda13 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 14;");  
	while ($data = mysqli_fetch_array($result)){$id14 =  $data[0];$valor14 = $data[1]; $moeda14 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 15;");  
	while ($data = mysqli_fetch_array($result)){$id15 =  $data[0];$valor15 = $data[1]; $moeda15 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 16;");  
	while ($data = mysqli_fetch_array($result)){$id16 =  $data[0];$valor16 = $data[1]; $moeda16 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 17;");  
	while ($data = mysqli_fetch_array($result)){$id17 =  $data[0];$valor17 = $data[1]; $moeda17 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 18;");  
	while ($data = mysqli_fetch_array($result)){$id18 =  $data[0];$valor18 = $data[1]; $moeda18 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 19;");  
	while ($data = mysqli_fetch_array($result)){$id19 =  $data[0];$valor19 = $data[1]; $moeda19 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 20;");  
	while ($data = mysqli_fetch_array($result)){$id20 =  $data[0];$valor20 = $data[1]; $moeda20 = $data[2];}

	$resultado = ($valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7 + $valor8 + $valor9 + $valor10 + $valor11 + $valor12 + $valor13 + $valor14 + $valor15 + $valor16 + $valor17 + $valor18 + $valor19 + $valor20)/20;

	return $mms20 = $resultado;
	}                                                                                                                    
}                                                                                                                     
?>