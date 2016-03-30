<?php 

// callback

function recent_posts_function($atts, $content = null) {

   extract(shortcode_atts(array(
      'posts' => 1,
   ), $atts));


   $return_string = '<h3>'.$content.'</h3>';
   $return_string .= '<ul>';

   query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => 1));
   if (have_posts()) :
      while (have_posts()) : the_post();
         $return_string = '<a href="'.get_permalink().'">'.get_the_title().'</a>';
      endwhile;
   endif;
   wp_reset_query();
   return $return_string;
}


// register shortcode 

//[ remmber repeated function in php cant be used except in function not like c/c++ override]

function register_shortcodes(){
   add_shortcode('recent-posts', 'recent_posts_function');
}

// hook

add_action( 'init', 'register_shortcodes');


// [recent-posts posts="5"]


/************************************/ 
/* wiki shortcode callback function    START */ 
/************************************/ 

function wiki_callback_shortcode_qwe($atts)
{
      // $count=array('count'=>'2');
       $atts= shortcode_atts(
       array(
            'start'=>'on',
            'title1' =>'title 1',
            'title2' =>'',
            'title3' =>'',
            'title4' =>'',
            'content1' =>'Content 1',
            'content2' =>'',
            'content3' =>'',
            'content4' =>'',
            'count'=> 1,
         ), $atts
      );

      echo '<div class="qwe-paragraph" style="text-align: justify;">'.$atts['start'].'</div>';
      echo '<div id="toc" class="toc">';
      echo '   <div class="toctitle">';
      echo '      <h2>Contents</h2>';
      echo '   </div>';
      echo '   <ul>';


      for ($num=1; $num <= $atts['count'] ; $num++) 
      { 
      // $title=array($num =>'title'.$num.'');
      // $content='content'.$num;  
      // $atts= shortcode_atts( 

      echo '   <li class="toclevel-'.$num.' tocsection-'.$num.'"><a href="#'.$atts[$num].'"><span class="tocnumber">'.$num.'</span> <span class="toctext">'.$atts['title'.$num].'</span></a></li>';

      }
      
      echo '</ul>';
      echo '</div>';

      $num_content=4;   
      for ($numm=1; $numm <= $atts['count']  ; $numm++) 
      { 

      echo '<div>';
      echo '   &nbsp;';
      echo '   <h2>'.$atts['title'.$numm].'</h2>';
      echo '   <hr />';
      echo '   &nbsp;  ';       
      echo '   <strong>'.$atts['content'.$numm].'</strong>';
      echo '   &nbsp;';
      echo '</div>';
     $num_content=$num_content+1;

    }
}

function register_wiki_shortcode()
{
   // add_shortcode( $tag, $func );
   add_shortcode( 'wiki', 'wiki_callback_shortcode_qwe');
}

add_action('init','register_wiki_shortcode');


/************************************/ 
/* wiki shortcode callback function    END */ 
/************************************/ 

/************************************/ 
/* Youtube shortcode callback function    START */ 
/************************************/ 

function youtube_callback_shortcode_qwe($atts)
{
   $atts= shortcode_atts( 
      array(
         'src'=>'',
         'width'=> 820,
         'height'=> 465,
         'title'=>''
      ), $atts
   );
  return '
      &nbsp;
      <div id="" class="youtube-qwe">
         <h3>'.$atts['title'].'</h3>
           
         <iframe class="qwe-row-xs-5 qwe-row-lg-5 qwe-row-md-5 qwe-row-sm-5" src="'.$atts['src'].'" width="'.$atts['width'].'" height="'.$atts['height'].'" frameborder="0" allowfullscreen="allowfullscreen"></iframe> 
      </div>
      &nbsp;
   ';
}

function register_youtube_shortcode()
{
   // add_shortcode( $tag, $func );
   add_shortcode( 'youtube', 'youtube_callback_shortcode_qwe');
}

add_action('init','register_youtube_shortcode');


/************************************/ 
/* Youtube shortcode callback function    END */ 
/************************************/ 


/************************************/ 
/* squares shortcode callback function    START */ 
/************************************/ 

// function squares_callback_shortcode_qwe($atts)
function squares_callback_shortcode_qwe($atts)
{
      // $count=array('count'=>'2');
       $atts= shortcode_atts(
       array(
            'i'=>1,
            
         ), $atts
      );
   return '<div class="gray-square-'.$atts['i'].'-qwe">';

}

function register_squares_shortcode()
{
   // add_shortcode( $tag, $func );
   add_shortcode( 'squares', 'squares_callback_shortcode_qwe');
}

add_action('init','register_squares_shortcode');


/************************************/ 
/* squares shortcode callback function    END */ 
/************************************/

/************************************/ 
/* squareeeeee shortcode callback function    START */ 
/************************************/ 

// function squares_callback_shortcode_qwe($atts)
function squaree_callback_shortcode_qwe()
{
   return '</div>';

}

function register_squaree_shortcode()
{
   // add_shortcode( $tag, $func );
   add_shortcode( 'squaree', 'squaree_callback_shortcode_qwe');
}

add_action('init','register_squaree_shortcode');


/************************************/ 
/* squareeeeee shortcode callback function    END */ 
/************************************/

?>