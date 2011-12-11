#!/usr/bin/env python
import os
os.environ['DJANGO_SETTINGS_MODULE'] = 'settings'
import sys
sys.path.append('/home/FLX_PROJECT_NAME/')
sys.path.insert(0, '/home/FLX_PROJECT_NAME/.local/lib/')
sys.path.insert(0, '/home/FLX_PROJECT_NAME/')
import django.core.handlers.wsgi
application = django.core.handlers.wsgi.WSGIHandler()
