<?
include_once("../core/crypto/Encriptador.class.php");

$miCodificador=Encriptador::singleton();
echo $miCodificador->codificar("D354RR0LL0oas_2013")."<br>";
echo $miCodificador->decodificar("Rf1+VGKFIFHx8XzQsBW5cVcccpE1TvetRsi2kQ==")."<br>";
echo $miCodificador->decodificar("pP2Gq4QUZ1PcO0JN28WA-wJ6")."<br>";

echo "migracion<br>";
echo $miCodificador->decodificar("2wDEoX9Do1O2JPqEBw==")."<br>";
echo $miCodificador->decodificar("QgGg31SSxVP5UptOHLoJA4iQ")."<br>";
echo $miCodificador->codificar("10.20.0.92")."<br>";
echo $miCodificador->codificar("change_my_secret")."<br>";
echo $miCodificador->decodificar("4wA6EH9Do1MqRq92")."<br>";
echo $miCodificador->decodificar("5gD8TH9Do1OF3z2aK59bUIvOQqOXyBV77dVJ")."<br>";
echo $miCodificador->decodificar("6wCAzX9Do1Op+lm+jkHt")."<br>";
echo $miCodificador->decodificar("RAGa3FSSxVPdm781_Db4JUIRgw8yAwUtigsrWf4EzRQ")."<br>";
echo $miCodificador->decodificar("8gDII39Do1P6Uo7fclKTeg9/fSx015qYhknDGA==")."<br>";


/*

$parametro=array("AwLSWHOR61DhZcTqkA==",
"CwKk33OR61C9BaWCkKKdcbc=",
"DwLlY3OR61B/gbFc",
"EwLQVHOR61DfS8OI/96/gEL0l9XuWw==",
"FwJ14HOR61DhdetkyM8whQ==",
"GwKxk3OR61C90avH6Fq2nbol5g==",
"HwI+DXOR61DMHj+OOwOsk7YAZg==");

foreach ($parametro as $valor){
	echo $miCodificador->decodificar($valor)."<br>";
}
*/


?>
