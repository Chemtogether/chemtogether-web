<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>

<?php

if($template['day'] == 1) $company_list = $data["day1"];
else $company_list = $data["day2"];

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
<div class="companies-detail" id="main">

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
            <tr>
              <td>
                <?php echo($lang['detail']['day_short'][1][$eng]); ?>
              </td>
              <td>
                <?php echo($lang['detail']['day_short'][2][$eng]); ?>
              </td>
            </tr>
            <tr>
              <td>
                <?php echo($lang['detail']['day'][1][$eng]); ?>
              </td>
              <td>
                <?php echo($lang['detail']['day'][2][$eng]); ?>
              </td>
            </tr>
            <?php for ($i=0; $i < max(sizeof($data['day1']), sizeof($data['day2'])); $i++) {
              echo('<tr>');
              if(isset($data['day1'][$i])) echo('<td><a href="'.$data['day1'][$i]["link_url"].'">'.$data['day1'][$i]["name"].'</a></td>');
              else echo('<td></td>');
              if(isset($data['day2'][$i])) echo('<td><a href="'.$data['day2'][$i]["link_url"].'">'.$data['day2'][$i]["name"].'</a></td>');
              else echo('<td></td>');
              echo('</tr>');
            } ?>
          </table>
          <br>
          <br>
        </div>
      </div>
    </div>

    <div class="anchor" id="info">
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
        <img <?php echo($template['logo_url']); ?>></img>
      </div>
      <div class="text l-7 m-12 s-12">
        <div class="info">
          <span><?php echo($lang['detail']['packages'][$template['package']][$eng]); ?></span><br>
          <span><?php echo($lang['detail']['day'][$template['day']][$eng]); ?></span>
        </div>
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

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <div class="subsection">
          <?php echo(bilingual($template['we_are']['title'])); ?>
        </div>
        <?php echo(bilingual($template['we_are']['text'])); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <div class="subsection">
          <?php echo(bilingual($template['we_offer']['title'])); ?>
        </div>
        <?php echo(bilingual($template['we_offer']['text'])); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <div class="subsection">
          <?php echo(bilingual($template['we_look']['title'])); ?>
        </div>
        <?php echo(bilingual($template['we_look']['text'])); ?>
      </div>
    </div>

    <?php if($template['interview_print_until'] > 0) { ?>
      <div class="spacer">
      </div>

      <div class="spacer">
      </div>

      <div class="section">
        <span class="section-slashes">
          <span>/</span><span>/</span>
        </span>
        <span class="section-text">
          <?php echo($lang['detail']['interviews']['section'][$eng]); if($template['interview_print_until']>1) echo('s'); ?>
        </span>
      </div>

      <?php for ($i=0; ($i < sizeof($template['interview'])) && ($i < $template['interview_print_until']); $i++) { ?>
        <div class="spacer">
        </div>

        <div class="anchor" id="i-<?php echo($i); ?>">
        </div>

        <div class="content flex-center">
          <div class="image-interviewee l-4 m-4 s-12">
            <div>
              <img <?php set_source($template['interview'][$i]['img_url'], 'png'); ?>></img>
            </div>
          </div>
          <div class="text l-8 m-8 s-12">
            <div class="interview-info">
              <span><?php echo($template['interview'][$i]['name']); ?></span><br>
              <span><?php echo($template['interview'][$i]['position']); ?></span>
              <br><br>
              <span><?php echo($lang['detail']['interviews']['education'][$eng]); ?></span>
              <table class="fa-table">
                <?php for ($j=0; $j < sizeof($template['interview'][$i]['education']); $j++) { 
                  $date = $template['interview'][$i]['education'][$j]['date']; 
                  if(is_array($date)) {
                    $date = $date;
                  }
                  else if(!preg_match('/-/', $date)) {
                    $date = $date.'-'.$lang['detail']['interviews']['present'];
                  } ?>
                  <tr>
                    <td><i class="fas fa-fw fa-chevron-right"></td>
                      <td><?php echo($template['interview'][$i]['education'][$j]['desc']); ?> (<?php echo($date); ?>)</td>
                    </tr>
                  <?php } ?>
                </table>
                <br>
                <span><?php echo($lang['detail']['interviews']['career'][$eng]); ?></span>
                <table class="fa-table">
                  <?php for ($j=0; $j < sizeof($template['interview'][$i]['career']); $j++) {
                    $date = $template['interview'][$i]['career'][$j]['date']; 
                    if(is_array($date)) {
                      $date = $date;
                    }
                    else if(!preg_match('/-/', $date)) {
                      $date = $date.'-'.$lang['detail']['interviews']['present'][$eng];
                    } ?>
                    <tr>
                      <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td><?php echo($template['interview'][$i]['career'][$j]['desc']); ?> (<?php echo($date); ?>)</td>
                      </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>

            <div class="content flex" id="interview-<?php echo($i); ?>">
              <?php for ($j=0; $j < sizeof($template['interview'][$i]['interview']); $j++) { ?>
                <div class="text l-12 m-12 s-12">
                  <div><?php echo($template['interview'][$i]['interview'][$j]['question']); ?></div>
                  <div><?php echo($template['interview'][$i]['interview'][$j]['answer']); ?></div>
                </div>
              <?php } ?>
            </div>

            <div class="content flex">
              <div class="text l-12 m-12 s-12">
                <div class="interview-separator spoiler-button" data-targetid="interview-<?php echo($i); ?>">
                  <span><i class="rotate fas fa-chevron-down"></i></span>
                  <span><?php echo($lang['detail']['interviews']['read_more'][$eng]); ?></span>
                </div>
              </div>
            </div>

            <div class="spacer">
            </div>
          <?php } ?>

        <?php } ?>

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
                  <i class="rotate fas fa-chevron-down"></i>
                </td>
                <td>
                  <a href='<?php echo($next_company['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span><?php echo($next_company['name']); ?></span> <span><i class="fas fa-chevron-right"></i></span></a>
                </td>
              </tr>
            </table>
            <br>
            <div class="subnavigation-overview" id="subnavigation-overview-bottom">

              <table>
                <tr>
                  <td>
                    <?php echo($lang['detail']['day_short'][1][$eng]); ?>
                  </td>
                  <td>
                    <?php echo($lang['detail']['day_short'][2][$eng]); ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <?php echo($lang['detail']['day'][1][$eng]); ?>
                  </td>
                  <td>
                    <?php echo($lang['detail']['day'][2][$eng]); ?>
                  </td>
                </tr>
                <?php for ($i=0; $i < max(sizeof($lang['day1']), sizeof($lang['day2'])); $i++) {
                  echo('<tr>');
                  if(isset($data['day1'][$i])) echo('<td><a href="'.$data['day1'][$i]["link_url"].'">'.$data['day1'][$i]["name"].'</a></td>');
                  else echo('<td></td>');
                  if(isset($data['day2'][$i])) echo('<td><a href="'.$data['day2'][$i]["link_url"].'">'.$data['day2'][$i]["name"].'</a></td>');
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
