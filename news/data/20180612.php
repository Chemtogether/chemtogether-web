<?php

$date = array('12. Juni 2018','12th June 2018');
$title = array('Chemtogether 2018 ist ausgebucht','Chemtogether 2018 is booked out');

$text = array(
  'Alle 18 Firmen der Chemtogether 2018 stehen fest! Wir danken DOW und BASF für ihre Unterstützung als Goldpartner, sowie Carbogen Amcis, Gurit, Lonza, Metrohm, Ivoclar Vivadent und Merck Sharp & Dohme für ihre Teilnahme als Silberpartner. <a href="/companies/">Siehe dir die vollständige Liste der teilnehmenden Firmen hier an.</a>',
  'All 18 companies attending Chemtogether 2018 have confirmed their attendence! We would like to thank DOW and BASF for their support as gold partners, as well as Carbogen Amcis, Gurit, Lonza, Metrohm, Ivoclar Vivadent and Merck Sharp & Dohme for their particitpation as silver partners. <a href="/companies/">Take a look at the complete list of attending companies here.</a>'
);

$logo = set_source($awss3.'/logo/chemtogether','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
