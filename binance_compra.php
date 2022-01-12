<?php
      //Atrinuindo ao PHP a data e hora da região de Sao Paulo
      date_default_timezone_set("America/Sao_Paulo");
      
      //Criando as constantes com as credencias de acesso ao banco de dados
      $servername = 'localhost'; $username = 'u853940274_3ds2on'; $password = '**********************'; $database = 'u853940274_3ds2on';
      
      //Criar a conexão com banco de dados 
      try {
      	$connection = mysqli_connect($servername, $username, $password, $database);
          } catch (PDOException $e) {
            echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
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
	  

	  
########## VERIFICANDO A MOEDA NO GRAFICO DE 1 HORA ##########
      
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

	  //REALIZANDO CALCULO DO VOLUME
	  include_once('binance_volume.php'); //incluir arquivo okex_mms.php
	  $vvv = new Volume(); //instância da classe Mediamovel
	  $vvv->instrument_id = $name; //Consumindo a clase para atribuir a moeda
	  $vvv->periodo = 2; 
	  $volume = $vvv->calcula_volume(); //Consumindo a clase e acionando o metodo	  

	  //REALIZANDO CALCULO PARA REVERSÃO DE TENDENCIA
	  include_once('binance_reversao_tendencia.php'); //incluir arquivo okex_mms.php
	  $vvvv = new Tendencia(); //instância da classe Mediamovel
	  $vvvv->instrument_id = $name; //Consumindo a clase para atribuir a moeda
	  $vvvv->periodo = 1; 
	  $tendencia = $vvvv->calcula_tendencia(); //Consumindo a clase e acionando o metodo

  	  //Verificando o controle
  	  $result = mysqli_query($connection, "SELECT controle FROM VENDER WHERE moeda = '$name' and id = $contador;");
      while ($data = mysqli_fetch_array($result)) {$controle = $data[0];}

      if ($controle == 0)   
	  {

  	  #########    PRIMEIRA CONDIÇÃO DE COMPRA    ############
	  if ($Close >= $mms25 && $Close >= $mms7 && $tendencia >= 3) 
	  {
		  
	  //REALIZANDO CALCULO DE MMS 7 PARA MOMENTO DE ENTRADA
	  include_once('binance_mms_7.php'); //incluir arquivo binance_mms_7.php para calcular uma media simples de 7 periodos
	  $e = new Mediamovel7(); 
	  $e->instrument_id = $name; 
	  $e->periodo = 15; 
	  $mms7 = $e->calcula_media_movel7(); 
  	  									   	  
	  //REALIZANDO CALCULO DE MMS 25 PARA MOMENTO DE ENTRADA
	  include_once('binance_mms_25.php'); //incluir arquivo okex_mms.php
	  $ee = new Mediamovel25(); //instância da classe Mediamovel
	  $ee->instrument_id = $name; //Consumindo a clase para atribuir a moeda
	  $ee->periodo = 15; 
	  $mms25 = $ee->calcula_media_movel25(); //Consumindo a clase e acionando o metodo
	
	  //REALIZANDO CALCULO PARA REVERSÃO DE TENDENCIA
	  include_once('binance_reversao_tendencia.php'); //incluir arquivo okex_mms.php
	  $eee = new Tendencia(); //instância da classe Mediamovel
	  $eee->instrument_id = $name; //Consumindo a clase para atribuir a moeda
	  $eee->periodo = 15; 
	  $tendencia = $eee->calcula_tendencia(); //Consumindo a clase e acionando o metodo

	
	  //AFERINDO MOMENTO DE ENTRADA	
	  if ($mms7 >= $mms25 && $Close >= $mms7 && $tendencia >= 3) 
	  { 
	  
	  /*
	  //Conectando com a Binance
	  require_once 'php-binance-api/php-binance-api.php';
	  $api = new Binance\API("Ls88spfYM88wZ01BpTnmPWJkxf8GKkqM6WGk7EhxIOXMJ9i8QQUbkWactfEJu8PD","**********************");

	  //Buscando o Preço atual o BTC em DOLLAR
	  $price = $api->price("BTCUSDT");
	  $precoBTC = "{$price}".PHP_EOL;
	  $precoBTC = number_format("$precoBTC",2,",","");
	  
	  //Buscando a quantidade de DOLLAR da minha carteira
	  $ticker = $api->prices();
	  $balances = $api->balances($ticker);
	  $quantityd = $balances['USDT']['available'].PHP_EOL;
	  $quantityd = number_format("$quantityd",2,",","");
  	  $quantityd = $quantityd - 1;    
		
	  //Calculando a quantidade de BTC que posso comprar
	  $quantity = "$quantityd" /"$precoBTC";
	  $quantity = number_format("$quantity",4,".",".");

	  //Order de compra a Mercado para BTCUSDT
	  $order = $api->marketBuy("BTCUSDT", $quantity);	 
	  */
	  
      //Inserindos dados no banco de dados
      $dataparacompra = date("Y-m-d H:i:s");
	  $controle = 1;	
	  
      $sql = "UPDATE VENDER SET precocompra = $Close, dataparacompra = '$dataparacompra', controle = $controle WHERE moeda = '$name' and id = $contador;"; 
	  
      if (mysqli_query($connection, $sql)) {
	  echo "A moeda ".$name.",ESTA BOA PARA COMPRAR "."<p>";	  
	  
      } else {
      echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
      }
	  
	  }      
	  
	  } else {
      echo "A moeda ".$name." NÃO ESTA BOA PARA COMPRAR "."<p>";       
      }
	  }
	  echo "O volume de ".$name." é ".$volume."<p>";   
 
$contador++;
}  
	 
      //Fechando a conexão com o banco de dados
	  mysqli_close($connection);
?>
