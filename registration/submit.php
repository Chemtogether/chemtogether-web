<?php
$db = new SQLite3('registrations.db');

$create_query = "CREATE TABLE IF NOT EXISTS registrations (id INTEGER PRIMARY KEY, company TEXT)";
$db->exec($create_query);

$company = $_POST['company'];

$insert_query = "INSERT INTO users (company) VALUES ($company)";
$db->exec($insert_query);

$mail_msg = "A new company has registered: $company";

mail("schmiste@chem.ethz.ch", "New Chemtogether registration", $mail_msg);

?>
