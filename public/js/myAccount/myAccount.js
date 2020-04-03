var Userlogin = "true", ebates = ebates || {};
ebates.user = {loggedIn: true};
var ebates = ebates || {};
ebates.user = ebates.user || {};
ebates.page = {};
ebates.user.loggedIn = 'true' === 'true' ? true : false;
ebates.page.type = 'account';
ebates.page.subtype = 'account-dashboard';
ebates.page.tabId = 'tab-acct';
ebates.user.id_last_digit = '2';
ebates.user.guid = '1A17B21381D0A421A94DB77';
ebates.user.rsid = '2000';
ebates.user.status = 'REGISTERED_NON_SHOPPER';
ebates.user.lifecycleStage = '';
ebates.user.isRakutenCardLaunched = 'true';
ebates.user.encryptedId = 'RxwQ%2Bsd%2BszTMkS1nIzVS2w%3D%3D';
ebates.user.isDataSharingAllowed = true;
ebates.user.bonuses = {};
ebates.rakutenmode = ebates.rakutenmode || {
    'currentBrandName': 'Rakuten'
};
ebates.csrf = '734ba358-55cd-4c1f-9799-098211e37655';
ebates.user.bonuses.welcome = {
    code: 'WALMART10-201210',
    type: 1,
    isPending: true,
    display: '$10 Walmart Gift Card',
    expDate: '2020-06-30 23:59:59.481',
    expDateFormatted: '06/30/2020',
    amountRequired: '$25.0',
    amountFormatted: '0.00'
};
ebates.session = {id: "aaakWtPYUx-kN8QTKNkex"};
ebates.session.creationTime = '1585728809812';
ebates.stats = ebates.stats || {};
ebates.stats.timeout = 500;
ebates.stats.parentNavId = '22832';
ebates.stats.timeDelta = Date.now() - new Date(1585728873646);
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
    pgn: "account",
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
                jseId: 'aaakWtPYUx-kN8QTKNkex'
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
ebates.branch.ebtoken = 'eyJhbGciOiJSUzI1NiJ9.eyJjcnQiOjE1ODU3Mjg4NzM2NDUsIm1JZCI6IjFBMTdCMjEzODFEMEE0MjFBOTREQjc3In0.pRNxVSqv0pa9poCuPRks7hAwHYAVdzHWTJZ9nFucN8z22cxDZ5pMf8kdFDQkIkzoRWalspALUR8BWXIaOi3TNhMB5j_Wj7jwA7pFyFLQfZvRKonII1-TFZi_ErU6SJy6F1NaJdzvfwSIOb86G56eOKorIvYlqlfHefBwsT4G3S4';
ebates.branch.eeid = '' || 37176;
!window._EbatesMobile && (_EbatesMobile = {});
_EbatesMobile.initBranchJourney = function () {
};
ebates.rat = ebates.rat || {};
document.getElementById('ratPageType').value = ebates.rat.pgt;
document.getElementById('ratPageName').value = ebates.rat.pgn;
document.getElementById('ratPageLayout').value = ebates.rat.pgl;
document.getElementById('ratSiteSection').value = ebates.rat.ssc;

$(document).on('click', '.r3-cbBtn', function () {
    $('.tooltip').addClass('hide');
    if ("tab-acct" == "home" && (ebates.cookie.get('r3_1A17B21381D0A421A94DB77') == "1000" || 0 == "1000") && ebates.cookie.get('r3tips_1A17B21381D0A421A94DB77') != 2) {
        $('#promo h2').after('<div class="tooltip r3-dcb-tooltip r3-box-shadow pos-abs bg-w pad-10-t pad-20-lr pad-25-b f-gry"> <div><span class="fa-close f-16 f-white frt pointer close-tooltip"></span></div> <div class="f-16 lh-20 prox-r w-290 mar-15-t mar-10-b f-whitee">Shop your favorite Double Cash Back stores just as you normally would.</div><div class="next-sept frt"><a class="button reg hollow r3-done f-gry">Done</a> </div>');
        $(document).trigger("stats", {data: ["send", "event", "r3", "click next on account tooltip"]});
        $(document).trigger("stats", {data: ["send", "event", "r3", "show double cash back tooltip"]});
        ebates.cookie.set('r3tips_1A17B21381D0A421A94DB77', 2, 365);
    }
});

