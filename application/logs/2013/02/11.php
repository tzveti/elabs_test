<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-11 13:06:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/template.php [ 17 ] in :
2013-02-11 13:06:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 13:06:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/template.php [ 17 ] in :
2013-02-11 13:06:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 13:07:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/views/template.php [ 17 ] in :
2013-02-11 13:07:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 13:09:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/template.php [ 17 ] in :
2013-02-11 13:09:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 13:09:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/views/template.php [ 17 ] in :
2013-02-11 13:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 13:11:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/views/template.php [ 17 ] in :
2013-02-11 13:11:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 22:59:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/template.php [ 38 ] in /Users/tzvetanka/Sites/kohana/application/views/template.php:38
2013-02-11 22:59:24 --- DEBUG: #0 /Users/tzvetanka/Sites/kohana/application/views/template.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/tzvetank...', 38, Array)
#1 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/View.php(61): include('/Users/tzvetank...')
#2 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/tzvetank...', Array)
#3 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/tzvetanka/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/tzvetanka/Sites/kohana/application/views/template.php:38
2013-02-11 23:00:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 37 ] in /Users/tzvetanka/Sites/kohana/application/views/template.php:37
2013-02-11 23:00:24 --- DEBUG: #0 /Users/tzvetanka/Sites/kohana/application/views/template.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/tzvetank...', 37, Array)
#1 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/View.php(61): include('/Users/tzvetank...')
#2 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/tzvetank...', Array)
#3 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/tzvetanka/Sites/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/tzvetanka/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/tzvetanka/Sites/kohana/application/views/template.php:37
2013-02-11 23:14:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'protected' (T_PROTECTED) ~ APPPATH/classes/Controller/Test.php [ 23 ] in :
2013-02-11 23:14:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :