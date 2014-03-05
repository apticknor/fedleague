<?php 
    // global vars
    $site_url = 'http://fedleague.org/';
?>
<!doctype HTML>
<html lang="en" class="no-js">
    <head>
        
        <!-- META DATA -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" />
        <!--[if IE]><meta http-equiv="cleartype" content="on" /><![endif]-->

        <!-- SEO -->
        <title><?php echo $meta_title; ?></title>
        <meta name= "description" content="<?php echo $meta_description; ?>" />
        <meta name="robots" content="index, follow">

        <!-- ICONS -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo $site_url; ?>apple-touch-icon.png">
        <link rel="shortcut icon" type="image/ico" href="<?php echo $site_url; ?>favicon.ico" />

        <!-- STYLESHEETS -->
        <!--[if !IE]><!-->
        <link rel="stylesheet" media="screen, projection" href="<?php echo $site_url; ?>assets/styles/screen.css" />
        <!--<![endif]-->
        <!--[if gt IE 8]>
        <link rel="stylesheet" media="screen, projection" href="<?php echo $site_url; ?>assets/styles/screen.css" />
        <![endif]-->
        <!--[if lte IE 8]>
        <link rel="stylesheet" media="screen, projection" href="<?php echo $site_url; ?>assets/styles/simple.css" />
        <![endif]-->
        <link rel="stylesheet" media="print" href="<?php echo $site_url; ?>assets/styles/print.css" />

        <!-- SCRIPTS -->
        <script type="text/javascript" src="<?php echo $site_url; ?>assets/scripts/modernizr.js"></script>
        
        <!-- ANALYTICS -->
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-28048028-1']);
          _gaq.push(['_setDomainName', 'fedleague.org']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>
    </head>
    <body>