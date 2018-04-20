<?php

$date = array('16. April 2018','16th April 2018');
$title = array('HOFFMANN EITLE - Basispartner','HOFFMANN EITLE - Base Partner');

$text = array('HOFFMANN EITLE nimmt an der Chemtogether 2018 teil! HOFFMANN EITLE wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über HOFFMANN EITLE <a href="/companies/hoffmanneitle/index.php#info">hier.</a>','HOFFMANN EITLE will participate in Chemtogether 2018! HOFFMANN EITLE will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about HOFFMANN EITLE <a href="/companies/hoffmanneitle/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/hoffmanneitle/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
