<?php
get_header();

flush();

function cookie_active($name, $start_of_name = false, $exclude = []) {
    $active = "<div class='cookie-active text-slate-800 bg-blue-200 inline-block px-2'>Active</div><div class='cookie-inactive text-zinc-800 bg-gray-200 inline-block px-2 hidden'>Inactive</div>";
    $inactive = "<div class='cookie-active text-slate-800 bg-blue-200 inline-block px-2 hidden'>Active</div><div class='cookie-inactive text-zinc-800 bg-gray-200 inline-block px-2'>Inactive</div>";
    if (!$start_of_name) {
        return (!empty($_COOKIE[$name]) ? $active : $inactive);
    } else {
        foreach(array_keys($_COOKIE) as $cookie_name) {
            if(strpos($cookie_name,$name) === 0) {
                $in_exclude_list = false;
                foreach($exclude as $excluded_name) {
                    if (strpos($cookie_name,$excluded_name) === 0) {
                        $in_exclude_list = true; //found in the exclude list
                        break;
                    }
                }
                if ($in_exclude_list) continue;
                return $active;
                break;
            }
        }
        return $inactive;
    }
}

$return_link = "";
if (isset($_GET) && isset($_GET["page"])) {
    $return_URL = $_GET["page"];
    $return_link = "<a href='$return_URL'>Go back to the page you were looking at</a>.";
}

?>

