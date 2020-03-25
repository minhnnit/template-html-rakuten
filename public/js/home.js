ebates = ebates || {};
ebates.stats = ebates.stats || {};
ebates.stats.targetPage = decodeURIComponent("/index.jsp");
if (ebates.cookie.get('enableApple')) {
    $('<style>.social-v2-desktop .fb-custom-btn{top:56px;display: inline-flex;}</style>').appendTo($('body'));
    $('.apple-signin').removeClass('hide');
}
$(document).ready(function () {
    var home_ec = 'Desktop Home Page', home_su_et = 'Desktop SU Step 1';
    var emailInputCtr = 0, pwdInputCtr = 0;
    $('.social-v2-desktop .google-join').attr({
        'data-ec': home_ec,
        'data-ea': 'Google - Click',
        'data-et': home_su_et,
        'data-event-signature': 'ec,ea,et'
    });
    $('.social-v2-desktop .fb-join').attr({
        'data-ec': home_ec,
        'data-ea': 'Facebook - Click',
        'data-et': home_su_et,
        'data-event-signature': 'ec,ea,et'
    });
    $('.social-v2-desktop .fb-join').attr({
        'data-ec': home_ec,
        'data-ea': 'Did someone refer you? - Click',
        'data-et': home_su_et,
        'data-event-signature': 'ec,ea,et'
    });


    function showSearchFrom() {
        var form = $('.h-search-form');
        if ($(window).scrollTop() > $('.welcome').innerHeight()) {
            form.animate({'opacity': 1}, 800);
            $(window).off('scroll-throttle', showSearchFrom);
        }
    }

    function restoreStickyHeader() {
        if ($(window).scrollTop() > 30) {
            $('.header-wrapper').removeClass('minimize');
            $(window).off('scroll-throttle', restoreStickyHeader);
        }
    }

    function detectScroll() {
        if ($(window).scrollTop() > 500) {
            $(document).trigger('stats', {
                data: ['send', 'event', home_ec, 'Scroll Below Fold'],
                map: {
                    external: {ec: home_ec, ea: 'Scroll Below Fold'},
                    optimizely: 'scroll_below_fold'
                }
            });
            $(window).off('scroll-throttle', detectScroll);
        }
    }

    ebates.detectOnceElementInView = function (el, m) {
        var listener = function () {
            if (ebates.UI.isInView(document.querySelector(el))) {
                $(document).trigger('stats', {
                    data: ['send', 'event', m.external.ec, m.external.ea],
                    map: m
                });
                $(window).off('scroll-throttle', listener);
            }
        }
        $(window).on('scroll-throttle', listener);
    }

    $(window).on('scroll-throttle', restoreStickyHeader);
    $(window).on('scroll-throttle', showSearchFrom);
    $(window).on('scroll-throttle', detectScroll);
    ebates.detectOnceElementInView('#promo', {
        external: {
            ec: home_ec,
            ea: 'Scroll to Promo'
        }, optimizely: 'scroll_to_promo'
    });

    //show popup for t & C and privacy policy
    $('body').on('click', '.g119-terms .eb-popup,.no-modal-terms', function () {
        var url = $(this).attr('data-url');
        var termClasses = ['w-415', 'eb-legal-popup', 'pad-5', 'f-left', 'pad-25-t', 'absolute', 'border-black', 'bg-w'];
        var container, modalOps;
        container = $($(this).attr('data-parent'));
        if (container.length < 1) {
            container = $(this).parent();
        }
        modalOps = {
            bg: {use: false},
            css: {files: null},
            url: url,
            classes: {
                toAdd: termClasses,
                toRemove: ['border-grn-t-5', 'fixed']
            },
            container: container[0]
        },
            eventName = $(this).attr('data-event');
        if (container && container.attr('data-url-loaded') !== url) {
            $(document).trigger('susi-event', ['click', eventName || 'Legal']);
            ebates.js.require(ebates.src.modal, function () {
                container.attr('data-url-loaded', url);
                ebates.UI.modal('Loading...', modalOps, {
                    close: function () {
                        container.attr('data-url-loaded', '');
                    },
                    ajax: {
                        done: function () {
                            $('a.top').off('click');
                            $('a.top').on('click', function () {
                                $(this).parent().parent().animate({scrollTop: 0}, 'fast');
                            });
                        }
                    }
                });
            });
        }
    });

    $('input[name="ebates.signup.promo"]').each(function () {
        var initialGCSelection;
        if ($(this).is(':checked')) {
            initialGCSelection = $(this).val();
            setTimeout(function () {
                $('.eb-form-home-inlinesu input[type="hidden"][name="ebates.signup.promo"]').attr('value', initialGCSelection);
            }, 100)

        }
    })
    try {
        window.localStorage.setItem('auth_source', 'from-page-load');
    } catch (e) {
    }

    $('.opt-mid-join-now').on('click', function () {
        $(window).scrollTop(0);
        $('input[name="email_address"]')[0].focus();
    });
    $("#home-su-form-wrap").on("click", '.gc-module-wrap>div.col-half', function () {
        var gcSelection = $(this).find('input[name="ebates.signup.promo"]');
        $('.eb-auth-form>form').find('input[name="ebates.signup.promo"]').attr('value', gcSelection.val());
    });

    function addSuFormEvents() {
        $('#home-su-form-wrap').one('input', '.susi-email-field input', function (e) {
            var dw_name = 'Email Insert Text';
            $(document).trigger('stats', {
                data: ['send', 'event', home_ec, dw_name, ''],
                map: {
                    external: {ec: home_ec, ea: dw_name, et: home_su_et},
                    optimizely: 'email_insert_text'
                }
            });
        }).one('focus', '.susi-email-field input', function () {
            $(document).trigger('stats', {
                data: ['send', 'event', home_ec, 'Email Focus', ''],
                map: {
                    external: {ec: home_ec, ea: 'Email Focus', et: home_su_et},
                    optimizely: 'email_focus'
                }
            });
        }).one('input', '.susi-password-field input', function (e) {
            $(document).trigger('stats', {
                data: ['send', 'event', home_ec, 'Password Insert Text', ''],
                map: {
                    external: {
                        ec: home_ec,
                        ea: 'Password Insert Text',
                        et: home_su_et
                    }, optimizely: 'password_insert_text'
                }
            });
        }).one('focus', '.susi-password-field input', function () {
            $(document).trigger('stats', {
                data: ['send', 'event', 'Password Focus', ''],
                map: {
                    external: {
                        ec: home_ec,
                        ea: 'Password Focus',
                        et: home_su_et
                    },
                    optimizely: 'password_focus'
                }
            });
        });
        if (ebates && ['Chrome', 'Safari'].indexOf(ebates.getBrowser().name) > -1) {
            document.getElementById('home-su-form-wrap').addEventListener('input', function (e) {
                setTimeout(function () {
                    try {
                        if (e.target.matches(':-webkit-autofill') && $(e.target).is('.susi-email-field input:-webkit-autofill, .susi-password-field input:-webkit-autofill')) {
                            var ea = $(e.target).hasClass('email-address') ? 'Email Autofill' : 'Password Autofill';
                            $(document).trigger('stats', {
                                data: ['send', 'event', home_ec, ea],
                                map: {
                                    external: {
                                        ec: home_ec,
                                        ea: ea,
                                        et: home_su_et
                                    }
                                }
                            });
                        }
                    } catch (e) {
                        return false;
                    }
                }, 0);
            });
        } else {
            $('#home-su-form-wrap').on('input', '.susi-password-field input', function (e) {
                pwdInputCtr++;
            }).on('input', '.susi-email-field input', function () {
                emailInputCtr++;
            });
            $('#home-su-form-wrap').on('click', '.submit-button', function () {
                var email = $('#home-su-form-wrap .susi-email-field input').val();
                var pwd = $('#home-su-form-wrap .susi-password-field input').val();
                if (emailInputCtr <= 3 && ebates.regex.email.test(email)) {
                    $(document).trigger('stats', {
                        data: ['send', 'event', home_ec, 'Email Autofill'],
                        map: {
                            external: {
                                ec: home_ec,
                                ea: 'Email Autofill',
                                et: home_su_et
                            }
                        }
                    });
                }
                if (pwdInputCtr <= 3 && pwd.length >= 6) {
                    $(document).trigger('stats', {
                        data: ['send', 'event', home_ec, 'Password Autofill'],
                        map: {
                            external: {
                                ec: home_ec,
                                ea: 'Password Autofill',
                                et: home_su_et
                            }
                        }
                    });
                }
            });
        }

    }

    if ($('#home-su-form-wrap .susi-email-field input').length > 0) {
        addSuFormEvents()
    } else (
        $(document).on('auth-form-init-ui-ready', function () {
            setTimeout(addSuFormEvents, 200);
        })
    )
});
$(window).load(function () {
    $('.susi-captcha-cont').is(':visible') ? $(".hw-bonus-def").addClass("mar-110-t") : $(".hw-bonus-def").removeClass("mar-110-t");
});

