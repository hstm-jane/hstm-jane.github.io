<?php

// ##################### HLC Live Events Patterns and Views Routes Defined ######################## //

// ************** Defined Base Paths ************* //
define('DIR_BASE',     dirname( __FILE__ ).'/');
define ('ROOT_BASE', $_SERVER['DOCUMENT_ROOT']);

// ************** Defined Dir Paths ************** //
define('PATH_PATTERNS_MODALS', 'includes/patterns/modals/');
define('PATH_PATTERNS_TABLES', 'includes/patterns/tables/');
define('PATH_PATTERNS_FILTERS_SIDEBAR', 'includes/patterns/search-filters/sidebar/');
define('PATH_PATTERNS_FILTERS_PANEL', 'includes/patterns/search-filters/panel/');
define('PATH_PATTERNS_SLATS', 'includes/patterns/slats/');
define('PATH_PATTERNS_BUTTONS', 'includes/patterns/buttons/');
define('PATH_META_DATA', 'includes/meta-data/');
define('PATH_LAYOUT', 'includes/layout/');
define('PATH_PATTERNS', 'includes/patterns/');

// ************** Defined Modal Routes ************** //
define('MODAL_EVENT_DETAILS', PATH_PATTERNS_MODALS . '_modal-event-details.php');
define('MODAL_EVENTS', PATH_PATTERNS_MODALS . '_modal-events.php');
define('MODAL_MESSAGE_GROUP', PATH_PATTERNS_MODALS . '_modal-message-group.php');
define('MODAL_MESSAGE_SINGLE', PATH_PATTERNS_MODALS . '_modal-message-single.php');

define('MODAL_REFINE', PATH_PATTERNS_MODALS . '_modal-refine.php');
define('MODAL_REFINE_ADV_STUDENT', PATH_PATTERNS_MODALS . '_modal-refine-adv-student.php');
define('MODAL_PERMISSIONS', PATH_PATTERNS_MODALS . '_modal_permissions.php');
define('MODAL_PERSONNEL', PATH_PATTERNS_MODALS . '_modal-personnel.php');
define('MODAL_RECURRENCE', PATH_PATTERNS_MODALS . '_modal-recurrence.php');
define('MODAL_RESOURCE', PATH_PATTERNS_MODALS . '_modal-resource.php');
define('MODAL_COLOR_LEGEND', PATH_PATTERNS_MODALS . '_modal-color-legend.php');
define('MODAL_POPOVER', PATH_PATTERNS_MODALS . '_modal-popover.php');
define('MODAL_SEARCH_FILTERS', PATH_PATTERNS_MODALS . '_modal-search-filters.php');
define('MODAL_SEARCH_FILTER_LAYOUT', PATH_PATTERNS_MODALS . '_modal-search-filter-layout.php');
define('MODAL_SAVE_NEW_FILTER', PATH_PATTERNS_MODALS . '_modal-save-new-filter.php');

// ************** Defined Search Filter Sidebar Routes ************** //
define('SEARCH_FILTER_INSTITUTION', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-institution.php');
define('SEARCH_FILTER_STUDENT_GROUPS', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-student-groups.php');
define('SEARCH_FILTER_HIRE_REHIRE', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-hire-rehire.php');
define('SEARCH_FILTER_REVIEW_TIMEFRAME', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-active-timeframe.php');
define('SEARCH_FILTER_ACTIVE_TIMEFRAME', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-review-timeframe.php');
define('SEARCH_FILTER_JOB_FUNCTIONS', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-job-functions.php');
define('SEARCH_FILTER_BUILDING_LOCATION', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-building-location.php');
define('SEARCH_FILTER_ADDRESS', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-address.php');
define('SEARCH_FILTER_PERSONNEL', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-personnel.php');
define('SEARCH_FILTER_EQUIPMENT', PATH_PATTERNS_FILTERS_SIDEBAR . '_filter-equipment.php');

// ************** Defined Search Filter Panel Routes ************** //
define('SEARCH_FILTER_PANEL', PATH_PATTERNS_FILTERS_PANEL . '_filter-panel.php');
define('SEARCH_FILTER_PANEL_HIRE_REHIRE_MONTHS', PATH_PATTERNS_FILTERS_PANEL . '_filter-panel-rehire-months.php');
define('SEARCH_FILTER_PANEL_HIRE_REHIRE_DATES', PATH_PATTERNS_FILTERS_PANEL . '_filter-panel-rehire-dates.php');
define('SEARCH_FILTER_PANEL_JOB_FUNCTION', PATH_PATTERNS_FILTERS_PANEL . '_filter-panel-job-function.php');
define('SEARCH_FILTER_PANEL_JOB_CATEGORY', PATH_PATTERNS_FILTERS_PANEL . '_filter-panel-job-category.php');

// ************** Defined Slat Routes ************** //
define('SLATS_SLAT', PATH_PATTERNS_SLATS . '_slat.php');

// ************** Defined Button Routes ************** //
define('BUTTONS_SHOWING_DROPUP', PATH_PATTERNS_BUTTONS . '_btn-showing-dropup.php');
define('BUTTONS_PAGINATION', PATH_PATTERNS_BUTTONS . '_btn-pagination.php');
define('BUTTONS_SORTING', PATH_PATTERNS_BUTTONS . '_btn-sorting.php');

// ************** Defined Table Routes ************** //
define('TABLE_RESOURCE_AVAILABILITY', PATH_PATTERNS_TABLES . '_table-resource-availability.php');
define('TABLE_ALL_OCCURRENCES', PATH_PATTERNS_TABLES . '_table-all-occurrences.php');


// ++++++++++++++ Global Includes *************** //
include PATH_META_DATA . "_session.php";
include PATH_LAYOUT . "_site-start.php";
include PATH_LAYOUT . "_site-header.php";
include PATH_LAYOUT . "_focus.php";
include PATH_PATTERNS_SLATS . "_slat.php";
include PATH_PATTERNS_FILTERS_PANEL . "_filter-panel.php";
include PATH_LAYOUT . "_sidebar.php";
include PATH_LAYOUT . "_site-scripts.php";
include PATH_LAYOUT . "_site-footer.php";
include PATH_LAYOUT . "_site-end.php";


?>