<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HealthStream: Register for Account</title>
    <link rel="stylesheet" type="text/css" href="/nrp-assets/content/styles/healthstream.bootstrap.css?cache=1480457232">
    <link rel="stylesheet" type="text/css" href="/nrp-assets/content/styles/healthstream.goals.stepper.css?cache=1480457232"  />
    <link rel="stylesheet" type="text/css" href="/nrp-assets/content/fonts/font-awesome.min.css?cache=1480457232"/>
    <link rel="stylesheet" type="text/css" href="/nrp-assets/content/styles/style.css?cache=1480457232">
</head>

<body>
    <img src="/nrp-assets/content/images/login-bg.jpg" class="bg">
    <div class="login-window modal">
        <div class="modal-header">
            <div class="branding">
                <img src="/nrp-assets/content/images/nrplogo.png">
            </div>
        </div>
        <div class="modal-body">
                <div id="tab-register" class="tab-pane selected">
                    <h2 >Do You Have a HealthStreamID?</h2>
                    <p >First let's see if you have a HealthStreamID we can use to get you set up faster</p>

                        <!-- <form action="?" method="GET" novalidate="novalidate" class="form"> -->
                            <ul class="stepper  pl0" >
                                <li class="step  active">
                                    <div class="step-title waves-dark">Email Look-up</div>
                                    <div class="step-content " style="display: block;">
                                    <div class="row">
                                        <div class="form-group col-lg-8">
                                            <label class="control-label">Your personal email
                                                <small><div>This will be your User ID and HealthStreamID</div></small></label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Personal Email Address">
                                        </div>
                                    </div>
										<div class="alert alert-info alert-nudge ">
                            <div class="nudge-container">
                                <div class="title"><i class="fa fa-info-circle"></i>
                                    You dont' have a HealthStream ID, so let's create your account!
                                </div>
                                

                            </div>
                        </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class="control-label">Set a password</label>
                                            <input type="password" id="password" name="password" class="form-control" required placeholder="Password">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class="control-label">Confirm your password</label>
                                            <input type="password" id="password_confirm" name="password_confirm" class="form-control" placeholder="Confirm Password">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-8">
                                            <label class="control-label">Password Reminder
                                                <small><div>A short phrase to help you remember your password.</div></small></label>
                                            <input type="password" class="form-control" placeholder="Password Reminder">

                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="step-actions">
                                                <div class="step-actions-left">
                                                </div>
                                                <div class="step-actions-right">
                                                    <button class="waves-effect waves-dark button-primary button  next-step">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>
                                <li class="step  ">
                                    <div class="step-title waves-dark">Basic Information</div>
                                    <div class="step-content " >
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label class="control-label">Select a Role</label>
                                                <table class="table table-condensed  ">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                           <div class="radio c-radio mt0 mb0">
                                                               <label>
                                                                   <input type="radio" name="a" value="option2" checked="" >
                                                                   <span class="fa fa-circle"></span>
                                                                   I'm a Student
                                                               </label>
                                                           </div>
                                                      </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            <div class="radio c-radio mt0 mb0">
                                                                <label>
                                                                    <input type="radio" name="a" value="option2" checked="">
                                                                    <span class="fa fa-circle"></span>
                                                                    I am an Instructor
                                                                </label>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="radio c-radio mt0 mb0">
                                                                    <label>
                                                                        <input type="radio" name="a" value="option2" checked="">
                                                                        <span class="fa fa-circle"></span>
                                                                         I am training to be an Instrutor
                                                                    </label>
                                                                </div>
                                                             </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="control-label">First Name</label>
                                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6 ">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label class="control-label">Alternate Email Address <small class="small-txt" ><a href="#" id="whatthis" data-toggle="tooltip" title="Words TBD">Why do we need this?</a></small></label>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <input type="text" id="altemail" name="altemail" class="form-control " placeholder="Alternate Email Address">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label class="control-label">Department</label>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <select class="form-control">
                                                            <option>Select a Department</option>
                                                            <option value="fea98359-e87f-e011-80a1-001517135401">1-EMTs</option>
                                                            <option value="c517ab65-e87f-e011-80a1-001517135401">2-Nurses</option>
                                                            <option value="0765a36b-e87f-e011-80a1-001517135401">3-Physicians</option>
                                                            <option value="3b62cb71-e87f-e011-80a1-001517135401">4-Respiratory Therapists</option>
                                                            <option value="9d46dcc9-3385-df11-93f1-00188b39eb5c">5-Other</option>
                                                            <option value="b4e45059-d9d9-11de-b520-0015171c5bb3">6-Unknown</option>
                                                            <option value="f9566824-9d51-e111-9dc1-001517135351">7-Gurgaon</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="form-group col-lg-6">
                                                <label class="control-label">Time Zone</label>
                                                <select class="form-control">
                                                    <option>Eastern Time
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="control-label">Preferred Language</label>
                                                <select class="form-control">
                                                    <option>English
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="step-actions">
                                                <div class="step-actions-left">
                                                </div>
                                                <div class="step-actions-right">
                                                    <button class="waves-effect waves-dark button button-default  previous-step">Back</button>
                                                    <button class="waves-effect waves-dark button-primary button  next-step">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="step  ">
                                    <div class="step-title waves-dark waves-effect">Add a License</div>
                                    <div class="step-content">
                                        <div class="alert alert-info">
                                            <strong>Optional.</strong> Adding a license will allow for you to obtain CE Credits.
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label class="control-label">Discipline</label>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <select class="form-control">
                                                            <option>Select a Discipline</option>
                                                            <option value="1" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Accountants and Auditors</option>
                                                            <option value="2" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Acupuncturists</option>
                                                            <option value="3" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Advanced Practice Registered Nurses</option>
                                                            <option value="165" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Advanced Registered Nurse Practitioner Temporary</option>
                                                            <option value="150" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">AEMT</option>
                                                            <option value="143" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="3" data-birthdate-supported="False">Anesthesia Technologists and Technicians</option>
                                                            <option value="151" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Anesthesiologist Assistant</option>
                                                            <option value="4" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Anesthetists, Certified Registered Nurse</option>
                                                            <option value="192" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Architect</option>
                                                            <option value="5" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Athletic Trainers</option>
                                                            <option value="7" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Audiologist Assistant</option>
                                                            <option value="6" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Audiologists</option>
                                                            <option value="186" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Backflow Prevention Assembly</option>
                                                            <option value="8" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Biological Scientists</option>
                                                            <option value="137" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="3" data-birthdate-supported="False">Biomedical Engineering Technologist</option>
                                                            <option value="9" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Cancer Registrars</option>
                                                            <option value="10" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Cardiovascular Technologists and Technicians</option>
                                                            <option value="134" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Case Manager</option>
                                                            <option value="135" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified First Assistant</option>
                                                            <option value="140" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Health Unit Coordinator</option>
                                                            <option value="136" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Hemodialysis Technologist/Technician</option>
                                                            <option value="162" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Master Social Worker</option>
                                                            <option value="182" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Nursing Assistant - Dialysis Technician</option>
                                                            <option value="147" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Payroll Professional</option>
                                                            <option value="127" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Podiatric X-Ray Assistant</option>
                                                            <option value="168" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Prevention Specialist Assistant</option>
                                                            <option value="169" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Prevention Specialist I</option>
                                                            <option value="170" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Prevention Specialist II</option>
                                                            <option value="124" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Certified Surgical Technologist</option>
                                                            <option value="132" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Chaplain</option>
                                                            <option value="171" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Chemical Dependency Counselor Assistant</option>
                                                            <option value="11" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Chiropractors</option>
                                                            <option value="152" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Clinical Documentation Improvement</option>
                                                            <option value="14" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Clinical Laboratory - Managers</option>
                                                            <option value="15" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Clinical Laboratory - Supervisors</option>
                                                            <option value="12" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Clinical Laboratory Personnel Technician</option>
                                                            <option value="13" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Clinical Laboratory Personnel Technologist</option>
                                                            <option value="141" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Clinical Nurse Specialist</option>
                                                            <option value="16" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Coders, Health Information</option>
                                                            <option value="185" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Commercial Pilots</option>
                                                            <option value="17" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Computer and Information Systems Managers</option>
                                                            <option value="18" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Counselors</option>
                                                            <option value="191" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Dental Assistants</option>
                                                            <option value="19" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Dental Hygienists</option>
                                                            <option value="164" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Dental Laboratory Technicians</option>
                                                            <option value="20" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Dentists</option>
                                                            <option value="21" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Diagnostic Medical Sonographers</option>
                                                            <option value="22" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Dietitians and Nutritionists</option>
                                                            <option value="146" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Dosimetrists</option>
                                                            <option value="24" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Education Administrators</option>
                                                            <option value="25" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Educational Services</option>
                                                            <option value="179" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Electricians</option>
                                                            <option value="26" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Electrologists</option>
                                                            <option value="1001" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">Emergency Medical Technician - Basic</option>
                                                            <option value="1004" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">Emergency Medical Technician - First Responder</option>
                                                            <option value="1002" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">Emergency Medical Technician - Intermediate</option>
                                                            <option value="1003" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">Emergency Medical Technician - Paramedic</option>
                                                            <option value="27" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">Emergency Medical Technicians and Paramedics</option>
                                                            <option value="28" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Emergency Physicians</option>
                                                            <option value="148" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">EMR</option>
                                                            <option value="149" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">EMT</option>
                                                            <option value="29" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Endodontists</option>
                                                            <option value="30" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Engineers</option>
                                                            <option value="31" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Family and General Practitioners</option>
                                                            <option value="32" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Financial Managers</option>
                                                            <option value="33" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Gastroenterologists</option>
                                                            <option value="130" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">General Internists</option>
                                                            <option value="184" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Geriatric Nursing Assistant&nbsp;</option>
                                                            <option value="163" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Health Access Dentist</option>
                                                            <option value="35" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Health Educators</option>
                                                            <option value="36" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Health Services</option>
                                                            <option value="37" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Health Services Managers</option>
                                                            <option value="175" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Health Technologists and Technicians, All Other</option>
                                                            <option value="139" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="3" data-birthdate-supported="False">Healthcare Compliance Officer</option>
                                                            <option value="138" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="3" data-birthdate-supported="False">Healthcare Risk Manager</option>
                                                            <option value="129" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Healthcare Support Workers</option>
                                                            <option value="34" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Hearing Aid Specialist</option>
                                                            <option value="155" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Home Health Aides</option>
                                                            <option value="38" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Homeopaths</option>
                                                            <option value="39" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Hypnotherapists</option>
                                                            <option value="40" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Industrial Hygienists</option>
                                                            <option value="153" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">International Board Certified Lactation Consultant</option>
                                                            <option value="41" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Lawyers</option>
                                                            <option value="42" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Librarians</option>
                                                            <option value="181" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Baccalaureate Social Worker</option>
                                                            <option value="172" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Chemical Dependency Counselor III</option>
                                                            <option value="180" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Graduate Social Worker</option>
                                                            <option value="173" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Independent Chemical Dependency Councelor</option>
                                                            <option value="174" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Independent Chemical Dependency Councelor Clinical Supervisor</option>
                                                            <option value="45" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Marriage and Family Therapist</option>
                                                            <option value="188" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Master Social Worker</option>
                                                            <option value="187" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Master Social Worker-Advanced Practitioner</option>
                                                            <option value="46" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Mental Health Counselor</option>
                                                            <option value="43" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Practical Nurses</option>
                                                            <option value="44" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Licensed Vocational Nurses</option>
                                                            <option value="47" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Marriage and Family Therapists</option>
                                                            <option value="48" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Massage Therapists</option>
                                                            <option value="49" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Medical and Health Services Managers</option>
                                                            <option value="131" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Medical Appliance Technicians</option>
                                                            <option value="50" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Medical Assistants</option>
                                                            <option value="157" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Medical Doctor Medical Faculty Certificate</option>
                                                            <option value="51" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Medical Records and Health Information Technicians</option>
                                                            <option value="52" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Medical Scientists</option>
                                                            <option value="53" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Medical Transcriptionists</option>
                                                            <option value="54" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Midwives, Certified Nurse</option>
                                                            <option value="55" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Naturopaths</option>
                                                            <option value="145" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Non-Practicing Physician</option>
                                                            <option value="56" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Nuclear Medicine Technologists</option>
                                                            <option value="57" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Nurse Practitioners</option>
                                                            <option value="58" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Nursing Assistants</option>
                                                            <option value="59" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Nursing Home Administrator</option>
                                                            <option value="23" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Nutrition Counselor</option>
                                                            <option value="60" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Obstetricians and Gynecologists</option>
                                                            <option value="61" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Occupational Health and Safety Specialists and Technicians</option>
                                                            <option value="62" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Occupational Therapists</option>
                                                            <option value="63" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Occupational Therapy Assistants and Aides</option>
                                                            <option value="64" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Ophthalmic Laboratory Technicians</option>
                                                            <option value="65" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Ophthalmologists</option>
                                                            <option value="66" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Opticians, Dispensing</option>
                                                            <option value="67" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Optometrists</option>
                                                            <option value="68" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Optometrists, Certified</option>
                                                            <option value="72" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Orthotic Fitter</option>
                                                            <option value="71" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Orthotic Fitter Assistant</option>
                                                            <option value="70" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Orthotist</option>
                                                            <option value="69" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Orthotist and Prosthetist (Dual)</option>
                                                            <option value="75" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="1" data-birthdate-supported="False">Paramedic</option>
                                                            <option value="76" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Pathologists</option>
                                                            <option value="189" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Peace Officer – Basic</option>
                                                            <option value="77" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Pediatricians</option>
                                                            <option value="128" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Pedorthist</option>
                                                            <option value="142" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="3" data-birthdate-supported="False">Perfusionist</option>
                                                            <option value="78" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Periodontists</option>
                                                            <option value="144" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="3" data-birthdate-supported="False">Perioperative Blood Management Technologist</option>
                                                            <option value="80" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="2" data-birthdate-supported="True">Pharmacist, Nuclear</option>
                                                            <option value="79" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="2" data-birthdate-supported="True">Pharmacists</option>
                                                            <option value="81" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="2" data-birthdate-supported="True">Pharmacists, Consultant</option>
                                                            <option value="82" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="2" data-birthdate-supported="True">Pharmacy Technicians</option>
                                                            <option value="83" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physical Therapists</option>
                                                            <option value="84" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physical Therapy Assistants</option>
                                                            <option value="85" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physician Assistants</option>
                                                            <option value="86" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physician Assistants - Certified Chiropractic</option>
                                                            <option value="156" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physician Assistants Temporary</option>
                                                            <option value="87" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicians</option>
                                                            <option value="90" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicians - Area Clinical Need</option>
                                                            <option value="91" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicians - Limited License</option>
                                                            <option value="92" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicians - Osteopathic</option>
                                                            <option value="88" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicians - Public Health Certificate</option>
                                                            <option value="89" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicians - Public Psychiatry Certificate</option>
                                                            <option value="94" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicists - Diagnostic Radiological</option>
                                                            <option value="93" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicists - Medical</option>
                                                            <option value="95" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicists - Medical Nuclear Radiological</option>
                                                            <option value="96" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicists - Medical Physicist-in-Training</option>
                                                            <option value="97" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physicists - Therapeutic Radiological</option>
                                                            <option value="98" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Physiologists</option>
                                                            <option value="190" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Plumbers</option>
                                                            <option value="99" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Podiatrists</option>
                                                            <option value="100" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Podiatrists - Limited</option>
                                                            <option value="1005" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="3" data-birthdate-supported="False">Prehospital Registered Nurse</option>
                                                            <option value="133" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Project Manager</option>
                                                            <option value="73" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Prosthetist</option>
                                                            <option value="167" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Provisional Audiologist</option>
                                                            <option value="166" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Provisional Speech Language Patholigist</option>
                                                            <option value="101" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Psychiatric Technicians</option>
                                                            <option value="102" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Psychiatrists</option>
                                                            <option value="105" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Psychologist - Limited License</option>
                                                            <option value="104" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Psychologist - School</option>
                                                            <option value="103" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Psychologists</option>
                                                            <option value="159" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Public Health Director</option>
                                                            <option value="160" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Public Health Supervisor</option>
                                                            <option value="161" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Public Health Technologist</option>
                                                            <option value="106" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Public Relations Specialists</option>
                                                            <option value="107" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Radiologic Technologists and Technicians</option>
                                                            <option value="108" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Radiologists</option>
                                                            <option value="109" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Recreational Therapists</option>
                                                            <option value="110" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Registered Nurses</option>
                                                            <option value="111" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Registered Nurses - Advanced Registered Nurse Practitioner</option>
                                                            <option value="154" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Registered Polysomnographic Technologist</option>
                                                            <option value="183" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Respiratory Therapist - Registered Respiratory Therapist</option>
                                                            <option value="112" data-npi-supported="True" data-expiration_date_label="AARC Membership Expiration Date" data-discipline_group="4" data-birthdate-supported="False">Respiratory Therapists</option>
                                                            <option value="113" data-npi-supported="True" data-expiration_date_label="AARC Membership Expiration Date" data-discipline_group="4" data-birthdate-supported="False">Respiratory Therapists - Certified Respiratory Care Therapist</option>
                                                            <option value="114" data-npi-supported="True" data-expiration_date_label="AARC Membership Expiration Date" data-discipline_group="4" data-birthdate-supported="False">Respiratory Therapists - Critical Care Practitioner</option>
                                                            <option value="115" data-npi-supported="True" data-expiration_date_label="AARC Membership Expiration Date" data-discipline_group="4" data-birthdate-supported="False">Respiratory Therapists - Non-Critical Care Practitioner</option>
                                                            <option value="116" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Science and Medical Writers</option>
                                                            <option value="176" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Security Guards</option>
                                                            <option value="117" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Service Occupations</option>
                                                            <option value="118" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Social and Human Services Assistants</option>
                                                            <option value="119" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Social Workers</option>
                                                            <option value="121" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Speech-language Pathologist Assistant</option>
                                                            <option value="120" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Speech-language Pathologists</option>
                                                            <option value="178" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Stationary Engineers and Boiler Operators</option>
                                                            <option value="122" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Statisticians</option>
                                                            <option value="123" data-npi-supported="True" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Surgeons</option>
                                                            <option value="177" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Therapists, All Other</option>
                                                            <option value="125" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Veterinarians</option>
                                                            <option value="158" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Visiting Faculty Certificate</option>
                                                            <option value="126" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Writers and Editors</option>
                                                            <option value="74" data-npi-supported="False" data-expiration_date_label="National Expiration Date" data-discipline_group="0" data-birthdate-supported="False">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label class="control-label">Country</label>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <select class="form-control" data-val="true" data-val-number="The field CountryId must be a number." data-val-required="Required" name="CountryId">
                                                            <option value="">Select a Country</option>
                                                            <option value="83">Afghanistan</option>
                                                            <option value="91">Aland Island</option>
                                                            <option value="85">Albania</option>
                                                            <option value="122">Algeria</option>
                                                            <option value="89">American Samoa</option>
                                                            <option value="82">Andorra</option>
                                                            <option value="87">Angola</option>
                                                            <option value="84">Anguilla</option>
                                                            <option value="88">Antarctica</option>
                                                            <option value="251">Antigua and Barbuda</option>
                                                            <option value="6">Argentina</option>
                                                            <option value="86">Armenia</option>
                                                            <option value="90">Aruba</option>
                                                            <option value="5">Australia</option>
                                                            <option value="7">Austria</option>
                                                            <option value="92">Azerbaijan</option>
                                                            <option value="103">Bahamas</option>
                                                            <option value="252">Bahrain</option>
                                                            <option value="94">Bangladesh</option>
                                                            <option value="8">Barbados</option>
                                                            <option value="107">Belarus</option>
                                                            <option value="9">Belgium</option>
                                                            <option value="108">Belize</option>
                                                            <option value="98">Benin</option>
                                                            <option value="77">Bermuda</option>
                                                            <option value="104">Bhutan</option>
                                                            <option value="253">Bolivia</option>
                                                            <option value="102">Bonaire, Sint Eustatius And Saba</option>
                                                            <option value="93">Bosnia And Herzegovina</option>
                                                            <option value="106">Botswana</option>
                                                            <option value="105">Bouvet Island</option>
                                                            <option value="10">Brazil</option>
                                                            <option value="150">British Indian Ocean Territory</option>
                                                            <option value="100">Brunei Darussalam</option>
                                                            <option value="96">Bulgaria</option>
                                                            <option value="95">Burkina Faso</option>
                                                            <option value="97">Burundi</option>
                                                            <option value="156">Cambodia</option>
                                                            <option value="115">Cameroon</option>
                                                            <option value="2">Canada</option>
                                                            <option value="117">Cape Verde</option>
                                                            <option value="161">Cayman Islands</option>
                                                            <option value="111">Central African Republic</option>
                                                            <option value="225">Chad</option>
                                                            <option value="11">Chile</option>
                                                            <option value="12">China</option>
                                                            <option value="119">Christmas Island</option>
                                                            <option value="109">Cocos (Keeling) Islands</option>
                                                            <option value="13">Colombia</option>
                                                            <option value="158">Comoros</option>
                                                            <option value="112">Congo</option>
                                                            <option value="110">Congo, The Democratic Republic Of The</option>
                                                            <option value="114">Cook Islands</option>
                                                            <option value="76">Costa Rica</option>
                                                            <option value="113">Cote D'Ivoire</option>
                                                            <option value="14">Croatia</option>
                                                            <option value="116">Cuba</option>
                                                            <option value="118">Curacao</option>
                                                            <option value="15">Cyprus</option>
                                                            <option value="16">Czech Republic</option>
                                                            <option value="17">Denmark</option>
                                                            <option value="120">Djibouti</option>
                                                            <option value="121">Dominica</option>
                                                            <option value="78">Dominican Republic</option>
                                                            <option value="18">Ecuador</option>
                                                            <option value="19">Egypt</option>
                                                            <option value="220">El Salvador</option>
                                                            <option value="140">Equatorial Guinea</option>
                                                            <option value="124">Eritrea</option>
                                                            <option value="20">Estonia</option>
                                                            <option value="125">Ethiopia</option>
                                                            <option value="127">Falkland Islands (Malvinas)</option>
                                                            <option value="21">Faroe Islands</option>
                                                            <option value="126">Fiji</option>
                                                            <option value="22">Finland</option>
                                                            <option value="23">France</option>
                                                            <option value="132">French Guiana</option>
                                                            <option value="197">French Polynesia</option>
                                                            <option value="226">French Southern Territories</option>
                                                            <option value="129">Gabon</option>
                                                            <option value="137">Gambia</option>
                                                            <option value="131">Georgia</option>
                                                            <option value="24">Germany</option>
                                                            <option value="134">Ghana</option>
                                                            <option value="135">Gibraltar</option>
                                                            <option value="25">Greece</option>
                                                            <option value="136">Greenland</option>
                                                            <option value="130">Grenada</option>
                                                            <option value="139">Guadeloupe</option>
                                                            <option value="143">Guam</option>
                                                            <option value="142">Guatemala</option>
                                                            <option value="133">Guernsey</option>
                                                            <option value="138">Guinea</option>
                                                            <option value="144">Guinea-Bissau</option>
                                                            <option value="145">Guyana</option>
                                                            <option value="147">Haiti</option>
                                                            <option value="146">Heard Island And Mcdonald Islands</option>
                                                            <option value="239">Holy See (Vatican City State)</option>
                                                            <option value="75">Honduras</option>
                                                            <option value="26">Hong Kong</option>
                                                            <option value="27">Hungary</option>
                                                            <option value="28">Iceland</option>
                                                            <option value="29">India</option>
                                                            <option value="148">Indonesia</option>
                                                            <option value="152">Iran, Islamic Republic Of</option>
                                                            <option value="151">Iraq</option>
                                                            <option value="30">Ireland</option>
                                                            <option value="149">Isle Of Man</option>
                                                            <option value="31">Israel</option>
                                                            <option value="32">Italy</option>
                                                            <option value="33">Jamaica</option>
                                                            <option value="34">Japan</option>
                                                            <option value="153">Jersey</option>
                                                            <option value="35">Jordan</option>
                                                            <option value="36">Kazakhstan</option>
                                                            <option value="154">Kenya</option>
                                                            <option value="157">Kiribati</option>
                                                            <option value="159">Korea, Democratic People's Republic Of</option>
                                                            <option value="37">Korea, Republic of</option>
                                                            <option value="160">Kuwait</option>
                                                            <option value="155">Kyrgyzstan</option>
                                                            <option value="162">Lao People's Democratic Republic</option>
                                                            <option value="38">Latvia</option>
                                                            <option value="39">Lebanon</option>
                                                            <option value="167">Lesotho</option>
                                                            <option value="166">Liberia</option>
                                                            <option value="40">Libyan Arab Jamahiriya</option>
                                                            <option value="164">Liechtenstein</option>
                                                            <option value="41">Lithuania</option>
                                                            <option value="168">Luxembourg</option>
                                                            <option value="178">Macao</option>
                                                            <option value="175">Macedonia, The Former Yugoslav Republic Of</option>
                                                            <option value="173">Madagascar</option>
                                                            <option value="42">Malawi</option>
                                                            <option value="43">Malaysia</option>
                                                            <option value="185">Maldives</option>
                                                            <option value="176">Mali</option>
                                                            <option value="183">Malta</option>
                                                            <option value="174">Marshall Islands</option>
                                                            <option value="180">Martinique</option>
                                                            <option value="181">Mauritania</option>
                                                            <option value="184">Mauritius</option>
                                                            <option value="248">Mayotte</option>
                                                            <option value="3">Mexico</option>
                                                            <option value="128">Micronesia, Federated States Of</option>
                                                            <option value="170">Moldova, Republic Of</option>
                                                            <option value="169">Monaco</option>
                                                            <option value="44">Mongolia</option>
                                                            <option value="182">Montserrat</option>
                                                            <option value="45">Morocco</option>
                                                            <option value="186">Mozambique</option>
                                                            <option value="177">Myanmar</option>
                                                            <option value="187">Namibia</option>
                                                            <option value="195">Nauru</option>
                                                            <option value="194">Nepal</option>
                                                            <option value="188">New Caledonia</option>
                                                            <option value="46">New Zealand</option>
                                                            <option value="192">Nicaragua</option>
                                                            <option value="189">Niger</option>
                                                            <option value="191">Nigeria</option>
                                                            <option value="196">Niue</option>
                                                            <option value="190">Norfolk Island</option>
                                                            <option value="179">Northern Mariana Islands</option>
                                                            <option value="47">Norway</option>
                                                            <option value="48">Oman</option>
                                                            <option value="200">Pakistan</option>
                                                            <option value="204">Palau</option>
                                                            <option value="203">Palestinian Territory, Occupied</option>
                                                            <option value="49">Panama</option>
                                                            <option value="198">Papua New Guinea</option>
                                                            <option value="205">Paraguay</option>
                                                            <option value="50">Peru</option>
                                                            <option value="199">Philippines</option>
                                                            <option value="202">Pitcairn</option>
                                                            <option value="51">Poland</option>
                                                            <option value="52">Portugal</option>
                                                            <option value="53">Puerto Rico</option>
                                                            <option value="54">Qatar</option>
                                                            <option value="206">Reunion</option>
                                                            <option value="55">Romania</option>
                                                            <option value="56">Russian Federation</option>
                                                            <option value="207">Rwanda</option>
                                                            <option value="99">Saint Barthelemy</option>
                                                            <option value="211">Saint Helena</option>
                                                            <option value="80">Saint Kitts And Nevis</option>
                                                            <option value="163">Saint Lucia</option>
                                                            <option value="172">Saint Martin (French Part)</option>
                                                            <option value="201">Saint Pierre And Miquelon</option>
                                                            <option value="240">Saint Vincent And The Grenadines</option>
                                                            <option value="247">Samoa</option>
                                                            <option value="214">San Marino</option>
                                                            <option value="219">Sao Tome And Principe</option>
                                                            <option value="57">Saudi Arabia</option>
                                                            <option value="215">Senegal</option>
                                                            <option value="58">Serbia</option>
                                                            <option value="209">Seychelles</option>
                                                            <option value="213">Sierra Leone</option>
                                                            <option value="59">Singapore</option>
                                                            <option value="221">Sint Maarten (Dutch Part)</option>
                                                            <option value="60">Slovakia</option>
                                                            <option value="61">Slovenia</option>
                                                            <option value="208">Solomon Islands</option>
                                                            <option value="216">Somalia</option>
                                                            <option value="62">South Africa</option>
                                                            <option value="141">South Georgia And The South Sandwich Islands</option>
                                                            <option value="218">South Sudan</option>
                                                            <option value="63">Spain</option>
                                                            <option value="165">Sri Lanka</option>
                                                            <option value="210">Sudan</option>
                                                            <option value="217">Suriname</option>
                                                            <option value="212">Svalbard And Jan Mayen</option>
                                                            <option value="223">Swaziland</option>
                                                            <option value="65">Sweden</option>
                                                            <option value="66">Switzerland</option>
                                                            <option value="222">Syrian Arab Republic</option>
                                                            <option value="67">Taiwan</option>
                                                            <option value="228">Tajikistan</option>
                                                            <option value="234">Tanzania, United Republic Of</option>
                                                            <option value="68">Thailand</option>
                                                            <option value="69">The Netherlands</option>
                                                            <option value="230">Timor-Leste</option>
                                                            <option value="227">Togo</option>
                                                            <option value="229">Tokelau</option>
                                                            <option value="232">Tonga</option>
                                                            <option value="70">Trinidad and Tobago</option>
                                                            <option value="231">Tunisia</option>
                                                            <option value="71">Turkemenistan</option>
                                                            <option value="72">Turkey</option>
                                                            <option value="224">Turks And Caicos Islands</option>
                                                            <option value="233">Tuvalu</option>
                                                            <option value="235">Uganda</option>
                                                            <option value="81">Ukraine</option>
                                                            <option value="73">United Arab Emirates</option>
                                                            <option value="4">United Kingdom</option>
                                                            <option selected="selected" value="1">United States</option>
                                                            <option value="236">United States Minor Outlying Islands</option>
                                                            <option value="237">Uruguay</option>
                                                            <option value="238">Uzbekistan</option>
                                                            <option value="245">Vanuatu</option>
                                                            <option value="241">Venezuela</option>
                                                            <option value="244">Viet Nam</option>
                                                            <option value="242">Virgin Islands, British</option>
                                                            <option value="243">Virgin Islands, U.S.</option>
                                                            <option value="246">Wallis And Futuna</option>
                                                            <option value="123">Western Sahara</option>
                                                            <option value="74">Yemen</option>
                                                            <option value="249">Zambia</option>
                                                            <option value="250">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label class="control-label">State/Province of Licensure</label>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <select class="form-control" data-val="true" data-val-number="The field StateId must be a number." data-val-required="Required" id="StateId" name="StateId">
                                                            <option value="">Select a State/Province</option>
                                                            <option value="2">Alabama</option>
                                                            <option value="1">Alaska</option>
                                                            <option value="2909">American Samoa</option>
                                                            <option value="4">Arizona</option>
                                                            <option value="3">Arkansas</option>
                                                            <option value="52">Armed Forces America</option>
                                                            <option value="53">Armed Forces Europe</option>
                                                            <option value="54">Armed Forces Pacific</option>
                                                            <option value="5">California</option>
                                                            <option value="6">Colorado</option>
                                                            <option value="7">Connecticut</option>
                                                            <option value="9">Delaware</option>
                                                            <option value="8">District Of Columbia</option>
                                                            <option value="10">Florida</option>
                                                            <option value="11">Georgia</option>
                                                            <option value="2908">Guam</option>
                                                            <option value="12">Hawaii</option>
                                                            <option value="14">Idaho</option>
                                                            <option value="15">Illinois</option>
                                                            <option value="16">Indiana</option>
                                                            <option value="13">Iowa</option>
                                                            <option value="17">Kansas</option>
                                                            <option value="18">Kentucky</option>
                                                            <option value="19">Louisiana</option>
                                                            <option value="22">Maine</option>
                                                            <option value="21">Maryland</option>
                                                            <option value="20">Massachusetts</option>
                                                            <option value="23">Michigan</option>
                                                            <option value="50">Minnesota</option>
                                                            <option value="51">Mississippi</option>
                                                            <option value="24">Missouri</option>
                                                            <option value="25">Montana</option>
                                                            <option value="28">Nebraska</option>
                                                            <option value="32">Nevada</option>
                                                            <option value="29">New Hampshire</option>
                                                            <option value="30">New Jersey</option>
                                                            <option value="31">New Mexico</option>
                                                            <option value="33">New York</option>
                                                            <option value="26">North Carolina</option>
                                                            <option value="27">North Dakota</option>
                                                            <option value="2910">Northern Mariana Islands</option>
                                                            <option value="34">Ohio</option>
                                                            <option value="35">Oklahoma</option>
                                                            <option value="36">Oregon</option>
                                                            <option value="37">Pennsylvania</option>
                                                            <option value="234">Puerto Rico</option>
                                                            <option value="38">Rhode Island</option>
                                                            <option value="39">South Carolina</option>
                                                            <option value="40">South Dakota</option>
                                                            <option value="41">Tennessee</option>
                                                            <option value="42">Texas</option>
                                                            <option value="2911">United States Minor Outlying Islands</option>
                                                            <option value="43">Utah</option>
                                                            <option value="44">Vermont</option>
                                                            <option value="2907">Virgin Islands</option>
                                                            <option value="45">Virginia</option>
                                                            <option value="46">Washington</option>
                                                            <option value="48">West Virginia</option>
                                                            <option value="47">Wisconsin</option>
                                                            <option value="49">Wyoming</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        State License Number&nbsp;<small>Optional</small>
                                                    </label>
                                                    <input class="form-control" name="LicenseNumber" type="text" value="">
                                                    <span class="help-block"><span class="field-validation-valid" data-valmsg-for="LicenseNumber" data-valmsg-replace="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Expiration Date&nbsp;<small>Optional</small>
                                                    </label>
                                                    <div class="input-group date" style="position: relative;">
                                                        <input class="form-control" data-val="true" data-val-date="Must be a valid date" name="ExpirationDateTime" type="text" value="">
                                                        <span class="input-group-btn">
                                                       <button class="btn btn-default" type="button" ><i class="fa-calendar fa"></i></button>
                                                   </span>
                                                    </div>
                                                    <span class="help-block"><span class="field-validation-valid" data-valmsg-for="ExpirationDateTime" data-valmsg-replace="true"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <div class="step-actions-left">
                                            </div>
                                            <div class="step-actions-right">
                                                <button class="waves-effect waves-dark button button-default  previous-step">Back</button>
                                                <button class="waves-effect waves-dark button button-primary  next-step">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="step  ">
                                    <div class="step-title waves-dark waves-effect">Complete your Registration</div>
                                    <div class="step-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                This will be your own personal HealthStream account. Your NRP information will be accessible whenever you access HealthStream at other healthcare organizations with this account. <a href="#" data-toggle="tooltip" title="Words TBD">Tell me more...</a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div style="left:20px;">
                                                    <input type="checkbox" class="cb" id="terms" name="terms" value=""> Yes, I have read the <a href="#">Terms of Use</a>.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <div class="step-actions-left">
                                            </div>
                                            <div class="step-actions-right">
                                                <button class="waves-effect waves-dark button button-default previous-step">Back</button>
                                                <a href="/nrp-self-registration-email.php" class="waves-effect waves-dark button button-primary">Create NRP Account</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <!-- </form> -->
                </div>
        </div>
        <div class="modal-footer">
            Copyright &copy;
            <?php echo date("Y"); ?> HealthStream, Inc. All Rights Reserved.
        </div>
    </div>
    <script src="/nrp-assets/scripts/jquery-1.12.4.js"></script>
    <script src="/nrp-assets/scripts/jquery.easing.js"></script>
    <script src="/nrp-assets/scripts/utilities.js"></script>
    <script src="/nrp-assets/scripts/jquery.validate.js"></script>
    <script src="/nrp-assets/scripts/bootstrap.js"></script>
    <script src="/nrp-assets/scripts/materialize-stepper.js"></script>
    <!--Start Prototype Only-->
    <script src="/nrp-assets/scripts/jquery-mockjax.js"></script>
    <!--End Prototype Only-->
    <script src="/nrp-assets/scripts/nrp-register.js"></script>

</body>

</html>