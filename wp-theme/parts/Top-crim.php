<?php
// Partial template
// pulled for Header
?>

<!doctype html>

<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");

if ($iphone || $android || $palmpre || $ipod || $ipad || $berry == true) {
    $mobile = true;
} else {
    $mobile = false;
}


?>

<html class="no-js crim" lang="en-US">

<head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation-flex.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--  <base href="http://nrsinjurylaw.com/helpline/" /> -->


    <!-- Begin SEO Link -->
    <?php
    $seo_uri=strtok($_SERVER["REQUEST_URI"],'?');
    $seo_url=$_SERVER['HTTP_HOST'];
    $base="http://".$seo_url."/helpline/";
    ?>
    <link rel="canonical" href="<?php echo $seo_url.$seo_uri.'?useHAAG=1'; ?>" />
    <!-- End SEO Link -->

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/scss/style-haa-crim.css">
    

    


    

    <?php

    function respImg ($imgName, $type){

        $seo_uri=strtok($_SERVER["REQUEST_URI"],'?');
        $seo_url=$_SERVER['HTTP_HOST'];

        //Assign the different sized images different names
        $fallBack = $imgName;
        $small = $imgName.'-s';
        $medium = $imgName.'-m'; 
        $large = $imgName.'-l';

        //Define image breakpoints-- the space in front is important
        $sbrk = " 300w";
        $mbrk = " 500w";
        $lbrk = " 600w";

        //Path to base images
        $pathFallback = get_stylesheet_directory_uri().'/assets/images/'; 
        //$path usually defined as:
        // $path = get_stylesheet_directory_uri()."/assets/images/";

        //Path to adaptive images
        $path = $pathFallback."adaptive/";


        //File type formatting
        $type = $type." "; 

        //Actual image source and source set output
        echo "src=\"".$pathFallback.$fallBack.$type."\" "; 
        echo "srcset=\"".$path.$small.$type.$sbrk.", ".$path.$medium.$type.$mbrk.", ".$path.$large.$type.$lbrk."\"";
        
    }

    ?>



    <?php
    $haa_query_1 = $_GET['sl'];


    switch ($haa_query_1) {
        case "do-i-have-a-claim":

        $sl = "-expand-di";
        break;
        
        case "steps-to-benefits":

        $sl = "-expand-1s";
        break;
        
        case "job-loss":

        $sl = "-expand-wi";
        break;
        
        case "medical-bill-denial":

        $sl = "-expand-mb";
        break;

        default:
        $sl = "";

    }  

//temp case to swap a partial
    $ver = $_GET['ver'];
    if (isset($ver)){}else{$ver=1;}

    ?>
    
    
    <?php  $phone = "<a href=\"tel:1\">111-111-1111</a>" ;
    $phonelink="1";?>

    <?php

    $geo_arr = array(
        "camelot",
        "st-petersburg",
        "hurst",
        "fort-worth",
        "singapore"
        );

    $haa_query_4 = $_GET['city'];

    if (in_array($haa_query_4, $geo_arr)){

        $geo_pos = array_search($haa_query_4, $geo_arr);

        $geo_txt = str_replace("-", " ",$geo_arr[$geo_pos]);

        $geo_txt = ucwords($geo_txt);

    }

    else{
        $geo_txt = "Tennessee";
    }


    $haa_query_2 = $_GET['camp'];

    switch ($haa_query_2) {
        case "1":
        $camp = "1";
        break;

        case "2":
        $camp = "2";
        break;

        default:
        $camp = "Are You Facing DWI Charges?";

    } ?>

</head>

<body>

 <!-- HAA Tag Manager -->

 <noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-TFFR9L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(), event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
    '//www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-TFFR9L');</script>

<!-- End HAA Tag Manager -->

<div class="r1-bg-wrap">

    <div class="row r1 align-middle"> 

        <div class="columns small-12 large-4 r1-c1">

            <div class="desk-show">

                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.jpg" class="r1-logo desk-show"
                alt="Adams Law Firm"/>

            </div>

            <div class="mobile-show">

                <div class="row align-middle">

                    <div class="columns small-12">

                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.jpg" class="r1-logo"
                        alt="Adams Law Firm"/>

                    </div>

                </div>

                <h2>

                    Call Us Now!

                </h2>

                <h3>

                    <?php echo $phone ?>
                    
                </h3>

            </div>

        </div>

        <div class="column large-4"></div>

        <?php // include (__DIR__.'/r1-mid-'.$ver.'.php');?>

        <div class="columns small-12  large-4 r1-c3">

            <div class="desk-show">

                <h2><?php echo $phone ?><br>

                   FREE CONFIDENTIAL
                   CONSULTATION!

               </h2>

           </div>

       </div>

<!-- <h4 class="mobile-show">
    I'm some bit of content!
</h4> -->


</div>

</div>

</div>

<div class="grey-bg desk-show">

    <div class="row r2" >

     <div class="columns small-12 large-9 r2-c1 align-middle">

         <div class="hero-text">

             0$ Down DWI/DUI Attorney

         </div>

         <h1 class="haaHD">

            <?php echo $camp ?>

        </h1>

        <!--  <h4>Put our 100+ years of combined legal experience to work for you!</h4> -->

    </div>


    <div class="columns small-12 large-3 r2-c2" >

       <?php echo do_shortcode('[contact-form-7 id="925" title="Sidebar Criminal Defense Page"]'); ?>

   </div>

</div>

</div>

<div class="grey-grad">

    <div class="row r2 mobile-show">

        <div class="column small-12 r2-c1">

        <div class="hero-text">

             0$ Down DWI/DUI Attorney

         </div>

            <h1>
                <?php echo $camp ?>

            </h1>

            <!-- <h4>Put our 100+ years of combined legal experience to work for you!</h4>
        -->
    </div>

</div>
</div>


