<?php

$date = array('23. Mai 2018','23rd May 2018');
$title = array('Bachem - Basispartner','Bachem - Base Partner');

$text = array('Bachem nimmt an der Chemtogether 2018 teil! Bachem wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Bachem <a href="/companies/bachem/index.php#info">hier.</a>','Bachem will participate in Chemtogether 2018! Bachem will be present on Wednesday, 7th November 2018, so see what they have to offer!<br>Learn more about Bachem <a href="/companies/bachem/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/bachem/logo_svg','svg', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
