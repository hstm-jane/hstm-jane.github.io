<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Student Search';
$patterns['focus']['title'] = 'Student Search';
$patterns['header']['mainNavActive'] = 'scheduling';

$patterns['focus']['meta_secondary'] = array(
            array(
                'label' => 'FILTER LAYOUT:',
                'value' => 'Default Layout 1',
            ));
$patterns['focus']['action'] = array(
    'text' => 'Filter Layouts <i class="fa fa-caret-down"></i>',
    'link' => 'course.php',
);


?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>


    <style>
    label {
        font-weight: normal;
        color: #666;
    }

    .stickybar {
        position: relative;
    }
    /*added for left column filter options*/

    .layout-search .section-refinement-options-right {
        border-left: 1px solid #eeeeee;
        padding-left: 20px;
    }

    .search-filter-header {
        /*background-color:#09C;*/
        position: relative;
    }

    .search-filter-header .select-all-background {
        position: absolute;
        /* background-color:green;*/
        left: 0;
        width: 45px;
        height: 100%;
        top: 0;
    }

    .search-filter-header .filter-title {
        vertical-align: middle;
        font-size: 20px;
        font-weight: normal;
    }

    .search-filter-header .check-all {
        vertical-align: middle;
        float: none !important;
        margin: 0 5px 0 0;
        /*margin-right: 25px;*/
    }
    </style>

    <div class="layout layout-search">
        <div class="container">
            <section class="section section-main section-box">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <section class="section section-refinement-options equalized " data-equalize="layout-columns" style="min-height: 1039px;">
                            <header>
                                <h2>Additional Filters</h2>
                            </header>
                            <section class="section section-refinement-group">
                                <ul class="list-unstyled">
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Department" checked="checked">Department</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Job Title" checked="checked">Job Title</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Job Function"> Job Function</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Job Category"> Job Category</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Hire / Re-Hire (Dates)"> Hire / Re-Hire (Dates) </label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Hire / Re-Hire (Months)"> Hire / Re-Hire (Months) </label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Review Date Range"> Review Date Range </label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Review Month"> Review Month </label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Active Date Range"> Active Date Range</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Active Month"> Active Month</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Email Addresses"> Email Addresses</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Certification"> Certification</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="License"> License</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Custom Field 1"> [Name of Custom Field #1]</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Custom Field 2"> [Name of Custom Field #2]</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Custom Field 3"> [Name of Custom Field #3]</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Custom Field 4"> [Name of Custom Field #4]</label>
                                    </li>
                                </ul>
                            </section>
                        </section>
                    </div>
                    <div class="col-md-9">
                        <section class="section section-results" data-equalize="layout-columns">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label" for="name">
                                            Last Name
                                        </label>
                                        <input class="form-control" id="name" name="name" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label" for="name">
                                            First Name
                                        </label>
                                        <input class="form-control" id="name" name="name" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label" for="name">
                                            Middle Name
                                        </label>
                                        <input class="form-control" id="name" name="name" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label" for="name">
                                        User IDs
                                    </label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <hr class="filter-break">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Status</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Active
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Inactive
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Both Active and Inactive
                                    </label>
                                </div>
                            </div>
                            <section class="section search-filters">
                                <hr class="filter-break">
                                <!-- filter -->
                                <div class="search-filter">
                                    <div class="search-filter-header ">
                                        <span class="select-all-background"></span>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="filter-select-all">
                                                    <label class="checkbox-inline">
                                                        <input class="check-all" type="checkbox" id="checkAllOne" value="option1" checked>
                                                        <span class="filter-title">
                                                            Department
                                                        </span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control input-sm filter-input-box" placeholder="Find" id="f-one">
                                            </div>
                                            <div class="col-md-4">
                                                <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-filter-body collapse in" id="department">
                                        <div class="multiselect multi-filter f-one" id="one">
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="1" checked>
                                                <span class="check-text">HCA-Tulane Medical Center</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="2" checked>
                                                <span class="check-text">HealthSouth - Rehabilitation Hospital of Miami</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="3" checked>
                                                <span class="check-text">Partner1 - Laerdal Sim Admins</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="4" checked>
                                                <span class="check-text">Partner2-Ge Course Builders</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="5" checked>
                                                <span class="check-text">Partner3-Laerdal Course Publishers</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="6" checked>
                                                <span class="check-text">Nueterra-Pediatric Surgery Center</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="7" checked>
                                                <span class="check-text">Nueterr-Pediatric Surgery Center</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="11" checked>
                                                <span class="check-text">001-other</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="12" checked>
                                                <span class="check-text">001-Unknown</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="13" checked>
                                                <span class="check-text">10</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="14" checked>
                                                <span class="check-text">11</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="15" checked>
                                                <span class="check-text">11212</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="search-filter">
                                    <div class="search-filter-header ">
                                        <span class="select-all-background"></span>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="filter-select-all">
                                                    <label class="checkbox-inline">
                                                        <input class="check-all" type="checkbox" id="checkAllOne" value="option1" checked>
                                                        <span class="filter-title">
                                                            Job Title
                                                        </span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control input-sm filter-input-box" placeholder="Find" id="f-one">
                                            </div>
                                            <div class="col-md-4">
                                                <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-filter-body collapse in" id="job-title">
                                        <div class="multiselect multi-filter f-two" id="two">
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="1" checked>
                                                <span class="check-text">Account Mgr - CC</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="2" checked>
                                                <span class="check-text">Accounting Coordinator</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="3" checked>
                                                <span class="check-text">Accounting/Payroll Coordinator</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="4" checked>
                                                <span class="check-text">Accreditation Coordinator</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="5" checked>
                                                <span class="check-text">Acctg & Quality Review Anal</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="6" checked>
                                                <span class="check-text">Administrative Assitant</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="7" checked>
                                                <span class="check-text">AP Coordinator</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header ">
                                                <span class="select-all-background"></span>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <span class="filter-select-all">
                                                            <label class="checkbox-inline">
                                                                <input class="check-all" type="checkbox" id="checkAllOne" value="option1" checked>
                                                                <span class="filter-title">
                                                                    Job Function
                                                                </span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control input-sm filter-input-box" placeholder="Find" id="f-one">
                                                    </div>
                                                    <div class="col-md-4">
                                                <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                                </div>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <div class="multiselect multi-filter f-seven" id="seven">
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-seven" name="option[]" value="1" checked>
                                                        <span class="check-text">JF2-0127</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-seven" name="option[]" value="2" checked>
                                                        <span class="check-text">TEST JOB FUNCTION</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="search-filter">
                                    <div class="search-filter-header ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="filter-select-all">
                                                    <label class="checkbox-inline">
                                                        <input class="check-all" type="checkbox" id="checkAllOne" value="option1" checked>
                                                        <span class="filter-title">
                                                            Job Category
                                                        </span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control input-sm filter-input-box" placeholder="Find" id="f-one">
                                            </div>
                                            <div class="col-md-4">
                                                <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-filter-body collapse in">
                                        <div class="multiselect multi-filter f-six" id="six">
                                            <label class="filter-label">
                                                <input type="checkbox" class="filter-six" name="option[]" value="1" checked>
                                                <span class="check-text">Admissions, Assessment and Referral Staff</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="filter-six" name="option[]" value="2" checked>
                                                <span class="check-text">Athletic Trainer</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="filter-six" name="option[]" value="3" checked>
                                                <span class="check-text">Audiologist</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="filter-six" name="option[]" value="4" checked>
                                                <span class="check-text">Behavioral Therapist</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="filter-six" name="option[]" value="5" checked>
                                                <span class="check-text">Billing/Coding Personnel</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="filter-six" name="option[]" value="6" checked>
                                                <span class="check-text">Board of Directors or Board Member</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="filter-six" name="option[]" value="7" checked>
                                                <span class="check-text">Cardiovascular Technologist and Technician</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header ">
                                                <span class="filter-title">
                                                    Hire / Re-Hire (Dates)
                                                </span>

                                                <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>

                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                    <form class="form-inline">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="hire-from-date">From Date </label>
                                                                    <div class="input-group date" id="hire-from-date">
                                                                        <input type="text" class="form-control" value="10/20/2015" />
                                                                        <span class="input-group-addon">
                                                                            <span class="fa fa-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="hire-through-date">Through Date </label>
                                                                    <div class="input-group date" id="hire-through-date">
                                                                        <input type="text" class="form-control" value="10/20/2015" />
                                                                        <span class="input-group-addon">
                                                                            <span class="fa fa-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header ">
                                                <span class="filter-title">
                                                    Hire / Re-Hire (Months)
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                    <form class="form-inline">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label for="fromMonth">From Month</label>
                                                                <select class="form-control hire-month" id="fromMonth">
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label for="throughMonth">Through Month</label>
                                                                <select class="form-control hire-month" id="throughMonth">
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header  ">
                                                <span class="filter-title">
                                                    Custom Field 1
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header  ">
                                                <span class="filter-title">
                                                    Custom Field 2
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header  ">
                                                <span class="filter-title">
                                                    Custom Field 3
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header  ">
                                                <span class="filter-title">
                                                    Custom Field 4
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header ">
                                                <span class="filter-title">
                                                    Active Date Range
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                    <form class="form-inline">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="hire-from-date">From Date </label>
                                                                    <div class="input-group date" id="hire-from-date">
                                                                        <input type="text" class="form-control" value="10/20/2015" />
                                                                        <span class="input-group-addon">
                                                                            <span class="fa fa-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="hire-through-date">Through Date </label>
                                                                    <div class="input-group date" id="hire-through-date">
                                                                        <input type="text" class="form-control" value="10/20/2015" />
                                                                        <span class="input-group-addon">
                                                                            <span class="fa fa-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header ">
                                                <span class="filter-title">
                                                    Active Month
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                    <form class="form-inline">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label for="fromMonth">From Month</label>
                                                                <select class="form-control hire-month" id="fromMonth">
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label for="throughMonth">Through Month</label>
                                                                <select class="form-control hire-month" id="throughMonth">
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header ">
                                                <span class="filter-title">
                                                    Review Date Range
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                    <form class="form-inline">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="hire-from-date">From Date </label>
                                                                    <div class="input-group date" id="hire-from-date">
                                                                        <input type="text" class="form-control" value="10/20/2015" />
                                                                        <span class="input-group-addon">
                                                                            <span class="fa fa-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="hire-through-date">Through Date </label>
                                                                    <div class="input-group date" id="hire-through-date">
                                                                        <input type="text" class="form-control" value="10/20/2015" />
                                                                        <span class="input-group-addon">
                                                                            <span class="fa fa-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header ">
                                                <span class="filter-title">
                                                    Review Month
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                    <form class="form-inline">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label for="fromMonth">From Month</label>
                                                                <select class="form-control hire-month" id="fromMonth">
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label for="throughMonth">Through Month</label>
                                                                <select class="form-control hire-month" id="throughMonth">
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header ">
                                                <span class="filter-title">
                                                    Email Addresses
                                                </span>
                                                     <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <section class="hire-rehire">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="control-label" for="name">
                                                                Email Addresses
                                                            </label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header  ">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <span class="filter-select-all">
                                                            <label class="checkbox-inline">
                                                                <input class="check-all" type="checkbox" id="checkAllOne" value="option1" checked>
                                                                <span class="filter-title">
                                                                    Certification
                                                                </span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control input-sm filter-input-box" placeholder="Find" id="f-one">
                                                    </div>
                                                     <div class="col-md-4">
                                                         <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <div class="multiselect multi-filter f-six" id="six">
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="1" checked>
                                                        <span class="check-text">Certification 1</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="2" checked>
                                                        <span class="check-text">Certification 2</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="3" checked>
                                                        <span class="check-text">Certification 3</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="4" checked>
                                                        <span class="check-text">Certification 4</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="5" checked>
                                                        <span class="check-text">Certification 5</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="6" checked>
                                                        <span class="check-text">Certification 6</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="7" checked>
                                                        <span class="check-text">Certification 7</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="search-filter">
                                            <div class="search-filter-header  ">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <span class="filter-select-all">
                                                            <label class="checkbox-inline">
                                                                <input class="check-all" type="checkbox" id="checkAllOne" value="option1" checked>
                                                                <span class="filter-title">
                                                                    License
                                                                </span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control input-sm filter-input-box" placeholder="Find" id="f-one">
                                                    </div>
                                                     <div class="col-md-4">
                                                         <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="search-filter-body collapse in">
                                                <div class="multiselect multi-filter f-six" id="six">
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="1" checked>
                                                        <span class="check-text">License 1</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="2" checked>
                                                        <span class="check-text">License 2</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="3" checked>
                                                        <span class="check-text">License 3</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="4" checked>
                                                        <span class="check-text">License 4</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="5" checked>
                                                        <span class="check-text">License 5</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="6" checked>
                                                        <span class="check-text">License 6</span>
                                                    </label>
                                                    <label class="filter-label">
                                                        <input type="checkbox" class="filter-six" name="option[]" value="7" checked>
                                                        <span class="check-text">License 7</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->
                                <?php

                                ?>
                                    <!-- /filter -->
                            </section>
                        </section>
                    </div>
                </div>

                </div>

                <?php
                    $stickybar = array(
                        'sets' => array(
                            array(
                                'html' => '
                                    <a href="/student-search-results.php" class="btn btn-success">Search</a>
                                    <!-- <button href="#modal-search-filters" class="btn btn-default" data-toggle="modal" data-target="#modal-search-filters">Manage Filters</button> -->
                                    <button href="#modal-search-filter-layout" class="btn btn-default" data-toggle="modal" data-target="#modal-search-filter-layout">Save Layout</button>
                                ',
                            ),
                        ),
                    );
                    echo createStickybar($stickybar);
                ?>

                <!-- /section -->
            </section>
            <!-- /section-main -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <div id="modal-search-filter-layout" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Search Filter Layouts</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>
                                Saved Layouts
                            </h3>
                            <select class="form-control">
                                <option>None Selected</option>
                                <option>Default Layout 1</option>
                                <option>Custom Layout 1</option>
                                <option>Custom Layout 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>
                                Save New Filter Layout As...
                            </h3>
                            <input class="form-control" id="text" name="text" type="text" placeholder="My Filter Layout">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="advanced-student-search-two.php" class="btn btn-success">Save</a>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger pull-right" data-dismiss="modal">Delete Layout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->
    <?php
// Defined in helpers.php file
include MODAL_SEARCH_FILTERS;
// include MODAL_SEARCH_FILTER_LAYOUT;

?>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>


        <script>
        (function(window, $) {
            'use strict';

            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

            healthStream.search = {};

            healthStream.search.multiselect = function() {
                // filter and multiselect only filtered results
                $(this).each(function() {
                    var checkboxes = $(this).find("input:checkbox");
                    checkboxes.each(function() {
                        var checkbox = $(this);
                        if (checkbox.prop("checked"))
                            checkbox.parent().addClass("multiselect-on");
                        checkbox.click(function() {
                            if (checkbox.prop("checked"))
                                checkbox.parent().addClass("multiselect-on");
                            else
                                checkbox.parent().removeClass("multiselect-on");
                        });
                    });
                });
                // check all checkboxes before filtering
                $(".check-all").change(function() {
                    $(this).parents('.search-filter-body:eq(0)').find("input:checkbox.check-filter").prop('checked', $(this).prop("checked"));
                });
            };

            healthStream.search.datepicker = function() {
                $('#hire-from-date, #hire-through-date')
                    .datepicker({
                        autoclose: true
                    });
            };

            healthStream.search.filter = function() {

                // Collapse Filter
                $('.min-filter').click(function(e) {
                    e.preventDefault();
                    var sf = $(this).closest('.search-filter');
                    $(this).toggleClass('fa-chevron-up  fa-chevron-down');
                    $(sf).find('.search-filter-body').toggleClass('collapse collapse in');
                    $(sf).find('.search-filter-header').toggleClass('collapsed-border expand-border');
                });
                // Toggle Expand/Collapse Filter Button
                $('.slat-toggle .btn').click(function(e) {
                    var $btn = $(this);
                    e.preventDefault();
                    $btn.toggleClass('btn-success btn-default');

                    if ($btn.hasClass('btn-success')) {
                        $btn.html('Selected<i class="fa fa-check visible-xs"></i>');
                    } else {
                        $btn.html('Select<i class="fa fa-chevron-down visible-xs"></i>');
                    }
                });


                // Filter Results
                $('.filter-input-box').keyup(function() {

                    var valThis = this.value.toLowerCase(),
                        length = this.value.length;

                    $(this).parents('.search-filter').find('label span.check-text').each(function() {
                        var inputText = $(this).text(),
                            searchTerm = inputText.toLowerCase();

                        (searchTerm.indexOf(valThis) > -1) ? $(this).closest('.filter-label').show(): $(this).closest('.filter-label').hide();

                    });

                });
            };

            $(window).on('load', function() {
                healthStream.search.multiselect();
                healthStream.search.datepicker();
                healthStream.search.filter();
            });
            /*Michelle Stuff- Needs revisioning before we use it MB */
            $(".search-filter:not(:contains('Department')):not(:contains('Job Title'))").hide();
            $(".section-refinement-group .checkbox input").change(function() {

                var checkboxValue = $(this).val();
                $(".search-filter:contains(" + checkboxValue + ")").toggle();
                $('html, body').animate({
                    scrollTop: $(".search-filter:contains(" + checkboxValue + ")").offset().top
                }, 'slow');

            });
            // select all in a search filter
            $(".check-all").change(function() {

                var $checkbox = $(this);

                if ($($checkbox).is(':checked')) {
                    $(this).closest(".search-filter").find(".multi-filter input:visible").prop("checked", true);
                } else {
                    $(this).closest(".search-filter").find(".multi-filter input:visible").prop("checked", false);
                }

            });
            /*End Michelle Stuff*/
        }(window, jQuery));


        var elementPosition = $('.section-refinement-options').offset();

        $(window).scroll(function() {
            if ($(window).scrollTop() > elementPosition.top) {
                $('.section-refinement-options').css('position', 'fixed').css('top', '0');
            } else {
                $('.section-refinement-options').css('position', 'static');
            }
        });
        </script>
<?= createSiteEnd(); ?>

