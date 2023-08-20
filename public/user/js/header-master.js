window.HaravanAnalytics = window.HaravanAnalytics || {};
window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
window.HaravanAnalytics.meta.currency = 'VND';
var meta = {
    "page": {
        "pageType": "home"
    }
};
for (var attr in meta) {
    window.HaravanAnalytics.meta[attr] = meta[attr];
}
window.HaravanAnalytics.AutoTrack = true;