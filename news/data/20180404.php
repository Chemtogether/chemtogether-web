<?php

$date = array('4. April 2018','4th April 2018');
$title = array('Gurit - Silberpartner','Gurit - Silver Partner');

$text = array('Gurit nimmt an der Chemtogether 2018 als ein Silberpartner teil! Gurit wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Gurit <a href="/companies/gurit/index.php#info">hier.</a>','Gurit will participate in Chemtogether 2018 as a Silver Partner! Gurit will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about Gurit <a href="/companies/gurit/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/gurit/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
