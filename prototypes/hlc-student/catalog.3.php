<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Catalog';
$patterns['header']['mainNavActive'] = 'catalog';
$patterns['focus']['title'] = 'Catalog';
$patterns['focus']['type'] = 'search';
$patterns['focus']['search'] = array(
    'placeholder' => 'Search',
    'url' => 'catalog-results.php',
    );
$patterns['header'] = array(
    'mainNav' => '
    <li class="{active=connections}"><a href="/connections.php">Connections</a></li>
    <li class="{active=todo}"><a href="/todo-recommendations.php">To Do</a></li>
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
    <li class="{active=catalog}"><a href="/catalog.3.php">Catalog</a></li>
    <li class="{active=calendar}"><a href="/event-calendar.php">Event Calendar</a></li>
    <li class="disabled"><a href="#">Help</a></li>
    <li class="visible-xs"><a href="#">Logout</a></li>',
    'mainNavActive' =>'todo',
    );
$patterns['search']['filters'] = array(
    array(
        'visible' => 'mobile',
        'header' => 'Sort',
        'controls' => array(
            '<select class="form-control js-select2">
            <option>Best Match</option>
            <option>Date Updated</option>
            <option>Name</option>
        </select>',
        ),
        ),
    array(
"state" => 'static', // static / open / closed
"header" => 'Show',
'controls' => array(
    '<ul class="list-unstyled">
    <li class="radio" >
        <label><input type="radio" class="learning-radio" name="learning" >All Learning </label>
    </li>
    <li class="radio">
        <label><input type="radio" class="learning-radio" checked="checked"  name="learning">My Recommended Learning</label>
    </li>
</ul>',
),
),
	    array(
"state" => 'static', // static / open / closed
"header" => 'Catalogs',
"controls" => array(
    '<nav class="catalog-categories">
    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="240">
        <ul>

            <li>
                <a href="catalog-ce-channel.php">
                    <div class="cc-col"><b>CE</b>Path (205) </div>
                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                </a>
            </li>
           
        </ul>
    </div>
</nav>',

),
),
    array(
"state" => 'static', // static / open / closed
"header" => 'Categories',
"controls" => array(
    '<nav class="catalog-categories">
    <div data-toggle="limit-height" data-labels="Show More|Show Less" data-height="240">
        <ul>


            <li class="">
                <a href="#">
                    <div class="cc-col">Content Publisher (33) </div>
                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                </a>
            </li>
            <li  class="">
                <a href="#">
                    <div class="cc-col">Audience (78) </div>
                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                </a>
            </li>
            <li  class="">
                <a href="#">
                    <div class="cc-col">Subject (52) </div>
                    <div class="cc-col cc-col-icon"><i class="fa fa-chevron-right"></i></div>
                </a>
            </li>

        </ul>
    </div>
</nav>',

),
),

    );

    ?>
	<?=createSiteStart($patterns['start']); ?>
		<?=createHeader($patterns['header']); ?>
			<?=createFocus($patterns['focus']); ?>
				<style>
					.w-100 {
						width: 100%;
					}

					.slat-recommendation {
						display: none;
					}

					.slat-recommendation.js-slat-nicu,
					.slat-recommendation.js-search-slat,
					.slat-recommendation.js-course-slat-1,
					.slat-recommendation.js-course-slat-2,
					.slat-recommendation.js-work-slat {
						display: inherit;
					}

					.modal-body h3 strong {
						font-weight: 600;
					}

					.modal-body .slat-group {
						margin-top: 20px;
					}

					.catalog-wrapper,
					nav.catalog-categories li.catalog-filter {
						display: none;
					}

					.js-ignore-textarea {
						display: none;
					}

					.slat-favorite .favorite {
						display: block;
						position: absolute;
						top: -11px;
						right: -11px;
						width: 0;
						height: 0;
						border-style: solid;
						border-width: 0 30px 30px 0;
						border-color: transparent #fc7b00 transparent transparent;
						z-index: 0;
						cursor: pointer;
					}

					.slat-favorite .favorite i {
						display: block;
						position: absolute;
						top: 2px;
						left: 16px;
						font-size: 12px;
						color: #fff;
						text-shadow: 1px 1px 0 rgba(0, 0, 0, .3);
					}

					@media only print {
						.site-header {
							border-bottom: 1px solid #999;
						}
						.site-header a[href]:after {
							content: "";
						}
						.site-header .trigger-open {
							display: none !important;
						}

						.focus-pageheader {
							display: none;
						}
						.section-carousel {
							display: none;
						}

						.tag {
							border: 1px solid #ccc;
						}
						.tag i {
							display: none;
						}

						.section,
						.slat {
							page-break-inside: avoid;
						}
						.slat .title a[href]:after {
							content: "";
						}
						.slat .btn {
							display: none;
						}

						.site-footer .focus-promo,
						.site-footer .links {
							display: none;
						}
						section[data-equalize="layout-columns"] {
							height: auto !important;
							min-height: 0 !important;
						}
					}
				</style>
				<div class="layout layout-search">
					<div class="container">

						<section class="section section-carousel hidden-print">
							<div>
								<div class="hs-item">
									<div class="hs-item-image" style="background-image:url('/content/images/catalog-ce-channel.jpg');"></div>
									<div class="hs-item-text">
										<h2><b>CE</b>Path <small>Featuring Challenge Tracks</small></h2>
										<i class="fa fa-chevron-right"></i>
									</div>
									<a href="#modal-ce-channel" class="hs-item-link" data-toggle="modal"></a>
								</div>
							</div>
							<div>
								<div class="hs-item">
									<div class="hs-item-image" style="background-image:url('/content/images/catalog-OneSource.png');"></div>
									<div class="hs-item-text">
										<h2>OneSource <small>Medical Product Training</small></h2>
										<i class="fa fa-chevron-right"></i>
									</div>
									<a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
								</div>
							</div>
							<div>
								<div class="hs-item">
									<div class="hs-item-image" style="background-image:url('/content/images/catalog-Connect2Know.png');"></div>
									<div class="hs-item-text">
										<h2>Connect2Know <small>Wound Care Resource Center</small></h2>
										<i class="fa fa-chevron-right"></i>
									</div>
									<a href="#modal-splash" class="hs-item-link" data-toggle="modal"></a>
								</div>
							</div>
							<div>
								<div class="hs-item">
									<div class="hs-item-image" style="background-image:url('/content/images/catalog-talenttracks.jpg');"></div>
									<div class="hs-item-text">
										<h2>TalentTracks <small>Curated Leadership Development</small></h2>
										<i class="fa fa-chevron-right"></i>
									</div>
									<a href="talenttracks-hybrid-new.php" class="hs-item-link"></a>
								</div>
							</div>

						</section>

						<section class="section section-main section-box">
							<div class="row">

								<div class="col-md-3 hidden-xs hidden-sm">
									<section class="section section-filters" data-equalize="layout-columns">
										<h2>Refine Results</h2>

										<?=createSearch($patterns['search']); ?>


									</section>
								</div>
								<div class="col-md-9">
									<div class="recommended-learning-wrapper">
										<section class="section section-results" data-equalize="layout-columns">
											<section class="section section-results-header">
												<div class="row">
													<div class="col-md-9">
														<h2>My Recommended Learning <small>Showing 1-7 of 7</small></h2>
														<div class="section section-refinement-applied">
															<h3>Refinements</h3>
														</div>
													</div>
													<div class="col-md-3 hidden-xs hidden-sm">
														<div class="section-results-header-sort">
															<div class="dropdown">
																<a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Best Match <i class="fa fa-sort"></i></a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li class="active"><a href="#">Best Match</a></li>
																	<li><a href="#">Date Updated</a></li>
																	<li><a href="#">Name</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="section">
												<section class="section">
													<?php

                                        $ignoreLearning  = '<a href="#modal-hideLearning" data-toggle="modal">Remove from Recommendations</a>';

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat slat-recommendation js-course-slat-1')),
                                                ),
                                            'title' => '<a href="#">Acute Myocardial Infarction and Diabetes Mellitus</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>

                                            </span>Recommended based on <a href="#modal-recommendation" data-toggle="modal"> test history</a>.',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '1.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online, Test, Evaluation',
                                                    ),
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'EBSCO Health',
                                                    ),


                                                ),
                                            'action' => array(
                                                'type' => 'action-split',
                                                'options' => array(
                                                    array(
                                                        'content' => 'Info',
                                                        'link' => '#'
                                                        ),
                                                    array(
                                                        'content' => $ignoreLearning,
                                                        'link' => '#',
                                                        ),
                                                    )
                                                ),
                                        );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat slat-recommendation js-search-slat')),
                                                ),

                                            'title' => '<a href="course-enroll.2.php"> Clinical Manifestations of Chronic Renal Failure</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>

                                            </span>Recommended based on <a href="#modal-recommendation-4" data-toggle="modal"> search history</a>.',
                                            'meta' => array( 
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'Contact:',
                                                    'value' => '.5 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online',
                                                    ), 
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'DigitalMed',
                                                    ),

                                                ),


                                                'action' => array(
                                                    'type' => 'action-split',
                                                    'options' => array(
                                                        array(
                                                            'content' => 'Info',
                                                            'link' => '#'
                                                            ),
                                                        array(
                                                            'content' => $ignoreLearning,
                                                            'link' => '#',
                                                            ),
                                                        )
                                                    ),

                                                );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat slat-recommendation js-work-slat')),
                                                ),

                                            'title' => '<a href="course-enroll.2.php">Fluid and Electrolyte Therapy</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>

                                                </span>Recommended based on <a href="#modal-recommendation-3" data-toggle="modal"> work history</a>.',
                                                'meta' => array( 
                                                    array(
                                                        'type' => 'Course',
                                                        ),
                                                    array(
                                                        'label' => 'Contact:',
                                                        'value' => '1.00 Hour(s)',
                                                        ),
                                                    array(
                                                        'label' => 'ACTIVITIES:',
                                                        'value' => 'Online',
                                                        ), 
                                                    array(
                                                        'label' => 'Publisher:',
                                                        'value' => 'Tenet Healthcare',
                                                        ),

                                                    ),


                                                'action' => array(
                                                    'type' => 'action-split',
                                                    'options' => array(
                                                        array(
                                                            'content' => 'Info',
                                                            'link' => '#'
                                                            ),
                                                        array(
                                                            'content' => $ignoreLearning,
                                                            'link' => '#',
                                                            ),
                                                        )
                                                    ),

                                                );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat slat-recommendation js-course-slat-1')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">Heart Failure and Kidney Disease</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>

                                            </span>Recommended based on <a href="#modal-recommendation" data-toggle="modal"> test history</a>.',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '1.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online, Evaluation',
                                                    ),
                                                array(
                                                    'label' => 'PUBLISHER:',
                                                    'value' => 'EBSCO Health',
                                                    ),


                                                ),
                                            'action' => array(
                                                'type' => 'action-split',
                                                'options' => array(
                                                    array(
                                                        'content' => 'Info',
                                                        'link' => '#'
                                                        ),
                                                    array(
                                                        'content' => $ignoreLearning,
                                                        'link' => '#',
                                                        ),
                                                    )
                                                ),

                                            );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat slat-recommendation js-course-slat-1 js-course-slat-2')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">Understanding Chronic Pain Management</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>

                                            </span>Recommended based on <a href="#modal-recommendation-5" data-toggle="modal"> test history</a>.',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '2.50 &ndash; 3.25',
                                                    ),

                                                ),
                                            'action' => array(
                                                'type' => 'action-split',
                                                'options' => array(
                                                    array(
                                                        'content' => 'Info',
                                                        'link' => '#'
                                                        ),
                                                    array(
                                                        'content' => $ignoreLearning,
                                                        'link' => '#',
                                                        ),
                                                    )
                                                ),
                                            );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat slat-recommendation js-search-slat')),
                                                ),
                                            'title' => '<a href="#">Kidney Anatomy and Renal Failure</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>
                                            Recommended based on <a href="#modal-recommendation-4" data-toggle="modal"> search history</a>.',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'Contact:',
                                                    'value' => '0.50 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online',
                                                    ),
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'Tenet Healthcare',
                                                    ),

                                                ),
                                                'action' => array(
                                                    'type' => 'action-split',
                                                    'options' => array(
                                                        array(
                                                            'content' => 'Info',
                                                            'link' => '#'
                                                            ),
                                                        array(
                                                            'content' => $ignoreLearning,
                                                            'link' => '#',
                                                            ),
                                                        )
                                                    ),
                                            );
                                        echo createSlat($slat);


                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat slat-recommendation js-search-slat js-course-slat-1 js-course-slat-2')),
                                                ),

                                            'title' => '<a href="course-enroll.2.php">Renal Anatomy and Physiology</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>

                                            </span>Recommended based on <a href="#modal-recommendation-6" data-toggle="modal"> test <span class="slat-recommendation js-search-slat" >and search</span> history</a>.',
                                            'meta' => array( 
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'Contact:',
                                                    'value' => '1.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online',
                                                    ), 
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'Tenet Healthcare',
                                                    ),

                                                ),


                                            'action' => array(
                                                'type' => 'action-split',
                                                'options' => array(
                                                    array(
                                                        'content' => 'Info',
                                                        'link' => '#'
                                                        ),
                                                    array(
                                                        'content' => $ignoreLearning,
                                                        'link' => '#',
                                                        ),
                                                    )
                                                ),
                                        );
                                        echo createSlat($slat);

                                        ?>


												</section>
											</section>
											<!-- /section-main -->
										</section>
									</div>
									<!-- /column -->


									<div class="catalog-wrapper">
										<section class="section section-results" data-equalize="layout-columns">
											<section class="section section-results-header">
												<div class="row">
													<div class="col-md-9">
														<h2>Results <small>Showing 1-10 of 15</small></h2>
														<div class="section section-refinement-applied">
															<h3>Refinements</h3>
															<div class="tag-group">
																<a href="#" class="tag">Keyword A<i class="fa fa-times"></i></a>
																<a href="#" class="tag">A-long-non-breaking-keyword-a-long-non-breaking-keyword<i class="fa fa-times"></i></a>
																<a href="#" class="tag">Keyword C<i class="fa fa-times"></i></a>
																<a href="#" class="tag">Keyword D<i class="fa fa-times"></i></a>
																<a href="#" class="tag">Keyword E<i class="fa fa-times"></i></a>
															</div>
														</div>
													</div>
													<div class="col-md-3 hidden-xs hidden-sm">
														<div class="section-results-header-sort">
															<div class="dropdown">
																<a class="btn btn-default" data-toggle="dropdown" href="#">Sort: Best Match <i class="fa fa-sort"></i></a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li class="active"><a href="#">Best Match</a></li>
																	<li><a href="#">Date Updated</a></li>
																	<li><a href="#">Name</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="section">
												<section class="section">
													<?php
                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat')),
                                                ),

                                            'title' => '<a href="course-enroll.2.php">00 Acute Pain Management</a>',


                                            'meta' => array( 
                                                array(
                                                    'type' => 'Course',
                                                    ),

                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Live Class',
                                                    ), 


                                                ),


                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                                'link' => 'course-enroll.2.php',
                                                ),

                                            );
                                        echo createSlat($slat);
                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">A Review of Insulin for the Treatment of Diabetes Mellitus</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>
                                            Recommended based on <a href="#modal-recommendation" data-toggle="modal"> test history</a>.',
                                            'meta' => array( 
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '2.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online',
                                                    ), 
                                               
                                                ),

                                            'action' => array(
                                                'type' => 'action-split',
                                                'options' => array(
                                                    array(
                                                        'content' => 'Info',
                                                        'link' => '#'
                                                        ),
                                                    array(
                                                        'content' => $ignoreLearning,
                                                        'link' => '#',
                                                        ),
                                                    )
                                                ),

                                            );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">A Review: Nursing of Intensive Care Unit Delirium </a>',

                                            'meta' => array( 
                                                array(
                                                    'type' => 'Course',
                                                    ),

                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Live Class',
                                                    ), 


                                                ),


                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                                'link' => 'course-enroll.2.php',
                                                ),

                                            );

                                        echo createSlat($slat);
                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">Acute Coronary Syndrome </a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>
                                            Recommended based on <a href="#modal-recommendation-3" data-toggle="modal"> test history</a>.',

                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '1.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online, Evaluation',
                                                    ),
                                                


                                                ),
                                            'action' => array(
                                                'type' => 'action-split',
                                                'options' => array(
                                                    array(
                                                        'content' => 'Info',
                                                        'link' => '#'
                                                        ),
                                                    array(
                                                        'content' => $ignoreLearning,
                                                        'link' => '#',
                                                        ),
                                                    )
                                                ),

                                            );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat')),
                                                ),
                                            'title' => '<a href="#">Acute Myocardial Infarction and Diabetes Mellitus</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>
                                            Recommended based on <a href="#modal-recommendation" data-toggle="modal"> test history</a>.',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '1.00 Hour(s)',
                                                    ),
                                                array(
                                                    'label' => 'ACTIVITIES:',
                                                    'value' => 'Online, Test, Evaluation',
                                                    ),
                                                array(
                                                    'label' => 'Publisher:',
                                                    'value' => 'EBSCO Health',
                                                    ),


                                                ),
                                            'action' => array(
                                                'type' => 'action-split',
                                                'options' => array(
                                                    array(
                                                        'content' => 'Info',
                                                        'link' => '#'
                                                        ),
                                                    array(
                                                        'content' => $ignoreLearning,
                                                        'link' => '#',
                                                        ),
                                                    )
                                                ),
                                            );
                                        echo createSlat($slat);

                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">AORN Caring for the Older Adult</a>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => 'No',
                                                    )
                                                ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                                'link' => 'course-enroll.2.php',
                                                )
                                            );
                                        echo createSlat($slat);

                                        $nested = createSlat(array(
                                            'attributes' => array(
                                                array('class','slat'),
                                                ),
                                            'title' => 'CE - AHIMA',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Discipline:',
                                                    'value' => 'Registered Nurse',
                                                    ),
                                                array(
                                                    'label' => 'Credits:',
                                                    'value' => '1.0',
                                                    ),
                                                ),
                                            'action' => array(),
                                            ));
                                        $nested1 = createSlat(array(
                                            'attributes' => array(
                                                array('class','slat'),
                                                ),
                                            'title' => 'CE - AAPC',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Discipline:',
                                                    'value' => 'Registered Nurse',
                                                    ),
                                                array(
                                                    'label' => 'Credits:',
                                                    'value' => '1.0',
                                                    ),
                                                ),
                                            'action' => array(),
                                            ));
                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">Coronary Artery Disease (CAD)</a>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Curriculum',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => 'Yes',
                                                    )
                                                ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                                'link' => 'course-enroll.2.php',
                                                ),
                                            'nested' => array(
                                                'hide' => array($nested,$nested1)
                                                ),
                                            );
                                        echo createSlat($slat);


                                        $nested = createSlat(array(
                                            'attributes' => array(
                                                array('class','slat'),
                                                ),
                                            'title' => 'CE - AHIMA',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Discipline:',
                                                    'value' => 'Registered Nurse',
                                                    ),
                                                array(
                                                    'label' => 'Credits:',
                                                    'value' => '1.0',
                                                    ),
                                                ),
                                            'action' => array(),
                                            ));
                                        $nested1 = createSlat(array(
                                            'attributes' => array(
                                                array('class','slat'),
                                                ),
                                            'title' => 'CE - AAPC',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Discipline:',
                                                    'value' => 'Registered Nurse',
                                                    ),
                                                array(
                                                    'label' => 'Credits:',
                                                    'value' => '1.0',
                                                    ),
                                                ),
                                            'action' => array(),
                                            ));
                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">Moderate Sedation</a>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => 'Yes',
                                                    )
                                                ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                                'link' => 'course-enroll.2.php',
                                                ),
                                            'nested' => array(
                                                'hide' => array($nested,$nested1)
                                                ),
                                            );
                                        echo createSlat($slat);


                                        $slat = array(
                                            'attributes' => array(
                                                array('class',array('slat')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">Profile of Multisystem Trauma Patients</a>',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => 'No',
                                                    )
                                                ),
                                            'action' => array(
                                                'type' => 'action-single',
                                                'content' => '<i class="fa fa-info visible-xs"></i> Info',
                                                'link' => 'course-enroll.2.php',
                                                )
                                            );
                                        echo createSlat($slat);


                                        $nested = createSlat(array(
                                            'attributes' => array(
                                                array('class','slat'),
                                                ),
                                            'title' => 'CE - AHIMA',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Discipline:',
                                                    'value' => 'AEMT',
                                                    ),
                                                array(
                                                    'label' => 'Credits:',
                                                    'value' => '2.50 AMA PRA Category 1',
                                                    ),
                                                ),
                                            'action' => array(),
                                            ));
                                        $nested1 = createSlat(array(
                                            'attributes' => array(
                                                array('class','slat'),
                                                ),
                                            'title' => 'CE - AAPC',
                                            'meta' => array(
                                                array(
                                                    'label' => 'Discipline:',
                                                    'value' => 'Registered Nurses - Advanced Registered Nurse Practitioner',
                                                    ),
                                                array(
                                                    'label' => 'Credits:',
                                                    'value' => '3.25',
                                                    ),
                                                ),
                                            'action' => array(),
                                            ));

                                        $slat = array(
                                            'attributes' => array(
                                                array('class', array('slat')),
                                                ),
                                            'title' => '<a href="course-enroll.2.php">Understanding Chronic Pain Management</a>',
                                            'description' => '
                                            <i class="fa fa-lightbulb-o fa-lg text-primary"></i>
                                            Recommended based on <a href="#modal-recommendation" data-toggle="modal"> test history</a>.',
                                            'meta' => array(
                                                array(
                                                    'type' => 'Course',
                                                    ),
                                                array(
                                                    'label' => 'CE:',
                                                    'value' => '2.50 &ndash; 3.25',
                                                    ),

                                                ),
                                            'action' => array(
                                                'type' => 'action-split',
                                                'options' => array(
                                                    array(
                                                        'content' => 'Info',
                                                        'link' => '#'
                                                        ),
                                                    array(
                                                        'content' => $ignoreLearning,
                                                        'link' => '#',
                                                        ),
                                                    )
                                                ),

                                            );
                                        echo createSlat($slat);

                                        ?>
									</div>
									<!-- /row -->
									</section>

								</div>
								<!-- /container -->
							</div>
							<!-- /layout -->


							<!-- Refine Modal -->
							<div id="modal-filter" class="modal fade" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
											<h4 class="modal-title">Refine Results</h4>
										</div>
										<div class="modal-body"></div>
										<div class="modal-footer">
											<button class="btn btn-default" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
							<!-- / Refine Modal -->



							<!-- Recommendation Adult Critical Care Modal -->
							<div id="modal-recommendation" class="modal fade" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
											<h4 class="modal-title">Recommendations</h4>
										</div>
										<div class="modal-body">

											<h3><strong>Source(s) of recommendation: </strong></h3>

											<div class="slat-group">
												<div class="slat-group-header">
													<div class="slat-group-header-title">
														<h3>Test History</h3>
													</div>
												</div>

												<div class="slat-group-content">


													<?php
                                                $nested = '<label>Score:</label>
                                                68% ';

                                                $slat = array(
                                                    'attributes' => array(
                                                        array('class', array('slat slat-recommendation js-course-slat-1')),
                                                        ),
                                                    'title' => 'Adult Critical Care',
                                                    'meta' => array(
                                                        array(
                                                            'type' => 'Knowledge Assessment',
                                                            ),
                                                        ),
                                                    'action' => array(
                                                        'type' => 'custom',
                                                        'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source js-remove-source-course-1 " href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                        ),
                                                    'nested' => array(
                                                        'hide' => array($nested),
                                                        ),

                                                    );
                                                echo createSlat($slat);

                                                

                                                ?>

												</div>

												<div class="slat-group-footer"></div>
											</div>
										</div>
										<div class="modal-footer">

											<button class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- / Recommendation Modal -->

							<!-- Recommendation Neonatal Modal 2 -->
							<div id="modal-recommendation-2" class="modal fade modal-recommendation" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
											<h4 class="modal-title">Recommendations</h4>
										</div>
										<div class="modal-body">
											<h3><strong>This recommendation was based on: </strong></h3>
											<div class="slat-group">
												<div class="slat-group-header">
													<div class="slat-group-header-title">
														<h3>Test History </h3>
													</div>
												</div>
												<p></p>
												<div class="slat-group-content">


													<?php


                                                $nested = '<label>Score:</label>
                                                80%'
                                                ;

                                                $slat = array(
                                                  'attributes' => array(
                                                      array('class', array('slat slat-recommendation js-course-slat-2')),
                                                      ),
                                                  'title' => 'Neonatal Critical Care',
                                                  'meta' => array(
                                                    array(
                                                        'type' => 'Knowledge Assessment',
                                                        ),
                                                    ),
                                                  'action' => array(
                                                    'type' => 'custom',
                                                    'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source js-remove-source-course-2" href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                    ),
                                                  'nested' => array(
                                                      'hide' => array($nested),
                                                      ),

                                                  );
                                                echo createSlat($slat);

                                                ?>

												</div>

												<div class="slat-group-footer"></div>
											</div>
										</div>
										<div class="modal-footer">

											<button class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

							<!-- / Recommendation Modal -->





							<!-- Recommendation Modal 3 Work History-->
							<div id="modal-recommendation-3" class="modal fade modal-recommendation" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
											<h4 class="modal-title">Recommendations</h4>
										</div>
										<div class="modal-body">
											<h3><strong>Source(s) of recommendation</strong></h3>
											<div class="slat-group">
												<div class="slat-group-header">
													<div class="slat-group-header-title">
														<h3>Work History</h3>
													</div>
												</div>

												<div class="slat-group-content">


													<?php
                                                

                                                $slat = array(
                                                    'attributes' => array(
                                                        array('class', array('slat')),
                                                        ),
                                                    'title' => 'Registered Nurse',
                                                    'meta' => array(
                                                        array(
                                                            'type' => 'Work History Record',
                                                            ),
                                                        ),
                                                    'action' => array(
                                                        'type' => 'custom',
                                                        'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source js-remove-source-work" href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                        ),
                                                  

                                                    );
                                                echo createSlat($slat);

                                                

                                                ?>

												</div>

												<div class="slat-group-footer"></div>
											</div>


										</div>
										<div class="modal-footer">

											<button class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Recommendation Modal 3 -->

							<!-- Recommendation Modal 4 Search History-->
							<div id="modal-recommendation-4" class="modal fade modal-recommendation" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
											<h4 class="modal-title">Recommendations</h4>
										</div>
										<div class="modal-body">
											<h3><strong>Source(s) of recommendation</strong></h3>

											<div class="slat-group">
												<div class="slat-group-header">
													<div class="slat-group-header-title">
														<h3>Search History</h3>
													</div>
												</div>

												<div class="slat-group-content">


													<?php
                                               

                                                $slat = array(
                                                    'attributes' => array(
                                                        array('class', array('slat')),
                                                        ),
                                                    'title' => 'Renal',
                                                    'meta' => array(
                                                        array(
                                                            'type' => 'Search Term',
                                                            ),
                                                        ),
                                                    'action' => array(
                                                        'type' => 'custom',
                                                        'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source js-remove-source-search" href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                        ),
                                                  

                                                    );
                                                echo createSlat($slat);

                                             

                                                ?>

												</div>

												<div class="slat-group-footer"></div>
											</div>
										</div>
										<div class="modal-footer">

											<button class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Recommendation Modal 4 -->

							<!-- Recommendation Modal Adult and Nicu 5-->
							<div id="modal-recommendation-5" class="modal fade modal-recommendation" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
											<h4 class="modal-title">Recommendations</h4>
										</div>
										<div class="modal-body">
											<h3><strong>This recommendation was based on: </strong></h3>
											<div class="slat-group">
												<div class="slat-group-header">
													<div class="slat-group-header-title">
														<h3>Test History</h3>
													</div>
												</div>

												<div class="slat-group-content">


													<?php
                                                $nested = '<label>Score:</label>
                                                68% ';

                                                $slat = array(
                                                    'attributes' => array(
                                                        array('class', array('slat slat-recommendation js-course-slat-1')),
                                                        ),
                                                    'title' => 'Adult Critical Care',
                                                    'meta' => array(
                                                        array(
                                                            'type' => 'Knowledge Assessment',
                                                            ),
                                                        ),
                                                    'action' => array(
                                                        'type' => 'custom',
                                                        'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source js-remove-source-course-1 " href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                        ),
                                                    'nested' => array(
                                                        'hide' => array($nested),
                                                        ),

                                                    );
                                                echo createSlat($slat);

                                                $nested = '<label>Score:</label>
                                                80%'
                                                ;

                                                $slat = array(
                                                    'attributes' => array(
                                                        array('class', array('slat js-course-slat-2 slat-recommendation')),
                                                        ),
                                                    'title' => 'Neonatal Critical Care',
                                                    'meta' => array(
                                                        array(
                                                            'type' => 'Knowledge Assessment',
                                                            ),
                                                        ),
                                                    'action' => array(
                                                        'type' => 'custom',
                                                        'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source  js-remove-source-course-2" href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                        ),
                                                    'nested' => array(
                                                        'hide' => array($nested),
                                                        ),

                                                    );
                                                echo createSlat($slat);

                                                ?>

												</div>

												<div class="slat-group-footer"></div>
											</div>


										</div>
										<div class="modal-footer">

											<button class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Recommendation Modal 5 -->
							<!-- Recommendation Modal 6 Test and Search -->
							<div id="modal-recommendation-6" class="modal fade modal-recommendation" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
											<h4 class="modal-title">Recommendations</h4>
										</div>
										<div class="modal-body">
											<h3><strong>This recommendation was based on: </strong></h3>
											<div class="slat-group">
												<div class="slat-group-header">
													<div class="slat-group-header-title">
														<h3>Test History</h3>
													</div>
												</div>

												<div class="slat-group-content">


													<?php
                                                $nested = '<label>Score:</label>
                                                68% ';

                                                $slat = array(
                                                    'attributes' => array(
                                                        array('class', array('slat slat-recommendation js-course-slat-1')),
                                                        ),
                                                    'title' => 'Adult Critical Care',
                                                    'meta' => array(
                                                        array(
                                                            'type' => 'Knowledge Assessment',
                                                            ),
                                                        ),
                                                    'action' => array(
                                                        'type' => 'custom',
                                                        'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source js-remove-source-course-1 " href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                        ),
                                                    'nested' => array(
                                                        'hide' => array($nested),
                                                        ),

                                                    );
                                                echo createSlat($slat);

                                                $nested = '<label>Score:</label>
                                                80%'
                                                ;

                                                $slat = array(
                                                    'attributes' => array(
                                                        array('class', array('slat js-course-slat-2 slat-recommendation')),
                                                        ),
                                                    'title' => 'Neonatal Critical Care',
                                                    'meta' => array(
                                                        array(
                                                            'type' => 'Knowledge Assessment',
                                                            ),
                                                        ),
                                                    'action' => array(
                                                        'type' => 'custom',
                                                        'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source  js-remove-source-course-2" href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                        ),
                                                    'nested' => array(
                                                        'hide' => array($nested),
                                                        ),

                                                    );
                                                echo createSlat($slat);

                                                ?>

												</div>

												<div class="slat-group-footer"></div>
											</div>
											<div class="slat-group">
												<div class="slat-group-header">
													<div class="slat-group-header-title">
														<h3>Search History</h3>
													</div>
												</div>

												<div class="slat-group-content">


													<?php
                                               

                                                $slat = array(
                                                    'attributes' => array(
                                                        array('class', array('slat slat-recommendation js-search-slat')),
                                                        ),
                                                    'title' => 'Renal',
                                                    'meta' => array(
                                                        array(
                                                            'type' => 'Search Term',
                                                            ),
                                                        ),
                                                    'action' => array(
                                                        'type' => 'custom',
                                                        'content' => '<div class="action "><a class="btn btn-sm btn-default js-remove-source js-remove-source-search" href="#modal-remove-source" data-toggle="modal">Remove</a></div>',
                                                        ),
                                                  

                                                    );
                                                echo createSlat($slat);

                                                

                                               

                                                ?>

												</div>

												<div class="slat-group-footer"></div>
											</div>


										</div>
										<div class="modal-footer">

											<button class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Recommendation Modal 5 -->


							<!-- CE Path Welcome Modal -->

						
							<div id="modal-ce-channel" class="modal modal-lg modal-ce-path-welcome fade" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content " >
										<div class="modal-header " style="background-color:transparent; ">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
											<h1 class="modal-title text-left" ><b>CE</b>Path</h1>
											<h3><i>Featuring Challenge Tracks</i></h3>
										</div>
										<div class="modal-body ">

											<div class="container-fluid">
												<div class="row">
													<div class="col-sm-7">
														<p><b>Challenge</b> your knowledge & receive <b>Recommended</b> learning based on performance </p>

														<p><b>Search</b> for courses by title, by category, or by keyword</p>

														<p><b>Enroll</b> in courses and they will appear on your To Do list</p>

														<p><b>Complete</b> courses for credit and recognition
															<div> <a class="btn btn-focus" href="catalog-ce-channel.php">Get Started <i class="fa fa-caret-right fa-lg"></i></a>
																<label class="checkbox"><input type="checkbox"  name="">Don't show  again </label>
															</div>

													</div>
												</div>
											</div>
										</div>

								
									<div class="modal-footer text-center">


									</div>
								</div>
							</div>
					</div>
					<!-- / CE Path Welcome Modal-->


					<!-- Hide Recommendation Modal -->
					<div id="modal-hideLearning" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
									<h4 class="modal-title">Remove Recommendations</h4>
								</div>
								<div class="modal-body">

									<div class="form-group">
										<label>Remove this course from my recommendations</label>
										<label class="radio"><input type="radio" class="ignore-radio" name="ignore"> Similar Course Completed</label>
										<label class="radio"><input type="radio" class="ignore-radio" name="ignore"> Course does not seem relevant to the assessment questions</label>
										<label class="radio"><input type="radio" class="ignore-radio" name="ignore"> Learning irrelevant to  question topic</label>
										<label class="radio"><input type="radio" class="ignore-radio" name="ignore"> Topic irrelevant to my interests</label>
										<label class="radio"><input type="radio" class="ignore-radio" name="ignore" value="other"> Other</label>
									</div>
									<textarea class="form-control js-ignore-textarea" style="width: 100%;" placeholder="Let us know why you don't like this recommendation"></textarea>
								</div>
								<div class="modal-footer">
									<button class="btn btn-default js-save-ignore" data-dismiss="modal">Save</button>
									<button class="btn btn-default" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<!-- / Hide Recommendation Modal-->


					<!-- Hide Recommendation Modal -->
					<div id="modal-remove-source" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
									<h4 class="modal-title">Remove Source</h4>
								</div>
								<div class="modal-body">

									<div class="form-group">
										<label>Please tell us why you'd like to remove this source</label>
										<label class="radio"><input type="radio" class="ignore-radio" name="ignore">  I am no longer interested in recommendations related to this.</label>

										<label class="radio"><input type="radio" class="ignore-radio" name="ignore" value="other"> Other</label>
									</div>
									<textarea class="form-control js-ignore-textarea" style="width: 100%;" placeholder="Please explain"></textarea>
								</div>
								<div class="modal-footer">
									<button class="btn btn-default js-save-remove" data-dismiss="modal">Save</button>
									<button class="btn btn-default" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<!-- / Hide Recommendation Modal-->

					<?=createFooter($patterns['footer']); ?>
						<?=createPrototypeNav(); ?>
							<?=createSiteScripts(); ?>
								<script src="/scripts/healthstream.catalog.js"></script>
								<script src="/scripts/healthstream.tours/plugin/bootstrap-tour.js"></script>
								<script src="/scripts/healthstream.tours/localization/localization-eng-tour.js"></script>
								<script src="/scripts/healthstream.tours/tours/catalog-tour.js"></script>


								<script>
									$(document).ready(function() {
										$(".learning-radio").change(function() {
											$(".recommended-learning-wrapper").toggle();
											$(".catalog-wrapper").toggle();
											$(".catalog-filter").toggle();
										});
										$('.ignore-radio').change(function() {
											if ($('input[name=ignore]:checked').val() == "other") {
												$(".js-ignore-textarea").show();
											} else {
												$(".js-ignore-textarea").hide();
											}

										});


										$('#modal-hideLearning').on('shown.bs.modal', function(e) {

											$(".js-save-ignore").click(function() {
												var $invoker = $(e.relatedTarget);

												$('#modal-hideLearning').on('hidden.bs.modal', function(e) {
													$invoker.parents(".slat").hide();
												});
											});
										});




										$('#modal-remove-source').on('show.bs.modal', function(e) {
											$('#modal-recommendation-2').modal('hide');
											$('#modal-recommendation-4').modal('hide');
											$('#modal-recommendation').modal('hide');
											$('#modal-recommendation-3').modal('hide');
											$('#modal-recommendation-5').modal('hide');
											$('#modal-recommendation-6').modal('hide');




											var $invoker = $(e.relatedTarget);


											$(".js-save-remove").click(function() {


												if ($invoker.hasClass("js-remove-source-search") == true) {

													$('#modal-remove-source').on('hidden.bs.modal', function(e) {

														$invoker.parents(".slat").hide();
														$(".js-search-slat").removeClass("js-search-slat");
													});

												} else if ($invoker.hasClass("js-remove-source-course-1") == true) {

													$('#modal-remove-source').on('hidden.bs.modal', function(e) {

														$invoker.parents(".slat").hide();
														$(".slat").removeClass("js-course-slat-1");


													});

												} else if ($invoker.hasClass("js-remove-source-course-2") == true) {

													$('#modal-remove-source').on('hidden.bs.modal', function(e) {

														$invoker.parents(".slat").hide();
														$(".slat").removeClass("js-course-slat-2");


													});

												} else if ($invoker.hasClass("js-remove-source-work") == true) {

													$('#modal-remove-source').on('hidden.bs.modal', function(e) {

														$invoker.parents(".slat").hide();
														$(".slat").removeClass("js-work-slat");


													});

												}




											});

										});







									});
								</script>
								<?=createSiteEnd(); ?>