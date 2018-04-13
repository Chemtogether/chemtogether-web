<?php

$date = array('28. März 2018','28th March 2018');
$title = array('Carbogen Amcis - Silberpartner','Carbogen Amcis - Silver Partner');

$text = array('Carbogen Amcis nimmt an der Chemtogether 2018 als Silberpartner teil! Carbogen Amcis wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Carbogen Amcis <a href="/companies/carbogenamcis/index.php#info">hier.</a>','Carbogen Amcis will participate in Chemtogether 2018 as a silver partner! Carbogen Amcis will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about Carbogen Amcis <a href="/companies/carbogenamcis/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/carbogenamcis/logo','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
