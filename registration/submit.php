<?php
$db = new SQLite3('registrations.db');

$query = "CREATE TABLE IF NOT EXISTS registrations (id INTEGER PRIMARY KEY, company TEXT)";
$db->exec($query);

echo "SQLite3 database and table created successfully.";
?>
