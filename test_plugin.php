<?php
/* 
Plugin Name: Webonise Test
Version: 1.01
Author: Ankur
Description: Plugin made for testing purposes of <a href="www.weboniselab.com"> Webonise Lab</a>
 */
/* function replace($text){
    $text=str_replace('or','and Only', $text);
    $text=str_replace('Edit','Delete', $text);
    return $text;
}
replace('$text');
add_filter('the_content','replace');
add_filter('the_header','replace');

?>
  */

function initiated(){
 $this->getAdminOptions();
}
add_action('test/test_plugin.php','initiated');
function addheader(){
    ?>

its different meaning
    <?php
}
function add_1(){
    ?>

 Life has
    <?php
}

function content_add($content=''){

    $content.="<p>h1234567</p>";
    return $content;

}
add_action('the_content','content_add',1);
add_action('wp_title','add_1',1);
add_action('wp_title','addheader',2);
?>
