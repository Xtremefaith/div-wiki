<?php
/**
 * Recent Events Shortcode
 *
 * @author Nick Worth
 * @param <string> events - Number of events
 *
 **/
function div_get_recent_events($atts, $content = null){
  extract(shortcode_atts(array(  
      "events" => '3'  
  ), $atts));  
  
  $args = array(
    'post_type'       => 'event',
    'order'           => 'ASC',
    'post__not_in'    => array(get_the_ID()),
    'meta_query'      => array(
      array(
        'key'     => 'date',
        'value'   => array(date('Y/m/d'), date('Y/m/d',strtotime('90 days'))),
        'compare' => 'BETWEEN',
        'type'    => 'DATE'
      )
    ),
    'posts_per_page'  =>  $events
  );
  $event_query = new WP_Query( $args );

  $events = '<div class="events">';
    while ( $event_query->have_posts() ) : $event_query->the_post();
      $Event = new Event(get_the_ID());
      $date = date('M j, Y',strtotime(get_field('date')));
      
      $events .= '<div class="event">
          <div class="date">
            <div class="month">'. $Event->get_date("M") .'</div>
            <div class="day">'. $Event->get_date("j") .'</div>
          </div>
          <div class="event_details"> 
            <a class="title" href="'. get_permalink() .'">
              <p>'. get_the_title() .'</p>
            </a>
              <p class="description">'. div_truncate(get_the_excerpt(),60) .'</p>
          </div>
        </div>';        
    endwhile;
    $events .= '</div>';
    $events .= '<div style="text-align:right;padding-right:10px;"><a class="more_link" href="/events/">See Complete Events Calendar »</a></div>';

  return $events;
}
add_shortcode('recent_events', 'div_get_recent_events');  ?>