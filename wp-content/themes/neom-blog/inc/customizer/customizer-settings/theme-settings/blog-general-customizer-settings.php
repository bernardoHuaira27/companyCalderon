<?php
/**
 * General Blog.
 *
 * @package     neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Blog_General_Option' ) ) :

	/**
	 * General Blog..
	 */
	class neom_Customize_Blog_General_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				'neom_general_arcive_single_blog_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Blog/Archive Page Settings', 'neom-blog' ),
						'section'  => 'neom_blog_general',
					),
				),

				'neom_archive_blog_design'                => array(
					'setting' => array(
						'default'           => 'design2',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 3,
						'label'    => esc_html__( 'Template Design', 'neom-blog' ),
						'section'  => 'neom_blog_general',
						'choices'  => array(
							'design1' => NEOM_PARENT_URI . '/assets/images/icons/blog-cover.png',
							'design2' => NEOM_PARENT_URI . '/assets/images/icons/blog-normal.png',
						),
					),
				),

				'neom_blog_content_ordering'              => array(
					'setting' => array(
						'default'           => array(
							'meta-one',
							'title',
							'meta-two',
							'content',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 5,
						'label'       => esc_html__( 'Elements Positioning', 'neom-blog' ),
						'description' => esc_html__( 'Drag & Drop Post Meta to re-arrange the Order. + You can also hide Blog Meta by click on Eye icon.', 'neom-blog' ),
						'section'     => 'neom_blog_general',
						'choices'     => array(
							'meta-one' => esc_attr__( 'Meta One', 'neom-blog' ),
							'title'    => esc_attr__( 'Title', 'neom-blog' ),
							'meta-two' => esc_attr__( 'Meta Two', 'neom-blog' ),
							'content'  => esc_attr__( 'Content', 'neom-blog' ),
						),
					),
				),

				'neom_archive_blog_heading'               => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 15,
						'label'    => esc_html__( 'Archive Blog/Post Sidebar', 'neom-blog' ),
						'section'  => 'neom_blog_general',
					),
				),
				'neom_archive_blog_pages_layout'          => array(
					'setting' => array(
						'default'           => 'neom_right_sidebar',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 20,
						'label'    => esc_html__( 'Layout', 'neom-blog' ),
						'section'  => 'neom_blog_general',
						'choices'  => array(
							'neom_no_sidebar'    => NEOM_PARENT_URI . '/assets/images/icons/fullwidth.png',
							'neom_left_sidebar'  => NEOM_PARENT_URI . '/assets/images/icons/left-sidebar.png',
							'neom_right_sidebar' => NEOM_PARENT_URI . '/assets/images/icons/right-sidebar.png',
						),
					),
				),

				'neom_single_blog_heading'                => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 30,
						'label'    => esc_html__( 'Single Blog/Post Sidebar', 'neom-blog' ),
						'section'  => 'neom_blog_general',
					),
				),

				'neom_single_blog_pages_layout'           => array(
					'setting' => array(
						'default'           => 'neom_right_sidebar',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 35,
						'label'    => esc_html__( 'Layout', 'neom-blog' ),
						'section'  => 'neom_blog_general',
						'choices'  => array(
							'neom_no_sidebar'    => NEOM_PARENT_URI . '/assets/images/icons/fullwidth.png',
							'neom_left_sidebar'  => NEOM_PARENT_URI . '/assets/images/icons/left-sidebar.png',
							'neom_right_sidebar' => NEOM_PARENT_URI . '/assets/images/icons/right-sidebar.png',
						),
					),
				),
			);
		}
	}

	new neom_Customize_Blog_General_Option();
endif;
