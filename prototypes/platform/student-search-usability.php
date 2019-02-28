<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Student Search';
$patterns['focus']['title'] = 'Student Search';
$patterns['header']['mainNavActive'] = 'scheduling';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-search">
        <div class="container">
            <section class="section section-main section-box">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs filter-panel-wrapper">
                        <section class="section section-refinement-options equalized " data-equalize="layout-columns">
                            <header>
                                <h2>Additional Filters</h2>
                            </header>
                            <section class="section section-refinement-group">
                                <ul class="list-unstyled">
                                <li class="radio">
                                    <label type="checkbox"><input type="radio" name="affiliations" value="Jupiter" checked="check"> Jupiter Healthcare</label>
                                </li>
                                <li class="radio">
                                    <label type="checkbox"><input type="radio" id="all-affiliations" name="affiliations" value="All">All Affiliations </li>

                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Department" checked="checked"> Department</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" value="Job Title" checked="checked"> Job Title</label>
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
                                    <textarea id="id-textarea" class="form-control" rows="3"></textarea>
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
                                <div class="search-filter affiliations-filter">
                                    <div class="search-filter-header ">
                                        <span class="select-all-background"></span>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="filter-select-all">
                                                    <label class="checkbox-inline">
                                                        <input class="check-all" type="checkbox" id="checkAllOne" value="option1" checked>
                                                        <span class="filter-title">
                                                            Affiliations
                                                        </span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control input-sm filter-input-box" placeholder="Find Department" >
                                            </div>
                                            <div class="col-md-4">
                                                <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-filter-body collapse in" id="department">
                                        <div class="multiselect multi-filter">
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
                                <div class="search-filter showOnLoad">
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
                                                <input type="text" class="form-control input-sm filter-input-box" placeholder="Find Department" >
                                            </div>
                                            <div class="col-md-4">
                                                <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-filter-body collapse in" id="department">
                                        <div class="multiselect multi-filter">
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
                                <div class="search-filter showOnLoad">
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
                                                <input type="text" class="form-control input-sm filter-input-box" placeholder="Find Job Title">
                                            </div>
                                            <div class="col-md-4">
                                                <span class="pull-right">
                                                    <i class="fa fa-chevron-up  min-filter"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-filter-body collapse in" id="job_title">
                                        <div class="multiselect multi-filter" >
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
                                                        <input type="text" class="form-control input-sm filter-input-box" placeholder="Find Job Function">
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
                                                <input type="text" class="form-control input-sm filter-input-box" placeholder="Find Job Category">
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
                                                        <input type="text" class="form-control input-sm filter-input-box" placeholder="Find Certification" >
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
                                                        <input type="text" class="form-control input-sm filter-input-box" placeholder="Find License" >
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
                                <?

                                ?>
                                    <!-- /filter -->
                            </section>
                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'html' => '
                                            <a href="/student-search-results-mvp.php" class="btn btn-success">Search</a>
                                            <a href="/grading-manage-grading.php" class="btn btn-default">Cancel</a>
                                        ',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '<a href="#modal-filter" class="btn btn-default" data-toggle="modal">Filters</a>',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>
                    </div>
                </div>
                <!-- /section -->
            </section>
            <!-- /section-main -->

        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <!-- Modal -->
    <div id="modal-filter" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Filters</h4>
                </div>
                <div class="modal-body">
                    <section class="section section-refinement-group">
                                    <ul class="list-unstyled">


                                        <li class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Department" checked="checked"> Department</label>
                                        </li>
                                        <li class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Job Title" checked="checked"> Job Title</label>
                                        </li>
                                    </ul>
                                </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div><!-- /modal -->

<?php
// Defined in helpers.php file
include MODAL_SEARCH_FILTERS;
// include MODAL_SEARCH_FILTER_LAYOUT;
?>

<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>

<script type="text/javascript" src="/scripts/prototype.student-search.js">

</script>


<?= createSiteEnd(); ?>