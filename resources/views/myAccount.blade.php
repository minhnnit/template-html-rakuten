<?php $elementsHeader = 'elements.sub-header'; ?>
<?php $elementsFooter = 'elements.sub-footer'; ?>
@extends('app')
@section('content')
    {{--extend css--}}
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myAccount/account-r4-da7fc1c7d0.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myAccount/account-recovery-d2c35f7d5b.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myAccount/flipclock-2d1595c6e1.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myAccount/postshopping.1.0.2.a.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myAccount/myAccount.css")}}">
    {{--extend js--}}
    <script src="{{url("/js/action-button.js")}}"></script>
    <script src="{{url("/js/myAccount/account-3f192981e1.js")}}"></script>
    <script src="{{url("/js/myAccount/post-shopping-modal-f234dd0221.js")}}"></script>
    <script src="{{url("/js/myAccount/postshopping.1.0.2.min.js")}}"></script>
    <script src="{{url("/js/myAccount/select-address-type-a2c847a776.js")}}"></script>
    <script language="javascript" type="text/javascript"
            src="{{url("/js/myAccount/jquery.jcarousel.min.js")}}"></script>
    {{--<script language="javascript" type="text/javascript"
            src="{{url("/js/myAccount/myAccount.js")}}"></script>--}}
    <div class="tablet-content-body page-body">
        <div class="container-fluid prox-r">
            <div class="container-fixed account-page dashboard mar-20-b">
                <div class="blk-group cols">
                    <div id="left-blk" class="blk aside">
                        <div class="blk border-t-0 dashboard-left">

                            <div class="member-info blk">
                                <span class="member-welcome">Welcome,</span>
                                <span class="member-name">
					Minh
			</span>
                                <span class="member-since">
		Member since 4/1/20
	</span>
                                <span class="member-edit">
			<a href="" class="nohover">
				<span class="edit-icon fa-pencil"></span>Edit Profile
			</a>
		</span>
                            </div>
                            <div class="member-info blk">


                                <span class="member-lifetime">Lifetime Cash Back</span>
                                <span class="member-lifetime-cb">$0.00</span>
                                <a class="taf-add-more button primary ghost"
                                   href="" data-amp-evt-type="Visit Refer A Friend"
                                   data-amp-evt-sig="preceding_screen_name"
                                   data-amp-preceding_screen_name="Account" data-navigation-id="23015">
                                    Refer &amp; Earn $25+
                                </a>
                            </div>


                            <div class="blk blk-reg dashboard-nav pad-20-r pad-40-r pad-0-l pad-10-b pad-15-t border-l border-r border-b">
                                <ul class="bblk pad-15-b">
                                    <li id="tab-acct-dashboard" class="list-heading f-norm">
                                        <a href="" class="f-15 nohover lh-1">My
                                            Account</a>
                                    </li>
                                    <li id="tab-acct-favorites" class="f-norm">
                                        <a href="" data-navigation-id="23007"
                                           class="f-15 nohover">Favorite Stores</a>
                                    </li>
                                    <li id="tab-acct-current-st" class="f-norm">
                                        <a href="" class="f-15 nohover">Shopping
                                            Trips</a>
                                    </li>
                                    <li id="tab-acct-current-cb" class="f-norm">
                                        <a href="" class="f-15 nohover">
                                            Cash Back Balance
                                        </a>
                                    </li>
                                    <li id="tab-acct-bigfat-cb" class="f-norm">
                                        <a href="" class="f-15 nohover">Big
                                            Fat Check History</a>
                                    </li>
                                    <li id="tab-acct-settings" class="f-norm">
                                        <a href="" class="f-15 nohover">Account
                                            Settings</a>
                                    </li>
                                    <li id="tab-acct-wallet" class="f-norm">
                                        <a href="" class="f-15 nohover">My
                                            Wallet</a>
                                    </li>
                                    <li id="tab-acct-ebates-hotels" class="f-norm">
                                        <a href="" class="f-15 nohover">My Reservations</a>
                                    </li>
                                    <li id="tab-acct-email-subs" class="f-norm">
                                        <a href="" class="f-15 border-b nohover">Email Subscriptions</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div id="right-blk" class="blk main">


                        <div class="dashboard-welcome blk blk-reg border border-t-0 mar-10-b rel">
                            <div class="blk pad-40-l">
                                <a class="right remove-ovr frt mar-2-t-neg mar-2-r welcome-bnr pad-30-b pad-40-l"
                                   id="disable"><span class="fa-times lh-12 f-15"></span></a>
                                <h2 class="f-24 pad-45-t">
                                    Hi
                                    Minh!
                                    Welcome to your Cash Back Account.
                                </h2>
                                <p class="pad-15-t">Stay up-to-date with all your Cash Back Account information,
                                    Favorites, daily Hot Deals and notifications about Cash Back activity, special bonus
                                    offers and more.</p>
                                <p><a href="" data-navigation-id="22905"
                                      class="bblk nohover pad-20-t">Learn how to earn Cash Back at Rakuten <span
                                                class="arrow-grn arr-right"></span></a>
                                </p>
                            </div>
                        </div>
                        <div class="dashboard-cb blk blk-reg border mar-10-b">
                            <h2 class="border-b">My Cash Back Account</h2>
                            <div class="blk col-third border-r mar-20-tb center">
                                <ul class="pad-40-lr pad-20-tb">
                                    <li class="bblk pad-15-b rel prox-b f-18">Cash Back Balance</li>
                                    <li class="bblk f-40 f-grn pad-25-b lh-1">
                                        <a href="" data-navigation-id="22945" class="prox-b f-40 nohover">$0.00</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blk col-two-third mar-20-tb pad-50-l">
                                <span class="f-18 f-norm bblk pad-15-b mar-20-t prox-b">Don't miss out on your Big Fat Check!</span>
                                <span class="f-16 bblk">Earn just $5.01 (or more) to get your Big Fat Check.</span>
                                <span class="f-16 blurb bblk pad-10-t">
                        <a href="" data-navigation-id="22923" class="f-16 nohover">Learn More</a>
                    </span>
                            </div>
                        </div>
                        <div id="welcome-wrapper" class="blk mar-10-b module-init-view" data-send-view="amp"
                             data-view-amp-type="View Module" data-view-amp-signature="module_name,number_of_tiles"
                             data-view-module_name="Bonus" data-view-number_of_tiles="1">
                            <div id="welcome-bonus-h" class="blk pad-20 pad-15-tb border">
                                <div class="flt"><h3 class="f-white"><span class="fa-bell f-20 f-white pointer"></span>
                                        You have a <span class="prox-b f-white">$10 Walmart Gift Card</span> waiting for
                                        you.</h3></div>
                            </div>
                            <div id="welcome-bonus-b" class="blk pad-20 blk-reg border border-t-0">
                                <p>Get your $10 Walmart Gift Card when you make qualifying purchases totaling $25 or
                                    more by 6/30/20.</p>
                            </div>
                        </div>

                        <div class="button-upsell blk blk-reg border mar-10-b pad-30 rel flex al-center" style="">
                            <input class="button-upsell__reviews-input" type="hidden" value="42,035">
                            <a class="button-upsell__disable absolute pointer remove-ovr">
                                <span class="fa-times lh-12 f-15"></span>
                            </a>
                            <div class="button-upsell__content flex-grow-1">
                                <div class="flex" title="Average rating 4.9 out of 5">
                                    <div class="f-16 button-upsell__stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="button-upsell__reviews f-12 lh-24 mar-10-l">42,035 reviews</div>
                                </div>
                                <div class="prox-b f-20 lh-32">Want to earn even more Cash Back?</div>
                                <div class="f-14 lh-24">Save 30% more on average with the Rakuten Button added to your
                                    browser
                                </div>
                                <div class="f-12 lh-22">By clicking Add to <span class="button-upsell__browser-name">Chrome</span>
                                    you agree to the additional Rakuten Extension
                                    <a target="_blank" class="underline"
                                       href="https://www.rakuten.com/help/article/cash-back-shopping-program-terms-360002101668#browser-terms">Terms
                                        &amp; Conditions</a>
                                </div>
                            </div>
                            <a target="_blank" class="button primary toggle"
                               href="https://chrome.google.com/webstore/detail/chhjbpecpncaggjpdakmflnfcopglcmi?utm_source=account_page">Add
                                to <span class="button-upsell__browser-name">Chrome</span></a>
                        </div>
                        <script>
                            window.addEventListener('load', function () {
                                // TODO: shold be moved to global (potentially)
                                function isButtonQualifies(callback) {
                                    if (ebates.button.browser === 'unknown') {
                                        callback(false);
                                    } else {
                                        setTimeout(function () {
                                            callback(document.querySelector('ebatestoolbar') ? false : true);
                                        }, ebates.getBrowser().name === 'Edge' ? 2500 : 700);
                                    }
                                }

                                function fireEvent(ampEventType, extEventType) {
                                    $(document).trigger('stats', {
                                        data: [], map: {
                                            external: {ec: 'Button', el: 'browser', ea: extEventType},
                                            amp: {
                                                eventType: ampEventType,
                                                eventProps: {module_type: 'Button Banner', module_name: 'Button'}
                                            }
                                        }
                                    });
                                }

                                function jsUcfirst(str) {
                                    return str.charAt(0).toUpperCase() + str.slice(1);
                                }

                                isButtonQualifies(function (qualifies) {
                                    if (!qualifies || localStorage.getItem('button-accountt-upsell-disabled')) {
                                        return;
                                    }
                                    var el = $('.button-upsell');

                                    fireEvent('View Module', 'Show Button My Account Banner');

                                    el.find('.button-upsell__reviews').text((el.find('.button-upsell__reviews-input').val() || '38,297') + ' reviews');
                                    ebates.js.require("./js/myAccount/button-26e4094f33.js", function () {
                                        var link = ebates.button.getListing('account_page');
                                        el.find('.button').attr('href', link.extensionURL);
                                    });

                                    el.find('.button-upsell__browser-name').text(jsUcfirst(ebates.button.browser));

                                    el.find('.button').on('click', function () {
                                        ebates.button.setInstallSource({utm: 'account_page'});
                                        fireEvent('Click Module', 'Click Button My Account Banner');
                                    });

                                    el.find('.button-upsell__disable').on('click', function () {
                                        localStorage.setItem('button-accountt-upsell-disabled', '1');
                                        el.fadeOut();
                                        fireEvent('Dismiss Module', 'Close Button My Account Banner');
                                    });

                                    el.show();
                                });

                            });
                        </script>


                        <style>
                            .hoteToolTip {
                                right: -157px !important;
                                top: 65px !important;
                            }
                        </style>


                        <script type="text/javascript">$(".dashboard-bonus").remove();</script>
                        <div id="dd-fav-cont" class="dd-fav-cont">


                        </div>


                        <div class="favorites blk mar-10-b">
                            <div class="blk blk-reg pad-20 border">
                                <div class="col-half flt"><h2 class="f-24 f-norm flt shopping-trip-head">Favorite
                                        Stores</h2></div>
                                <div class="col-half frt">
                                    <form id="favForm" name="favForm" method="get" class="favForm rel">
                                        <input type="hidden" id="_csrf" name="_csrf"
                                               value="734ba358-55cd-4c1f-9799-098211e37655">
                                        <input type="hidden" name="isAjax" value="true">
                                        <input name="favquery" type="hidden" id="favquery" value="">
                                        <input name="positionfav" type="hidden" id="positionfav" value="submit">
                                        <input type="hidden" name="sup" value="sup_landing_merchant">
                                        <input type="hidden" name="cparent" value="true">
                                        <input type="hidden" id="counter" value="0">
                                        <input type="text" name="favinput" id="favinput" class="favinput border bg-gry"
                                               placeholder="Add all your Favorite Stores" value="" maxlength="255"
                                               tabindex="0">
                                        <button type="submit" name="addfav" id="addfav" disabled="disabled"
                                                class="button reg round-r int">Add
                                        </button>
                                        <div id="dash_ac"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="favslist blk blk-reg border border-t-0 rel">
                                <div class="pad-20 no-fav-txt">
                                    <p class="f-14">Add your favorites stores for easy shopping and personalized deals.
                                        When you see a <span class="fa-heart f-14 f-gry-dk2 v-top"></span>, click it and
                                        the store will be added to your favorites here. Get started by searching above
                                        for the stores you already love.</p>
                                </div>

                                <ul class="favslist-block bblk" id="favslist">


                                    <li class="clr">
                                        <div id="campaignfavstores" class="bblk bg-gry clr"><h4
                                                    class="lh-40 pad-20-lr f-gry-dk2">Recommended Favorite Stores</h4>
                                        </div>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="Amazon" data-merch="1">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="1"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/allStores/icon-100x27.gif")}}"
                                                 alt="Amazon" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            <span class="cb cbcol-nocb">No Discount</span>
                    </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="eBay" data-merch="3993">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="3993"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon-100x27-ebay.gif")}}"
                                                 alt="eBay" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 <span class="prox-r f-gry-dk2 f-13 mar-10-r"> was   0.0% </span>			                            				    					    <span
                                                        class="cb"><span class="cb">Up to</span> 2.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="Macys" data-merch="8333">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="8333"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon_100x27b.gif")}}"
                                                 alt="Macy&#39;s" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            <span class="cb cbcol-nocb">Coupons Only</span>
                    </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="Walmart" data-merch="2946">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="2946"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon-100x27(1).gif")}}"
                                                 alt="Walmart" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            <span class="cb cbcol-nocb">No Discount</span>
                    </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="NeimanMarcus"
                                        data-merch="8052">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="8052"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/iconn_100x27.gif")}}"
                                                 alt="Neiman Marcus" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">2.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="Target" data-merch="5246">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="5246"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon-100x27(2).gif")}}"
                                                 alt="Target" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">1.0%</span>
				                    			        </span>
                                        </a>
                                    </li>
                                    <li class="favblk bblk flt col-half sfaved border-r" id="Kohls" data-merch="7206">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="7206"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon-kohls1.gif")}}"
                                                 alt="Kohl&#39;s" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">3.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="BestBuy" data-merch="4767">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="4767"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/bestbuy_icon_100x27.gif")}}"
                                                 alt="Best Buy" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">1.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="QVC" data-merch="8378">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="8378"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/qvc_icon_100x27a.gif")}}"
                                                 alt="QVC" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">1.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="Groupon" data-merch="10634">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="10634"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/groupon_icon_100x27.gif")}}"
                                                 alt="Groupon" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb"><span
                                                                                                            class="cb">Up to</span> 4.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="Sephora" data-merch="4548">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="4548"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon-100x27(3).gif")}}"
                                                 alt="Sephora" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 <span class="prox-r f-gry-dk2 f-13 mar-10-r"> was   4.0% </span>			                            				    					    <span
                                                        class="cb"><span class="cb">Up to</span> 8.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="Staples" data-merch="4986">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="4986"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon_100x27a.gif")}}"
                                                 alt="Staples" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">2.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="Nike" data-merch="9528">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="9528"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon-100x27(4).gif")}}"
                                                 alt="Nike" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 <span class="prox-r f-gry-dk2 f-13 mar-10-r"> was   1.5% </span>			                            				    					    <span
                                                        class="cb">12.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="SaksFifthAvenue" data-merch="9154">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="9154"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon-100x27-2.gif")}}"
                                                 alt="Saks Fifth Avenue" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">2.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="SamsClub"
                                        data-merch="10086" style="border-bottom: 0px;">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="10086"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon_100x27_1.gif")}}"
                                                 alt="Sam&#39;s Club" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">1.5%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="JCPenney" data-merch="69"
                                        style="border-bottom: 0px;">
                                        <span id="favsize" class="hide favsize" data-fav-size="0"></span>
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="69"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/myAccount/icon_100x27s.gif")}}"
                                                 alt="JCPenney" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">3.0%</span>
				                    			        </span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="dashboard-trips blk mar-10-b border">
                            <div class="blk pad-20 pad-15-tb bg-grn">
                                <div class="flt"><h3 class="f-white"><span class="fa-heart f-18 f-white"></span> Find
                                        all your recent Shopping Trips</h3></div>
                            </div>
                            <div class="blk blk-reg pad-20  border-t-0">
                                <h3 class="f-grn f-20 flt lh-1">Shopping Trips</h3>
                            </div>
                            <div id="shopping-trips-data" class="shopping-trips-home">

                                <div class="blk rel blk-reg border-t  border-b-0" id="expand-cont">
                                    <table width="100%" border="0" cellspacing="0" class="tt-table f-13">
                                        <thead>
                                        <tr class="bg-gry">
                                            <th class="td-time rel f-left pad-20-l">Date / Time</th>
                                            <th class="td-store f-left">Store</th>
                                            <th class="td-date f-left">Cash Back</th>
                                            <th class="td-time rel f-left">Shopping Trip</th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <div class="blk blk-reg pad-20-lr">
                                        <div class="lh-50"><span class="f-13">When you shop through Rakuten, we will display all your Shopping Trips so you can easily track your Cash Back.</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="tab-hotdeals" class="blk blk-reg border">
                            <div class="blk-reg pad-15 pad-30-lr f-20 f-grn lh-30">Recommended Deals</div>
                        </div>
                        <div class="hp-hotdeals blk mar-10-b">


                            <div id="coupons" class="blk">


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at L&#39;OCCITANE plus 12.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9273"
                                           data-amp-store_name="L&#39;OCCITANE" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/9273/icon-100x27-2.gif"
                                                 data-deal-id="12948163"
                                                 src="{{url("/images/myAccount/icon-150x40-2.gif")}}"
                                                 alt="Shop now at L&#39;OCCITANE plus 12.0% Cash Back from Rakuten!"
                                                 title="Shop now at L&#39;OCCITANE plus 12.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Friends &amp; Family Event! Enjoy 20% off + FREE SHIPPING + FREE samples!</span>
                                            <span class="rebate cb">+12.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="FRIEND">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="9273"
                                                                    data-amp-store_name="L&#39;OCCITANE">FRIEND</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/07/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at L&#39;OCCITANE"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9273"
                                           data-amp-store_name="L&#39;OCCITANE" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Verizon plus Up to $75.00 Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10794"
                                           data-amp-store_name="Verizon" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/10794/icon-100x27-2.gif"
                                                 data-deal-id="12936630"
                                                 src="{{url("/images/myAccount/icon-150x40-2(1).gif")}}"
                                                 alt="Shop now at Verizon plus Up to $75.00 Cash Back from Rakuten!"
                                                 title="Shop now at Verizon plus Up to $75.00 Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">For a limited time, order online and we'll waive your activation fee</span>
                                            <span class="rebate cb">+Up to $75.00 Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Limited time!</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Verizon"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10794"
                                           data-amp-store_name="Verizon" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Bloomingdale&#39;s plus 1.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9376"
                                           data-amp-store_name="Bloomingdale&#39;s" data-event-signature="ec,ea"
                                           data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/9376/icon-100x27.gif"
                                                 data-deal-id="12944392"
                                                 src="{{url("/images/myAccount/icon-150x40.gif")}}"
                                                 alt="Shop now at Bloomingdale&#39;s plus 1.0% Cash Back from Rakuten!"
                                                 title="Shop now at Bloomingdale&#39;s plus 1.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Friends &amp; Family! Take 25% off a large selection of items.</span>
                                            <span class="rebate cb">+1.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Discount applied in bag.</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/12/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Bloomingdale&#39;s"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9376"
                                           data-amp-store_name="Bloomingdale&#39;s" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Kiehl&#39;s plus 8.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9443"
                                           data-amp-store_name="Kiehl&#39;s" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/9443/icon-100x27-2.gif"
                                                 data-deal-id="12940223"
                                                 src="{{url("/images/myAccount/icon-150x40-2(2).gif")}}"
                                                 alt="Shop now at Kiehl&#39;s plus 8.0% Cash Back from Rakuten!"
                                                 title="Shop now at Kiehl&#39;s plus 8.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Enjoy 20% off any order + get a free 15-pc. gift at $120.</span>
                                            <span class="rebate cb">+8.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="FRIENDS">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="9443"
                                                                    data-amp-store_name="Kiehl&#39;s">FRIENDS</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/02/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Kiehl&#39;s"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9443"
                                           data-amp-store_name="Kiehl&#39;s" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Brooks Brothers plus 7.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="652"
                                           data-amp-store_name="Brooks Brothers" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/652/icon-100x27.gif"
                                                 data-deal-id="12945136"
                                                 src="{{url("/images/myAccount/icon-150x40(1).gif")}}"
                                                 alt="Shop now at Brooks Brothers plus 7.0% Cash Back from Rakuten!"
                                                 title="Shop now at Brooks Brothers plus 7.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">30% off Full Price + Additional 30% off Clearance and Sale items.</span>
                                            <span class="rebate cb">+7.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Excludes 4/$184 Shirts.</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/15/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Brooks Brothers"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="652"
                                           data-amp-store_name="Brooks Brothers" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Sakara Life plus 5.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="16352"
                                           data-amp-store_name="Sakara Life" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/16352/icon_100x27.gif"
                                                 data-deal-id="12945792"
                                                 src="{{url("/images/myAccount/icon_150x40.gif")}}"
                                                 alt="Shop now at Sakara Life plus 5.0% Cash Back from Rakuten!"
                                                 title="Shop now at Sakara Life plus 5.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Take the first bite toward immunity with superfood-based meals and products, delivered to your door. Get 20% off sitewide.</span>
                                            <span class="rebate cb">+5.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code" data-clipboard-text="SAKARAIMMUNITY">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="16352"
                                                                    data-amp-store_name="Sakara Life">SAKARAIMMUNITY</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/10/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Sakara Life"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="16352"
                                           data-amp-store_name="Sakara Life" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at JCPenney plus 3.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="69"
                                           data-amp-store_name="JCPenney" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/69/icon_100x27s.gif"
                                                 data-deal-id="12945678"
                                                 src="{{url("/images/myAccount/icon_150x40s.gif")}}"
                                                 alt="Shop now at JCPenney plus 3.0% Cash Back from Rakuten!"
                                                 title="Shop now at JCPenney plus 3.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Hop, Shop &amp; Save Sale - Extra 25% off</span>
                                            <span class="rebate cb">+3.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="PERFECT3">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="69"
                                                                    data-amp-store_name="JCPenney">PERFECT3</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/08/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at JCPenney"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="69"
                                           data-amp-store_name="JCPenney" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Lands&#39; End plus 12.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="3866"
                                           data-amp-store_name="Lands&#39; End" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/3866/landsend_icon_100x27.gif"
                                                 data-deal-id="12907904"
                                                 src="{{url("/images/myAccount/landsend_icon_150x40.gif")}}"
                                                 alt="Shop now at Lands&#39; End plus 12.0% Cash Back from Rakuten!"
                                                 title="Shop now at Lands&#39; End plus 12.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Receive 40% off your order.</span>
                                            <span class="rebate cb">+12.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Online only.</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="CROCUS">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="3866"
                                                                    data-amp-store_name="Lands&#39; End">CROCUS</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Lands&#39; End"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="3866"
                                           data-amp-store_name="Lands&#39; End" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at hint plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="16840"
                                           data-amp-store_name="hint" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/16840/icon_100x27.gif"
                                                 data-deal-id="12937342"
                                                 src="{{url("/images/myAccount/icon_150x40(1).gif")}}"
                                                 alt="Shop now at hint plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at hint plus 4.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">3 Cases of Fruit-infused Hint Water Now: $1 Per Bottle and Free shipping.</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="36BYOB">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="16840"
                                                                    data-amp-store_name="hint">36BYOB</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at hint"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="16840"
                                           data-amp-store_name="hint" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at Nike plus 12.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9528" data-amp-store_name="Nike"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/9528/icon-100x27.gif"
                                                 data-deal-id="12943247"
                                                 src="{{url("/images/myAccount/icon-150x40(2).gif")}}"
                                                 alt="Shop now at Nike plus 12.0% Cash Back from Rakuten!"
                                                 title="Shop now at Nike plus 12.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">New markdowns! Get up to 40% off more than 2,000 new styles.</span>
                                            <span class="rebate cb">+12.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Nike"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9528"
                                           data-amp-store_name="Nike" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at Gap plus 2.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="3864" data-amp-store_name="Gap"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/3864/gap_icon_100x27.gif"
                                                 data-deal-id="12943816"
                                                 src="{{url("/images/myAccount/gap_icon_150x40.gif")}}"
                                                 alt="Shop now at Gap plus 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at Gap plus 2.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">40% Off Everything + Extra 20% Off Everything</span>
                                            <span class="rebate cb">+2.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Restrictions Apply</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="2DAYS">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="3864"
                                                                    data-amp-store_name="Gap">2DAYS</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Gap"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="3864"
                                           data-amp-store_name="Gap" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at Crocs plus 12.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10199"
                                           data-amp-store_name="Crocs" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/10199/crocs_1_icon_100x27.gif"
                                                 data-deal-id="12945273"
                                                 src="{{url("/images/myAccount/crocs_1_icon_150x40.gif")}}"
                                                 alt="Shop now at Crocs plus 12.0% Cash Back from Rakuten!"
                                                 title="Shop now at Crocs plus 12.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Save up to 60% off sale styles.</span>
                                            <span class="rebate cb">+12.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/30/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Crocs"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10199"
                                           data-amp-store_name="Crocs" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Sam&#39;s Club plus 1.5% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10086"
                                           data-amp-store_name="Sam&#39;s Club" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10086/icon_100x27_1.gif"
                                                 data-deal-id="12942046"
                                                 src="{{url("/images/myAccount/icon_150x40_2.gif")}}"
                                                 alt="Shop now at Sam&#39;s Club plus 1.5% Cash Back from Rakuten!"
                                                 title="Shop now at Sam&#39;s Club plus 1.5% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Shop $7,800 in instant savings.</span>
                                            <span class="rebate cb">+1.5% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/05/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Sam&#39;s Club"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10086"
                                           data-amp-store_name="Sam&#39;s Club" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at 1800FLOWERS plus 15.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="44"
                                           data-amp-store_name="1800FLOWERS" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/44/1800flowers_icon_100x27.gif"
                                                 data-deal-id="12945364"
                                                 src="{{url("/images/myAccount/1800flowers_icon_150x40.gif")}}"
                                                 alt="Shop now at 1800FLOWERS plus 15.0% Cash Back from Rakuten!"
                                                 title="Shop now at 1800FLOWERS plus 15.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Celebrate Spring with 30 Tulips for $30 for our annual Tulip Festival</span>
                                            <span class="rebate cb">+15.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/23/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at 1800FLOWERS"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="44"
                                           data-amp-store_name="1800FLOWERS" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at eBay plus Up to 2.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="3993" data-amp-store_name="eBay"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/3993/icon-100x27-ebay.gif"
                                                 data-deal-id="12946969"
                                                 src="{{url("/images/myAccount/icon-150x40-ebay.gif")}}"
                                                 alt="Shop now at eBay plus Up to 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at eBay plus Up to 2.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Extra 20% off looks you love</span>
                                            <span class="rebate cb">+Up to 2.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>$50 min. Max $100 off. 2x uses. Exclusions apply.</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code" data-clipboard-text="PERFECTFIT">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="3993" data-amp-store_name="eBay">PERFECTFIT</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at eBay"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="3993"
                                           data-amp-store_name="eBay" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Groupon plus Up to 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10634"
                                           data-amp-store_name="Groupon" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10634/groupon_icon_100x27.gif"
                                                 data-deal-id="12943469"
                                                 src="{{url("/images/myAccount/groupon_icon_150x40.gif")}}"
                                                 alt="Shop now at Groupon plus Up to 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at Groupon plus Up to 4.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Take up to 61% off a new Sam's Club membership.</span>
                                            <span class="rebate cb">+Up to 4.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/17/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Groupon"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10634"
                                           data-amp-store_name="Groupon" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887" target="_parent"
                                           title="Shop now at Blain&#39;s Farm and Fleet plus 2.5% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="14201"
                                           data-amp-store_name="Blain&#39;s Farm and Fleet" data-event-signature="ec,ea"
                                           data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/14201/icon-100x27.gif"
                                                 data-deal-id="12944122"
                                                 src="{{url("/images/myAccount/icon-150x40(3).gif")}}"
                                                 alt="Shop now at Blain&#39;s Farm and Fleet plus 2.5% Cash Back from Rakuten!"
                                                 title="Shop now at Blain&#39;s Farm and Fleet plus 2.5% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">20% off select Lawn Care and Gardening Supplies.</span>
                                            <span class="rebate cb">+2.5% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/05/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt"
                                           title="Shop Now at Blain&#39;s Farm and Fleet"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="14201"
                                           data-amp-store_name="Blain&#39;s Farm and Fleet"
                                           data-amp-starts_shopping="true" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals Shop Now - Click">Shop Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Keurig plus 12.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="12448"
                                           data-amp-store_name="Keurig" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/12448/icon-100x27-2.gif"
                                                 data-deal-id="12946931"
                                                 src="{{url("/images/myAccount/icon-150x40-2(3).gif")}}"
                                                 alt="Shop now at Keurig plus 12.0% Cash Back from Rakuten!"
                                                 title="Shop now at Keurig plus 12.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">$2.50 Off Per Box</span>
                                            <span class="rebate cb">+12.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code" data-clipboard-text="250SPRINGBOX">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="12448"
                                                                    data-amp-store_name="Keurig">250SPRINGBOX</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/05/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Keurig"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="12448"
                                           data-amp-store_name="Keurig" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at Zulily plus 1.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10576"
                                           data-amp-store_name="Zulily" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10576/icon_100x27.gif"
                                                 data-deal-id="12947472"
                                                 src="{{url("/images/myAccount/icon_150x40(2).gif")}}"
                                                 alt="Shop now at Zulily plus 1.0% Cash Back from Rakuten!"
                                                 title="Shop now at Zulily plus 1.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Your one-stop stay-at-home shop! Get up to 70% off.</span>
                                            <span class="rebate cb">+1.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/30/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Zulily"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10576"
                                           data-amp-store_name="Zulily" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Backcountry.com plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10019"
                                           data-amp-store_name="Backcountry.com" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/10019/backcountry_icon_100x27.gif"
                                                 data-deal-id="12940658"
                                                 src="{{url("/images/myAccount/backcountry_icon_150x40.gif")}}"
                                                 alt="Shop now at Backcountry.com plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at Backcountry.com plus 4.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">25% or more off in-season Styles and New Arrivals.</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Limited Time Offer</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Backcountry.com"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10019"
                                           data-amp-store_name="Backcountry.com" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at SkinCareRx plus 12.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9948"
                                           data-amp-store_name="SkinCareRx" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/9948/skincarerx_icon_100x27.gif"
                                                 data-deal-id="12944891"
                                                 src="{{url("/images/myAccount/skincarerx_icon_150x40.gif")}}"
                                                 alt="Shop now at SkinCareRx plus 12.0% Cash Back from Rakuten!"
                                                 title="Shop now at SkinCareRx plus 12.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">30% off Bath and Body Products.</span>
                                            <span class="rebate cb">+12.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="BODYCARE">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="9948"
                                                                    data-amp-store_name="SkinCareRx">BODYCARE</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/06/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at SkinCareRx"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9948"
                                           data-amp-store_name="SkinCareRx" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Ray-Ban plus 12.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10845"
                                           data-amp-store_name="Ray-Ban" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10845/icon_100x27_a.gif"
                                                 data-deal-id="12946512"
                                                 src="{{url("/images/myAccount/icon_150x40_b.gif")}}"
                                                 alt="Shop now at Ray-Ban plus 12.0% Cash Back from Rakuten!"
                                                 title="Shop now at Ray-Ban plus 12.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">30% off any order and Free shipping.</span>
                                            <span class="rebate cb">+12.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/08/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Ray-Ban"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10845"
                                           data-amp-store_name="Ray-Ban" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Staples plus 2.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="4986"
                                           data-amp-store_name="Staples" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/4986/icon_100x27a.gif"
                                                 data-deal-id="12945769"
                                                 src="{{url("/images/myAccount/icon_150x40a.gif")}}"
                                                 alt="Shop now at Staples plus 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at Staples plus 2.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">$15 off Orders of $60+.</span>
                                            <span class="rebate cb">+2.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="60426">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="4986"
                                                                    data-amp-store_name="Staples">60426</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/03/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Staples"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="4986"
                                           data-amp-store_name="Staples" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Sephora plus Up to 8.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="4548"
                                           data-amp-store_name="Sephora" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/4548/icon-100x27.gif"
                                                 data-deal-id="12936440"
                                                 src="{{url("/images/myAccount/icon-150x40(4).gif")}}"
                                                 alt="Shop now at Sephora plus Up to 8.0% Cash Back from Rakuten!"
                                                 title="Shop now at Sephora plus Up to 8.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Oh, snap! Get up to 50% off today’s deals.</span>
                                            <span class="rebate cb">+Up to 8.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/04/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Sephora"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="4548"
                                           data-amp-store_name="Sephora" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at EXPRESS plus 2.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10088"
                                           data-amp-store_name="EXPRESS" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/10088/icon-100x27.gif"
                                                 data-deal-id="12946133"
                                                 src="{{url("/images/myAccount/icon-150x40(5).gif")}}"
                                                 alt="Shop now at EXPRESS plus 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at EXPRESS plus 2.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">40-60% off Everything.</span>
                                            <span class="rebate cb">+2.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expiring">
                                <span class="fa-clock-o expiring"></span>Ends Today
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at EXPRESS"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10088"
                                           data-amp-store_name="EXPRESS" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at AliExpress plus 2.75% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10644"
                                           data-amp-store_name="AliExpress" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/10644/icon-100x27.gif"
                                                 data-deal-id="12943415"
                                                 src="{{url("/images/myAccount/icon-150x40(6).gif")}}"
                                                 alt="Shop now at AliExpress plus 2.75% Cash Back from Rakuten!"
                                                 title="Shop now at AliExpress plus 2.75% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">$2 off $15 order.</span>
                                            <span class="rebate cb">+2.75% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="halo328">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="10644"
                                                                    data-amp-store_name="AliExpress">halo328</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expiring">
                                <span class="fa-clock-o expiring"></span>Ends Today
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at AliExpress"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10644"
                                           data-amp-store_name="AliExpress" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Burpee Gardening plus 5.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="105"
                                           data-amp-store_name="Burpee Gardening" data-event-signature="ec,ea"
                                           data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/105/icon-100x27-2.gif"
                                                 data-deal-id="12070167"
                                                 src="{{url("/images/myAccount/icon-150x40-2(4).gif")}}"
                                                 alt="Shop now at Burpee Gardening plus 5.0% Cash Back from Rakuten!"
                                                 title="Shop now at Burpee Gardening plus 5.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Mix and Match - 3 Plants for only $19.95.</span>
                                            <span class="rebate cb">+5.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Burpee Gardening"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="105"
                                           data-amp-store_name="Burpee Gardening" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Magazines.com plus 25.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="8049"
                                           data-amp-store_name="Magazines.com" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/8049/icon_100x27.gif"
                                                 data-deal-id="12872392"
                                                 src="{{url("/images/myAccount/icon_150x40(3).gif")}}"
                                                 alt="Shop now at Magazines.com plus 25.0% Cash Back from Rakuten!"
                                                 title="Shop now at Magazines.com plus 25.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Up to 90% off Magazines</span>
                                            <span class="rebate cb">+25.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Magazines.com"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="8049"
                                           data-amp-store_name="Magazines.com" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at illy plus 7.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9714" data-amp-store_name="illy"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/merchant_images/small/small_icon_illy.gif"
                                                 data-deal-id="12739633"
                                                 src="{{url("/images/myAccount/icon_illy.gif")}}"
                                                 alt="Shop now at illy plus 7.0% Cash Back from Rakuten!"
                                                 title="Shop now at illy plus 7.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Sign Up and Enjoy 20% off and Free shipping on Recurring Coffee Deliveries + Welcome Gift and a Free 2nd Coffee Shipment.</span>
                                            <span class="rebate cb">+7.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at illy"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9714"
                                           data-amp-store_name="illy" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at PetCareRx plus 6.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="8255"
                                           data-amp-store_name="PetCareRx" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/8255/petcarerx_1_icon_100x27.gif"
                                                 data-deal-id="12506865"
                                                 src="{{url("/images/myAccount/petcarerx_1_icon_150x40.gif")}}"
                                                 alt="Shop now at PetCareRx plus 6.0% Cash Back from Rakuten!"
                                                 title="Shop now at PetCareRx plus 6.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Springtime Sale - Take 25% off any order.</span>
                                            <span class="rebate cb">+6.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="CARE25">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="8255"
                                                                    data-amp-store_name="PetCareRx">CARE25</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at PetCareRx"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="8255"
                                           data-amp-store_name="PetCareRx" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Moosejaw plus 4.5% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9210"
                                           data-amp-store_name="Moosejaw" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/merchant_images/small/small_icon_moosejaw.gif"
                                                 data-deal-id="12929428"
                                                 src="{{url("/images/myAccount/icon_150x40(4).gif")}}"
                                                 alt="Shop now at Moosejaw plus 4.5% Cash Back from Rakuten!"
                                                 title="Shop now at Moosejaw plus 4.5% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Get up to 25% off almost everything + 20% off one full-price item.</span>
                                            <span class="rebate cb">+4.5% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code" data-clipboard-text="AE20">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="9210"
                                                                    data-amp-store_name="Moosejaw">AE20</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/06/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Moosejaw"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9210"
                                           data-amp-store_name="Moosejaw" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Aquasana plus 5.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="11723"
                                           data-amp-store_name="Aquasana" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/merchant_images/small/small_icon_aquasana.gif"
                                                 data-deal-id="12943687"
                                                 src="{{url("/images/myAccount/on_aquasana.gif")}}"
                                                 alt="Shop now at Aquasana plus 5.0% Cash Back from Rakuten!"
                                                 title="Shop now at Aquasana plus 5.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">50% off Whole House Water Systems and Tanks Plus Free Pro Install Kit and Free shipping.</span>
                                            <span class="rebate cb">+5.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expiring">
                                <span class="fa-clock-o expiring"></span>Ends Today
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Aquasana"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="11723"
                                           data-amp-store_name="Aquasana" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Banana Republic plus 2.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9311"
                                           data-amp-store_name="Banana Republic" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/9311/bananarepublic_icon_100x27.gif"
                                                 data-deal-id="12944078"
                                                 src="{{url("/images/myAccount/icon-150x40(7).gif")}}"
                                                 alt="Shop now at Banana Republic plus 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at Banana Republic plus 2.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Enjoy 50% off everything + take an extra 10% off.</span>
                                            <span class="rebate cb">+2.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Restrictions apply.</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expiring">
                                <span class="fa-clock-o expiring"></span>Ends Today
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Banana Republic"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9311"
                                           data-amp-store_name="Banana Republic" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Brooks Brothers plus 7.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="652"
                                           data-amp-store_name="Brooks Brothers" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/652/icon-100x27.gif"
                                                 data-deal-id="12945136"
                                                 src="{{url("/images/myAccount/icon-150x40(1).gif")}}"
                                                 alt="Shop now at Brooks Brothers plus 7.0% Cash Back from Rakuten!"
                                                 title="Shop now at Brooks Brothers plus 7.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">30% off Full Price + Additional 30% off Clearance and Sale items.</span>
                                            <span class="rebate cb">+7.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Excludes 4/$184 Shirts.</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/15/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Brooks Brothers"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="652"
                                           data-amp-store_name="Brooks Brothers" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Saks Fifth Avenue plus 2.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9154"
                                           data-amp-store_name="Saks Fifth Avenue" data-event-signature="ec,ea"
                                           data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/9154/icon-100x27-2.gif"
                                                 data-deal-id="12940791"
                                                 src="{{url("/images/myAccount/icon-150x40-2(5).gif")}}"
                                                 alt="Shop now at Saks Fifth Avenue plus 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at Saks Fifth Avenue plus 2.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Friends &amp; Family Sale - Get 25% off select new arrivals, including jewelry.</span>
                                            <span class="rebate cb">+2.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/04/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Saks Fifth Avenue"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9154"
                                           data-amp-store_name="Saks Fifth Avenue" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at lookfantastic plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="13441"
                                           data-amp-store_name="lookfantastic" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/13441/icon_100x27.gif"
                                                 data-deal-id="12944902"
                                                 src="{{url("/images/myAccount/icon_150x40(5).gif")}}"
                                                 alt="Shop now at lookfantastic plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at lookfantastic plus 4.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Vitamin C Day. 25% off Vitamin C Products.</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/05/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at lookfantastic"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="13441"
                                           data-amp-store_name="lookfantastic" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887" target="_parent"
                                           title="Shop now at White House Black Market plus 8.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9900"
                                           data-amp-store_name="White House Black Market" data-event-signature="ec,ea"
                                           data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/9900/icon_100x27.gif"
                                                 data-deal-id="12941238"
                                                 src="{{url("/images/myAccount/icon_150x40(6).gif")}}"
                                                 alt="Shop now at White House Black Market plus 8.0% Cash Back from Rakuten!"
                                                 title="Shop now at White House Black Market plus 8.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">40% off Full Price Dresses, Shoes and Accessories.</span>
                                            <span class="rebate cb">+8.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expiring">
                                <span class="fa-clock-o expiring"></span>Ends Today
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt"
                                           title="Shop Now at White House Black Market"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9900"
                                           data-amp-store_name="White House Black Market"
                                           data-amp-starts_shopping="true" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals Shop Now - Click">Shop Now</a>
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        if (document.queryCommandSupported('copy') && document.queryCommandSupported('cut')) {
                                            function initializeCouponClickToCopy() {
                                                ebates.js.require("./js/clip.1.0.0.min.js", function () {
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
                                                });
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
                                </script>
                                <div class="all-deals">
                                    <a href="" data-navigation-id="22887"
                                       class="button primary ghost get-hot-deal" title="See all Hot Deals">See all Hot
                                        Deals <span class="arrow arr-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection