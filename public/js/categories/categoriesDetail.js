window.addEventListener('DOMContentLoaded', function () {
    function initRightRailStickyMod() {
        var sticky = $("#side-scroll-target"), bottom = $("#foot"), margin = 15;
        if (location.pathname != '/travel-vacations/lodging' && location.pathname != '/travel-vacations/vacation-packages' && location.pathname != '/travel-vacations/car-rentals' && location.pathname != '/travel-vacations/flights-airfare') {
            sticky.offset().top + sticky.height() + margin < bottom.offset().top && setTimeout(
                jQuery.proxy(ebates.stickyModule, null, sticky, bottom, $("#side-scroll-top"), $("#header-main"), margin), 1000);
        }
    }

    if (('/coupons' === location.pathname || '/stores/all/index.htm' === location.pathname) && ebates.user.loggedIn) {
        $(document).on('btn_module_decided', initRightRailStickyMod);
    } else {
        initRightRailStickyMod();
    }
});
var ebates = ebates || {};
ebates.catPageScope = ebates.catPageScope || {};
ebates.catPageScope.alphaFilterSet = {};
var initializeStoreList = function () {
    //Filter handler
    for (var i = 65; i < 91; i++) {
        ebates.catPageScope.alphaFilterSet[String.fromCharCode(i)] = false;
    }
    ebates.catPageScope.alphaFilterSet['digit'] = false;
    $('#store-sort .store').each(function () {
        var c = $(this).find('.store-name').html().charAt(0).toUpperCase();
        if (/\d/.test(c)) {
            ebates.catPageScope.alphaFilterSet['digit'] = true;
        } else {
            ebates.catPageScope.alphaFilterSet[c] = true;
        }
    });
    for (var i in ebates.catPageScope.alphaFilterSet) {
        if (!ebates.catPageScope.alphaFilterSet[i]) {
            if (i === 'digit') {
                $('.alpha_filter.digit').addClass('inactive');
            } else {
                $('.alpha_filter.filter_' + i).addClass('inactive');
            }
        }
    }
    $(function () {
        $('.two-lines').each(function () {
            if ($(this).hasClass('.store-name') && $(this).html().length <= 29) {
                $(this).addClass('mar-25-t');
            }
        });
    })
    ebates.catPageScope.storeListByAlpha = $('#store-list-container').html();
    var cbMissingStore = [];
    $('.store-rebate').each(function () {
        if (!this.textContent) {
            cbMissingStore.push($(this).prev().prev().html());
        }
    });
    if (cbMissingStore.length > 0 && ebates.stats) {
        ebates.stats.sendDataError({
            'message': 'CashBack missing',
            'label': {"Merchants": cbMissingStore}
        });
    }

}

initializeStoreList();
$('div.loader').addClass('hide');
$('#sort-merchants .sort-by').on('click', function () {
    var e = $(this);
    if (e.hasClass('selected')) {
        return;
    }
    $('div.loader').removeClass('hide');
    setTimeout(function () {
        if (e.data('value') === 'alpha') {
            $('#store-list-container').html(ebates.catPageScope.storeListByAlpha);
        } else if (e.data('value') === 'cb') {
            if (!ebates.catPageScope.storeListByCb) {
                jQuery.get("/ajax/stores/sort.htm", {
                    sort: 'cb',
                    categoryid: '2'
                }).done(function (data) {
                    $('#store-list-container').html(data);
                    ebates.catPageScope.storeListByCb = data;
                    $('.alpha_filter.active').trigger('focus').trigger('click');
                });
            } else {
                $('#store-list-container').html(ebates.catPageScope.storeListByCb);
            }
        } else if (e.data('value') === 'popular') {
            if (!ebates.catPageScope.storeListByPopular) {
                jQuery.get("/ajax/stores/sort.htm", {
                    sort: 'popular',
                    categoryid: '2'
                }).done(function (data) {
                    $('#store-list-container').html(data);
                    ebates.catPageScope.storeListByPopular = data;
                    $('.alpha_filter.active').trigger('focus').trigger('click');
                });
            } else {
                $('#store-list-container').html(ebates.catPageScope.storeListByPopular);
            }
        }
        $('#sort-merchants .sort-by').removeClass('selected');
        e.addClass('selected');
        $('#store-sort .store').addClass('by-alpha').addClass('hide');
        $('.alpha_filter.active').trigger('focus').trigger('click');
        setTimeout(function () {
            $('div.loader').addClass('hide');
            ;
        }, 500);
    }, 200);
});


