<?php

function button($text, $id, $type, $class="", $name="", $value="", $data_module="") {
	return "
		<button
			id='$id' type='$type' name='$name' value='$value' data-module='$data_module'
			class='text-white bg-green-900 hover:bg-green-950
				font-medium px-5 py-2.5 me-2 mb-2
				focus:text-black focus:bg-yellow-400 focus:outline-none
				w-full sm:w-auto
				$class
			'
		>
			$text
		</button>
	";
}

function hyperlink($text, $href, $id = "", $class = "") {
	return "
		<a href='$href' id='$id'
			class='text-sky-700 focus:bg-yellow-400 hover:text-sky-900 focus:text-black focus:bg-yellow
			underline focus:no-underline focus:border-b-4 focus:border-black focus:border-solid focus:outline-none
			$class'
		>$text</a>
	";
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