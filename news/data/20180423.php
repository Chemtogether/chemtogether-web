<?php

$date = array('23. April 2018','23rd April 2018');
$title = array('EMS - Basispartner','EMS - Base Partner');

$text = array('EMS nimmt an der Chemtogether 2018 teil! EMS wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über EMS <a href="/companies/ems/index.php#info">hier.</a>','EMS will participate in Chemtogether 2018! EMS will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about EMS <a href="/companies/ems/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/ems/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
