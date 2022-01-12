<?php
      //Atrinuindo ao PHP a data e hora da região de Sao Paulo
      date_default_timezone_set("America/Sao_Paulo");
      
      //Criando as constantes com as credencias de acesso ao banco de dados
      $servername = 'localhost'; $username = 'u853940274_3ds2on'; $password = '**********************'; $database = 'u853940274_3ds2on';
      
      //Criar a conexão com banco de dados 
      try {
      	$connection = mysqli_connect($servername, $username, $password, $database);
          } catch (PDOException $e) {
            echo "Erro: Conexão com banco de dados não foi realizBTC com sucesso. Erro gerado " . $e->getMessage();
                                    }
      
      //selecionando o banco de dados 
      $db = mysqli_select_db($connection, "u853940274_3ds2on");
      
	  
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
	  
########## VERIFICANDO A MOEDA GRAFICO DE 1 HORA ##########
	  
	  //Buscando informação da moeda na Binance
	  $url = "https://api.binance.com/api/v3/klines?symbol=$name&interval=1m&limit=1";
	  $ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	  $ch = curl_exec($ch); $ch = substr($ch, 1); $ch = substr($ch, 0, -1); $moeda1 = json_decode($ch);  
	  $Open_time = $moeda1[0];	$Open = $moeda1[1];	$High = $moeda1[2];	$Low = $moeda1[3];	$Close = $moeda1[4];$Volume = $moeda1[5]; $Close_time = $moeda1[6];	
	  $Quote_asset_volume = $moeda1[7]; $Number_of_trades = $moeda1[8]; $Taker_buy_base_asset_volume = $moeda1[9]; $Taker_buy_quote_asset_volume = $moeda1[10]; $Ignore_value = $moeda1[11];
  
	  //REALIZANDO CALCULO DE MMS 7
	  include_once('binance_mms_7.php'); //incluir arquivo binance_mms_7.php para calcular uma media simples de 7 periodos
	  $v = new Mediamovel7(); 
	  $v->instrument_id = $name; 
	  $v->periodo = 1; 
	  $mms7 = $v->calcula_media_movel7(); 

	  //REALIZANDO CALCULO DE MMS 25
	  include_once('binance_mms_25.php'); //incluir arquivo okex_mms.php
	  $vv = new Mediamovel25(); //instância da classe Mediamovel
	  $vv->instrument_id = $name; //Consumindo a clase para atribuir a moeda
	  $vv->periodo = 1; 
	  $mms25 = $vv->calcula_media_movel25(); //Consumindo a clase e acionando o metodo

  	  //Obtendo o controle
  	  $result = mysqli_query($connection, "SELECT controle FROM VENDER WHERE moeda = '$name' and id = $contador;");
      while ($data = mysqli_fetch_array($result)) {$controle = $data[0];}
	  
	  //Obtendo o preço de compra
  	  $result = mysqli_query($connection, "SELECT precocompra FROM VENDER WHERE moeda = '$name' and id = $contador;");
      while ($data = mysqli_fetch_array($result)) {$precocompra = $data[0];}
	  
      if ($controle == 1)
	  {
	  #########    PRIMEIRA CONDIÇÃO DE VENDA    ############
	  if ($Close <= $mms7 || $Close <= $mms25)
	  {
	
      /*	
	  //Conectando com a Binance
	  require_once 'php-binance-api/php-binance-api.php';
	  $api = new Binance\API("Ls88spfYM88wZ01BpTnmPWJkxf8GKkqM6WGk7EhxIOXMJ9i8QQUbkWactfEJu8PD","**********************");

	  //Obtendo minha quaantidade de BTC
      $ticker = $api->prices();
      $balances = $api->balances($ticker);
	  $quantity = $balances['BTC']['available'].PHP_EOL;
		
	  //Order de venda a Mercado para BTCUSDT	 
	  $order = $api->marketSell("BTCUSDT", $quantity);	
      */
  	       
      //Inserindos dados no banco de dados
      $dataparavenda = date("Y-m-d H:i:s");
	  $controle = 0;
	  
      $sql = "UPDATE VENDER SET precovenda = $Close, dataparavenda = '$dataparavenda', controle = $controle WHERE moeda = '$name' and id = $contador;"; 
	  
      if (mysqli_query($connection, $sql)) {
	  echo "A moeda ".$name.", mms25 ".$mms25.", mms99 ".$mms99.", mms7 ".$mms7.", mms20 ".$mms20.", mms80 ".$mms80.", valor1 ".$Close.", ESTA BOA PARA VENDER"."<p>";	  
      
 	  //Verificando o lucro
  	  $result = mysqli_query($connection, "SELECT precocompra FROM VENDER WHERE moeda = '$name' and id = $contador;");
      while ($data = mysqli_fetch_array($result)) {$precocompra = $data[0];}
	  $result = mysqli_query($connection, "SELECT precovenda FROM VENDER WHERE moeda = '$name' and id = $contador;");
      while ($data = mysqli_fetch_array($result)) {$precovenda = $data[0];}
	  $result = mysqli_query($connection, "SELECT lucro FROM VENDER WHERE moeda = '$name' and id = $contador;");
      while ($data = mysqli_fetch_array($result)) {$lucro = $data[0];}
	  $novoLucro = $lucro + ($precovenda - $precocompra);
	  $sql = "INSERT INTO PUMPS_LOG (NOME_MOEDA,PRECO_COMPRA,PRECO_VENDA,DATA_VENDA,LUCRO) VALUES ('$name','$precocompra','$precovenda','$dataparavenda','$novoLucro');"; 
      // $sql = "UPDATE VENDER SET lucro = $novoLucro WHERE moeda = '$name' and id = $contador;";    (controle antigo)
	  if (mysqli_query($connection, $sql)) {
	  echo " Lucro gravado com sucesso! ";	  
      } else {
      echo " Error na gravação do Lucro: " . "<br>" . mysqli_error($connection);
      }
	  
	  //Order de venda a Mercado para BTCUSDT	 
	  $order = $api->marketSell("BTCUSDT", $quantity);	
	  } else {
      echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
      } 

      } else {
      echo "A moeda ".$name.", mms25 ".$mms25.", mms99 ".$mms99.", mms7 ".$mms7.", mms20 ".$mms20.", mms80 ".$mms80.", valor1 ".$Close.", NÃO ESTA BOA PARA VENDER"."<p>";	  
      }    	  
  
      }
 
$contador++;
}
	  
      //Fechando a conexão com o banco de dados
      mysqli_close($connection);
?>