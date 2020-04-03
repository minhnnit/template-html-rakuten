<?php $elementsHeader = 'elements.sub-header'; ?>
<?php $elementsFooter = 'elements.sub-footer'; ?>
@extends('app')
@section('content')
    {{--extend css--}}
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/accountSettings/account-r4-1080891696.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/accountSettings/account-recovery-d06e79d8ec.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{url("/css/accountSettings/postshopping.1.0.2.a.css")}}">
    {{--extend js--}}
        <script src="{{url("/js/accountSettings/on_off_switch.1.0.0.min.js")}}"></script>
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
                    <div id="right-blk" class="blk main blk-reg border border-t-0">
                        <div id="notifications"></div>


                        <div class="blk">
                            <h3 class="f-24 lh-28 pad-30-lr pad-30-t pad-25-b">Account Settings</h3>


                            <div class="profile-info-head prox-b f-gry-dk">Profile Information</div>
                            <div class="profile-information">
                                <div class="profile-options">
                                    <div class="profile-option  blk border round3">
                                        <div class="profile-head f-16 lh-20 prox-b f-gry-dk mar-10-b">Email</div>
                                        <div class="profile-details">
                                            <span class="email-copy blk f-16 lh-20">ng*****@gmail.com</span>
                                            <span class="change-email-link update-email-link pointer">
                                            Change Email Address
                                    </span>
                                        </div>
                                    </div>
                                    <div class="profile-option blk round3 border ">
                                        <div class="profile-head f-16 lh-20 prox-b f-gry-dk mar-10-b">
                                            Password
                                        </div>
                                        <div class="profile-details ">
                                            <span class="password-copy f-16 lh-20">**********</span>
                                            <span class="change-pwd-link pointer">Change Password</span>
                                        </div>
                                    </div>
                                    <div class="profile-option  blk round3 border-bg-blue reautherissue no-mobile-number">
                                        <div class="profile-head f-16 lh-20 prox-b f-indigo mar-20-b">
                                            Mobile Number
                                            <i class="fa fa-exclamation-circle f-indigo frt f-20 lh-20"></i></div>
                                        <div class="profile-details">
                    <span class="mobile-copy f-indigo f-16 lh-20">
                                                    Add a number for account recovery in case you forget your password or lose access.
                                            </span>
                                            <span class="button primary alt frt  add-mobile-number-modal pointer">Add Mobile Number</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <style>
                            .payPText {
                                display: inline-block;
                                width: 100%;
                            }

                            .bdr-0 {
                                border: none;
                            }
                        </style>

                        <div id="bfc-setting" class="pay-methods blk">
                            <h3>
                                <span class="fa-exclamation-circle mar-15-r"></span> How would you like to get paid?
                            </h3>
                            <div id="notifications-bfc" data-attr="myaccount/updateBFPSInfo.do"></div>


                            <div class="blk blk-reg">
                                <div class="blk payment-options noPyamentMethod">
                                    <div id="PayPalDiv" class="blk border round3">
                                        <div class="payment-option">
                            <span class="payment-option-logo pay-pal">
                    <img class="lazy" src="{{url("/images/accountSettings/Paypal.png")}}"
                         alt="" height="28" style="display: inline;">
                </span>
                                            <a class="change-link-1 pplink trigger-modal-bfc nohover noPpl pointer"
                                               data-amp-evt-type="Click Module"
                                               data-amp-evt-sig="module_name,item_type,address_status"
                                               data-amp-module_name="Payment Method" data-amp-item_type="PayPal"
                                               data-amp-address_status="False">Get Cash Back sent to PayPal</a>
                                        </div>
                                    </div>
                                    <div id="address_block" class="blk border round3">
                                        <div class="payment-option">
                                            <span class="payment-option-logo check"></span> <span class="big-fat-check">Big Fat Check</span>
                                            <a class="change-link-1 trigger-modal-bfc change-address norAdd nohover pointer"
                                               data-amp-evt-type="Click Module"
                                               data-amp-evt-sig="module_name,item_type,address_status"
                                               data-amp-module_name="Payment Method" data-amp-item_type="Check"
                                               data-amp-address_status="False">Get Cash Back in a Check</a>
                                        </div>
                                    </div>
                                    <div id="amex-blk" class="blk border round3 " data-prod-domain="true">
                                        <div class="payment-option ">
                            <span class="payment-option-logo amex-logo mar-20-b">
                    <img src="{{url("/images/accountSettings/amex-stacked-2x.png")}}" class=""
                         alt="" height="30" width="110">
                </span>
                                            <div class="blk prox-r f-16 lh-20 f-sec">
                    <span class=" flt amex-switch-copy">
                        Before switching to earning Membership Rewards® points, select a payment method above for any pending Cash Back.
                    </span>
                                                <span class="learn-more-link ">
                        <a href="https://www.rakuten.com/help/article/earning-american-express-membership-rewards-points-on-rakuten-360017609253"
                           class="nohover f-16 lh-20 ebates-grn" data-amp-evt-type="Click Module"
                           data-amp-evt-sig="module_name,item_type" data-amp-module_name="Payment Method"
                           data-amp-item_type="Learn About Amex">Learn About Earning Points</a>
                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        ebates.js.require("/dist/static/rev/account/payment-update-645a14d14f.js");
                                    </script>
                                </div>

                                <div id="paypalToCheck-overlay" class="mar-10-t hide">
                                    <div class="pad-30">
                                        <a class="right remove-ovr frt nohover pointer mar-5-r" id="disable"><i
                                                    class="fa fa-times"></i></a>
                                        <form id="paypalToCheckFORM" name="paypalToCheckCaptchaFORM" class="subViewObj">
                                            <input type="hidden" name="key" id="key" value="paypalToCheckCaptchaFORM">
                                            <input type="hidden" name="paymentMethod" id="paymentMethod" value="1">
                                            <input type="hidden" id="_csrf" name="_csrf"
                                                   value="5f4b9b40-5fbb-4c45-bedf-69378d0684e0">
                                            <input type="hidden" name="isAjax" value="true">
                                            <div class="paypalToCheck-captcha-widget">
                                                <p class="cap-txt center mar-20-b lh-20">Verification is required to
                                                    update your settings:</p>
                                                <div id="captcha_div" class="blk ht-46">
                                                    <img id="captchapaypalToCheckImg" class="ht-46 flt mar-10-r"
                                                         height="46px">
                                                    <div id="refreshpaypalToCheck"
                                                         class="flt square-46 pointer round3 lh-46 f-cent b-box"><i
                                                                class="fa f-16 fa-repeat pointer" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div id="personal-captcha-error" class="hide mar-10-tb error-red"></div>
                                                <input type="text" name="ebatesCaptcha" id="paypalToCheckCaptcha"
                                                       class="round3 border iblk captcha digit ht-46 w-300 b-box pad-20-lr"
                                                       placeholder="Type the code" value="" maxlength="7" tabindex="21">
                                            </div>
                                            <div class="center mar-10-t">
                                                <button class="button int w-300" id="paypalToCheckCaptcha-verify"
                                                        value="submit" type="button" alt="submit">Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div id="userProfile-overlay" class="address-popup hide amex-overlay">
                                    <a class="right ui2014 remove-ovr frt nohover pointer" id="disable"
                                       data-amp-evt-type="Dismiss Modal" data-amp-evt-sig="modal_name"
                                       data-amp-modal_name="Add Address">&nbsp;</a>
                                    <h3 class="f-grn f-24 pad-20-b pad-10-lr center">
                                        <span class="pplNheader">Add your Address</span>
                                    </h3>

                                    <div id="account-container" class="cbsettings userProfile-sett">
                                        <p class="pad-30-b center"></p>

                                        <form name="paymentOptionForm" id="paymentOptionForm" novalidate="novalidate"
                                              class="cbsettingsform ebform" data-qas="/qas/prowebproxy.jsp">
                                            <input type="hidden" id="_csrf" name="_csrf"
                                                   value="5f4b9b40-5fbb-4c45-bedf-69378d0684e0">
                                            <input type="hidden" name="isAjax" value="true">
                                            <input type="hidden" name="myebates_change_identifier"
                                                   id="myebates_change_identifier" value="ebates">
                                            <input type="hidden" name="thirdParty" id="thirdParty" value="F">
                                            <input type="hidden" name="paymentType" id="paymentType" value="1">
                                            <input type="hidden" name="key" id="key" value="paymentOptionForm">
                                            <div id="paymentsettings">


                                                <div id="recipientuser">
                                                    <select class="usc_address hide" id="usc_address"></select>


                                                    <input type="text" name="userfirstname" id="userfirstname"
                                                           placeholder="First Name" value="Minh" maxlength="255"
                                                           tabindex="1" required="required" data-attr="Minh">


                                                    <input type="text" name="userlastname" id="userlastname"
                                                           placeholder="Last Name" value="Nguyễn Như" maxlength="255"
                                                           tabindex="2" required="required" data-attr="Nguyễn Như">


                                                    <input type="text" name="useraddress1" id="useraddress1"
                                                           placeholder="Street Address 1" value="" maxlength="255"
                                                           tabindex="3" required="required" data-attr="">


                                                    <input type="text" name="useraddress2" id="useraddress2"
                                                           placeholder="Street Address 2 - Optional" value=""
                                                           maxlength="255" tabindex="4" data-attr="">


                                                    <input type="text" name="usercity" id="usercity" placeholder="City"
                                                           value="" maxlength="255" tabindex="5" required="required"
                                                           data-attr="">


                                                    <select name="userstateprovince" id="userstateprovince" tabindex="6"
                                                            class="smallfld mar-15-r" required="required" data-attr="">
                                                        <option class="gry" value="" disabled="disabled"
                                                                selected="selected" data-attr="State/Province">
                                                            State/Province
                                                        </option>
                                                        <option data-attr="AL" value="1">AL</option>
                                                        <option data-attr="AK" value="2">AK</option>
                                                        <option data-attr="AZ" value="3">AZ</option>
                                                        <option data-attr="AR" value="4">AR</option>
                                                        <option data-attr="CA" value="5">CA</option>
                                                        <option data-attr="CO" value="6">CO</option>
                                                        <option data-attr="CT" value="7">CT</option>
                                                        <option data-attr="DE" value="8">DE</option>
                                                        <option data-attr="DC" value="9">DC</option>
                                                        <option data-attr="FL" value="10">FL</option>
                                                        <option data-attr="GA" value="11">GA</option>
                                                        <option data-attr="HI" value="12">HI</option>
                                                        <option data-attr="ID" value="13">ID</option>
                                                        <option data-attr="IL" value="14">IL</option>
                                                        <option data-attr="IN" value="15">IN</option>
                                                        <option data-attr="IA" value="16">IA</option>
                                                        <option data-attr="KS" value="17">KS</option>
                                                        <option data-attr="KY" value="18">KY</option>
                                                        <option data-attr="LA" value="19">LA</option>
                                                        <option data-attr="ME" value="20">ME</option>
                                                        <option data-attr="MD" value="21">MD</option>
                                                        <option data-attr="MA" value="22">MA</option>
                                                        <option data-attr="MI" value="23">MI</option>
                                                        <option data-attr="MN" value="24">MN</option>
                                                        <option data-attr="MS" value="25">MS</option>
                                                        <option data-attr="MO" value="26">MO</option>
                                                        <option data-attr="MT" value="27">MT</option>
                                                        <option data-attr="NE" value="28">NE</option>
                                                        <option data-attr="NV" value="29">NV</option>
                                                        <option data-attr="NH" value="30">NH</option>
                                                        <option data-attr="NJ" value="31">NJ</option>
                                                        <option data-attr="NM" value="32">NM</option>
                                                        <option data-attr="NY" value="33">NY</option>
                                                        <option data-attr="NC" value="34">NC</option>
                                                        <option data-attr="ND" value="35">ND</option>
                                                        <option data-attr="OH" value="36">OH</option>
                                                        <option data-attr="OK" value="37">OK</option>
                                                        <option data-attr="OR" value="38">OR</option>
                                                        <option data-attr="PA" value="39">PA</option>
                                                        <option data-attr="PR" value="40">PR</option>
                                                        <option data-attr="RI" value="41">RI</option>
                                                        <option data-attr="SC" value="42">SC</option>
                                                        <option data-attr="SD" value="43">SD</option>
                                                        <option data-attr="TN" value="44">TN</option>
                                                        <option data-attr="TX" value="45">TX</option>
                                                        <option data-attr="UT" value="46">UT</option>
                                                        <option data-attr="VT" value="47">VT</option>
                                                        <option data-attr="VI" value="48">VI</option>
                                                        <option data-attr="VA" value="49">VA</option>
                                                        <option data-attr="WA" value="50">WA</option>
                                                        <option data-attr="WV" value="51">WV</option>
                                                        <option data-attr="WI" value="52">WI</option>
                                                        <option data-attr="WY" value="53">WY</option>
                                                        <option data-attr="AA" value="54">AA</option>
                                                        <option data-attr="AE" value="55">AE</option>
                                                        <option data-attr="AP" value="56">AP</option>
                                                        <option data-attr="GU" value="70">GU</option>
                                                    </select>


                                                    <input type="text" name="userpostalcode" id="userpostalcode"
                                                           placeholder="Postal Code" value="" maxlength="255"
                                                           tabindex="7" class="smallfld mar-15-r" required="required"
                                                           data-attr="">


                                                    <select name="usercountry" id="usercountry" tabindex="8"
                                                            class="floatLeft" required="required"
                                                            data-attr="UNITED STATES">
                                                        <option value="1" selected="selected" data-attr="UNITED STATES">
                                                            UNITED STATES
                                                        </option>
                                                        <option value="2" data-attr="CANADA">CANADA</option>
                                                        <option value="3" data-attr="AFGHANISTAN">AFGHANISTAN</option>
                                                        <option value="4" data-attr="ALBANIA">ALBANIA</option>
                                                        <option value="5" data-attr="ALGERIA">ALGERIA</option>
                                                        <option value="6" data-attr="AMERICAN SAMOA">AMERICAN SAMOA
                                                        </option>
                                                        <option value="7" data-attr="ANDORRA">ANDORRA</option>
                                                        <option value="8" data-attr="ANGOLA">ANGOLA</option>
                                                        <option value="9" data-attr="ANGUILLA">ANGUILLA</option>
                                                        <option value="10" data-attr="ANTARCTICA">ANTARCTICA</option>
                                                        <option value="11" data-attr="ANTIGUA AND BARBUDA">ANTIGUA AND
                                                            BARBUDA
                                                        </option>
                                                        <option value="12" data-attr="ARGENTINA">ARGENTINA</option>
                                                        <option value="13" data-attr="ARMENIA">ARMENIA</option>
                                                        <option value="14" data-attr="ARUBA">ARUBA</option>
                                                        <option value="15" data-attr="AUSTRALIA">AUSTRALIA</option>
                                                        <option value="16" data-attr="AUSTRIA">AUSTRIA</option>
                                                        <option value="17" data-attr="AZERBAIJAN">AZERBAIJAN</option>
                                                        <option value="18" data-attr="BAHAMAS">BAHAMAS</option>
                                                        <option value="19" data-attr="BAHRAIN">BAHRAIN</option>
                                                        <option value="20" data-attr="BANGLADESH">BANGLADESH</option>
                                                        <option value="21" data-attr="BARBADOS">BARBADOS</option>
                                                        <option value="22" data-attr="BELARUS">BELARUS</option>
                                                        <option value="23" data-attr="BELGIUM">BELGIUM</option>
                                                        <option value="24" data-attr="BELIZE">BELIZE</option>
                                                        <option value="25" data-attr="BENIN">BENIN</option>
                                                        <option value="26" data-attr="BERMUDA">BERMUDA</option>
                                                        <option value="27" data-attr="BHUTAN">BHUTAN</option>
                                                        <option value="28" data-attr="BOLIVIA">BOLIVIA</option>
                                                        <option value="29" data-attr="BOSNIA AND HERZEGOWINA">BOSNIA AND
                                                            HERZEGOWINA
                                                        </option>
                                                        <option value="30" data-attr="BOTSWANA">BOTSWANA</option>
                                                        <option value="31" data-attr="BOUVET ISLAND">BOUVET ISLAND
                                                        </option>
                                                        <option value="32" data-attr="BRAZIL">BRAZIL</option>
                                                        <option value="33" data-attr="BRITISH INDIAN OCEAN TERRITORY">
                                                            BRITISH INDIAN OCEAN TERRITORY
                                                        </option>
                                                        <option value="34" data-attr="BRUNEI DARUSSALAM">BRUNEI
                                                            DARUSSALAM
                                                        </option>
                                                        <option value="35" data-attr="BULGARIA">BULGARIA</option>
                                                        <option value="36" data-attr="BURKINA FASO">BURKINA FASO
                                                        </option>
                                                        <option value="37" data-attr="BURUNDI">BURUNDI</option>
                                                        <option value="38" data-attr="CAMBODIA">CAMBODIA</option>
                                                        <option value="39" data-attr="CAMEROON">CAMEROON</option>
                                                        <option value="40" data-attr="CAPE VERDE">CAPE VERDE</option>
                                                        <option value="41" data-attr="CAYMAN ISLANDS">CAYMAN ISLANDS
                                                        </option>
                                                        <option value="42" data-attr="CENTRAL AFRICAN REPUBLIC">CENTRAL
                                                            AFRICAN REPUBLIC
                                                        </option>
                                                        <option value="43" data-attr="CHAD">CHAD</option>
                                                        <option value="44" data-attr="CHILE">CHILE</option>
                                                        <option value="45" data-attr="CHINA">CHINA</option>
                                                        <option value="46" data-attr="CHRISTMAS ISLAND">CHRISTMAS
                                                            ISLAND
                                                        </option>
                                                        <option value="47" data-attr="COCOS (KEELING) ISLANDS">COCOS
                                                            (KEELING) ISLANDS
                                                        </option>
                                                        <option value="48" data-attr="COLOMBIA">COLOMBIA</option>
                                                        <option value="49" data-attr="COMOROS">COMOROS</option>
                                                        <option value="50" data-attr="CONGO">CONGO</option>
                                                        <option value="51" data-attr="COOK ISLANDS">COOK ISLANDS
                                                        </option>
                                                        <option value="52" data-attr="COSTA RICA">COSTA RICA</option>
                                                        <option value="53" data-attr="COTE D&#39;IVOIRE">COTE D'IVOIRE
                                                        </option>
                                                        <option value="54" data-attr="CROATIA (local name: Hrvatska)">
                                                            CROATIA (local name: Hrvatska)
                                                        </option>
                                                        <option value="56" data-attr="CYPRUS">CYPRUS</option>
                                                        <option value="57" data-attr="CZECH REPUBLIC">CZECH REPUBLIC
                                                        </option>
                                                        <option value="58" data-attr="DENMARK">DENMARK</option>
                                                        <option value="59" data-attr="DJIBOUTI">DJIBOUTI</option>
                                                        <option value="60" data-attr="DOMINICA">DOMINICA</option>
                                                        <option value="61" data-attr="DOMINICAN REPUBLIC">DOMINICAN
                                                            REPUBLIC
                                                        </option>
                                                        <option value="62" data-attr="EAST TIMOR">EAST TIMOR</option>
                                                        <option value="63" data-attr="ECUADOR">ECUADOR</option>
                                                        <option value="64" data-attr="EGYPT">EGYPT</option>
                                                        <option value="65" data-attr="EL SALVADOR">EL SALVADOR</option>
                                                        <option value="66" data-attr="EQUATORIAL GUINEA">EQUATORIAL
                                                            GUINEA
                                                        </option>
                                                        <option value="67" data-attr="ERITREA">ERITREA</option>
                                                        <option value="68" data-attr="ESTONIA">ESTONIA</option>
                                                        <option value="69" data-attr="ETHIOPIA">ETHIOPIA</option>
                                                        <option value="70" data-attr="FALKLAND ISLANDS (MALVINAS)">
                                                            FALKLAND ISLANDS (MALVINAS)
                                                        </option>
                                                        <option value="71" data-attr="FAROE ISLANDS">FAROE ISLANDS
                                                        </option>
                                                        <option value="72" data-attr="FIJI">FIJI</option>
                                                        <option value="73" data-attr="FINLAND">FINLAND</option>
                                                        <option value="74" data-attr="FRANCE">FRANCE</option>
                                                        <option value="75" data-attr="FRANCE-METROPOLITAN">
                                                            FRANCE-METROPOLITAN
                                                        </option>
                                                        <option value="76" data-attr="FRENCH GUIANA">FRENCH GUIANA
                                                        </option>
                                                        <option value="77" data-attr="FRENCH POLYNESIA">FRENCH
                                                            POLYNESIA
                                                        </option>
                                                        <option value="78" data-attr="FRENCH SOUTHERN TERRITORIES">
                                                            FRENCH SOUTHERN TERRITORIES
                                                        </option>
                                                        <option value="79" data-attr="GABON">GABON</option>
                                                        <option value="80" data-attr="GAMBIA">GAMBIA</option>
                                                        <option value="81" data-attr="GEORGIA">GEORGIA</option>
                                                        <option value="82" data-attr="GERMANY">GERMANY</option>
                                                        <option value="83" data-attr="GHANA">GHANA</option>
                                                        <option value="84" data-attr="GIBRALTAR">GIBRALTAR</option>
                                                        <option value="85" data-attr="GREECE">GREECE</option>
                                                        <option value="86" data-attr="GREENLAND">GREENLAND</option>
                                                        <option value="87" data-attr="GRENADA">GRENADA</option>
                                                        <option value="88" data-attr="GUADELOUPE">GUADELOUPE</option>
                                                        <option value="89" data-attr="GUAM">GUAM</option>
                                                        <option value="90" data-attr="GUATEMALA">GUATEMALA</option>
                                                        <option value="91" data-attr="GUINEA">GUINEA</option>
                                                        <option value="92" data-attr="GUINEA-BISSAU">GUINEA-BISSAU
                                                        </option>
                                                        <option value="93" data-attr="GUYANA">GUYANA</option>
                                                        <option value="94" data-attr="HAITI">HAITI</option>
                                                        <option value="95" data-attr="HEARD AND MC DONALD ISLANDS">HEARD
                                                            AND MC DONALD ISLANDS
                                                        </option>
                                                        <option value="96" data-attr="HONDURAS">HONDURAS</option>
                                                        <option value="97" data-attr="HONG KONG">HONG KONG</option>
                                                        <option value="98" data-attr="HUNGARY">HUNGARY</option>
                                                        <option value="99" data-attr="ICELAND">ICELAND</option>
                                                        <option value="100" data-attr="INDIA">INDIA</option>
                                                        <option value="101" data-attr="INDONESIA">INDONESIA</option>
                                                        <option value="103" data-attr="IRAQ">IRAQ</option>
                                                        <option value="104" data-attr="IRELAND">IRELAND</option>
                                                        <option value="105" data-attr="ISRAEL">ISRAEL</option>
                                                        <option value="106" data-attr="ITALY">ITALY</option>
                                                        <option value="107" data-attr="JAMAICA">JAMAICA</option>
                                                        <option value="108" data-attr="JAPAN">JAPAN</option>
                                                        <option value="109" data-attr="JORDAN">JORDAN</option>
                                                        <option value="110" data-attr="KAZAKHSTAN">KAZAKHSTAN</option>
                                                        <option value="111" data-attr="KENYA">KENYA</option>
                                                        <option value="112" data-attr="KIRIBATI">KIRIBATI</option>
                                                        <option value="114" data-attr="KOREA-REPUBLIC OF">KOREA-REPUBLIC
                                                            OF
                                                        </option>
                                                        <option value="115" data-attr="KUWAIT">KUWAIT</option>
                                                        <option value="116" data-attr="KYRGYZSTAN">KYRGYZSTAN</option>
                                                        <option value="117"
                                                                data-attr="LAO PEOPLE&#39;S DEMOCRATIC REPUBLIC">LAO
                                                            PEOPLE'S DEMOCRATIC REPUBLIC
                                                        </option>
                                                        <option value="118" data-attr="LATVIA">LATVIA</option>
                                                        <option value="119" data-attr="LEBANON">LEBANON</option>
                                                        <option value="120" data-attr="LESOTHO">LESOTHO</option>
                                                        <option value="121" data-attr="LIBERIA">LIBERIA</option>
                                                        <option value="122" data-attr="LIBYAN ARAB JAMAHIRIYA">LIBYAN
                                                            ARAB JAMAHIRIYA
                                                        </option>
                                                        <option value="123" data-attr="LIECHTENSTEIN">LIECHTENSTEIN
                                                        </option>
                                                        <option value="124" data-attr="LITHUANIA">LITHUANIA</option>
                                                        <option value="125" data-attr="LUXEMBOURG">LUXEMBOURG</option>
                                                        <option value="126" data-attr="MACAU">MACAU</option>
                                                        <option value="127" data-attr="MACEDONIA">MACEDONIA</option>
                                                        <option value="128" data-attr="MADAGASCAR">MADAGASCAR</option>
                                                        <option value="129" data-attr="MALAWI">MALAWI</option>
                                                        <option value="130" data-attr="MALAYSIA">MALAYSIA</option>
                                                        <option value="131" data-attr="MALDIVES">MALDIVES</option>
                                                        <option value="132" data-attr="MALI">MALI</option>
                                                        <option value="133" data-attr="MALTA">MALTA</option>
                                                        <option value="134" data-attr="MARSHALL ISLANDS">MARSHALL
                                                            ISLANDS
                                                        </option>
                                                        <option value="135" data-attr="MARTINIQUE">MARTINIQUE</option>
                                                        <option value="136" data-attr="MAURITANIA">MAURITANIA</option>
                                                        <option value="137" data-attr="MAURITIUS">MAURITIUS</option>
                                                        <option value="138" data-attr="MAYOTTE">MAYOTTE</option>
                                                        <option value="139" data-attr="MEXICO">MEXICO</option>
                                                        <option value="140" data-attr="MICRONESIA-FEDERATED STATES OF">
                                                            MICRONESIA-FEDERATED STATES OF
                                                        </option>
                                                        <option value="141" data-attr="MOLDOVA-REPUBLIC OF">
                                                            MOLDOVA-REPUBLIC OF
                                                        </option>
                                                        <option value="142" data-attr="MONACO">MONACO</option>
                                                        <option value="143" data-attr="MONGOLIA">MONGOLIA</option>
                                                        <option value="144" data-attr="MONTSERRAT">MONTSERRAT</option>
                                                        <option value="145" data-attr="MOROCCO">MOROCCO</option>
                                                        <option value="146" data-attr="MOZAMBIQUE">MOZAMBIQUE</option>
                                                        <option value="147" data-attr="MYANMAR">MYANMAR</option>
                                                        <option value="148" data-attr="NAMIBIA">NAMIBIA</option>
                                                        <option value="149" data-attr="NAURU">NAURU</option>
                                                        <option value="150" data-attr="NEPAL">NEPAL</option>
                                                        <option value="151" data-attr="NETHERLANDS">NETHERLANDS</option>
                                                        <option value="153" data-attr="NEW CALEDONIA">NEW CALEDONIA
                                                        </option>
                                                        <option value="154" data-attr="NEW ZEALAND">NEW ZEALAND</option>
                                                        <option value="155" data-attr="NICARAGUA">NICARAGUA</option>
                                                        <option value="156" data-attr="NIGER">NIGER</option>
                                                        <option value="157" data-attr="NIGERIA">NIGERIA</option>
                                                        <option value="158" data-attr="NIUE">NIUE</option>
                                                        <option value="159" data-attr="NORFOLK ISLAND">NORFOLK ISLAND
                                                        </option>
                                                        <option value="160" data-attr="NORTHERN MARIANA ISLANDS">
                                                            NORTHERN MARIANA ISLANDS
                                                        </option>
                                                        <option value="161" data-attr="NORWAY">NORWAY</option>
                                                        <option value="162" data-attr="OMAN">OMAN</option>
                                                        <option value="163" data-attr="PAKISTAN">PAKISTAN</option>
                                                        <option value="164" data-attr="PALAU">PALAU</option>
                                                        <option value="165" data-attr="PANAMA">PANAMA</option>
                                                        <option value="166" data-attr="PAPUA NEW GUINEA">PAPUA NEW
                                                            GUINEA
                                                        </option>
                                                        <option value="167" data-attr="PARAGUAY">PARAGUAY</option>
                                                        <option value="168" data-attr="PERU">PERU</option>
                                                        <option value="169" data-attr="PHILIPPINES">PHILIPPINES</option>
                                                        <option value="170" data-attr="PITCAIRN">PITCAIRN</option>
                                                        <option value="171" data-attr="POLAND">POLAND</option>
                                                        <option value="172" data-attr="PORTUGAL">PORTUGAL</option>
                                                        <option value="173" data-attr="PUERTO RICO">PUERTO RICO</option>
                                                        <option value="174" data-attr="QATAR">QATAR</option>
                                                        <option value="175" data-attr="REUNION">REUNION</option>
                                                        <option value="176" data-attr="ROMANIA">ROMANIA</option>
                                                        <option value="177" data-attr="RUSSIAN FEDERATION">RUSSIAN
                                                            FEDERATION
                                                        </option>
                                                        <option value="178" data-attr="RWANDA">RWANDA</option>
                                                        <option value="179" data-attr="SAINT KITTS AND NEVIS">SAINT
                                                            KITTS AND NEVIS
                                                        </option>
                                                        <option value="180" data-attr="SAINT LUCIA">SAINT LUCIA</option>
                                                        <option value="181"
                                                                data-attr="SAINT VINCENT AND THE GRENADINES">SAINT
                                                            VINCENT AND THE GRENADINES
                                                        </option>
                                                        <option value="182" data-attr="SAMOA">SAMOA</option>
                                                        <option value="183" data-attr="SAN MARINO">SAN MARINO</option>
                                                        <option value="184" data-attr="SAO TOME AND PRINCIPE">SAO TOME
                                                            AND PRINCIPE
                                                        </option>
                                                        <option value="185" data-attr="SAUDI ARABIA">SAUDI ARABIA
                                                        </option>
                                                        <option value="186" data-attr="SENEGAL">SENEGAL</option>
                                                        <option value="187" data-attr="SEYCHELLES">SEYCHELLES</option>
                                                        <option value="188" data-attr="SIERRA LEONE">SIERRA LEONE
                                                        </option>
                                                        <option value="189" data-attr="SINGAPORE">SINGAPORE</option>
                                                        <option value="190" data-attr="SLOVAKIA (Slovak Republic)">
                                                            SLOVAKIA (Slovak Republic)
                                                        </option>
                                                        <option value="191" data-attr="SLOVENIA">SLOVENIA</option>
                                                        <option value="192" data-attr="SOLOMON ISLANDS">SOLOMON
                                                            ISLANDS
                                                        </option>
                                                        <option value="193" data-attr="SOMALIA">SOMALIA</option>
                                                        <option value="194" data-attr="SOUTH AFRICA">SOUTH AFRICA
                                                        </option>
                                                        <option value="195" data-attr="SOUTH GEORGIA">SOUTH GEORGIA
                                                        </option>
                                                        <option value="196" data-attr="SPAIN">SPAIN</option>
                                                        <option value="197" data-attr="SRI LANKA">SRI LANKA</option>
                                                        <option value="198" data-attr="ST. HELENA">ST. HELENA</option>
                                                        <option value="199" data-attr="ST. PIERRE AND MIQUELON">ST.
                                                            PIERRE AND MIQUELON
                                                        </option>
                                                        <option value="201" data-attr="SURINAME">SURINAME</option>
                                                        <option value="202" data-attr="SVALBARD AND JAN MAYEN ISLANDS">
                                                            SVALBARD AND JAN MAYEN ISLANDS
                                                        </option>
                                                        <option value="203" data-attr="SWAZILAND">SWAZILAND</option>
                                                        <option value="204" data-attr="SWEDEN">SWEDEN</option>
                                                        <option value="205" data-attr="SWITZERLAND">SWITZERLAND</option>
                                                        <option value="207" data-attr="TAIWAN">TAIWAN</option>
                                                        <option value="208" data-attr="TAJIKISTAN">TAJIKISTAN</option>
                                                        <option value="209" data-attr="TANZANIA-UNITED REPUBLIC OF">
                                                            TANZANIA-UNITED REPUBLIC OF
                                                        </option>
                                                        <option value="210" data-attr="THAILAND">THAILAND</option>
                                                        <option value="211" data-attr="TOGO">TOGO</option>
                                                        <option value="212" data-attr="TOKELAU">TOKELAU</option>
                                                        <option value="213" data-attr="TONGA">TONGA</option>
                                                        <option value="214" data-attr="TRINIDAD AND TOBAGO">TRINIDAD AND
                                                            TOBAGO
                                                        </option>
                                                        <option value="215" data-attr="TUNISIA">TUNISIA</option>
                                                        <option value="216" data-attr="TURKEY">TURKEY</option>
                                                        <option value="217" data-attr="TURKMENISTAN">TURKMENISTAN
                                                        </option>
                                                        <option value="218" data-attr="TURKS AND CAICOS ISLANDS">TURKS
                                                            AND CAICOS ISLANDS
                                                        </option>
                                                        <option value="219" data-attr="TUVALU">TUVALU</option>
                                                        <option value="220" data-attr="UGANDA">UGANDA</option>
                                                        <option value="221" data-attr="UKRAINE">UKRAINE</option>
                                                        <option value="222" data-attr="UNITED ARAB EMIRATES">UNITED ARAB
                                                            EMIRATES
                                                        </option>
                                                        <option value="223" data-attr="UNITED KINGDOM">UNITED KINGDOM
                                                        </option>
                                                        <option value="224"
                                                                data-attr="UNITED STATES MINOR OUTLYING ISLANDS">UNITED
                                                            STATES MINOR OUTLYING ISLANDS
                                                        </option>
                                                        <option value="225" data-attr="URUGUAY">URUGUAY</option>
                                                        <option value="226" data-attr="UZBEKISTAN">UZBEKISTAN</option>
                                                        <option value="227" data-attr="VANUATU">VANUATU</option>
                                                        <option value="228" data-attr="VATICAN CITY STATE (HOLY SEE)">
                                                            VATICAN CITY STATE (HOLY SEE)
                                                        </option>
                                                        <option value="229" data-attr="VENEZUELA">VENEZUELA</option>
                                                        <option value="230" data-attr="VIET NAM">VIET NAM</option>
                                                        <option value="231" data-attr="VIRGIN ISLANDS (BRITISH)">VIRGIN
                                                            ISLANDS (BRITISH)
                                                        </option>
                                                        <option value="232" data-attr="VIRGIN ISLANDS (U.S.)">VIRGIN
                                                            ISLANDS (U.S.)
                                                        </option>
                                                        <option value="233" data-attr="WALLIS AND FUTUNA ISLANDS">WALLIS
                                                            AND FUTUNA ISLANDS
                                                        </option>
                                                        <option value="234" data-attr="WESTERN SAHARA">WESTERN SAHARA
                                                        </option>
                                                        <option value="235" data-attr="YEMEN">YEMEN</option>
                                                        <option value="238" data-attr="ZAMBIA">ZAMBIA</option>
                                                        <option value="239" data-attr="ZIMBABWE">ZIMBABWE</option>
                                                        <option value="240" data-attr="ALAND ISLANDS">ALAND ISLANDS
                                                        </option>
                                                        <option value="241" data-attr="SAINT BARTHELEMY">SAINT
                                                            BARTHELEMY
                                                        </option>
                                                        <option value="242"
                                                                data-attr="BONAIRE, SINT EUSTATIUS AND SABA">BONAIRE,
                                                            SINT EUSTATIUS AND SABA
                                                        </option>
                                                        <option value="243"
                                                                data-attr="CONGO (DEMOCRATIC REPUBLIC OF THE)">CONGO
                                                            (DEMOCRATIC REPUBLIC OF THE)
                                                        </option>
                                                        <option value="244" data-attr="CURACAO">CURACAO</option>
                                                        <option value="245" data-attr="GUERNSEY">GUERNSEY</option>
                                                        <option value="246" data-attr="ISLE OF MAN">ISLE OF MAN</option>
                                                        <option value="247" data-attr="JERSEY">JERSEY</option>
                                                        <option value="248" data-attr="MONTENEGRO">MONTENEGRO</option>
                                                        <option value="249" data-attr="SAINT MARTIN (FRENCH PART)">SAINT
                                                            MARTIN (FRENCH PART)
                                                        </option>
                                                        <option value="250" data-attr="PALESTINE">PALESTINE</option>
                                                        <option value="251" data-attr="SERBIA">SERBIA</option>
                                                        <option value="252" data-attr="SINT MAARTEN (DUTCH PART)">SINT
                                                            MAARTEN (DUTCH PART)
                                                        </option>
                                                    </select>
                                                    <div class="apofpo-link iblk mar-15-t rel flt mar-15-r f-12">
                                                        <a class="apofpo pointer f-gry-dk-8 txt_under">APO or FPO
                                                            information</a>
                                                        <div class="apotip border tooltip hide blk-reg pad-20">
                                                            <h5 class="prox-b mar-10-b">APO and FPO Addresses</h5>
                                                            <p class="content">Please enter APO or FPO in the City field
                                                                and select one of the following two-letter codes in the
                                                                State field: AE for Armed Forces Europe, Middle East,
                                                                Africa, and Canada; AA for Armed Forces Americas; and AP
                                                                for Armed Forces Pacific. Please make sure that you have
                                                                also selected United States in the Country field.</p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="user_address_verified"
                                                           id="user_address_verified" value="">

                                                </div>
                                            </div>
                                            <div class="mar-15-t f-12">
                                                <a href="https://www.rakuten.com/help/article/privacy-policy-360002101688"
                                                   class="pointer f-gry-dk-8 txt_under" target="_blank">Privacy
                                                    Policy</a>
                                            </div>
                                            <style>
                                                .g-recaptcha {
                                                    margin-left: 100px;
                                                    margin-right: 100px;
                                                    margin-top: 20px;
                                                }
                                            </style>
                                            <script>
                                                var siteKeyInfo = '6LeaJgcUAAAAAGvdeHpN60l0OrVT8znFD2fSB9Gl', recaptcha;
                                                var onloadCallback = function () {
                                                    recaptcha = grecaptcha.render('recaptcha', {
                                                        'sitekey': siteKeyInfo
                                                    });
                                                    grecaptcha.reset();
                                                };
                                            </script>
                                            <div id="recaptcha" class="g-recaptcha"
                                                 data-sitekey="6LeaJgcUAAAAAGvdeHpN60l0OrVT8znFD2fSB9Gl"></div>
                                            <div id="dwindow">
                                                <div class="close"><a onclick="closeit()" class="ui2012">&nbsp;</a>
                                                </div>
                                                <div id="dwindowcontent"></div>
                                            </div>
                                            <div class="frt submit-cont center mar-center mar-20-t"
                                                 data-amp-evt-type="Click Modal" data-amp-evt-sig="modal_name"
                                                 data-amp-modal_name="Address" data-amp-modal_type="Add Address"
                                                 data-amp-item_type="Submit">
                                                <button class="button int" id="save-pref" value="Update" type="submit"
                                                        alt="Submit">
                                                    <span class="pplNbtnCta">Add Address</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="social-section row">
                            <div class="prox-b f-20 lh-24 mar-15-b">Connected Accounts</div>
                            <div class="connect-tip f-16 lh-20">Connect your email or social media account for easy,
                                one-click sign-in. By connecting your email, we can automatically verify purchases and
                                get you information about Cash Back earned even faster.
                            </div>


                            <div class="acct-setting-box blk border round3 mar-10-b">
                                <img class="logo flt ht-30"
                                     src="{{url("/images/accountSettings/Google.png")}}">
                                <span class="checkmark"><i class="fa fa-check"></i></span>
                                <span class="exclaim hide"><i class="fas fa-exclamation-circle"></i></span>


                                <div class="connection border-b mar-30-b flt pad-30-b "
                                     data-email="nguyennhuminh1208@gmail.com">
                                    <div class="desc ">
                                        <div class="flt"><span class="prox-b">ng*****@gmail.com</span> is connected with
                                            Rakuten.
                                        </div>
                                        <a href="https://www.rakuten.com/unlinkEbatesUserWithGoogle.do?pmid=112703489448371464281"
                                           class="unlink nohover frt">Disconnect</a>
                                    </div>
                                </div>
                                <div class="desc connect-another">
                                    <a class="f-16 lh-20 iblk nohover pointer f-grn"
                                       onclick="window.open(&#39;/googleOAuth2.htm?callback=onConnectCallback&#39;,&#39;popUpWindow&#39;,&#39;height=500,width=600,left=200,top=100,resizable=yes,scrollbars=yes&#39;);">Connect
                                        Another Google Account</a>
                                </div>
                            </div>
                            <div class="acct-setting-box blk border round3 mar-10-b">
                                <img class="logo flt ht-30"
                                     src="{{url("/images/accountSettings/Microsoft.png")}}">
                                <div class="desc frt">
                                    <a class="f-16 lh-30 iblk nohover pointer "
                                       onclick="window.open(&#39;/microsoftOAuth2.htm&#39;,&#39;popUpWindow&#39;,&#39;height=500,width=600,left=200,top=100,resizable=yes,scrollbars=yes&#39;);">Connect
                                        Microsoft</a>
                                </div>
                            </div>
                            <div class="acct-setting-box facebook blk border round3 ">
                                <img class="logo flt ht-30"
                                     src="{{url("/images/accountSettings/Facebook.png")}}">
                                <div class="desc frt">
                                    <a class="facebook_connect f-16 lh-30 iblk nohover"
                                       href="javascript:linkWithFacebook(&#39;214330088590858&#39;, &#39;https://www.rakuten.com/&#39;,&#39;https://www.rakuten.com/fbOAuth2callback.htm&#39;,&#39;&#39;,&#39;fconnect&#39;);">Connect
                                        Facebook</a>
                                </div>
                            </div>

                            <div class="prox-b f-16 lh-20 mar-10-b toggle-div on">
                                <span class="on">Receipt Display Enabled</span>
                                <span class="off">Enable Receipt Display</span>
                                <div class="shareSwitch iblk frt on-off-switch on"
                                     style="height: 22px; width: 40px; line-height: 22px;">
                                    <input type="checkbox" class="Greceipts" checked="" style="display: none;">
                                    <div class="on-off-slide" style="height: 22px; width: 58px; right: -18px;">
                                        <div class="on-off-switch-on flt bg-grn"
                                             style="height: 22px; width: 29px; text-indent: -8.25px;"></div>
                                        <div class="on-off-switch-off frt bg-gry-c"
                                             style="height: 22px; width: 29px; text-indent: 8.25px;"></div>
                                        <div class="on-off-center"
                                             style="height: 22px; width: 22px; right: 18px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="connect-tip f-16 lh-20 on ">
                                <span class="on">You should see your purchase receipts in your Cash Back Balance.</span>
                                <span class="off">By enabling receipt display, you can view receipts from your shopping trips in your Cash Back Activity.</span>
                            </div>
                            <div class="center ht-20 lh-20 blk rel mar-10-t">
                                <a class="f-gry-dk-8 nohover f-16"
                                   href="https://www.rakuten.com/help/article/privacy-policy-360002101688"
                                   target="_blank">Rakuten Privacy Policy</a>
                            </div>
                        </div>
                        <script>
                            window.addEventListener('DOMContentLoaded', function () {
                                function changeSwitchState(checkbox, on, off) {
                                    on.callback = typeof on.callback !== "undefined" && typeof on.callback === "function" ? on.callback : jQuery.noop;
                                    on.error = typeof on.error !== "undefined" ? on.error : message && jQuery.noop;
                                    $(checkbox).on("change", function () {
                                        if ($(this).is(':checked')) {
                                            if (typeof on.endpoint !== "undefined" && on.endpoint) {
                                                jQuery.post(on.endpoint).done(on.callback).fail(on.error);
                                            } else {
                                                on.callback;
                                            }
                                        } else {
                                            if (typeof off !== "undefined") {
                                                off.callback = typeof off.callback !== "undefined" && typeof off.callback === "function" ? off.callback : jQuery.noop;
                                                off.error = typeof off.error !== "undefined" ? off.error : jQuery.noop;
                                                if (typeof off.endpoint !== "undefined" && off.endpoint) {
                                                    jQuery.post(off.endpoint).done(off.callback).fail(off.error);
                                                } else {
                                                    off.callback;
                                                }
                                            }
                                        }
                                    });
                                }

                                $('body').on('click', '.rec-close', function () {
                                    $(document).trigger("close-modals");
                                });
                                changeSwitchState(".Greceipts", {
                                    endpoint: "enableOneReceiptConnection.do",
                                    callback: function () {
                                        ebates.js.require(ebates.src.modal, function () {
                                            ebates.UI.modal('<div id="switchInfo" class="switch-bonuspopup pad-20 blk-reg center">' +
                                                '<div class="prox-b title mar-20-b">You should see your purchase reciepts in your Cash Back Balance.</div>' +
                                                '<div class="f-16 lh-20 body">Allow up to 20 minutes after enabling this service for us to display receipts.</div>' +
                                                '<div class="button secondary f-16 lh-20 rec-close">Got It</div></div>', {
                                                classes: {
                                                    toAdd: ['modal-box-shadow-2'], toRemove: ['border-grn-t-5', 'op0']
                                                }
                                            });
                                            $('.connect-tip,.toggle-div').addClass('on').removeClass('off');
                                        });
                                    },
                                    error: function () {
                                        ebates.js.require(ebates.src.modal, function () {
                                            ebates.UI.modal('<div id="errorNotice" class="w-300 switch-bonuspopup pad-20 blk-reg center">' +
                                                '<div class="prox-b title mar-20-b">There was a problem attempting to make your change.  Please try again later.</div>' +
                                                '<div class="button secondary f-16 lh-20 rec-close">Got It</div></div>', {
                                                classes: {
                                                    toAdd: ['modal-box-shadow-2'], toRemove: ['border-grn-t-5', 'op0']
                                                }
                                            });
                                        });
                                    }
                                }, {
                                    endpoint: "disableOneReceiptConnection.do",
                                    callback: function () {
                                        $('.connect-tip,.toggle-div').addClass('off').removeClass('on');
                                    },
                                    error: function () {
                                        ebates.js.require(ebates.src.modal, function () {
                                            ebates.UI.modal('<div id="errorNotice" class="w-300 switch-bonuspopup pad-20 blk-reg center">' +
                                                '<div class="prox-b title mar-20-b">There was a problem attempting to make your change.  Please try again later.</div>' +
                                                '<div class="button secondary f-16 lh-20 rec-close">Got It</div></div>', {
                                                classes: {
                                                    toAdd: ['modal-box-shadow-2'], toRemove: ['border-grn-t-5', 'op0']
                                                }
                                            });
                                        });
                                    }
                                });

                                $('.connection>.error').closest('.acct-setting-box').addClass('error');
                                $('.connection>.warning').closest('.acct-setting-box').addClass('warning');

                                if (window.name === 'popUpWindow' && window.opener) { //Close popup window
                                    var tempWindow = window.opener.open('/', 'popUpWindow', 'height=500,width=600,left=200,top=100,resizable=yes,scrollbars=yes');
                                    var tempUrl = ebates.param.add('type', ebates.param.get('type'), window.opener.location.href);
                                    tempUrl = ebates.param.add('social_media', ebates.param.get('social_media'), tempUrl);
                                    window.opener.location.assign(tempUrl);
                                    tempWindow.close();
                                }
                                if (ebates.param.get('type') === 'other') {
                                    var emailProviderParam = ebates.param.get('social_media'), emailProviderName = '';
                                    if (emailProviderParam === 'YHO' || emailProviderParam === 'GPS' || emailProviderParam === 'MCS') {
                                        if (emailProviderParam === 'YHO') {
                                            emailProviderName = 'Yahoo';
                                        } else if (emailProviderParam === 'GPS') {
                                            emailProviderName = 'Google';
                                        } else {
                                            emailProviderName = 'Microsoft';
                                        }
                                        ebates.js.require(ebates.src.modal, function () {
                                            ebates.UI.modal('<div id="connectConfirm" class="pad-50 blk-reg center ht-56 lh-28 w-300">' +
                                                '<h3 class="f-grn f-24 pad-30-b ht-56 lh-28 center pad-0-lr pad-0-t">Success! You’ve linked your ' + emailProviderName + ' email account.</h3>' +
                                                '<div class="fa-check-circle f-75 center f-grn"></div></div>', {
                                                classes: {
                                                    toAdd: ['modal-box-shadow-2'], toRemove: ['border-grn-t-5', 'op0']
                                                }
                                            });
                                            setTimeout(function () {
                                                $(document).trigger("close-modals");
                                                ebates.param.remove('social_media');
                                            }, 2000);
                                        });
                                    }
                                }
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection