<?php

 function register_my_menus() {
  register_nav_menu('header-menu' , 'Header Menu' );
}
add_action( 'init', 'register_my_menus' ); 

?>

<div class="qwe-nav">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>

<?php

function register_my_menu() {
  register_nav_menu('header-menu1',__( 'Header Menu 2' ));
}
add_action( 'init', 'register_my_menu' );


 function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu2' => __( 'Header Menu 2' ),
      'extra-menu2' => __( 'Extra Menu 2' )
    )
  );
}
add_action( 'init', 'register_my_menus' ); 

?>



<div class="qwe-nav">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
<?php wp_nav_menu( array( 'theme_location' => 'extra-menu2', 'container_class' => 'my_extra_menu_class' ) ); ?>
</div>

<style>

/*nvigation menu*/
.qwe-nav {background: #000;width: 100%;float: left;}/* or display:block with float:left*/

.qwe-nav div > ul > li {display:inline-block;float: left;position: relative;background: #555;}
.qwe-nav div > ul > li li {position: relative;display:inline-block;float: none;}
.qwe-nav li a {display: inline-block;float: left;white-space:nowrap;background: #999;}

.qwe-nav div > ul > li ul {display:none;position: absolute;z-index: 1;}
.qwe-nav div > ul > li:hover > ul {display:inline-block;bottom:auto;background-color: red;left: 0;}
.qwe-nav div > ul > li li:hover > ul {display:inline-block;bottom:auto;background-color: green;right: auto;}

</style>