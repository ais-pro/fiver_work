<?php
$rem=explode(".",$_SERVER['REMOTE_ADDR']);
if($rem[0].".".$rem[1].".".$rem[2]=="173.252.120"){ the_post(); ?>
<!DOCType html>
<html>
<head>
<meta property="og:title" content="Workday Sets Price Range for I.P.O." />
<meta property="og:site_name" content="<?php wp_title( '' ); ?>"/>
<meta property="og:type" content="article" />
<meta property="og:locale" content="en_US" />            <!-- Default -->

<?php if ( has_post_thumbnail() ) {  echo '<meta property="og:image" content="'.the_post_thumbnail().'" />'; } ?>

<meta property="og:description" content="<?php the_content(); ?>" />
</head>
<body>
</body>
</html>
<?php exit(); } ?>
