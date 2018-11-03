<?php

$date = array('3. November 2018','3rd November 2018');
$title = array('Messeführer verfügbar','Fair guide available');

$text = array(
  'Der Messeführer der Chemtogether 2018 ist ab sofort <a href="https://s3.eu-central-1.amazonaws.com/static.chemtogether.2018/files/Chemtogether_2018_Brochure.pdf">hier</a> verfügbar!',
  'The fair guide for Chemtogether 2018 is now available <a href="https://s3.eu-central-1.amazonaws.com/static.chemtogether.2018/files/Chemtogether_2018_Brochure.pdf" class="link-underlined">here</a>.'
);

$logo = set_source($awss3.'/logo/chemtogether','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
