<?php



function twentytwenty_sidebar_registration() {

// Arguments used in all register_sidebar() calls.
$shared_args = array(
    'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
    'after_title'   => '</h2>',
    'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
    'after_widget'  => '</div></div>',
);

// Footer #1.
register_sidebar(
    array_merge(
        $shared_args,
        array(
            'name'        => __( 'Footer #1', 'twentytwenty' ),
            'id'          => 'sidebar-1',
            'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
        )
    )
);

// Footer #2.
register_sidebar(
    array_merge(
        $shared_args,
        array(
            'name'        => __( 'Footer #2', 'twentytwenty' ),
            'id'          => 'sidebar-2',
            'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
        )
    )
);

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );
?>

_____________________________________
front-page.

<?php
	get_header();
?>		
	    <!-- About article, static page -->
	<article class="about-section content px-3 py-5 p-md-5">
		<?php
			if( have_posts() ) {
				while( have_posts() ){

					the_post();
					the_content();
				}
			}

		?>





	</article>

    
<?php
	get_footer();
?>

____________________________________

<ul class="navbar-nav flex-column text-sm-center text-md-left">
					<li class="nav-item">
					    <a class="nav-link" href="index.php"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="post.php"><i class="fas fa-file-alt fa-fw mr-2"></i>Blog Post</a>
					</li>
					<li class="nav-item active">
					    <a class="nav-link" href="page.html"><i class="fas fa-file-image fa-fw mr-2"></i>Blog Page</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="archive.html"><i class="fas fa-archive fa-fw mr-2"></i>Blog Archive</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link btn btn-primary" href="contact.html"><i class="fas fa-envelope fa-fw mr-2"></i>Contact Us</a>
					</li>