$('.alpha_filter').on('click', function () {
    if ($(this).hasClass('inactive')) {
        return;
    }
    $('.alpha_filter').removeClass('active');
    $(this).addClass('active');
    var filter = $(this).html();
    $('#store-sort .store').addClass('hide').removeClass('by-alpha');
    if (filter == 'ALL') {
        $('#store-sort .store').addClass('by-alpha');
    } else if (filter == '0-9') {
        for (var i = 0; i < 10; i++) {
            $('#store-sort .store.alpha_' + i).addClass('by-alpha');
        }
    } else {
        var c = filter.toLowerCase();
        $('#store-sort .store.alpha_' + c).addClass('by-alpha');
    }
    $('#store-sort .store.by-alpha').removeClass('hide');
    var leftRailHeight = 0;
    leftRailHeight = $('#right-blk').innerHeight() ? $('#right-blk').innerHeight() : $('#left-blk').innerHeight();
    $('#sort_and_filter_body').css('min-height', leftRailHeight + $('#side-scroll-target').innerHeight() - 20 + 'px');
});
$('.alpha_filter.inactive').on('click', function () {
    event.preventDefault();
});

if ($('.refine-link') < 1 && ebates.stats) {
    ebates.stats.sendDataError({
        'message': 'Category data missing'
    });
}
setTimeout(function () {
    if ($('.lyft-store').length > 0) {
        var lyftEc = 'Lyft', lyftEt = '';
        if (location.pathname === '/stores/all/index.htm') {
            lyftEt = 'All stores page';
        } else {
            lyftEt = 'Category page';
        }
        $(document).trigger('stats', {
            data: [],
            map: {external: {ec: lyftEc, et: lyftEt, ea: 'pageview'}}
        });
        $('.lyft-store').on('click', function () {
            $(document).trigger('stats', {
                data: [],
                map: {external: {ec: lyftEc, et: lyftEt, ea: 'Click lyft link'}}
            });
        });
    }
}, 2000)
ebates = ebates || {};
ebates.stats = ebates.stats || {};
ebates.stats.targetPage = decodeURIComponent("/clothing");
function FBCbebform1585347714214(response) {
    var formDiv = document.getElementById('eb-form-1585347714214'), suParams,
        form = formDiv.querySelector('form'), ajaxData = {},
        fb_auth_url = 'https://www.facebook.com/v2.12/dialog/oauth?',
        fb_redirect_url = $('meta[property=\'fb.app.redirect.url\']').attr('content');
    suParams = ebates.form && ebates.form.suParams(form),
        redirectParams = {}, oauthParams = {client_id: $('meta[property=\'fb:app_id\']').attr('content')};
    if (typeof fbPromoValue !== "undefined" && fbPromoValue !== "") {
        if (typeof fbsplitId !== "undefined" && fbsplitId !== "") {
            redirectParams["split_entry_id"] = fbsplitId;
        }
        redirectParams["ebates.signup.promo"] = fbPromoValue;
    }
    jQuery.each(suParams, function (key, value) {
        redirectParams[key] = value.replace(/\s/g, "_");
    });
    redirectParams["urlIdentifier"] = location.pathname + location.search;
    oauthParams["state"] = encodeURIComponent(jQuery.param(redirectParams));
    oauthParams["redirect_uri"] = fb_redirect_url;
    oauthParams['redirect_params'] = redirectParams;
    ajaxData._csrf = form.querySelector('input[name="_csrf"]').value;
    if (oauthParams['redirect_params']) {
        for (var key in oauthParams['redirect_params']) {
            ajaxData[key] = oauthParams['redirect_params'][key];
        }
    }

    if (response.authResponse) {
        if (response.status === 'connected') {
            ajaxData.accessToken = response.authResponse.accessToken;
            $.ajax({
                url: '/FBUserSignupOrLogin.do', data: ajaxData, datatType: 'json',
                success: function (res) {
                    if (JSON.stringify(res).indexOf('GDPR user') > -1) {
                        window.location.assign('/gdpr.htm');
                    }
                    if (res.status === 'success') {
                        window.location.assign(res.targetUrl || window.location.href);
                    } else {
                        if (fb_auth_url) {
                            window.location.assign(fb_auth_url);
                        }
                    }
                },
                error: function () {
                    window.location.assign(fb_auth_url + jQuery.param(oauthParams));
                }
            });
        }
    }
}
var fb_btn_new, fb_btn = $('.eb-form-layout a.fb-join'),
    gg_btn = $('.eb-form-layout a.google-join'), g_height = gg_btn.height(),
    fb_btn_width = "294px";

