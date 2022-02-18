
Use this Command to store the username and pasword so no need to enter again and again 
git config credential.helper store

Download heroku cli & Download git --> ( Both Are App Search On Google )

Create A Heroku Account --> https://dashboard.heroku.com/apps  

    1} Create A New App  -->

                          1} Goto Settings 

                          2} Add Builpack 

                          3} Add Python (Save Changes)

Create A Github Account --> https://github.com/

     1} Create A Repositories --->

/////////////////////////////////////////////////////////////////////////////////////////////////////////


Open Your Project in Pycharm Or VS Code etc -->

       1} Install This Pakages -->

                a) pip install gunicorn 

                b) pip install requests 

                c) pip install whitenoise 

                d) pip install dj-database-url

       2} Create A File Called 'Procfile' Without Any Extension 

             Past >>>>>>>> web: gunicorn (project_name).wsgi --log-file -

             Past This Code Inside This Procfile And replace the name of your project with (Project_name)

       3} Create A requirements.txt requirements.txt File Using This (Isko End Me Karnan)

              pip freeze > requirements.txt

       4} Main(Static File problem solution Steps)  --> 
       
             1} Goto settings.py file 

	                 a) Add To Installed App On The Top Means Past In First Position Of App

	                            >>>>>>  'whitenoise.runserver_nostatic', 

	                 b) Goto --> Middleware --> In The Second Position After Securitymiddleware And Before Session

	                              >>>>> 'whitenoise.middleware.WhiteNoiseMiddleware', 

	                 c) Before ROOT_URLCONF --> Before It 

	                             >> Past This 

	                             STATICFILES_STORAGE = 'whitenoise.storage.CompressedStaticFilesStorage'


	                 d) Remove All Things After STATIC_URL And Past This 

	                            >>>>  STATIC_ROOT=os.path.join(BASE_DIR,'staticfiles') //Folder Name


	                 e} Goto DISALLOWED_HOST=['*']  Add This or ['https//appname.heroku.com']

	          
	          2} Goto urls.py File -->


	                  a) Import This --> 

	                        from django.conf import settings
                         from django.conf.urls.static import static

                      b) After urlspatterns []  <-- 

                      ] After This Brackets Like This

                        ]+ static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 Adding Files To github -->

   goto projects directory 

   C:\Users\hp\PycharmProjects\free_movies  In My Case Projects is free_movies 

   Structure -->

            free_movie
            manage.py
            db.sqlite.3
            Procfile ..

            ........ Like This 


   1} Right Click --> git base here --> Git Bash Will be Open 
    
   2} Use This Command 

       a} git init 

       b} git remote add origin Your ( Reposetory Url )

       c} git status 

       d} git add ( File Names )

       f} Like This git add Procfile , git add requirements.tx , git add db.sqlite3 etc 

       g} Remember --> Do Not Add Virtual Environment Folder venv And .idea folder Add Remaining Folders 

       h} git status ( checck That All Files Are Add Sussfully )

       i} git commit -m "First Commit "

       j} git checkout -b ( branch name ) ( dev ) Enter Your Branch Name In My Case It Is dev

       k} git push origin  dev

       After Successfully PUSHED Check In Repository That All Files Are Commes


{

#ERRORSOLUTION --1
	If Got Any Error Try This 

	if you are pushing to dev and got a error called  premisson denined just 

	Copy urls of repositoirey (git remote set-urls origin https://paytmbadshah@github.com/paytmbadshah/invest_app.git)

	isme github ke pehla username dalna h or @ lagana h bus or kuch nahi

	git remote set-urls origin https://paytmbadshah@github.com/paytmbadshah/jobs.git


}


Now Goto heroku --> App --> Previously Created --> deploy --> github --> enter reposirtoy name --> 


                --> connect --> deploy branch 

   

   Now Open Yoour App --> Thats it ( By :- Saharsh Solanki )



#error Solution -2 

IF You Got Error Like Requirement,txt is not found or no such directory so just check that file a pakeage in the file is unaable to install in my case 57 pakeage are there so just remove those which are not usefull
