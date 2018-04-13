<?php

$date = array('13. April 2018','13th April 2018');
$title = array('Metrohm - Silberpartner','Metrohm - Silver Partner');

$text = array('Metrohm nimmt an der Chemtogether 2018 als Silberpartner teil! Metrohm wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Metrohm <a href="/companies/metrohm/index.php#info">hier.</a>','Metrohm will participate in Chemtogether 2018 as a silver partner! Metrohm will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about Metrohm <a href="/companies/metrohm/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/metrohm/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
