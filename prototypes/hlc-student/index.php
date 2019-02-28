<?php

// show different home pages for sales and hlc-student sites
switch ($_SERVER['HTTP_HOST']) {
	case 'hstm-sales.patternmanager.com':
        $page = 'todo-sales.php';
	break;
	case 'hstm-hccdemo-rater.patternmanager.com':
        $page = 'dashboard-manager-dev-ready.php';
	break;
	case 'hstm-hccdemo-employee.patternmanager.com':
        $page = 'todo-hccdemo-employee.php';
	break;
	default:
        $page = 'todo.php';
}

include $page;
