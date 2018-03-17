<?php

$date = array('15. März 2018','15th March 2018');
$title = array('DOW - Goldpartner','DOW - Gold Partner');

$text = array('DOW Europe hat seine Teilnahme an der Chemtogether 2018 bestätigt und ist einer unserer Goldpartner! DOW wird am Mittwoch 7. November 2018 an der Chemtogether sein, also komm vorbei!','DOW Europe is the first confirmed attendee of Chemtogether 2018 and has become one of our gold partners! DOW will be present on Wednesday, 7th November 2018, so see what they have to offer!');

$logo = set_source($awss3.'/logo/dow','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
