<?php

$date = array('3. April 2018','3rd April 2018');
$title = array('Sika - Basispartner','Sika - Base Partner');

$text = array('Sika nimmt an der Chemtogether 2018 teil! Sika wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Sika <a href="/companies/sika/index.php#info">hier.</a>','Sika will participate in Chemtogether 2018! Sika will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about Sika <a href="/companies/sika/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/sika/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
