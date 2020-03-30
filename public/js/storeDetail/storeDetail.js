(function () {
    var overlayUri = "/ajax/store-landing-new-su.htm?p=/qvc.com",
        splitId = "999",
        merchantId = "8378",
        styleId = "",
        utmContent = "",
        overlayUri = splitId ? ebates.param.add("split_id", splitId, overlayUri) : overlayUri,
        overlayUri = merchantId ? ebates.param.add("merchantId", merchantId, overlayUri) : overlayUri;
    overlayUri = styleId ? ebates.param.add("style", styleId, overlayUri) : overlayUri;
    overlayUri = utmContent ? ebates.param.add("utm_content", utmContent, overlayUri) : overlayUri;
    ebates.overlays = ebates.overlays || {};
    ebates.overlays.activate = (!ebates.overlays.activate || ebates.overlays.activate.priority < priority) &&
        {
            options: ["Loading...", {
                url: overlayUri,
                css: {
                    files: [ebates.src.css.modal, "/dist/static/rev/overlays/store_land_overlay_new/store-land-susi-c688614709.css"]
                },
                classes: {
                    toAdd: ["trans-opacity", "sl-su-modal", "w-530", "border-grn-t-3", "op0", "absolute"],
                    toRemove: ["border-grn-t-5"]
                },
                bg: {classes: ["trans-opacity", "op6"], closeOnClick: false},
                closing: {x: true}
            }]
        };
})();
var ebates = ebates || {};
ebates.user = ebates.user || {};
ebates.page = {};
ebates.user.loggedIn = 'false' === 'true' ? true : false;
ebates.page.type = 'store';
ebates.page.subtype = '';
ebates.page.tabId = 'storeLanding';
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
ebates.csrf = '0fdd1b05-9079-4233-b16e-f30a5b753927';
ebates.session = {id: "aaaJ2bzdfbFjvagyprkex"};
ebates.session.creationTime = '1585347680437';
ebates.stats = ebates.stats || {};
ebates.stats.timeout = 500;
ebates.stats.parentNavId = '22566';
ebates.stats.timeDelta = Date.now() - new Date(1585347680450);
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
    pgn: "shop",
    pgt: 'top',
    pgl: 'NO' === 'YES' && 'TB' || 'NO' === 'YES' && 'SP' || 'PC',
    ssc: ebates.page.type === 'interstitial' ? location.pathname.replace('-xfas', '').replace('/', '').replace('_', '/') : ''
}
if (ebates.page.type && typeof ebates.ratPageMap[ebates.page.type] !== 'undefined' && location.pathname != '/travel-vacations') {
    ebates.rat.pgn = ebates.ratPageMap[ebates.page.type]['pgn'];
}
var _LTracker = _LTracker || [];
_LTracker.push({
    'logglyKey': '8c7799ca-7d32-4c6d-9eb5-83e43880c4f6',
    'sendConsoleErrors': false,
    'tag': 'eb-jslogger' + ',' + window.location.hostname
});
window.addEventListener('error', function (e) {
    if (e.message && e.filename) {
        _LTracker.push({
            category: 'Ebates.com Js erros on ' + window.location.hostname,
            ebates: {
                device: ebates.stats.device,
                userAgentInfo: navigator.userAgent,
                Request: window.location.pathname + window.location.search,
                ReferrerInfo: document.referrer,
                parentNavId: ebates.stats.parentNavId,
                userLoginStatus: ebates.user.loggedIn,
                jseId: 'aaaJ2bzdfbFjvagyprkex'
            },
            exception: {
                message: e.message,
                file: e.filename,
                lineno: e.lineno || '',
                colno: e.colno || '',
                stack: e.error && e.error.stack || ''
            }
        });
    }
}, false);
!function () {
    var initLoggly = function () {
        $(document).on('loggly-error', function (e, data) {
            _LTracker.push({
                category: data.category,
                ebates: {
                    device: ebates.stats.device,
                    userAgentInfo: navigator.userAgent,
                    Request: window.location.pathname + window.location.search,
                    ReferrerInfo: document.referrer,
                    jseId: ebates.session.id
                },
                exception: {
                    message: data.exception
                }
            });
        });
        ebates.js.require('/static/js/loggly_js/loggly.tracker-2.1.min.js');
    };
    document.readyState !== 'loading' ? initLoggly() : window.addEventListener('DOMContentLoaded', initLoggly);
}();
!function () {
    var analytics = window.analytics = window.analytics || [];
    if (!analytics.initialize) if (analytics.invoked) window.console && console.error && console.error("Segment snippet included twice."); else {
        analytics.invoked = !0;
        analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "debug", "page", "once", "off", "on"];
        analytics.factory = function (t) {
            return function () {
                var e = Array.prototype.slice.call(arguments);
                e.unshift(t);
                analytics.push(e);
                return analytics
            }
        };
        for (var t = 0; t < analytics.methods.length; t++) {
            var e = analytics.methods[t];
            analytics[e] = analytics.factory(e)
        }
        analytics.load = function (t, e) {
            var n = document.createElement("script");
            n.type = "text/javascript";
            n.async = !0;
            n.src = "https://cdn.segment.com/analytics.js/v1/" + t + "/analytics.min.js";
            var a = document.getElementsByTagName("script")[0];
            a.parentNode.insertBefore(n, a);
            analytics._loadOptions = e
        };
        analytics.SNIPPET_VERSION = "4.1.0";
        analytics.load("vLFussC4XChxcOvzEXgApiBtItELHGtW");
    }
}();
"use strict";
!function () {
    var e = function () {
        var e = Math.min(window.innerHeight / 2, 500), t = document.getElementById("scrolling-container"),
            n = t || document.body, a = n.scrollHeight, s = t ? function () {
                return t.scrollTop
            } : function () {
                return window.scrollY
            }, i = function (e) {
                return document.dispatchEvent(new CustomEvent("stats-event", {detail: {map: {amp: e}}}))
            }, r = void 0;
        if (a > window.innerHeight + e) {
            var o = s(), c = function () {
                Math.abs(o - s()) > e && (i({eventType: "Scroll Below Fold"}), ebates.UI.scroll.off(r))
            };
            r = ebates.UI.scroll.add(c)
        }
    };
    ebates.amplitude = ebates.amplitude || {}, ebates.amplitude.userProps = ebates.amplitude.userProps || {}, ebates.amplitude.init = function () {
        var t = [], n = {user_status: ebates.user.status}, a = [n],
            s = {integrations: {Amplitude: {session_id: ebates.session.creationTime || -1}}},
            i = ebates.page.type || "untyped", r = {
                store: "Merchant",
                raf: "Refer A Friend",
                "account hotels": "Hotels",
                "credit-card": "Credit Card",
                allstores: "All Stores",
                "button-page": "Button",
                untyped: "untyped"
            }, o = {
                tenant: "ebates.com",
                application_type: "Website",
                application_subtype: "Website",
                client: "M" === ebates.stats.device ? "mweb" : "desktop",
                session_id: ebates.session.id,
                rakuten_state_id: ebates.user.rsid,
                url: location.href,
                page_type: r[i] || "" + i.charAt(0).toUpperCase() + i.slice(1)
            }, c = window.localStorage.getItem("amplitudeSessionId"), d = function () {
                var e = {};
                return "function" == typeof Object.assign ? Object.assign.apply(Object, [e].concat(Array.prototype.slice.call(arguments))) : [].concat(Array.prototype.slice.call(arguments)).map(function (t) {
                    return Object.keys(t).map(function (n) {
                        return e[n] = t[n]
                    })
                }), e
            }, u = function (e) {
                return t.push(e)
            }, l = function (e) {
                var t = e.detail.map || {}, n = t.identify, a = void 0 === n ? null : n,
                    i = e.detail.map && e.detail.map.amp || {}, r = i.eventType, c = void 0 === r ? null : r,
                    u = i.eventProps, l = void 0 === u ? {} : u;
                if (a) {
                    var p = ebates.user.guid ? [ebates.user.guid, a] : [a];
                    analytics.identify.apply(analytics, p)
                }
                c && analytics.track(c, d(o, l), s)
            }, p = function () {
                ebates.user.guid && a.unshift(ebates.user.guid), a.push(s), ebates.user.encryptedId && (n.referral_token = ebates.user.encryptedId), Array.isArray(ebates.amplitude.experiments) && ebates.amplitude.experiments.length && (n.experiments = ebates.amplitude.experiments), Object.keys(ebates.amplitude.userProps).map(function (e) {
                    return n[e] = ebates.amplitude.userProps[e]
                }), analytics.identify.apply(analytics, a)
            }, m = function () {
                if (ebates.session.id !== c) {
                    var e = ["eeid", "src", "acct", "utm_channel"], t = {referrer: document.referrer};
                    e.map(function (e) {
                        var n = new RegExp("[?&]+" + e + "=([^&]+)"), a = n.exec(location.search),
                            s = a && 2 === a.length ? a[1] : null;
                        s && (t[e] = decodeURIComponent(s))
                    }), analytics.track("Start Session", d(o, t), s);
                    try {
                        window.localStorage.setItem("amplitudeSessionId", ebates.session.id)
                    } catch (e) {
                    }
                }
            }, b = function () {
                p(), m(), analytics.page(o, s), document.removeEventListener("stats-event", u), document.addEventListener("stats-event", l), t.map(l), e()
            };
        document.addEventListener("stats-event", u), "loading" !== document.readyState ? b() : window.addEventListener("DOMContentLoaded", b)
    }, analytics && ebates.amplitude.init()
}();
ebates.branch = ebates.branch || {};
ebates.branch.linkPaths = {
    origin: 'https://go.rakuten.com',
    redirect: 'https://go.rakuten.com/redirect-to-app',
    open: 'https://go.rakuten.com/open-app',
    appStore: 'https://go.rakuten.com/open-app-store',
    playStore: 'https://go.rakuten.com/open-play-store'
};
ebates.branch.key = 'key_live_nhRF9ZTJhyZsHIsSdN1u6aheurlZgNKr';
ebates.branch.referrerId = '';
ebates.branch.ebtoken = '';
ebates.branch.eeid = '' || 37176;
!window._EbatesMobile && (_EbatesMobile = {});
_EbatesMobile.initBranchJourney = function () {
};
document.addEventListener("DOMContentLoaded", function () {
    var containerId = "GTM-NDCS3F",
        data = {
            acct: "".toLowerCase(),
            src: "".toLowerCase(),
            utm_size: "".toLowerCase(),
            utm_campaign: "".toLowerCase(),
            isHotelsNewSession: "false"
            , merchant_id: "8378"
        };
    data.signUp = +("" && true);
    dataLayer = [data];
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', containerId);
});
var unlock = "true";
$(window).load(function () {
    jQuery.ajaxSetup({cache: true});
    jQuery.getScript('//connect.facebook.net/en_US/sdk.js', function () {
        function initFB() {
            FB.init({
                appId: '214330088590858',
                status: true,
                cookie: true, // enable cookies to allow the server to access the session
                xfbml: true,  // parse XFBML
                oauth: true,
                version: 'v2.12'
            });
            $(document).trigger('fb-ready');
        }

        if (typeof FB !== 'undefined') {
            initFB();
        } else {
            setTimeout(initFB, 100);
        }
    });
});

