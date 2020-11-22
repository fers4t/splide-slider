<?php
namespace Elementor;

class My_Widget_1 extends Widget_Base
{
    public function get_name()
    {
        return 'splider-slider';
    }
    
    public function get_title()
    {
        return 'Splider Slider';
    }
    
    public function get_icon()
    {
        return 'far fa-gem';
    }
    
    public function get_categories()
    {
        return [ 'basic' ];
    }
    
    protected function _register_controls()
    {
        $this->start_controls_section(
            'section_title',
            [
                'label' => __('Slider Creator', 'elementor'),
            ]
        );
        
        $this->add_control(
            'category',
            [
                'label' => __('Category IDs', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Enter categories comma seperated', 'elementor'),
            ]
        );

        $this->add_control(
            'count',
            [
                'label' => __('How many posts?', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Enter post count here', 'elementor'),
            ]
        );

        $this->add_control(
            'order',
            [
                'label' => __('Select order type.', 'elementor'),
                'type' => Controls_Manager::URL,
                'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'date' => __( 'Date', 'elementor' ),
					'name' => __( 'Alphabetical', 'elementor' ),
				],
				'default' => 'date',
            ]
        );

        $this->add_control(
            'class',
            [
                'label' => __('Define a class.', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Class must be unique', 'elementor'),
            ]
        );


        $this->end_controls_section();
    }
    
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $shortcode = "[g_slider class='$settings[class]' category='$settings[category]' order='$settings[order]' count='$settings[count]' ]";
        $shortcode = do_shortcode(shortcode_unautop($shortcode));
        ?>
        <div class="elementor-shortcode"><?php echo $shortcode; ?></div>
        <?php
        
    }

}
