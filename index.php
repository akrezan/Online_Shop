<?php
ob_start();
/*include header.php file*/
include ('header.php');
?>

<?php
    /* include banner area */
    include ('Template/_banner-area.php');
    /* !include banner area */

    /* include Top sale */
    include ('Template/_top-sale.php');
    /* !include Top sale */

    /* include Special Price */
    include ('Template/_special-price.php');
    /* !include Special Price */

    /* include Banner Ads */
    include ('Template/_banner-ads.php');
    /* !include Banner Ads */

    /* include New Products */
    include ('Template/_new-products.php');
    /* !include New Products */

    /* include Blogs*/
    include ('Template/_blogs.php');
    /* !include Blogs */

?>


<?php
//include footer.php file
include ('footer.php');
?>