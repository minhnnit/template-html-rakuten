!function(){if("preview.ebates.com"==window.location.hostname||"www.ebates.com"==window.location.hostname||"www.rakuten.com"==window.location.hostname)var e=115009257568;else var e=115006631667;var t="How to Use "+ebates.rakutenmode.currentBrandName+" with Your Ad Blocker",a=$(".install-filter").last(),n=/(msie|trident|edge\/)/i.test(navigator.userAgent)&&"IE"||$.browser.mozilla&&"firefox"||$.browser.webkit&&(!!window.chrome&&"chrome"||"safari")||"other",i="IE"===n?"":'<div class="absolute filter-blk pad-15-tb pad-40-lr bg-gry IE-hide"><div class="flt f-14 prox-b">Are you using AdBlock,<br />Adblock Plus or uBlock?</div></div>',o="IE"===n?"":'<span class="IE-hide prox-b f-14">Using another ad blocker?</span>',r=$('<div class="ABP-container container-fluid zero-height"><div class="ABP-warning relative"><div class="absolute ABP-text pad-15-tb pad-40-lr bg-w"><div class="prox-b f-16">AD BLOCKER ALERT</div><div class="prox-r f-13">Your ad blocker is preventing you from earning Cash Back.</div></div>'+i+'<div class="absolute ABP-info pad-15-tb pad-40-lr bg-gry">'+o+'<br /><a href="/help/article/software-or-settings-preventing-cash-back-'+e+'#abp" class="f-14 prox-b absolute blocker-help-link" data-amp-evt-sig="module_name,module_type,item_type" data-amp-evt-type="Click Module" data-amp-module_name="Adblock" data-amp-module_type="Sticky Header" data-amp-item_type="Learn">'+t+"</a></div></div></div>"),l=function(){setTimeout(function(){r.find(".filter-blk").fadeOut(200),r.find(".ABP-text div:first").text("ENABLING CASH BACK"),r.find(".ABP-text div:last").text("If you see this alert again, we suggest disabling your ad blocker during your shopping sessions to earn Cash Back."),r.find(".ABP-info").toggleClass("bg-w bg-gry").find("span").fadeOut(200),r.find(".blocker-help-link").text("Learn "+t).css({left:-80}),r.find(".blocker-help-link").attr({"data-amp-module_type":"Adblock Confirmation"})},500),setTimeout(function(){r.addClass("zero-height")},7e3),$(document).trigger("stats",{data:["send","event","Blocker Warning","Filter Button Click",n],map:{amp:{eventType:"Click Module",eventProps:{module_name:"Adblock",module_type:"Sticky Header",item_type:"Enable"}}}}),document.dispatchEvent(new CustomEvent("stats-event",{detail:{map:{amp:{eventType:"View Module",eventProps:{module_type:"Sticky Header",module_name:"Adblock Confirmation"}}}}}))},d=$("#safari-11");d.length>0?($(r).insertAfter(d),$("body").on("mousedown",".ABP-warning .install-filter",l).on("click",".ABP-warning .install-filter",function(e){e.preventDefault()})):$("body").prepend(r).on("mousedown",".ABP-warning .install-filter",l).on("click",".ABP-warning .install-filter",function(e){e.preventDefault()}),"IE"===n?$(".ABP-warning").addClass("IE").find(".blocker-help-link").text("Learn "+t):a.appendTo(".filter-blk").fadeIn(100),setTimeout(function(){r.removeClass("zero-height"),ebates.UI.isInView(document.querySelector(".ABP-warning"))&&$(document).trigger("stats",{data:["send","event","Blocker Warning","View",n],map:{amp:{eventType:"View Module",eventProps:{module_type:"Sticky Header",module_name:"Adblock"}}}})},350)}();
//# sourceMappingURL=blocking-45eb9cd696.js.map
