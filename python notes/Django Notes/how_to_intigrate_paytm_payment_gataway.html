<h1>How TO Intigrate Paytm Paymnet Gatway</h1>

Step 1 :-->

Create Form --- example  ---- email=example@gmail.com , amount=20

create function -- checkout ---

fetch all details

Now Create A Call Back Function WHen Payment success or fail then return to that function
 create url for this function 
suppos if paytm send us post request for payment is success or fail with details then we need bypass the csrf token validation
for that import this

from django.views.decorators.csrf import csrf_exempt
@csrf_exempt # this use of that decorator 
def handlerequest(request):

before this we need install a module called 

pip install pycryptodome


create a folder call paytm and add Checksum.py (See Paytm Folder )
goto this link to find https://github.com/Paytm-Payments/Paytm_Web_Sample_Kit_Python/tree/master/pythonKit%203.X
run this file and check for error
if no error then go else 
in my case i got error so --- The Function in AES inside-- this need utf encode string 
.encode('utf-8')
use it after key.encode('utf-8') and iv.encode('utf-8')
and also after to-encode=c.XXX( to_encode.encode('utf-8')) 
now if run file the it sholud return True means no error

Now We Need To Goto test.cgi or use this 
where we are sending request to paytm

order_id=request.POST['order_id']
    param_dict = {
        'MID': 'OUEept11459745037985',#merchant id
        'ORDER_ID': order_id, #orderid genrated in our backend
        'TXN_AMOUNT': str(amount),
        'CUST_ID': email, #customer email
        'INDUSTRY_TYPE_ID': 'Retail',
        'WEBSITE': 'WEBSTAGING',#webstaging is used if we are in test mode
        'CHANNEL_ID': 'WEB',
        'CALLBACK_URL':'http://127.0.0.1:8000/handlerequest/',
    }
    MERCHANT_KEY='1Ihx&s#y1St!Dk0m' #merchant key
    param_dict['CHECKSUMHASH']=Checksum.generate_checksum(param_dict, MERCHANT_KEY) # this is used to gerate vedication by paytm



callback_url That Url Where Paytm is going to send data abput payment success or not 


Now We Need To return user to paytm.html where we will fetch all the filed and send that request to paytm 

is we form we are fetching all fileds and the javascript is used to automatically submit this form
<h1>Redirecting You To Merchant</h1>
<h1>please Do not Refresh This Page</h1>
<form action="https://securegw-stage.paytm.in/order/process" method="post" name="paytm">
    {% for key,value in param_dict.items %}
    <input type="hidden" name="{{key}}" value="{{value}}">
    {% endfor %}
</form>
<script>
    document.paytm.submit()
</script>

As We Now Noone Can send post Request in django bbecase of csrf we need to by csrf validations


from django.views.decorators.csrf import csrf_exempt


In this function We Are Fetching the full import send by paytm in response 
first we have store all the variable in form
the created response_dict dictionary Now It is empty
Now We Are Fetching All Keys from form
and then check if the key = CHECKSUMHASH Then We Are Addting a that data in checksum var
then we are verifying checksum 
if 01 is for success
txnid=response_dict['TXNID']
This Is USed to Fetch A specific Filed
And If The Txn Is Success Then We Are Storing The Data in DB


@csrf_exempt
def handlerequest(request):
    form=request.POST
    response_dict={}
    for i in form.keys():
        response_dict[i]=form[i]
        if i =="CHECKSUMHASH":
            checksum=form[i]
    MERCHANT_KEY = '1Ihx&s#y1St!Dk0m'
    verify=Checksum.verify_checksum(response_dict,MERCHANT_KEY,checksum)
    if verify:
        if response_dict['RESPCODE']=='01':
            print("suceess")
            data = txn_details(txnid=response_dict['TXNID'], txndate=response_dict['TXNDATE'],
                               order_id=response_dict['ORDERID'])
            data.save()
        else:
            print("fail")
    print(response_dict)

    return render(request,"success.html",{'response':response_dict})



And Now We Need To redirct to the statucs page so user that txn is success of not
<body>
{{response}}<br><br><br>
{{response.RESPMSG}}

{% ifequal response.RESPCODE '01' %}
    <h1>ORDER SUCCESSFULLY<br>
    Your Txn ID : {{response.TXNID}}<br>
    DATE of txn : {{response.TXNDATE}}<br>
    ORDERID : {{response.ORDERID}}
</h1>
{% else %}
<h1>TRANSECTION STATUS : FAILED</h1>
{% endifequal %}
</body>

This Is Example 


Example django project 

example_paytm_gatway_intigration

