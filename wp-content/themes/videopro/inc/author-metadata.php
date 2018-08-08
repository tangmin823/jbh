<?php
//add author social link meta
add_action( 'show_user_profile', 'videopro_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'videopro_show_extra_profile_fields' );
function videopro_show_extra_profile_fields( $user ) { ?>
	<h3><?php esc_html_e('Social Accounts','17jbh') ?></h3>

    <h3><?php esc_html_e('Custom Social Accounts','17jbh') ?></h3>
    <?php
	$custom_acc = get_the_author_meta( 'cactus_account', $user->ID );
	$c = 0;
	?>
    <table class="cactus-account">
        <?php if ( $custom_acc && count( $custom_acc ) > 0 ) { ?>
        <tr>
			<th><?php esc_html_e('Title','17jbh') ?></th>
            <th><?php esc_html_e('URL (include http://)','17jbh') ?></th>
			<th></th>
		</tr>
			<?php
			foreach( $custom_acc as $track ) {
				if ( (isset( $track['title'] ) && $track['title'] != '') || (isset( $track['icon'] ) && $track['icon'] != '') || (isset( $track['url'] ) && $track['url'] != '') ) {
					printf( '
					<tr class="metadata">
						<td><input type="text" name="cactus_account[%1$s][title]" id="title" value="%2$s" class="" /></td>
						<td><input type="text" name="cactus_account[%1$s][icon]" id="icon" value="%3$s" class="regular-text" /></td>
						<td><input type="text" name="cactus_account[%1$s][url]" id="url" value="%4$s" class="regular-text" /></td>
						<td valign="top"><button class="custom-acc-remove button"><i class="fas fa-times"></i> Remove</button></td>
					</tr>
			', $c, $track['title'], $track['icon'], $track['url'] );
					$c = $c +1;
				}
			}
		}else{ ?>
        	<tr class="cactus-account-header hidden">
                <th><?php esc_html_e('Title','17jbh') ?></th>
                <th><?php esc_html_e('URL (include http://)','17jbh') ?></th>
				<th><!-- button --></th>
            </tr>
		<?php } ?>
	</table>
    
    <button class="cactua_add_account button button-large"><i class="fas fa-plus"></i> <?php esc_html_e('Add Custom Account','17jbh'); ?></button>
<?php }
add_action( 'personal_options_update', 'videopro_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'videopro_save_extra_profile_fields' );
function videopro_save_extra_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;


}