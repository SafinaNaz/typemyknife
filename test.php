<?php
  require_once("wp-load.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <?php
$taxonomy     = 'product_cat';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = '';
$empty        = 1;

$args = array(
       'taxonomy'     => $taxonomy,
       'orderby'      => $orderby,
       'show_count'   => $show_count,
       'pad_counts'   => $pad_counts,
       'hierarchical' => $hierarchical,
       'title_li'     => $title,
       'hide_empty'   => $empty
);
$all_categories = get_categories( $args );
foreach ($all_categories as $cat) {
  if($cat->category_parent == 0) {
      $category_id = $cat->term_id;
      //echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

      $args2 = array(
              'taxonomy'     => $taxonomy,
              'child_of'     => 0,
              'parent'       => $category_id,
              'orderby'      => $orderby,
              'show_count'   => $show_count,
              'pad_counts'   => $pad_counts,
              'hierarchical' => $hierarchical,
              'title_li'     => $title,
              'hide_empty'   => $empty
      );
      $sub_cats = get_categories( $args2 );
      if($sub_cats) {
          foreach($sub_cats as $sub_category) {
              //echo  $sub_category->name ;
          }
      }
  }
}

// An array of all published WC_Product Objects
$products = wc_get_products( array( 'status' => 'publish', 'limit' => -1, 'category' => array( 'Hersteller' ) ) );

// Displaying the number of products in this array
echo '<p>Number of products: ' . sizeof( $products ) . '</p>';

// Loop through products and display some data using WC_Product methods
foreach ( $products as $product ){
    echo '<p>';
    /*echo 'Type: '  . $product->get_type() . '<br>';*/  // Product type
    echo 'Name: ' . $product->get_title() . '<br>'; // Product title
    echo 'Preis: ' . $product->get_price() . '<br>';          // Product price
    echo 'Land: ' . '<br>';
    echo 'Hersteller: ' . '<br>';
    echo 'Serie: ' . '<br>';
    echo 'Link Thumbnail: ' . '<br>';
    echo 'Link 3D-Objekt: ' . '<br>';
    echo 'ID: '    . $product->get_id();    // Product ID
    echo '</p>';
}

/*
$args = array(
    'category' => array( 'Hersteller' ),
);
$products = wc_get_products( $args );
echo $products[0] => 'name';*/
?>

</body>
</html>
