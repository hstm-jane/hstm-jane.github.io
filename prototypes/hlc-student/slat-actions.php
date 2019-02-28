<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Slat Action Examples';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'Slat Action Examples';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <section class="section">

                        <?php

                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'Nested Slat with Single Action',
                                'meta' => array(
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Action',
                                    'link' => '#',
                                ),
                            ));
                            $slat = array(
                                'title' => 'Slat with Single Action',
                                'meta' => array(
                                    array(
                                        'type' => 'Example',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Action',
                                    'link' => '#',
                                ),
                                'nested' => array(
                                    'show' => array($nested)
                                ),
                            );

                            echo createSlat($slat);


                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'Nested Slat with Single Action',
                                'meta' => array(
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-single',
                                    'content' => 'Action',
                                    'link' => '#',
                                ),
                            ));
                            $slat = array(
                                'title' => 'Slat with Single Action [Forms]',
                                'meta' => array(
                                    array(
                                        'type' => 'Example',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action">
                                            <form>
                                                <button class="btn btn-sm btn-default">Action <i class="fa fa-fw fa-chevron-right visible-xs"></i>
                                                </button>
                                            </form>
                                        </div>
                                    ',
                                ),
                                'nested' => array(
                                    'show' => array($nested)
                                ),
                            );

                            echo createSlat($slat);


                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'Nested Slat with Split Action',
                                'meta' => array(
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'Primary',
                                            'link' => '#'
                                        ),
                                        array(
                                            'content' => 'Secondary',
                                            'link' => '#',
                                        ),
                                        array(
                                            'content' => 'Secondary',
                                            'link' => '#',
                                        )
                                    )
                                ),
                            ));
                            $slat = array(
                                'title' => 'Slat with Split Action',
                                'meta' => array(
                                    array(
                                        'type' => 'Example',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-split',
                                    'options' => array(
                                        array(
                                            'content' => 'Primary',
                                            'link' => '#'
                                        ),
                                        array(
                                            'content' => 'Secondary',
                                            'link' => '#',
                                        ),
                                        array(
                                            'content' => 'Secondary',
                                            'link' => '#',
                                        )
                                    )
                                ),
                                'nested' => array(
                                    'show' => array($nested)
                                ),
                            );
                            echo createSlat($slat);


                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'Nested Slat with Split Action',
                                'meta' => array(
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action action-split">
                                            <form id="myForm2" onSubmit="alert(\'Submitting Form 2\');return false;"></form>
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-sm hidden-xs" data-submit="myForm2">Primary</button>
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><form><a href="#">Primary</a></form></li>
                                                    <li><form><a href="#">Secondary</a></form></li>
                                                    <li><form><a href="#">Secondary</a></form></li>
                                                </ul>
                                            </div>
                                        </div>
                                    ',
                                ),
                            ));
                            $slat = array(
                                'title' => 'Slat with Split Action [Forms]',
                                'meta' => array(
                                    array(
                                        'type' => 'Example',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action action-split">
                                            <form id="myform1" onSubmit="alert(\'Submitting Form 1\');return false;"></form>
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-sm hidden-xs" data-submit="myform1">Primary</button>
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><form><a href="#">Primary</a></form></li>
                                                    <li><form><a href="#">Secondary</a></form></li>
                                                    <li><form><a href="#">Secondary</a></form></li>
                                                </ul>
                                            </div>
                                        </div>
                                    ',
                                ),
                                'nested' => array(
                                    'show' => array($nested)
                                ),
                            );
                            echo createSlat($slat);


                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'Nested Slat with Multi Action',
                                'meta' => array(
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-multi',
                                    'options' => array(
                                        array(
                                            'content' => 'Action',
                                            'link' => '#'
                                        ),
                                        array(
                                            'content' => 'Action',
                                            'link' => '#'
                                        ),
                                        array(
                                            'content' => 'Action',
                                            'link' => '#'
                                        )
                                    )
                                ),
                            ));
                            $slat = array(
                                'title' => 'Slat with Multi Action',
                                'meta' => array(
                                    array(
                                        'type' => 'Example',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'action-multi',
                                    'options' => array(
                                        array(
                                            'content' => 'Action',
                                            'link' => '#'
                                        ),
                                        array(
                                            'content' => 'Action',
                                            'link' => '#'
                                        ),
                                        array(
                                            'content' => 'Action',
                                            'link' => '#'
                                        )
                                    )
                                ),
                                'nested' => array(
                                    'show' => array($nested)
                                ),
                            );
                            echo createSlat($slat);


                            $nested = createSlat(array(
                                'attributes' => array(
                                    array('class',array('slat')),
                                ),
                                'title' => 'Nested Slat with Multi Action',
                                'meta' => array(
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action action-multi">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    Options <i class="fa fa-caret-down visible-xs"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><form><a href="#">Action</a></form></li>
                                                    <li><form><a href="#">Action</a></form></li>
                                                    <li><form><a href="#">Action</a></form></li>
                                                </ul>
                                            </div>
                                        </div>
                                    ',
                                ),
                            ));
                            $slat = array(
                                'title' => 'Slat with Multi Action [Form]',
                                'meta' => array(
                                    array(
                                        'type' => 'Example',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Label:',
                                        'value' => 'Value',
                                    ),
                                    array(
                                        'label' => 'Due: ',
                                        'value' => date('M d, Y'),
                                        'attributes' => array(
                                            array('class','meta-callout'),
                                        )
                                    )
                                ),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action action-multi">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    Options <i class="fa fa-caret-down visible-xs"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><form><a href="#">Action</a></form></li>
                                                    <li><form><a href="#">Action</a></form></li>
                                                    <li><form><a href="#">Action</a></form></li>
                                                </ul>
                                            </div>
                                        </div>
                                    ',
                                ),
                                'nested' => array(
                                    'show' => array($nested)
                                ),
                            );
                            echo createSlat($slat);

                        ?>

                        <br><br><br>

                        <!-- MATT EMERSON'S GENERATED SLATS -->

                        <?php

                            $slat = array(
                                'title' => '<a href="/HLC2/CourseDetails?courseInstanceId=89a174f3-6909-47f5-8a71-290b2b311cfa">Nursing</a>',
                                'meta' => array(),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action-split action">
                                            <div class="btn-group">
                                                <form action="/HLC2/CourseDetails/UnEnroll?courseInstanceId=89a174f3-6909-47f5-8a71-290b2b311cfa" method="post"><input name="__RequestVerificationToken" type="hidden" value="74IwYzjiCmILRtApmr4zY8OEi2hr2ENK1MKaqFmTZNVuf28dND7w3VNYXE926o26aijXXhznP4V6A9nf9iQn1sxsGUJoQurriyqRk2os-Mk1" /><button class="btn hidden-xs btn-sm btn-default" type="submit">Unenroll</button>
                                                </form>
                                                <a class="dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" href="#"><i class="fa-caret-down fa"></i></a>
                                                <ul class="dropdown-menu-right dropdown-menu">
                                                    <li><a href="/HLC2/CourseDetails?courseInstanceId=89a174f3-6909-47f5-8a71-290b2b311cfa">Resume</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    ',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<form action="/HLC2/CourseDetails/Enroll?courseId=89a174f3-6909-47f5-8a71-290b2b311cfa&amp;organizationNodeId=89a174f3-6909-47f5-8a71-290b2b311cfa" method="post"><input name="__RequestVerificationToken" type="hidden" value="nCac3VOqx6JLlZUKuapIpvMFVnuETOjAw4K4GkkXw-HskJoLJBFUTJgYe7uZEN2wGGqREiCoX-CTp23B27kreXG8YIXoOvJanMBua1Zm05A1" /><a class="js-post" href="javascript:;">Nursing 101</a></form>',
                                'meta' => array(),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action-split action">
                                            <div class="btn-group">
                                                <a class="btn hidden-xs btn-sm btn-default" href="/HLC2/CourseDetails?courseInstanceId=89a174f3-6909-47f5-8a71-290b2b311cfa">Preview</a><a class="dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" href="#"><i class="fa-caret-down fa"></i></a>
                                                <ul class="dropdown-menu-right dropdown-menu">
                                                    <li>
                                                        <form action="/HLC2/CourseDetails/UnEnroll?courseInstanceId=89a174f3-6909-47f5-8a71-290b2b311cfa" method="post"><input name="__RequestVerificationToken" type="hidden" value="r8yMLB75tBbu_SLLgQLPOGA21WWx3z12adJNRODFRkiMivsaXGlVwumG4SFaxKwlqNAHSehxhJFzfJnqNkaCgyyjEGdtY0m5_5ahR-fr5pM1" /><button type="submit">Enroll</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    ',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<a href="/HLC2/CourseDetails?courseInstanceId=89a174f3-6909-47f5-8a71-290b2b311cfa">Nursing 101</a>',
                                'meta' => array(),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action-multi action">
                                            <div class="btn-group">
                                                <a class="dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" href="#">Options <i class="visible-xs fa-caret-down fa"></i></a>
                                                <ul class="dropdown-menu-right dropdown-menu">
                                                    <li><a href="/HLC2/CourseDetails?courseInstanceId=89a174f3-6909-47f5-8a71-290b2b311cfa">Resume</a>
                                                    </li>
                                                </ul>
                                           </div>
                                        </div>
                                    ',
                                )
                            );
                            echo createSlat($slat);

                            $slat = array(
                                'title' => '<form action="/HLC2/CourseDetails/Enroll?courseId=89a174f3-6909-47f5-8a71-290b2b311cfa&amp;organizationNodeId=89a174f3-6909-47f5-8a71-290b2b311cfa" method="post"><input name="__RequestVerificationToken" type="hidden" value="j4PPWV3MZgUQc8FeLSdz_-qDD0zBqNWNPq3Pb6eXcsyHSkznWR_ZVjpqH6n09WtjKZ-2vNnDy3TrI-7I_nRw4XVr5AH1vBBGDwA3RGqYJ6I1" /><a class="js-post" href="javascript:;">Nursing 101</a></form>',
                                'meta' => array(),
                                'action' => array(
                                    'type' => 'custom',
                                    'content' => '
                                        <div class="action-multi action">
                                            <div class="btn-group">
                                                <a class="dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" href="#">Options <i class="visible-xs fa-caret-down fa"></i></a>
                                                <ul class="dropdown-menu-right dropdown-menu">
                                                    <li>
                                                        <form action="/HLC2/CourseDetails/UnEnroll?courseInstanceId=89a174f3-6909-47f5-8a71-290b2b311cfa" method="post"><input name="__RequestVerificationToken" type="hidden" value="fFenkpY2Hvx8bjDj8PQ3PzL2yjsm9xevaFrqDngauQuEouBznKHN8GQxpDXBMCIFffaQQZtUyYVPmjd_a6HKXhYRVMtUVI0duBiNU0_vWXU1" /><button type="submit">Enroll</button></form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    ',
                                )
                            );
                            echo createSlat($slat);

                        ?>

                        <!-- END MATT EMERSON'S GENERATED SLATS -->

                        <br><br><br>

                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar() ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('a[href="#"]').click(function(e){
            e.preventDefault();
        });
        $('button[data-submit]').click(function(){
            $('#' + $(this).attr('data-submit')).submit();
        })
    });
</script>
<?= createSiteEnd(); ?>