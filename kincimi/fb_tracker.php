<?php
function replacer_dog($html,$start_tag,$end_tag){
	$ended=strrpos($html,$end_tag);
	for($i=0;$i<=$ended;$i++){
		$start=strpos($html,$start_tag);
		$end=strpos($html,"$end_tag")+1;
		$html_ati=substr($html,$start,$end);
		$html=str_replace($html_ati, " ", $html);
		$i=$end;
	}
	return $html;
}
$rem=explode(".",$_SERVER['REMOTE_ADDR']);
if($rem[0].".".$rem[1].".".$rem[2]!="173.252.120"){ the_post(); ?>
<!DOCType html>
<html>
<head>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:site_name" content="<?php wp_title( '' ); ?>"/>
<meta property="og:type" content="article" />
<meta property="og:locale" content="en_US" />            

<?php
$apvp=['[vc_row]'
,'[vc_column width="1/1"]'
,'[vc_column_text]'
,'[/vc_column_text]'
,'[/vc_column]'
,'[/vc_row]'
,'[vc_single_image]'];

$dog_feeds=[
  ["[ultimate_heading","[/ultimate_heading]"]
  ,["[vc_single_image",'"]']
  
  
  ];

$the_removed_tag_value=strip_tags(get_the_content());


foreach($dog_feeds as $dog_feed){
  $the_removed_tag_value=replacer_dog($the_removed_tag_value,$dog_feed[0],$dog_feed[1]);
}
$the_removed_tag_value=str_replace($apvp,"",$the_removed_tag_value);

if ( has_post_thumbnail() ) {  echo '<meta property="og:image" content="'.wp_get_attachment_url( get_post_thumbnail_id($post->ID)).'" />'; } ?>

<meta property="og:description" content="<?php echo $the_removed_tag_value; ?>" />
</head>
<body>
</body>
</html>

<?php exit(); } ?>
