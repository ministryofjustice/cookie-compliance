<?php
$defaults = [
    'question' => 'Choose one',
    'id' => '',
    'class' => '',
    'options' => [],
    'data_module' => '',
];
$args = wp_parse_args($args, $defaults);

$id = esc_attr($args['id']);
$class = esc_attr($args['class']);
$options = $args['options'];
if ($options == []) {
	$options = ["Yes","No"];
}

?>

<fieldset class='border-none px-0 mb-4'>
	<legend class='text-xl font-bold'>
		<?php echo $args['text']; ?>
	</legend>
	<div id='<?php echo $id; ?>' class='<?php echo $class; ?>'>
	<?php
	for ($i = 0; $i < count($options); $i++) {
		$name_for_id = preg_replace('/[^\da-z]/i', '', strtolower($options[$i]));
	?>
		<div class='inline-block w-full sm:w-[40%] cursor-pointer flex flex-wrap relative mb-[10px] last:mb-0'>
			<input id='<?php echo "$id-$name_for_id";?>' class='w-[44px] h-[44px] m-0 cursor-pointer opacity-0 [&:not(:checked)~*]:after:opacity-0' type='radio' name='<?php echo $id;?>-options' value='yes'>
			<label
				for='<?php echo "$id-$name_for_id";?>'
				class='px-[7px] py-[10px] cursor-pointer block touch-manipulation leading-[1.25] 
				
				before:content-[""] before:box-border before:absolute before:top-[2px] before:left-[2px] before:w-[40px] before:h-[40px] before:border-solid before:border-[2px] before:rounded-full before:bg-transparent 
				
				after:content-[""] after:absolute after:top-[12px] after:left-[12px] after:w-0 after:h-0 after:border-solid after:border-[10px] after:rounded-full after:bg-black
				'
			>
				<?php echo esc_attr($options[$i]); ?>
			</label>
		</div>
	<?php } ?>
	</div>
</fieldset>