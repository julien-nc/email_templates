<?php

require_once __DIR__ . '/../../../tests/bootstrap.php';

\OC_App::loadApp(OCA\EmailTemplates\AppInfo\Application::APP_ID);
OC_Hook::clear();