$('body').on('click', '.show-join-overlay', function () {
    $('.eb-legal-popup .eb-modal-close').trigger('click');
});
ebates.form = ebates.form || {};
ebates.form.opts = ebates.form.opts || {};
ebates.form.opts["home-inlinesuflash-sale-"] = {
    captcha: {
        cb: function () {
            var refreshBtn = this.querySelector(".eb-captcha-img-reload"),
                newRefreshBtn;
            if (refreshBtn) {
                refreshBtn.classList.add("hide");
                newRefreshBtn = $('<span class="fa-repeat f-22 lh-22 iblk pointer refresh-icon mar-10-l"style="vertical-align: 16px;"></span>');
                newRefreshBtn.insertAfter(refreshBtn).on("click", function () {
                    $(document).trigger("susi-event", ["click", "Captcha reset"]);
                    refreshBtn.click();
                    $('.eb-captcha').val('');
                });
            }
            setTimeout(this.classList.remove.bind(this.classList, "op0"), 0);
        }
    },
    callback: function () {
        var form = this,
            jQform = $(form),
            secTokenReloadLimit = 3,
            secTokenReloadAttempts = 0,
            newfullyear = new Date().getFullYear();
        jQform.find('input:text').removeClass('lh-30').removeClass('w-380');
        jQform.find('input:password').removeClass('lh-30').removeClass('w-380');
        jQform.parents(".eb-modal").removeClass('op0');
        $("#foot").prepend('' +
            '<div class="container-fluid center eb-su-footer g119-terms" style="background:unset;">\n' +
            '   <div class="container-fixed mar-50-tb" style="width:630px;">\n' +
            '       <p class="terms f-12 lh-15 prox-r pad-15-b" style="color:#747474;">* To qualify for a Welcome Bonus, you must be a new Member and make minimum qualifying purchases totaling at least twenty-five dollars ($25) within ninety (90) days of becoming a Member.</a></p>\n' +
            '       <p class="terms f-12 lh-15 prox-r" style="color:#747474;">\n' +
            '                            By becoming a member, you agree to our <a class="eb-terms pointer nohover" href="" target="_blank" data-event="Terms">Terms & Conditions</a>.<br />\n' +
            '                            All trademarks are proprietary to Ebates Inc.<br />\n' +
            '       </p>\n' +
            '       <div>\n' +
            '                            <span class="f-12 lh-15 prox-r" style="color:#747474;">&copy;' + newfullyear + ' Ebates Inc. dba Rakuten. All rights reserved.</span> <a class="eb-privacy f-11 pointer nohover" href="" target="_blank" data-event="Privacy">Privacy Policy</a>\n' +
            '       </div>\n' +
            '    </div>\n' +
            '</div>'
        );

        jQform.on('reload-csrf-token', function (e, msg) {
            if (secTokenReloadLimit > secTokenReloadAttempts) {
                jQuery.get("/ajax/getCsrfParam.htm", {}, "text").done(function (r) {
                    var secTokField = jQform[0].querySelector('input.eb-sec-token'),
                        submitButton = jQform[0].querySelector('.submit-button');
                    secTokenReloadAttempts++;
                    if (r && secTokField && submitButton) {
                        jQform[0].classList.remove('submission-in-progress');
                        if ($('.susi-captcha-cont').is(':visible') && $(".eb-captcha-img-reload").length > 0) {
                            $('.refresh-icon').click();
                        }
                        secTokField.setAttribute('value', r.trim());
                        $('.susi-captcha-cont').is(':visible') ? $('.auth-err').html(msg).removeClass('hide') : submitButton.click();
                    } else {
                        $('.auth-err').html(msg).removeClass('hide');
                    }
                });
            } else {
                try {
                    window.localStorage.setItem('timed_out', '1');
                } catch (e) {
                }
                window.location.reload();
            }
        });

        jQform.on("err-msg", function (e, msg, doReload) {
            if (msg === "Your account is currently unavailable. Please contact Customer Care for assistance.") {
                $('.auth-err').html("Your account is currently unavailable. Please contact Member Services for assistance.").removeClass('hide');
            } else {
                doReload && jQform.trigger('reload-csrf-token', [msg]);
            }
        });

        $(document).trigger('form-ready', ["home-inlinesuflash-sale-"]);
        jQform.addClass('init-done');
    }
};
ebates.js.require(ebates.src.form.factory, function () {
    setTimeout(function () {
        var theForm = document.getElementById("eb-form-1585049051025"),
            urlIdField, GOOGLE_SDK = 'https://apis.google.com/js/api.js';
        if (theForm) {
            ebates.form.init.bind(theForm, ebates.form.opts["home-inlinesuflash-sale-"])();
            urlIdField = theForm.querySelector("input[name=urlIdentifier]");
            urlIdField && (urlIdField.value = location.pathname + location.search + "|" + "home-inlinesu" + ("flash-sale-" ? " - flash-sale-" : ""));
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
                                    external: {
                                        ec: ec,
                                        ea: 'Error Message',
                                        el: d,
                                        et: et
                                    },
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