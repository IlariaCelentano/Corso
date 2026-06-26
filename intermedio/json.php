
 <?php 
 
 
//  a che serve il file Json? a salvare e scambiare i dati: salvare un utente, inserire i dati, comunicare con una API, leggere i file di configurazione
$utente =[
    "atletaId"=> 30,
    "nome" => "Laura",
    "cognome" => "Caruso",
    "sesso" =>'F',
    "dataNascita" =>"12/13/1987",
    "citta" => "Ferrara",
    "nazionalita" => "italiana"

]; 
//
//  converte l'array in json
 $jsonApi = json_encode($utente);
//  echo "<h3>JSON</h3>";
//  echo($jsonApi);
 //salvataggio nel file utenti.json
 

 $cartella = "data";

 $path = "data/utenti.json";

 //se non esiste la cartella, la crea
 //mkdir()crea una nuoca cartella
 //il permesso 0777 indica i permessi
 //il parametro true permette di creare le cartelle annidate
 if(!is_dir($cartella)){
    mkdir($cartella, 0777, true);
 }

 file_put_contents($path, $jsonApi);
 echo "<h5>salvataggio avvenuto con successo</h5>";
 
 if(!file_exists($path)){
    file_put_contents($path, "[]");
 }
 //convertiamo da array a json
//  $arrayPhp = json_decode($jsonApi,true);
//  echo "<h3>array </h3>";
//  print_r($arrayPhp);
 //salviamo in un file il nostro array
?>
