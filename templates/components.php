<?php

function component($name,$details = []) {
	$component = plugin_dir_path(__DIR__) . "template-parts/components/$name.php";

	if (is_string($details)) $details = ['text' => $details];

	if (file_exists($component)) {
		ob_start();
		load_template($component, false, $details);
		$code = ob_get_contents();
		ob_end_clean();
	} else {
		$code = '<!-- Template not found: ' . esc_html($radios_component) . ' -->';
	}
	return $code;
}

function tableHeading($text, $class="", $scope="col") {

	return "
		<th scope='$scope' class='px-6 first:ps-0 last:pe-0 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 $class'>
			$text
		</th>
	";
}

function tableCell($text, $class="") {
	return "
		<td class='px-6 first:ps-0 last:pe-0 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 $class'>
			$text
		</td>
	";
}
