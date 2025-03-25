<?php
$defaults = [
    'text' => '',
    'id' => '',
    'class' => '',
];
$args = wp_parse_args($args, $defaults);
?>
<?php
    $text = $args['text'];
    $id = esc_attr($args['id']) == "" ? "" : "id='".esc_attr($args['id'])."'";
    $class = esc_attr($args['class']);
?>

<td <?php echo $id;?> class='px-6 first:ps-0 last:pe-0 py-4 border-solid border-t-0 border-x-0 border-b border-white <?php echo $class;?>'>
    <?php echo $text;?>
</td>
