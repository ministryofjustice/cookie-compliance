<?php
$defaults = [
    'text' => '',
    'id' => '',
    'href' => '',
    'target' => '',
    'class' => '',
    'data_module' => '',
];
$args = wp_parse_args($args, $defaults);
?>
<?php
    $text = $args['text'];
    $id = esc_attr($args['id']);
    $href = esc_url($args['href']);
    $target = esc_attr($args['target']);
    $class = esc_attr($args['class']);
    $data_module = esc_attr($args['data_module']);
?>
<a href='<?php echo $href;?>' id='<?php echo $id;?>' target='<?php echo $target;?>' data-module='<?php echo $data_module;?>'
    class='text-sky-700 focus:bg-yellow-400 hover:text-sky-900 focus:text-black focus:bg-yellow
    underline focus:no-underline focus:border-b-4 focus:border-black focus:border-solid focus:outline-none
    <?php echo $class;?>'
><?php echo $text;?></a>