<?php 
/****************************
 * Custom CPT column layout
 ****************************/
// add_filter( "manage_event_posts_columns", "change_event_columns" );
// function change_event_columns( $cols ) {
//         $cols = array(
//             'cb'           => '<input type="checkbox" />',
//             'event_date'   => __( 'Event Date', 'trans'),
//             'event_title'  => __( 'Title', 'trans'),
//             'event_design' => __( 'Design', 'trans'),
//             'date'         => __( 'Date', 'trans')
//         );
//         return $cols;
// }
// add_action( "manage_posts_custom_column", "custom_event_columns", 10, 2 );
// function custom_event_columns( $column, $post_id ) {
//         switch ( $column ) {
//             case "event_date":
//                 $date = get_field( 'date', $post_id);
//                 if($date)
//                     echo "<a href='/wp-admin/post.php?post=".$post_id."&action=edit'><h3>".date('M j, Y',strtotime($date))."</h3></a>";
//                 break;
//             case "event_design":
//                 if (get_field('design')!= '') {
//                     foreach (get_field('design') as $postobject):
//                         $img_src = wp_get_attachment_image_src(get_field('design',$postobject->ID), 'thumbnail');
//                         echo "<a href='/wp-admin/post.php?post=".$post_id."&action=edit'><img src='".$img_src[0]."' width='50'></a>";
//                     endforeach;
//                 }
//                 break;
//             case "event_title":
//                 $title = get_field( 'title', $post_id);
//                 if($title)
//                     echo "<a href='/wp-admin/post.php?post=".$post_id."&action=edit'><h3>".$title."</h3></a>";
//                 break;
//         }
// }
?>