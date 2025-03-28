window.dataLayer = window.dataLayer || [];
function gtag() { dataLayer.push(arguments); }
gtag('consent', 'default', {
  'ad_user_data': 'denied',
  'ad_personalization': 'denied',
  'ad_storage': 'denied',
  'analytics_storage': 'denied',
  'wait_for_update': 500,
});
dataLayer.push({'gtm.start': new Date().getTime(), 'event': 'gtm.js'});

(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer', cookie_consent_object.gtmcode);

window.onload = function () {
    
  let consent = get_cookie_consent()

  // If a consent decision exists, ensure GTM gets the correct state
  if (consent) {

    if(consent == 'granted' || consent == 'denied'){
      update_gtm_consent(consent);
      set_cookie_page_toggle(consent);
      hide_cookie_banner();
    }

  }
  else {
    set_cookie_page_toggle('denied');
  }

  if (document.getElementById("save-cookies-button")) {  

    const saveButton = document.getElementById('save-cookies-button'); 
    saveButton.addEventListener("click", function() {
      if(document.getElementById("accept-analytical-cookies").checked){
        update_cookie_consent('granted');
        update_gtm_consent('granted');
      }
      else {
        update_cookie_consent('denied');
        update_gtm_consent('denied');
      }

      const confirmationBanner = document.getElementById('cookie-settings-confirmation'); 
      confirmationBanner.classList.remove("hidden");
      confirmationBanner.scrollIntoView({ behavior: "instant" });

      hide_cookie_banner();
    });

  }

  const grantButton = document.getElementById('cookie-accept'); 
  grantButton.addEventListener("click", function() {
    update_cookie_consent('granted');
    update_gtm_consent('granted');
    set_cookie_page_toggle('granted');
    hide_cookie_banner();
  });

  const declineButton = document.getElementById('cookie-decline'); 
  declineButton.addEventListener("click", function() {
    update_cookie_consent('denied');
    update_gtm_consent('denied');
    set_cookie_page_toggle('granted');
    hide_cookie_banner();
  });

};

function set_cookie_page_toggle(consent){
  if (document.getElementById("analytical-cookies-control")) {
    if(consent == 'granted'){ 
      document.getElementById("accept-analytical-cookies").checked = true;
    }
    else {
      document.getElementById("reject-analytical-cookies").checked = true;
    }
  }
}

function update_gtm_consent(consent){
 
  function gtag() { dataLayer.push(arguments); }

  gtag('consent', 'update', {
    ad_user_data: consent,
    ad_personalization: consent,
    ad_storage: consent,
    analytics_storage: consent
  });
}

function hide_cookie_banner(){
  document.getElementById("cookie-compliance-banner").classList.add("hidden");
}

/* Store consent by cookie */

function update_cookie_consent(consent){
  var d = new Date()
  d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * 365)
  document.cookie = 'cookie_consent=' + consent + '; path=/; expires=' + d.toGMTString()
}

function get_cookie_consent() {
  var nameEQ = "cookie_consent=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}