<?php

$date = array('17. April 2018','17th April 2018');
$title = array('Kolb - Basispartner','Kolb - Base Partner');

$text = array('Kolb nimmt an der Chemtogether 2018 teil! Kolb wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Kolb <a href="/companies/kolb/index.php#info">hier.</a>','Kolb will participate in Chemtogether 2018! Kolb will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about Kolb <a href="/companies/kolb/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/kolb/logo','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
