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

$creditList = array(
    'CE',
    'CME',
    'CNE',
);

$specialtyList = array(
    'Adolescent Health',
    'Adult Behavioral Health ',
    'Allergy and Immunology',
    'Ambulatory Care',
    'Anesthesiology',
    'Cardiology',
    'Colon & Rectal Surgery',
    'Community Health',
    'Critical Care ',
    'Dermatology',
    'Ear, Nose and Throat',
    'Emergency',
    'Endocrinology',
    'Family Behavioral Health',
    'Forensic Behavioral Health',
    'Gastorentorology',
    'General Surgery',
    'Gerontology',
    'Health Promotion and Wellness',
    'Hematology',
    'Holistic',
    'Home Health',
    'Hospice and Palliative Care',
    'Hospitalist',
    'Infection',
    'Maternal-Newborn',
    'Medical Genetics',
    'Neonatal',
    'Nephrology',
    'Neurology',
    'Neurosurgery',
    'Nuclear Medicine',
    'Obstetrics and Gynecology',
    'Occupational Health',
    'Oncology',
    'Ophthalmology',
    'Oral Health',
    'Orthopedic Surgery',
    'Orthopedics',
    'Pain',
    'Pathology',
    'Pediatrics',
    'Perioperative',
    'Plastics',
    'Preventative Care',
    'Primary Care',
    'Public Health',
    'Pulmonology',
    'Radiology',
    'Rehabilitation',
    'Rheumatology',
    'School Health',
    'Sports Medicine',
    'Thoracic Surgery',
    'Toxicology',
    'Urology',
    'Vascular Surgery',
    'Wound Care',
);

$settingList = array(
    'Academic setting',
    'Acute Care',
    'Ambulatory Care',
    'Assisted Living',
    'Behavioral Health, Child',
    'Behavioral Health, Inpatient',
    'Behavioral Health, Outpatient',
    'Community Health',
    'Correctional Facility',
    'Dental Health',
    'Dialysis',
    'Federal/VA Facility',
    'Home Care (Concierge)',
    'Home Health',
    'Hospice',
    'Hospital',
    'Laboratory',
    'Long Term Acute Care',
    'Occupational Health',
    'Pediatric',
    'Pharmacy',
    'Physician Group/Solo Practice',
    'Rehabilitation Center, Behavioral (In-patient)',
    'Rehabilitation Center, Behavioral (Out-patient)',
    'Rehabilitation Center, Physical (In-patient)',
    'Rehabilitation Center, Physical (Out-Patient)',
    'Residential Treatment Facility',
    'Respite Care',
    'Retail',
    'School Health',
    'Skilled Nursing Facility',
    'Supplier',
    'Telemedicine',
    'Urgent Care',
);

$subjectList = array (
    'Accreditation',
    'Billing',
    'Coding',
    'Endocrine System',
    'Access',
    'Accountability',
    'Accountable Care Organization',
    'Accounting and Finance',
    'Accreditation',
    'Administrative Support',
    'Airways and Respiratory Emergencies',
    'Anatomy and Physiology',
    'Behavioral Health',
    'Billing',
    'Business Analysis',
    'Business Law',
    'CAHPS',
    'Calculations',
    'Care Coordination',
    'Circulatory System',
    'Clinical Coordination',
    'CMS Related',
    'Coding',
    'Collaboration',
    'Communication',
    'Consulting',
    'Corporate Compliance',
    'Cultural Awareness',
    'Cultural Competence',
    'Culture',
    'Customer Service',
    'Death and Dying',
    'Desktop Computer Skills',
    'Diagnostic Tests',
    'Digestive System',
    'Disaster Planning',
    'Discharge Planning',
    'Diseases and Conditions',
    'Documentation and Reporting',
    'Education and Learning',
    'Efficiency',
    'Elimination Management',
    'Emergency Services',
    'Empathy',
    'Employee Engagement',
    'Endocrine System',
    'Engagement',
    'ENT and Ophthalmic',
    'EPIC',
    'Family Input',
    'Government',
    'Government Relations',
    'Health and Clinical Basics',
    'Health Facilities Management',
    'Health Services Administration',
    'Healthcare and Governance',
    'Healthcare Delivery',
    'Hematology',
    'Hospital Environment',
    'Human Resources',
    'ICD-10',
    'Immobility Management',
    'Immune System',
    'Improvement',
    'Industry',
    'Infection Control',
    'Information Systems',
    'Information Technology and Systems',
    'Insurance',
    'Integumentary System',
    'International Business',
    'Intravenous Therapy and Vascular Access',
    'Knowledge Management',
    'Laboratory Techniques and Procedures',
    'Law and Ethics',
    'Leadership',
    'Legal Compliance',
    'Life Support',
    'Lymphatic System',
    'Magnet Related',
    'Management',
    'Marketing',
    'Medical Equipment',
    'Medical Informatics',
    'Medication Communication',
    'Medication Preparation',
    'Mobility, Transfer and Ambulation',
    'Musculoskeletal System',
    'Nervous System',
    'Nurse Communication',
    'Nursing Care',
    'Nutrition',
    'Occupational Health and Safety',
    'Operations',
    'Organization and Administration',
    'Outcomes',
    'Oxygen and Ventilation',
    'Pain Management',
    'Patient Advocacy',
    'Patient Assessment',
    'Patient Care',
    'Patient Care Management',
    'Patient Education',
    'Patient Expectations',
    'Patient Interactions',
    'Patient Needs',
    'Patient Perceptions',
    'Patient Rights',
    'Patient Safety',
    'Patient Self Care',
    'Performance Management',
    'Personal Development',
    'Pharmacology',
    'Population Health Management',
    'Practice Environment',
    'Project Management',
    'Protocols',
    'Provider Communication',
    'Psychosocial',
    'Quality Care',
    'Quality Improvement',
    'Reimbursement Models',
    'Reproductive System',
    'Research',
    'Respiratory System',
    'Risk Management',
    'Rounding',
    'Safety and Protection',
    'Surgical Procedures',
    'Surveys',
    'Team Building',
    'Telehealth',
    'The Joint Commission',
    'Therapeutics',
    'Training',
    'Transition of Care',
    'Vital Signs and Hemodynamics',
    'Wait Times',
    'Women\'s Health',
    'Workflow Efficiency',
    'Workplace Violence',
    'Wound Care',
);

