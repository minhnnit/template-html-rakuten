ebates.selAddressModal=ebates.selAddressModal||{},ebates.selAddressModal.init=ebates.selAddressModal.init||function(){function e(){ebates.js.require(ebates.src.modal,function(){ebates.UI.modal(s,{url:"/ajax/select-payment-overlay.htm",classes:{toAdd:["op0",o.margin,"border-grn-t-2",o.psmodal,"mw-mar-10-lr"],toRemove:["fixed","border","border-grn-t-5","op0"]},bg:{classes:["op3"]}},{close:function(){t.trigger("stats",{data:["send","event","paypal_address_not_req_test","close_modal_on_payment_selection_option",ebates.page.type],map:{external:{ec:"paypal_address_not_req_test",et:"close_modal_on_payment_selection_option",el:ebates.page.type},amp:{eventType:"Dismiss Modal",eventProps:{modal_name:"Payment Method"}}}})}})})}function a(){ebates.js.require(ebates.src.modal,function(){ebates.UI.modal(s,{url:"/ajax/account-link-confirmation.htm?userName="+r,classes:{toAdd:["op0","border-grn-t-2",o.actModal,"mw-mar-10-lr"],toRemove:["fixed","border","border-grn-t-5","op0"]},bg:{classes:["op3"]}},{ajax:{done:function(){$(".continueShopping").on("click",this.close)}}})})}var t=$(document),s="M"===ebates.stats.device?'<div class="lh-50 center"><span class="fa-spinner fa-pulse f-50 absolute ht-50 w-50"></span><div>':'<span class="fa-spinner fa-pulse f-50 f-grn absolute h-v-centered ht-50 w-50"></span>',o={psmodal:"M"===ebates.stats.device?"w-full":"w-400",margin:"M"===ebates.stats.device?"no-margin":"margin",actModal:"M"===ebates.stats.device?"w-300":"w-400"},r="";if("/account-settings.htm"===window.location.pathname&&("M"!==ebates.stats.device&&user_email&&void 0!==user_email?r=user_email:"M"===ebates.stats.device&&userProfileEmail&&void 0!==userProfileEmail&&(r=userProfileEmail)),"true"===ebates.param.get("show")&&a(),"true"===ebates.param.get("showMod")&&e(),t.on("click",".choosePayment",function(){try{localStorage.removeItem("payAdd_v1"),localStorage.removeItem("payAdd_v2")}catch(e){return!1}e()}),"success"===ebates.param.get("paypalAdded")&&("true"===localStorage.getItem("payAdd_v1")||"true"===localStorage.getItem("payAdd_v2"))){try{localStorage.removeItem("payAdd_v1"),localStorage.removeItem("payAdd_v2")}catch(e){return!1}a()}},"loading"!==document.readyState?ebates.selAddressModal.init():window.addEventListener("DOMContentLoaded",ebates.selAddressModal.init);
//# sourceMappingURL=select-address-type-a2c847a776.js.map
