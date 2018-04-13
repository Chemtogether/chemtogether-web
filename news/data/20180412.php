<?php

$date = array('12. April 2018','12th April 2018');
$title = array('Siegfried - Basispartner','Siegfried - Base Partner');

$text = array('Siegfried nimmt an der Chemtogether 2018 teil! Siegfried wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Siegfried <a href="/companies/siegfried/index.php#info">hier.</a>','Siegfried will participate in Chemtogether 2018! Siegfried will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about Siegfried <a href="/companies/siegfried/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/siegfried/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