function linkWithFacebook(fbAppId, siteRoot, urlAction, params, fconnect) {
    var redirectParams = {}, oauthParams = {client_id: fbAppId};
    if (unlock !== "true") {
        return;
    }
    if (typeof fbPromoValue !== "undefined" && fbPromoValue !== "") {    // these parameters should be better passed as arguments instead of globals
        if (typeof fbsplitId !== "undefined" && fbsplitId !== "") {
            redirectParams["split_entry_id"] = fbsplitId;
        }
        redirectParams["ebates.signup.promo"] = fbPromoValue;
    }
    typeof params === "object" && jQuery.each(params, function (key, value) {
        redirectParams[key] = value.replace(/\s/g, "_");
    });
    redirectParams["_csrf"] = "0fdd1b05-9079-4233-b16e-f30a5b753927";
    redirectParams["urlIdentifier"] = location.pathname + location.search;
    if (typeof fconnect != "undefined" && fconnect == 'fconnect') {
        redirectParams["action"] = "/fbIntegrationAction.do";
    } else {
        redirectParams["action"] = "/FBUserSignupOrLogin.htm";
    }
    oauthParams["state"] = encodeURIComponent(jQuery.param(redirectParams));
    oauthParams["redirect_uri"] = urlAction;
    oauthParams["display"] = "popup";
    oauthParams['redirect_params'] = redirectParams;
    getConnectWithFacebook("https://www.facebook.com/v2.12/dialog/oauth?" + jQuery.param(oauthParams), oauthParams, fconnect);
    fbPromoValue = "";
}

