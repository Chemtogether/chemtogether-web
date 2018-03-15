<?php

$date = array('6. März 2018','6th March 2018');
$title = array('Neue Homepage der Chemtogether veröffentlicht','New homepage of Chemtogether published');

$text = array(
  'Die neuaufgelegte Homepage der Chemtogether wurde veröffentlicht. Alle alten Materialien zur Chemtogether 2017 werden demnächst im Archiv zur Verfügung stehen.',
  'The newly-made homepage of Chemtogether was uploaded. All old material including interviews of Chemtogether 2017 will be published in the archive soon.'
);

$logo = set_source($awss3.'/logo/chemtogether','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
