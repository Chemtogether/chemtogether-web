<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>

<?php

if($template['day'] == 1) $company_list = $lang["day1"];
else $company_list = $lang["day2"];

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
            <td id="subnavigation-overview-click">
              <span><?php echo($lang['detail']['packages']['overview'][$eng]); ?></span>
              <i class="rotate fas fa-chevron-down"></i>
            </td>
            <td>
              <a href='<?php echo($next_company['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span><?php echo($next_company['name']); ?></span> <span><i class="fas fa-chevron-right"></i></span></a>
            </td>
          </tr>
        </table>

        <div class="subnavigation-overview">
          <br>
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
              if(isset($lang['day1'][$i])) echo('<td><a href="'.$lang['day1'][$i]["link_url"].'">'.$lang['day1'][$i]["name"].'</a></td>');
              else echo('<td></td>');
              if(isset($lang['day2'][$i])) echo('<td><a href="'.$lang['day2'][$i]["link_url"].'">'.$lang['day2'][$i]["name"].'</a></td>');
              else echo('<td></td>');
              echo('</tr>');
            } ?>
          </table>
          <br>
          <br>
        </div>
      </div>
    </div>

    <div class="spacer" id="direct">
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
        <img <?php set_source($template['logo_url'], 'png'); ?>></img>
      </div>
      <div class="text l-7 m-12 s-12">
        <div class="info">
          <span><?php echo($lang['detail']['packages'][$template['package']][$eng]); ?></span><br>
          <span><?php echo($lang['detail']['day'][$template['day']][$eng]); ?></span>
        </div>
        <br>
        <table class="fa-table">
          <?php
          if(isset($template['homepage'])) echo("<tr><td><i class='fas fa-fw fa-globe' data-fa-transform='shrink-6' data-fa-mask='fas fa-fw fa-square'></i></i></td><td><a href='".$template['homepage'][0]."'>".$template['homepage'][1]."</a></td></tr>");

          if(isset($template['mail'])) echo("<tr><td><i class='fas fa-fw fa-envelope-square'></i></td><td>".obfuscate_mail($template['mail'][0], '', '', $template['mail'][1], FALSE)."</td></tr>");

          if(isset($template['facebook'])) echo("<tr><td><i class='fab  fa-fw fa-facebook-square'></i></td><td><a href='".$template['facebook'][0]."'>".$template['facebook'][1]."</a></td></tr>");

          if(isset($template['linkedin'])) echo("<tr><td><i class='fab fa-fw fa-linkedin'></i></td><td><a href='".$template['linkedin'][0]."'>".$template['linkedin'][1]."</a></td></tr>");
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

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

  </div>


</div>
<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>
