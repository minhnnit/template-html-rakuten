<?php $elementsHeader = 'elements.sub-header'; ?>
<?php $elementsFooter = 'elements.sub-footer'; ?>
@extends('app')
@section('content')
    {{--extend css--}}
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/pendingCashback/account-r4-1080891696.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/pendingCashback/account-recovery-d06e79d8ec.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/pendingCashback/postshopping.1.0.2.a.css")}}">
    {{--extend js--}}
{{--    <script src="{{url("/js//")}}"></script>--}}
    <div class="tablet-content-body page-body">
        <div class="container-fluid prox-r">
            <div class="container-fixed account-page dashboard mar-20-b">
                <div class="blk-group cols">
                    <div id="left-blk" class="blk aside">
                        <div class="blk dashboard-left">

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
                    <div class="blk main">


                        <div class="dashboard-cb blk blk-reg border border-t-0">
                            <h2>Cash Back Balance: <span class="f-grn prox-b">$0.00</span></h2>
                        </div>
                        <div class="blk blk-reg border border-t-0 pad-15 pad-30-lr f-left">
                            <div class="f-16 lh-20">Earn just $5.01 (or more) to get your Big Fat Check. Choose a
                                payment method now so we can send you your Cash Back!
                            </div>
                            <a href="https://www.rakuten.com/account-settings.htm?choose-payment=true"
                               class="scenario-link f-16 lh-20 nohover frt module-init-view" data-send-view="amp"
                               data-view-amp-type="View Module" data-view-amp-signature="module_name"
                               data-view-module_name="Choose Payment Method" data-amp-evt-type="Click Module"
                               data-amp-evt-sig="module_name" data-amp-module_name="Choose Payment Method">Choose
                                Payment Method</a>
                        </div>


                        <div id="pending-cb-cont" class="blk rel mar-10-t">

                            <h3 class="f-grn f-20 pad-20 border blk-reg lh-1">Cash Back on Purchases</h3>

                            <div class="blk blk-reg border border-t-0">
                                <p class="pad-20">Cash Back will be added here when Rakuten receives order information
                                    from stores, usually within 2-3 days.</p>
                            </div>


                            <style>
                                .cc-plate {
                                    background: url("//static.ebates.com/account/creditcards/img/ebates_visa_cc.png") no-repeat 0 0;
                                    height: 31px;
                                    width: 44px;
                                }

                                .ebates-visa-card {
                                    background-position: -228px -8px;
                                }

                                .rakuten-visa-card {
                                    background: url("//static.ebates.com/static/images/rakuten/cclp/card-art-40x26-v2%207_3_19.png") no-repeat;
                                    height: 31px;
                                    width: 44px;
                                }
                            </style>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="onerecieptOverlay">
            <div class="msg-bar rel">
                <h4 class="flt receipt_detail">Receipt Detail</h4>
                <a id="disable" class="nohover pointer right ui2014 remove-ovr frt close-onerecieptOverlay">&nbsp;</a>
            </div>
            <div class="onerecieptdetails"></div>
            <div class="onerecieptcontent"></div>
        </div>
        <div class="backgroundPopup"></div>


    </div>
@endsection