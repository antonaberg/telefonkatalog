<?php
$name = $_POST["name"];
$phone = $_POST["phone"];
// Så här kan man "skapa" en CSV-databas och stoppa in
// värden i den:
$db = fopen("telelista.csv", "a");
$data = array($name, $phone);
fputcsv($db, $data);
// I en annan PHP-fil kan man sedan öppna databasen och
// läsa ur den:
print("Nu ska databasen skrivas ut: <br />");
// Man kan också läsa lite snyggare med PHP-funktionen list:
$db = fopen("telelista.csv", "r");
while (list($name, $phone) = fgetcsv($db))
  print("name: $name, phone: $phone <br />");
?>
