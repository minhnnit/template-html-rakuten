"use strict";var ebates=ebates||{};ebates.sf={init:function(e){var t=$(document),i={delay:1500,animation:100},a=$(".footer-fixed"),o=function(t){var i=n&&n.split(",")||[],a=$.inArray(""+e,i);return!t&&-1===a&&i.push(e)||t&&-1!==a&&i.splice(a,1),i.join()},n=ebates.cookie.get("sf-min"),s=function(){n=ebates.cookie.get("sf-min"),a.find(".toggle").addBack().toggleClass("min"),setTimeout(function(){a.hasClass("min")?(t.trigger("sf-minimized"),ebates.cookie.set("sf-min",o()),a.find(".toggle span.fa-times").attr("data-ea","unhide sticky footer").attr("data-click-action","unhide sticky footer"),document.body.classList.remove("sticky-footer-active")):(t.trigger("sf-maximized"),ebates.cookie.set("sf-min",o(!0)),a.find(".toggle span.fa-times").attr("data-ea","hide sticky footer").attr("data-click-action","hide sticky footer"),document.body.classList.add("sticky-footer-active"),setTimeout(function(){return document.dispatchEvent(new Event("scroll"))},0))},i.animation)},c=setTimeout(s,i.delay+i.animation);a.find(".min-max-tab").removeClass("hide"),t.one("sf-maximized",function(){a.find(".lazy-bg").addClass("sf-loaded"),document.dispatchEvent(new CustomEvent("ajax-module-loaded",{detail:{el:a[0]}}))}),n&&-1!==$.inArray(""+e,n.split(","))?clearTimeout(c):setTimeout(function(){$("#backgroundPopup").is(":visible")&&(clearTimeout(c),t.one("overlay-closed",s))},i.delay),$(".min-max-tab").on("click",s)}};
//# sourceMappingURL=sf-9768d356de.js.map
