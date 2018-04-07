<?php

$date = array('29. März 2018','29th March 2018');
$title = array('Idorsia - Basispartner','Idorsia - Base Partner');

$text = array('Idorsia nimmt an der Chemtogether 2018 teil! Idorsia wird am Dienstag 6. November 2018 an der Chemtogether sein, also komm vorbei!<br>Mehr über Idorsia <a href="/companies/idorsia/index.php#info">hier.</a>','Idorsia will participate in Chemtogether 2018! Idorsia will be present on Tuesday, 6th November 2018, so see what they have to offer!<br>Learn more about Idorsia <a href="/companies/idorsia/index.php#info">here.</a>');

$logo = set_source($awss3.'/companies/idorsia/logo','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
