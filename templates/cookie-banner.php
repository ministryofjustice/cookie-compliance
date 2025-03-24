<?php 
$site_name = !empty(get_bloginfo()) ? get_bloginfo() : "this site"; 
$site_url = get_site_url();

$button_component = plugin_dir_path(__DIR__) . 'template-parts/components/button.php';

/* */
$display_cookie_banner = 1;
require_once("components.php");

if ($display_cookie_banner) {
?>
<div id="cookie-compliance-banner" data-nosnippet="true" class="bg-gray-200 w-full py-[1rem]">
    <div class="mx-auto max-w-[90%] w-[960px]">
        <h2 class="text-2xl">
            Cookies on <?php echo $site_name;?>
        </h2>
        <div class="text-lg">
            <p class="">
                We use some essential cookies to make this service work.
            </p>
            <p class="">
                We’d also like to use analytics cookies so we can understand how you use the service and make improvements.
            </p>
        </div>
        <div class="text-lg">
            <?php echo button("Accept analytics cookies","cookie-accept","submit"); ?>
            <?php echo button("Reject analytics cookies","cookie-decline","submit"); ?>
            <?php echo hyperlink("View cookies",$site_url."/cookies","cookie-page-link","px-3 py-2.5 inline-block w-full sm:w-auto text-center"); ?>

 		<?php

		// Add button component	
		if (file_exists($button_component)) {
		    load_template($button_component, false, [
			'text'  => 'Accept Cookies',
			'id'    => 'cookie-accept',
			'type'  => 'button',
			'class' => 'extra-styles',
		    ]);
		} else {
		    echo '<!-- Template not found: ' . esc_html($button_component) . ' -->';
		}
		?>

        </div>
    </div>
</div>

<?php //*/
}
