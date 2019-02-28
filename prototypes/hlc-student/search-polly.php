<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Catalog';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'Catalog';

$search = (object) [
    "state" => 'open',
    "header" => 'Search Term',
    "controls" => array(
        '<div class="input-group"><input type="text" class="form-control" placeholder="" value="heart valves"><span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span></div>'

    )
];
$audience = (object) [
    "state" => 'closed', // static / open / closed
    "header" => 'Audience/Profession',
    "controls" => array(
        '<select class="form-control js-select2"><option default selected>Any</option> <option>Accountant and Auditor</option> <option>Acupuncturist</option> <option>Administrative Services Manager</option> <option>Advertising, Marketing, Promotions, Public Relations, and Sales Manager</option> <option>Allergists and Immunologist</option> <option>Ambulance Driver and Attendant, Except Emergency Medical Technician</option> <option>Anesthesiologist Assistant</option> <option>Architectural and Engineering Manager</option> <option>Architecture and Engineering Worker</option> <option>Athletic Trainer</option> <option>Audiologist</option> <option>Billing and Posting Clerk</option> <option>Bioinformatics Scientist</option> <option>Bioinformatics Technician</option> <option>Biomedical Engineer</option> <option>Biostatistician</option> <option>Budget Analyst</option> <option>Building and Grounds Cleaning and Maintenance Worker</option> <option>Cardiovascular Technologist and Technician</option> <option>Child, Family, and School Social Worker</option> <option>Childcare Worker</option> <option>Chiropractor</option> <option>Claims Adjusters, Appraisers, Examiners, and Investigator</option> <option>Clinical Data Manager</option> <option>Clinical Laboratory Technologists and Technician</option> <option>Clinical Nurse Specialist</option> <option>Clinical Research Coordinator</option> <option>Community and Social Service Specialist</option> <option>Community Health Worker</option> <option>Compensation and Benefits Manager</option> <option>Compensation, Benefits, and Job Analysis Specialist</option> <option>Compliance Officer</option> <option>Computer and Information Systems Manager</option> <option>Computer Worker</option> <option>Construction Trades Worker</option> <option>Counselor</option> <option>Cytogenetic Technologist</option> <option>Cytotechnologist</option> <option>Dental Assistant</option> <option>Dental Hygienist</option> <option>Dental Laboratory Technician</option> <option>Dentist</option> <option>Designer</option> <option>Diagnostic Medical Sonographer</option> <option>Dietetic Technician</option> <option>Dietitian and Nutritionist</option> <option>Driver/Sales Worker and Truck Driver</option> <option>Educational, Guidance, School, and Vocational Counselor</option> <option>Emergency Management Director</option> <option>Emergency Medical Technicians and Paramedic</option> <option>Endoscopy Technician</option> <option>Epidemiologist</option> <option>Financial Analyst and Advisor</option> <option>Financial Manager</option> <option>Financial Specialist</option> <option>Food Preparation and Serving Related Worker</option> <option>Food Service Manager</option> <option>Genetic Counselor</option> <option>Geneticist</option> <option>Health Educator</option> <option>Health Specialties Teacher, Postsecondary</option> <option>Health Technologist and Technician</option> <option>Healthcare Practitioner and Technical Worker</option> <option>Hearing Aid Specialist</option> <option>Histotechnologists and Histologic Technician</option> <option>Home Health Aide</option> <option>Hospitalist</option> <option>Human Resources Manager</option> <option>Human Resources Worker</option> <option>Industrial Production Manager</option> <option>Information Technology Project Managers</option> <option>Installation, Maintenance, and Repair Worker</option> <option>Insurance Claims Clerk</option> <option>Insurance Policy Processing Clerk</option> <option>Laundry and Dry-Cleaning Worker</option> <option>Librarian</option> <option>Library Technician</option> <option>Licensed Practical and Licensed Vocational Nurse - LPN</option> <option>Life Scientist, All Other</option> <option>Logistician</option> <option>Magnetic Resonance Imaging Technologist</option> <option>Management Analyst</option> <option>Manager</option> <option>Marriage and Family Therapist</option> <option>Massage Therapist</option> <option>Mathematical Science Worker</option> <option>Medical and Health Services Manager</option> <option>Medical Appliance Technician</option> <option>Medical Assistant</option> <option>Medical Equipment Preparer</option> <option>Medical Records and Health Information Technician</option> <option>Medical Scientist</option> <option>Medical Secretary</option> <option>Medical Transcriptionist</option> <option>Mental Health and Substance Abuse Social Worker</option> <option>Mental Health Counselor</option> <option>Midwife</option> <option>Miscellaneous Business Operations Specialist</option> <option>Miscellaneous Community and Social Service Specialist</option> <option>Miscellaneous Health Diagnosing and Treating Practitioner</option> <option>Miscellaneous Health Technologists and Technician</option> <option>Molecular and Cellular Biologist</option> <option>Naturopathic Physician</option> <option>Neurodiagnostic Technologist</option> <option>Neurologist</option> <option>Nuclear Medicine Technologist</option> <option>Nurse Anesthetist</option> <option>Nurse Midwife</option> <option>Nurse Practitioner</option> <option>Nursing Assistant - CNA</option> <option>Nursing Instructor and Teacher, Postsecondary</option> <option>Nursing: Registered Nurse - RN</option> <option>Occupational Health and Safety Specialist</option> <option>Occupational Health and Safety Technician</option> <option>Occupational Therapist</option> <option>Occupational Therapy Aide</option> <option>Occupational Therapy Assistant</option> <option>Office and Administrative Support Worker</option> <option>Operations Specialties Manager</option> <option>Ophthalmic Laboratory Technician</option> <option>Ophthalmic Medical Technician</option> <option>Ophthalmic Medical Technologist</option> <option>Ophthalmologist</option> <option>Optician, Dispensing</option> <option>Optometrist</option> <option>Oral and Maxillofacial Surgeon</option> <option>Orderlie</option> <option>Orthodontist</option> <option>Orthoptist</option> <option>Orthotist and Prosthetist</option> <option>Other</option> <option>Pathologist</option> <option>Payroll and Timekeeping Clerks</option> <option>Personal Care Aide</option> <option>Personal Care and Service Worker, All Other</option> <option>Pharmacist</option> <option>Pharmacy Aide</option> <option>Pharmacy Technician</option> <option>Phlebotomist</option> <option>Physician</option> <option>Physical Scientist</option> <option>Physical Therapist</option> <option>Physical Therapist Aide</option> <option>Physical Therapist Assistant</option> <option>Physician Assistant</option> <option>Podiatrist</option> <option>Property, Real Estate, and Community Association Manager</option> <option>Prosthodontist</option> <option>Psychiatric Aide</option> <option>Psychiatric Technician</option> <option>Psychologist</option> <option>Purchasing Manager</option> <option>Radiation Therapist</option> <option>Radiologic Technician</option> <option>Radiologic Technologist</option> <option>Radiologist</option> <option>Recreation and Fitness Worker</option> <option>Recreational Therapist</option> <option>Rehabilitation Counselor</option> <option>Religious Worker</option> <option>Residential Advisor</option> <option>Respiratory Therapist</option> <option>Respiratory Therapy Technician</option> <option>Sales Representatives, Services</option> <option>Security Guard</option> <option>Social and Community Service Manager</option> <option>Social and Human Service Assistant</option> <option>Social Worker</option> <option>Speech-Language Pathologist</option> <option>Speech-Language Pathology Assistant</option> <option>Substance Abuse and Behavioral Disorder Counselor</option> <option>Surgical Assistant</option> <option>Surgical Technologist</option> <option>Tax Preparer</option> <option>Top Executive</option> <option>Training and Development Manager</option> <option>Training and Development Specialist</option> <option>Transportation, Storage, and Distribution Manager</option> <option>Veterinary Technologists and Technician</option> <option>Web designer or graphic designer</option></select><p class="launch-browse-text small"><a href="#modal-audience" class="launch-browse-link" data-toggle="modal" data-dismiss="modal">Browse All Audiences/Professions</a></p>'
    )
];
$cecredit = (object) [
    "state" => 'open', // static / open / closed
    "header" => 'CE Credit',
    "controls" => array(
        '<select class="form-control js-select2"><option default>Any</option><option selected>CE</option><option>CME</option><option>CNE</option></select>'
    )
];
$specialty = (object) [
    "state" => 'open', // static / open / closed
    "header" => 'Specialty',
    "controls" => array(
        '<select class="form-control js-select2"><option default>Any</option> <option>Adolescent Health</option> <option>Adult Behavioral Health</option> <option>Allergy and Immunology</option> <option>Ambulatory Care</option> <option>Anesthesiology</option> <option selected>Cardiology</option> <option>Child Behavioral Health</option> <option>Colon &amp; Rectal Surgery</option> <option>Community Health</option> <option>Critical Care</option> <option>Dermotology</option> <option>Ear, Nose and Throat</option> <option>Emergency</option> <option>Endocrinology</option> <option>Family Behavioral Health</option> <option>Forensic Behavioral Health</option> <option>Gastorentorology</option> <option>General Surgery</option> <option>Gerontology</option> <option>Health Promotion and Wellness</option> <option>Hematology</option> <option>Holistic</option> <option>Home Health</option> <option>Hospice and Palliative Care</option> <option>Hospitalist</option> <option>Infection</option> <option>Maternal-Newborn</option> <option>Medical Genetics</option> <option>Neonatal</option> <option>Nephrology</option> <option>Neurology</option> <option>Neurosurgery</option> <option>Nuclear Medicine</option> <option>Obstetrics and Gynecology</option> <option>Occupational Health</option> <option>Oncology</option> <option>Ophthalmology</option> <option>Oral Health</option> <option>Orthopedic Surgery</option> <option>Orthopedics</option> <option>Pain</option> <option>Pathology</option> <option>Pediatrics</option> <option>Perioperative</option> <option>Plastics</option> <option>Preventative Care</option> <option>Primary Care</option> <option>Public Health</option> <option>Pulmonology</option> <option>Radiology</option> <option>Rehabilitation</option> <option>Rheumatology</option> <option>School Health</option> <option>Sports Medicine</option> <option>Thoracic surgery</option> <option>Toxicology</option> <option>Urology</option> <option>Vascular Surgery</option> <option>Wound Care</option></select><p class="launch-browse-text small"><a href="#modal-specialty" class="launch-browse-link" data-toggle="modal" data-dismiss="modal">Browse All Specialties</a></p>'
    )
];
$setting = (object) [
    "state" => 'closed', // static / open / closed
    "header" => 'Setting',
    "controls" => array(
        '<select class="form-control js-select2"><option default selected>Any</option> <option>Academic setting</option> <option>Acute Care</option> <option>Ambulatory Care</option> <option>Ambulatory Surgical</option> <option>Assisted Living</option> <option>Behavioral Health, Child</option> <option>Behavioral Health, Inpatient</option> <option>Behavioral Health, Outpatient</option> <option>Community Health</option> <option>Correctional Facility</option> <option>Dental Health</option> <option>Dialysis</option> <option>Federal/VA Facility</option> <option>Home Care (Concierge)</option> <option>Home Health</option> <option>Hospice</option> <option>Hospital</option> <option>Laboratory</option> <option>Long Term Acute Care</option> <option>Occupational Health</option> <option>Pediatric</option> <option>Pharmacy</option> <option>Physician Group/Solo Practice</option> <option>Rehabilitation Center, Behavioral (In-patient)</option> <option>Rehabilitation Center, Behavioral (Out-patient)</option> <option>Rehabilitation Center, Physical (In-patient)</option> <option>Rehabilitation Center, Physical (Out-Patient)</option> <option>Residential Treatment Facility</option> <option>Respite Care</option> <option>Retail</option> <option>School Health</option> <option>Skilled Nursing Facility</option> <option>Supplier</option> <option>Telemedicine</option> <option>Urgent Care</option></select><p class="launch-browse-text small"><a href="#modal-setting" class="launch-browse-link" data-toggle="modal" data-dismiss="modal">Browse All Settings</a></p>'
    )
];
$subject = (object) [
    "state" => 'closed', // static / open / closed
    "header" => 'Subject',
    "controls" => array(
        '<select class="form-control js-select2"><option default selected>Any</option> <option>Access</option> <option>Accountability</option> <option>Accountable Care Organization</option> <option>Accounting and Finance</option> <option>Accreditation</option> <option>Administrative Support</option> <option>Airways and Respiratory Emergencies</option> <option>Anatomy and Physiology</option> <option>Behavioral Health</option> <option>Billing</option> <option>Business Analysis</option> <option>Business Law</option> <option>CAHPS</option> <option>Calculations</option> <option>Care Coordination</option> <option>Circulatory System</option> <option>Clinical Coordination</option> <option>CMS Related</option> <option>Coding</option> <option>Collaboration</option> <option>Communication</option> <option>Consulting</option> <option>Corporate Compliance</option> <option>Cultural Awareness</option> <option>Cultural Awareness</option> <option>Cultural Competence</option> <option>Culture</option> <option>Customer Service</option> <option>Death and Dying</option> <option>Desktop Computer Skills</option> <option>Diagnostic Tests</option> <option>Digestive System</option> <option>Disaster Planning</option> <option>Discharge Planning</option> <option>Diseases and Conditions</option> <option>Documentation and Reporting</option> <option>Education and Learning</option> <option>Efficiency</option> <option>Elimination Management</option> <option>Emergency Services</option> <option>Empathy</option> <option>Employee Engagement</option> <option>Endocrine System</option> <option>Engagement</option> <option>ENT and Ophthalmic</option> <option>Environment</option> <option>EPIC</option> <option>Family Input</option> <option>Government</option> <option>Government Relations</option> <option>Health and Clinical Basics</option> <option>Health Facilities Management</option> <option>Health Services Administration</option> <option>Healthcare and Governance</option> <option>Healthcare Delivery</option> <option>Hematology</option> <option>Hospital Environment</option> <option>Human Resources</option> <option>ICD-10</option> <option>Immobility Management</option> <option>Immune System</option> <option>Improvement</option> <option>Industry</option> <option>Infection Control</option> <option>Information Systems</option> <option>Information Technology and Systems</option> <option>Insurance</option> <option>Integumentary System</option> <option>International Business</option> <option>Intravenous Therapy and Vascular Access</option> <option>Knowledge Management</option> <option>Laboratory Techniques and Procedures</option> <option>Law and Ethics</option> <option>Leadership</option> <option>Legal Compliance</option> <option>Life Support</option> <option>Lymphatic System</option> <option>Magnet Related</option> <option>Management</option> <option>Marketing</option> <option>Medical Equipment</option> <option>Medical Informatics</option> <option>Medication Communication</option> <option>Medication Preparation</option> <option>Mobility, Transfer and Ambulation</option> <option>Musculoskeletal System</option> <option>Nervous System</option> <option>Nurse Communication</option> <option>Nursing Care</option> <option>Nutrition</option> <option>Occupational Health and Safety</option> <option>Operations</option> <option>Organization and Administration</option> <option>Outcomes</option> <option>Oxygen and Ventilation</option> <option>Pain Management</option> <option>Patient Advocacy</option> <option>Patient Assessment</option> <option>Patient Care</option> <option>Patient Care Management</option> <option>Patient Education</option> <option>Patient Expectations</option> <option>Patient Interactions</option> <option>Patient Needs</option> <option>Patient Perceptions</option> <option>Patient Rights</option> <option>Patient Safety</option> <option>Patient Self Care</option> <option>Performance Management</option> <option>Personal Development</option> <option>Pharmacology</option> <option>Population Health Management</option> <option>Practice Environment</option> <option>Project Management</option> <option>Protocols</option> <option>Provider Communication</option> <option>Psychosocial</option> <option>Quality Care</option> <option>Quality Improvement</option> <option>Reimbursement Models</option> <option>Reproductive System</option> <option>Research</option> <option>Respiratory System</option> <option>Risk Management</option> <option>Rounding</option> <option>Safety and Protection</option> <option>Sales</option> <option>Satisfaction</option> <option>Specimen Collection</option> <option>Staff Interactions</option> <option>Strategic Planning</option> <option>Surgical Procedures</option> <option>Surveys</option> <option>Team Building</option> <option>Telehealth</option> <option>The Joint Commission</option> <option>Therapeutics</option> <option>Training</option> <option>Transition of Care</option> <option>Vital Signs and Hemodynamics</option> <option>Wait Times</option> <option>Women\'s Health</option> <option>Workflow Efficiency</option> <option>Workplace Violence</option> <option>Wound Care</option></select><p class="launch-browse-text small"><a href="#modal-subject" class="launch-browse-link" data-toggle="modal" data-dismiss="modal">Browse All Subjects</a></p>'
    )
];
$publisher = (object) [
    "state" => 'closed', // static / open / closed
    "header" => 'Publisher',
    "controls" => array(
        '<select class="form-control js-select2"><option default selected>Any</option> <option>Content Partner 1</option> <option>Content Partner 2</option> <option>Content Partner 3</option> <option>Content Partner 4</option> <option>Content Partner 5</option> <option>Content Partner 6</option> <option>Content Partner 7</option> <option>Content Partner 8</option> <option>Content Partner 9</option> <option>Content Partner 10</option> <option>Content Partner 11</option> <option>Content Partner 12</option> <option>Content Partner 13</option> <option>Content Partner 14</option> <option>Content Partner 15</option> <option>Content Partner 16</option> <option>Content Partner 17</option> <option>Content Partner 18</option> <option>Content Partner 19</option> <option>Content Partner 20</option></select><p class="launch-browse-text small"><a href="#modal-publisher" class="launch-browse-link" data-toggle="modal" data-dismiss="modal">Browse All Publishers</a></p>'
    )
];
$modality = (object) [
    "state" => 'closed', // static / open / closed
    "header" => 'Modality',
    "controls" => array(
        '<select class="form-control js-select2"><option default>Any</option><option selected>E-Learning</option><option>SIM</option><option>Video</option><option>PDF</option></select>'
    )
];
$appliedFiltersDesktop = (object) [
    'visible' => 'desktop',
    'state' => 'static',
    'header' => 'Applied Filters',
    'controls' => array(
        '<div class="tag-group"><a href="#" class="tag">Search Term: Heart Valves<i class="fa fa-times"></i></a> <a href="#" class="tag">CE Credit: CE<i class="fa fa-times"></i></a> <a href="#" class="tag">Specialty: Cardiology<i class="fa fa-times"></i></a></div>'
    )
];

