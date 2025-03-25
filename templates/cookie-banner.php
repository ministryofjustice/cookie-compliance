<?php 
$site_name = !empty(get_bloginfo()) ? get_bloginfo() : "this site"; 
$site_url = get_site_url();
/* */
$display_cookie_banner = 1;
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
            <button
                id="cookie-accept" type="submit"
                class="text-white bg-green-900 hover:bg-green-950
                    font-medium px-5 py-2.5 me-2 mb-2 cursor-pointer
                    focus:text-black focus:bg-yellow-400 focus:outline-none
                    w-full sm:w-auto
                "
            >
                Accept analytics cookies
            </button>
            <button
                id="cookie-decline" type="submit"
                class="text-white bg-green-900 hover:bg-green-950
                    font-medium px-5 py-2.5 me-2 mb-2 cursor-pointer
                    focus:text-black focus:bg-yellow-400 focus:outline-none
                    w-full sm:w-auto
                "
            >
                Reject analytics cookies
            </button>
            <a
                href="<?php echo $site_url;?>/cookies" id="cookie-page-link"
                class="
                    text-sky-700 focus:bg-yellow-400 hover:text-sky-900 focus:text-black focus:bg-yellow
                    underline focus:no-underline border-b-4 focus:border-black focus:outline-none
                    px-3 py-2.5
                    inline-block w-full sm:w-auto text-center
                "
            >
                View cookies
            </a>
        </div>
    </div>
</div>

<?php //*/
}