<?php 
class Volume
{
    public $instrument_id;
    public $periodo;
		
    function calcula_volume()
    {
		
	if($this->periodo >= 2)
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
	
	$result = mysqli_query($connection, "SELECT Quote_asset_volume FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 1;");   
	while ($data = mysqli_fetch_array($result)){$Quote_asset_volume1 = $data[0];}
	$result = mysqli_query($connection, "SELECT Quote_asset_volume FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 2;");   
	while ($data = mysqli_fetch_array($result)){$Quote_asset_volume2 = $data[0];}
	
	if($Quote_asset_volume1 >= $Quote_asset_volume2)
	{
	$resultado = 1;
	return $resultado;
	}
    else
	{
	$resultado = 0;
	return $resultado;
	}	
	}
	else
	{
	echo "O periodo escolhido não é valido!";	
	}
		
	}
	
}                                                                                                                     
?>