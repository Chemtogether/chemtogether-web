<?php

$date = array('11. Juni 2018','11th June 2018');
$title = array('MSD - Silberpartner','MSD - Silver Partner');

$text = array('MSD nimmt an der Chemtogether 2018 als Silberpartner teil! MSD wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über MSD <a href="/companies/msd/index.php#info">hier.</a>','MSD will participate in Chemtogether 2018 as a silver partner! MSD will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about MSD <a href="/companies/msd/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/msd/logo','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
