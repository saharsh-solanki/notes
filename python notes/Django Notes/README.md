# Django Notes 

Python ( Django Notes )

## Notes On The Basic Of Languages -

* [How To Customize Django Admin Panel ](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/admin_customization.md)
* [How Deploy Django App To Heroku](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/deploy_django_to_heroku.md)
* [How To Intigrate Paypal Payment Gatway](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/how_to_add_papapl_payment_gatway.md)
* [How To Intigrate Paytm Payment Gatway](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/how_to_intigrate_paytm_payment_gataway.md)
* [How To Intigrate Stripe Payment Gatway](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/stripe_payment_gatway.md)
* [Send Mail](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/send_mail.md)
* [Schedule Task](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/schedule_task.md)
* [Connect To MySql DataBase](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/How_to_connect_with_mysql_database.md)
* [Create Custome Templete Tags ](https://paytmbadshah.github.io/notes/python%20notes/Django%20Notes/custom_template_tags.md)
## Some Basic Are Here 

+ Date 

``` To get Current time --> datetime().now()

and datetime().today()

to fromate date -->> strftime("%Y-%m-%d %H:%M:%S")  

```

+ Create And Active Virtual Env

   + Run CMD as administrater :--

   + Goto Python Project Folder ---

   + Step--1]  Install Virtual Environment

    ``` pip install virtualenv or py -m pip install --user virtualenv ```

   + Create virtualenv ---->

    ``` py -m venv ________(name of virtualenv[first]) ```

    + Goto -- virtualenv (first)
 
     ``` cd first  ```

     + active the virtualenv

     ``` scripts\activate ```

 + Set Image Url 

          * Media Urls Set -->>

        + Goto Settings.py -->> At The End -->>> Add This Following Code -->>

+ media url
```
MEDIA_URL='/media/' 
MEDIA_ROOT=os.path.join(BASE_DIR,'media') # Folder Name 

```