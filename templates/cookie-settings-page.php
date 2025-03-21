<?php
get_header();

flush();

require_once("components.php");

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
            <tr class="">
                <?php echo tableHeading("Cookie name"); ?>
                <?php echo tableHeading("Purpose"); ?>
                <?php echo tableHeading("Expires"); ?>
                <?php echo tableHeading("Current status"); ?>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
            </tr>
            <tr class="">
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
            </tr>
        </tbody>
    </table>

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
            <tr class="">
                <?php echo tableHeading("Cookie name"); ?>
                <?php echo tableHeading("Purpose"); ?>
                <?php echo tableHeading("Expires"); ?>
                <?php echo tableHeading("Current status"); ?>
            </tr>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
            </tr>
            <tr class="">
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
                <?php echo tableCell("xyz"); ?>
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
    <?php echo button("Save cookie settings", "save-cookies-button", "submit", $class="", $name="changes", $value="saved");?>
</main>
<?php
flush();
get_footer();

