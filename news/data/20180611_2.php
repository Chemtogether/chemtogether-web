<?php

$date = array('11. Juni 2018','11th June 2018');
$title = array('Merck Sharp & Dohme - Silberpartner','Merck Sharp & Dohme - Silver Partner');

$text = array('Merck Sharp & Dohme nimmt an der Chemtogether 2018 als Silberpartner teil! Merck Sharp & Dohme wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Merck Sharp & Dohme <a href="/companies/msd/index.php#info">hier.</a>','Merck Sharp & Dohme will participate in Chemtogether 2018 as a silver partner! Merck Sharp & Dohme will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about Merck Sharp & Dohme <a href="/companies/msd/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/msd/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
