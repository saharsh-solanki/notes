{https://developer.paypal.com/docs/paypal-payments-standard/integration-guide/Appx-websitestandard-htmlvariables/}

Step : 1 ---->

Goto--> sandbox.paypal.com -->  Create Account --> Bussiness Account 

(Sand Box is For testing Purpose If We Want Use For Live App Then We Can Goto --> devloper.paypal.com )

After Account Is Successfully Created

Step  2 --> Goto devloper.paypal.com --> Login There With Same details singup Previusly 

( We Will GEt Evry Notification Of Paytment There In Devloper.paypal.com Accout )


Now Open project

Install Paypal --->   pip install django-paypal

step : 2 -->  Now Goto Settings.py ---> Installed Apps -->  'paypal.standard.ipn',

( What IS IPN ==>>>IPN or Instant Payment Notification is standard method used by online retailers to track purchases. IPN is sent via HTTP request from the Payment gateway to your application. An IPN message can represent payment success or failure, recurring payments, chargebacks, disputes etc. )

Step 4 --> 

 

{ The PAYPAL_RECEIVER_EMAIL setting refers to the email used to create the PayPal account. This is the email where all the notification will be sent. During testing you should set this to a sandbox account, otherwise the PayPal IPN will always return payment status pending. }

Add this At The End	->	

		PAYPAL_RECEIVER_EMAIL = 'youremail@mail.com'
        PAYPAL_TEST = True

{The PAYPAL_TEST is a boolean value which is used to determine whether you want to use the live or sandbox account. The sandbox account is used to test things without sending any real payment in the process.}


Step 5 --> add This In  path('paypal/', include('paypal.standard.ipn.urls')),

{
	We have now configured the django-paypal app. The next step is to create a view function to display a form containing PayPal Buy Now button along with the order details.
}

{

	To make things easier for us django-paypal provides a PayPalPaymentsForm class which creates a standard PayPal "Buy Now" button configured for a selling a single item with no shipping.
}


{

	Before we start coding our view function, just to make things clear here is the workflow involved in using PayPal Standard IPN.
}


{
	Flow --- >>>

	1} User clicks the PayPal's "Buy Now" button.
    2} User is then redirected to PayPal to make the payment.
    3} After payment is made, the user is redirected back to your application.
    4} After a few seconds later, PayPal sends the IPN using the HTTP POST method.
}


Now Make A function Called Proccesspaytmnet -->

{  
	evrthing is optional
  ORDER ID ==>> GET FROM DB OR PREVIOUS PAGE
  bussines ==> bussines email where payment notification will be send we are fetching from Settings can also write here
  AMOUNT -->> IN $1
  item_name ==>> Anthing 
  currecy_code ==>> Not requesired can remove 
  notify_url ==> The URL at which PayPal sends the IPN.
  return url ==>> if payemtnt done 
  cancel url -->> return to this if payment get canceled
  Then We Are 

}

def process_payment(request):
    order_id = request.session.get('order_id')
    host = request.get_host()

    paypal_dict = {
        'business': settings.PAYPAL_RECEIVER_EMAIL,
        'amount': '',
        'item_name': 'NAME',
        'invoice': '1',
        'currency_code': 'USD',
        'notify_url': 'http://{}{}'.format(host,
                                           reverse('paypal-ipn')),
        'return_url': 'http://{}{}'.format(host,
                                           reverse('payment_done')),
        'cancel_return': 'http://{}{}'.format(host,
                                              reverse('payment_cancelled')),
    }

    form = PayPalPaymentsForm(initial=paypal_dict)
    return render(request, 'ecommerce_app/process_payment.html', { 'form': form})



!!} Now This Will Return As to process_payment.html page And  In This Page We Have To Display The form Which We Have Created 

( form = PayPalPaymentsForm(initial=paypal_dict) )  By This 

So On Thge Process Payment.html 

{% block content %}
    <h4>Pay with PayPal</h4>
    {{ form.render }}
{% endblock %}

Now We Have Create function For Payment Success and payment Cacled And USe It According To Our Condition
















