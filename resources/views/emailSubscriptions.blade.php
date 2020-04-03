<?php $elementsHeader = 'elements.sub-header'; ?>
<?php $elementsFooter = 'elements.sub-footer'; ?>
@extends('app')
@section('content')
    {{--extend css--}}
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/emailSubscriptions/account-r4-1080891696.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/emailSubscriptions/account-recovery-d06e79d8ec.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/emailSubscriptions/postshopping.1.0.2.a.css")}}">
    {{--extend js--}}
    {{--    <script src="{{url("/js//")}}"></script>--}}
    <div class="tablet-content-body page-body">
        <div class="container-fluid prox-r">
            <div class="container-fixed subsctiptions-page  mar-20-b">
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
                    <div id="right-blk" class="email-subscriptions blk main">
                        <div class="blk">
                            <div id="notifications"></div>
                        </div>
                        <div class="blk blk-reg border border-t-0">
                            <h2 class="f-24 lh-28 pad-30 pad-20-tb border-t-0">Email Subscriptions</h2>
                        </div>
                        <div class="blk blk-reg border border-t-0 pad-15 pad-30-lr">
                            <div class="table-blk b-box pad-15-t">
                                <div class="table-cell switch-cell">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="promotionalMail" class="subscribeMail iblk"
                                               name="specialsMail" value="true" checked="true" lang="hotDeals">
                                        <span class="toggle-slider circle"></span>
                                    </label>
                                </div>
                                <div class="table-cell">
                                    <h4 class="f-b f-20 lh-22 mar-15-b">Cash Back, Coupons and Hot Deals</h4>
                                    <p class="f-sec">Get updates about the latest promotions, coupons and hot deals from
                                        stores recommended for you.</p>
                                </div>
                            </div>
                            <div class="subscription-blk subs-cont unsubscribe table-blk b-box">
                                <div class="table-cell switch-cell">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="dailyDoubleMail" class="subscribeMail "
                                               name="dailyDoubleMail" value="false" lang="dailyDouble">
                                        <span class="toggle-slider circle"></span>
                                    </label>
                                </div>
                                <div class="table-cell">
                                    <h5 class="prox-b f-16 lh-22 mar-15-b">Exclusive Flash Cash Store Alert</h5>
                                    <p class="f-sec">We’re giving exclusive access at one great store on special days.
                                        Be the first to know!</p>
                                </div>
                            </div>


                            <div class="b-box  pad-30-tb ">
                                <div class="table-cell switch-cell">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="market-place-permission-status"
                                               mrktplacenewsub="true" class="mrktPlacesubscribeMail iblk "
                                               name="Permission Status" lang="Permission Status">
                                        <span class="toggle-slider circle"></span>
                                    </label>
                                </div>
                                <div class="table-cell">
                                    <h4 class=" f-b f-20  lh-22 mar-15-b">Marketplace Promotions</h4>
                                    <p class="f-sec">Get updates about product shopping on Rakuten Marketplace.</p>
                                </div>
                            </div>

                            <div class="b-box    pad-30-b mar-55-l ">
                                <div class="table-cell switch-cell">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="market-place-promotions" mrktplacenewsub="true"
                                               class="mrktPlacesubscribeMail iblk disabled font-light-a"
                                               name="Promotions" lang="Promotions" disabled="disabled">
                                        <span class="toggle-slider circle"></span>
                                    </label>
                                </div>
                                <div class="table-cell">
                                    <h4 class=" prox-b f-16  lh-22 mar-15-b">Marketplace Sales &amp; Deals</h4>
                                    <p class="f-sec">Get updates about Rewards Day promotions, category sales, merchant
                                        offers and smart coupons recommended for you.</p>
                                </div>
                            </div>

                            <div class="b-box    pad-30-tb mar-55-l border-t  pad-30-b mar-55-l ">
                                <div class="table-cell switch-cell">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="market-place-loyalty" mrktplacenewsub="true"
                                               class="mrktPlacesubscribeMail iblk disabled font-light-a" name="Trigger"
                                               lang="Trigger" disabled="disabled">
                                        <span class="toggle-slider circle"></span>
                                    </label>
                                </div>
                                <div class="table-cell">
                                    <h4 class=" prox-b f-16  lh-22 mar-15-b">Marketplace Shopping Activity</h4>
                                    <p class="f-sec">Get updates about your shopping activity on the site, such as
                                        abandoned carts, price alerts and more.</p>
                                </div>
                            </div>

                            <div class="b-box    pad-30-tb mar-55-l border-t  pad-30-b mar-55-l ">
                                <div class="table-cell switch-cell">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="market-place-trigger" mrktplacenewsub="true"
                                               class="mrktPlacesubscribeMail iblk disabled font-light-a" name="Loyalty"
                                               lang="Loyalty" disabled="disabled">
                                        <span class="toggle-slider circle"></span>
                                    </label>
                                </div>
                                <div class="table-cell">
                                    <h4 class=" prox-b f-16  lh-22 mar-15-b">Rakuten Super Points™</h4>
                                    <p class="f-sec">Get updates about loyalty promotions, special incentives and
                                        more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection