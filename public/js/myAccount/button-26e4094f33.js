"use strict";ebates.button=ebates.button||{},ebates.button.getListing=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",e={},o=/mac/i.test(navigator.platform);o&&/Mac OS X [0-9]{2,}[.|_]([0-9]+)/i.exec(navigator.userAgent);switch(ebates.button.browser){case"opera":case"chrome":e.listingURL="https://chrome.google.com/webstore/detail/chhjbpecpncaggjpdakmflnfcopglcmi?utm_source="+t,e.extensionURL=e.listingURL;break;case"firefox":e.listingURL="https://addons.mozilla.org/en-US/firefox/addon/ebates/?src=external-"+t,e.extensionURL="https://addons.mozilla.org/firefox/downloads/latest/404071/?src=external-"+t;break;case"safari":e.listingURL="https://itunes.apple.com/app/apple-store/id1451893560?pt=117880184&mt=12&ls=1&ct="+t,e.extensionURL=e.listingURL;break;case"edge":navigator.userAgent.indexOf("Edg/")>0?(e.listingURL="https://microsoftedge.microsoft.com/addons/detail/gmmlpenookphoknnpfilofakghemolmg?cid="+t,e.extensionURL=e.listingURL):(e.listingURL="https://www.microsoft.com/store/apps/9NBLGGH4SKR9?cid="+t,e.extensionURL=o?e.listingURL:"ms-windows-store://pdp/?ProductId=9NBLGGH4SKR9&cid="+t);break;default:e.listingURL="https://chrome.google.com/webstore/detail/chhjbpecpncaggjpdakmflnfcopglcmi?utm_source="+t,e.extensionURL=e.listingURL}return e},ebates.button.setInstallSource=function(t){var e=t.utm,o=void 0===e?"":e;document.cookie="extension-install-source="+o+"; path=/"},ebates.button.UI={init:function(t){var e=t.el,o=t.variation,n=t.name,s=t.utm,a=t.callback,r=ebates.button.browser,i=$(document),c=function(t,e){return i.trigger("stats",{data:["send","event","Button",t+(n?" "+n:"")+(o?" | "+o:""),e||""]})},l=e.classList.contains("browser-button")?[e]:e.querySelectorAll(".browser-button"),u=e.querySelectorAll(".browser"),b=e.querySelectorAll(".browser-text");if(l.length>0){var g=ebates.button.getListing(s||"ebates_com").extensionURL;Array.prototype.map.call(l,function(t){t.setAttribute("href",g),"chrome"!==r&&"safari"!==r||t.setAttribute("target","_blank"),t.addEventListener("mousedown",function(){c("Click Button",ebates.button.browser),ebates.button.setInstallSource({utm:s})},!1)}),c("Show Button",ebates.button.browser)}Array.prototype.map.call(u,function(t){return t.classList.add(r)}),Array.prototype.map.call(b,function(t){return t.textContent=r}),a&&"function"==typeof a[r]&&a[r].call(e)}};
//# sourceMappingURL=button-26e4094f33.js.map