$audienceList = array (
    'Accountant and Auditor',
    'Acupuncturist',
    'Administrative Services Manager',
    'Advertising, Marketing, Promotions, Public Relations, and Sales Manager',
    'Allergists and Immunologist',
    'Ambulance Driver and Attendant, Except Emergency Medical Technician',
    'Anesthesiologist Assistant',
    'Architectural and Engineering Manager',
    'Architecture and Engineering Worker',
    'Athletic Trainer',
    'Audiologist',
    'Billing and Posting Clerk',
    'Bioinformatics Scientist',
    'Bioinformatics Technician',
    'Biomedical Engineer',
    'Biostatistician',
    'Budget Analyst',
    'Building and Grounds Cleaning and Maintenance Worker',
    'Cardiovascular Technologist and Technician',
    'Child, Family, and School Social Worker',
    'Childcare Worker',
    'Chiropractor',
    'Claims Adjusters, Appraisers, Examiners, and Investigator',
    'Clinical Data Manager',
    'Clinical Laboratory Technologists and Technician',
    'Clinical Nurse Specialist',
    'Clinical Research Coordinator',
    'Community and Social Service Specialist',
    'Community Health Worker',
    'Compensation and Benefits Manager',
    'Compensation, Benefits, and Job Analysis Specialist',
    'Compliance Officer',
    'Computer and Information Systems Manager',
    'Computer Worker',
    'Construction Trades Worker',
    'Counselor',
    'Cytogenetic Technologist',
    'Cytotechnologist',
    'Dental Assistant',
    'Dental Hygienist',
    'Dental Laboratory Technician',
    'Dentist',
    'Designer',
    'Diagnostic Medical Sonographer',
    'Dietetic Technician',
    'Dietitian and Nutritionist',
    'Driver/Sales Worker and Truck Driver',
    'Educational, Guidance, School, and Vocational Counselor',
    'Emergency Management Director',
    'Emergency Medical Technicians and Paramedic',
    'Endoscopy Technician',
    'Epidemiologist',
    'Exercise Physiologist',
    'Financial Analyst and Advisor',
    'Financial Manager',
    'Financial Specialist',
    'Food Preparation and Serving Related Worker',
    'Food Service Manager',
    'Genetic Counselor',
    'Geneticist',
    'Health Educator',
    'Health Specialties Teacher, Postsecondary',
    'Healthcare Practitioner and Technical Worker',
    'Hearing Aid Specialist',
    'Histotechnologists and Histologic Technician',
    'Home Health Aide',
    'Hospitalist',
    'Human Resources Manager',
    'Human Resources Worker',
    'Industrial Production Manager',
    'Information Technology Project Managers',
    'Installation, Maintenance, and Repair Worker',
    'Insurance Claims Clerk',
    'Insurance Policy Processing Clerk',
    'Laundry and Dry-Cleaning Worker',
    'Librarian',
    'Library Technician',
    'Licensed Practical and Licensed Vocational Nurse - LPN*',
    'Life Scientist, All Other',
    'Logistician',
    'Magnetic Resonance Imaging Technologist',
    'Management Analyst',
    'Manager',
    'Marriage and Family Therapist',
    'Massage Therapist',
    'Mathematical Science Worker',
    'Medical Appliance Technician',
    'Medical Assistant',
    'Medical Equipment Preparer',
    'Medical Records and Health Information Technician',
    'Medical Scientist',
    'Medical Secretary',
    'Medical Transcriptionist',
    'Mental Health and Substance Abuse Social Worker',
    'Mental Health Counselor*',
    'Midwife',
    'Miscellaneous Business Operations Specialist',
    'Miscellaneous Community and Social Service Specialist',
    'Miscellaneous Health Diagnosing and Treating Practitioner',
    'Miscellaneous Health Technologists and Technician',
    'Molecular and Cellular Biologist',
    'Naturopathic Physician*',
    'Neurodiagnostic Technologist',
    'Neurologist',
    'Nuclear Medicine Technologist',
    'Nurse Anesthetist*',
    'Nurse Midwife*',
    'Nurse Practitioner*',
    'Nursing Assistant - CNA*',
    'Nursing Instructor and Teacher, Postsecondary*',
    'Nursing: Registered Nurse - RN*',
    'Occupational Health and Safety Specialist',
    'Occupational Health and Safety Technician',
    'Occupational Therapist',
    'Occupational Therapy Aide',
    'Occupational Therapy Assistant',
    'Office and Administrative Support Worker',
    'Operations Specialties Manager',
    'Ophthalmic Laboratory Technician',
    'Ophthalmic Medical Technician',
    'Ophthalmic Medical Technologist',
    'Ophthalmologist*',
    'Optician, Dispensing',
    'Optometrist',
    'Oral and Maxillofacial Surgeon*',
    'Orderlie',
    'Orthodontist',
    'Orthoptist',
    'Orthotist and Prosthetist',
    'Other',
    'Pathologist*',
    'Payroll and Timekeeping Clerks',
    'Personal Care Aide',
    'Personal Care and Service Worker, All Other',
    'Pharmacist*',
    'Pharmacy Aide',
    'Pharmacy Technician',
    'Phlebotomist',
    'Physician*',
    'Physical Scientist*',
    'Physical Therapist',
    'Physical Therapist Aide',
    'Physical Therapist Assistant',
    'Physician Assistant*',
    'Podiatrist',
    'Property, Real Estate, and Community Association Manager',
    'Prosthodontist',
    'Psychiatric Aide',
    'Psychiatric Technician',
    'Psychologist*',
    'Purchasing Manager*',
    'Radiation Therapist',
    'Radiologic Technician',
    'Radiologic Technologist',
    'Radiologist',
    'Recreation and Fitness Worker',
    'Recreational Therapist',
    'Rehabilitation Counselor',
    'Religious Worker',
    'Residential Advisor',
    'Respiratory Therapist',
    'Respiratory Therapy Technician',
    'Sales Representatives, Services',
    'Security Guard',
    'Social and Community Service Manager',
    'Social and Human Service Assistant',
    'Social Worker',
    'Speech-Language Pathologist',
    'Speech-Language Pathology Assistant',
    'Substance Abuse and Behavioral Disorder Counselor',
    'Surgical Assistant',
    'Surgical Technologist',
    'Tax Preparer',
    'Top Executive',
    'Training and Development Manager',
    'Training and Development Specialist',
    'Transportation, Storage, and Distribution Manager',
    'Veterinary Technologists and Technician',
    'Web designer or graphic designer',
);

