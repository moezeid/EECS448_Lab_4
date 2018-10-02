<?php

$email = $_POST['useremail'];

$password = $_POST['userpass'];

$napkin = $_POST['item1'];

$chip = $_POST['item2'];

$penny = $_POST['item3'];

$shipping = $_POST['ship'];


echo"<h1> Welcome!</h1> <br>";
echo "<h3> Your email is $email and password is $password <h3><br>";

$nCost=2*$napkin;

$cCost=3*$chip;
$pCost=5*$penny;
$n=2;
$c=3;
$p=5;
$totalCost= $cCost + $pCost + $nCost + $shipping;
$shipStr="free";
if($shipping == "50")
{
  $shipStr= "Overnight";
}
else if($shipping == "5")
{
  $shipStr = "Express";
}
echo " <style>
table, tr, td {
  border: 1px solid black;
  padding: 15px;
  font-family: serif;

}
</style>";

echo "<table>";


echo "<tr>";

echo"<td></td> <td> Quantity </td> <td> Cost Per Unit</td> <td> SubTotal</td> </tr>";

echo "<tr><td> Used Napkin </td><td>$napkin </td><td>$$n</td><td>$$nCost</td></tr>";

echo "<tr><td> Chip </td><td>$chip </td><td>$$c</td><td>$$cCost</td></tr>";

echo "<tr><td> Penny </td><td>$penny </td><td>$$p</td><td>$$pCost</td></tr>";


echo "<tr> <td> Shipping </td> <td>$shipStr</td> <td>n/a  </td> <td> $$shipping</td> </tr>";


echo "<tr><td> Total Cost </td> <td>n/a</td> <td> n/a </td> <td>$$totalCost </td></tr>";

















?>
