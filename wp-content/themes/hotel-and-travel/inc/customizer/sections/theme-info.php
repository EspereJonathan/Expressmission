<?php
/**
 * Hotel and Travel Pro Theme Info
 *
 * @package Best_Shop
 */


if( class_exists( 'WP_Customize_Section' ) ) :
/**
 * Adding Go to Pro Section in Customizer
 * https://github.com/justintadlock/trt-customizer-pro
 */
class hotel_and_travel_Customize_Section_Pro extends WP_Customize_Section {

    /**
     * The type of customize section being rendered.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $type = 'pro-section';

    /**
     * Custom button text to output.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $pro_text = '';

    /**
     * Custom pro button URL.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $pro_url = '';

    /**
     * Add custom parameters to pass to the JS via JSON.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function json() {
        $json = parent::json();

        $json['pro_text'] = $this->pro_text;
        $json['pro_url']  = esc_url( $this->pro_url );

        return $json;
    }

    /**
     * Outputs the Underscore.js template.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    protected function render_template() { ?>
        <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
            <h3 class="accordion-section-title">
                {{ data.title }}
                <# if ( data.pro_text && data.pro_url ) { #>
                    <a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
                <# } #>
            </h3>
        </li>
    <?php }
}
endif;

if ( ! function_exists( 'hotel_and_travel_sections_pro' ) ) :

function hotel_and_travel_sections_pro( $manager ) {
    // Register custom section types.
    $manager->register_section_type( 'hotel_and_travel_Customize_Section_Pro' );

    // Register sections.
    $manager->add_section(
        new hotel_and_travel_Customize_Section_Pro(
            $manager,
            'hotel_and_travel_view_pro',
            array(
                'title'    => esc_html__( 'Upgrade to Pro', 'hotel-and-travel' ),
                'priority' => 5, 
                'pro_text' => esc_html__( 'PRO Features...', 'hotel-and-travel' ),
                'pro_url'  => 'https://www.gradientthemes.com/product/wordpress-shopping-cart-theme/'
            )
        )
    );
}
endif;

add_action( 'customize_register', 'hotel_and_travel_sections_pro' );