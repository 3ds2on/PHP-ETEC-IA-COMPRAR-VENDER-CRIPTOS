<?php 
class Mediamovel80
{
    public $instrument_id;

    function calcula_media_movel80()
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
	while ($data = mysqli_fetch_array($result)){$id1 =  $data[0]; $valor1 = $data[1]; $moeda1 = $data[2];}
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
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 21;");  
	while ($data = mysqli_fetch_array($result)){$id21 =  $data[0];$valor21 = $data[1]; $moeda21 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 22;");  
	while ($data = mysqli_fetch_array($result)){$id22 =  $data[0];$valor22 = $data[1]; $moeda22 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 23;");  
	while ($data = mysqli_fetch_array($result)){$id23 =  $data[0];$valor23 = $data[1]; $moeda23 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 24;");  
	while ($data = mysqli_fetch_array($result)){$id24 =  $data[0];$valor24 = $data[1]; $moeda24 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 25;");  
	while ($data = mysqli_fetch_array($result)){$id25 =  $data[0];$valor25 = $data[1]; $moeda25 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 26;");  
	while ($data = mysqli_fetch_array($result)){$id26 =  $data[0];$valor26 = $data[1]; $moeda26 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 27;");  
	while ($data = mysqli_fetch_array($result)){$id27 =  $data[0];$valor27 = $data[1]; $moeda27 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 28;"); 
	while ($data = mysqli_fetch_array($result)){$id28 =  $data[0];$valor28 = $data[1]; $moeda28 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 29;");  
	while ($data = mysqli_fetch_array($result)){$id29 =  $data[0];$valor29 = $data[1]; $moeda29 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 30;");  
	while ($data = mysqli_fetch_array($result)){$id30 =  $data[0];$valor30 = $data[1]; $moeda30 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 31;");  
	while ($data = mysqli_fetch_array($result)){$id31 =  $data[0];$valor31 = $data[1]; $moeda31 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 32;");  
	while ($data = mysqli_fetch_array($result)){$id32 =  $data[0];$valor32 = $data[1]; $moeda32 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 33;");  
	while ($data = mysqli_fetch_array($result)){$id33 =  $data[0];$valor33 = $data[1]; $moeda33 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 34;");  
	while ($data = mysqli_fetch_array($result)){$id34 =  $data[0];$valor34 = $data[1]; $moeda34 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 35;");  
	while ($data = mysqli_fetch_array($result)){$id35 =  $data[0];$valor35 = $data[1]; $moeda35 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 36;");  
	while ($data = mysqli_fetch_array($result)){$id36 =  $data[0];$valor36 = $data[1]; $moeda36 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 37;");  
	while ($data = mysqli_fetch_array($result)){$id37 =  $data[0];$valor37 = $data[1]; $moeda37 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 38;");  
	while ($data = mysqli_fetch_array($result)){$id38 =  $data[0];$valor38 = $data[1]; $moeda38 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 39;");  
	while ($data = mysqli_fetch_array($result)){$id39 =  $data[0];$valor39 = $data[1]; $moeda39 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 40;");  
	while ($data = mysqli_fetch_array($result)){$id40 =  $data[0];$valor40 = $data[1]; $moeda40 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 41;");  
	while ($data = mysqli_fetch_array($result)){$id41 =  $data[0];$valor41 = $data[1]; $moeda41 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 42;");  
	while ($data = mysqli_fetch_array($result)){$id42 =  $data[0];$valor42 = $data[1]; $moeda42 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 43;");  
	while ($data = mysqli_fetch_array($result)){$id43 =  $data[0];$valor43 = $data[1]; $moeda43 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 44;");  
	while ($data = mysqli_fetch_array($result)){$id44 =  $data[0];$valor44 = $data[1]; $moeda44 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 45;");  
	while ($data = mysqli_fetch_array($result)){$id45 =  $data[0];$valor45 = $data[1]; $moeda45 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 46;");  
	while ($data = mysqli_fetch_array($result)){$id46 =  $data[0];$valor46 = $data[1]; $moeda46 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 47;");  
	while ($data = mysqli_fetch_array($result)){$id47 =  $data[0];$valor47 = $data[1]; $moeda47 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 48;");
	while ($data = mysqli_fetch_array($result)){$id48 =  $data[0];$valor48 = $data[1]; $moeda48 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 49;");  
	while ($data = mysqli_fetch_array($result)){$id49 =  $data[0];$valor49 = $data[1]; $moeda49 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 50;");  
	while ($data = mysqli_fetch_array($result)){$id50 =  $data[0];$valor50 = $data[1]; $moeda50 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 51;");  
	while ($data = mysqli_fetch_array($result)){$id51 =  $data[0];$valor51 = $data[1]; $moeda51 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 52;");  
	while ($data = mysqli_fetch_array($result)){$id52 =  $data[0];$valor52 = $data[1]; $moeda52 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 53;");  
	while ($data = mysqli_fetch_array($result)){$id53 =  $data[0];$valor53 = $data[1]; $moeda53 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 54;");  
	while ($data = mysqli_fetch_array($result)){$id54 =  $data[0];$valor54 = $data[1]; $moeda54 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 55;");  
	while ($data = mysqli_fetch_array($result)){$id55 =  $data[0];$valor55 = $data[1]; $moeda55 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 56;");  
	while ($data = mysqli_fetch_array($result)){$id56 =  $data[0];$valor56 = $data[1]; $moeda56 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 57;");  
	while ($data = mysqli_fetch_array($result)){$id57 =  $data[0];$valor57 = $data[1]; $moeda57 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 58;");  
	while ($data = mysqli_fetch_array($result)){$id58 =  $data[0];$valor58 = $data[1]; $moeda58 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 59;");  
	while ($data = mysqli_fetch_array($result)){$id59 =  $data[0];$valor59 = $data[1]; $moeda59 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 60;");  
	while ($data = mysqli_fetch_array($result)){$id60 =  $data[0];$valor60 = $data[1]; $moeda60 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 61;");  
	while ($data = mysqli_fetch_array($result)){$id61 =  $data[0];$valor61 = $data[1]; $moeda61 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 62;");  
	while ($data = mysqli_fetch_array($result)){$id62 =  $data[0];$valor62 = $data[1]; $moeda62 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 63;");  
	while ($data = mysqli_fetch_array($result)){$id63 =  $data[0];$valor63 = $data[1]; $moeda63 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 64;");  
	while ($data = mysqli_fetch_array($result)){$id64 =  $data[0];$valor64 = $data[1]; $moeda64 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 65;");  
	while ($data = mysqli_fetch_array($result)){$id65 =  $data[0];$valor65 = $data[1]; $moeda65 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 66;"); 
	while ($data = mysqli_fetch_array($result)){$id66 =  $data[0];$valor66 = $data[1]; $moeda66 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 67;");  
	while ($data = mysqli_fetch_array($result)){$id67 =  $data[0];$valor67 = $data[1]; $moeda67 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 68;");  
	while ($data = mysqli_fetch_array($result)){$id68 =  $data[0];$valor68 = $data[1]; $moeda68 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 69;");  
	while ($data = mysqli_fetch_array($result)){$id69 =  $data[0];$valor69 = $data[1]; $moeda69 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 70;");  
	while ($data = mysqli_fetch_array($result)){$id70 =  $data[0];$valor70 = $data[1]; $moeda70 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 71;");  
	while ($data = mysqli_fetch_array($result)){$id71 =  $data[0];$valor71 = $data[1]; $moeda71 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 72;");  
	while ($data = mysqli_fetch_array($result)){$id72 =  $data[0];$valor72 = $data[1]; $moeda72 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 73;");  
	while ($data = mysqli_fetch_array($result)){$id73 =  $data[0];$valor73 = $data[1]; $moeda73 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 74;");  
	while ($data = mysqli_fetch_array($result)){$id74 =  $data[0];$valor74 = $data[1]; $moeda74 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 75;");  
	while ($data = mysqli_fetch_array($result)){$id75 =  $data[0];$valor75 = $data[1]; $moeda75 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 76;");  
	while ($data = mysqli_fetch_array($result)){$id76 =  $data[0];$valor76 = $data[1]; $moeda76 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 77;");  
	while ($data = mysqli_fetch_array($result)){$id77 =  $data[0];$valor77 = $data[1]; $moeda77 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 78;");  
	while ($data = mysqli_fetch_array($result)){$id78 =  $data[0];$valor78 = $data[1]; $moeda78 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 79;");  
	while ($data = mysqli_fetch_array($result)){$id79 =  $data[0];$valor79 = $data[1]; $moeda79 = $data[2];}
	$result = mysqli_query($connection, "SELECT id, Close, name  FROM MINUTO WHERE name = '$this->instrument_id' ORDER BY id desc LIMIT 80;");  
	while ($data = mysqli_fetch_array($result)){$id80 =  $data[0];$valor80 = $data[1]; $moeda80 = $data[2];}

	$resultado = ($valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7 + $valor8 + $valor9 + $valor10 + $valor11 + $valor12 + $valor13 + $valor14 + $valor15 + $valor16 + $valor17 + $valor18 + $valor19 + $valor20 + $valor21 + $valor22 + $valor23 + $valor24 + $valor25 + $valor26 + $valor27 + $valor28 + $valor29 + $valor30 + $valor31 + $valor32 + $valor33 + $valor34 + $valor35 + $valor36 + $valor37 + $valor38 + $valor39 + $valor40 + $valor41 + $valor42 + $valor43 + $valor44 + $valor45 + $valor46 + $valor47 + $valor48 + $valor49 + $valor50 + $valor51 + $valor52 + $valor53 + $valor54 + $valor55 + $valor56 + $valor57 + $valor58 + $valor59 + $valor60 + $valor61 + $valor62 + $valor63 + $valor64 + $valor65 + $valor66 + $valor67 + $valor68 + $valor69 + $valor70 + $valor71 + $valor72 + $valor73 + $valor74 + $valor75 + $valor76 + $valor77 + $valor78 + $valor79 + $valor80)/80;

	return $mms80 = $resultado;
	}                                                                                                                    
}                                                                                                                     
?>