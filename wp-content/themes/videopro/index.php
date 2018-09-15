<?php
/**
 * @package videopro
 */

get_header();
$videopro_page_title = videopro_global_page_title();
$videopro_sidebar = videopro_global_bloglist_sidebar();
$videopro_sidebar_style = 'ct-small';
videopro_global_sidebar_style($videopro_sidebar_style);
$videopro_layout = videopro_global_layout();
?>
<div id="cactus-body-container">
    <div class="cactus-sidebar-control <?php if($videopro_sidebar!='full' && $videopro_sidebar!='left'){?>sb-ct-medium<?php }if($videopro_sidebar!='full' && $videopro_sidebar!='right'){?> sb-ct-small<?php }?>"> <!--sb-ct-medium, sb-ct-small-->
    
        <div class="cactus-container <?php if($videopro_layout=='wide'){ echo 'ct-default';}?>">                        	
            <div class="cactus-row">
            	<?php if($videopro_layout=='boxed'&& $videopro_sidebar=='both'){?>
                    <div class="open-sidebar-small open-box-menu"><i class="fa fa-bars"></i></div>
                <?php }?>
                <?php if($videopro_sidebar!='full' && $videopro_sidebar!='right'){ get_sidebar('left'); } ?>
                <div class="main-content-col">
                    <div class="main-content-col-body">
						<div class="archive-header">
							<?php 
							
							$show_heading = true;

							if(is_home() && ot_get_option('blog_page_heading', 'off') == 'off'){
								$show_heading = false;
							}
								
							
							videopro_breadcrumbs(true, $show_heading ? '' : 'no-heading');

							
							if(is_active_sidebar('content-top-sidebar')){
								echo '<div class="content-top-sidebar-wrap">';
								dynamic_sidebar( 'content-top-sidebar' );
								echo '</div>';
							}
							
							if(is_category()){
								$cat_img = '';
								
								if(function_exists('z_taxonomy_image_url')){ $cat_img = z_taxonomy_image_url();}
								
								$videopro_wp_query = videopro_global_wp_query();
								$item_name = get_option('cat_item_name_' . get_query_var('cat'));
								$item_name = $item_name == '' ? esc_html__('Videos','17jbh') : $item_name;
								if($cat_img != ''){?>
									<div class="header-category-img" >
										<div class="category-img" style="background-image:url(<?php echo esc_url($cat_img);?>)"></div>
										<h1 class="category-title entry-title"><?php echo esc_html($videopro_page_title);?></h1>
									</div>
									<?php
								}else{ 
									
									
									if($show_heading){
									?>                      
									<h1 class="category-title entry-title <?php if(is_category()){ echo 'header-title-cat';}?>"><?php echo esc_html($videopro_page_title);?></h1>
								<?php }
								}
							
							}
							
							$enable_switcher_toolbar = ot_get_option('enable_switcher_toolbar', 'on');
							$enable_order_select = ot_get_option('enable_order_select', 'on');
							$switch_view_enable = ($enable_switcher_toolbar != 'off' || $enable_order_select != 'off');
							$videopro_blog_layout = videopro_global_blog_layout();
							if($switch_view_enable && have_posts()){
								?>
							<div class="category-tools">
								<?php if ( have_posts() ) : ?>
								<?php
								
								if($enable_switcher_toolbar != 'off'){
									videopro_switcher_toolbar($videopro_blog_layout);
									?>
								<?php }?>
								<?php endif; ?>
							</div>
							<?php } ?>
						</div><!-- /.archive-header -->
                        <div class="cactus-listing-wrap <?php echo $switch_view_enable ? 'switch-view-enable' : '';?>">
                            <div class="cactus-listing-config <?php if($videopro_blog_layout == 'layout_3'){?>style-2<?php } if($videopro_blog_layout == 'layout_2'){?>style-3<?php }?>"> <!--addClass: style-1 + (style-2 -> style-n)-->
                                <div class="cactus-sub-wrap">
                                
                                    <?php 
									$i = 0;
									if ( have_posts() ) : ?>
										<?php while ( have_posts() ) : the_post();
											$i++; 
											$_GET['i']=$i;
											?>
                                        <!--item listing-->                                                
                                            <?php get_template_part( 'html/loop/content', get_post_format() ); ?>
                                        <?php endwhile; ?>
                                    <?php else : ?>
            
                                        <?php get_template_part( 'html/loop/content', 'none' ); ?>
            
                                    <?php endif; ?>
                                    <!--item listing-->
                                                                                    
                                </div>
                                
                                <?php videopro_paging_nav('.cactus-listing-config .cactus-sub-wrap','html/loop/content'); ?>

                                <?php if(is_active_sidebar('content-bottom-sidebar')){
									echo '<div class="content-bottom-sidebar-wrap">';
									dynamic_sidebar( 'content-bottom-sidebar' );
									echo '</div>';
								} ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
				<?php 
                $videopro_sidebar_style = 'ct-medium';
				videopro_global_sidebar_style($videopro_sidebar_style);
                if($videopro_sidebar!='full' && $videopro_sidebar!='left'){ get_sidebar(); } 
				?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();