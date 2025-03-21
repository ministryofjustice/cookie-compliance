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

function yesNoRadio($question, $id, $yes = "Yes", $no = "No") {
	return "
		<fieldset class='border-none px-0 mb-4'>
			<legend class='text-xl font-bold'>
				$question
			</legend>
			<div id='$id' class=''>
				<div class='inline-block w-full sm:w-[40%] cursor-pointer flex flex-wrap relative mb-[10px] last:mb-0'>
					<input id='$id-yes' class='w-[44px] h-[44px] m-0 cursor-pointer opacity-0 [&:not(:checked)~*]:after:opacity-0' type='radio' name='$id-options' value='yes'>
					<label
						for='$id-yes'
						class='px-[7px] py-[10px] cursor-pointer block touch-manipulation leading-[1.25]
						before:content-[\"\"] before:box-border before:absolute before:top-[2px] before:left-[2px] before:w-[40px] before:h-[40px] before:border-solid before:border-[2px] before:rounded-full before:bg-transparent
						after:content-[\"\"] after:absolute after:top-[12px] after:left-[12px] after:w-0 after:h-0 after:border-solid after:border-[10px] after:rounded-full after:bg-black peer-has-checked:after:opacity-1
						'
					>
						$yes
					</label>
				</div>
				<div class='inline-block w-full sm:w-[40%] cursor-pointer flex flex-wrap relative mb-10 last:mb-0'>
					<input id='$id-no'  class='w-[44px] h-[44px] m-0 cursor-pointer opacity-0 [&:not(:checked)~*]:after:opacity-0' type='radio' name='$id-options' value='no'>
					<label
						for='$id-no'
						class='px-[7px] py-[10px] cursor-pointer block touch-manipulation leading-[1.25]
						before:content-[\"\"] before:box-border before:absolute before:top-[2px] before:left-[2px] before:w-[40px] before:h-[40px] before:border-solid before:border-[2px] before:rounded-full before:bg-transparent
						after:content-[\"\"] after:absolute after:top-[12px] after:left-[12px] after:w-0 after:h-0 after:border-solid after:border-[10px] after:rounded-full after:bg-black peer-has-checked:after:opacity-1
						'
					>
						$no
					</label>
				</div>
			</div>
		</fieldset>
	";
}