<main id="primary" class="px-3 text-lg">

    <div id="cookie-settings-confirmation" class="mt-8 mb-8 hidden">
      
      <div class="bg-green-800 border-solid border-4 border-green-800" role="alert">
        <div>
          <h2 class="text-white text-lg pt-[5px] pb-[5px] pl-[20px] m-0 has-text-color">Success</h2>
        </div>
        <div class="bg-white p-[20px]">
            <p class="m-0 font-bold">You&rsquo;ve set your cookie preferences. <?php echo $return_link;?></p>
        </div>
      </div>
    </div>

    <h1>Cookies</h1>
    <p class="w-full w-max-[666px]">
        Cookies are small files saved on your computer, tablet or phone when you visit a website.
    </p>

    <p class="w-full w-max-[666px]">
        We use cookies to make this site work and collect information about how you use our service.
    </p>

    <h2>Essential cookies</h2>

    <p class="w-full w-max-[666px]">
        Essential cookies keep your information secure whilst you use this service.  We do not need to ask permission to use them.
    </p>
    
    <table class="w-full text-left border-collapse">
        <thead class="">
            <tr class="bg-white">
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Cookie name
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Purpose
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    Expires
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Current status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr data-cookiename="cookie_consent">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    cookie_consent
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This remembers your cookie consent decision
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    1 year
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("cookie_consent");
                    ?>
                </td>
            </tr>
            <tr data-cookiename="wordpress_test_cookie">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    wordpress_test_cookie
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This is used to test if your browser accepts cookies
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("wordpress_test_cookie");
                    ?>
                </td>
            </tr>
            <tr data-cookiename="PHPSESSID">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    PHPSESSID
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This is used to link your device to the information sent to the server from your browser. It is typically used to avoid you having to retype information when moving from one page to another
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("PHPSESSID");
                    ?>
                </td>
            </tr>
            <tr data-cookiename="info_banner_dismissed">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    info_banner_dismissed
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This remembers if you've dismissed an information banner and prevents it from being displayed again
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("info_banner_dismissed");
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <h3>Logged-in users</h3>

    <p class="w-full w-max-[666px]">
        We use additional essential cookies that only apply to users who sign in to access our service.
    </p>

    <table class="w-full text-left border-collapse">
        <thead class="">
            <tr class="bg-white">
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Cookie name
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Purpose
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    Expires
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Current status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr data-cookiename="wordpress_logged_in">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    wordpress_logged_in_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This shows the site that you’re signed in and who you are so you can access the functions you need
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    When you close your browser or when you sign out
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("wordpress_logged_in",true);
                    ?>
                </td>
            </tr>
            <tr data-cookiename="wordpress_sec">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    wordpress_sec_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    If you are logged in as a site admin, this stores your authentication details
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    When you close your browser or when you sign out
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("wordpress_sec",true);
                    ?>
                </td>
            </tr>
            <tr data-cookiename="wp-settings-">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    wp-settings-{time}-[UID]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    The number on the end [UID] is your individual user ID from the database of users
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    1 year
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("wp-settings-",true);
                    ?>
                </td>
            </tr>
            <tr data-cookiename="wp_lang">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    wp_lang
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This remembers language settings.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("wp_lang",true);
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <h2>Third-party cookies</h2>

    <h3>Video streaming</h3>
    <p class="w-full w-max-[666px]">
        We have no control over cookies set by third parties. You can turn them off, but not through us.
    </p>
    <h3>Social media</h3>
    <p class="w-full w-max-[666px]">
        If you share a link to a page, the service you share it on (for example, Facebook) may set a cookie.
    </p>

    <h2>Analytics cookies</h2>

    <p class="w-full w-max-[666px]">
        With your permission, we use Google Analytics to collect data about how you use
        this service.  This information helps us to improve our service.
    </p>

    <p class="w-full w-max-[666px]">
        Google is not allowed to use or share our analytics data with anyone.
    </p>

    <p class="w-full w-max-[666px]">
        Google Analytics stores anonymised information about:
    </p>
    
    <ul class="w-full w-max-[666px]">
        <li>the pages you visit</li>
        <li>how long you spend on each page</li>
        <li>how you arrived at the site</li>
        <li>what you click on while you visit the site</li>
        <li>the device and browser you use</li>
    </ul>
    
    <table class="w-full text-left border-collapse">
        <thead class="">
            <tr class="bg-white">
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Cookie name
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Purpose
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    Expires
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    Current status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr data-cookiename="_ga">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    _ga
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This is used to distinguish users and tell us if you have visited before
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    2 years
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("_ga");
                    ?>
                </td>
            </tr>
            <tr data-cookiename="_ga_">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    _ga_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This is used to persist session state
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    2 years
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("_ga_",true);
                    ?>
                </td>
            </tr>
            <tr data-cookiename="_gid">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    _gid
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This help us count how many people visit by tracking if you have visited before
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    24 hours
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("_gid");
                    ?>
                </td>
            </tr>
            <tr data-cookiename="_gat_">
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    _gat_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    This help us to manage how we collect analytics when we have lots of visitors on the site at one time
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0">
                    10 minutes
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 first:ps-0 last:pe-0 whitespace-nowrap">
                    <?php
                        echo cookie_active("_gat_",true);
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <h2>Change your cookie settings</h2>


    <div class="">
        <fieldset class="border-none px-0 mb-4">
            <legend class="text-xl font-bold">
                Do you want to accept analytics cookies?
            </legend>
            <div id="analytical-cookies-control" class="">
                <div class='inline-block w-full sm:w-[40%] flex flex-wrap relative mb-[10px] last:mb-0'>
                    <input
                        id='accept-analytical-cookies'
                        class='w-[44px] h-[44px] m-0 cursor-pointer opacity-0 [&:not(:checked)~*]:after:opacity-0'
                        type='radio'
                        name='analytical-cookie-options'
                        value='yes'
                        <?php if (array_key_exists("cookie_consent",$_COOKIE) && $_COOKIE["cookie_consent"] == "consent") echo "checked"; ?>
                    >
                    <label
                        for='accept-analytical-cookies'
                        class='px-[7px] py-[10px] cursor-pointer block touch-manipulation leading-[1.25] 
                        before:content-[""] before:box-border before:absolute before:top-[2px] before:left-[2px] before:w-[40px] before:h-[40px] before:border-solid before:border-[2px] before:rounded-full before:bg-transparent 
                        after:content-[""] after:absolute after:top-[12px] after:left-[12px] after:w-0 after:h-0 after:border-solid after:border-[10px] after:rounded-full after:bg-black
                        '>
                        Yes
                    </label>
                </div>
                <div class='inline-block w-full sm:w-[40%] flex flex-wrap relative mb-[10px] last:mb-0'>
                    <input
                        id='reject-analytical-cookies'
                        class='w-[44px] h-[44px] m-0 cursor-pointer opacity-0 [&:not(:checked)~*]:after:opacity-0'
                        type='radio'
                        name='analytical-cookie-options'
                        value='yes'
                        <?php if (!array_key_exists("cookie_consent",$_COOKIE) || $_COOKIE["cookie_consent"] != "consent") echo "checked"; ?>
                    >
                    <label
                        for='reject-analytical-cookies'
                        class='px-[7px] py-[10px] cursor-pointer block touch-manipulation leading-[1.25] 
                        before:content-[""] before:box-border before:absolute before:top-[2px] before:left-[2px] before:w-[40px] before:h-[40px] before:border-solid before:border-[2px] before:rounded-full before:bg-transparent 
                        after:content-[""] after:absolute after:top-[12px] after:left-[12px] after:w-0 after:h-0 after:border-solid after:border-[10px] after:rounded-full after:bg-black
                        '>
                        No
                    </label>
                </div>
            </div>
        </fieldset>
    </div>
    <input class="hidden" type="text" name="previous" step="any" id="previous" value="">
    <button
        id="save-cookies-button" name="changes" type="submit" value="saved" data-module=""
        class="text-white bg-green-900 hover:bg-green-950
                font-medium px-5 py-2.5 me-2 mb-2 cursor-pointer
                focus:text-black focus:bg-yellow-400 focus:outline-none
                w-full sm:w-auto
            "
    >
        Save cookie settings
    </button>
</main>
<?php
flush();
get_footer();
