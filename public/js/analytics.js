window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
let value = T.getCookie('g_analytics') == 'true' ? 'granted' : 'denied';
gtag('js', new Date());
gtag('config', 'YOUR_GA_MEASUREMENT_ID');
gtag('consent', 'default', {
    ad_storage: value,
    analytics_storage: value,
    ad_user_data: value,
    ad_personalization: value,
    wait_for_update: 500,
});
