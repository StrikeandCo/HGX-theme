<?php 

if(function_exists("register_field_group"))
{
	register_field_group(array (
		
		'id' => 'acf_hompage-slideshow-images',
		'title' => 'Hompage Slideshow Images',
		'fields' => array (
			array (
				'key' => 'field_590538248506e',
				'label' => 'Page Title',
				'name' => 'page_title',
				'type' => 'text',
				'instructions' => 'Add a title to place on the top of the page',
				'required' => 1,
				'default_value' => 'Welcome to HomeGrown Fitness',
				'placeholder' => 'Welcome to HomeGrown Fitness',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58fff210f3c96',
				'label' => 'Hero subtitle',
				'name' => 'page_subtitle',
				'type' => 'text',
				'instructions' => 'The small text of the hero section (optional)',
				'default_value' => '<b>551 Taylor Way Unit #5 </b> &nbsp;&nbsp; San Carlos, CA',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58f2835db4af6',
				'label' => 'Header Carousel',
				'name' => 'carousel',
				'type' => 'repeater',
				'instructions' => 'Choose either "Image" or "Video".
	<br/><br/>
	If you choose "Image", select an image from your library, or upload one directly to wordpress.<br/>
	If you choose "video" enter a video from either YouTube or Vimeo.<br/><br/>
	
	NOTE: Make sure the video you choose is silent. The video will autoplay.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_58f2cb5656c36',
						'label' => 'Slide type',
						'name' => 'slide_type',
						'type' => 'radio',
						'instructions' => 'Is this an image or video?',
						'required' => 1,
						'column_width' => '',
						'choices' => array (
							'image' => 'image',
							'video' => 'video',
						),
						'other_choice' => 0,
						'save_other_choice' => 0,
						'default_value' => '',
						'layout' => 'horizontal',
					),
					array (
						'key' => 'field_58f2838fb4af7',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'instructions' => 'Upload at least one image',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_58f2cb5656c36',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_58f2cba156c37',
						'label' => 'Video',
						'name' => 'video',
						'type' => 'text',
						'instructions' => 'Please enter the video the URL.<br><b>NOTE:</b> Only YouTube and Vimeo are supported here.',
						'required' => 1,
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_58f2cb5656c36',
									'operator' => '==',
									'value' => 'video',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'custom-temp.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => -1,
	));
	register_field_group(array (
		'id' => 'acf_homepage-primary-cta',
		'title' => 'Homepage Primary CTA',
		'fields' => array (
			array (
				'key' => 'field_58f284dc569f1',
				'label' => 'Primary CTA Copy (optional)',
				'name' => 'primary_cta_copy',
				'type' => 'text',
				'instructions' => 'Enter copy to go into your primary CTA.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 30,
			),
			array (
				'key' => 'field_58f2859d569f3',
				'label' => 'Primary CTA URL',
				'name' => 'primary_cta_url',
				'type' => 'text',
				'instructions' => 'Enter a URL for the primary CTA to go to.',
				'default_value' => '#',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58f28573569f2',
				'label' => 'Secondary CTA Copy (optional)',
				'name' => 'secondary_cta_copy',
				'type' => 'text',
				'instructions' => 'Enter copy to go into your secondary CTA.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 30,
			),
			array (
				'key' => 'field_58f285f1569f4',
				'label' => 'Secondary CTA URL',
				'name' => 'secondary_cta_url',
				'type' => 'text',
				'instructions' => 'Enter a URL for the secondary CTA to go to.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59053c0e1fd1e',
				'label' => 'Columns',
				'name' => 'columns',
				'type' => 'repeater',
				'instructions' => 'Add 3 - 6 columns of content, all of which will have a "Let\'s talk" link that will open a contact form.',
				'sub_fields' => array (
					array (
						'key' => 'field_59053c461fd1f',
						'label' => 'Column Title',
						'name' => 'column_title',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => 'What is CrossFit?',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59053c5b1fd20',
						'label' => 'Column Content',
						'name' => 'column_content',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at elementum arcu. Phasellus facilisis, libero in semper sodales.',
						'placeholder' => '',
						'maxlength' => 250,
						'rows' => 4,
						'formatting' => 'br',
					),
					array (
						'key' => 'field_59053c461fd12',
						'label' => 'Link URL',
						'name' => 'column_url',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '#form-overlay',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59053c461fas0',
						'label' => 'Link Copy',
						'name' => 'column_link',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => 'Get Started',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 3,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'custom-temp.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>