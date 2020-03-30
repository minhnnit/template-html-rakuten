var ebates = ebates || {};
ebates.src = {
    overlays: {skinny: '/dist/static/rev/overlays/skinny/skinny-d91d74ee2d.js'},
    store: {
        overlay: './js/storeDetail/validate.1.1.5.min.js',
        btn_overlay: '/dist/static/rev/button/store_landing_overlay-7d2822834c.js',
    },
    suggest: {
        stores: '/dist/static/rev/search/eba_suggest-232e28b17a.js',
        generic: '/dist/static/rev/search/generic-601e53461b.js',
        hotels: './js/suggest-af3f9c76c7.js'
    },
    carousel: './js/carousel-2ffab8aefc.js',
    msg: '/account/global_files/js/notifications.1.0.1.min.js',
    sorter: '/global_files/js/eba/sort/sort.1.0.4.min.js',
    sf: './js/sf-9768d356de.js',
    abp: './js/blocking-45eb9cd696.js',
    emailCorrector: {
        mailcheck: './js/mailcheck-00ff88a434.js',
        loader: './js/loader-3a832a4e30.js'
    },
    button: '/dist/static/rev/button/button-26e4094f33.js',
    modal: '/dist/static/rev/global/plugins/modal/eb-mod-a538c1ee26.js',
    form: {
        factory: './js/form-factory-98f8d352fd.js',
        strings: {
            en: './js/form-strings-en-4b3eae83f1.js'
        },
        recaptcha: '/dist/static/rev/overlays/global/re-captcha-c4be51f848.js',
        captcha: '/static/js/overlays/global/captcha.1.0.0.min.js',
        fb: './js/storeDetail/fb-5946e380c1.js',
        google: './js/google_client-3c20b6bbfe.js',
        passwordMeter: '/dist/static/rev/plugins/pwd_strengthmeter/pwd_strength-c560d80215.js',
        passwordValidator: './js/password_strongth_validation-084620551a.js'
    },
    expander: './js/expander_v1-b2c478eb8f.js',
    expander2: './js/storeDetail/expander_v2-cf3d7aa5e6.js',
    css: {
        modal: '/dist/static/rev/global/plugins/modal/eb-mod-130cbb60ab.css',
        skinny: '/dist/static/rev/overlays/global/susi-64e57874c2.css',
        hotelsSu: '/dist/static/rev/overlays/hotels/su-112a5e5d7f.css',
        gswSi: '/dist/static/rev/scss/styles/local/home/landing_pages/nba-d64e692f46.css',
        accountRecovery: '/dist/static/rev/scss/styles/local/account/account-recovery-d2c35f7d5b.css',
        mwAccountRecovery: '/dist/static/rev/scss/styles/local/account/mw_account_recovery-2de6a45677.css',
        addressModal: '/dist/static/rev/scss/styles/local/account/address-modal-093216a4a7.css'
    },
    safari_11: './js/safari_11-dfcbe7a134.js',
    safari_11_mw: './js/safari_11_mw-265af944dd.js',
    swipe: '/mobile_web/_/js/jquery.detectswipe.2.1.1.a.min.js',
    accountRecovery: '/dist/static/rev/account/account-recovery-2c5d34b42a.js',
    signout: '/dist/static/rev/overlays/global/signout_csrf-5788a3f173.js',
    addressModal: '/dist/static/rev/account/address-modal-2471f0d637.js'
};
var ebates = ebates || {};
ebates.user = ebates.user || {};
ebates.page = {};
ebates.user.loggedIn = 'false' === 'true' ? true : false;
ebates.page.type = 'home';
ebates.page.subtype = '';
ebates.page.tabId = 'home';
ebates.user.id_last_digit = '';
ebates.user.guid = '';
ebates.user.rsid = '0';
ebates.user.status = 'UNREGISTERED';
ebates.user.lifecycleStage = '';
ebates.user.isRakutenCardLaunched = 'true';
ebates.user.encryptedId = '';
ebates.user.isDataSharingAllowed = true;
ebates.user.bonuses = {};
ebates.rakutenmode = ebates.rakutenmode || {
    'currentBrandName': 'Rakuten'
};
ebates.csrf = '275eaabe-32b1-471c-beb3-c90dbc398cd6';
ebates.session = {id: "aaaJuvGXVB9az8Ia-8jex"};
ebates.session.creationTime = '1585049050991';
ebates.stats = ebates.stats || {};
ebates.stats.timeout = 500;
ebates.stats.parentNavId = '0';
ebates.stats.timeDelta = Date.now() - new Date(1585049051001);
ebates.stats.device = 'NO' === 'YES' && 'T' || 'NO' === 'YES' && 'M' || 'D';
ebates.stats.externalUrl = 'https://comev.ecbsn.com/index.php';
ebates.stats.assetHost = '//static.ebates.com';
ebates.ratPageMap = {
    'interstitial': {'pgt': 'redirect', 'pgn': "redirect/store"},
    'store': {'pgt': 'shop', 'pgn': 'shop'},
    'category': {'pgt': 'category', 'pgn': 'category'},
    'search': {'pgt': 'search', 'pgn': 'search'}
}
ebates.rat = {
    pgn: "top",
    pgt: 'top',
    pgl: 'NO' === 'YES' && 'TB' || 'NO' === 'YES' && 'SP' || 'PC',
    ssc: ebates.page.type === 'interstitial' ? location.pathname.replace('-xfas', '').replace('/', '').replace('_', '/') : ''
}
if (ebates.page.type && typeof ebates.ratPageMap[ebates.page.type] !== 'undefined' && location.pathname != '/travel-vacations') {
    ebates.rat.pgn = ebates.ratPageMap[ebates.page.type]['pgn'];
}
(function () {
    ebates.js.require("./js/jail.fixed.0.9.5.min.js", function () {
        $('img.lazy').asynchImageLoader();
    });
})();
if (navigator.userAgent.toLowerCase().indexOf('macintosh') > -1 && 'ontouchend' in document) {
    var viewportMetaTag = document.querySelector('meta[name=viewport]') || document.createElement('meta');
    viewportMetaTag.setAttribute('name', 'viewport');
    viewportMetaTag.setAttribute('content', 'width=1170');
    document.head.appendChild(viewportMetaTag);
    document.body.classList.add('ios', 'is-tablet');
    ebates.css.require('/dist/static/rev/scss/ebates-tablet-76e35c0b20.css');
    ebates.js.require('/dist/static/rev/tablet/tablet-007ad78fba.js');
    window.addEventListener('load', function () {
        setTimeout(function () {
            $(window).scrollTop(0);
        }, 2000);
    });
}

