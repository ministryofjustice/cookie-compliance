<?php
$defaults = [
    'text' => 'Click Me',
    'id' => '',
    'type' => 'button',
    'class' => '',
    'name' => '',
    'value' => '',
    'data_module' => '',
];
$args = wp_parse_args($args, $defaults);
?>

<button 
    id="<?php echo esc_attr($args['id']); ?>" 
    type="<?php echo esc_attr($args['type']); ?>" 
    name="<?php echo esc_attr($args['name']); ?>" 
    value="<?php echo esc_attr($args['value']); ?>" 
    data-module="<?php echo esc_attr($args['data_module']); ?>"
    class="text-white bg-green-900 hover:bg-green-950
        font-medium px-5 py-2.5 me-2 mb-2
        focus:text-black focus:bg-yellow-400 focus:outline-none
        w-full sm:w-auto
        <?php echo esc_attr($args['class']); ?>"
>
    <?php echo esc_html($args['text']); ?>
</button>