$appliedFiltersMobile = (object) [
    'visible' => 'mobile',
    'state' => 'static',
    'controls' => array(
        '<div class="tag-group"><a href="#" class="tag">Search Term: Heart Valves<i class="fa fa-times"></i></a> <a href="#" class="tag">CE Credit: 1.5 Hour(s)<i class="fa fa-times"></i></a> <a href="#" class="tag">Specialty: Cardiology<i class="fa fa-times"></i></a></div>'
    )
];

$sortMobile = (object) [
    'visible' => 'mobile',
    'header' => 'Sort',
    'controls' => array(
        '<select class="form-control js-select2"><option>Relevance</option><option selected>A-Z</option></select>'
    )
];

$courseList = array(
    'A Day in the Life of ICD-10',
    'Advanta 2 Med Surg Bed',
    'Cardiogenic Shock (Case Study)',
    'Course 1',
    'Course 2',
    'Course 3',
    'Course 4',
    'Course 5',
    'Course 6',
    'Course 7',
    'Course 8',
    'Course 9',
    'Course 10',
    'Course 11',
    'Course 12',
    'Course 13',
    'Course 14',
    'Heart Disease and Treatment Options',
    'Lippencott - 18-lead electrocardiogram',
    'Understanding Chronic Pain Management',
);

function makeFilter($filter){

    // SCREEN SIZE VISIBILITY
    if ( !empty($filter->visible) && $filter->visible === 'mobile' ) {
        $visible = ' search-filter-mobile';
    }
    else if ( !empty($filter->visible) && $filter->visible === 'desktop' ) {
        $visible = ' search-filter-desktop';
    }
    else {
        $visible = '';
    }

    // OPEN OR CLOSED
    if ( !empty($filter->state) && $filter->state === 'closed' ) {
        $closed = ' search-filter-closed';
    } else {
        $closed = '';
    }

    // ABILITY TO TOGGLE
    if ( !empty($filter->state) && ( $filter->state === 'open' || $filter->state === 'closed' ) ) {
        $toggle = ' search-filter-toggle';
        $arrow = '<div class="search-filter-arrow"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></div>';
    } else {
        $toggle = '';
        $arrow = '';
    }

    $html = '';
    $html .= '<div class="search-filter' . $closed . $visible .'">';

    if ( !empty($filter->header) ) {
        $html .= '<div class="search-filter-header' . $toggle . '">';
        $html .= '<div class="search-filter-title">' . $filter->header . '</div>';
        $html .= $arrow;
        $html .= '</div>';
    }

    foreach ($filter->controls as $control) {
        $html .= '<div class="search-filter-control">' . $control . '</div>';
    }

    if ( !empty($filter->footer) ) {
        $html .= '<div class="search-filter-footer">' . $filter->footer . '</div>';
    }
    $html .= '</div>';

    return $html;
}

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-search">
    <div class="container search-polly">
        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-filters" data-equalize="layout-columns">
                        <h2>Filters</h2>
                        <div class="search-filters">
                            <?= makeFilter($appliedFiltersDesktop); ?>
                            <?= makeFilter($search); ?>
                            <?= makeFilter($sortMobile); ?>
                            <?= makeFilter($audience); ?>
                            <?= makeFilter($cecredit); ?>
                            <?= makeFilter($specialty); ?>
                            <?= makeFilter($setting); ?>
                            <?= makeFilter($subject); ?>
                            <?= makeFilter($publisher); ?>
                            <?= makeFilter($modality); ?>
                        </div>
                    </section>
                </div>
                <div class="col-md-9">
                    <section class="section section-results" data-equalize="layout-columns">
                        <section class="section section-results-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2>Results <small>Showing 1-20 of 35</small></h2>
                                    <?= makeFilter($appliedFiltersMobile); ?>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <div class="section-results-header-sort">
                                        <div class="dropdown">
                                            <a class="btn btn-default" data-toggle="dropdown" href="#">Sort: A-Z <i class="fa fa-sort"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Relevance</a></li>
                                                <li class="active"><a href="#">A-Z</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <?php for ( $i = 0; $i < 20; $i++ ) {

                                $content = '
                                    <section class="section">
                                        <h5>Description</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita error molestias dicta ducimus ratione laborum deserunt aliquam, perferendis ad nostrum atque, fugiat deleniti sapiente a pariatur nulla beatae voluptatibus illum.</p>
                                    </section>
                                    <section class="section">
                                        <small class="text-muted"><b>Content Owner</b> Lippencot Professional Development</small>
                                    </section>
                                ';
                                $slat = array(
                                    'title' => '<a href="#">'.$courseList[$i].'</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Course',
                                        ),
                                        array(
                                            'label' => 'CE:',
                                            'value' => '1.5 Hour(s)',
                                        ),
                                        array(
                                            'label' => 'Activities:',
                                            'value' => 'Online, Evaluation',
                                        ),
                                        array(
                                            'label' => 'Alerts:',
                                            'value' => 'Mobile Compatible, Expiring in 30 Days',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => '<i class="fa fa-info fa-fw visible-xs"></i> Info',
                                        'link' => 'course-enroll.php',
                                    ),
                                    'nested' => array(
                                        'hide' => array($content)
                                    ),
                                );
                                echo createSlat($slat);

                            }?>
                        </section>

                        <?php
                            $stickybar = array(
                                'sets' => array(
                                    array(
                                        'position' => 'left',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '<a href="#modal-filter" class="btn btn-default" data-toggle="modal">Filter Results</a>',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('hidden-xs','hidden-sm'),
                                        'html' => '
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-20 of 35 <i class="fa fa-caret-up"></i></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="active"><a href="#">20 per page</a></li>
                                                    <li><a href="#">50 per page</a></li>
                                                    <li><a href="#">100 per page</a></li>
                                                    <li><a href="#">250 per page</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                    array(
                                        'position' => 'right',
                                        'classes' => array('visible-xs','visible-sm'),
                                        'html' => '
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                                <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        ',
                                    ),
                                ),
                            );
                            echo createStickybar($stickybar);
                        ?>

                    </section><!-- /section-main -->
                </div><!-- /column -->
            </div><!-- /row -->
        </section>


    </div><!-- /container -->
</div><!-- /layout -->

<!-- Modal -->
<div id="modal-filter" class="search-polly search-polly-modal-filter modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Filter Results</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-specialty" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Select a Specialty</h4>
            </div>
            <div class="modal-body">
                <div class="modal-alpha-nav">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#top-specialty" aria-controls="top-specialty" role="tab" data-toggle="pill">Top Specialties</a></li>
                        <li role="presentation"><a href="#a-specialty" aria-controls="a-specialty" role="tab" data-toggle="pill">A</a></li>
                        <li role="presentation" class="disabled"><a href="#b-specialty" aria-controls="b-specialty" role="tab" data-toggle="pill">B</a></li>
                        <li role="presentation"><a href="#c-specialty" aria-controls="c-specialty" role="tab" data-toggle="pill">C</a></li>
                        <li role="presentation"><a href="#d-specialty" aria-controls="d-specialty" role="tab" data-toggle="pill">D</a></li>
                        <li role="presentation"><a href="#e-specialty" aria-controls="e-specialty" role="tab" data-toggle="pill">E</a></li>
                        <li role="presentation"><a href="#f-specialty" aria-controls="f-specialty" role="tab" data-toggle="pill">F</a></li>
                        <li role="presentation"><a href="#g-specialty" aria-controls="g-specialty" role="tab" data-toggle="pill">G</a></li>
                        <li role="presentation"><a href="#h-specialty" aria-controls="h-specialty" role="tab" data-toggle="pill">H</a></li>
                        <li role="presentation"><a href="#i-specialty" aria-controls="i-specialty" role="tab" data-toggle="pill">i</a></li>
                        <li role="presentation" class="disabled"><a href="#j-specialty" aria-controls="j-specialty" role="tab" data-toggle="pill">J</a></li>
                        <li role="presentation" class="disabled"><a href="#k-specialty" aria-controls="k-specialty" role="tab" data-toggle="pill">K</a></li>
                        <li role="presentation" class="disabled"><a href="#l-specialty" aria-controls="l-specialty" role="tab" data-toggle="pill">L</a></li>
                        <li role="presentation"><a href="#m-specialty" aria-controls="m-specialty" role="tab" data-toggle="pill">M</a></li>
                        <li role="presentation"><a href="#n-specialty" aria-controls="n-specialty" role="tab" data-toggle="pill">N</a></li>
                        <li role="presentation"><a href="#o-specialty" aria-controls="o-specialty" role="tab" data-toggle="pill">O</a></li>
                        <li role="presentation"><a href="#p-specialty" aria-controls="p-specialty" role="tab" data-toggle="pill">P</a></li>
                        <li role="presentation" class="disabled"><a href="#q-specialty" aria-controls="q-specialty" role="tab" data-toggle="pill">Q</a></li>
                        <li role="presentation"><a href="#r-specialty" aria-controls="r-specialty" role="tab" data-toggle="pill">R</a></li>
                        <li role="presentation"><a href="#s-specialty" aria-controls="s-specialty" role="tab" data-toggle="pill">S</a></li>
                        <li role="presentation"><a href="#t-specialty" aria-controls="t-specialty" role="tab" data-toggle="pill">T</a></li>
                        <li role="presentation"><a href="#u-specialty" aria-controls="u-specialty" role="tab" data-toggle="pill">U</a></li>
                        <li role="presentation"><a href="#v-specialty" aria-controls="v-specialty" role="tab" data-toggle="pill">V</a></li>
                        <li role="presentation"><a href="#w-specialty" aria-controls="w-specialty" role="tab" data-toggle="pill">W</a></li>
                        <li role="presentation" class="disabled"><a href="#x-specialty" aria-controls="x-specialty" role="tab" data-toggle="pill">X</a></li>
                        <li role="presentation" class="disabled"><a href="#y-specialty" aria-controls="y-specialty" role="tab" data-toggle="pill">Y</a></li>
                        <li role="presentation" class="disabled"><a href="#z-specialty" aria-controls="z-specialty" role="tab" data-toggle="pill">Z</a></li>
                        <li role="presentation" class="disabled"><a href="#num-specialty" aria-controls="num-specialty" role="tab" data-toggle="pill">#</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="top-specialty">
                            <h4>Top Specialties</h4>
                            <ul class="category-list">
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Pediatric Cardiology</a></li>
                                <li><a href="#">Critical Cardiac Electrophysiology</a></li>
                                <li><a href="#">Cardiovascular &amp; Pulminary Diseases</a></li>
                                <li><a href="#">Nuclear Cardiology</a></li>
                                <li><a href="#">Advanced Heart Failure and Transplant Cardiology</a></li>
                                <li><a href="#">Invasive Cardiology</a></li>
                                <li><a href="#">Adult Cardiology</a></li>
                                <li><a href="#">Critical Cardiology</a></li>
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Pediatric Cardiology</a></li>
                                <li><a href="#">Critical Cardiac Electrophysiology</a></li>
                                <li><a href="#">Cardiovascular &amp; Pulminary Diseases</a></li>
                                <li><a href="#">Nuclear Cardiology</a></li>
                                <li><a href="#">Advanced Heart Failure and Transplant Cardiology</a></li>
                                <li><a href="#">Invasive Cardiology</a></li>
                                <li><a href="#">Adult Cardiology</a></li>
                                <li><a href="#">Critical Cardiology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="a-specialty">
                            <h4>'A' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Adolescent Health</a></li>
                                <li><a href="#">Adult Behavioral Health </a></li>
                                <li><a href="#">Allergy and Immunology</a></li>
                                <li><a href="#">Ambulatory Care</a></li>
                                <li><a href="#">Anesthesiology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="c-specialty">
                            <h4>'C' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Colon &amp; Rectal Surgery</a></li>
                                <li><a href="#">Community Health</a></li>
                                <li><a href="#">Critical Care </a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="d-specialty">
                            <h4>'D' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Dermatology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="e-specialty">
                            <h4>'E' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Ear, Nose and Throat</a></li>
                                <li><a href="#">Emergency</a></li>
                                <li><a href="#">Endocrinology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="f-specialty">
                            <h4>'F' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Family Behavioral Health</a></li>
                                <li><a href="#">Forensic Behavioral Health</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="g-specialty">
                            <h4>'G' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Gastorentorology</a></li>
                                <li><a href="#">General Surgery</a></li>
                                <li><a href="#">Gerontology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="h-specialty">
                            <h4>'H' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Health Promotion and Wellness</a></li>
                                <li><a href="#">Hematology</a></li>
                                <li><a href="#">Holistic</a></li>
                                <li><a href="#">Home Health</a></li>
                                <li><a href="#">Hospice and Palliative Care</a></li>
                                <li><a href="#">Hospitalist</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="i-specialty">
                            <h4>'I' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Infection</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="m-specialty">
                            <h4>'M' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Maternal-Newborn</a></li>
                                <li><a href="#">Medical Genetics</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="n-specialty">
                            <h4>'N' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Neonatal</a></li>
                                <li><a href="#">Nephrology</a></li>
                                <li><a href="#">Neurology</a></li>
                                <li><a href="#">Neurosurgery</a></li>
                                <li><a href="#">Nuclear Medicine</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="o-specialty">
                            <h4>'O' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Obstetrics and Gynecology</a></li>
                                <li><a href="#">Occupational Health</a></li>
                                <li><a href="#">Oncology</a></li>
                                <li><a href="#">Ophthalmology</a></li>
                                <li><a href="#">Oral Health</a></li>
                                <li><a href="#">Orthopedic Surgery</a></li>
                                <li><a href="#">Orthopedics</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="p-specialty">
                            <h4>'P' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Pain</a></li>
                                <li><a href="#">Pathology</a></li>
                                <li><a href="#">Pediatrics</a></li>
                                <li><a href="#">Perioperative</a></li>
                                <li><a href="#">Plastics</a></li>
                                <li><a href="#">Preventative Care</a></li>
                                <li><a href="#">Primary Care</a></li>
                                <li><a href="#">Public Health</a></li>
                                <li><a href="#">Pulmonology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="r-specialty">
                            <h4>'R' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Radiology</a></li>
                                <li><a href="#">Rehabilitation</a></li>
                                <li><a href="#">Rheumatology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="s-specialty">
                            <h4>'S' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">School Health</a></li>
                                <li><a href="#">Sports Medicine</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="t-specialty">
                            <h4>'T' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Thoracic Surgery</a></li>
                                <li><a href="#">Toxicology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="u-specialty">
                            <h4>'U' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Urology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="v-specialty">
                            <h4>'V' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Vascular Surgery</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="W-specialty">
                            <h4>'W' Specialties</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Wound Care</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-audience" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Select an Audience/Profession</h4>
            </div>
            <div class="modal-body">
                <div class="modal-alpha-nav">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#top-audience" aria-controls="top-audience" role="tab" data-toggle="pill">Top Audiences/Professions</a></li>
                        <li role="presentation"><a href="#a-audience" aria-controls="a-audience" role="tab" data-toggle="pill">A</a></li>
                        <li role="presentation"><a href="#b-audience" aria-controls="b-audience" role="tab" data-toggle="pill">B</a></li>
                        <li role="presentation"><a href="#c-audience" aria-controls="c-audience" role="tab" data-toggle="pill">C</a></li>
                        <li role="presentation"><a href="#d-audience" aria-controls="d-audience" role="tab" data-toggle="pill">D</a></li>
                        <li role="presentation"><a href="#e-audience" aria-controls="e-audience" role="tab" data-toggle="pill">E</a></li>
                        <li role="presentation"><a href="#f-audience" aria-controls="f-audience" role="tab" data-toggle="pill">F</a></li>
                        <li role="presentation"><a href="#g-audience" aria-controls="g-audience" role="tab" data-toggle="pill">G</a></li>
                        <li role="presentation"><a href="#h-audience" aria-controls="h-audience" role="tab" data-toggle="pill">H</a></li>
                        <li role="presentation"><a href="#i-audience" aria-controls="i-audience" role="tab" data-toggle="pill">i</a></li>
                        <li role="presentation" class="disabled"><a href="#j-audience" aria-controls="j-audience" role="tab" data-toggle="pill">J</a></li>
                        <li role="presentation" class="disabled"><a href="#k-audience" aria-controls="k-audience" role="tab" data-toggle="pill">K</a></li>
                        <li role="presentation"><a href="#l-audience" aria-controls="l-audience" role="tab" data-toggle="pill">L</a></li>
                        <li role="presentation"><a href="#m-audience" aria-controls="m-audience" role="tab" data-toggle="pill">M</a></li>
                        <li role="presentation"><a href="#n-audience" aria-controls="n-audience" role="tab" data-toggle="pill">N</a></li>
                        <li role="presentation"><a href="#o-audience" aria-controls="o-audience" role="tab" data-toggle="pill">O</a></li>
                        <li role="presentation"><a href="#p-audience" aria-controls="p-audience" role="tab" data-toggle="pill">P</a></li>
                        <li role="presentation" class="disabled"><a href="#q-audience" aria-controls="q-audience" role="tab" data-toggle="pill">Q</a></li>
                        <li role="presentation"><a href="#r-audience" aria-controls="r-audience" role="tab" data-toggle="pill">R</a></li>
                        <li role="presentation"><a href="#s-audience" aria-controls="s-audience" role="tab" data-toggle="pill">S</a></li>
                        <li role="presentation"><a href="#t-audience" aria-controls="t-audience" role="tab" data-toggle="pill">T</a></li>
                        <li role="presentation" class="disabled"><a href="#u-audience" aria-controls="u-audience" role="tab" data-toggle="pill">U</a></li>
                        <li role="presentation"><a href="#v-audience" aria-controls="v-audience" role="tab" data-toggle="pill">V</a></li>
                        <li role="presentation"><a href="#w-audience" aria-controls="w-audience" role="tab" data-toggle="pill">W</a></li>
                        <li role="presentation" class="disabled"><a href="#x-audience" aria-controls="x-audience" role="tab" data-toggle="pill">X</a></li>
                        <li role="presentation" class="disabled"><a href="#y-audience" aria-controls="y-audience" role="tab" data-toggle="pill">Y</a></li>
                        <li role="presentation" class="disabled"><a href="#z-audience" aria-controls="z-audience" role="tab" data-toggle="pill">Z</a></li>
                        <li role="presentation" class="disabled"><a href="#num-audience" aria-controls="num-audience" role="tab" data-toggle="pill">#</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="top-audience">
                            <h4>Top Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Cardiovascular Technologist and Technician</a></li>
                                <li><a href="#">Dentist</a></li>
                                <li><a href="#">Genetic Counselor</a></li>
                                <li><a href="#">Librarian</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="a-audience">
                            <h4>'A' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Accountant and Auditor</a></li>
                                <li><a href="#">Acupuncturist</a></li>
                                <li><a href="#">Administrative Services Manager</a></li>
                                <li><a href="#">Advertising, Marketing, Promotions, Public Relations, and Sales Manager</a></li>
                                <li><a href="#">Allergists and Immunologist</a></li>
                                <li><a href="#">Ambulance Driver and Attendant, Except Emergency Medical Technician</a></li>
                                <li><a href="#">Anesthesiologist Assistant</a></li>
                                <li><a href="#">Architectural and Engineering Manager</a></li>
                                <li><a href="#">Architecture and Engineering Worker</a></li>
                                <li><a href="#">Athletic Trainer</a></li>
                                <li><a href="#">Audiologist</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="b-audience">
                            <h4>'B' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Billing and Posting Clerk</a></li>
                                <li><a href="#">Bioinformatics Scientist</a></li>
                                <li><a href="#">Bioinformatics Technician</a></li>
                                <li><a href="#">Biomedical Engineer</a></li>
                                <li><a href="#">Biostatistician</a></li>
                                <li><a href="#">Budget Analyst</a></li>
                                <li><a href="#">Building and Grounds Cleaning and Maintenance Worker</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="c-audience">
                            <h4>'C' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Cardiovascular Technologist and Technician</a></li>
                                <li><a href="#">Child, Family, and School Social Worker</a></li>
                                <li><a href="#">Childcare Worker</a></li>
                                <li><a href="#">Chiropractor</a></li>
                                <li><a href="#">Claims Adjusters, Appraisers, Examiners, and Investigator</a></li>
                                <li><a href="#">Clinical Data Manager</a></li>
                                <li><a href="#">Clinical Laboratory Technologists and Technician</a></li>
                                <li><a href="#">Clinical Nurse Specialist</a></li>
                                <li><a href="#">Clinical Research Coordinator</a></li>
                                <li><a href="#">Community and Social Service Specialist</a></li>
                                <li><a href="#">Community Health Worker</a></li>
                                <li><a href="#">Compensation and Benefits Manager</a></li>
                                <li><a href="#">Compensation, Benefits, and Job Analysis Specialist</a></li>
                                <li><a href="#">Compliance Officer</a></li>
                                <li><a href="#">Computer and Information Systems Manager</a></li>
                                <li><a href="#">Computer Worker</a></li>
                                <li><a href="#">Construction Trades Worker</a></li>
                                <li><a href="#">Counselor</a></li>
                                <li><a href="#">Cytogenetic Technologist</a></li>
                                <li><a href="#">Cytotechnologist</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="d-audience">
                            <h4>'D' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Dental Assistant</a></li>
                                <li><a href="#">Dental Hygienist</a></li>
                                <li><a href="#">Dental Laboratory Technician</a></li>
                                <li><a href="#">Dentist</a></li>
                                <li><a href="#">Designer</a></li>
                                <li><a href="#">Diagnostic Medical Sonographer</a></li>
                                <li><a href="#">Dietetic Technician</a></li>
                                <li><a href="#">Dietitian and Nutritionist</a></li>
                                <li><a href="#">Driver/Sales Worker and Truck Driver</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="e-audience">
                            <h4>'E' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Educational, Guidance, School, and Vocational Counselor</a></li>
                                <li><a href="#">Emergency Management Director</a></li>
                                <li><a href="#">Emergency Medical Technicians and Paramedic</a></li>
                                <li><a href="#">Endoscopy Technician</a></li>
                                <li><a href="#">Epidemiologist</a></li>
                                <li><a href="#">Exercise Physiologist</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="f-audience">
                            <h4>'F' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Financial Analyst and Advisor</a></li>
                                <li><a href="#">Financial Manager</a></li>
                                <li><a href="#">Financial Specialist</a></li>
                                <li><a href="#">Food Preparation and Serving Related Worker</a></li>
                                <li><a href="#">Food Service Manager</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="g-audience">
                            <h4>'G' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Genetic Counselor</a></li>
                                <li><a href="#">Geneticist</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="h-audience">
                            <h4>'H' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Health Educator</a></li>
                                <li><a href="#">Health Specialties Teacher, Postsecondary</a></li>
                                <li><a href="#">Healthcare Practitioner and Technical Worker</a></li>
                                <li><a href="#">Hearing Aid Specialist</a></li>
                                <li><a href="#">Histotechnologists and Histologic Technician</a></li>
                                <li><a href="#">Home Health Aide</a></li>
                                <li><a href="#">Hospitalist</a></li>
                                <li><a href="#">Human Resources Manager</a></li>
                                <li><a href="#">Human Resources Worker</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="i-audience">
                            <h4>'I' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Industrial Production Manager</a></li>
                                <li><a href="#">Information Technology Project Managers</a></li>
                                <li><a href="#">Installation, Maintenance, and Repair Worker</a></li>
                                <li><a href="#">Insurance Claims Clerk</a></li>
                                <li><a href="#">Insurance Policy Processing Clerk</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="l-audience">
                            <h4>'L' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Laundry and Dry-Cleaning Worker</a></li>
                                <li><a href="#">Librarian</a></li>
                                <li><a href="#">Library Technician</a></li>
                                <li><a href="#">Licensed Practical and Licensed Vocational Nurse - LPN*</a></li>
                                <li><a href="#">Life Scientist, All Other</a></li>
                                <li><a href="#">Logistician</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="m-audience">
                            <h4>'M' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Magnetic Resonance Imaging Technologist</a></li>
                                <li><a href="#">Management Analyst</a></li>
                                <li><a href="#">Manager</a></li>
                                <li><a href="#">Marriage and Family Therapist</a></li>
                                <li><a href="#">Massage Therapist</a></li>
                                <li><a href="#">Mathematical Science Worker</a></li>
                                <li><a href="#">Medical Appliance Technician</a></li>
                                <li><a href="#">Medical Assistant</a></li>
                                <li><a href="#">Medical Equipment Preparer</a></li>
                                <li><a href="#">Medical Records and Health Information Technician</a></li>
                                <li><a href="#">Medical Scientist</a></li>
                                <li><a href="#">Medical Secretary</a></li>
                                <li><a href="#">Medical Transcriptionist</a></li>
                                <li><a href="#">Mental Health and Substance Abuse Social Worker</a></li>
                                <li><a href="#">Mental Health Counselor*</a></li>
                                <li><a href="#">Midwife</a></li>
                                <li><a href="#">Miscellaneous Business Operations Specialist</a></li>
                                <li><a href="#">Miscellaneous Community and Social Service Specialist</a></li>
                                <li><a href="#">Miscellaneous Health Diagnosing and Treating Practitioner</a></li>
                                <li><a href="#">Miscellaneous Health Technologists and Technician</a></li>
                                <li><a href="#">Molecular and Cellular Biologist</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="n-audience">
                            <h4>'N' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Naturopathic Physician*</a></li>
                                <li><a href="#">Neurodiagnostic Technologist</a></li>
                                <li><a href="#">Neurologist</a></li>
                                <li><a href="#">Nuclear Medicine Technologist</a></li>
                                <li><a href="#">Nurse Anesthetist*</a></li>
                                <li><a href="#">Nurse Midwife*</a></li>
                                <li><a href="#">Nurse Practitioner*</a></li>
                                <li><a href="#">Nursing Assistant - CNA*</a></li>
                                <li><a href="#">Nursing Instructor and Teacher, Postsecondary*</a></li>
                                <li><a href="#">Nursing: Registered Nurse - RN*</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="o-audience">
                            <h4>'O' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Occupational Health and Safety Specialist</a></li>
                                <li><a href="#">Occupational Health and Safety Technician</a></li>
                                <li><a href="#">Occupational Therapist</a></li>
                                <li><a href="#">Occupational Therapy Aide</a></li>
                                <li><a href="#">Occupational Therapy Assistant</a></li>
                                <li><a href="#">Office and Administrative Support Worker</a></li>
                                <li><a href="#">Operations Specialties Manager</a></li>
                                <li><a href="#">Ophthalmic Laboratory Technician</a></li>
                                <li><a href="#">Ophthalmic Medical Technician</a></li>
                                <li><a href="#">Ophthalmic Medical Technologist</a></li>
                                <li><a href="#">Ophthalmologist*</a></li>
                                <li><a href="#">Optician, Dispensing</a></li>
                                <li><a href="#">Optometrist</a></li>
                                <li><a href="#">Oral and Maxillofacial Surgeon*</a></li>
                                <li><a href="#">Orderlie</a></li>
                                <li><a href="#">Orthodontist</a></li>
                                <li><a href="#">Orthoptist</a></li>
                                <li><a href="#">Orthotist and Prosthetist</a></li>
                                <li><a href="#">Other</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="p-audience">
                            <h4>'P' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Pathologist*</a></li>
                                <li><a href="#">Payroll and Timekeeping Clerks</a></li>
                                <li><a href="#">Personal Care Aide</a></li>
                                <li><a href="#">Personal Care and Service Worker, All Other</a></li>
                                <li><a href="#">Pharmacist*</a></li>
                                <li><a href="#">Pharmacy Aide</a></li>
                                <li><a href="#">Pharmacy Technician</a></li>
                                <li><a href="#">Phlebotomist</a></li>
                                <li><a href="#">Physician*</a></li>
                                <li><a href="#">Physical Scientist*</a></li>
                                <li><a href="#">Physical Therapist</a></li>
                                <li><a href="#">Physical Therapist Aide</a></li>
                                <li><a href="#">Physical Therapist Assistant</a></li>
                                <li><a href="#">Physician Assistant*</a></li>
                                <li><a href="#">Podiatrist</a></li>
                                <li><a href="#">Property, Real Estate, and Community Association Manager</a></li>
                                <li><a href="#">Prosthodontist</a></li>
                                <li><a href="#">Psychiatric Aide</a></li>
                                <li><a href="#">Psychiatric Technician</a></li>
                                <li><a href="#">Psychologist*</a></li>
                                <li><a href="#">Purchasing Manager*</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="r-audience">
                            <h4>'R' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Radiation Therapist</a></li>
                                <li><a href="#">Radiologic Technician</a></li>
                                <li><a href="#">Radiologic Technologist</a></li>
                                <li><a href="#">Radiologist</a></li>
                                <li><a href="#">Recreation and Fitness Worker</a></li>
                                <li><a href="#">Recreational Therapist</a></li>
                                <li><a href="#">Rehabilitation Counselor</a></li>
                                <li><a href="#">Religious Worker</a></li>
                                <li><a href="#">Residential Advisor</a></li>
                                <li><a href="#">Respiratory Therapist</a></li>
                                <li><a href="#">Respiratory Therapy Technician</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="s-audience">
                            <h4>'S' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Sales Representatives, Services</a></li>
                                <li><a href="#">Security Guard</a></li>
                                <li><a href="#">Social and Community Service Manager</a></li>
                                <li><a href="#">Social and Human Service Assistant</a></li>
                                <li><a href="#">Social Worker</a></li>
                                <li><a href="#">Speech-Language Pathologist</a></li>
                                <li><a href="#">Speech-Language Pathology Assistant</a></li>
                                <li><a href="#">Substance Abuse and Behavioral Disorder Counselor</a></li>
                                <li><a href="#">Surgical Assistant</a></li>
                                <li><a href="#">Surgical Technologist</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="t-audience">
                            <h4>'T' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Tax Preparer</a></li>
                                <li><a href="#">Top Executive</a></li>
                                <li><a href="#">Training and Development Manager</a></li>
                                <li><a href="#">Training and Development Specialist</a></li>
                                <li><a href="#">Transportation, Storage, and Distribution Manager</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="v-audience">
                            <h4>'V' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Veterinary Technologists and Technician</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="w-audience">
                            <h4>'W' Audiences/Professions</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Web designer or graphic designer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-setting" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Select a Setting</h4>
            </div>
            <div class="modal-body">
                <div class="modal-alpha-nav">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#top-setting" aria-controls="top-setting" role="tab" data-toggle="pill">Top Settings</a></li>
                        <li role="presentation"><a href="#a-setting" aria-controls="a-setting" role="tab" data-toggle="pill">A</a></li>
                        <li role="presentation"><a href="#b-setting" aria-controls="b-setting" role="tab" data-toggle="pill">B</a></li>
                        <li role="presentation"><a href="#c-setting" aria-controls="c-setting" role="tab" data-toggle="pill">C</a></li>
                        <li role="presentation"><a href="#d-setting" aria-controls="d-setting" role="tab" data-toggle="pill">D</a></li>
                        <li role="presentation" class="disabled"><a href="#e-setting" aria-controls="e-setting" role="tab" data-toggle="pill">E</a></li>
                        <li role="presentation"><a href="#f-setting" aria-controls="f-setting" role="tab" data-toggle="pill">F</a></li>
                        <li role="presentation" class="disabled"><a href="#g-setting" aria-controls="g-setting" role="tab" data-toggle="pill">G</a></li>
                        <li role="presentation"><a href="#h-setting" aria-controls="h-setting" role="tab" data-toggle="pill">H</a></li>
                        <li role="presentation" class="disabled"><a href="#i-setting" aria-controls="i-setting" role="tab" data-toggle="pill">i</a></li>
                        <li role="presentation" class="disabled"><a href="#j-setting" aria-controls="j-setting" role="tab" data-toggle="pill">J</a></li>
                        <li role="presentation" class="disabled"><a href="#k-setting" aria-controls="k-setting" role="tab" data-toggle="pill">K</a></li>
                        <li role="presentation"><a href="#l-setting" aria-controls="l-setting" role="tab" data-toggle="pill">L</a></li>
                        <li role="presentation" class="disabled"><a href="#m-setting" aria-controls="m-setting" role="tab" data-toggle="pill">M</a></li>
                        <li role="presentation" class="disabled"><a href="#n-setting" aria-controls="n-setting" role="tab" data-toggle="pill">N</a></li>
                        <li role="presentation" class="disabled"><a href="#o-setting" aria-controls="o-setting" role="tab" data-toggle="pill">O</a></li>
                        <li role="presentation" class="disabled"><a href="#p-setting" aria-controls="p-setting" role="tab" data-toggle="pill">P</a></li>
                        <li role="presentation" class="disabled"><a href="#q-setting" aria-controls="q-setting" role="tab" data-toggle="pill">Q</a></li>
                        <li role="presentation"><a href="#r-setting" aria-controls="r-setting" role="tab" data-toggle="pill">R</a></li>
                        <li role="presentation"><a href="#s-setting" aria-controls="s-setting" role="tab" data-toggle="pill">S</a></li>
                        <li role="presentation"><a href="#t-setting" aria-controls="t-setting" role="tab" data-toggle="pill">T</a></li>
                        <li role="presentation"><a href="#u-setting" aria-controls="u-setting" role="tab" data-toggle="pill">U</a></li>
                        <li role="presentation" class="disabled"><a href="#v-setting" aria-controls="v-setting" role="tab" data-toggle="pill">V</a></li>
                        <li role="presentation" class="disabled"><a href="#w-setting" aria-controls="w-setting" role="tab" data-toggle="pill">W</a></li>
                        <li role="presentation" class="disabled"><a href="#x-setting" aria-controls="x-setting" role="tab" data-toggle="pill">X</a></li>
                        <li role="presentation" class="disabled"><a href="#y-setting" aria-controls="y-setting" role="tab" data-toggle="pill">Y</a></li>
                        <li role="presentation" class="disabled"><a href="#z-setting" aria-controls="z-setting" role="tab" data-toggle="pill">Z</a></li>
                        <li role="presentation" class="disabled"><a href="#num-setting" aria-controls="num-setting" role="tab" data-toggle="pill">#</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="top-setting">
                            <h4>Top Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Dental Health</a></li>
                                <li><a href="#">Hospice</a></li>
                                <li><a href="#">Pediatric </a></li>
                                <li><a href="#">Skilled Nursing Facility</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="a-setting">
                            <h4>'A' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Academic setting</a></li>
                                <li><a href="#">Acute Care</a></li>
                                <li><a href="#">Ambulatory Care</a></li>
                                <li><a href="#">Assisted Living</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="b-setting">
                            <h4>'B' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Behavioral Health, Child</a></li>
                                <li><a href="#">Behavioral Health, Inpatient</a></li>
                                <li><a href="#">Behavioral Health, Outpatient</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="c-setting">
                            <h4>'C' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Community Health</a></li>
                                <li><a href="#">Correctional Facility</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="d-setting">
                            <h4>'D' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Dental Health</a></li>
                                <li><a href="#">Dialysis</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="f-setting">
                            <h4>'F' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Federal/VA Facility</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="h-setting">
                            <h4>'H' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Home Care (Concierge)</a></li>
                                <li><a href="#">Home Health</a></li>
                                <li><a href="#">Hospice</a></li>
                                <li><a href="#">Hospital</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="l-setting">
                            <h4>'L' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Laboratory</a></li>
                                <li><a href="#">Long Term Acute Care</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="o-setting">
                            <h4>'O' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Occupational Health</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="p-setting">
                            <h4>'P' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Pediatric</a></li>
                                <li><a href="#">Pharmacy</a></li>
                                <li><a href="#">Physician Group/Solo Practice</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="r-setting">
                            <h4>'R' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Rehabilitation Center, Behavioral (In-patient)</a></li>
                                <li><a href="#">Rehabilitation Center, Behavioral (Out-patient)</a></li>
                                <li><a href="#">Rehabilitation Center, Physical (In-patient)</a></li>
                                <li><a href="#">Rehabilitation Center, Physical (Out-Patient)</a></li>
                                <li><a href="#">Residential Treatment Facility</a></li>
                                <li><a href="#">Respite Care</a></li>
                                <li><a href="#">Retail</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="s-setting">
                            <h4>'S' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">School Health</a></li>
                                <li><a href="#">Skilled Nursing Facility</a></li>
                                <li><a href="#">Supplier</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="t-setting">
                            <h4>'T' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Telemedicine</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="u-setting">
                            <h4>'T' Settings</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Urgent Care</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-subject" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Select a Subject</h4>
            </div>
            <div class="modal-body">
                <div class="modal-alpha-nav">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#top-subject" aria-controls="top-subject" role="tab" data-toggle="pill">Top Subjects</a></li>
                        <li role="presentation"><a href="#a-subject" aria-controls="a-subject" role="tab" data-toggle="pill">A</a></li>
                        <li role="presentation"><a href="#b-subject" aria-controls="b-subject" role="tab" data-toggle="pill">B</a></li>
                        <li role="presentation"><a href="#c-subject" aria-controls="c-subject" role="tab" data-toggle="pill">C</a></li>
                        <li role="presentation"><a href="#d-subject" aria-controls="d-subject" role="tab" data-toggle="pill">D</a></li>
                        <li role="presentation"><a href="#e-subject" aria-controls="e-subject" role="tab" data-toggle="pill">E</a></li>
                        <li role="presentation"><a href="#f-subject" aria-controls="f-subject" role="tab" data-toggle="pill">F</a></li>
                        <li role="presentation" ><a href="#g-subject" aria-controls="g-subject" role="tab" data-toggle="pill">G</a></li>
                        <li role="presentation"><a href="#h-subject" aria-controls="h-subject" role="tab" data-toggle="pill">H</a></li>
                        <li role="presentation"><a href="#i-subject" aria-controls="i-subject" role="tab" data-toggle="pill">i</a></li>
                        <li role="presentation" class="disabled"><a href="#j-subject" aria-controls="j-subject" role="tab" data-toggle="pill">J</a></li>
                        <li role="presentation"><a href="#k-subject" aria-controls="k-subject" role="tab" data-toggle="pill">K</a></li>
                        <li role="presentation"><a href="#l-subject" aria-controls="l-subject" role="tab" data-toggle="pill">L</a></li>
                        <li role="presentation"><a href="#m-subject" aria-controls="m-subject" role="tab" data-toggle="pill">M</a></li>
                        <li role="presentation"><a href="#n-subject" aria-controls="n-subject" role="tab" data-toggle="pill">N</a></li>
                        <li role="presentation"><a href="#o-subject" aria-controls="o-subject" role="tab" data-toggle="pill">O</a></li>
                        <li role="presentation"><a href="#p-subject" aria-controls="p-subject" role="tab" data-toggle="pill">P</a></li>
                        <li role="presentation"><a href="#q-subject" aria-controls="q-subject" role="tab" data-toggle="pill">Q</a></li>
                        <li role="presentation"><a href="#r-subject" aria-controls="r-subject" role="tab" data-toggle="pill">R</a></li>
                        <li role="presentation"><a href="#s-subject" aria-controls="s-subject" role="tab" data-toggle="pill">S</a></li>
                        <li role="presentation"><a href="#t-subject" aria-controls="t-subject" role="tab" data-toggle="pill">T</a></li>
                        <li role="presentation" class="disabled"><a href="#u-subject" aria-controls="u-subject" role="tab" data-toggle="pill">U</a></li>
                        <li role="presentation" class="disabled"><a href="#v-subject" aria-controls="v-subject" role="tab" data-toggle="pill">V</a></li>
                        <li role="presentation"><a href="#w-subject" aria-controls="w-subject" role="tab" data-toggle="pill">W</a></li>
                        <li role="presentation" class="disabled"><a href="#x-subject" aria-controls="x-subject" role="tab" data-toggle="pill">X</a></li>
                        <li role="presentation" class="disabled"><a href="#y-subject" aria-controls="y-subject" role="tab" data-toggle="pill">Y</a></li>
                        <li role="presentation" class="disabled"><a href="#z-subject" aria-controls="z-subject" role="tab" data-toggle="pill">Z</a></li>
                        <li role="presentation" class="disabled"><a href="#num-subject" aria-controls="num-subject" role="tab" data-toggle="pill">#</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="top-subject">
                            <h4>Top Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#"> Accreditation</a></li>
                                <li><a href="#">Billing</a></li>
                                <li><a href="#">Coding</a></li>
                                <li><a href="#">Endocrine System</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="a-subject">
                            <h4>'A' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Access</a></li>
                                <li><a href="#">Accountability</a></li>
                                <li><a href="#">Accountable Care Organization</a></li>
                                <li><a href="#">Accounting and Finance</a></li>
                                <li><a href="#">Accreditation</a></li>
                                <li><a href="#">Administrative Support</a></li>
                                <li><a href="#">Airways and Respiratory Emergencies</a></li>
                                <li><a href="#">Anatomy and Physiology</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="b-subject">
                            <h4>'B' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Behavioral Health</a></li>
                                <li><a href="#">Billing</a></li>
                                <li><a href="#">Business Analysis</a></li>
                                <li><a href="#">Business Law</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="c-subject">
                            <h4>'C' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">CAHPS</a></li>
                                <li><a href="#">Calculations</a></li>
                                <li><a href="#">Care Coordination</a></li>
                                <li><a href="#">Circulatory System</a></li>
                                <li><a href="#">Clinical Coordination</a></li>
                                <li><a href="#">CMS Related</a></li>
                                <li><a href="#">Coding</a></li>
                                <li><a href="#">Collaboration</a></li>
                                <li><a href="#">Communication</a></li>
                                <li><a href="#">Consulting</a></li>
                                <li><a href="#">Corporate Compliance</a></li>
                                <li><a href="#">Cultural Awareness</a></li>
                                <li><a href="#">Cultural Competence</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Customer Service</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="d-subject">
                            <h4>'D' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Death and Dying</a></li>
                                <li><a href="#">Desktop Computer Skills</a></li>
                                <li><a href="#">Diagnostic Tests</a></li>
                                <li><a href="#">Digestive System</a></li>
                                <li><a href="#">Disaster Planning</a></li>
                                <li><a href="#">Discharge Planning</a></li>
                                <li><a href="#">Diseases and Conditions</a></li>
                                <li><a href="#">Documentation and Reporting</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="e-subject">
                            <h4>'E' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Education and Learning</a></li>
                                <li><a href="#">Efficiency</a></li>
                                <li><a href="#">Elimination Management</a></li>
                                <li><a href="#">Emergency Services</a></li>
                                <li><a href="#">Empathy</a></li>
                                <li><a href="#">Employee Engagement</a></li>
                                <li><a href="#">Endocrine System</a></li>
                                <li><a href="#">Engagement</a></li>
                                <li><a href="#">ENT and Ophthalmic</a></li>
                                <li><a href="#">Environment</a></li>
                                <li><a href="#">EPIC</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="f-subject">
                            <h4>'F' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Family Input</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="g-subject">
                            <h4>'G' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Government</a></li>
                                <li><a href="#">Government Relations</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="h-subject">
                            <h4>'H' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Health and Clinical Basics</a></li>
                                <li><a href="#">Health Facilities Management</a></li>
                                <li><a href="#">Health Services Administration</a></li>
                                <li><a href="#">Healthcare and Governance</a></li>
                                <li><a href="#">Healthcare Delivery</a></li>
                                <li><a href="#">Hematology</a></li>
                                <li><a href="#">Hospital Environment</a></li>
                                <li><a href="#">Human Resources</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="i-subject">
                            <h4>'I' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">ICD-10</a></li>
                                <li><a href="#">Immobility Management</a></li>
                                <li><a href="#">Immune System</a></li>
                                <li><a href="#">Improvement</a></li>
                                <li><a href="#">Industry</a></li>
                                <li><a href="#">Infection Control</a></li>
                                <li><a href="#">Information Systems</a></li>
                                <li><a href="#">Information Technology and Systems</a></li>
                                <li><a href="#">Insurance</a></li>
                                <li><a href="#">Integumentary System</a></li>
                                <li><a href="#">International Business</a></li>
                                <li><a href="#">Intravenous Therapy and Vascular Access</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="k-subject">
                            <h4>'K' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Knowledge Management</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="l-subject">
                            <h4>'L' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Laboratory Techniques and Procedures</a></li>
                                <li><a href="#">Law and Ethics</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Legal Compliance</a></li>
                                <li><a href="#">Life Support</a></li>
                                <li><a href="#">Lymphatic System</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="m-subject">
                            <h4>'M' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Magnet Related</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Medical Equipment</a></li>
                                <li><a href="#">Medical Informatics</a></li>
                                <li><a href="#">mmm</a></li>
                                <li><a href="#">Medication Communication</a></li>
                                <li><a href="#">Medication Preparation</a></li>
                                <li><a href="#">Mobility, Transfer and Ambulation</a></li>
                                <li><a href="#">Musculoskeletal System</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="n-subject">
                            <h4>'N' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Nervous System</a></li>
                                <li><a href="#">Nurse Communication</a></li>
                                <li><a href="#">Nursing Care</a></li>
                                <li><a href="#">Nutrition</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="o-subject">
                            <h4>'O' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Occupational Health and Safety</a></li>
                                <li><a href="#">Operations</a></li>
                                <li><a href="#">Organization and Administration</a></li>
                                <li><a href="#">Outcomes</a></li>
                                <li><a href="#">Oxygen and Ventilation</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="p-subject">
                            <h4>'P' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Pain Management</a></li>
                                <li><a href="#">Patient Advocacy</a></li>
                                <li><a href="#">Patient Assessment</a></li>
                                <li><a href="#">Patient Care</a></li>
                                <li><a href="#">Patient Care Management</a></li>
                                <li><a href="#">Patient Education</a></li>
                                <li><a href="#">Patient Expectations</a></li>
                                <li><a href="#">Patient Interactions</a></li>
                                <li><a href="#">Patient Needs</a></li>
                                <li><a href="#">Patient Perceptions</a></li>
                                <li><a href="#">Patient Rights</a></li>
                                <li><a href="#">Patient Safety</a></li>
                                <li><a href="#">Patient Self Care</a></li>
                                <li><a href="#">Performance Management</a></li>
                                <li><a href="#">Personal Development</a></li>
                                <li><a href="#">Pharmacology</a></li>
                                <li><a href="#">Population Health Management</a></li>
                                <li><a href="#">Practice Environment</a></li>
                                <li><a href="#">Project Management</a></li>
                                <li><a href="#">Protocols</a></li>
                                <li><a href="#">Provider Communication</a></li>
                                <li><a href="#">Psychosocial</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="q-subject">
                            <h4>'Q' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Quality Care</a></li>
                                <li><a href="#">Quality Improvement</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="r-subject">
                            <h4>'R' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Reimbursement Models</a></li>
                                <li><a href="#">Reproductive System</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Respiratory System</a></li>
                                <li><a href="#">Risk Management</a></li>
                                <li><a href="#">Rounding</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="s-subject">
                            <h4>'S' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Safety and Protection</a></li>
                                <li><a href="#">Surgical Procedures</a></li>
                                <li><a href="#">Surveys</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="t-subject">
                            <h4>'T' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Team Building</a></li>
                                <li><a href="#">Telehealth</a></li>
                                <li><a href="#">The Joint Commission</a></li>
                                <li><a href="#">Therapeutics</a></li>
                                <li><a href="#">Training</a></li>
                                <li><a href="#">Transition of Care</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="v-subject">
                            <h4>'V' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Vital Signs and Hemodynamics</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="w-subject">
                            <h4>'W' Subjects</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Wait Times</a></li>
                                <li><a href="#">Women's Health</a></li>
                                <li><a href="#">Workflow Efficiency</a></li>
                                <li><a href="#">Workplace Violence</a></li>
                                <li><a href="#">Wound Care</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<!-- Modal -->
<div id="modal-publisher" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Select a Publisher</h4>
            </div>
            <div class="modal-body">
                <div class="modal-alpha-nav">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#top-publisher" aria-controls="top-publisher" role="tab" data-toggle="pill">Top Pubishers</a></li>
                        <li role="presentation" class="disabled"><a href="#a-publisher" aria-controls="a-publisher" role="tab" data-toggle="pill">A</a></li>
                        <li role="presentation" class="disabled"><a href="#b-publisher" aria-controls="b-publisher" role="tab" data-toggle="pill">B</a></li>
                        <li role="presentation"><a href="#c-publisher" aria-controls="c-publisher" role="tab" data-toggle="pill">C</a></li>
                        <li role="presentation" class="disabled"><a href="#d-publisher" aria-controls="d-publisher" role="tab" data-toggle="pill">D</a></li>
                        <li role="presentation" class="disabled"><a href="#e-publisher" aria-controls="e-publisher" role="tab" data-toggle="pill">E</a></li>
                        <li role="presentation" class="disabled"><a href="#f-publisher" aria-controls="f-publisher" role="tab" data-toggle="pill">F</a></li>
                        <li role="presentation" class="disabled"><a href="#g-publisher" aria-controls="g-publisher" role="tab" data-toggle="pill">G</a></li>
                        <li role="presentation" class="disabled"><a href="#h-publisher" aria-controls="h-publisher" role="tab" data-toggle="pill">H</a></li>
                        <li role="presentation" class="disabled"><a href="#i-publisher" aria-controls="i-publisher" role="tab" data-toggle="pill">i</a></li>
                        <li role="presentation" class="disabled"><a href="#j-publisher" aria-controls="j-publisher" role="tab" data-toggle="pill">J</a></li>
                        <li role="presentation" class="disabled"><a href="#k-publisher" aria-controls="k-publisher" role="tab" data-toggle="pill">K</a></li>
                        <li role="presentation" class="disabled"><a href="#l-publisher" aria-controls="l-publisher" role="tab" data-toggle="pill">L</a></li>
                        <li role="presentation" class="disabled"><a href="#m-publisher" aria-controls="m-publisher" role="tab" data-toggle="pill">M</a></li>
                        <li role="presentation" class="disabled"><a href="#n-publisher" aria-controls="n-publisher" role="tab" data-toggle="pill">N</a></li>
                        <li role="presentation" class="disabled"><a href="#o-publisher" aria-controls="o-publisher" role="tab" data-toggle="pill">O</a></li>
                        <li role="presentation" class="disabled"><a href="#p-publisher" aria-controls="p-publisher" role="tab" data-toggle="pill">P</a></li>
                        <li role="presentation" class="disabled"><a href="#q-publisher" aria-controls="q-publisher" role="tab" data-toggle="pill">Q</a></li>
                        <li role="presentation" class="disabled"><a href="#r-publisher" aria-controls="r-publisher" role="tab" data-toggle="pill">R</a></li>
                        <li role="presentation" class="disabled"><a href="#s-publisher" aria-controls="s-publisher" role="tab" data-toggle="pill">S</a></li>
                        <li role="presentation" class="disabled"><a href="#t-publisher" aria-controls="t-publisher" role="tab" data-toggle="pill">T</a></li>
                        <li role="presentation" class="disabled"><a href="#u-publisher" aria-controls="u-publisher" role="tab" data-toggle="pill">U</a></li>
                        <li role="presentation" class="disabled"><a href="#v-publisher" aria-controls="v-publisher" role="tab" data-toggle="pill">V</a></li>
                        <li role="presentation" class="disabled"><a href="#w-publisher" aria-controls="w-publisher" role="tab" data-toggle="pill">W</a></li>
                        <li role="presentation" class="disabled"><a href="#x-publisher" aria-controls="x-publisher" role="tab" data-toggle="pill">X</a></li>
                        <li role="presentation" class="disabled"><a href="#y-publisher" aria-controls="y-publisher" role="tab" data-toggle="pill">Y</a></li>
                        <li role="presentation" class="disabled"><a href="#z-publisher" aria-controls="z-publisher" role="tab" data-toggle="pill">Z</a></li>
                        <li role="presentation" class="disabled"><a href="#num-publisher" aria-controls="num-publisher" role="tab" data-toggle="pill">#</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="top-publisher">
                            <h4>Top Publishers</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Content Partner 1</a></li>
                                <li><a href="#">Content Partner 4</a></li>
                                <li><a href="#">Content Partner 10</a></li>
                                <li><a href="#">Content Partner 12</a></li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="c-publisher">
                            <h4>'C' Publishers</h4>
                            <ul class="list-unstyled category-list">
                                <li><a href="#">Content Partner 1</a></li>
                                <li><a href="#">Content Partner 2</a></li>
                                <li><a href="#">Content Partner 3</a></li>
                                <li><a href="#">Content Partner 4</a></li>
                                <li><a href="#">Content Partner 5</a></li>
                                <li><a href="#">Content Partner 6</a></li>
                                <li><a href="#">Content Partner 7</a></li>
                                <li><a href="#">Content Partner 8</a></li>
                                <li><a href="#">Content Partner 9</a></li>
                                <li><a href="#">Content Partner 10</a></li>
                                <li><a href="#">Content Partner 11</a></li>
                                <li><a href="#">Content Partner 12</a></li>
                                <li><a href="#">Content Partner 13</a></li>
                                <li><a href="#">Content Partner 14</a></li>
                                <li><a href="#">Content Partner 15</a></li>
                                <li><a href="#">Content Partner 16</a></li>
                                <li><a href="#">Content Partner 17</a></li>
                                <li><a href="#">Content Partner 18</a></li>
                                <li><a href="#">Content Partner 19</a></li>
                                <li><a href="#">Content Partner 20</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('.js-select2').select2();

        $(document)
            .on('click', '.search-filter-toggle', function(){
                $(this).closest('.search-filter').toggleClass('search-filter-closed');
                $(window).resize();
            })
            .on('change', '.js-select-daterange', function(){
                if ( $(this).val() === 'custom' ) {
                    $('.js-select-daterange-custom').show().find('input:eq(0)').focus();
                } else {
                    $('.js-select-daterange-custom').hide();
                }
            });

        $('#modal-filter').on('show.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $(this).find('.modal-body').html($('.search-filters').html());
            $('.js-select2').select2();
            $('.search-filters').empty();
        });
        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.js-select2').each(function(){
                $(this).select2("destroy");
            });
            $('.search-filters').append($('#modal-filter .modal-body').html());
            $('.js-select2').select2();
            $('#modal-filter .modal-body').empty();

        });
        $('.slat .btn').click(function(e){
            e.preventDefault();
        });
        $('a[data-toggle="pill"]').on('click', function(){
          if ($(this).parent('li').hasClass('disabled')) {
            return false;
          };
        });
    });
</script>
<?= createSiteEnd(); ?>