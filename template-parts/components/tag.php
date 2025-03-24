<?php
$defaults = [
    'text' => '',
    'id' => '',
    'class' => '',
];
$args = wp_parse_args($args, $defaults);
?>

<div 
    id="<?php echo esc_attr($args['id']); ?>" 
    class="text-black bg-blue-200
        <?php echo esc_attr($args['class']); ?>"
>
    <?php echo esc_html($args['text']); ?>
</div>

