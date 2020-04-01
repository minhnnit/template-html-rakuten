var allstores = 'v2',
    doc = $(document);
doc.trigger('stats', {
    data: [],
    map: {external: {ec: 'Store page', ea: 'view-cash-back-terms', el: allstores}}
});
ebates.js.require(ebates.src.expander2, function () {
    var expandOps = {text: "See", more: " More", less: " Less", lines: 2}; //specify number of lines
    $(".expander-terms").expander2(expandOps);
});

function cbevent() {
    if ($('.store-cb-terms').find('a') && $('.expander2').length > 0) {
        $('.store-cb-terms .expander2').attr({
            'data-event-signature': 'ec,et,el',
            'data-ec': 'Store page',
            'data-et': 'click-cash-back-terms',
            'data-el': allstores
        });
    }
}
setTimeout(cbevent, 3000);
window.addEventListener('DOMContentLoaded', function () {
    function isButtonQualifies(callback) {
        if (ebates.button.browser === 'unknown') {
            callback(false);
        } else {
            setTimeout(function () {
                callback(document.querySelector('ebatestoolbar') ? false : true);
            }, ebates.getBrowser().name === 'Edge' ? 2500 : 700);
        }
    }
    isButtonQualifies(function (qualifies) {
        if (!qualifies) {
            return;
        }
        $('.stores-button-upsell').removeClass('hide');
        var jQDoc = $(document);
        ebates.js.require("./js/storeDetail/button-26e4094f33.js"), function () {
            var buttonUrl = ebates.button.getListing().extensionURL + 'merchant_banner',
                ampButtonViewModuleEvent = {
                    eventType: 'View Module',
                    eventProps: {module_type: 'Button Banner', module_name: 'Button'}
                };
            $('.store-coupons a.browserButtonLink').attr('href', buttonUrl);
            document.dispatchEvent(new CustomEvent('stats-event', {detail: {map: {amp: ampButtonViewModuleEvent}}}));
            jQDoc.trigger('stats', {
                map: {
                    external: {
                        ec: 'Button',
                        et: 'Show Merchant Upsell Banner',
                        el: ebates.button.browser
                    }
                }
            });
            jQDoc.on('click', '.store-coupons .browser-button', function () {
                jQDoc.trigger('stats', {
                    map: {
                        external: {
                            ec: 'Button',
                            et: 'Click Merchant Upsell Banner',
                            el: ebates.button.browser
                        }
                    }
                });
            });
            $(document.body).on('click', 'a.browserButtonLink', function () {
                ebates.cookie.set('extension-install-source', 'merchant_banner');
            });
        };
    });
});
$(document).ready(function () {
    if (document.queryCommandSupported('copy') && document.queryCommandSupported('cut')) {
        function initializeCouponClickToCopy() {
            ebates.js.require("./js/storeDetail/clip.1.0.0.min.js"), function () {
                if ($('#store-coupons').length > 0) {
                    $('.coupon-code').each(function () {
                        var outer, inner, left, prev = $(this).prev();
                        if ($(this).attr('data-clipboard-text')) {
                            inner = $(this).find('span').offset().left;
                            if (prev.length == 0) {
                                prev = $(this);
                            }
                            outer = prev.offset().left;
                            left = inner - outer - 33 + 'px';
                            $(this).find('.copy-coupon-code-tooltip').css('cssText', "margin-left:" + left);
                        }
                    });
                }
                var clipboard = new Clipboard(".coupon-code");
                clipboard.on('success', function (e) {
                    var storeName = $(".fav-lg,.fa-heart").attr("data-click-label");
                    $(document).trigger('stats', {data: ['send', 'event', 'Store Page', 'Click copy coupon', storeName]});
                    if ($(e.trigger).find('.copy-coupon-code-tooltip').length < 1) {
                        return;
                    }
                    $(e.trigger).addClass('expand').find('.copy').html('<i class="fa flt fa-check f-14 lh-14 f-white pad-5-r" aria-hidden="true"></i>Copied to clipboard');
                    if (!$(e.trigger).find('.copy-coupon-code-tooltip').hasClass('expand')) {
                        var mleft = $(e.trigger).find('.copy-coupon-code-tooltip').css('margin-left').replace('px', '') - 30.5 + 'px !important';
                        if ($('#store-coupons').length > 0) {
                            $(e.trigger).find('.copy-coupon-code-tooltip').addClass('expand').css('cssText', "margin-left:" + mleft);
                        } else {
                            $(e.trigger).find('.copy-coupon-code-tooltip').addClass('expand');
                        }
                    }
                });
            };
            $('.coupon-code').on('mouseleave', function () {
                $(this).find('.copy').html('Click to copy');
                $(this).find('.copy-coupon-code-tooltip').removeClass('expand');
                if ($('#store-coupons').length > 0) {
                    var outer, inner, left, prev = $(this).prev();
                    if ($(this).attr('data-clipboard-text')) {
                        inner = $(this).find('span').offset().left;
                        if (prev.length == 0) {
                            prev = $(this);
                        }
                        outer = prev.offset().left;
                        left = inner - outer - 33 + 'px';
                        $(this).find('.copy-coupon-code-tooltip').css('cssText', "margin-left:" + left);
                        ;
                    }
                }
            });
        }

        if ($('#coupons').length > 0) {
            function loadClipJSForCoupon() {
                if ($(window).scrollTop() > ($('#coupons').offset().top - window.innerHeight)) {
                    initializeCouponClickToCopy();
                    $(window).off('scroll', loadClipJSForCoupon);
                }
            }

            $(window).on('scroll', loadClipJSForCoupon);
            loadClipJSForCoupon();
        } else {
            initializeCouponClickToCopy();
        }

    } else {
        if ($('#store-coupons').length > 0) {
            $('.coupon-code').each(function () {
                var outer, inner, left, prev = $(this).prev();
                if ($(this).attr('data-clipboard-text')) {
                    inner = $(this).find('span').offset().left;
                    if (prev.length == 0) {
                        prev = $(this);
                    }
                    outer = prev.offset().left;
                    left = inner - outer - 49 + 'px';
                    $(this).find('.copy-coupon-code-tooltip').css('cssText', "margin-left:" + left);
                }
            });
        }
        if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
            $('.coupon-code .copy').html('Press ⌘-C to copy').css('width', '115px');
        } else {
            $('.coupon-code .copy').html('Press Ctrl-C to copy').css('width', 'auto');
        }
    }
});
$(document).ready(function () {
    ebates.js.require("./js/storeDetail/component-74427aa06d.js"), function () {
        var merchant = "com.ebates.webpub.impl.merchant.MerchantImpl@1d427b4a",
            merchantId = "8378",
            merchantName = "qvc.com",
            branchLinkOptions = {
                sessionId: "aaaJ2bzdfbFjvagyprkex",
                merchantId: merchantId,
                specialId: ""
            },
            textId = merchant ? ebates.helpers.forms.getTextId('app-only-with-store', merchantId) : ebates.helpers.forms.getTextId('app-only'),
            linkTextingOptions = {};
        ebates.helpers.forms.registerForm({
            formId: '#text-app-download',
            button: '.send-sms-btn',
            position: 'left',
            linkTextId: textId,
            entity: {"location": "Store", "type": "Store Page", "storeName": merchantName},
            inlineErrorSelector: ".error-msg-store",
            linkTextingOptions: linkTextingOptions,
            branchLinkOptions: branchLinkOptions
        });
    };
});
ebates.js.require(ebates.src.expander2, function () {
    $(".long-desc").expander2({height: 35, text: 'See', more: ' More', less: ' Less'});
});
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
    ebates.js.require("./js/storeDetail/jail.fixed.0.9.5.min.js"), function () {
        $('img.lazy').asynchImageLoader();
    };
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
ebates.js.require("./js/storeDetail/store_landing-683c862d6e.js"), ("./js/storeDetail/w_favorites-750b12a817.js");
(function () {
    $(function () {
        var merchantId = "8378";
        var entities = [{
            entityType: "Merchant Store Page Visit",
            instanceId: "userId",
            dynamicEntityType: "",
            dynamicEntry: merchantId
        }];
        $(document).trigger("stats", {
            data: ["send", "event", "/merchant-store-page-visit", "pageview"],
            entities: entities
        });
    });
})();
var fb_btn_new, fb_btn = $('.eb-form-layout a.fb-join'),
    gg_btn = $('.eb-form-layout a.google-join'), g_height = gg_btn.height(),
    fb_btn_width = "354px";

