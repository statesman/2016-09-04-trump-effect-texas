<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  // update these fields
  $meta = array(
    "title" => "Working the Trump Effect | Statesman.com",
    "description" => "Democrats target down-ballot Texas House races, hoping to capitalize on some Republican's dislike for their presidential nominee, Donald Trump.",
    "thumbnail" => "http://projects.statesman.com/site_path/assets/share.jpg",
    "shortcut_icon" => "http://media.cmgdigital.com/shared/media/2015-08-28-16-58-55/web/site/www_mystatesman_com/images/favicon.ico",
    "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
    "url" => "http://projects.statesman.com/news/single-page-project/",
    "twitter" => "aasinteractive",
    "authors" => array(
        array("name" => "Christian McDonald", "twitter" => "crit"),
        array("name" => "Sean Collins Walsh", "twitter" => "seancwalsh")
    ),
    "publish_date" => "June 23, 2016",
    "related_story" => array(
        "url" => "http://www.mystatesman.com/news/news/local/jobs-schools-bring-growing-asian-population-north/nrk9D/",
        "headline" => "Sean's great story headline is here"
    )
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="<?php print $meta['shortcut_icon']; ?>" />
  <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
        <img class="visible-xs visible-sm" width="103" height="26" src="assets/logo-short-black.png" />
        <img class="hidden-xs hidden-sm" width="273" height="26" src="assets/logo.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
  </div>
</nav>

  <article class="container">

    <div class="row">
      <div class="col-lg-12 interative-header">
      <h1 id="pagetitle">The Trump effect on Texas House races</h1>
      <p class="author">By <?php $len = count($meta['authors']) - 1; foreach($meta['authors'] as $i => $row) { print "<a href='http://twitter.com/" . $row['twitter'] . "'>" . $row['name'] . "</a>"; if ($i !== $len) print " and "; }?>
      <br>
      Published <?php print $meta['publish_date']; ?></p>
      <p>Lucas ipsum dolor sit amet boba calrissian amidala sith dooku solo moff organa obi-wan windu. Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin. Lando skywalker lars fett calrissian lars organa. Organa kenobi wedge darth jawa skywalker anakin. Twi'lek kit darth calamari lando kamino droid. Darth jawa fett grievous maul. Palpatine obi-wan leia tusken raider dagobah. Twi'lek qui-gon boba antilles yoda thrawn. Wampa luuke wampa skywalker. Moff ponda ackbar dagobah kit lobot jinn solo.</p>
      <?php if ($meta['related_story'])
        print "<p class='bold'>Read more: <a href='" . $meta['related_story']['url'] . "' target='_blank'>" . $meta['related_story']['headline'] . " &raquo;</a></p>"
      ?>
      </div>
    </div>
    <hr>
    <!-- district 23 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-23.png"><br>
        <h5>District 23 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>19.0%</td>
            <td>22.7%</td>
            <td>55.5%</td>
            <td>54.8%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 23</h2>
        <h5>Galveston</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/23_r.jpg">
            <h3>Wayne Faircloth</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/23_d.jpg">
            <h3>Lloyd Criss</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 43 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-43.png"><br>
        <h5>District 43 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>3.6%</td>
            <td>59.8%</td>
            <td>35.0%</td>
            <td>55.3%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 43</h2>
        <h5>Kingsville, Alice, Corpus Christi</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/43_r.jpg">
            <h3>J.M. Lozano</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/43_d.jpg">
            <h3>Marisa Yvette Garcia-Utley</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 78 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-78.png"><br>
        <h5>District 78 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>5.6%</td>
            <td>64.7%</td>
            <td>26.90%</td>
            <td>49.1%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 78</h2>
        <h5>El Paso</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/78_r.jpg">
            <h3>Jeffrey Lane</h3>
            <h4>Republican</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/78_d.jpg">
            <h3>Joe Moody</h3>
            <h4>Democrat (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 105 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-105.png"><br>
        <h5>District 105 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>11.9%</td>
            <td>39.2%</td>
            <td>42.0%</td>
            <td>55.2%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 105</h2>
        <h5>Irving, Grand Prairie</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/105_r.jpg">
            <h3>Rodney Anderson</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/105_d.jpg">
            <h3>Terry Meza</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 107 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-107.png"><br>
        <h5>District 107 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>14.8%</td>
            <td>28.9%</td>
            <td>52.1%</td>
            <td>52.6%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 107</h2>
        <h5>Mesquite, Garland</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/107_r.jpg">
            <h3>Kenneth Sheets</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/107_d.jpg">
            <h3>Victoria Neave</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 113 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-113.png"><br>
        <h5>District 113 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>17.9%</td>
            <td>26.0%</td>
            <td>48.8%</td>
            <td>54.7%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 113</h2>
        <h5>Mesquite, Sunnyvale</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/113_r.jpg">
            <h3>Cindy Burkett</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/113_d.jpg">
            <h3>Rhetta Andrews Bowers</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 117 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-117.png"><br>
        <h5>District 117 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>6.8%</td>
            <td>58.8%</td>
            <td>31.6%</td>
            <td>51.5%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 117</h2>
        <h5>San Antonio, Helotes</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/117_r.jpg">
            <h3>Rick Galindo</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/117_d.jpg">
            <h3>Philip Cortez</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 118 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-118.png"><br>
        <h5>District 118 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>3.2%</td>
            <td>68.7%</td>
            <td>26.7%</td>
            <td>45.8%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 118</h2>
        <h5>San Antonio, Hedwig</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/118_r.jpg">
            <h3>John Lujan</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/118_d.jpg">
            <h3>Tomas Uresti</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 134 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-134.png"><br>
        <h5>District 134 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>5.2%</td>
            <td>13.3%</td>
            <td>70.1%</td>
            <td>50.4%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 134</h2>
        <h5>Houston, West University Place</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/134_r.jpg">
            <h3>Sarah Davis</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/134_d.jpg">
            <h3>Ben Rose</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 144 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-144.png"><br>
        <h5>District 144 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>3.8%</td>
            <td>69.8%</td>
            <td>25.6%</td>
            <td>51.7%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 144</h2>
        <h5>Pasadena, Houston</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/144_r.jpg">
            <h3>Gilbert Peña</h3>
            <h4>Republican (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/144_d.jpg">
            <h3>Mary Ann Perez</h3>
            <h4>Democrat</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- district 149 -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 map">
        <img class="img-responsive" src="assets/TX-house-149.png"><br>
        <h5>District 149 demographics, voting history</h5>
        <table class="table stats">
          <thead>
            <tr>
              <th>Black</th>
              <th>Hispanic</th>
              <th>White</th>
              <th>Voted<br> for Abbott</th>
            </tr>
          </thead>
          <tr>
            <td>24.4%</td>
            <td>33.8%</td>
            <td>20.3%</td>
            <td>46.5%</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6 col-lg-8">
        <h2 class="district">District 149</h2>
        <h5>Houston</h5>
        <div class="row">
          <div class="col-lg-6 candidate left clearfix">
            <img class="img_responsive" src="assets/149_r.jpg">
            <h3>Bryan Chu, R</h3>
            <h4>Republican</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>
          </div>
          <div class="col-lg-6 candidate right">
            <img class="img_responsive" src="assets/149_d.jpg">
            <h3>Hubert Vo, D</h3>
            <h4>Democrat (i)</h4>
            <p>Gamorrean binks wedge darth. Mon darth mon kit ponda solo. Moff watto ackbar mothma moff anakin.</p>          
          </div>
        </div>
      </div>
    </div>
    <hr>

<!--     <div class="row">
      <div class="col-xs-12">
        <p>Noun project icons by Yi Chen</p>
      </div>
    </div>
 -->

  </article>

    <!-- bottom matter -->
    <?php include "includes/banner-ad.inc";?>
    <?php include "includes/legal.inc";?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
