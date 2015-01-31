<?php
$description = "你好,性爱!旨在传播健康科学的性爱知识,倡导开放包容的性观念和安全负责的性行为,宣传生动有趣的性教育,分享独特的性体验";
$keywords = "XXOO,性爱,性教育,性知识,科普,技巧,分享,姿势,性行为,OOXX";
if (is_single()) {
	if ($post->post_excerpt)
		$description = strip_tags($post->post_excerpt);
	else
		$description = mb_strimwidth(strip_tags($post->post_content),0,200);
	$keywords = "";
	$tags = wp_get_post_tags($post->ID);
	foreach ($tags as $tag ) {
		$keywords = $keywords . $tag->name . ", ";
	}
}
else if (is_category()) {
	$description = strip_tags(category_description());
	$keywords = single_cat_title('', false);
}
else if (is_page()) {
	$description = $post->post_title;
	$keywords = $post->post_title;
}
else if ( is_search() ) {
	$description = "搜索".get_query_var('s')."的搜索结果";
}
?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
