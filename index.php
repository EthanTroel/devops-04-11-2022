<form action="" method="post">
<p>Achats<input type="text" name="shop" /></p>
<p><input type="submit" value="ad"></p>
</form>
<?php


if ($_POST) {
  $mysqlConnection = new mysqli("mysql", "root", "Not24get","root");
  $sqlQuery = ' INSERT INTO utilisateur (list, name) 
                VALUES ("' . $_POST['shop'] . '", "test");';
  $mysqlConnection->query($sqlQuery);

}
?>