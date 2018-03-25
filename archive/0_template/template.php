<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>

<?php

$company_list = $archive;

$key = 0;
for ($i=0; $i < sizeof($company_list); $i++) {
  if($company_list[$i]['name_short'] == $template['company_name_short']) {
    $key = $i;
    break;
  }
}



$key_prev = $key - 1;
if($key_prev < 0) $key_prev = sizeof($company_list)-1;
$prev_company = $company_list[$key_prev];

$key_next = $key + 1;
if($key_next > sizeof($company_list)-1) $key_next = 0;
$next_company = $company_list[$key_next];
?>


<!-- START CONTENT -->
<div class="archive-detail" id="main">

  <div class="container">

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <table class="subnavigation-links">
          <tr>
            <td>
              <a href='<?php echo($prev_company['link_url']); ?>'><span><i class="fas fa-chevron-left"></i></span> <span><?php echo($prev_company['name']); ?></span> <span><i class="fas fa-chevron-left"></i></span></a>
            </td>
            <td class="spoiler-button" data-targetid="subnavigation-overview-top">
              <span><?php echo($lang['detail']['packages']['overview'][$eng]); ?></span>
              <span><i class="rotate fas fa-chevron-down"></i></span>
            </td>
            <td>
              <a href='<?php echo($next_company['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span><?php echo($next_company['name']); ?></span> <span><i class="fas fa-chevron-right"></i></span></a>
            </td>
          </tr>
        </table>
        <br>
        <div class="subnavigation-overview" id="subnavigation-overview-top">
          <table>
          </tr>
          <?php
          $half_i = ceil(sizeof($archive)/2);
          for ($i=0; $i < $half_i; $i++) {
            echo('<tr>');
            if(isset($archive[$i])) echo('<td><a href="'.$archive[$i]["link_url"].'">'.$archive[$i]["name"].'</a></td>');
            else echo('<td></td>');
            if(isset($archive[(int) $i+$half_i])) echo('<td><a href="'.$archive[(int) $i+$half_i]["link_url"].'">'.$archive[(int) $i+$half_i]["name"].'</a></td>');
            else echo('<td></td>');
            echo('</tr>');
          } ?>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>

  <div class="title">
    <span class="title-text">
      <?php echo($template['company_name']); ?>
    </span>
  </div>

  <div class="spacer s-d0 m-d1 l-d1">
  </div>

  <div class="content flex-center">
    <div class="image-logo l-5 m-12 s-12">
      <img <?php echo($archive[$key]['logo_url']); ?>></img>
    </div>
    <div class="text l-7 m-12 s-12">
      <div class="info">
        <span><?php echo($lang['detail']['attendences'][$eng]); ?></span>
      </div>
      <table class="fa-table">
        <?php foreach ($archive[$key]['attendences'] as $attendence_year => $attendence_package) { ?>
          <tr><td><i class='fas fa-fw fa-chevron-right'></i></td><td><?php echo($attendence_year.' | '.$lang['detail']['packages'][$attendence_package][$eng]); ?></tr>
          <?php } ?>
        </table>
        <br>
        <table class="fa-table">
          <?php
          if(isset($template['homepage'])) echo("<tr><td><i class='fas fa-fw fa-globe' data-fa-transform='shrink-6' data-fa-mask='fas fa-fw fa-square'></i></td><td><a href='".$template['homepage'][0]."'>".$template['homepage'][1]."</a></td></tr>");

          if(isset($template['mail'])) echo("<tr><td><i class='fas fa-fw fa-envelope-square'></i></td><td>".obfuscate_mail($template['mail'][0], '', '', $template['mail'][1], FALSE)."</td></tr>");

          if(isset($template['facebook'])) echo("<tr><td><i class='fab  fa-fw fa-facebook-square'></i></td><td><a href='".$template['facebook'][0]."'>".$template['facebook'][1]."</a></td></tr>");

          if(isset($template['linkedin'])) echo("<tr><td><i class='fab fa-fw fa-linkedin'></i></td><td><a href='".$template['linkedin'][0]."'>".$template['linkedin'][1]."</a></td></tr>");

          if(isset($template['archive'])) echo("<tr><td><i class='fas fa-fw fa-archive' data-fa-transform='shrink-6' data-fa-mask='fas fa-fw fa-square'></i></td><td><a href='".$template['archive']."'>".$lang['detail']['archive'][$eng]."</a></td></tr>");
          ?>
        </table>
      </div>
    </div>

    <div class="spacer l-d1 m-d1 s-d0">
    </div>

    <div class="spacer l-d1 m-d1 s-d0">
    </div>

    <div class="spacer" id="profile">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <div class="subsection">
          <?php echo($lang['detail']['we_are'][$eng]); ?>
        </div>
        <?php echo($template['we_are'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <div class="subsection">
          <?php echo($lang['detail']['we_offer'][$eng]); ?>
        </div>
        <?php echo($template['we_offer'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <div class="subsection">
          <?php echo($lang['detail']['we_look'][$eng]); ?>
        </div>
        <?php echo($template['we_look'][$eng]); ?>
      </div>
    </div>

    <?php
    if(isset($template['interview'])) {
      foreach($template['interview'] as $year => $data) { ?>

        <div class="spacer">
        </div>

        <div class="spacer">
        </div>

        <div class="section">
          <span class="section-slashes">
            <span>/</span><span>/</span>
          </span>
          <span class="section-text">
            <?php echo($lang['detail']['interviews']['section'][$eng]); if(sizeof($data)>1) echo('s'); echo(" ".$year); ?>
          </span>
        </div>

        <?php for ($i=0; $i < sizeof($data); $i++) { ?>
          <div class="spacer">
          </div>

          <div class="content flex-center">
            <div class="image-interviewee l-4 m-4 s-12">
              <div>
                <img <?php echo($data[$i]['img_url']); ?>></img>
              </div>
            </div>
            <div class="text l-8 m-8 s-12">
              <div class="interview-info">
                <span><?php echo($data[$i]['name']); ?></span><br>
                <span><?php echo($data[$i]['position'][$eng]); ?></span>
                <br><br>
                <span><?php echo($lang['detail']['interviews']['education'][$eng]); ?></span>
                <table class="fa-table">
                  <?php for ($j=0; $j < sizeof($data[$i]['education']); $j++) { ?>
                    <tr>
                      <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td><?php echo($data[$i]['education'][$j]['desc'][$eng]); ?> (<?php echo($data[$i]['education'][$j]['date']); ?>)</td>
                      </tr>
                    <?php } ?>
                  </table>
                  <br>
                  <span><?php echo($lang['detail']['interviews']['career'][$eng]); ?></span>
                  <table class="fa-table">
                    <?php for ($j=0; $j < sizeof($data[$i]['career']); $j++) { ?>
                      <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                          <td><?php echo($data[$i]['career'][$j]['desc'][$eng]); ?> (<?php echo($data[$i]['career'][$j]['date']); ?>)</td>
                        </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>

              <div class="content flex" id="interview-<?php echo($year); ?>-<?php echo($i); ?>">
                <?php for ($j=0; $j < sizeof($data[$i]['interview']); $j++) { ?>
                  <div class="text l-12 m-12 s-12">
                    <div><?php echo($data[$i]['interview'][$j]['question'][$eng]); ?></div>
                    <div><?php echo($data[$i]['interview'][$j]['answer'][$eng]); ?></div>
                  </div>
                <?php } ?>
              </div>

              <div class="content flex">
                <div class="text l-12 m-12 s-12">
                  <div class="interview-separator spoiler-button" data-targetid="interview-<?php echo($year); ?>-<?php echo($i); ?>">
                    <span><i class="rotate fas fa-chevron-down"></i></span>
                    <span><?php echo($lang['detail']['interviews']['read_more'][$eng]); ?></span>
                  </div>
                </div>
              </div>

              <div class="spacer">
              </div>
            <?php } ?>

          <?php } }?>

          <div class="spacer">
          </div>

          <div class="spacer l-d1 m-d1 s-d0">
          </div>

          <div class="content flex">
            <div class="text l-12 m-12 s-12">
              <table class="subnavigation-links">
                <tr>
                  <td>
                    <a href='<?php echo($prev_company['link_url']); ?>'><span><i class="fas fa-chevron-left"></i></span> <span><?php echo($prev_company['name']); ?></span> <span><i class="fas fa-chevron-left"></i></span></a>
                  </td>
                  <td class="spoiler-button" data-targetid="subnavigation-overview-bottom">
                    <span><?php echo($lang['detail']['packages']['overview'][$eng]); ?></span>
                    <span><i class="rotate fas fa-chevron-down"></i></span>
                  </td>
                  <td>
                    <a href='<?php echo($next_company['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span><?php echo($next_company['name']); ?></span> <span><i class="fas fa-chevron-right"></i></span></a>
                  </td>
                </tr>
              </table>
              <br>
              <div class="subnavigation-overview" id="subnavigation-overview-bottom">
                <table>
                </tr>
                <?php
                $half_i = ceil(sizeof($archive)/2);
                for ($i=0; $i < $half_i; $i++) {
                  echo('<tr>');
                  if(isset($archive[$i])) echo('<td><a href="'.$archive[$i]["link_url"].'">'.$archive[$i]["name"].'</a></td>');
                  else echo('<td></td>');
                  if(isset($archive[(int) $i+$half_i])) echo('<td><a href="'.$archive[(int) $i+$half_i]["link_url"].'">'.$archive[(int) $i+$half_i]["name"].'</a></td>');
                  else echo('<td></td>');
                  echo('</tr>');
                } ?>
              </table>
              <br>
              <br>
            </div>
          </div>
        </div>

      </div>


    </div>
    <!-- END CONTENT  -->

    <?php include('includes/footer.php');  ?>
    <?php include('includes/foot.php');  ?>