function updateFBUI() {
    FB.getLoginStatus(function (r) {
        var appId = document.querySelector('meta[property=\'fb:app_id\']').getAttribute('content');
        if (fb_btn_width.indexOf('px') < 0) {
            fb_btn_width = gg_btn.width() - 6 + 'px';
        }
        if (['/editUserInfos.do', '/signUp.do', '/auth/getLogonForm.do'].indexOf(window.location.pathname) > -1 && ebates.stats && ebates.stats.device === 'M') {
            fb_btn_width = window.innerWidth - 26 + 'px';
        }
        fb_btn_new = '<div class="ht-50 pos-abs fb-custom-btn"><div class="round3 fb-login-button ht-40 mar-10-b" data-onlogin="FBCbebform1585347714214" data-scope="public_profile,email" data-width="' + fb_btn_width + '" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div><div id="fb-join-fac" class="pos-abs pointer ht-40" style="left:365px;width:294px;margin-top:-50px"></div></div>';

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
ebates.form.opts["Categories-Walmart-Hero-201510"] = {
    captcha: {
        cb: function () {
            var refreshBtn = this.querySelector(".eb-captcha-img-reload"),
                newRefreshBtn;
            if (refreshBtn) {
                refreshBtn.classList.add("hide");
                newRefreshBtn = $('<span class="fa-repeat f-22 flt lh-22 mar-15-l iblk pointer refresh-icon"></span>');
                newRefreshBtn.insertAfter(refreshBtn).on("click", function () {
                    $(document).trigger("susi-event", ["click", "Captcha reset"]);
                    refreshBtn.click();
                });
            }
            setTimeout(this.classList.remove.bind(this.classList, "op0"), 0);
        }
    },
    callback: function () {
        var form = this;
        setTimeout(function () {
            window.scrollTo(0, 0);
            $(form).parents(".eb-modal").removeClass("op0");
        }, 0);

        if ($(".auth-err").is(":visible")) {
            $(".auth-err").addClass("hide");
            var msg = $(".auth-err").text();
            if (msg.indexOf('Korea') > 0) {
                msg = "This is a Sign In for existing " + ebates.rakutenmode.currentBrandName + ".com users. If you would like to Sign Up for a new account, please visit <a href='/kr/' class='f-grn'>Ebates Korea</a>.";
            }
            $('.gc-auth-err').removeClass('hide').html(msg);
        }

        $('img.lazy', '.eb-form-layout').asynchImageLoader({
            selector: $(".eb-modal-scroller"),
            speed: 100,
            effect: "fadeIn"
        });
    }
};
$(document).ready(function () {
    $('.gc-su-modal .gift-card-cont').on('click', function () {
        $('.gift-card-list input').attr('checked', false);
        $(this).prev().attr('checked', true);
    });
});
ebates.js.require(ebates.src.form.factory, function () {
    setTimeout(function () {
        var theForm = document.getElementById("eb-form-1585347714214"),
            urlIdField, GOOGLE_SDK = 'https://apis.google.com/js/api.js';
        if (theForm) {
            ebates.form.init.bind(theForm, ebates.form.opts["Categories-Walmart-Hero-201510"])();
            urlIdField = theForm.querySelector("input[name=urlIdentifier]");
            urlIdField && (urlIdField.value = location.pathname + location.search + "|" + "Categories-Walmart-Hero-201510" + ("" ? " - " : ""));
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
