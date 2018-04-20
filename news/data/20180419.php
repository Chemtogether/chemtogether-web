<?php

$date = array('19. April 2018','19th April 2018');
$title = array('Ivoclar Vivadent - Silberpartner','Ivoclar Vivadent - Silver Partner');

$text = array('Ivoclar Vivadent nimmt an der Chemtogether 2018 als Silberpartner teil! Ivoclar Vivadent wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Ivoclar Vivadent <a href="/companies/ivoclarvivadent/index.php#info">hier.</a>','Ivoclar Vivadent will participate in Chemtogether 2018 as a silver partner! Ivoclar Vivadent will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about Ivoclar Vivadent <a href="/companies/ivoclarvivadent/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/ivoclarvivadent/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
