<?php

$date = array('11. Juni 2018','11th June 2018');
$title = array('BASF - Goldpartner','BASF - Gold Partner');

$text = array('BASF ist einer unserer Goldpartner an der Chemtogether 2018 geworden! BASF wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über BASF <a href="/companies/basf/index.php#info">hier.</a>','BASF has become on of our gold partners for Chemtogether 2018! BASF will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about BASF <a href="/companies/basf/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/basf/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