$publisherList = array (
    'Content Partner 1',
    'Content Partner 2',
    'Content Partner 3',
    'Content Partner 4',
    'Content Partner 5',
    'Content Partner 6',
    'Content Partner 7',
    'Content Partner 8',
    'Content Partner 9',
    'Content Partner 10',
    'Content Partner 11',
    'Content Partner 12',
    'Content Partner 13',
    'Content Partner 14',
    'Content Partner 15',
    'Content Partner 16',
    'Content Partner 17',
    'Content Partner 18',
    'Content Partner 19',
    'Content Partner 20',
);

$modalityList = array (
    'E-Learning',
    'SIM',
    'Video',
    'PDF',
);

$badgeList = array (
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
    '(14)',
    '(6)',
    '(2)',
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
    '(14)',
    '(6)',
    '(2)',
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
    '(14)',
    '(6)',
    '(2)',
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
    '(14)',
    '(6)',
    '(2)',
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
    '(14)',
    '(6)',
    '(2)',
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
    '(14)',
    '(6)',
    '(2)',
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
    '(14)',
    '(6)',
    '(2)',
    '(5)',
    '(7)',
    '(5)',
    '(4)',
    '(2)',
    '(7)',
    '(12)',
    '(8)',
    '(24)',
    '(1)',
    '(7)',
    '(9)',
    '(4)',
    '(3)',
    '(5)',
    '(7)',
    '(9)',
    '(3)',
    '(2)',
    '(9)',
    '(10)',
    '(14)',
    '(6)',
    '(2)',
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
    <div class="container search-polly search-polly2">
        <section class="section section-main section-box">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <section class="section section-filters" data-equalize="layout-columns">
                        <h2>Filters</h2>
                        <div class="search-filters">
                            <?= makeFilter($appliedFiltersDesktop); ?>
                            <?= makeFilter($search); ?>
                            <?= makeFilter($sortMobile); ?>
                            <section class="section section-refinement-group no-border">
                                <nav class="catalog-categories">
                                    <h3>Audience/Profession</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="220">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<179;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $audienceList[$i] ?><span class="badge"><?= $badgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="section section-refinement-group">
                                <nav class="catalog-categories">
                                    <h3>CE Credit</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="200">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<3;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $creditList[$i] ?><span class="badge"><?= $badgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="section section-refinement-group">
                                <nav class="catalog-categories">
                                    <h3>Specialty</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="200">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<58;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $specialtyList[$i] ?><span class="badge"><?= $badgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="section section-refinement-group">
                                <nav class="catalog-categories">
                                    <h3>Setting</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="200">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<34;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $settingList[$i] ?><span class="badge"><?= $badgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="section section-refinement-group">
                                <nav class="catalog-categories">
                                    <h3>Subject</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="200">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<141;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $subjectList[$i] ?><span class="badge"><?= $badgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="section section-refinement-group">
                                <nav class="catalog-categories">
                                    <h3>Publisher</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="200">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<20;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $publisherList[$i] ?><span class="badge"><?= $badgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="section section-refinement-group">
                                <nav class="catalog-categories">
                                    <h3>Modality</h3>
                                    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="200">
                                        <ul class="category-wrapper">
                                            <?php for($i=0;$i<4;$i++) { ?>
                                            <li>
                                                <a href="#">
                                                    <div class="cc-col"><?= $modalityList[$i] ?><span class="badge"><?= $badgeList[$i] ?> </span></div>
                                                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

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
<div id="modal-filter" class="search-polly search-polly2 search-polly-modal-filter modal fade" tabindex="-1">
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





<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){

        $(document)
            .on('click', '.search-filter-toggle', function(){
                $(this).closest('.search-filter').toggleClass('search-filter-closed');
                $(window).resize();
            })
            .on('click', '.limit-height-link', function(){
                $(this).parent().find('ul.category-wrapper').toggleClass('fix-height');
            })
            .on('change', '.js-select-daterange', function(){
                if ( $(this).val() === 'custom' ) {
                    $('.js-select-daterange-custom').show().find('input:eq(0)').focus();
                } else {
                    $('.js-select-daterange-custom').hide();
                }
            });




        $('#modal-filter').on('show.bs.modal', function() {
            $(this).find('.modal-body').html($('.search-filters').html());
            $('.search-filters').empty();
        });
        $('#modal-filter').on('hidden.bs.modal', function() {
            $('.search-filters').append($('#modal-filter .modal-body').html());
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

        //$('#modal-filter').on('click', '.limit-height-link', function(){
          //  $(this).parent().find('div.limit-height').removeAttr('style');
        //})
    });
</script>


<?= createSiteEnd(); ?>