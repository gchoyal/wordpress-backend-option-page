<?php 



/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'contextual_help' => array(
      'content'       => array( 
        array(
          'id'        => 'general_help',
          'title'     => 'General1',
          'content'   => '<p>Help content goes here!</p>'
        )
      ),
      'sidebar'       => '<p>Sidebar content goes here!</p>',
    ),
    'sections'        => array(
    	array(
            'id'          => 'general',
            'title'       => 'General Settings'
          ),  
          array(
            'id'          => 'social',
            'title'       => 'Social Links'
          ),      
        ),

    'settings'        => array(
	
	   array(
            'id'      => 'logo_image',
            'label'   => 'Site Logo',
            'desc'    => 'Upload your logo. Logo size must be 378x36 px',
            'std'     => '',
			'section'  =>'general',
            'type'    => 'upload',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'footer_logo_image',
            'label'   => 'Site Footer Logo',
            'desc'    => 'Upload your logo. Logo size must be 279x26 px',
            'std'     => '',
            'section'  =>'general',
            'type'    => 'upload',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'site_phn',
            'label'   => 'Site Contact No.',
            'desc'    => 'Enter contact no.',
            'std'     => '',
            'section'  =>'general',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'site_email',
            'label'   => 'Site Email',
            'desc'    => 'Enter email address',
            'std'     => '',
            'section'  =>'general',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'copyright',
            'label'   => 'Copy Right Text',
            'desc'    => 'Add Copy Right Text',
            'std'     => '',
            'section'  =>'general',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'logo_partner',
            'label'   => 'partners Logo',
            'desc'    => 'Upload your partners logo. Logo size must be 231x31 px',
            'std'     => '',
            'section'  =>'general',
            'type'    => 'upload',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'social_fb',
            'label'   => 'Facebook Link',
            'desc'    => 'Add Link',
            'std'     => '',
            'section'  =>'social',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'social_tw',
            'label'   => 'Twitter Link',
            'desc'    => 'Add Link',
            'std'     => '',
            'section'  =>'social',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'social_gp',
            'label'   => 'Google Link',
            'desc'    => 'Add Link',
            'std'     => '',
            'section'  =>'social',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'social_yt',
            'label'   => 'Youtube Link',
            'desc'    => 'Add Link',
            'std'     => '',
            'section'  =>'social',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'social_is',
            'label'   => 'Instagram Link',
            'desc'    => 'Add Link',
            'std'     => '',
            'section'  =>'social',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'social_li',
            'label'   => 'Linkedin Link',
            'desc'    => 'Add Link',
            'std'     => '',
            'section'  =>'social',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),
        array(
            'id'      => 'social_rss',
            'label'   => 'Rss Link',
            'desc'    => 'Add Link',
            'std'     => '',
            'section'  =>'social',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
        ),

      )
  );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}
?>