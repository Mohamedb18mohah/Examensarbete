<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
			
<p>
      <label for="forbrukningstyp">forbrukningstyp </label>
          <input type="text" class="form-control" name="forbrukningstyp" id="forbrukningstyp" placeholder=" brÃ¤nsle " value="" required>

     
    </p>
      <p>
      <label for="nyckelkod">nyckelkod</label>
       <input type="text"  class="forbrukningstyp" name="nyckelkod" id="nyckelkod" placeholder="Phone" value="" required>

    </p>
    <p>
      <label for="varde">värde</label>
       <input type="text"  class="varde" name="varde" id="varde" placeholder="Phone" value="" required>

    </p>
    <p>
      <label for="enhet">enhet</label>
      <input type="text"  class="enhet" name="enhet" id="enhet" placeholder="enhet" value="" required>
    </p>
    <p>
      <label for="period">period</label>
        <input type="text"  class="period" name="period" id="period" placeholder="enhet" value="" required>
    </p>
    
     <p>
      <label for="tidpunkt">tidpunkt</label>
        <input type="text"  class="tidpunkt" name="tidpunkt" id="tidpunkt" placeholder="enhet" value="" required>
    </p>
    
    
    
     <p>
      <label for="detaljniva">detaljnivå</label>
      <input type="text"  class="detaljniva" name="detaljniva" id="detaljniva" placeholder="enhet" value="" required>
    </p>

                <button id="submit" type="submit"  > Submit</button>
			
		</form>
	</center>
</body>

</html>
