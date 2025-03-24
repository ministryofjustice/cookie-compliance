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
        <?php

            // Accept button	
            if (file_exists($button_component)) {
                load_template($button_component, false, [
                'text'  => 'Accept analytics cookies',
                'id'    => 'cookie-accept',
                'type'  => 'submit',
                'class' => '',
                ]);
            } else {
                echo '<!-- Template not found: ' . esc_html($button_component) . ' -->';
            }
            ?> 		<?php

            // Reject button	
            if (file_exists($button_component)) {
                load_template($button_component, false, [
                'text'  => 'Reject analytics cookies',
                'id'    => 'cookie-decline',
                'type'  => 'submit',
                'class' => '',
                ]);
            } else {
                echo '<!-- Template not found: ' . esc_html($button_component) . ' -->';
            }
            ?>
            <?php echo hyperlink("View cookies",$site_url."/cookies","cookie-page-link","px-3 py-2.5 inline-block w-full sm:w-auto text-center"); ?>

 		</div>
    </div>
</div>

<?php //*/
}
