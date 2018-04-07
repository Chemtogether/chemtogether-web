<?php

$date = array('28. März 2018','28th March 2018');
$title = array('Avantama - Basispartner','Avantama - Base Partner');

$text = array('Avantama nimmt an der Chemtogether 2018 teil! Avantama wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Avantama <a href="/companies/avantama/index.php#info">hier.</a>','Avantama will participate in Chemtogether 2018! Avantama will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about Avantama <a href="/companies/avantama/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/avantama/logo','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
