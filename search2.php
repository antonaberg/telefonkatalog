<?php
$name2 = $_POST["name2"];
$phone2 = $_POST["phone2"];
// I en annan PHP-fil kan man sedan öppna databasen och
// läsa ur den:
print("Nu ska databasen skrivas ut: <br />");
// Man kan också läsa lite snyggare med PHP-funktionen list:
$db = fopen("telelista.csv", "r");
while (list($name, $phone) = fgetcsv($db))
{
  
  if ($name2 == $name || $phone2 == $phone )
{
print("name: $name,<br/> phone: $phone <br />");
  }
else 
{
}
}
?>
