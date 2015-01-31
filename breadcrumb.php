	<?php if ( ! is_front_page() ) : ?>
	<header class="page-header page-description">
		<h1 class="page-title">
			<?php
				if ( is_category() ) :
					single_cat_title();

				elseif ( is_tag() ) :
					printf( __( '标签 <b>%s</b> 下的文章：', 'semicolon' ), single_tag_title( '', false ) );

				elseif ( is_author() ) :
					printf( __( '小编 <b>%s</b> 撰写的文章：', 'semicolon' ), '<span class="vcard">' . get_the_author() . '</span>' );

				elseif ( is_day() ) :
					printf( __( '<b>%s</b>日发布的文章：', 'semicolon' ), '<span>' . get_the_date() . '</span>' );

				elseif ( is_month() ) :
					printf( __( '<b>%s</b> 所有的文章：', 'semicolon' ), '<span>' . get_the_date( _x( 'Y年m月', 'monthly archives date format', 'semicolon' ) ) . '</span>' );

				elseif ( is_year() ) :
					printf( __( '<b>%s</b>所有的文章：', 'semicolon' ), '<span>' . get_the_date( _x( 'Y年', 'yearly archives date format', 'semicolon' ) ) . '</span>' );

				elseif ( is_search() ) :
					printf( __( '<b>%s</b> 的搜索结果：', 'semicolon' ), '<span>' . get_search_query() . '</span>' );

				elseif ( is_archive() ):
					_e( '存档', 'semicolon' );

				endif;
			?>
		</h1>
	</header><!-- .page-header -->
	<?php endif; // is_front_page ?>