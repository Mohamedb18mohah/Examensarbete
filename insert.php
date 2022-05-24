<script type="text/javascript">
function tidrun (){
let str1 = localStorage.getItem("theData1");
let measurement1 = new Date();
measurement1 = measurement1.getTime();
str1 = "Start of textfile: \n";
str1 = localStorage.getItem("theData1");
str1 += measurement1 + "\n";
localStorage.setItem("theData1", str1);
window.location.assign('http://localhost/mongodb/');
    
}

   
</script>
<?php
require 'vendor/autoload.php'; 
    try {
        $client = new MongoDB\Client;
        $companydb = $client->companydb;
        $empcollection = $companydb->empcollection;
        $number =  1;
        $id = $number + 1;
		$forbrukningstyp = $_REQUEST['forbrukningstyp'];
		$nyckelkod = $_REQUEST['nyckelkod'];
		$varde = $_REQUEST['varde'];
		$enhet = $_REQUEST['enhet'];
		$period = $_REQUEST['period'];
        $tidpunkt = $_REQUEST['tidpunkt'];
        $detaljniva = $_REQUEST['detaljniva'];

        $insertOneResult = $empcollection->insertOne(
    [ 'forbrukningstyp' => $forbrukningstyp, 'nyckelkod' => $nyckelkod, 'varde' =>$varde, 'enhet' => $enhet, 'period' => $period, 'tidpunkt' => $tidpunkt, 'detaljniva' => $detaljniva]
);
printf("Inserted %d documents", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());
      
        echo "<script> tidrun(); </script>";
    }
    catch (Throwable $e) {
        // catch throwables when the connection is not a success
        echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;
    }


?>
