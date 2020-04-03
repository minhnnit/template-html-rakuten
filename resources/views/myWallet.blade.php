<?php $elementsHeader = 'elements.sub-header'; ?>
<?php $elementsFooter = 'elements.sub-footer'; ?>
@extends('app')
@section('content')
    {{--extend css--}}
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myWallet/account-r4-1080891696.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myWallet/account-recovery-d06e79d8ec.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myWallet/creditcards-6ab702cd2b.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/myWallet/postshopping.1.0.2.a.css")}}">
    {{--extend js--}}
    {{--    <script src="{{url("/js//")}}"></script>--}}
    <div class="tablet-content-body page-body">


        <div class="container-fluid">
            <div class="container-fixed mar-20-b">
                <div id="creditcard-container" class="blk-group" data-form-url="https://buynow.ecbsn.com"
                     data-form-env="">
                    <div id="left-blk" class="blk blk2">
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
			<a href="https://www.rakuten.com/big-fat-payment-settings.htm" class="nohover">
				<span class="edit-icon fa-pencil"></span>Edit Profile
			</a>
		</span>
                            </div>
                            <div class="member-info blk">


                                <span class="member-lifetime">Lifetime Cash Back</span>
                                <span class="member-lifetime-cb">$0.00</span>
                                <a class="taf-add-more button primary ghost"
                                   href="https://www.rakuten.com/referral/default.do"
                                   data-amp-evt-type="Visit Refer A Friend" data-amp-evt-sig="preceding_screen_name"
                                   data-amp-preceding_screen_name="Account" data-navigation-id="23015">
                                    Refer &amp; Earn $25+
                                </a>
                            </div>


                            <div class="blk blk-reg dashboard-nav pad-20-r pad-40-r pad-0-l pad-10-b pad-15-t border-l border-r border-b">
                                <ul class="bblk pad-15-b">
                                    <li id="tab-acct-dashboard" class="list-heading f-norm">
                                        <a href="https://www.rakuten.com/my-account.htm" class="f-15 nohover lh-1">My
                                            Account</a>
                                    </li>
                                    <li id="tab-acct-favorites" class="f-norm">
                                        <a href="https://www.rakuten.com/favorites.htm" data-navigation-id="23007"
                                           class="f-15 nohover">Favorite Stores</a>
                                    </li>
                                    <li id="tab-acct-current-st" class="f-norm">
                                        <a href="https://www.rakuten.com/shopping-trips.htm" class="f-15 nohover">Shopping
                                            Trips</a>
                                    </li>
                                    <li id="tab-acct-current-cb" class="f-norm">
                                        <a href="https://www.rakuten.com/pending-cash-back.htm" class="f-15 nohover">
                                            Cash Back Balance
                                        </a>
                                    </li>
                                    <li id="tab-acct-bigfat-cb" class="f-norm">
                                        <a href="https://www.rakuten.com/cash-back-history.htm" class="f-15 nohover">Big
                                            Fat Check History</a>
                                    </li>
                                    <li id="tab-acct-settings" class="f-norm">
                                        <a href="https://www.rakuten.com/account-settings.htm" class="f-15 nohover">Account
                                            Settings</a>
                                    </li>
                                    <li id="tab-acct-wallet" class="f-norm">
                                        <a href="https://www.rakuten.com/my-wallet.htm" class="f-15 nohover">My
                                            Wallet</a>
                                    </li>
                                    <li id="tab-acct-ebates-hotels" class="f-norm">
                                        <a href="https://www.rakuten.com/hotels/reservation-management.htm"
                                           class="f-15 nohover">My Reservations</a>
                                    </li>
                                    <li id="tab-acct-email-subs" class="f-norm">
                                        <a href="https://www.rakuten.com/subscriptions.htm"
                                           class="f-15 border-b nohover">Email Subscriptions</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div id="right-blk" class="mywallet blk blk1 frt col-last">
                        <div class="blk blk-reg border border-t-0 mar-10-b">
                            <div class="blk blk-reg border-b pad-20-lr pad-15-t">
                                <div class="flt mar-15-b">
                                    <h2 class="f-24 lh-28 prox-r f-norm">My Wallet</h2>
                                    <p class="pad-10-t">Please add your Credit Card</p></div>
                                <button id="addCreditCard" class="button bg-reg cc-add-card frt acc"
                                        value="Add Credit Card" type="button">
                                    <div class="plus flt">+</div>
                                    Add a New Card
                                </button>
                            </div>
                            <div id="notifications"></div>
                            <div class="in-blk">

                                <div class="pad-5-t bg-grn cc-overlay addCardOverlay">
                                    <div class="mod-btn offer-btn">
                                        <button class="button int f-white close" value="Close">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blk pad-20 mar-10-b f-cent">
                            <p class="f-12 lh-16 f-gry-dk-8">By providing your credit card, Rakuten will store your
                                credit card information as set forth in its <a class="f-gry-dk-8 underline"
                                                                               href="https://www.rakuten.com/terms_and_conditions">Terms
                                    &amp; Conditions</a> and <a class="f-gry-dk-8 underline"
                                                                href="https://www.rakuten.com/privacy_policy">Privacy
                                    Policy</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-grn cc-overlay cc-modal">
            <div class="cc-overlay-inner">
                <p class="mod-close pad-15 bg-w"><span class="fa-times cc-cancel cursor"></span></p>
                <div class="mod-content content-default">
                    <div id="enabled-clo-txt" class="pad-10-b f-16"></div>
                    <div id="enabled-clo-close" class="mod-btn offer-btn">
                        <button id="close" class="button int f-white cc-cancel" value="Close">Close</button>
                    </div>
                </div>
                <div class="mod-content content-form">
                    <div id="cpstaging" class="emptystage">
                        <div class="acct-loading favcpload"></div>
                    </div>
                    <iframe src="./Rebates, Cash Back, Discount Coupons, Online Coupons_files/saved_resource.html"
                            id="cc_iframe" name="cc_iframe" width="600" height="790" frameborder="0" seamless="seamless"
                            scrolling="yes" sandbox="allow-same-origin allow-scripts allow-popups allow-forms"></iframe>
                    <a id="helplink" class="f-16 prox-r lh-20 lrnlink center blk relative hide" target="_parent"
                       href="https://www.rakuten.com/help/article/how-in-store-cash-back-works-360002117467">Learn
                        More</a>
                </div>
                <div class="mod-content content-remove">
                    <div id="delete-ccInfo" class="mar-20-b f-16">Are you sure you want to remove <span
                                id="cc-type"></span> ending in <span id="cc-num"></span>?
                    </div>

                    <div id="captcha_div">
                        <input type="hidden" name="key" id="key" value="ccRemove">
                        <img id="ccCaptchaImg">
                        <div id="refreshCap" class="frt round3 border b-box"><i class="fa f-16 fa-repeat pointer"
                                                                                aria-hidden="true"></i></div>
                        <input id="captcha" class="captcha border digit" name="ebatesCaptcha"
                               placeholder="Type the code" value="" maxlength="7" type="text">
                    </div>

                    <div class="mod-btn">
                        <button id="" data-attr-id="" class="delete-cc button int f-white cc-btn-remove" value=""
                                type="button">Yes. Remove this Card
                        </button>
                        <button class="link-btn mar-16-l f-16 f-gray cc-cancel" value="Cancel">Cancel</button>
                    </div>
                </div>
                <div class="mod-content content-enable-card">
                    <div class="mar-20-b pad-20-b border-b f-16">To enable In-Store Offers on this card, please accept
                        the terms and conditions below.
                    </div>

                    <div class="flt"><input type="checkbox" id="iAgree" style="margin:12px 10px 0 0;"></div>
                    <div id="cc-tc" class="mar-10-t mar-10-b flt" style="width:572px;"></div>
                    <div class="mod-btn offer-btn clr">
                        <button data-attr-id="" class="disabled button int f-white cc-btn-enable-clo" value=""
                                type="button">Enable
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="backgroundPopup"></div>

    </div>
    @endsection