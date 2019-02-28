<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Brain Surgery for Dummies';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'Brain Surgery for Dummies';
$patterns['focus']['icon'] = array(
    'class' => 'hs-icons-course',
    'type' => 'Course',
);
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Version:',
        'value' => '4',
    ),
    array(
        'label' => 'Est Time:',
        'value' => '2h 10m',
    ),
);
$patterns['focus']['action'] = array(
    'text' => 'Buy <i class="fa fa-chevron-right"></i>',
    'link' => 'campus-payment.php',
);
$patterns['focus']['supporting'] = ' ';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
.section-cost {
    color:#666 ;
    font-size:12px ;
}
.btn-group>.btn-mini{font-size:10.5px;}
button.btn.btn-mini, input[type="submit"].btn.btn-mini {
}

.btn-mini {
    padding: 0 6px;
    font-size: 10.5px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
} 
 .slick-prev {
    background: url('/content/images/catalog-previous-trans-bg.png') no-repeat !important;
    left:-25px !important;
}


.slick-next{
    background: url('/content/images/catalog-next-trans-bg.png') no-repeat !important;
    right:-25px !important;
}
.section-carousel .hs-item-image {
    height:200px;
}
.card {
        cursor: pointer;
    position: relative;
    background-color: #fff;
    overflow: hidden;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin-top: -1px;
        max-height: 92px;
    border-radius: 5px;
    padding: 0;
    margin-top: 0;
}
.card-content {
    padding: 10px 20px;
}
.image-column {
        display: inline-block;
    vertical-align: top;
    float: none;
    padding: 0;
    font-size: 13px;
        display: block;
    float: left;
    width:30%;
}
.thumbnail {
    border-radius: 5px;
    max-height: 100px;
}
.card img {
    display: block;
    width: 100%;
    height: auto;
    background: #e5e5e5;
    font-size: 0;
    outline: 0;
}
.thumbnail img {
        position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
.watch-options {
        position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    color: #fff;
    font-weight: 700;
    background-color: rgba(0,0,0,.75);
    z-index: 1;
        border-radius: 5px 5px 0 0;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    display: block;
    opacity: 0;
    -webkit-transition: opacity .4s ease 0s;
    -o-transition: opacity .4s ease 0s;
    transition: opacity .4s ease 0s;
}

.card-meta-data {
        font-weight: 400;
    font-size: 13px;
    line-height: 19px;
    position: relative;
    white-space: normal;
    vertical-align: middle;
    top: -3px;
    width: 70%;
    padding: 0 0 0 15px;
}
.title-author-info {
    height:60px;
    font-size:14px !important;
    margin-top:-20px;
}
.meta-author {
    font-size:12px !important;
}
.title-author-info h3{
    font-size:14px !important;

}
</style>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <section class="section section-main section-box" data-equalize="layout-columns">
<div style="float:right;font-size:14px;font-weight:normal;"><a href="#">Report this Course</a></div>
                    <section class="return-link">
                        <a href="catalog-results.php"><i class="fa fa-fw fa-chevron-left"></i>Return to Search Results</a>
                    </section>

                    <section class="section visible-xs visible-sm">
                        <!--<h2>Fees</h2>-->
                        <ul class="list-pricing">
                            <li>Cost: <span>$4.99</span></li>
                            <!--<li>No-Show Fee: <span>$1.00</span></li>
                            <li>Cancellation Fee: <span>$1.00</span></li>-->
                            <!--<li class="total">Total: <span>$3.00</span></li>-->
                        </ul>
                    </section>

                   <section class="section section-carousel hidden-print">
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('http://www.mayfieldclinic.com/Images/HOME_MinimallyInvasive_Brain.jpg');"></div>
                    <!--<div class="hs-item-text">
                        <h2>CE Center for You <small>Unlimited Access to Education</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>-->
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('http://www.pacificneuroscienceinstitute.org/assets/Ketyhole-brain-surgery1.jpg');"></div>
                    <!--<div class="hs-item-text">
                        <h2>OneSource <small>Medical Product Training</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>-->
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('http://www.brainfacts.org/~/media/Brainfacts/Article%20Multimedia/About%20Neuroscience/Technologies/MRI_blackandwhite.ashx');"></div>
                    <!--<div class="hs-item-text">
                        <h2>Connect2Know <small>Wound Care Resource Center</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>-->
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('https://brainsurgery-6aa3.kxcdn.com/file/2012/05/meningioma2-ian-suk.jpg');"></div>
                    <!--<div class="hs-item-text">
                        <h2>TalentTracks <small>Curated Leadership Development</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="talenttracks-hybrid-new.php" class="hs-item-link"></a>-->
                </div>
            </div>
            <div>
                <div class="hs-item">
                    <div class="hs-item-image" style="background-image:url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR8sdnb4J9dtGBy26CYVp5fXbG-osya2QmRLs6tYn-M3jkt57N9');"></div>
                    <!--<div class="hs-item-text">
                        <h2>Feature #5 <small>with additional text</small></h2>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>-->
                </div>
            </div>
        </section>
    <section class="section" id="jump-description">
                        <h2>Description</h2>
                        <p>In this mind-bogglingly hysterical and brain-meltingly informative course, the body's most vital muscle gets a thorough probing. A friendly blob of grey (or in this case, blue) matter, Brainy, guides you through the many functions of the human brain, from involuntary actions like breathing, to vast and complex mechanisms that govern emotions and the senses. It's all explained with detailed but informal introductions and captions, accompanied by simple, colourful and comical illustrations which will engage even the most reluctant.</p>
                    </section>
                       <section class="section">
                        <h3>Author</h3>
                        <p><a href="#modal-author" data-toggle="modal">S.Parker/D.West</a></p>
                    </section>

                    <section class="section">
                        <h2>Learning Activities</h2>
                                <?php

                                $slat = array(
                                    'title' => '<a href="registration.php">Neurosurgery Basics</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Choose Class',
                                        'link' => 'registration.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="attachment-incomplete.php">Surgery Prep</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        )
                                    ),
                                    'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="registration.php">Not First Item Class</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Class',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '30m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'action-single',
                                        'content' => 'Preview Schedule',
                                        'link' => 'registration-locked.php',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => '<a href="attachment-incomplete.php">Chronic Pain Management 2</a>',
                                    'meta' => array(
                                        array(
                                            'type' => 'Online Activity',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '1h 30m',
                                        )
                                    ),
                                    'action' => array(
                                    'type' => 'custom',
                                    'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                $slat = array(
                                    'title' => 'Post Test',
                                    'meta' => array(
                                        array(
                                            'type' => 'Test',
                                        ),
                                        array(
                                            'label' => 'Status:',
                                            'value' => 'Not Yet Started',
                                        ),
                                        array(
                                            'label' => 'Est. Time:',
                                            'value' => '10m',
                                        )
                                    ),
                                    'action' => array(
                                        'type' => 'custom',
                                        'content' => '<div class="action"><a class="btn btn-sm btn-default disabled" href="#"><i class="fa fa-lock"></i> Locked</a></div>',
                                    ),
                                    'attributes' => array(
                                        array('class',array('slat')),
                                    )
                                );

                                echo createSlat($slat);

                                ?>
                    </section>

                


                    <section class="section" id="jump-learning-objectives">
                        <h2>Learning Objectives</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                        <ul>
                            <li>An ordered list item</li>
                            <li>An ordered list item</li>
                            <li>An ordered list item</li>
                            <li>An ordered list item</li>
                        </ul>
                    </section>

                    <section class="section" id="jump-course-outline">
                        <h2>Course Outline</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        <ol>
                            <li>An unordered list item</li>
                            <li>An unordered list item</li>
                            <li>An unordered list item</li>
                            <li>An unordered list item</li>
                        </ol>
                    </section>

                    <section class="section" id="jump-about-the-authors">
                        <h2>About the Authors</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </section>

                    <section class="section" id="jump-continuing-education-credits">
                        <h2>Continuing Education Credits</h2>
                        <p>You will earn or renew the following credits upon successful completion of this course.</p>
                        <?php

                            $content = '
                                <section class="section">
                                    <h5>Statement</h5>
                                    <p>The American Heart Association is accredited by the Accreditation Council for Continuing Medical Education to provide continuing education. The American Heart Association designates this enduring material for a maximim of 2.5 AMA PRA Category 1 Credits.</p>
                                </section>
                            ';
                            $content1 = '
                                <section class="section">
                                    <h5>Disciplines</h5>
                                    <p>Emergency Physicians, Physician Assistants, Physician, Surgeons</p>
                                </section>
                            ';
                            $content2 = '
                                <section class="section"><h5>Locations</h5>
                                    <p>
                                        <span class="label label-default">AK</span>
                                        <span class="label label-default">AL</span>
                                        <span class="label label-default">AR</span>
                                        <span class="label label-default">CA</span>
                                        <span class="label label-default">CO</span>
                                        <span class="label label-default">CT</span>
                                        <span class="label label-default">DC</span>
                                        <span class="label label-default">DE</span>
                                    </p>
                                </section>
                            ';
                            $slat = array(
                                'title' => 'Name of Accrediting / Approval Body',
                                'nested' => array(
                                    'hide' => array($content,$content1,$content2),
                                ),
                                'meta' => array(
                                    array(
                                        'label' => 'Credit:',
                                        'value' => '2.0 AMA PRA Category 1 Credits',
                                    ),
                                    array(
                                        'label' => 'Expiration:',
                                        'value' => 'Apr 4, 2016',
                                    )
                                ),
                                'action' => array(),
                                'attributes' => array(
                                    array('class',array('slat')),
                                )
                            );

                            echo createSlat($slat);

                            ?>
                    </section>

                    <section class="section" id="jump-certifications">
                        <h2>Certifications</h2>
                        <p>You will earn or renew the following certifcations upon successful completion of this course.</p>
                        <?php

                         $slat = array(
                                'title' => 'Certification Name',
                                'meta' => array(
                                    array(
                                        'label' => 'Certifying Body:',
                                        'value' => 'Name of Accrediting / Approval Body'
                                    ),
                                    array(
                                        'label' => 'Certification Period: ',
                                        'value' => 'Apr 1, 2012 — Apr 1, 2013'
                                    )
                                ),
                                'action' => array()
                            );

                            echo createSlat($slat);

                        ?>
                    </section>

                    <section class="section" id="jump-technical-requirements">
                        <h2>Technical Requirements</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        <p>
                            <b>Browser Requirements</b>
                            <ul>
                                <li>An unordered list item</li>
                                <li>An unordered list item</li>
                                <li>An unordered list item</li>
                                <li>An unordered list item</li>
                            </ul>
                        </p>
                    </section>

                    <section class="section" id="jump-catalog">
                        <h2>Catalog</h2>
                        <p>This course belongs to the following categories in the HLC catalog:</p>
                        <ul>
                            <li>Subject > Emergency Treatment > Resuscitation</li>
                            <li>Audience > Critical Care Paramedics</li>
                        </ul>
                    </section>

                </section><!-- /section-main -->

            </div><!-- /column -->

            <div class="col-md-3" >
                <section class="section section-sidebar section-cost" data-equalize="layout-columns">
                    <section class="section section-box hidden-xs hidden-sm">
                        <!--<h2>Fees</h2>-->
                        <ul class="list-pricing">
                            <li style="border:none;font-size:14px;">Cost: <span class="badge">$4.99</span></li>
                            <!--<li>No-Show Fee: <span>$1.00</span></li>
                            <li>Cancellation Fee: <span>$1.00</span></li>-->
                              <div style="margin-bottom:5px;margin-top:15px;border:none;font-size:14px;">Customer Reviews:</div>
                             <div style="margin-bottom:-10px; margin-top:0px;">
                         <button class="btn btn-mini btn-default">Current Version</button>
                          <button class="btn btn-mini btn-primary" style="display:inline-block;margin-left:-5px;">All Versions</button>
                          </div>
                        </ul><span style="font-size:10px"><a href="#">Average rating for all versions</a>&nbsp;</span>
                         <i class="fa fa-star" style="color:#ee3f3c;"></i>
                         <i class="fa fa-star" style="color:#ee3f3c;"></i>
                         <i class="fa fa-star" style="color:#ee3f3c;"></i>
                         <i class="fa fa-star" style="color:#ee3f3c;"></i>
                         <i class="fa fa-star-o" style="color:#ee3f3c;"></i><br>
                         <img src="/content/images/ratingschart.png" style="width:230px;margin-top:10px;"/>
                       
                       
                         <br>
                        <b>I learned brain surgery in one day!</a> <Br> <i class="fa fa-star"></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <p style="font-weight:300">This course is amazing!  I was able to successfully perform brain surgery after just 24 hours!</p>

                          <b>Very Helpful!</a> <Br> <i class="fa fa-star"></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-o"></i>
                         <p style="font-weight:300">Very nice and informative.</p>
                         <div style="float:right;font-size:12px;font-weight:normal;"><a href="#">View More Reviews</a></div>
                         <div class="clearfix"></div>
                    </section>

                     <section class="section section-box hidden-xs hidden-sm">
                        <!--<h2>Fees</h2>-->
                      <h3>Related Courses</h3>
                      <div class="card">
                        <div class="card-content">
                            <div class="col-xs-3 col-sm-12 image-column">
                                <a href="https://www.lynda.com/C-tutorials/C-Building-String-Library/379656-2.html" data-ga-action="click" data-ga-label="card-top" data-ga-value="379656" title="C++ Building a String Library" tabindex="-1">
                                    <div class="thumbnail">
                                        <img src="https://cdn.lynda.com/courses/174468-636109048272006273_270x480_thumb.jpg" data-appear-top-offset="300" alt="view course page for C++ Building a String Library">
                                        <div class="watch-options">
                                                <div role="button" class="watch-course ga" data-ga-action="click" data-ga-label="card-watch" data-ga-value="379656" data-course-id="379656" data-video-id="420286"><span>Preview course</span></div>
                                        </div>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-xs-7 col-sm-12 col-sm-pull-0 card-meta-data">
                                <a href="https://www.lynda.com/C-tutorials/C-Building-String-Library/379656-2.html" data-ga-action="click" data-ga-label="card-bottom" data-ga-value="379656">
                                    <div class="title-author-info">
                                        <h3>Clinical Approach to the Brain</h3>
                                        <div>
                                            <cite class="meta-author">with  Bill Weinman</cite>
                                        </div>
                                    </div>
                                </a>
                                <div class="meta">
                                    <span class="meta-duration">40m 12s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="card">
                        <div class="card-content">
                            <div class="col-xs-3 col-sm-12 image-column">
                                <a href="https://www.lynda.com/C-tutorials/C-Building-String-Library/379656-2.html" data-ga-action="click" data-ga-label="card-top" data-ga-value="379656" title="C++ Building a String Library" tabindex="-1">
                                    <div class="thumbnail">
                                        <img src="https://cdn.lynda.com/courses/175639-636115006611227195_270x480_thumb.jpg" data-appear-top-offset="300" alt="view course page for C++ Building a String Library">
                                        <div class="watch-options">
                                                <div role="button" class="watch-course ga" data-ga-action="click" data-ga-label="card-watch" data-ga-value="379656" data-course-id="379656" data-video-id="420286"><span>Preview course</span></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-7 col-sm-12 col-sm-pull-0 card-meta-data">
                                <a href="https://www.lynda.com/C-tutorials/C-Building-String-Library/379656-2.html" data-ga-action="click" data-ga-label="card-bottom" data-ga-value="379656">
                                    <div class="title-author-info">
                                        <h3>Fundamentals of Clinical Trials</h3>
                                        <div>
                                            <cite class="meta-author">with  Monika Wahl</cite>
                                        </div>
                                    </div>
                                </a>
                                <div class="meta">
                                    <span class="meta-duration">75m 01s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="card">
                        <div class="card-content">
                            <div class="col-xs-3 col-sm-12 image-column">
                                <a href="https://www.lynda.com/C-tutorials/C-Building-String-Library/379656-2.html" data-ga-action="click" data-ga-label="card-top" data-ga-value="379656" title="C++ Building a String Library" tabindex="-1">
                                    <div class="thumbnail">
                                        <img src="https://cdn.lynda.com/courses/361205-636099806542866189_270x480_thumb.jpg" data-appear-top-offset="300" alt="view course page for C++ Building a String Library">
                                        <div class="watch-options">
                                                <div role="button" class="watch-course ga" data-ga-action="click" data-ga-label="card-watch" data-ga-value="379656" data-course-id="379656" data-video-id="420286"><span>Preview course</span></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-7 col-sm-12 col-sm-pull-0 card-meta-data">
                                <a href="https://www.lynda.com/C-tutorials/C-Building-String-Library/379656-2.html" data-ga-action="click" data-ga-label="card-bottom" data-ga-value="379656">
                                    <div class="title-author-info">
                                        <h3>Fundamentals of Human Disease</h3>
                                        <div>
                                            <cite class="meta-author">with  Bob McGannon</cite>
                                        </div>
                                    </div>
                                </a>
                                <div class="meta">
                                    <span class="meta-duration">61m 8s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>
                   
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<div id="modal-author" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Course Author</h4>
            </div>
            <div class="modal-body">
                <section class="section">
                    <h2>Jane Doe</h2>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section class="section">
                    <h3>This is a group header</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </div>
        </div>
    </div>
</div><!-- /modal -->

<?= createFooter($patterns['footer']); ?>

<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
  <script src="/scripts/healthstream.catalog.js"></script>
<?= createSiteEnd(); ?>