function getConnectWithFacebook(fb_auth_url, oauthParams, fconnect) {
    unlock = "false";

    function loginWithFbWrapper() {
        var fb_conf = {};
        fb_conf.csrfToken = "0fdd1b05-9079-4233-b16e-f30a5b753927";
        fb_conf.cb_on_response = function () {
            unlock = "true";
        };
        if (typeof fconnect != "undefined" && fconnect == 'fconnect') {
            fb_conf.usLinkApi = true;
        }
        FB.login(function (response) {
            var apiEndpoint, ajaxData;
            if (!(fb_conf && oauthParams)) {
                return;
            }
            if (typeof rkfb !== 'undefined') {
                apiEndpoint = fb_conf.usLinkApi ? '/newr/fblink.do' : '/newr/FBUserSignupOrLogin.do?rhome=true';
            } else {
                apiEndpoint = fb_conf.usLinkApi ? '/fblink.do' : '/FBUserSignupOrLogin.do';
            }
            if (fb_conf.apiSetup) {
                apiEndpoint = fb_conf.apiSetup;
            }
            if (typeof fb_conf.cb_on_response === 'function') {
                fb_conf.cb_on_response();
            }
            ajaxData = {
                _csrf: fb_conf.csrfToken
            }
            if (oauthParams['redirect_params']) {
                for (var key in oauthParams['redirect_params']) {
                    ajaxData[key] = oauthParams['redirect_params'][key];
                }
            }
            if (response.authResponse) {
                if (response.status === 'connected') {
                    ajaxData.accessToken = response.authResponse.accessToken;
                    $.ajax({
                        url: apiEndpoint, data: ajaxData, datatType: 'json',
                        success: function (res) {
                            if (JSON.stringify(res).indexOf('GDPR user') > -1) {
                                window.location.assign('/gdpr.htm');
                            }
                            if (res.status === 'success') {
                                if (typeof rkfb !== 'undefined') {
                                    if (window.location.href.indexOf("qa-www.ebates.com") != -1 || window.location.href.indexOf("qa2-www.ebates.com") != -1) {
                                        window.location.assign("https://qa2-www.ebates.com?ebtoken=" + res.jwttoken);
                                    } else {
                                        window.location.assign("https://www.ebates.com?ebtoken=" + res.jwttoken);
                                    }
                                } else {
                                    var product_url = ebates.param.get('product_url'),
                                        tUrl;
                                    if (ebates.stats.device == 'M' && product_url && location.pathname === '/editUserInfos.do' && res.targetUrl && res.targetUrl.indexOf('/mall_ctrl.do') == 0) {
                                        tUrl = ebates.param.remove('product_url', res.targetUrl);
                                        res.targetUrl = ebates.param.add('product_url', product_url, tUrl);
                                    }
                                    window.location.assign(res.targetUrl || window.location.href);
                                }
                            } else if (res.status == 'fail' && res.code === 'merge_accounts') {
                                window.location.assign('/auth/member/merge.htm');
                            } else {
                                if (fb_auth_url) {
                                    window.location.assign(fb_auth_url);
                                }
                            }
                        },
                        error: function () {
                            if (fb_auth_url) {
                                window.location.assign(fb_auth_url);
                            }
                        }
                    });
                    if (typeof fb_conf.cb_on_connected === 'function') {
                        fb_conf.cb_on_connected();
                    }
                }
            }
        }, {scope: 'email'});
        ;
    }

    if (typeof FB !== 'undefined') {
        loginWithFbWrapper();
    } else {
        setTimeout(function () {
            if (typeof FB !== 'undefined') {
                loginWithFbWrapper();
            } else {
                setTimeout(loginWithFbWrapper, 2000)
            }
        }, 1000);
    }
}

