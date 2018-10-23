<?php

$date = array('23. Oktober 2018','23rd October 2018');
$title = array('Registrierung für CV-Pics eröffnet!','Registration for CV-Pics open!');

$text = array(
  'Die Anmeldung für die professionellen Bewerbungsfotos mit CV-Pics ist eröffnet. <a href="https://ethz.doodle.com/poll/tf8hfqcdppt76pti" class="link-underlined">Hier</a> kannst du dich ab sofort für ein persönliches Fotoshooting registrieren. Die CV-Pics finden an beiden Messetagen im HCI J341 statt.<br>Bitte beachte, dass die Anmeldung verbindlich ist!',
  'The registration for the professional application photos taken by CV-Pics is now open. You may now register for your personal photo shooting <a href="https://ethz.doodle.com/poll/tf8hfqcdppt76pti" class="link-underlined">here</a>. The photo shoots will take place in HCI J341 on both days.<br>Please be aware that the registration is binding.'
);

$logo = set_source($awss3.'/logo/chemtogether','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