function updateFBUI() {
    FB.getLoginStatus(function (r) {
        var appId = document.querySelector('meta[property=\'fb:app_id\']').getAttribute('content');
        if (fb_btn_width.indexOf('px') < 0) {
            fb_btn_width = gg_btn.width() - 6 + 'px';
        }
        if (['/editUserInfos.do', '/signUp.do', '/auth/getLogonForm.do'].indexOf(window.location.pathname) > -1 && ebates.stats && ebates.stats.device === 'M') {
            fb_btn_width = window.innerWidth - 26 + 'px';
        }
        fb_btn_new = '<div class="ht-50 pos-abs fb-custom-btn"><div class="round3 fb-login-button ht-40 mar-10-b"  data-width="' + fb_btn_width + '" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div><div id="fb-join-fac" class="pos-abs pointer ht-40" style="left:85px;width:354px;margin-top:-50px"></div></div>';

        if (r && r.status && r.status === 'not_authorized') {
            fb_btn.after(fb_btn_new);
            FB.init({
                appId: appId,
                cookie: true,
                xfbml: true,
                oauth: true,
                version: 'v2.12'
            });
            setTimeout(function () {
                $('.fb-custom-btn').prev('.fb-custom-btn').hide();
            }, 0)
            $('body').on('click touchstart', '#fb-join-fac', function () {
                fb_btn[0].click()
            });
            fb_btn.parent().addClass('pos-rel');
            if (fb_btn.parent().height() !== 0) {
                fb_btn.parent().css('height', fb_btn.parent().height());
            }
            $('.fb-login-button').parent().animate({opacity: 1}, 300);
            fb_btn.animate({opacity: 0}, 300);
            setTimeout(function () {
                // Revert back to default button after 2 seconds. Incase FB does not update the button.
                if (!$(".fb-login-button").attr("fb-iframe-plugin-query")) {
                    $('.fb-login-button').parent().animate({opacity: 0}, 500);
                    fb_btn.animate({opacity: 1}, 500);
                }
            }, 2500);
        }
    });
}

