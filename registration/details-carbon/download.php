<?php

if (!isset($_GET["t"]) || ($_GET["t"] != getenv("VIEW_DETAILS_CARBON_TOKEN"))){
    http_response_code(404);
    include('../../errors/404/index.php');
    exit();
}

$db = new SQLite3('detailscarbon.db');

$res = $db->query("SELECT * FROM detailscarbon");

header( 'Content-Type: application/csv' );
header( 'Content-Disposition: attachment; filename="CT_detailscarbon.csv";' );

// clean output buffer
ob_end_clean();
    
$handle = fopen( 'php://output', 'w' );

// use keys as column titles
$first_row = $res->fetchArray(SQLITE3_ASSOC);
fputcsv( $handle, array_keys( $first_row ), ";" );
fputcsv( $handle, $first_row, ";" );

while (( $value = $res->fetchArray(SQLITE3_ASSOC) )) {
    fputcsv( $handle, $value, ";" );
}

fclose( $handle );

// flush buffer
ob_flush();

// use exit to get rid of unexpected output afterward
exit();