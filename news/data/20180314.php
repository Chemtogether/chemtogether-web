<?php

$date = array('14. März 2018','14th March 2018');
$title = array('Bericht über Chemtogether 2017 in CHIMIA','Conference report about Chemtogether 2017 in CHIMIA');

$text = array('Wir haben einen Bericht über Chemtogether 2017 in CHIMIA - Chemical Education veröffentlicht. Die Kommissionspräsidenten Lukas Lätsch und David Hahn reflektieren darin über die Highlights der Messe und die Rückmeldungen, die wir erhalten haben. Als Open Access lesbar unter','We published a report about Chemtogether 2017 in CHIMIA - Chemical Education. Last year\'s heads of committee Lukas Lätsch and David Hahn reflect on the event\'s highlights and the feedback we received. Read it online at');

$logo = set_source($awss3.'/logo/chemtogether','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng] <a href="https://chimia.ch/index.php?option=com_phocadownload&view=category&download=2043:2018-072&id=234:2018-01&lang=en">www.chimia.ch</a>.
</div>

END;

?>
