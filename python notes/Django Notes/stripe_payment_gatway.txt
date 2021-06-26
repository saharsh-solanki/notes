Install This Pakage Offical Doc 

--> https://stripe.com/docs/ --> Aceeept a payment 


# payment Flow 

Create a form (HTMl) ---> Send The Form Using Javascript --> Create Payment Inedent (Function that return stripe publishable api key  ) --> BY this Key Payment accept using stripe JS and return to charge function ---> caputre payment

if the devloper is from india the the can except payment from only indian coutomer if they are from other contry then the need to add shipping address 

pip install --upgrade stripe


Create form -->>

after payment done it will redirect to charge


<h2>Buy for $5.00</h2>
<form action="{% url 'charge' %}" method="post">
  {% csrf_token %}
    {{key}}
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="{{ key }}"
          data-description="A Django Charge"
          data-amount="50000"
          data-locale="auto"
data-label="Proccedd To payyy"
          ></script>
</form>

In This Form data-key is stripe.publishable key

data-amount is the amount to be taken from the user 



after pauyment is successfull the stripe will return us to the charge function with some attributes like stripeToken etc Now By This Token We Need To Create stripe.Charge to successfully the payment 

def charge(request):
    if request.method == 'POST':
            # Use Stripe's library to make requests...
            amount = 199
            datas = request.POST
            charges=stripe.Charge.create(
                shipping={
                    'name': 'Jenny Rosen',
                    'address': {
                        'line1': '510 Townsend St',
                        'postal_code': '98140',
                        'city': 'San Francisco',
                        'state': 'CA',
                        'country': 'US',
                    },
                },
                amount=2000,
                currency="usd",
                source=request.POST['stripeToken'],
                description="My First Test Charge (created for API docs)",
            )
            #print(intent)
            #data = json.loads(str(intent))
            #print(data['status'])
            if charges["status"] == "succeeded":
                     print(charges)
                     return render(request, "payment_success.html")
            else:
                print("No ")



{
  "amount": 2000,
  "amount_captured": 2000,
  "amount_refunded": 0,
  "application": null,
  "application_fee": null,
  "application_fee_amount": null,
  "balance_transaction": "txn_1I6YNbEHlEuRL3ozQUFgfITl",
  "billing_details": {
    "address": {
      "city": null,
      "country": null,
      "line1": null,
      "line2": null,
      "postal_code": null,
      "state": null
    },
    "email": null,
    "name": "paytmbadshah98@gmail.com",
    "phone": null
  },
  "calculated_statement_descriptor": "SAHARSH SAHARSH SOLANK",
  "captured": true,
  "created": 1609925555,
  "currency": "usd",
  "customer": null,
  "description": "My First Test Charge (created for API docs)",
  "destination": null,
  "dispute": null,
  "disputed": false,
  "failure_code": null,
  "failure_message": null,
  "fraud_details": {},
  "id": "ch_1I6YNbEHlEuRL3oz5JwUonBK",
  "invoice": null,
  "livemode": false,
  "metadata": {},
  "object": "charge",
  "on_behalf_of": null,
  "order": null,
  "outcome": {
    "network_status": "approved_by_network",
    "reason": null,
    "risk_level": "normal",
    "risk_score": 27,
    "seller_message": "Payment complete.",
    "type": "authorized"
  },
  "paid": true,
  "payment_intent": null,
  "payment_method": "card_1I6YNXEHlEuRL3ozFKK8yWpT",
  "payment_method_details": {
    "card": {
      "brand": "visa",
      "checks": {
        "address_line1_check": null,
        "address_postal_code_check": null,
        "cvc_check": "pass"
      },
      "country": "US",
      "exp_month": 12,
      "exp_year": 2023,
      "fingerprint": "FBLW6OEIYUjr0Kok",
      "funding": "credit",
      "installments": null,
      "last4": "4242",
      "network": "visa",
      "three_d_secure": null,
      "wallet": null
    },
    "type": "card"
  },
  "receipt_email": null,
  "receipt_number": null,
  "receipt_url": "https://pay.stripe.com/receipts/acct_1I5m0yEHlEuRL3oz/ch_1I6YNbEHlEuRL3oz5JwUonBK/rcpt_IhyKFxFEyCGBgt2IRCPe9qLyddNwXql",
  "refunded": false,
  "refunds": {
    "data": [],
    "has_more": false,
    "object": "list",
    "total_count": 0,
    "url": "/v1/charges/ch_1I6YNbEHlEuRL3oz5JwUonBK/refunds"
  },
  "review": null,
  "shipping": {
    "address": {
      "city": "San Francisco",
      "country": "US",
      "line1": "510 Townsend St",
      "line2": null,
      "postal_code": "98140",
      "state": "CA"
    },
    "carrier": null,
    "name": "Jenny Rosen",
    "phone": null,
    "tracking_number": null
  },
  "source": {
    "address_city": null,
    "address_country": null,
    "address_line1": null,
    "address_line1_check": null,
    "address_line2": null,
    "address_state": null,
    "address_zip": null,
    "address_zip_check": null,
    "brand": "Visa",
    "country": "US",
    "customer": null,
    "cvc_check": "pass",
    "dynamic_last4": null,
    "exp_month": 12,
    "exp_year": 2023,
    "fingerprint": "FBLW6OEIYUjr0Kok",
    "funding": "credit",
    "id": "card_1I6YNXEHlEuRL3ozFKK8yWpT",
    "last4": "4242",
    "metadata": {},
    "name": "paytmbadshah98@gmail.com",
    "object": "card",
    "tokenization_method": null
  },
  "source_transfer": null,
  "statement_descriptor": null,
  "statement_descriptor_suffix": null,
  "status": "succeeded",
  "transfer_data": null,
  "transfer_group": null
}
