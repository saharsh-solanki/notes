To schedule any task in django -->

////////////////////////////////////////////////////////////////////////////////////////////

>>>>>>  pip3 install django-crontab

If yo are window user skip but if you are linux or other user so you need to give permision to schedule serch by it your self()


---> Goto setting.py 

---> installed apps --> 'django_crontab'

---> now just defune you cron jobs

----> CRONJOBS=[
CRONJOBS=[
    ('0 1 * * *', 'account.views.add_fund')
]


to add crontabs 
>>>>> 4




to show cron jobs
>>>>>  python manage.py crontab show


to remove cronjobs
>>>>> python manage.py crontab remove

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////


django celery

>>>> pip install celery

>>>> pip install brew

>> brew install rabbitmq

>>>>> no go to projects app init.py file and add  this code 



/////////////////////////////////////////////////////////////////////////////////////////////////////////

			from __future__ import absolute_import, unicode_literals

			from .celery import app as celery_app

			__all__ = ('celery_app',)

////////////////////////////////////////////////////////////////////////////////////////////////////// 

cerate a celery.py file for django 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
>>>> and past [


                 from __future__ import absolute_import, unicode_literals

from celery import Celery
from datetime import datetime, timedelta

import os

os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'celery_demo.settings')

app = Celery('celery_demo')

app.config_from_object('django.conf:settings', namespace='CELERY')

app.conf.beat_schedule = {
    'add-every-5-seconds': {
        'task': 'notifications.tasks.send_email',
        'schedule': 1.0,
        'args': ('hpatel@aaravtech.com','This is sample message.')
    }
}

app.conf.timezone = 'UTC'

app.autodiscover_tasks()

@app.task(bind=True)
def debug_task(self):
    print('Request: {0!r}'.format(self.request))
                
              ]
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


here change line no 54 celery_demo.settings to your project.settings 

also change line no 56 app celery demo to your project app name 




>>>>> celery -A name worker name=like Investit

>>> 

>>>> pip install django-celery-beat

add app to settings.py-----> installed apps ----> 'django_celery_beat',

>>>>>>> python manage.py migrate 

	(I have intsalled crontab so its giving me some error that i.e. no modelue .... so i run  a commad
	>>>> python -m pip uninstall contab <<<<<<<  used unistall a pakage
	)

>>> create a python file task.py or any name 

>>>  import --> from celery import shared_task
















