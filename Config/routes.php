<?php
	
	Router::connect('/login', array('plugin'=>'AuthLogin', 'controller' => 'usuarios', 'action' => 'login'));
	Router::connect('/logout', array('plugin'=>'AuthLogin', 'controller' => 'usuarios', 'action' => 'logout'));
	Router::connect('/menus', array('plugin'=>'AuthLogin', 'controller' => 'usuarios', 'action' => 'menus'));

