<?php

$date = array('17. April 2018','17th April 2018');
$title = array('Helveting - Basispartner','Helveting - Base Partner');

$text = array('Helveting nimmt an der Chemtogether 2018 teil! Helveting wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Helveting <a href="/companies/helveting/index.php#info">hier.</a>','Helveting will participate in Chemtogether 2018! Helveting will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about Helveting <a href="/companies/helveting/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/helveting/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
