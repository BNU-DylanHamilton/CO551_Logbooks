<html>
  <head><title>Size page</title></head>
    <body>
      <form action="SelectColour.php"  method="post">
        <?php $cookieName = 'quantity';
        setcookie($cookieName, $_POST['selqty']); ?>
	Select the size for the <?php echo $_POST['selqty'] ?> widgets you are ordering </br>
   	<input type="radio" name="sizes" value="small" />Small -<input type="text" name="txtprice" size="10" value="15.75" readonly /></br>
  	<input type="radio" name="sizes" value="medium" />Medium -<input type="text" name="txtprice" size="10" value="16.75" readonly /></br>
  	<input type="radio" name="sizes" value="large" />Large -<input type="text" name="txtprice" size="10" value="17.75" readonly /></br>
  	<input type="radio" name="sizes" value="xlarge" />Extra Large -<input type="text" name="txtprice" size="10" value="18.75" readonly />
        <br/><br/>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	


<input type="text" name="txtprice" size="10" value="15.75" readonly />