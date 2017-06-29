<?php
/*
Template Name: Landing Page
*/
?>



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


$actual_link = "$_SERVER[REQUEST_URI]";

preg_match_all('!\d+!', $actual_link, $matches);


/* Spits out the array so you can remember how the bloody thing is structured
* echo '<pre>'; print_r($matches); echo '</pre>';
* */

?>

<?php
include('parts/Top-crim.php');
?>

    <div class="row r3">

        <div class="columns small-12 large-7 r3-c1 desk-show">

            
            <?php
include('parts/what-you-need-crim.php');
?>

        </div>

        <div class="columns small-12 large-5 r3-c2 show-for-medium">

            <?php
            include('parts/testimonials.php');
            ?>

        </div>


    </div>

   

<?php
include('parts/Bottom-crim.php');
?>
  