function updateFBbyResponse() {
    if (typeof FB !== 'undefined') {
        updateFBUI()
    } else {
        $(document).one('fb-ready', function () {
            updateFBUI()
        });
    }
}

if (["/", "/index.htm", "/index.jsp", "/index.do"].indexOf(location.pathname) > -1) {
    updateFBbyResponse();
} else {
    if (typeof FB !== 'undefined') {
        updateFBUI();
    } else {
        ebates.js.require(ebates.src.form.fb, updateFBbyResponse);
    }
}
ebates.form = ebates.form || {};
ebates.form.opts = ebates.form.opts || {};
ebates.accountsync = ebates.accountsync || {};
ebates.form.opts["Store-Overlays"] = {
    captcha: {
        cb: function () {
            var refreshBtn = this.querySelector(".eb-captcha-img-reload"),
                newRefreshBtn;
            if (refreshBtn) {
                refreshBtn.classList.add("hide");
                newRefreshBtn = $('<span class="fa-repeat f-22 lh-22 iblk pointer refresh-icon"></span>');
                newRefreshBtn.insertAfter(refreshBtn).on("click", function () {
                    $(document).trigger("susi-event", ["click", "Captcha reset"]);
                    refreshBtn.click();
                });
            }
            setTimeout(this.classList.remove.bind(this.classList, "op0"), 0);
        }
    },
    callback: function () {
        var form = this,
            pwdli = $(".susi-password-field", form),
            pwdfield = $(".susi-password-field input", form),
            overlaytype = "",
            next = function () {
                pwdli.removeClass("hide")
                pwdfield.addClass("validation-required");
                $(".susi-captcha-cont-wrapper").removeClass("hide");
                $(form).trigger("clear-messages");
                pwdfield.trigger("validation-message", ["An account already exists with that email address. Please enter your password to sign in.<a class='green cursor forgot-pwd-modal-link'> Forgot Password?</a>"]);
                $("input[name='autoGeneratePassword']").val("");
            };
        setTimeout(function () {
            window.scrollTo(0, 0);
            $(form).parents(".eb-modal").removeClass("op0");
            pwdfield.removeClass("validation-required");

        }, 0);
        $(form).on("err-msg", function (e, mesg, reload) {
            if (mesg === "Oops. The email address already exists. Please try again or sign in.") {
                $(".susi-refer-cta").addClass("hide");
                ebates.accountsync.email = $("input[name='email_address']").val();
                $('.eb-auth-form form').removeClass('e-exists');
                next();
            }
        });
        if ($(".auth-err").is(":visible")) {
            $(".auth-err").addClass("hide");
            var msg = $(".auth-err").text();
            if (msg.indexOf('Korea') > 0) {
                msg = "This is a Sign In for existing " + ebates.rakutenmode.currentBrandName + ".com users. If you would like to Sign Up for a new account, please visit <a href='/kr/' class='f-grn'>Ebates Korea</a>.";
            }
            $('.gc-auth-err').removeClass('hide').html(msg);
        }
        try {
            window.localStorage.setItem('auth_source', 'from-page-load');
        } catch (e) {
            return false;
        }
    },
    beforeSubmit: function (submit) {
        if ((ebates.accountsync.email == $("input[type ='email']").val()) || ($('.eb-auth-form form').hasClass('e-exists') && $(".susi-password-field", form).is(":visible"))) {
            var pwdli = $(".susi-password-field", form), form = this,
                pwdfield = $(".susi-password-field input", form);
            $('.eb-auth-form form').attr('action', '/signInAjax.do');
            $("input[type ='email']").attr('name', 'username');
            ;

        } else {
            $('.eb-auth-form form').attr('action', '/signUpAjax.do');
            $("input[type ='email']").attr('name', 'email_address');
        }
        submit();
    }
};
ebates.js.require(ebates.src.form.factory, function () {
    setTimeout(function () {
        var theForm = document.getElementById("eb-form-1585157468170"),
            urlIdField, GOOGLE_SDK = 'https://apis.google.com/js/api.js';
        if (theForm) {
            ebates.form.init.bind(theForm, ebates.form.opts["Store-Overlays"])();
            urlIdField = theForm.querySelector("input[name=urlIdentifier]");
            urlIdField && (urlIdField.value = location.pathname + location.search + "|" + "Store-Overlays" + ("" ? " - " : ""));
            ebates.js.require(ebates.src.form.google, function () {
                ebates.js.require(GOOGLE_SDK, function () {
                    gapi.load('auth2');
                });
            });
            setTimeout(function () {
                var formDOM, jQForm, template, ec, et;
                formDOM = theForm.querySelector('form');
                jQForm = $(formDOM);
                if (ebates.stats && ebates.stats.device === 'M') {
                    ec = 'MW Sign-up';
                    et = 'MW SU Step 1';
                } else {
                    ec = 'Desktop Sign-up';
                    et = 'Desktop SU Step 1';
                }
                if (formDOM) {
                    formDOM.pwdStrengthUIFunc = {
                        showPwdTooltip: function (pwd_length, pwd_score) {
                            jQForm.find('.pwd-tooltip').remove();
                            jQForm.trigger('clear-messages');
                            var sRating, className,
                                ratingList = ['Very Weak', 'Weak', 'Fair', 'Strong', 'Very Strong'],
                                classList = ['f-gry-dk-8', 'error-red', 'darkorange', 'f-grn', 'f-grn'];
                            if (pwd_length === 0) {
                                jQForm.find('.pwd-tooltip').remove();
                                return;
                            }
                            if (pwd_length < 8) {
                                sRating = 'Too Short';
                                className = 'f-gry-dk-8'
                            } else {
                                sRating = ratingList[pwd_score];
                                className = classList[pwd_score];
                            }
                            if (ebates.stats && ebates.stats.device === 'M') {
                                template = '<div class="flt mar-10-t pwd-tooltip">Password Strength:<span class="score-rating prox-b ' + className + ' mar-5-r pad-5-l">' + sRating + '</span>' +
                                    '<div class="icon fa-info-circle f-gry-c pointer rel" style="top:1px;" data-toggle="modal" data-target="#pwd-tip-modal"></div>';
                            } else {
                                template = '<div class="border pad-20 pwd-tooltip f-14 lh-18 blk-reg shadow-4 round3"><span class="score-rating prox-b ' + className + ' mar-5-b iblk">' + sRating + '</span><br />Strong passwords are long and hard to guess. Try using several words, and avoid common phrases.</div>';
                            }
                            jQForm.find('.password').after(template);
                        },
                        removePwdTooltip: function () {
                            jQForm.find('.pwd-tooltip,#pwd-tip-modal').remove();
                        }
                    };
                    jQForm.on('short-password', function () {
                        $(document).trigger('stats', {
                            data: ['send', 'event', ec, 'Error Message', 'Password too short.'],
                            map: {
                                external: {
                                    ec: ec,
                                    ea: 'Error Message',
                                    el: 'Password too short.',
                                    et: et
                                },
                                optimizely: 'short_password'
                            }
                        });
                    }).on('weak-password', function () {
                        $(document).trigger('stats', {
                            data: ['send', 'event', ec, 'Error Message', 'Weak Password.'],
                            map: {
                                external: {
                                    ec: ec,
                                    ea: 'Error Message',
                                    el: 'Weak Password.',
                                    et: et
                                },
                                optimizely: 'weak_password'
                            }
                        });
                    }).on('err-msg', function (e, d) {
                        if (ebates.form.strings.password.weak !== d) {
                            $(document).trigger('stats', {
                                data: ['send', 'event', ec, 'Error Message', d],
                                map: {
                                    external: {ec: ec, ea: 'Error Message', el: d, et: et},
                                    optimizely: 'error_message'
                                }
                            });
                        }
                    });
                    ebates.src.form.passwordValidator && ebates.js.require(ebates.src.form.passwordValidator, function () {
                        ebates.form.add_pwd_valid(formDOM, jQForm);
                        if (ebates.stats && ebates.stats.device === 'M') {
                            $('body').append('<div class="modal fade prox-r" id="pwd-tip-modal" style="margin-top:60px;" tabindex="-1" role="dialog">' + '<div class="modal-dialog"><div class="modal-content border-0 w-300 center-div modal-shadow"><div class="modal-body center"><div class="frt" data-dismiss="modal"><i class="fa fa-times f-gry-c lh-18 f-18"></i></div>' + '<div class="pad-5-lr mar-20-tb">Strong passwords are long and hard to guess. <br />Try using several words, and avoid common phrases.</div></div></div></div></div>');
                        }
                    });
                }
            }, 0)
        }
    }, 0);
});