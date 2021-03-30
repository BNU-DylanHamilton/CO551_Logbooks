<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
        <?php $cookieName = 'size';
        setcookie($cookieName, $_POST['sizes']); ?>
	Select the colour for the <?php echo $_COOKIE['quantity'] ?> widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>

    <?php 
    $cost = 0;
      
      if ($_POST['sizes'] == 'small')
      {
        $cost = 15.75;
      }
      else if ($_POST['sizes'] == 'medium')
      {
        $cost = 16.75;
      }
      else if ($_POST['sizes'] == 'large')
      {
        $cost = 17.75;
      }
      else if ($_POST['sizes'] == 'xlarge')
      {
        $cost = 18.75;
      }
      else
      {
        echo 'Please go back and select a size';
      }

    ?>
    <?php $cookieName = 'sizecost';
        setcookie($cookieName, $cost); ?>
        </select>
        <br/><br/>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	