function getLoginWithFacebook(fb_auth_url, oauthParams) {
    unlock = "false";

    function loginWithFbWrapper() {
        var fb_conf = {};
        fb_conf.csrfToken = "0fdd1b05-9079-4233-b16e-f30a5b753927";
        fb_conf.cb_on_response = function () {
            unlock = "true";
        };
        FB.login(function (response) {
            var apiEndpoint, ajaxData;
            if (!(fb_conf && oauthParams)) {
                return;
            }
            if (typeof rkfb !== 'undefined') {
                apiEndpoint = fb_conf.usLinkApi ? '/newr/fblink.do' : '/newr/FBUserSignupOrLogin.do?rhome=true';
            } else {
                apiEndpoint = fb_conf.usLinkApi ? '/fblink.do' : '/FBUserSignupOrLogin.do';
            }
            if (fb_conf.apiSetup) {
                apiEndpoint = fb_conf.apiSetup;
            }
            if (typeof fb_conf.cb_on_response === 'function') {
                fb_conf.cb_on_response();
            }
            ajaxData = {
                _csrf: fb_conf.csrfToken
            }
            if (oauthParams['redirect_params']) {
                for (var key in oauthParams['redirect_params']) {
                    ajaxData[key] = oauthParams['redirect_params'][key];
                }
            }
            if (response.authResponse) {
                if (response.status === 'connected') {
                    ajaxData.accessToken = response.authResponse.accessToken;
                    $.ajax({
                        url: apiEndpoint, data: ajaxData, datatType: 'json',
                        success: function (res) {
                            if (JSON.stringify(res).indexOf('GDPR user') > -1) {
                                window.location.assign('/gdpr.htm');
                            }
                            if (res.status === 'success') {
                                if (typeof rkfb !== 'undefined') {
                                    if (window.location.href.indexOf("qa-www.ebates.com") != -1 || window.location.href.indexOf("qa2-www.ebates.com") != -1) {
                                        window.location.assign("https://qa2-www.ebates.com?ebtoken=" + res.jwttoken);
                                    } else {
                                        window.location.assign("https://www.ebates.com?ebtoken=" + res.jwttoken);
                                    }
                                } else {
                                    var product_url = ebates.param.get('product_url'),
                                        tUrl;
                                    if (ebates.stats.device == 'M' && product_url && location.pathname === '/editUserInfos.do' && res.targetUrl && res.targetUrl.indexOf('/mall_ctrl.do') == 0) {
                                        tUrl = ebates.param.remove('product_url', res.targetUrl);
                                        res.targetUrl = ebates.param.add('product_url', product_url, tUrl);
                                    }
                                    window.location.assign(res.targetUrl || window.location.href);
                                }
                            } else if (res.status == 'fail' && res.code === 'merge_accounts') {
                                window.location.assign('/auth/member/merge.htm');
                            } else {
                                if (fb_auth_url) {
                                    window.location.assign(fb_auth_url);
                                }
                            }
                        },
                        error: function () {
                            if (fb_auth_url) {
                                window.location.assign(fb_auth_url);
                            }
                        }
                    });
                    if (typeof fb_conf.cb_on_connected === 'function') {
                        fb_conf.cb_on_connected();
                    }
                }
            }
        }, {scope: 'email'});
        ;
    }

    if (typeof FB !== 'undefined') {
        loginWithFbWrapper();
    } else {
        setTimeout(function () {
            if (typeof FB !== 'undefined') {
                loginWithFbWrapper();
            } else {
                setTimeout(loginWithFbWrapper, 2000)
            }
        }, 1000);
    }
}
$(function () {
    var menu = $("#categ-nav-sub .main-cat");
    menu.menuAim({
        activate: activateSubmenu,
        deactivate: deactivateSubmenu
    });

    function activateSubmenu(row) {
        var row = $(row),
            submenuId = row.data("submenuId"),
            submenu = $("#" + submenuId),
            height = menu.outerHeight(),
            width = menu.outerWidth();

        // Show the submenu
        submenu.css({
            display: "block"
        });

        // Keep the currently activated row's highlighted look
        row.addClass("maintainHover");
    }

    function deactivateSubmenu(row) {
        var row = $(row),
            submenuId = row.data("submenuId"),
            submenu = $("#" + submenuId);

        submenu.css("display", "none");
        row.removeClass("maintainHover");
    }

    $("#main-nav .main-cat .main-cat-li").hover(function (e) {
        e.stopPropagation();
    });

    $('#main-nav #nav-tab1').on('hover', function () {
        $('.main-cat-sub').css('display', 'none');
        $("li.maintainHover").removeClass("maintainHover");
    });
    $('#categ-nav-sub ul li.main-cat-li:eq(0)').on('hover', function () {
        $(this).find('.main-cat-sub').css('display', 'block');
    });
});
$(document).on('click', '.r3-cbBtn', function () {
    $('.tooltip').addClass('hide');
    if ("storeLanding" == "home" && (ebates.cookie.get('r3_') == "1000" || 0 == "1000") && ebates.cookie.get('r3tips_') != 2) {
        $('#promo h2').after('<div class="tooltip r3-dcb-tooltip r3-box-shadow pos-abs bg-w pad-10-t pad-20-lr pad-25-b f-gry"> <div><span class="fa-close f-16 f-white frt pointer close-tooltip"></span></div> <div class="f-16 lh-20 prox-r w-290 mar-15-t mar-10-b f-whitee">Shop your favorite Double Cash Back stores just as you normally would.</div><div class="next-sept frt"><a class="button reg hollow r3-done f-gry">Done</a> </div>');
        $(document).trigger("stats", {data: ["send", "event", "r3", "click next on account tooltip"]});
        $(document).trigger("stats", {data: ["send", "event", "r3", "show double cash back tooltip"]});
        ebates.cookie.set('r3tips_', 2, 365);
    }
});

$(document).on('click', '.close-tooltip', function () {
    $('.tooltip').addClass('hide');
    if (ebates.cookie.get('r3_') == "1") {
        $(document).trigger("stats", {data: ["send", "event", "r3", "dismiss account tooltip"]});
    } else {
        $(document).trigger("stats", {data: ["send", "event", "r3", "dismiss double cash back tooltip"]});
    }
});

$(document).on('click', 'a.r3-done', function () {
    $('.r3-dcb-tooltip').hide();
    $(document).trigger("stats", {data: ["send", "event", "r3", "click done on double cash back tooltip"]});
});
//# sourceMappingURL=segment-9df32e2d48.js.map
