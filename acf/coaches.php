<?php 

if(function_exists("register_field_group")) 
{
	register_field_group(array (
		'id' => 'acf_workout-of-the-day-fields',
		'title' => 'Workout of the day fields',
		'fields' => array (
			array (
				'key' => 'field_59127650af328',
				'label' => 'CTA 1 Copy',
				'name' => 'cta_1_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the first CTA',
				'default_value' => 'Get started for free',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59127680af329',
				'label' => 'CTA 1 URL',
				'name' => 'cta_1_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the primary CTA',
				'default_value' => '/get-started/',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59127696af32a',
				'label' => 'CTA 2 Copy',
				'name' => 'cta_2_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the second CTA',
				'default_value' => 'Get in touch',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_591276aeaf32b',
				'label' => 'CTA 2 URL',
				'name' => 'cta_2_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the second CTA',
				'default_value' => '#form-overlay',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'workout-of-the-day.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => -1,
	));
	register_field_group(array (
		'id' => 'acf_quote-fields',
		'title' => 'Quote Fields',
		'fields' => array (
			array (
				'key' => 'field_591681ba6a563',
				'label' => 'Quote',
				'name' => 'quote',
				'type' => 'text',
				'instructions' => 'Add text for the quote, without quotation marks',
				'required' => 1,
				'default_value' => 'I do not regret the things I\'ve done,	but those I did not do.',
				'placeholder' => 'Enter text here',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 140,
			),
			array (
				'key' => 'field_591681f96a564',
				'label' => 'Tagline',
				'name' => 'tagline',
				'type' => 'text',
				'instructions' => 'Add some small text to set under the quote tagline.',
				'required' => 1,
				'default_value' => 'Come on down. Your first class is on us',
				'placeholder' => 'Enter text here',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 200,
			),
			array (
				'key' => 'field_591682626a565',
				'label' => 'CTA Copy',
				'name' => 'cta_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the CTA',
				'default_value' => 'Let\'s chat',
				'placeholder' => 'Let\'s chat',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 70,
			),
			array (
				'key' => 'field_591682986a566',
				'label' => 'CTA URL',
				'name' => 'cta_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the CTA. If you\'d like to open the form overlay window, simply make the url #form-overlay 
	Otherwise use any link you\'d like.',
				'default_value' => '#form-overlay',
				'placeholder' => 'ex. /blog/ or https://www.instagram.com/hgxfit/',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'quotes',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_about-us-fields',
		'title' => 'About Us fields',
		'fields' => array (
			array (
				'key' => 'field_58fff1c3f3c95',
				'label' => 'Hero Title',
				'name' => 'hero_title',
				'type' => 'text',
				'instructions' => 'The "Large" copy in the hero.',
				'required' => 1,
				'default_value' => 'This is how we roll',
				'placeholder' => 'This is how we roll',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58fff210f3c96',
				'label' => 'Hero subtitle',
				'name' => 'hero_subtitle',
				'type' => 'text',
				'instructions' => 'The small text of the hero section (optional)',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58fff238f3c97',
				'label' => 'Button 1 URL',
				'name' => 'button_1_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the first button',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58fff26cf3c98',
				'label' => 'Button 1 Copy',
				'name' => 'button_1_copy',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 75,
			),
			array (
				'key' => 'field_58fff2a2f3c9a',
				'label' => 'Button 2 URL',
				'name' => 'button_2_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the second button',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58fff289f3c99',
				'label' => 'Button 2 Copy',
				'name' => 'button_2_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the second button',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 75,
			),
			array (
				'key' => 'field_59053e0481475',
				'label' => 'Columns',
				'name' => 'columns',
				'type' => 'repeater',
				'instructions' => 'Add content for the two columns. There should be two. If left blank, they will not appear.',
				'sub_fields' => array (
					array (
						'key' => 'field_59053e2581476',
						'label' => 'Column title',
						'name' => 'column_title',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59053e5c81477',
						'label' => 'Column Content',
						'name' => 'column_content',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59053e6781478',
						'label' => 'Learn more URL',
						'name' => 'learn_more_url',
						'type' => 'text',
						'instructions' => 'Add a URL for the "Learn More" link',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 2,
				'row_limit' => 2,
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_58fff2e6f3c9b',
				'label' => 'Content Carousel',
				'name' => 'content_carousel',
				'type' => 'repeater',
				'instructions' => 'Add content and images for the carousel',
				'sub_fields' => array (
					array (
						'key' => 'field_58fff327f3c9c',
						'label' => 'Background Image',
						'name' => 'background_image',
						'type' => 'image',
						'instructions' => 'Add an image for the slide background',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'full',
						'library' => 'all',
					),
					array (
						'key' => 'field_58fff359f3c9d',
						'label' => 'Slide Title',
						'name' => 'slide_title',
						'type' => 'text',
						'instructions' => 'This will be wrapped in a small box, so be mindful of formatting.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_590544167b9d4',
						'label' => 'Slide content',
						'name' => 'slide_content',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at elementum arcu. Phasellus facilisis, libero in semper sodales.',
						'placeholder' => '',
						'maxlength' => 200,
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => 2,
				'row_limit' => 7,
				'layout' => 'row',
				'button_label' => 'Add a slide',
			),
			array (
				'key' => 'field_58fff3ccf3c9e',
				'label' => 'Wodify iFrame',
				'name' => 'wodify_iframe',
				'type' => 'textarea',
				'instructions' => 'Drop your WODify iFrame here.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'html',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'about-us.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => -10,
	));
	register_field_group(array (
		'id' => 'acf_coach-fields',
		'title' => 'Coach fields',
		'fields' => array (
			array (
				'key' => 'field_59026d8039ec0',
				'label' => 'Coach name',
				'name' => 'coach_name',
				'type' => 'text',
				'instructions' => 'Enter the name of the coach',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'John McGuirk',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59026fffbc0ae',
				'label' => 'Coach image',
				'name' => 'coach_image',
				'type' => 'image',
				'instructions' => 'Upload an image for the coach. Don\'t forget to make sure the image crops properly! You can do this with the crop thumbnails plugin.',
				'required' => 1,
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_59026dd239ec1',
				'label' => 'Coach title',
				'name' => 'coach_title',
				'type' => 'text',
				'instructions' => 'Add a job title for the coach',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Head Soccer Coach',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59026fb039ec2',
				'label' => 'Certifications',
				'name' => 'certifications',
				'type' => 'text',
				'instructions' => 'List certifications, if any. Leave blank if none',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59026fce39ec3',
				'label' => 'Coach bio',
				'name' => 'coach_bio',
				'type' => 'textarea',
				'instructions' => 'Add a short bio for the coach',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => 800,
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'coaches',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_get-started-page',
		'title' => 'Get Started Page',
		'fields' => array (
			array (
				'key' => 'field_59053998a4b1f',
				'label' => 'Page title',
				'name' => 'page_title',
				'type' => 'text',
				'instructions' => 'Add a title for the page',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_590539b5a4b20',
				'label' => 'CTA 1 Copy',
				'name' => 'cta_1_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the first CTA',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_590539cca4b21',
				'label' => 'CTA 1 URL',
				'name' => 'cta_1_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the first CTA.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_590539fea4b22',
				'label' => 'CTA 2 Copy',
				'name' => 'cta_2_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the second CTA',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59053a09a4b23',
				'label' => 'CTA 2 URL',
				'name' => 'cta_2_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the second CTA',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59053a1ea4b24',
				'label' => 'Section 1 Title',
				'name' => 'section_1_title',
				'type' => 'text',
				'instructions' => 'Add a title for the first section',
				'default_value' => 'New to CrossFit?',
				'placeholder' => 'New to CrossFit?',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
						'key' => 'field_58fff327f3c92',
						'label' => 'Section 1 Image',
						'name' => 'section_1_image',
						'type' => 'image',
						'instructions' => 'Add an image for the section',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'full',
						'library' => 'all',
				),
			array (
				'key' => 'field_59053a3ea4b25',
				'label' => 'Section 1 Content',
				'name' => 'section_1_content',
				'type' => 'textarea',
				'instructions' => 'Add content for the first section',
				'default_value' => 'Fundamentals clasese introduce you to the major movements used in CrossFit, screen for pre-existing injuries, mobility or flexibility restrictions, assess your current fitness level and ensure proper technique and safety. Certified coaches will walk you through the basics of each movement, offering knowledge and experienced guidance every step of the way. You will be introduced to the basic barbell and gymnastic movements used in CrossFit. Whether seasoned athlete or fitness newbie, the HGX CrossFit Fundamentals Program is a foundational piece to the overall programming and is required before entering into Group Classes.',
				'placeholder' => 'Fundamentals clasese introduce you to the major movements used in CrossFit, screen for pre-existing injuries, mobility or flexibility restrictions, assess your current fitness level and ensure proper technique and safety. Certified coaches will walk you through the basics of each movement, offering knowledge and experienced guidance every step of the way. You will be introduced to the basic barbell and gymnastic movements used in CrossFit. Whether seasoned athlete or fitness newbie, the HGX CrossFit Fundamentals Program is a foundational piece to the overall programming and is required before entering into Group Classes.',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_59053a7aa4b26',
				'label' => 'Section 1 CTA Copy',
				'name' => 'section_1_cta_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the first CTA',
				'default_value' => 'Let\'s talk',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59053ab2a4b27',
				'label' => 'Section 1 CTA URL',
				'name' => 'section_1_cta_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the first section\'s CTA',
				'default_value' => '#form-overlay',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59053b09a4b28',
				'label' => 'Section 1 learn more URL',
				'name' => 'section_1_learn_more_url',
				'type' => 'text',
				'instructions' => 'Add a "Learn More" text link next to the CTA. Leave blank if you do not want one.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59053b3ad88c8',
				'label' => 'Section 2 Title',
				'name' => 'section_2_title',
				'type' => 'text',
				'instructions' => 'Add a title for the second section',
				'default_value' => 'New to CrossFit?',
				'placeholder' => 'New to CrossFit?',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
						'key' => 'field_58fff327f3c91',
						'label' => 'Section 2 Image',
						'name' => 'section_2_image',
						'type' => 'image',
						'instructions' => 'Add an image for the section',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'full',
						'library' => 'all',
				),
			array (
				'key' => 'field_59053b5c7030a',
				'label' => 'Section 2 Content',
				'name' => 'section_2_content',
				'type' => 'textarea',
				'instructions' => 'Add content for the second section',
				'default_value' => 'Experienced movers and/or CrossFitters are welcome to test into these classes directly.	However, previous CrossFit experience does not guarantee eligibility to regular CrossFit classes. Since every CrossFit Affiliate is independently owned, we may operate a little differently including our registration software, class structure and most important, our programming. You first need to be evaluated by a trainer, who will determine your preparedness or need for participation in a Fundamentals series to correct deficiencies. We invite you to try us for free –in a free class of	your choice.	Please check out our schedule and let us know which class you would like to come by sending us an email',
				'placeholder' => 'Experienced movers and/or CrossFitters are welcome to test into these classes directly.	However, previous CrossFit experience does not guarantee eligibility to regular CrossFit classes. Since every CrossFit Affiliate is independently owned, we may operate a little differently including our registration software, class structure and most important, our programming. You first need to be evaluated by a trainer, who will determine your preparedness or need for participation in a Fundamentals series to correct deficiencies. We invite you to try us for free –in a free class of	your choice.	Please check out our schedule and let us know which class you would like to come by sending us an email',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_59053bc252587',
				'label' => 'Section 2 CTA Copy',
				'name' => 'section_2_cta_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the first CTA',
				'default_value' => 'Let\'s talk',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59053bd415331',
				'label' => 'Section 2 CTA URL',
				'name' => 'section_2_cta_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the first section\'s CTA',
				'default_value' => '#form-overlay',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59053bed4ca18',
				'label' => 'Section 2 learn more URL',
				'name' => 'section_1_learn_more_url',
				'type' => 'text',
				'instructions' => 'Add a "Learn More" text link next to the CTA. Leave blank if you do not want one.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
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
						'default_value' => '',
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
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => 250,
						'rows' => 4,
						'formatting' => 'br',
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
					'value' => 'get-started.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_plan-fields',
		'title' => 'Plan fields',
		'fields' => array (
			array (
				'key' => 'field_590269a7a41d6',
				'label' => 'Plan title',
				'name' => 'plan_title',
				'type' => 'text',
				'instructions' => 'Add a title for the plan',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_590269b9a41d7',
				'label' => 'Plan details',
				'name' => 'plan_details',
				'type' => 'textarea',
				'instructions' => 'Enter a description of the plan',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_590269e5a41d8',
				'label' => 'Plan pricing/tiers',
				'name' => 'plan_pricing',
				'type' => 'repeater',
				'instructions' => 'Add pricing details for the plan. You can add up to 3.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_59026a24a41d9',
						'label' => 'Tier title',
						'name' => 'tier_title',
						'type' => 'text',
						'instructions' => 'Add a title for the tier/contract',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59026a54a41da',
						'label' => 'price',
						'name' => 'price',
						'type' => 'text',
						'instructions' => 'Enter the price',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59026a85a41db',
						'label' => 'Add pricing details',
						'name' => 'add_pricing_details',
						'type' => 'textarea',
						'instructions' => 'Add pricing details here. HTML/CSS is allowed.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'html',
					),
				),
				'row_min' => 1,
				'row_limit' => 3,
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'plans',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_plans-and-pricing-page',
		'title' => 'Plans and pricing page',
		'fields' => array (
			array (
				'key' => 'field_590538248506e',
				'label' => 'Page Title',
				'name' => 'page_title',
				'type' => 'text',
				'instructions' => 'Add a title to place on the top of the page',
				'required' => 1,
				'default_value' => 'Plans & Pricing',
				'placeholder' => 'Plans & Pricing',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5905384a8506f',
				'label' => 'CTA 1 Label',
				'name' => 'cta_1_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the first CTA',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5905386685070',
				'label' => 'CTA 1 URL',
				'name' => 'cta_1_url',
				'type' => 'text',
				'instructions' => 'Add a URL for the first CTA',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5905387685071',
				'label' => 'CTA 2 Label',
				'name' => 'cta_2_copy',
				'type' => 'text',
				'instructions' => 'Add copy for the second cta',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5905388f85072',
				'label' => 'CTA 2 URL',
				'name' => 'cta_2_url',
				'type' => 'text',
				'instructions' => 'Add copy fir the second CTA',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58fff9fec0d5b',
				'label' => 'Section w/ background: IMAGE',
				'name' => 'section_background_image',
				'type' => 'image',
				'instructions' => 'Add a background image',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_58fffa26c0d5c',
				'label' => 'Section with background: Title',
				'name' => 'section_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58fffa3ec0d5d',
				'label' => 'Section with background: Copy',
				'name' => 'section_copy',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => 500,
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'plans.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
} //endif;
?>