<?php

$date = array('26. März 2018','26th March 2018');
$title = array('Archiv der Chemtogether veröffentlicht','Archive of Chemtogether published');

$text = array(
  'Das Archiv der Chemtogether ist fertiggestellt. <a href="/archive">Hier</a> können nun alle Profile von Unternehmen, die an einer Chemtogether teilgenommen haben, eingesehen werden. Auch die Interviews sind dort verfügbar!.',
  'The archive of Chemtogether is finished. <a href="/archive/">Here</a> you will find the profiles of all companies that ever attended a Chemtogether. In addition, all interviews can be found there, as well!'
);

$logo = set_source($awss3.'/logo/chemtogether','png', FALSE);
$content = <<<END

<div class="text l-12 m-12 s-12">
$text[$eng]
</div>

END;

?>
