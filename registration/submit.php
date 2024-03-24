<?php

if (!isset($_POST["token"])){
    #include('../errors/404/index.php');
    echo "Token not set \n";
    foreach ($_POST as $key => $value) {
        echo "$key: $value\n";
    }
    exit();

}

if ($_POST["token"] != getenv("REGISTRATION_TOKEN")){
    #include('../errors/404/index.php');
    echo "Token not correct \n";
    exit();
}

$db = new SQLite3('registrations.db');

$create_query = "CREATE TABLE IF NOT EXISTS registrations (id INTEGER PRIMARY KEY, company TEXT, first_name TEXT)";
$db->exec($create_query);

$insert_query = $db->prepare("INSERT INTO registrations (company, first_name) VALUES (:company, :first_name)");
$insert_query->bindValue(':company', $_POST['company']);
$insert_query->bindValue(':first_name', $_POST['first_name']);
$insert_query->execute();

$mail_msg = "A new company has registered: $company";

mail("schmiste@chem.ethz.ch", "New Chemtogether registration", $mail_msg);

?>
