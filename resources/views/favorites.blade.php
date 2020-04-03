<?php $elementsHeader = 'elements.sub-header'; ?>
<?php $elementsFooter = 'elements.sub-footer'; ?>
@extends('app')
@section('content')
    {{--extend css--}}
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/favorites/account-r4-da7fc1c7d0.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/favorites/account-recovery-d2c35f7d5b.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/favorites/postshopping.1.0.2.a.css")}}">
    {{--extend js--}}
    {{--    <script src="{{url("/js/favorites/")}}"></script>--}}
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
                        <div id="dd-fav-cont">


                        </div>


                        <div class="favorites blk mar-10-b">
                            <div class="blk blk-reg pad-20 border">
                                <div class="col-half flt"><h2 class="f-24 f-norm flt shopping-trip-head">Favorite
                                        Stores</h2></div>
                                <div class="col-half frt">
                                    <form id="favForm" name="favForm" method="get" class="favForm rel">
                                        <input type="hidden" id="_csrf" name="_csrf"
                                               value="538cf2af-2495-4a86-9014-b0d1c921ffc7">
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
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="1"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon-100x27.gif")}}"
                                                 alt="Amazon" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            <span class="cb cbcol-nocb">No Discount</span>
                    </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="eBay" data-merch="3993">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="3993"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon-100x27-ebay.gif")}}"
                                                 alt="eBay" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 <span class="prox-r f-gry-dk2 f-13 mar-10-r"> was   0.0% </span>			                            				    					    <span
                                                        class="cb"><span class="cb">Up to</span> 2.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="Macys" data-merch="8333">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="8333"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon_100x27b.gif")}}"
                                                 alt="Macy&#39;s" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            <span class="cb cbcol-nocb">Coupons Only</span>
                    </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="Walmart" data-merch="2946">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="2946"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon-100x27(1).gif")}}"
                                                 alt="Walmart" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            <span class="cb cbcol-nocb">No Discount</span>
                    </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="NeimanMarcus"
                                        data-merch="8052">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="8052"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/iconn_100x27.gif")}}"
                                                 alt="Neiman Marcus" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">2.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="Target" data-merch="5246">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="5246"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon-100x27(2).gif")}}"
                                                 alt="Target" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">1.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="Kohls" data-merch="7206">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="7206"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon-kohls1.gif")}}"
                                                 alt="Kohl&#39;s" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">3.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="BestBuy" data-merch="4767">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="4767"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/bestbuy_icon_100x27.gif")}}"
                                                 alt="Best Buy" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">1.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="QVC" data-merch="8378">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="8378"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/qvc_icon_100x27a.gif")}}"
                                                 alt="QVC" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">1.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="Groupon" data-merch="10634">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="10634"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/groupon_icon_100x27.gif")}}"
                                                 alt="Groupon" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb"><span
                                                                                                            class="cb">Up to</span> 4.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="Sephora" data-merch="4548">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="4548"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon-100x27(3).gif")}}"
                                                 alt="Sephora" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 <span class="prox-r f-gry-dk2 f-13 mar-10-r"> was   4.0% </span>			                            				    					    <span
                                                        class="cb"><span class="cb">Up to</span> 8.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="Staples" data-merch="4986">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="4986"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon_100x27a.gif")}}"
                                                 alt="Staples" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">2.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="Nike" data-merch="9528">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="9528"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon-100x27(4).gif")}}"
                                                 alt="Nike" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 <span class="prox-r f-gry-dk2 f-13 mar-10-r"> was   1.5% </span>			                            				    					    <span
                                                        class="cb">8.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="SaksFifthAvenue" data-merch="9154">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="9154"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon-100x27-2.gif")}}"
                                                 alt="Saks Fifth Avenue" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">2.0%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved border-r" id="SamsClub"
                                        data-merch="10086" style="border-bottom: 0px;">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="10086"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon_100x27_1.gif")}}"
                                                 alt="Sam&#39;s Club" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">1.5%</span>
				                    			        </span>
                                        </a>
                                    </li>


                                    <li class="favblk bblk flt col-half sfaved" id="JCPenney" data-merch="69"
                                        style="border-bottom: 0px;">
                                        <div class="fav-sm fa-heart off cursor f-12 center" data-merch="69"><span
                                                    class="fa-plus f-7"></span></div>
                                        <a href="" data-navigation-id="22886"
                                           class="cp-shop bblk pad-20-r f-16 nohover" rel="nofollow">
                                            <img src="{{url("/images/favorites/icon_100x27s.gif")}}"
                                                 alt="JCPenney" class="mar-20-l" width="100" height="27">
                                            <span class="cb frt">

			 			                            				    					    <span class="cb">3.0%</span>
				                    			        </span>
                                        </a>
                                    </li>
                                </ul>

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
                                           title="Shop now at L&#39;OCCITANE plus 10.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9273"
                                           data-amp-store_name="L&#39;OCCITANE" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/9273/icon-100x27-2.gif"
                                                 data-deal-id="12948163"
                                                 src="{{url("/images/favorites/icon-150x40-2.gif")}}"
                                                 alt="Shop now at L&#39;OCCITANE plus 10.0% Cash Back from Rakuten!"
                                                 title="Shop now at L&#39;OCCITANE plus 10.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Friends &amp; Family Event! Enjoy 20% off + FREE SHIPPING + FREE samples!</span>
                                            <span class="rebate cb">+10.0% Cash Back</span>
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
                                                 src="{{url("/images/favorites/icon-150x40-2(1).gif")}}"
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
                                                 src="{{url("/images/favorites/icon-150x40.gif")}}"
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
                                                 src="{{url("/images/favorites/icon-150x40-2(2).gif")}}"
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

                                            <span class="premium-expire expiring">
                                <span class="fa-clock-o expiring"></span>Ends Today
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
                                                 src="{{url("/images/favorites/icon-150x40(1).gif")}}"
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
                                                 src="{{url("/images/favorites/icon_150x40.gif")}}"
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
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores">
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
                                                 src="{{url("/images/favorites/icon_150x40s.gif")}}"
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
                                           title="Shop now at Groupon plus Up to 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10634"
                                           data-amp-store_name="Groupon" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10634/groupon_icon_100x27.gif"
                                                 data-deal-id="12949826"
                                                 src="{{url("/images/favorites/groupon_icon_150x40.gif")}}"
                                                 alt="Shop now at Groupon plus Up to 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at Groupon plus Up to 4.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Extra 25% off Online Courses, Wine &amp; Meal Delivery &amp; More</span>
                                            <span class="rebate cb">+Up to 4.0% Cash Back</span>
                                        </li>
                                        <div class="relative expander-parent min toggle transition"
                                             style="height: 16px;">
                                            <li class="coupon-restrictions expander-applied">
                                                <span>Valid on Local deals only; max 3 orders. Up to $50 discount per order.</span>
                                            </li>
                                            <a class="prox-r expander absolute pointer toggle min"
                                               style="bottom: 0px; right: 0px;"><span
                                                        class="easein-gradient"></span><span class="white-bg">  <span
                                                            class="more">Read more +</span><span
                                                            class="less ">Read less -</span></span></a></div>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code" data-clipboard-text="SAVE">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="10634"
                                                                    data-amp-store_name="Groupon">SAVE</span>
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
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at Nike plus 8.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9528" data-amp-store_name="Nike"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/9528/icon-100x27.gif"
                                                 data-deal-id="12943247"
                                                 src="{{url("/images/favorites/icon-150x40(2).gif")}}"
                                                 alt="Shop now at Nike plus 8.0% Cash Back from Rakuten!"
                                                 title="Shop now at Nike plus 8.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">New markdowns! Get up to 40% off more than 2,000 new styles.</span>
                                            <span class="rebate cb">+8.0% Cash Back</span>
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
                                           target="_parent" title="Shop now at Gap plus 6.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="3864" data-amp-store_name="Gap"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/3864/gap_icon_100x27.gif"
                                                 data-deal-id="12944185"
                                                 src="{{url("/images/favorites/gap_icon_150x40.gif")}}"
                                                 alt="Shop now at Gap plus 6.0% Cash Back from Rakuten!"
                                                 title="Shop now at Gap plus 6.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Enjoy 50% off everything + free shipping on $25.</span>
                                            <span class="rebate cb">+6.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/06/2020
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
                                           target="_parent"
                                           title="Shop now at Freshly plus $7.50 Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="16392"
                                           data-amp-store_name="Freshly" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/16392/icon_100x27.gif"
                                                 data-deal-id="12832770"
                                                 src="{{url("/images/favorites/icon_150x40(1).gif")}}"
                                                 alt="Shop now at Freshly plus $7.50 Cash Back from Rakuten!"
                                                 title="Shop now at Freshly plus $7.50 Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">$60 off First Five Orders ($12 Per Order).</span>
                                            <span class="rebate cb">+$7.50 Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="GET60">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="16392"
                                                                    data-amp-store_name="Freshly">GET60</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Freshly"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="16392"
                                           data-amp-store_name="Freshly" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Under Armour plus 6.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9728"
                                           data-amp-store_name="Under Armour" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/9728/underarmour_icon_100x27.gif"
                                                 data-deal-id="12948847"
                                                 src="{{url("/images/favorites/underarmour_icon_150x40.gif")}}"
                                                 alt="Shop now at Under Armour plus 6.0% Cash Back from Rakuten!"
                                                 title="Shop now at Under Armour plus 6.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Get 25% off sitewide + free shipping.</span>
                                            <span class="rebate cb">+6.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="WFH25">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="9728"
                                                                    data-amp-store_name="Under Armour">WFH25</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/12/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Under Armour"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9728"
                                           data-amp-store_name="Under Armour" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Urban Outfitters plus Up to 5.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="8419"
                                           data-amp-store_name="Urban Outfitters" data-event-signature="ec,ea"
                                           data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/8419/urbanoutfitters_icon_100x27.gif"
                                                 data-deal-id="12945775"
                                                 src="{{url("/images/favorites/urbanoutfitters_icon_150x40.gif")}}"
                                                 alt="Shop now at Urban Outfitters plus Up to 5.0% Cash Back from Rakuten!"
                                                 title="Shop now at Urban Outfitters plus Up to 5.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Stay Cozy All Week Long- Shop Great Deals On Lounge.</span>
                                            <span class="rebate cb">+Up to 5.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Urban Outfitters"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="8419"
                                           data-amp-store_name="Urban Outfitters" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at LifeLock plus 40.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10690"
                                           data-amp-store_name="LifeLock" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10690/icon_100x27.gif"
                                                 data-deal-id="12207109"
                                                 src="{{url("/images/favorites/icon_150x40(2).gif")}}"
                                                 alt="Shop now at LifeLock plus 40.0% Cash Back from Rakuten!"
                                                 title="Shop now at LifeLock plus 40.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Up to 25% off your first year.</span>
                                            <span class="rebate cb">+40.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Terms apply.</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at LifeLock"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10690"
                                           data-amp-store_name="LifeLock" data-amp-starts_shopping="true"
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
                                                 src="{{url("/images/favorites/icon_150x40a.gif")}}"
                                                 alt="Shop now at Staples plus 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at Staples plus 2.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Get $15 off a $60 order.</span>
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
                                           title="Shop now at Athleta plus 2.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10168"
                                           data-amp-store_name="Athleta" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10168/icon_100x27.gif"
                                                 data-deal-id="12941034"
                                                 src="{{url("/images/favorites/icon_150x40(3).gif")}}"
                                                 alt="Shop now at Athleta plus 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at Athleta plus 2.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Enjoy 30% off your entire purchase.</span>
                                            <span class="rebate cb">+2.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/06/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Athleta"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10168"
                                           data-amp-store_name="Athleta" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at SkinStore plus 8.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="6986"
                                           data-amp-store_name="SkinStore" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/6986/icon-100x27-2.gif"
                                                 data-deal-id="12944696"
                                                 src="{{url("/images/favorites/icon-150x40-2(3).gif")}}"
                                                 alt="Shop now at SkinStore plus 8.0% Cash Back from Rakuten!"
                                                 title="Shop now at SkinStore plus 8.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Rakuten exclusive! Take 30% off select products.</span>
                                            <span class="rebate cb">+8.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code" data-clipboard-text="RAKUTEN30">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="6986"
                                                                    data-amp-store_name="SkinStore">RAKUTEN30</span>
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
                                           class="button secondary ghost frt" title="Shop Now at SkinStore"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="6986"
                                           data-amp-store_name="SkinStore" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at Shoes.com plus 10.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="1823"
                                           data-amp-store_name="Shoes.com" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/1823/shoescom_icon_100x27a.gif"
                                                 data-deal-id="12944749"
                                                 src="{{url("/images/favorites/shoescom_icon_150x40a.gif")}}"
                                                 alt="Shop now at Shoes.com plus 10.0% Cash Back from Rakuten!"
                                                 title="Shop now at Shoes.com plus 10.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">30% off Best Deals and Free shipping.</span>
                                            <span class="rebate cb">+10.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="FLASH30">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="1823"
                                                                    data-amp-store_name="Shoes.com">FLASH30</span>
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
                                           class="button secondary ghost frt" title="Shop Now at Shoes.com"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="1823"
                                           data-amp-store_name="Shoes.com" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887" target="_parent"
                                           title="Shop now at Columbia Sportswear plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10437"
                                           data-amp-store_name="Columbia Sportswear" data-event-signature="ec,ea"
                                           data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/10437/small_icon_columbiasportswear.gif"
                                                 data-deal-id="12945875"
                                                 src="{{url("/images/favorites/icon_columbiasportswear.gif")}}"
                                                 alt="Shop now at Columbia Sportswear plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at Columbia Sportswear plus 4.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Up to 60% off Great Styles and Free shipping on Orders $99+.</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="SPRING60">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="10437"
                                                                    data-amp-store_name="Columbia Sportswear">SPRING60</span>
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
                                           class="button secondary ghost frt" title="Shop Now at Columbia Sportswear"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10437"
                                           data-amp-store_name="Columbia Sportswear" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at S&#39;well plus 6.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="15551"
                                           data-amp-store_name="S&#39;well" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/15551/swell_icon_100x27.gif"
                                                 data-deal-id="12940666"
                                                 src="{{url("/images/favorites/swell_icon_150x40.gif")}}"
                                                 alt="Shop now at S&#39;well plus 6.0% Cash Back from Rakuten!"
                                                 title="Shop now at S&#39;well plus 6.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">25% Off any order.</span>
                                            <span class="rebate cb">+6.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="SELFCARE">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="15551"
                                                                    data-amp-store_name="S&#39;well">SELFCARE</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/19/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at S&#39;well"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="15551"
                                           data-amp-store_name="S&#39;well" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at Olay plus 8.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="15951"
                                           data-amp-store_name="Olay" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/15951/icon_100x27.gif"
                                                 data-deal-id="12922749"
                                                 src="{{url("/images/favorites/icon_150x40(4).gif")}}"
                                                 alt="Shop now at Olay plus 8.0% Cash Back from Rakuten!"
                                                 title="Shop now at Olay plus 8.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Free Full Size Fresh Reset Stick Mask on Orders of $40+.</span>
                                            <span class="rebate cb">+8.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>While Supplies Last</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="FREEMASK">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="15951"
                                                                    data-amp-store_name="Olay">FREEMASK</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Olay"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="15951"
                                           data-amp-store_name="Olay" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at Crocs plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10199"
                                           data-amp-store_name="Crocs" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/10199/crocs_1_icon_100x27.gif"
                                                 data-deal-id="12945273"
                                                 src="{{url("/images/favorites/crocs_1_icon_150x40.gif")}}"
                                                 alt="Shop now at Crocs plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at Crocs plus 4.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Save up to 60% on sale styles.</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
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
                                           target="_parent" title="Shop now at Pier 1 plus 1.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="11802"
                                           data-amp-store_name="Pier 1" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/11802/icon_100x27.gif"
                                                 data-deal-id="12939821"
                                                 src="{{url("/images/favorites/icon_150x40(5).gif")}}"
                                                 alt="Shop now at Pier 1 plus 1.0% Cash Back from Rakuten!"
                                                 title="Shop now at Pier 1 plus 1.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Enjoy up to 40% off all outdoor furniture.</span>
                                            <span class="rebate cb">+1.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/11/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Pier 1"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="11802"
                                           data-amp-store_name="Pier 1" data-amp-starts_shopping="true"
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
                                                 src="{{url("/images/favorites/icon_150x40_2.gif")}}"
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
                                           title="Shop now at Finish Line plus 6.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9379"
                                           data-amp-store_name="Finish Line" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/9379/finishline_icon_100x27.gif"
                                                 data-deal-id="12948068"
                                                 src="{{url("/images/favorites/finishline_icon_150x40.gif")}}"
                                                 alt="Shop now at Finish Line plus 6.0% Cash Back from Rakuten!"
                                                 title="Shop now at Finish Line plus 6.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Take an extra 25% off select cozy styles.</span>
                                            <span class="rebate cb">+6.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Limited Time Offer</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="COZY25">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="9379"
                                                                    data-amp-store_name="Finish Line">COZY25</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/04/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Finish Line"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9379"
                                           data-amp-store_name="Finish Line" data-amp-starts_shopping="true"
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
                                                 src="{{url("/images/favorites/icon-150x40-ebay.gif")}}"
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
                                                 src="{{url("/images/favorites/icon-150x40(3).gif")}}"
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
                                           target="_parent" title="Shop now at Keurig plus 2.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="12448"
                                           data-amp-store_name="Keurig" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/12448/icon-100x27-2.gif"
                                                 data-deal-id="12946931"
                                                 src="{{url("/images/favorites/icon-150x40-2(4).gif")}}"
                                                 alt="Shop now at Keurig plus 2.0% Cash Back from Rakuten!"
                                                 title="Shop now at Keurig plus 2.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Get $2.50 off each box.</span>
                                            <span class="rebate cb">+2.0% Cash Back</span>
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
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores">
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
                                           target="_parent"
                                           title="Shop now at KitchenAid plus 5.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9434"
                                           data-amp-store_name="KitchenAid" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/9434/kitchenaid_icon_100x27.gif"
                                                 data-deal-id="12310932"
                                                 src="{{url("/images/favorites/kitchenaid_icon_150x40.gif")}}"
                                                 alt="Shop now at KitchenAid plus 5.0% Cash Back from Rakuten!"
                                                 title="Shop now at KitchenAid plus 5.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Enjoy up to 50% off our best-selling bundle items.</span>
                                            <span class="rebate cb">+5.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code" data-clipboard-text="SAVEMORE20">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="9434"
                                                                    data-amp-store_name="KitchenAid">SAVEMORE20</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at KitchenAid"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="9434"
                                           data-amp-store_name="KitchenAid" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at BarkBox plus $9.00 Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="11591"
                                           data-amp-store_name="BarkBox" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/11591/barkbox_icon_100x27a.gif"
                                                 data-deal-id="12865724"
                                                 src="{{url("/images/favorites/barkbox_icon_150x40a.gif")}}"
                                                 alt="Shop now at BarkBox plus $9.00 Cash Back from Rakuten!"
                                                 title="Shop now at BarkBox plus $9.00 Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Get a free month when you subscribe to a 6- or 12-month plan.</span>
                                            <span class="rebate cb">+$9.00 Cash Back</span>
                                        </li>
                                        <li class="coupon-restrictions">
                                            <span>Terms and Exclusions Apply, See Site for Details</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at BarkBox"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="11591"
                                           data-amp-store_name="BarkBox" data-amp-starts_shopping="true"
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
                                                 data-deal-id="12944917"
                                                 src="{{url("/images/favorites/icon_150x40(6).gif")}}"
                                                 alt="Shop now at Magazines.com plus 25.0% Cash Back from Rakuten!"
                                                 title="Shop now at Magazines.com plus 25.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Popular Subscriptions Now: $1 or Less Per Issue.</span>
                                            <span class="rebate cb">+25.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 5/01/2020
                            </span>
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
                                           target="_parent" title="Shop now at Zulily plus 1.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10576"
                                           data-amp-store_name="Zulily" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10576/icon_100x27.gif"
                                                 data-deal-id="12947472"
                                                 src="{{url("/images/favorites/icon_150x40(7).gif")}}"
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
                                           title="Shop now at Belk.com plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10764"
                                           data-amp-store_name="Belk.com" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10764/icon_100x27.gif"
                                                 data-deal-id="12948737"
                                                 src="{{url("/images/favorites/icon_150x40(8).gif")}}"
                                                 alt="Shop now at Belk.com plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at Belk.com plus 4.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">35% off reg/Sale orders (25% select Better and Designer Brands, 15% off Kitchen Electrics, What Goes Around Comes Around and Designer Sunglasses)</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="85591495">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="10764"
                                                                    data-amp-store_name="Belk.com">85591495</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/12/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Belk.com"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="10764"
                                           data-amp-store_name="Belk.com" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent" title="Shop now at eBags plus 5.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="82" data-amp-store_name="eBags"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/82/icon-100x27.gif"
                                                 data-deal-id="12947996"
                                                 src="{{url("/images/favorites/icon-150x40(4).gif")}}"
                                                 alt="Shop now at eBags plus 5.0% Cash Back from Rakuten!"
                                                 title="Shop now at eBags plus 5.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Get up to 50% off the North Face.</span>
                                            <span class="rebate cb">+5.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">

                                                        <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/04/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at eBags"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="82"
                                           data-amp-store_name="eBags" data-amp-starts_shopping="true"
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
                                                 src="{{url("/images/favorites/backcountry_icon_150x40.gif")}}"
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
                                           target="_parent" title="Shop now at Coach plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="11222"
                                           data-amp-store_name="Coach" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/11222/icon_100x27.gif"
                                                 data-deal-id="12936202"
                                                 src="{{url("/images/favorites/icon_150x40(9).gif")}}"
                                                 alt="Shop now at Coach plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at Coach plus 4.0% Cash Back from Rakuten!" width="150"
                                                 height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">Up To 50% Jackets And Ready-To-Wear Sale + Extra 20% Off.</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
                                        </li>
                                        <li class="coupon-code-blk">
                                                        <span class="coupon-code"
                                                              data-clipboard-text="EXTRA20">Code: <span
                                                                    class="promo-code prox-b f-grn"
                                                                    data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                                                    data-amp-evt-type="Click Module"
                                                                    data-amp-module_name="Hot Deals Coupons"
                                                                    data-amp-item_type="Copy Hot Deal Code"
                                                                    data-amp-store_id="11222"
                                                                    data-amp-store_name="Coach">EXTRA20</span>
                                <div class="copy-coupon-code-tooltip copybtn tooltip  favStores ">
                                    <span class="copy">Click to copy</span>
                                </div>
                            </span>

                                            <span class="premium-expire expires">
                                <span class="fa-clock-o expires"></span>Expires 4/11/2020
                            </span>
                                        </li>
                                    </ul>
                                    <div class="shopnow">
                                        <a href="" rel="nofollow" data-navigation-id="22887" target="_blank"
                                           class="button secondary ghost frt" title="Shop Now at Coach"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name,starts_shopping"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Shop Now" data-amp-store_id="11222"
                                           data-amp-store_name="Coach" data-amp-starts_shopping="true"
                                           data-event-signature="ec,ea" data-ec="" data-ea="Hot Deals Shop Now - Click">Shop
                                            Now</a>
                                    </div>
                                </div>


                                <div class="coupon-blk logo-blk blk">
                                    <div class="merchlogo">
                                        <a href="" data-navigation-id="22887"
                                           target="_parent"
                                           title="Shop now at SkinCareRx plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="9948"
                                           data-amp-store_name="SkinCareRx" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/merchant_logo/9948/skincarerx_icon_100x27.gif"
                                                 data-deal-id="12944891"
                                                 src="{{url("/images/favorites/skincarerx_icon_150x40.gif")}}"
                                                 alt="Shop now at SkinCareRx plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at SkinCareRx plus 4.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">30% off Bath and Body Products.</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
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
                                           title="Shop now at Ray-Ban plus 4.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="10845"
                                           data-amp-store_name="Ray-Ban" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/img/store/10845/icon_100x27_a.gif"
                                                 data-deal-id="12946512"
                                                 src="{{url("/images/favorites/icon_150x40_b.gif")}}"
                                                 alt="Shop now at Ray-Ban plus 4.0% Cash Back from Rakuten!"
                                                 title="Shop now at Ray-Ban plus 4.0% Cash Back from Rakuten!"
                                                 width="150" height="40" style="display: block;">
                                        </a>
                                    </div>
                                    <ul class="coupon-info">
                                        <li class="coupon-desc prox-b">
                                            <span class="title-part">30% off any order and Free shipping.</span>
                                            <span class="rebate cb">+4.0% Cash Back</span>
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
                                           title="Shop now at Sephora plus Up to 8.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="4548"
                                           data-amp-store_name="Sephora" data-event-signature="ec,ea" data-ec=""
                                           data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/4548/icon-100x27.gif"
                                                 data-deal-id="12936440"
                                                 src="{{url("/images/favorites/icon-150x40(5).gif")}}"
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
                                           title="Shop now at Burpee Gardening plus 5.0% Cash Back from Rakuten!"
                                           data-amp-evt-sig="module_name,item_type,store_id,store_name"
                                           data-amp-evt-type="Click Module" data-amp-module_name="Hot Deals Coupons"
                                           data-amp-item_type="Logo" data-amp-store_id="105"
                                           data-amp-store_name="Burpee Gardening" data-event-signature="ec,ea"
                                           data-ec="" data-ea="Hot Deals - Click">
                                            <img class="special-logo lazy"
                                                 data-small-image="https://static.ebates.com/image/store/icon/105/icon-100x27-2.gif"
                                                 data-deal-id="12070167"
                                                 src="{{url("/images/favorites/icon-150x40-2(5).gif")}}"
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