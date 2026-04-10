<?php 
$site_name = !empty(get_bloginfo()) ? get_bloginfo() : "this site"; 
$site_url = get_site_url();
/* */
$display_cookie_banner = 1;

if ($display_cookie_banner) {
?>
<div id="cookie-compliance-banner" data-nosnippet="true" class="text-black dark:text-white bg-gray-200 dark:bg-neutral-700 w-full py-[1rem] hidden">
    <div class="mx-auto max-w-[90%] w-[960px]">
        <h2 class="text-2xl font-bold">
            Cookies on <?php echo $site_name;?>
        </h2>
        <div class="text-lg">
            <p class="mb-2">
                We use some essential cookies to make this service work.
            </p>
            <p class="mb-3">
                We’d also like to use analytics cookies so we can understand how you use the service and make improvements.
            </p>
        </div>
        <div class="text-lg">
            <button
                id="cookie-accept" type="submit"
                class="text-white bg-green-900 hover:bg-green-950 dark:bg-green-800 dark:hover:bg-green-700
                    font-medium px-5 py-2.5 me-2 mb-2 cursor-pointer
                    focus:text-black focus:bg-yellow-400 dark:focus:bg-yellow-400 focus:outline-none
                    w-full sm:w-auto
                "
            >
                Accept analytics cookies
            </button>
            <button
                id="cookie-decline" type="submit"
                class="text-white bg-green-900 hover:bg-green-950 dark:bg-green-800 dark:hover:bg-green-700
                    font-medium px-5 py-2.5 me-2 mb-2 cursor-pointer
                    focus:text-black focus:bg-yellow-400 dark:focus:bg-yellow-400 focus:outline-none
                    w-full sm:w-auto
                "
            >
                Reject analytics cookies
            </button>
            <a
                href="<?php echo $site_url;?>/cookies" id="cookie-page-link"
                class="cookie-link
                    text-sky-700 dark:text-sky-300 focus:bg-yellow-400 hover:text-sky-900 dark:hover:text-sky-200 focus:text-black focus:bg-yellow
                    underline focus:no-underline focus:outline-none
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