$(document).on('click', '.close-tooltip', function () {
    $('.tooltip').addClass('hide');
    if (ebates.cookie.get('r3_1A17B21381D0A421A94DB77') == "1") {
        $(document).trigger("stats", {data: ["send", "event", "r3", "dismiss account tooltip"]});
    } else {
        $(document).trigger("stats", {data: ["send", "event", "r3", "dismiss double cash back tooltip"]});
    }
});

$(document).on('click', 'a.r3-done', function () {
    $('.r3-dcb-tooltip').hide();
    $(document).trigger("stats", {data: ["send", "event", "r3", "click done on double cash back tooltip"]});
});
setTimeout(function () {
    ebates.css.require("/dist/static/rev/promotions/holiday_promotion/flipclock-2d1595c6e1.css");
    ebates.js.require("/dist/static/rev/promotions/holiday_promotion/flipclock-ad64196c47.js", function () {
        var updateTime = new Date(2020, 4 - 1, 1, 23, 59, 59), serverTime = new Date(2020, 4 - 1, 1, 1, 14, 33),
            currentTime = serverTime ? new Date(serverTime) : new Date(),
            secdiff = (updateTime.getTime() - currentTime.getTime()) / 1000,
            localTime = new Date(),
            localsecdiff = parseInt((updateTime.getTime() - localTime.getTime()) / 1000),
            serverdiff = secdiff - localsecdiff,
            clock, page_clock,
            viewstart = function () {
                localTime = new Date();
                var newlocalsecdiff = parseInt((updateTime.getTime() - localTime.getTime()) / 1000),
                    newsecdiff = newlocalsecdiff + serverdiff;
                if (newsecdiff > 0) {
                    clock.setTime(newsecdiff);
                    clock.start();
                } else if (newsecdiff < 1) {
                    clock.setTime(0);
                }
            },
            viewstop = function () {
                clock.stop();
            },
            visibility = {
                hidden: "visibilitychange",
                msHidden: "msvisibilitychange",
                webkitHidden: "webkitvisibilitychange"
            },
            hidden = typeof document.hidden !== "undefined" && "hidden" || typeof document.msHidden !== "undefined" && "msHidden" || typeof document.webkitHidden !== "undefined" && "webkitHidden";
        $(document).on(visibility[hidden], function () {
            document[hidden] ? viewstop() : viewstart();
        });
        $("#container").prepend(
            '<div id="header-counter" class="desktop-counter container-fluid pre-header header-bg-color overflow-0 ht-40 lh-40">' +
            '	<div class="container-fixed h-header">' +
            '		<div class="blk0">' +
            '			<div class="blk-group">' +
            '			' +
            '				<a class="" href="/april-flash-sale.htm" data-navigation-id="23143">' +
            '				<div class="blk col1 center">' +
            '					<div class="counter-left  blk">' +
            '						<div class="hdr-elem flt">' +
            '							<h2 class="counter-header f-22 lh-40 space-1">' +
            '							' +
            '								<span class="hdr-elem promo-live prox-b counterColor mar-10-r">Hurry! 12% Cash Back ends in:</span>' +
            ' 							' +
            '							</h2>' +
            '						</div>' +
            '						' +
            '						<div class="flipclock prox-r flt hourly"></div>' +
            '						' +
            '						' +
            '							<span class="fa-angle-right f-22 counterColor lh-40  mar-10-l "></span>' +
            '						' +
            '					</div>' +
            '					' +
            '				</div>' +
            '			</a>' +
            '			</div>' +
            '		</div>' +
            '	</div>' +
            '</div>');
        $(document).trigger("pre-header-loaded");
        clock = $('#header-counter .flipclock').FlipClock(secdiff, {
            clockFace: 'HourlyCounter',
            countdown: true,
            showSeconds: true,
            callbacks: {
                stop: function () {
                }
            }
        });
        $("#header-counter .flip-clock-label").remove();
    });
    setTimeout(function () {
        $("#header-counter").removeClass("overflow-0");
    }, 100);
}, 1000);
ebates.search = ebates.search || {};
ebates.search.getSearchSessionId = function (increment) {
    var searchSession;
    if (!window.localStorage) {
        return 0;
    }
    searchSession = jQuery.parseJSON(window.localStorage.searchSession) || {};
    try {
        if (!searchSession || searchSession.sessionId !== ebates.session.id) {
            searchSession.sessionId = ebates.session.id;
            searchSession.id = 1;
            window.localStorage.searchSession = JSON.stringify(searchSession);
        } else if (increment) {
            searchSession.id += 1;
            window.localStorage.searchSession = JSON.stringify(searchSession);
        }
    } catch (e) {
        return searchSession.id || 1;
    }
    return searchSession.id;
};
ebates.search.sendStats = function (data, cb) {
    var action = data.et + (ebates.search.variation ? (' - ' + ebates.search.variation) : ''),
        gaData;
    gaData = ['send', 'event', 'PCS', action, JSON.stringify(data)];
    data.ec = 'PCS';
    ebates.search.variation && (data.v = ebates.search.variation);
    data.url = [window.location.pathname, window.location.search].join('');
    data.dt = '$isTablet' === 'YES' && 'tablet' || 'desktop';
    cb && gaData.push({hitCallback: cb});
    $(document).trigger('stats', {
        data: gaData,
        map: {external: data}
    });
    return true;
};
ebates.search.go = function (href, navId) {
    navId && $(document).trigger('set-nav-id', [ebates.stats.parentNavId + '|' + navId]);
    window.location.href = href;
};
ebates.search.queryFilter = function (q) {
    return q.replace(/[^\w'"$?!.,+@ -]/g, ' ').replace(/( )+/g, ' ');
};
var lyftCB = '$0.20';
ebates.uberFlag = false;

window.addEventListener('DOMContentLoaded', function () {
    ebates.suggestUrl = "search.ecbsn.com/store/" + "suggest";
    $('#store_name').one('focus', function () {
        ebates.js.require("/dist/static/rev/search/desktop_product_search-bbb6a1f315.js");
    });
});
var isLoaded = false;
$(".account-menu, .hotels-account-menu").on("mouseenter", function () {
    if (isLoaded == false) {
        jQuery.get("/social-connection.htm", {}, "json").done(
            function (res) {
                jQuery.each(res, function (key, val) {
                    if (key == "CashPending") {
                        jQuery(".pending-cb-amount").html(val);
                    } else if (key == "DisplayConnect" && val == "true") {
                        jQuery(".connect").removeClass("hide");
                    } else if (key == "DisplayFB" && val == "false") {
                        jQuery(".fb-btn").removeClass("hide");
                    } else if (key == "DisplayGP" && val == "false") {
                        jQuery(".gp-btn").removeClass("hide");
                    }
                });
                isLoaded = true;
            }
        );
    }
});
var browserUrlInfo = "";
var fbPromoValue = "";
document.addEventListener('DOMContentLoaded', function () {
    var urlPath = $(location).attr('pathname');
    var urlParams = $(location).attr('search');
    browserUrlInfo = urlPath + urlParams;
    if (browserUrlInfo == "/") {
        browserUrlInfo = "/index.htm";
    }
    if ($('input[name="urlIdentifier"]').closest("form")) {
        var urlIdentifier = $('input[name="urlIdentifier"]').val();
        if (urlIdentifier != null && urlIdentifier.length > 0) {
            $('input[name="urlIdentifier"]').val(browserUrlInfo + "|" + urlIdentifier);
        } else {
            $('input[name="urlIdentifier"]').val(browserUrlInfo);
        }
    }
});
(function () {
    ebates.js.require("/global_files/js/jquery/plugins/jail/jail.fixed.0.9.5.min.js", function () {
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
var ebates = ebates || {};
ebates.zChatCfg = ebates.zChatCfg || {};
ebates.zChatCfg.account_key = '46tEskttLohUOLau1Ro9XkMCatT3obht';
ebates.zChatCfg.visitor = {};
ebates.zChatCfg.visitor.display_name = 'Minh';
ebates.zChatCfg.visitor.email = 'nguyennhuminh1208@gmail.com';
if (!ebates.zChatCfg.visitor.display_name) {
    ebates.zChatCfg.visitor.display_name = 'nguyennhuminh1208';
}
ebates.zChatCfg.visitor.userStatus = 'REGISTERED_NON_SHOPPER';
window.addEventListener("DOMContentLoaded", function () {
    !document.querySelector('.no-zendesk-chat-widget') && ebates.js.require("/static/chat/web-sdk-1.1.3.min.js", function () {
        ebates.js.require("/dist/static/rev/zendesk_chat/ebates_zendesk_chat-bf6b5dde49.js");
    });
});
ebates = ebates || {};
ebates.createPasswordMessage = '' === 'true' ? true : false;
ebates.state = ebates.state || {};
//# sourceMappingURL=segment-9df32e2d48.js.map
