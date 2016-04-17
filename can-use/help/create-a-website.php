To Create a Website open your editor , I always use sublime editor , Then make your most important file index.php (our master php file) , Then save it to a special folder ( e.g 2birds folder ) , then start writing the following codes

[squares i="2"]

<!DOCTYPE html>

<html>

<head>

  <title></title>

<head>
<body>

</body>

</html>

[squaree]

add your folder project to sublime , Then add some important sub folders to the parent folder ( 2Birds ) , like css folder for your stylesheets , js for your JavaScript codes , images for your linked images , languages for your translated languages , functions (or include) for your functions , we will use those functions to control the most important parts of our theme , Later we will add some folders like page-templates Folder ( To make some important Templates files ) , main-structure Folder ( for our structure files ) , sub-pages Folder ( For Some Common Codes  ) .

add your first meta tag viewport , it is very important for zooming and rescalling Our Website at all devices ( specially mobiles ) , add viewport and device-width , initial-scall=1 ( like following )

[squares i="2"]

<!DOCTYPE html>

<html>

<head>

[squares i="2"]

<meta name="viewport" content="width=device-width,initial-scall=1">

[squaree]

   <title></title>

<head>

<body>

</body>

</html>

[squaree]

Next add meta tag ( http-equiv ) ,this meta tag used for Internet explorer (IE) compatibility modes , this meta used to force IE to use the latest mode ( called edge ) , this meta tag don't let IE to decide the mode and force it to use edge mode

[squares i="2"]
<meta http-equiv="X-UA-compatible" content="IE=edge">
[squaree]

Then add meta for character set , character set [ charset ] used to define any language characters , for example english has 26 characters , other languages has more , so we use charset to define more characters , UTF-8 is the most famous character sets , we will use our first WordPress php function bloginfo('charset') , this function get Backend ( i.e WordPress administrator panel ) language , To assign your Language Go To Backend panel , Find settings menu Then submenu general , you will find Language select box at the end of the page .

[squares i="2"]

<meta    charset="php bloginfo('charset');    ?>"    >

[squaree]

Next , We have two choices make to our website work correctly with IE 6 , 7 and 8 ( because old IE browsers doesn't support html5 and CSS3 codes ) , one of our choices to add the following code after <!DOCTYPE html>

 

[squares i="2"]

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> >
<!--<![endif]-->

[squaree]

Those codes help us to add special classes (e.g ie ie7 and ie8 classes) to our stylesheet , those class will contain some special properties for IE browser .

The second choice To add the following code after

[squares i="2"]

<script type="text/javascript" src="php echo get_template_directory_uri();?>/js/selectivizr-min.js">
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="php echo get_template_directory_uri(); ?>/js/selectivizr-min.js">
<noscript><link rel="stylesheet" href="fallback_css" /></noscript>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/rem.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/PIE.js"></script>
<![endif]-->

[squaree]


We add a new function get_template_directory_uri() ,

this function will be used to get the path to your JavaScript files folder [ js ] , those files that we will download and save to our folder js later

get_template_directory_uri() with echo will print the path to the root directory of your work [ i.e 2birds ] , then add /js/html5shiv.min.js , to get the file

To get this file refer to the link under this video , this link for all 2bird project theme materials

make the same step for respond.min.js file

min mean minify , minify is a technique used to minimize js files and also css and php and other files to make your website load very fast

4th function is wp_title( ) , used to get the title of the blog or your website , title also aigned by user from admin [ back-end ] panel settings > General

title appears at browser tab !

then we will add 2 links for our style sheets

first style sheet is essential for WordPress [ style.css ] , use bloginfo function and pass the parameter stylesheet_url

all WordPress function has reference and description at codex.wordpress.org , just go there and type the function name at search box , or google it

shift+ctrl+d at sublime editor will duplicat the line

sublime editor has a lot of features and plugins that you can't count , i love WordPress and sublime

for the second style sheet use get_template_directory_uri ( ) function

/css/skeleton.css to compleat the path for our css file [ this file is the skeleton for our website]

you can use bootstrap css file , but I use my skeleton

min for minify as we said before

last and not least , the most important function for wordpress plugins , widgets and your codes , wp_head ( )

wp_head( ) function pass a lot of things like styles and scripts , any one make plugins love this function and wp_footer ( ) function

if you like this video don't forget to subscribe , like and share