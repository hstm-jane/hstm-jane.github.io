<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action']))?$_GET['action']:false;

$patterns['start']['title'] = 'My Portfolio';

?>
<?= createSiteStart($patterns['start']); ?>
<style>
    body {
        background: #fff;
    }
    header .image-container{
        float:right;
        width: 128px;
        text-align:center;
        border: 1px dotted #999;
        position: relative;
        top: -10px;
    }
    header .image-container img{
        max-width:100%;
        margin: auto;
    }
    .resume {
        max-width: 980px;
    }
    .resume .resume-header {
        padding: 20px 0;
        text-align: center;
    }
    .resume .resume-header h1 {
        margin-top: 4px;
    }
    .resume .resume-footer {
        font-size: 11px;
        color: #999;
        text-align: center;
        border-top: 1px solid #ddd;
        padding: 30px 0;
    }
    .resume article {
        margin-bottom: 40px;
    }
    .resume .resume-section {
        margin-bottom: 20px;
    }
    .resume article h4 {
        text-transform: uppercase;
        color: #999 !important;
        padding-bottom: 5px;
        border-bottom: 1px dotted #999;
        letter-spacing: 1px;
    }
    .resume .date-range {
        color: #999 !important;
        text-transform: uppercase;
        text-align: right;
    }
    .resume .company-location-setting {
        color: #999 !important;
    }
    .resume .resume-logo {
        width: 120px;
        margin-bottom: 5px;
        margin-top: 10px;
    }
    .resume .print-bar {
        display: block;
        background-color: #eee;
        text-align: center;
        padding: 5px;
        margin: 10px 0;
        font-size: 11px;
        color: #333;
        border-radius: 5px;
        width: 33%;
    }
    .resume .print-bar:hover {
        text-decoration: none;
        background-color: #eaeaea;
    }

    .resume .print-bar.btn:first-child:hover {
            border-right: 1px dotted #999;
    }
    .resume .print-bar.btn:not(:first-child){
        border-left: 1px dotted #999;
    }
    .action-bar, .action-bar .btn-group{
        width:100%;
    }

    @media screen and (max-width: 767px) {
        .resume .date-range {
            text-align: left;
            font-size: 11px;
        }
    }

    @media print {
        body {
            font-size: 12px;
        }
        .resume .col-sm-6 {
            width: 50%;
            float: left;
        }
        .resume .col-sm-6.date-range {
            text-align: right;
            float: right;
            width: 50%;
        }
        .resume article {
            page-break-inside: avoid;
        }
       .resume .print-bar {
            display: none;
        }


    }

</style>


<div class="container resume">
    <div class="action-bar">
        <div class="btn-group" role="group">
            <a href="javascript:;" class="print-bar btn"  onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a>
            <a href="#" class="print-bar btn export-btn" ><i class="fa fa-file-word-o "></i> Export</a>
            <a href="#modal-share" data-toggle="modal" class="print-bar btn share-btn" ><i class="fa fa-envelope "></i> Share</a>
        </div>
    </div>
    <header class="resume-header">
<!--
        <div class="image-container">
            <img src="../content/images/prototype-actors/alewis.jpg"/>
        </div>
