<?php
ob_start();
/*include header.php file*/
include ('header.php');
?>


<?php
    
    /* include Wishilist Tamplate */
    count($product->getUserData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
    /* !include Wishilist Tamplate */

    /* include New Products */
    include ('Template/_new-products.php');
    /* !include New Products */

?>

<?php
//include footer.php file
include ('footer.php');
?>
