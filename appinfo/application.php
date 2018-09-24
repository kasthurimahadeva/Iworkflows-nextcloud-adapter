<?php

namespace OCA\iworkflowsadapter\AppInfo;

use OCP\AppFramework\App;

class Application extends App{
	public function registerHooks(){
		\OCP\Util::connectHook('OC_User', 'pre_deleteUser', 'OCA\MyApp\Hooks\User', 'deleteUser');
	}
}
