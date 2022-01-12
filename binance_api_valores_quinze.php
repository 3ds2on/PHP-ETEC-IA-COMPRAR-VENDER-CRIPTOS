<?php
//Atrinuindo ao PHP a data e hora da regiÃ£o de SÃo Paulo 
date_default_timezone_set("America/Sao_Paulo");


//Criando as constantes com as credencias de acesso ao banco de dados
$servername = 'localhost'; $username = 'u853940274_3ds2on'; $password = '**********************'; $database = 'u853940274_3ds2on';

//Criar a conexÃ£o com banco de dados 
try {
	$connection = mysqli_connect($servername, $username, $password, $database);
    } catch (PDOException $e) {
      echo "Erro: ConexÃ£o com banco de dados nÃ£o foi realizada com sucesso. Erro gerado " . $e->getMessage();
                              }

//selecionando o banco de dados 
$db = mysqli_select_db($connection, "u853940274_3ds2on");

//Parametrização do laço para buscar uma moeda por vez.
$contador = 0;
while ($contador <= 9) 
{
		if ($contador ==  0){$name = "DOTUPUSDT";} 
		if ($contador ==  1){$name = "AAVEUPUSDT";} 
		if ($contador ==  2){$name = "SUSHIUPUSDT";} 
		if ($contador ==  3){$name = "YFIUPUSDT";} 
		if ($contador ==  4){$name = "XTZUPUSDT";} 
		if ($contador ==  5){$name = "DOTDOWNUSDT";} 
		if ($contador ==  6){$name = "AAVEDOWNUSDT";} 
		if ($contador ==  7){$name = "SUSHIDOWNUSDT";} 
		if ($contador ==  8){$name = "YFIDOWNUSDT";} 
		if ($contador ==  9){$name = "XTZDOWNUSDT";} 
		
		
	  
	    //Buscando informação da moeda na Binance
	    $url = "https://api.binance.com/api/v3/klines?symbol=$name&interval=15m&limit=1";
	    $ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    $ch = curl_exec($ch); $ch = substr($ch, 1); $ch = substr($ch, 0, -1); $moeda1 = json_decode($ch);  
	   
	    $name = "$name"; $Open_time = $moeda1[0];	$Open = $moeda1[1];	$High = $moeda1[2];	$Low = $moeda1[3];	$Close = $moeda1[4];$Volume = $moeda1[5]; $Close_time = $moeda1[6];	
	    $Quote_asset_volume = $moeda1[7]; $Number_of_trades = $moeda1[8]; $Taker_buy_base_asset_volume = $moeda1[9]; $Taker_buy_quote_asset_volume = $moeda1[10]; $Ignore_value = $moeda1[11];
	   
		//REALIZANDO CALCULO DE MMS 25
		include_once('binance_mms_25.php'); //incluir arquivo okex_mms.php
		$vv = new Mediamovel25(); //instância da classe Mediamovel
		$vv->instrument_id = $name; //Consumindo a clase para atribuir a moeda
		$vv->periodo = 15; 
		$mms25 = $vv->calcula_media_movel25(); //Consumindo a clase e acionando o metodo	
	   
		if ($Close >= $mms25){
	    $sql = "INSERT INTO QUINZE (name,Open_time,Open,High,Low,Close,Volume,Close_time,Quote_asset_volume,Number_of_trades,Taker_buy_base_asset_volume,Taker_buy_quote_asset_volume,Ignore_value,controle_mms25)
	    VALUES ('$name',$Open_time,$Open,$High,$Low,$Close,$Volume,$Close_time,$Quote_asset_volume,$Number_of_trades,$Taker_buy_base_asset_volume,$Taker_buy_quote_asset_volume,$Ignore_value,0)";
	    mysqli_query($connection, $sql);
						    } 
		else {
	    $sql = "INSERT INTO QUINZE (name,Open_time,Open,High,Low,Close,Volume,Close_time,Quote_asset_volume,Number_of_trades,Taker_buy_base_asset_volume,Taker_buy_quote_asset_volume,Ignore_value,controle_mms25)
	    VALUES ('$name',$Open_time,$Open,$High,$Low,$Close,$Volume,$Close_time,$Quote_asset_volume,$Number_of_trades,$Taker_buy_base_asset_volume,$Taker_buy_quote_asset_volume,$Ignore_value,1)";
	    mysqli_query($connection, $sql);
		     } 
	    
$contador++;
}

//Fechando a conexÃ£o com o banco de dados
mysqli_close($connection);
?>