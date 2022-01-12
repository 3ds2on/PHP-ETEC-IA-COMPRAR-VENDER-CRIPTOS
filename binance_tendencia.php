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
	        
	  
########## VERIFICANDO A MOEDA BTC NO GRAFICO DE 4 HORAS ##########
	  
      
	  //Buscando informação da moeda na Binance
	  $url = "https://api.binance.com/api/v3/klines?symbol=BTCUSDT&interval=1m&limit=1";
	  $ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	  $ch = curl_exec($ch); $ch = substr($ch, 1); $ch = substr($ch, 0, -1); $moeda1 = json_decode($ch);  
	  $name = 'BTCUSDT'; $Open_time = $moeda1[0];	$Open = $moeda1[1];	$High = $moeda1[2];	$Low = $moeda1[3];	$Close = $moeda1[4];$Volume = $moeda1[5]; $Close_time = $moeda1[6];	
	  $Quote_asset_volume = $moeda1[7]; $Number_of_trades = $moeda1[8]; $Taker_buy_base_asset_volume = $moeda1[9]; $Taker_buy_quote_asset_volume = $moeda1[10]; $Ignore_value = $moeda1[11];

	    
	  //REALIZANDO CALCULO DE MMS 7
	  include_once('binance_mms_7.php'); //incluir arquivo binance_mms_7.php para calcular uma media simples de 7 periodos
	  $v = new Mediamovel7(); 
	  $v->instrument_id = $name; 
	  $v->periodo = 4; 
	  $mms7 = $v->calcula_media_movel7(); 
  	  									   	  
	  //REALIZANDO CALCULO DE MMS 25
	  include_once('binance_mms_25.php'); //incluir arquivo okex_mms.php
	  $vv = new Mediamovel25(); //instância da classe Mediamovel
	  $vv->instrument_id = $name; //Consumindo a clase para atribuir a moeda
	  $vv->periodo = 4; 
	  $mms25 = $vv->calcula_media_movel25(); //Consumindo a clase e acionando o metodo


  	  //Verificando o controle
  	  $result = mysqli_query($connection, "SELECT controle FROM VENDER WHERE moeda = '$name' and id = 2;");
      while ($data = mysqli_fetch_array($result)) {$controle = $data[0];}

      if ($controle <> 1)   
	  {

  	  #########   CONDIÇÃO DE TENDENCIA    ############
	  if ($mms7 >= $mms25 && $Close >= $mms7) 
	  {
	  
      $sql = "UPDATE VENDER SET controle = 0 WHERE moeda = '$name' and id = 2;"; 
  
      if (mysqli_query($connection, $sql)) {
	  echo "ESTAMOS EM TENDENCIA DE ALTA"."<p>";	  

      } else {
      echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
      }
	  
      } else {

      $sql = "UPDATE VENDER SET controle = 3 WHERE moeda = '$name' and id = 2;"; 
  
      if (mysqli_query($connection, $sql)) {
	  echo "ESTAMOS EM TENDENCIA DE BAIXA"."<p>";	  

      } else {
      echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
      }
	  
      }
	  }


########## VERIFICANDO A MOEDA ETH NO GRAFICO DE 4 HORAS ##########
     
	 
	  //Buscando informação da moeda na Binance
	  $url = "https://api.binance.com/api/v3/klines?symbol=ETHUSDT&interval=1m&limit=1";
	  $ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	  $ch = curl_exec($ch); $ch = substr($ch, 1); $ch = substr($ch, 0, -1); $moeda1 = json_decode($ch);  
	  $name = 'ETHUSDT'; $Open_time = $moeda1[0];	$Open = $moeda1[1];	$High = $moeda1[2];	$Low = $moeda1[3];	$Close = $moeda1[4];$Volume = $moeda1[5]; $Close_time = $moeda1[6];	
	  $Quote_asset_volume = $moeda1[7]; $Number_of_trades = $moeda1[8]; $Taker_buy_base_asset_volume = $moeda1[9]; $Taker_buy_quote_asset_volume = $moeda1[10]; $Ignore_value = $moeda1[11];

	  
	  //REALIZANDO CALCULO DE MMS 7
	  include_once('binance_mms_7.php'); //incluir arquivo binance_mms_7.php para calcular uma media simples de 7 periodos
	  $v = new Mediamovel7(); 
	  $v->instrument_id = $name; 
	  $v->periodo = 4; 
	  $mms7 = $v->calcula_media_movel7(); 
	  
	  //REALIZANDO CALCULO DE MMS 25
	  include_once('binance_mms_25.php'); //incluir arquivo okex_mms.php
	  $vv = new Mediamovel25(); //instância da classe Mediamovel
	  $vv->instrument_id = $name; //Consumindo a clase para atribuir a moeda
	  $vv->periodo = 4; 
	  $mms25 = $vv->calcula_media_movel25(); //Consumindo a clase e acionando o metodo
	  
  	  //Verificando o controle
  	  $result = mysqli_query($connection, "SELECT controle FROM VENDER WHERE moeda = '$name' and id = 6;");
      while ($data = mysqli_fetch_array($result)) {$controle = $data[0];}

      if ($controle <> 1)   
	  {

  	  #########   CONDIÇÃO DE TENDENCIA    ############
	  if ($mms7 >= $mms25 && $Close >= $mms7) 
	  {
	  
      $sql = "UPDATE VENDER SET controle = 0 WHERE moeda = '$name' and id = 6;"; 
  
      if (mysqli_query($connection, $sql)) {
	  echo "ESTAMOS EM TENDENCIA DE ALTA"."<p>";	  

      } else {
      echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
      }
	  
      } else {

      $sql = "UPDATE VENDER SET controle = 3 WHERE moeda = '$name' and id = 6;"; 
  
      if (mysqli_query($connection, $sql)) {
	  echo "ESTAMOS EM TENDENCIA DE BAIXA"."<p>";

      } else {
      echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
      }
	  
      }
	  }
	 
      //Fechando a conexão com o banco de dados
	  mysqli_close($connection);
?>
