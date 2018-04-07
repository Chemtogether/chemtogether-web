<?php

$date = array('28. März 2018','28th March 2018');
$title = array('Dottikon - Basispartner','Dottikon - Base Partner');

$text = array('Dottikon nimmt an der Chemtogether 2018 teil! Dottikon wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Dottikon <a href="/companies/dottikon/index.php#info">hier.</a>','Dottikon will participate in Chemtogether 2018! Dottikon will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about Dottikon <a href="/companies/dottikon/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/dottikon/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
