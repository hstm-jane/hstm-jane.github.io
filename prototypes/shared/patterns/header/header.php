<?php


/*  =============================================================================
Examples of $options - these should be defined in the prototype
========================================================================== */

$hlcStudentHeaderExample = array(
'mainNav' => '
<li class="{active=connections}"><a href="/connections.php">Connections</a></li>
<li class="{active=todo}"><a href="/">To Do</a></li>
<li class="{active=completed}"><a href="/completed.php">Completed</a></li>
<li class="{active=profile} dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu">
<li><a href="/advanced-practice.php">Advanced Practice</a></li>
<li><a href="/certifications.php">Certifications</a></li>
<li><a href="/documents.php">Documents</a></li>
<li><a href="/education.php">Education</a></li>
<li><a href="/goals.php">Goals</a></li>
<li><a href="/job-descriptions.php">Job Descriptions</a></li>
<li><a href="/disciplines-licenses.php">Licenses</a></li>
<li><a href="/notes.php">Notes</a></li>
<li><a href="/personal-information.php">Personal Information</a></li>
</ul>
</li>
<li class="{active=catalog}"><a href="/catalog-unified-main.php">Catalog</a></li>
<li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
<li class="disabled"><a href="#">Help</a></li>
<li class="visible-xs"><a href="#">Logout</a></li>',
'mainNavActive' =>'todo',
);

$platformHeaderExample = array(
'mainNav' => '
<li class="{active=myevents}"><a href="/search-my-events.php">My Events</a></li>
<li class="{active=admin}"><a href="/admin-groups.php">Admin Groups</a></li>
<li class="{active=resources}"><a href="/resources-main.php">Resources</a></li>
<li class="{active=scheduling}"><a href="/scheduling-calendar.php">Scheduling</a></li>
<li class="disabled"><a href="#">Help</a></li>
<li class="visible-xs"><a href="#">Logout</a></li>',
'mainNavActive' =>'admin',
);

$brightIdeasHeaderExample = array(
'mainNav' => '
<li class="{active=activity}"><a href="activity.php">Activity</a></li>
<li class="{active=myideas}"><a href="my-ideas.php">My Ideas</a></li>
<li class="{active=search}"><a href="search-bright-ideas.php">Search</a></li>
<li class="{active=mypoints}"><a href="my-points.php">My Points</a></li>
<li class="{active=reports}"><a href="report-wizard.php">Reports</a></li>
<li class="dropdown {active=manage}">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu">
<li><a href="import.php">Import</a></li>
<li><a href="organizational-goals.php">Organizational Goals</a></li>
<li><a href="department-goals.php">Department Goals</a></li>
<li><a href="managers.php">Managers</a></li>
<li><a href="users.php">Users</a></li>
<li><a href="organization.php">Organization</a></li>
<li><a href="ftes.php">FTE\'s</a></li>
<li><a href="outstanding-rewards.php">Rewards</a></li>
<li><a href="points.php">Points</a></li>
<li><a href="reassign-ideas.php">Reassign Ideas</a></li>
<!-- <li><a href="./new-ideas.php">New Ideas</a></li> -->
</ul>
</li>
<li class=""><a href="./help/Default.php" target="_blank">Help</a></li>
<li class="visible-xs"><a href="./authentication/login.php">Logout</a></li>',
'mainNavActive' =>'activity',
);

/*  =============================================================================
Pattern: Header
========================================================================== */


class Header extends Pattern
{

    protected $settings = array(
    'classes' => array(),
    'logoLarge' => './content/images/logo-healthstream-large.png',
    'logoSmall' => './content/images/logo-healthstream-small.png',
    'userName' => 'Stephanie P. Juniper',
    'userImage' => '<img src="./content/images/avatar.jpg">',
    'userInstitution' => 'Jupiter Healthcare',
    'alerts' => 3,
    'accountNav' => '<li><a href="/account-settings.php">Account Settings</a></li>
    <li class="hide-header-open"><a href="/account-settings.php?view=password">Manage Password</a></li>
    <li><a href="/alerts.php">Alerts{alertsBadge}</a></li>
    <li class="hide-header-open logout"><a href="#">Logout</a></li>',
    'mainNav' => '
    <li class="{active=home}"><a href="#">Home</a></li>
    <li class="{active=link1}"><a href="#">Link 1</a></li>
    <li class="{active=link2}"><a href="#">Link 2</a></li>
    <li class="dropdown {active=link3}">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class="fa fa-angle-down"></i></a>
    <ul class="dropdown-menu">
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 2</a></li>
    <li><a href="#">Link 3</a></li>
    </ul>
    </li>
    <li class="disabled"><a href="#">Link 4</a></li>
    <li class="visible-xs"><a href="./authentication/login.php">Logout</a></li>',
    'mainNavActive' =>'home',
    );


    private function _alerts() {
        $html = '';

        if ( !empty($this->settings['alerts']) && $this->settings['alerts'] > 0 ) {
            $html = '<a href="alerts.php" class="alerts"><span class="badge">' . $this->settings['alerts'] . '</span></a>';
        }

        return $html;
    }


    private function _alertsBadge() {
        $html = '';

        if ( !empty($this->settings['alerts']) && $this->settings['alerts'] > 0 ) {
            $html .= ' <span class="badge">' . $this->settings['alerts'] . '</span>';
        }

        return $html;
    }


    private function _header($options) {
        $html = file_get_contents(dirname(__FILE__).'/templates/header.html');
        $html = str_replace('{classes}', ' ' . implode(' ', $this->settings['classes']), $html);
        $html = str_replace('{logoLarge}', $this->settings['logoLarge'], $html);
        $html = str_replace('{logoSmall}', $this->settings['logoSmall'], $html);
        $html = str_replace('{userName}', $this->settings['userName'], $html);
        $html = str_replace('{userImage}', $this->settings['userImage'], $html);
        $html = str_replace('{userInstitution}', $this->settings['userInstitution'], $html);
        $html = str_replace('{accountNav}', $this->settings['accountNav'], $html);
        $html = str_replace('{mainNav}', $this->settings['mainNav'], $html);
        $html = str_replace('{alerts}', $this->_alerts(), $html);
        $html = str_replace('{alertsBadge}', $this->_alertsBadge(), $html);
        $html = str_replace('{active='.$this->settings['mainNavActive'].'}', 'active', $html);
    $html = preg_replace('/\{active[^\}]*\}/','',$html);

    return $html;
}


public function html(){
    return $this->_header($this->settings);
}
}


/*  =============================================================================
Helper Function: Creates a temporary instance and return html
========================================================================== */

function createHeader($options = array()) {
    $header = new Header( $options );
    $html = $header->html();
    return $html;
}

?>