window.addEventListener('load', function () {
    var buttonDetectionDelay = ebates.getBrowser().name === 'Edge' ? 2500 : 0;
    var caModalViewed = ebates.isLocalstorageAvailable() && localStorage.getItem('view-ca-modal') == 'true' ? true : false;
    var sawRedirectMod = ebates.isLocalstorageAvailable() && localStorage.getItem('saw-redirect-mod') == 'true' ? true : false;
    if (ebates.getBrowser().name === 'IE') {
        buttonInstalled = true;
    }
    var overlayCtrParam = {
        caModalViewed: caModalViewed,
        sawRedirectMod: sawRedirectMod,
        hp_modal: ""
    };
    if (ebates.param.get('overlay') === 'false' || ebates.disableOverlay) {
        return;
    }
    for (var localStorageName in localStorage) {
        if (localStorageName.indexOf('pageCom_') == 0) {
            overlayCtrParam.localStorageName = localStorage.getItem(localStorageName);
        }
    }
});
$(function () {
    var defaultSlide = '<li><a data-click-category="Homepage" data-click-action="Click carousel banner" data-click-label="default_slide" data-campaign="carousel-how-to-earn" class="non-shopper" href="" data-amp-evt-sig="module_name,page_component" data-amp-evt-type="Click Module"\n' +
        'data-amp-page_component="How It Works" data-amp-module_name="Banner"><img width="973" height="280" class="lazy promo-header bblk" ' +
        'title="Learn How to Earn Cash Back!" alt="Earn Cash Back" data-href="//static.ebates.com/img/campaign/9301/rakuten_howtoearn.jpg"></a></li>',
        header = $("#promo h2").text(),
        isPromo = $("ul li:last-child").hasClass("featured"),
        carouselEl = $(".hp-promo-carousel").css({opacity: isPromo && 1 || 0}),
        lastImage = carouselEl.find("li:last").find("img"),
        startDelay = isPromo && 7000 || 200,
        carouselOps = {
            times: {next: 4000},
            animation: {type: "slide"},
            defaultSlide: defaultSlide,
            nav: {keyboard: true}
        },
        startCarousel = function () {
            ebates.js.require("/dist/static/rev/global/js/eba/carousel-2ffab8aefc.js", function () {
                carouselEl.carousel(carouselOps).animate({opacity: 1}, 300);
            });
        };
    isPromo && lastImage.attr({src: lastImage.attr("data-href")});
    ebates.timers = {homeCarousel: 0};
    jQuery.browser.msie && jQuery.browser.version < 9 && (carouselOps.nav = {
        next: $("<a>").html("&gt;&nbsp;&nbsp;"), prev: $("<a>").html("&nbsp;&nbsp;&lt;"), keyboard: true
    });

    if ($(".ebates-carousel").is(":visible")) {
        ebates.timers.homeCarousel = setTimeout(startCarousel, startDelay);
        $(document).trigger("carousel-timer-started");
        $(document).on("start-carousel", startCarousel);

        (function () {
            var static = $("#home-promo-static"), carousel, bounceT = 0, stopT = 0, stopAfter = 30000,
                bounceInterval = 200, tracker,
                trackImpresion = function () {
                    var slide = $("ul li:last-child img", this);
                    slide.length && $(document).trigger("stats", {data: ["send", "event", "Homepage", "View carousel banner", slide.attr("data-href").split("/").pop()]});

                    //lyft
                    if (slide.parent().attr("data-click-action") === 'Featured Lyft Placement') {
                        $(document).trigger("stats", {
                            data: ["send", "event", "Homepage", "View carousel banner", slide.attr("data-href").split("/").pop()],
                            map: {external: {ec: 'Lyft', et: 'Homepage', ea: 'carousel pageview'}}
                        });
                    }
                },
                stopTracking = function () {
                    tracker = jQuery.noop;
                },
                resetTracking = function () {
                    tracker = trackImpresion;
                    clearTimeout(stopT);
                    stopT = setTimeout(stopTracking, stopAfter);
                },
                bounceTrackingReset = function () {
                    clearTimeout(bounceT);
                    bounceT = setTimeout(resetTracking, bounceInterval);
                };
            if (static.length) {
                $(document).trigger("stats", {data: ["send", "event", "Homepage", "View carousel banner", static.find("img.promo-header").attr("src").split("/").pop()]});
            } else {
                carousel = $(".hp-promo-carousel");
                if (!$("ul li img", carousel).length) return;
                trackImpresion.call(carousel);
                resetTracking();
                carousel.on("slide-done", function () {
                    tracker.call(this);
                });
                carousel.on("next-slide", function (e, d1, d2, d3) {
                    if ($.inArray(d2, ["next", "prev", "keyboard"]) !== -1) {
                        var click_type = d2 === "keyboard" ? d3 === 0 ? "next" : "prev" : d2;
                        $(document).trigger("stats", {data: ["send", "event", "Homepage", "Click carousel " + click_type, '']});
                    }
                });
                $(window).on("resize", bounceTrackingReset);
                $(document).on("focusin keydown touchstart mouseover mousemove mousedown", bounceTrackingReset);
            }

            //Lyft
            $('.hp-promo-carousel a[data-click-action="Featured Lyft Placement"]').on('click', function () {
                $(document).trigger("stats", {
                    data: ["send", "event", "Homepage", "Click carousel banner", $(this).find('img').attr('data-href').split("/").pop()],
                    map: {external: {ec: 'Lyft', et: 'Homepage', ea: 'carousel click'}}
                });
            });
        })();
    } else if (!$(".ebates-carousel").is(":visible") && $('#home-promo-static').is(":visible")) {
        promoheader = $("img.promo-header").attr("src").split("/").pop();
        $(document).trigger("stats", {data: ["send", "event", "Homepage", "View carousel banner", promoheader]});
    }
    $("#expander").click(function () {
        var sign = $("#expander-sign");
        $("#expanded").slideToggle();
        sign.text() === "+" ? sign.html("−") : sign.text("+");
    });
    $(".store-info").one("click", ".expander", function () {
        $(document).trigger("stats", {data: ["send", "event", "UI", "Merchant Read More", location.pathname]});
    });
    if ($('.coupon-restrictions').length > 0) {
        var restrictionExpand = function () {
            if ($(window).scrollTop() > ($('.coupon-restrictions').offset().top - window.innerHeight)) {
                ebates.js.require("js/expander.1.0.3.min.js", function () {
                    if ($('.coupon-restrictions').is(":visible")) {
                        var couponRes = $(".hp-hotdeals").find(".coupon-restrictions"),
                            lineH = +couponRes.css("line-height").replace("px", ""),
                            expandOps = {
                                text: " ",
                                more: "Read more +",
                                less: "Read less -",
                                height: lineH - 1,
                                classes: "prox-b expander absolute pointer toggle min"
                            };
                        if (couponRes.length) {
                            couponRes.expander(expandOps);
                        }
                    }
                });
                $(window).off('scroll', restrictionExpand);
            }
        }
        restrictionExpand();
        $(window).on('scroll', restrictionExpand);
    }
    $(document).one("sf-ready button-sf", function () {
        setTimeout(function () {
            $(".sf-content a").attr("data-click-category", "Homepage");
        }, 200);
    });
});

if (ebates.param.get("logout")) {
    !function () {
        var removeCookies = new Image();
        removeCookies.src = 'https://www.ebates.com/' + 'rak/eba/remove/cookies.htm?r3=donotrediret';
        ebates.param.remove("logout")
    }();
}
ebates.user.shopList = [];
ebates.user.favList = [];
window.addEventListener('DOMContentLoaded', function () {
    $('.h-search-form').css('opacity', 0);
    $('.header-wrapper').addClass('minimize');
    $(document).one('auth-form-init-ui-ready', function (e, d) {
        var formContainer = document.getElementById('home-su-form-wrap'),
            formLoaderContainer = document.getElementById('configurable-su-form');
        if (formContainer) {
            formContainer.appendChild(formLoaderContainer);
            formLoaderContainer.classList.remove('hide');
            formContainer.classList.remove('ht-0');
        }
    });
    $(document).trigger("stats", {
        data: ["send", "event", 'SignUp Overlay', 'Inline SignUp Form', "default su form"],
        map: {
            external: {ec: 'SignUp Overlay', et: 'Inline SignUp Form', ea: 'pageview', ed: "default su form"}
        }
    });
});
