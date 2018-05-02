<?php

$date = array('2. Mai 2018','2nd May 2018');
$title = array('Lonza - Silberpartner','Lonza - Silver Partner');

$text = array('Lonza nimmt an der Chemtogether 2018 als Silberpartner teil! Lonza wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Lonza <a href="/companies/lonza/index.php#info">hier.</a>','Lonza will participate in Chemtogether 2018 as a silver partner! Lonza will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about Lonza <a href="/companies/lonza/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/lonza/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
