Remember one thing i got an error callled invalid checksome to solve this ( Basically i Am Using Env File to get merchant key and id) i have directly past this is config/service.php

To Intigrate Paytm payment Gatway In Your Laravel You Need This Steps --


1} Install Pakage ----->

        ------- composer require anandsiddharth/laravel-paytm-wallet



 2} config/app.php --->

	        'providers' => [
				  ....
			  Anand\LaravelPaytmWallet\PaytmWalletServiceProvider::class,
			],


			'aliases' => [
			  ....
			  'PaytmWallet' => Anand\LaravelPaytmWallet\Facades\PaytmWallet::class,
			],


 3} config/services.php ---> 

       <?php


			return [


			    ......
			    'paytm-wallet' => [
			        'env' => 'local', // values : (local | production)
			        'merchant_id' => env('YOUR_MERCHANT_ID'),
			        'merchant_key' => env('YOUR_MERCHANT_KEY'),
			        'merchant_website' => env('YOUR_WEBSITE'),
			        'channel' => env('YOUR_CHANNEL'),
			        'industry_type' => env('YOUR_INDUSTRY_TYPE'),
			    ],


			];


 ?+ ?>

 4} Now add these secret key date in the application’s environment file like below. ----> 


    YOUR_MERCHANT_ID=DIY12XXXXXXXXXXXXXXXX
	YOUR_MERCHANT_KEY=bKXXXXXXXXXXX

	YOUR_WEBSITE=XXXXXXXXX

	YOUR_CHANNEL=WEB

	YOUR_INDUSTRY_TYPE=Retail


5} Config/session.php ----> 

      Import -->
		use Illuminate\Support\Str; 
		return [   
		/...  

		 'same_site' => null, 
		]; 

6} Create A Controller --> 

     php artisan make:controller PaytmController

7} Create Route For It --> 

   //Paytm Payment
Route::post('paytm-payment',[PaytmController::Class, 'paytmPayment'])->name('paytm.payment');
Route::post('paytm-callback',[PaytmController::Class, 'paytmCallback'])->name('paytm.callback');
Route::get('paytm-purchase',[PaytmController::Class, 'paytmPurchase'])->name('paytm.purchase');

8} app/Http/Middleware   -->   VerifyCsrfToken.php

    protected $except = [
        '/paytm-callback*',
    ];


9} Add Controller Code --> 

     <?php

		namespace App\Http\Controllers;

		use Illuminate\Http\Request;
		use PaytmWallet;

		class PaytmController extends Controller
		{
		    /**
		     * Redirect the user to the Payment Gateway.
		     *
		     * @return Response
		     */
		    public function paytmPayment(Request $request)
		    {
		        $payment = PaytmWallet::with('receive');
		        $payment->prepare([
		          'order' => rand(),
		          'user' => rand(10,1000),
		          'mobile_number' => '123456789',
		          'email' => 'paytmtest@gmail.com',
		          'amount' => $request->amount,
		          'callback_url' => route('paytm.callback'),
		        ]);
		        return $payment->receive();
		    }


		    /**
		     * Obtain the payment information.
		     *
		     * @return Object
		     */
		    public function paytmCallback()
		    {
		        $transaction = PaytmWallet::with('receive');
		        
		        $response = $transaction->response(); // To get raw response as array
		        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
		        
		        if($transaction->isSuccessful()){
		          //Transaction Successful
		          return view('paytm.paytm-success-page');
		        }else if($transaction->isFailed()){
		          //Transaction Failed
		          return view('paytm.paytm-fail');
		        }else if($transaction->isOpen()){
		          //Transaction Open/Processing
		          return view('paytm.paytm-fail');
		        }
		        $transaction->getResponseMessage(); //Get Response Message If Available
		        //get important parameters via public methods
		        $transaction->getOrderId(); // Get order id
		        $transaction->getTransactionId(); // Get transaction id
		    }

		    /**
		     * Paytm Payment Page
		     *
		     * @return Object
		     */
		    public function paytmPurchase()
		    {
		        return view('paytm.payment-page');
		    } 
		}

		?>


 10} The HTML FILE -->

       Get Url --->

          <!DOCTYPE html>
			<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
			<head>
			    <meta charset="utf-8">
			    <meta name="viewport" content="width=device-width, initial-scale=1">
			    <!-- CSRF Token -->
			    <meta name="csrf-token" content="{{ csrf_token() }}">
			    <title>Laravel 8 - Paytm Payment Gateway Integration</title>
			    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
			    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			</head>
			<body>
			    <div id="app">
			        <style>
			            .mt2{
			                margin-top: 2%;
			            }
			        </style>
			        <main class="py-4">
			            <div class="container">
			                <div class="row">
			                    <div class="col-md-6 offset-3 col-md-offset-6">
			                        <div class="card card-default">
			                            <div class="card-body text-center">
			                                <div class="card-header">
			                                    Please enter the amount for which you want to make payment
			                                </div>
			                                <label class="form-control">Enter Amount for Paytm Payment Demo</label>'
			                                <form method="post" action="{{route('paytm.payment')}}">
			                                    @csrf
			                                    <input type="text" name="amount" placeholder="RS 10" class="form-control"/>
			                                    <button type="submit" class="btn btn-primary mt2">Pay</button>
			                                </form>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </main>
			    </div>
			</body>
			</html>


 11} paytm-success-page.blade.php

     <div class="alert alert-success alert-dismissible fade" role="alert">
    <strong>Payment Has been Successfully Received</strong>
</div>
<a href="{{route('paytm.purchase')}}">Check the demo again</a>

12} paytm-fail.blade.php

   <div class="alert alert-success alert-dismissible fade" role="alert">
    <strong>Your Payment Has been failed</strong>
</div>
<a href="{{route('paytm.purchase')}}">Check the demo again</a>


13} Demo----> 

    card number - 4242 4242 4242 4242
card expiry - 12/24
cvv - 123