-->
        <h1>Dr. Stephanie Juniper </h1>
        <h4>Jupiter Healthcare</h4>
    </header>

    <!-- PERSONAL -->
    <article class="personal-information">
        <h4>Personal Information</h4>
        <section class="resume-section personal">
            Stephanie Juniper<br>
            123 East Elm St.<br>
            Seattle, WA 12345<br>
            Unites States<br>
            <small>Phone:</small> 555-555-5555<br>
            <small>Fax:</small> 555-556-5656<br>
            Email: sjuniper@jupiterhealthcare.com
        </section>
    </article>
    <!-- /PERSONAL -->

    <!-- WORK -->
    <article class="work-experience">
        <h4>Work Experience</h4>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Profession and Title -->
                    <strong>Surgeon - Chief of Neurosurgery</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Oct 2012 - Present
                </div>
            </div>
            <div>
                <!-- Company Name, Setting and Location -->
                <p class="company-location-setting">Specialty: Neurosurgery | Setting: Occupational Health | Seattle Grace Hospital | Seattle, WA, USA</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            </div>
        </section>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Profession and Title -->
                    <strong>Surgeon - Neurosurgeon</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Jan 2009 - Sep 2012
                </div>
            </div>
            <div>
                <!-- Company Name, Setting and Location -->
                <p class="company-location-setting">Specialty: Neurosurgery | Setting: Occupational Health | Southwest Methodist Hospital | San Antonio, TX, USA</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
        </section>
    </article>
    <!-- /WORK -->

    <!-- EDUCATION -->
    <article class="education">
        <h4>Education</h4>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Degree and Field of Study -->
                    <strong>Medical Doctor - Neuroscience</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Aug 2006 - May 2010
                </div>
            </div>
            <div>
                <!-- Company Name and Location -->
                <p class="company-location-setting">University of Tennessee School of Medicine | Knoxville, TN, USA</p>
            </div>
        </section>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Degree and Field of Study -->
                    <strong>Masters - Biology</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Aug 2004 - May 2006
                </div>
            </div>
            <div>
                <!-- Company Name and Location -->
                <p class="company-location-setting">University of Tennessee | Knoxville, TN, USA</p>
            </div>
        </section>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Degree and Field of Study -->
                    <strong>Bachelor of Science - Biology</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Aug 2000 - May 2004
                </div>
            </div>
            <div>
                <!-- Company Name and Location -->
                <p class="company-location-setting">University of Texas | Austin, TX, USA</p>
            </div>
        </section>
    </article>
    <!-- /EDUCATION -->

    <!-- LICENSES -->
    <article class="licenses">
        <h4>Licenses</h4>
        <section class="resume-section">
            <div>
                <!-- Discipline, State and Country -->
                <strong>License to Practice Surgery - Washington, USA</strong>
            </div>
            <div>
                <!-- License Information -->
                <p>
                    State License Number: 12345678uhjk<br>
                    Expires: May 31, 2017<br>
                    NABP eProfile ID Number: 000000445533443
                </p>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Certification and Certifying Body -->
                <strong>Brain Injury Medicine - Texas, USA</strong>
            </div>
            <div>
                <!-- License Information -->
                <p>
                    State License Number: 10305060<br>
                    Expires: May 31, 2017<br>
                    NABP eProfile ID Number: 1001001
                </p>
            </div>
        </section>
    </article>
    <!-- /LICENSES -->

    <!-- CERTIFICATIONS -->
    <article class="certifications">
        <h4>Certifications</h4>
        <section class="resume-section">
            <div>
                <!-- CertificationCertifying Body and Country -->
                <strong>Brain Injury Medicine - American Board of Psychiatry and Neurology (ABPN), USA</strong>
            </div>
            <div>
                <!-- Certifiction Information -->
                <p>
                    Certifiction Number: E1423Q74<br>
                    Expires: May 31, 2017<br>
                </p>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Certification, Certifying Body and Country -->
                <strong>Neurodevelopmental Disabilities - American Board of Psychiatry and Neurology (ABPN), USA</strong>
            </div>
            <div>
                <!-- Certifiction Information -->
                <p>
                    Certifiction Number: 123454321<br>
                    Expires: May 31, 2017
                </p>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- CertificationCertifying Body and Country -->
                <strong>Vascular Neurology - American Board of Psychiatry and Neurology (ABPN), USA</strong>
            </div>
            <div>
                <!-- Certifiction Information -->
                <p>
                    Certifiction Number: VAS456789<br>
                    Expires: May 31, 2017
                </p>
            </div>
        </section>
    </article>
    <!-- /CERTIFICATIONS -->

    <!-- RESUSCITATION PROGRAMS -->
    <article class="resuscitation">
        <h4>Resuscitaion Programs</h4>
        <section class="resume-section">
            <div>
                <!-- CertificationCertifying Body and Country -->
                <strong>General Resucitaion - American Medical Board, USA</strong>
            </div>
            <div>
                <!-- Certifiction Information -->
                <p>
                    Certifiction Number: RES765432<br>
                    Expires: May 31, 2017
                </p>
            </div>
        </section>
    </article>
    <!-- /RESUSCITATION PROGRAMS  -->

    <!-- MEMBERSHIPS AND ASSOCIATIONS -->
    <article class="memberships">
        <h4>Memberships and Associations</h4>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Role and Organization Name -->
                    <strong>Co-chair - Seattle Neurology Board</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Jan 2014 - Present
                </div>
            </div>
            <div>
                <!-- Membership Type, Committe Work and Location -->
                <p class="company-location-setting">Local or State Organization | Committe for Safe Neurology Practices | Seattle, WA, USA</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
            </div>
        </section>
    </article>
    <!-- /MEMBERSHIPS AND ASSOCIATIONS -->

    <!-- COMMITTEE WORK -->
    <article class="committee-work">
        <h4>Committee Work</h4>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Role and Organization Name -->
                    <strong>Member - Committe for Safe Neurology Practices</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Jan 2014 - Dec 2014
                </div>
            </div>
            <div>
                <!-- Committee Type, Workgroup, Membership  and Location -->
                <p class="company-location-setting">Local or State Organization | Workgroup 7 | Seattle Neurolgy Board | Seattle, WA, USA</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                <p>Link: <a href="http://www.linktosite.com">http://www.linktosite.com</a></p>
            </div>
        </section>
    </article>
    <!-- /COMMITTEE WORK -->

    <!-- ACTIVITIES -->
    <article class="activities">
        <h4>Volunteer Services</h4>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Type and Name -->
                    <strong>Volunteer Work - Docent</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Jan 2014 - Present
                </div>
            </div>
            <div>
                <!-- Organization Name and Location -->
                <p class="company-location-setting">Seattle Zoo | Seattle, WA, USA</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
            </div>
        </section>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Type and Name -->
                    <strong>Volunteer Work - Youth Softball Coach</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Jan 2012 - Dec 2013
                </div>
            </div>
            <div>
                <!-- Organization Name and Location -->
                <p class="company-location-setting">Seattle YWCA | Seattle, WA, USA</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
            </div>
        </section>
    </article>
    <!-- /ACTIVITIES -->

    <!-- TEACHING -->
    <article class="teaching">
        <h4>Teaching &amp; Preceptorship</h4>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Name and Type -->
                    <strong>Teaching - Poster</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Jan 2012 - Dec 2013
                </div>
            </div>
            <div>
                <!-- Membership  and Location -->
                <p class="company-location-setting">Seattle, WA, USA</p>
                <p>Authors/Contributors: Joe Smith, Jack Haley, Ed Nealy, Becky Hammond</p>
                <p>Link: <a href="http://www.linktosite.com">http://www.linktosite.com</a></p>
            </div>
        </section>
    </article>
    <!-- /TEACHING -->

    <!-- PUBLICATIONS/RESEARCH -->
    <article class="publications">
        <h4>Publications/Research</h4>
        <section class="resume-section">
            <div>
                <!-- Type and Title -->
                <strong>Article - The Evolution of Modern Brain Surgery</strong>
            </div>
            <div>
                <!-- Journal Title and Date and IBS Approved -->
                <p class="company-location-setting">New England Journal of Medicine | Oct 21, 2010 | Study Complete | IRB Approved Dec 24, 2011</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                <p>Authors/Editors/Contributors: JoAnne Hough, Eugene McCreedy</p>
                <p>Nurse Principal Investigator: Gabe Kotter</p>
                <p>Link: <a href="http://www.linktosite.com">http://www.linktosite.com</a></p>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Type and Title -->
                <strong>Book - The Brain and You</strong>
            </div>
            <div>
                <!-- Journal Title and Date and IBS Approved -->
                <p class="company-location-setting">Random House | Oct 21, 2010</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                <p>Authors/Editors/Contributors: Norman Kirk</p>
                <p>Link: <a href="http://www.linktosite.com">http://www.linktosite.com</a></p>
            </div>
        </section>
    </article>
    <!-- /PUBLICATIONS/RESEARCH -->

    <!-- AWARDS -->
    <article class="awards">
        <h4>Awards &amp; Recognition</h4>
        <section class="resume-section">
            <div>
                <!-- Type and Name of honor -->
                <strong>Fellowship - Neuroendovascular/Interventional Neuroradiology (NES/INR) Fellowship</strong>
            </div>
            <div>
                <!-- Honor Given by and DAte -->
                <p class="company-location-setting">Cleveland Clinic | Jan 31, 2014</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
            </div>
        </section>
        <section class="resume-section">
            <div>
                <!-- Type and Name of honor -->
                <strong>Award - Surgeon of the Month</strong>
            </div>
            <div>
                <!-- Honor Given by and DAte -->
                <p class="company-location-setting">Seattle Grace Board of Directors | Oct 31, 2011</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
            </div>
        </section>
    </article>
    <!-- /AWARDS -->

    <!-- OTHER -->
    <article class="awards">
        <h4>Other</h4>
        <section class="resume-section">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Title -->
                    <strong>Other Thing Worth Mentioning</strong>
                </div>
                <div class="col-sm-6 date-range">
                    <!-- Start and Completion Date. If present, disaply present and start date -->
                    Jan 2014 - Dec 2014
                </div>
            </div>
            <div>
                <!-- Organization Name and Location -->
                <p class="company-location-setting">Pacific Northwest Surgeon's Association | Seattle, WA, USA</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
            </div>
        </section>
    </article>
    <!-- /OTHER -->

    <footer class="resume-footer">
        This ePortfolio was produced through HealthStream<br>
        <img src="/content/images/logo-healthstream-small.png" alt="HealthStream" class="resume-logo"><br>
        Copyright &copy; 2015 HealthStream, Inc. All Rights Reserved.<br>
        Build: 13.01.28.895.8 | O:STS2 | S:192.231.71.2
    </footer>
</div>

<!-- Modal -->
<div id="modal-share" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Share your ePortfolio</h4>
            </div>
            <div class="modal-body">
            	
				<div class="form-group">
                        <label class="control-label">Email Address(es) <small>Separate with comma</small></label>
                        <textarea class="form-control"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Send</button>
				
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->
	<?=createSiteScripts(); ?>

<?= createSiteEnd(); ?>