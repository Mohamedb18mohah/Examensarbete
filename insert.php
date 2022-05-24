<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<script type="text/javascript">

function tidrun (){
let str1 = localStorage.getItem("theData1");
let measurement1 = new Date();
measurement1 = measurement1.getTime();
str1 = "Start of textfile: \n";
str1 = localStorage.getItem("theData1");
str1 += measurement1 + "\n";
localStorage.setItem("theData1", str1);
window.location.assign('http://localhost/mysql/');
    
}
   
</script>
<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "db_contact");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        $id = '0';
		$forbrukningstyp = $_REQUEST['forbrukningstyp'];
		$nyckelkod = $_REQUEST['nyckelkod'];
		$varde = $_REQUEST['varde'];
		$enhet = $_REQUEST['enhet'];
		$period = $_REQUEST['period'];
        $tidpunkt = $_REQUEST['tidpunkt'];
        $detaljniva = $_REQUEST['detaljniva'];
		
		// Performing insert query execution
		// here our table name is college
        

        $sql = "INSERT INTO `tbl_contact` (`Id`,`forbrukningstyp`, `nyckelkod`, `varde`, `enhet`, `period`, `tidpunkt`, `detaljniva`) VALUES ('0', '$forbrukningstyp', '$nyckelkod', '$varde', '$enhet', '$period', '$tidpunkt', '$detaljniva' )";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
                echo "<script> tidrun(); </script>";

		} else{
			echo "ERROR:Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
