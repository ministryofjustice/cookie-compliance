<?php
get_header();

flush();

function cookie_active($name, $start_of_name = false, $exclude = []) {
    if (!$start_of_name) {
        return (!empty($_COOKIE[$name]) ? "Active" : "Inactive");
    } else {
        foreach(array_keys($_COOKIE) as $cookie_name) {
            if(strpos($cookie_name,$name) === 0 && !in_array($cookie_name, $exclude)) {
                return "Active";
                break;
            }
        }
        return "Inactive";
    }
}

?>

<main id="primary" class="px-3 text-lg">

    <div id="cookie-settings-confirmation" class="mt-8 mb-8 hidden">
      
      <div class="bg-green-800 border-solid border-4 border-green-800" role="alert">
        <div>
          <h2 class="text-white text-lg pt-[5px] pb-[5px] pl-[20px] m-0 has-text-color">Success</h2>
        </div>
        <div class="bg-white p-[20px]">
            <h3 class="m-0">Your cookie settings were saved</h3>
        </div>
      </div>
    </div>

    <h1>Cookies</h1>
    <p class="w-full w-max-[666px]">
        Cookies are small files saved on your computer, tablet or phone when you visit a website.
    </p>

    <p class="w-full w-max-[666px]">
        We use cookies to make this site work and collect information aout how you use our service.  
    </p>

    <h2>Essential cookies</h2>

    <p class="w-full w-max-[666px]">
        Essential cookies keep your information secure whilst you use this service.  We do not need to ask permission to use them.
    </p>
    
    <table class="w-full text-left border-collapse">
        <thead class="">
            <tr class="bg-white">
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Cookie name
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Purpose
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    Expires
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Current status
                </th>
            </tr>
        </thead>
        <tbody>
           <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    wordpress_test_cookie
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This is used to test whether the browser accepts cookies.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    <?php
                        echo cookie_active("wordpress_test_cookie");
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    PHPSESSID
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This is used to link your device to the information sent to the server from your browser. It is typically used to avoid you having to retype information when moving from one page to another.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    <?php
                        echo cookie_active("PHPSESSID");
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    info_banner_dismissed
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This remembers if an information banner has been dismissed and prevents it from being displayed again.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    <?php
                        echo cookie_active("info_banner_dismissed");
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <p class="w-full w-max-[666px]">
        In addition to the above, we have futher essential cookies which apply only to users who log into our service.
    </p>

    <table class="w-full text-left border-collapse">
        <thead class="">
            <tr class="bg-white">
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Cookie name
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Purpose
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    Expires
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Current status
                </th>
            </tr>
        </thead>
        <tbody>
           <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    wordpress_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This authenticates you when you log in to the admin area.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    <?php
                        echo cookie_active("wordpress_",true,["wordpress_test_cookie"]);
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    wordpress_logged_in_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This shows the site that you’re logged in and who you are so you can access the functions you need.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    <?php
                        echo cookie_active("wordpress_logged_in",true);
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    wordpress_sec_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This remembers if an information banner has been dismissed and prevents it from being displayed again.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    <?php
                        echo cookie_active("wordpress_sec",true);
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    wp-settings-{time}-[UID]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    The number on the end [UID] is your individual user ID from the users database.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    1 year
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    <?php
                        echo cookie_active("wp-settings-",true);
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    wp_lang
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This remembers language settings.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    When you close your browser
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
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

    <h2>Analytical cookies</h2>

    <p class="w-full w-max-[666px]">
        With your permission, we use Google Analytics to collect data about how you use
        this service.  This information helps us to improve our service.
    </p>

    <p class="w-full w-max-[666px]">
        Google is not allowed to use or share our analytics data with anyone.
    </p>

    <p class="w-full w-max-[666px]">
        Google Analytics stores anonymized information about:
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
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Cookie name
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Purpose
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    Expires
                </th>
                <th scope="col" class="px-6 py-3 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    Current status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    _ga
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This is used to distinguish users and tell us if you have visited before.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    2 years
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    <?php
                        echo cookie_active("_ga");
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    _ga_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This is used to persist session state.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    2 years
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    <?php
                        echo cookie_active("_ga_",true);
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    _gid
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This help us count how many people visit by tracking if you have visited before.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    24 hours
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    <?php
                        echo cookie_active("_gid");
                    ?>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
                    _gat_[hash]
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    This help us to manage how we collect analytics when we have lots of visitors on the site at one time.
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900">
                    10 minutes
                </td>
                <td class="px-6 py-4 border-solid border-t-0 border-x-0 border-b border-gray-900 whitespace-nowrap">
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
                Do you want to accept analytical cookies?
            </legend>
            <div id="analytical-cookies-control" class="">
                <div class="inline-block w-full sm:w-auto pe-4">
                    <input id="accept-analytical-cookies" class="" type="radio" name="analytical-cookie-options" value="yes">
                    <label for="accept-analytical-cookies" class="">
                        Yes
                    </label>
                </div>
                <div class="inline-block w-full sm:w-[40%]">
                    <input id="reject-analytical-cookies" class="" type="radio" name="analytical-cookie-options" value="no">
                    <label for="reject-analytical-cookies" class="">
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
                font-medium px-5 py-2.5 me-2 mb-2
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
