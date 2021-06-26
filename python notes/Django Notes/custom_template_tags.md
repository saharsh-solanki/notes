What Does It Means --> There Are Some Built In Django Filters Tags  That Used Perfom Some Action Like Suppose You Have a lower case string and you want it in  upper case so you can use this template tag 
for example x='saharsh' {{x}}  [print--> saharsh] but {{x|uppper}} [print--> SAHARSH]

They Are Of Three Diffrent Type ->

1] simple_tag: Processes the data and returns a 

2] inclusion_tag: Processes the data and returns a rendered template

3]  assignment_tag: Processes the data and sets a variable in the context

---------------------------------------------------------------------------------------------------------------


Template tags must live inside Django applications.


After adding a new template tags module, you will need to restart
the Django development server in order to use the new template tags and filters.

---------------------------------------------------------------------------------------------------------------

Let the Code Begin --->>   

      Inside your django application directory, create a new directory, name it templatetags and add an empty 
       __init__.py     file to it. Create another file in the same folder and name it custom_tags.py. The file structure of the django application should look like the following:

       djangoapp/
	      __init__.py
	      models.py
	      ...
	      templatetags/
	          __init__.py
	          custom_tags.py


---------------------------------------------------------------------------------------------------------------

1]  simple tag -->   For Example We Will Create Tag That Return Total No Of Student In Model Named Student 

    creation --> 

        So We Are Going To Write Code Inside templatetags/file_name.py [custom_tag.py]

          
          from django import template

		  register = template.Library()

		  from ..models import YourModel  # Enter Your Model name In My Case It Will Be student 

		  @register.simple_tag
		  def any_function():
		  	return YourModel.objects.count()



	Now How To Use This In Template 


	 ->>   If you want to register it with a different name, you can do it by specifying a name attribute like @register.simple_tag(name='my_tag').



	 Now Go To Your html view then -->

use ginja code start    load custome_tag  end jinja --> Use This On The Top


And Use Where You Want To Use That Tag
	   jinja code start   tag_name    end 


if we Create template tags then we can pass more then 1 2 3 or var and value  like  .

jst tag_name varl1 varl2 end 

etc but  i have faced the issue that i can't use this tags with if else for etc so we need to create filter 




    

     same we can create filters

     @register.filters
		  def any_function(val):
		  	return YourModel.objects.count()
		  	
			
			
			
