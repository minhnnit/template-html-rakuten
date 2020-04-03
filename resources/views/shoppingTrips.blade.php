<?php $elementsHeader = 'elements.sub-header'; ?>
<?php $elementsFooter = 'elements.sub-footer'; ?>
@extends('app')
@section('content')
    {{--extend css--}}
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/shoppingTrips/account-r4-da7fc1c7d0.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/shoppingTrips/account-recovery-d2c35f7d5b.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/shoppingTrips/postshopping.1.0.2.a.css")}}">
    {{--extend js--}}
        <script src="{{url("/js/shoppingTrips/post-shopping-modal-f234dd0221.js")}}"></script>
        <script src="{{url("/js/shoppingTrips/postshopping.1.0.2.min.js")}}"></script>
        <script src="{{url("/js/shoppingTrips/jquery.jcarousel.min.js")}}"></script>
        <script src="{{url("/js/shoppingTrips/jquery.menu-aim.min.js")}}"></script>
        <script src="{{url("/js/shoppingTrips/account-3f192981e1.js")}}"></script>
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
                    <div id="right-blk" class="blk main">

                        <div class="dashboard-trips blk mar-10-b">
                            <div class="blk blk-reg border border-t-0 pad-15 pad-20-lr f-left">
                                <h2 class="f-24 f-norm flt shopping-trip-head">Shopping Trips</h2>
                                <div class="frt custom-select ticketMonth-container">
                                    <select id="ticketMonth" class="border iblk f-13 mar-5-l">
                                        <option value="0">April 2020</option>
                                        <option value="">April 2020</option>
                                        <option value="1">March 2020</option>
                                        <option value="2">February 2020</option>
                                    </select>
                                    <div class="select-items select-hide">
                                        <div class="same-as-selected">April 2020</div>
                                        <div>March 2020</div>
                                        <div>February 2020</div>
                                    </div>
                                </div>
                            </div>
                            <div id="shopping-trips-data">


                                <div class="blk rel blk-reg border border-t-0" id="expand-cont">
                                    <table width="100%" border="0" cellspacing="0" class="tt-table f-13">
                                        <thead>
                                        <tr class="bg-gry">
                                            <th class="td-time pad-20-l rel f-left">
                                                <a href="javascript:;"
                                                   onclick="sortIt(&#39;shopping-trips-data&#39;,&#39;/account/w-shoppingtrips.htm?&amp;sort_field=date&amp;sort_order=asc&amp;timespan=0&amp;pageNum=1&amp;pageStartNum=1&amp;pageEndNum=50&#39;)"
                                                   class="f-norm nohover">
                                                    Date / Time
                                                    <span class="arrow-black arr-down"></span>
                                                </a>
                                            </th>
                                            <th class="td-store f-left">
                                                <a href="javascript:;"
                                                   onclick="sortIt(&#39;shopping-trips-data&#39;,&#39;/account/w-shoppingtrips.htm?&amp;sort_field=store&amp;sort_order=asc&amp;timespan=0&amp;pageNum=1&amp;pageStartNum=1&amp;pageEndNum=50&#39;)"
                                                   class="f-norm nohover">
                                                    Store
                                                </a>
                                            </th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection