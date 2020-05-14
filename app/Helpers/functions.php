<?php
use App\BasicSetting;
use App\PaymentMethod;
use App\PaymentLog;

 

 function getPaymentAction($id){

    
    $trans = PaymentLog::find($id);
    $gateway = PaymentMethod::find($trans->payment_type);
    $basic = BasicSetting::first();
    $deposit_fund_route = route('deposit-fund');

    if($gateway->id==1){
        
        $ipn = route('paypal-ipn');
        
        $paypal = '<form action="https://secure.paypal.com/uk/cgi-bin/webscr" method="post" name="paypal" id="pament_form">
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="business" value="'.$gateway->val1.'" />
                        <input type="hidden" name="cbt" value="'.$basic->title.'" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input type="hidden" name="quantity" value="1" />
                        <input type="hidden" name="item_name" value="Add Fund to '.$basic->title.'" />
                        <!-- Custom value you want to send and process back in the IPN -->
                        <input type="hidden" name="custom" value="'.$trans->custom.'" />
                        <input name="amount" type="hidden" value="'.$trans->usd.'">
                        <input type="hidden" name="return" value="'.$deposit_fund_route.'"/>
                        <input type="hidden" name="cancel_return" value="'.$deposit_fund_route.'" />
                        <!-- Where to send the PayPal IPN to. -->
                        <input type="hidden" name="notify_url" value="'.$ipn.'" />
                    </form>';
    return $paypal; 

    }else if($gateway->id==2){
        
        $ipn = route('perfect-ipn');

        $perfect = ' <form action="https://perfectmoney.is/api/step1.asp" method="POST" id="pament_form">
                        <input type="hidden" name="PAYEE_ACCOUNT" value="'.$gateway->val1.'">
                        <input type="hidden" name="PAYEE_NAME" value="'.$basic->title.'">
                        <input type="hidden" name="PAYMENT_ID" value="'.$trans->custom.'">
                        <input type="hidden" name="PAYMENT_AMOUNT"  value="'.round($trans->usd,2).'">
                        <input type="hidden" name="PAYMENT_UNITS" value="USD">
                        <input type="hidden" name="STATUS_URL" value="'.$ipn.'">
                        <input type="hidden" name="PAYMENT_URL" value="'.$deposit_fund_route.'">
                        <input type="hidden" name="PAYMENT_URL_METHOD" value="GET">
                        <input type="hidden" name="NOPAYMENT_URL" value="'.$deposit_fund_route.'">
                        <input type="hidden" name="NOPAYMENT_URL_METHOD" value="GET">
                        <input type="hidden" name="SUGGESTED_MEMO" value="'.$basic->title.'">
                        <input type="hidden" name="BAGGAGE_FIELDS" value="IDENT"><br>
                    </form>';
         return $perfect; 
    }else if($gateway->id==7){
             $ipn = route('skrill-ipn');
             $img = asset('assets/images/logo/logo.png');
        $money = '<form action="https://www.moneybookers.com/app/payment.pl" method="post" id="pament_form">
                        <input name="pay_to_email" value="'.$gateway->val1.'" type="hidden">
                        <input name="transaction_id" value="'.$trans->custom.'" type="hidden">
                        <input name="return_url" value="'.$deposit_fund_route.'" type="hidden">
                        <input name="return_url_text" value="Return '.$basic->title.'" type="hidden">
                        <input name="cancel_url" value="'.$deposit_fund_route.'" type="hidden">
                        <input name="status_url" value="'.$ipn.'" type="hidden">
                        <input name="language" value="EN" type="hidden">
                        <input name="amount" value="'.$trans->usd.'" type="hidden">
                        <input name="currency" value="USD" type="hidden">
                        <input name="detail1_description" value="'.$basic->title.'" type="hidden">
                        <input name="detail1_text" value="Add Fund To '.$basic->title.'" type="hidden">
                        <input name="logo_url" value="'.$img.'" type="hidden">
                   </form>';
        return $money;
    }else{
        return false;
    }

}