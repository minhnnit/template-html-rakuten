<?php $elementsHeader = 'elements.sub-header'; ?>
<?php $elementsFooter = 'elements.sub-footer'; ?>
@extends('app')
@section('content')
    {{--extend css--}}
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/bigFat/account-r4-1080891696.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/bigFat/account-recovery-d06e79d8ec.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/bigFat/postshopping.1.0.2.a.css")}}">
    {{--extend js--}}
    {{--    <script src="{{url("/js//")}}"></script>--}}
    <div class="tablet-content-body page-body">


        <script type="text/javascript">
            $(function () {
                $("#cb-paid-new").change(function () {
                    var payment_id, payment_amt, payType, payMethod = "", type = '';
                    $("select option:selected").each(function () {
                        payment_id = $(this).val();
                        payment_amt = $(this).attr("data-rel");
                        payType = $(this).attr('data-attr-cash-status') == 'noncash' ? 0 : 1;
                        payMethod = $(this).attr("data-method");
                        if (payMethod == 'American Express® Membership Reward Points') {
                            type = 'points'
                        }
                        $("#payment-cont").empty().prepend("<div id='chart-cont' class='blk blk-reg border pad-20 rel mar-10-t'><div class='loader'></div></div>");
                        jQuery.post("/account/w-payment-rollback.htm?paymentid=" + payment_id + "&isCash=" + payType + "&paidDropAjax=true&type=" + type, function (data) {
                            $("#payment-cont").html(data);
                        }).done(function () {
                            showPaymentMethod(payType);
                        });
                    });
                });
            })
        </script>

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
                        <div class="blk border-t-0">


                            <div class="dashboard-cb blk blk-reg border border-t-0 pad-15 pad-20-lr f-left">
                                <h2>Big Fat Check History</h2>
                            </div>
                            <div class="blk blk-reg border border-t-0 pad-15 pad-30-lr f-left">
                                								<span class="f-16">
									Once you have received a Big Fat Check, you can view all the details here.
									<a href="https://www.rakuten.com/help/article/getting-your-ebates-cash-back-payments-115009255748"
                                       class="nohover">Learn More </a> about how to earn your first Big Fat Check and payment schedule.
								</span>
                            </div>
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