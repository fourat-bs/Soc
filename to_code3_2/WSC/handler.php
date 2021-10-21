<?php require('../WS2/client.php');
$isoCode=$_POST["isoCode"];
$op = $_POST["op"];
$res = get_info($isoCode, $op);
?>
<html>
<body>

the <?php echo $op ; ?> for <?php echo $isoCode ; ?> is <?php echo $res ; ?>

</body>
</html>

