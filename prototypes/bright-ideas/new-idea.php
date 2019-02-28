<?php

include "includes/helpers.php";

$options = json_decode('{
    "head": {
        "title" : "Welcome to Bright Ideas"
    }

}',true);

include_site_start($options);
$patterns['header']['mainNavActive'] = '';
echo createHeader($patterns['header']);
$focus = array( 'title' => 'Submit New Idea', ); echo createFocus($focus);
?>
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section section-main section-box" data-equalize="layout-columns">
                        <section class="section">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label " for="name">
                                            Facility
                                            <span class="view-facility">
                                                <a id="lnkSortBy" href="#" class="pull-right lnkSortBy">View Only My Facility</a>
                                            </span>
                                        </label>
                                        <input class="form-control" id="name" name="name" placeholder="All Facilities" type="text" disabled/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="text2">
                                            Name
                                        </label>
                                        <select class="form-control slat-basic" id="slat-basic" data-placeholder="Tracy Yowell">
                                            <option></option>
                                            <?php $i = 1; while ( $i <= 100) { ?>
                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Name <?= $i ?>">Name
                                                <?= $i ?>
                                            </option>
                                            <?php $i++; } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="text2">
                                            Delegated To
                                        </label>
                                        <select class="form-control slat-basic" id="slat-basic" data-placeholder="1000000 - Nursing Information Services">
                                            <option></option>
                                            <?php $i = 1; while ( $i <= 100) { ?>
                                            <option data-dept="Facility" data-userid="user<?= $i ?>" value="Department <?= $i ?>">Department
                                                <?= $i ?>
                                            </option>
                                            <?php $i++; } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label " for="tel">
                                            Phone
                                        </label>
                                        <input class="form-control" id="tel" name="tel" placeholder="222-222-2222" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label requiredField" for="email1">
                                            Email (optional)
                                        </label>
                                        <input class="form-control" id="email1" name="email1" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label " for="Implement">
                                            Implement Type
                                        </label>
                                        <select class="select form-control" id="Implement" name="Implement">
                                            <option value="81">Quality</option>
                                            <option selected="selected" value="82">Teamwork</option>
                                            <option value="83">Financial</option>
                                            <option value="84">Innovation</option>
                                            <option value="85">Customer Service</option>
                                            <option value="86">Safety</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="row">
                                <!-- Select Basic -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="selectcosts">Cost Savings
                                        </label>
                                        <select id="selectcosts" name="selectcosts" class="form-control selectcosts">
                                            <option value="0"></option>
                                            <option value="1">No</option>
                                            <option value="2">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="selecthours">Time Savings?
                                        </label>
                                        <select id="selecthours" name="selecthours" class="form-control selecthours">
                                            <option value="0"></option>
                                            <option value="1">No</option>
                                            <option value="2">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="selectbasic">Safety Issue
                                        </label>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                            <option value="0"></option>
                                            <option value="1">No</option>
                                            <option value="2">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="selectbasic">Success Story
                                        </label>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                            <option value="0"></option>
                                            <option value="1">No</option>
                                            <option value="2">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div id="dollars" class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="dollars">
                                        <span class="input-group-addon">dollars / year</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div id="hours" class="input-group">
                                        <span class="input-group-addon">#</span>
                                        <input type="text" class="form-control" aria-label="Total Hours" placeholder="hours">
                                        <span class="input-group-addon">hours / year</span>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label " for="message">
                                            Idea Name
                                        </label>
                                        <textarea class="name-area form-control" cols="20" id="message" name="message" rows="1"></textarea>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <p>
                                                    <div class="charfield" id="charfield">
                                                        <span class="pleaseNote">Please Note:</span> The Idea Name field is limited to 55 characters.
                                                    </div>
                                                </p>
                                            </div>
                                            <div class="col-xs-3">
                                                <p>
                                                    <div class="charNumName" id="charNumName"></div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="message">
                                    Brief Description of Your Idea (One Sentence)
                                </label>
                                <textarea class="description-area form-control" cols="40" id="message" name="message" rows="1"></textarea>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <p>
                                            <div class="charfield" id="charfield">
                                                <span class="pleaseNote">Please Note:</span> The Brief Description field is limited to 255 characters.
                                            </div>
                                        </p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>
                                            <div class="charNumDes" id="charNumDes"></div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="textarea">
                                    Benefits of Your Idea
                                </label>
                                <textarea class="benefits-area form-control" cols="40" id="textarea" name="textarea" rows="10"></textarea>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <p>
                                            <div class="charfield" id="charfield">
                                                <span class="pleaseNote">Please Note:</span> The Benefits field is limited to 2500 characters. If you need to input more information, please use additional comments / Instructions section.
                                            </div>
                                        </p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>
                                            <div class="charNumBen" id="charNumBen"></div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="textarea1">
                                    Additional Comments / Instructions
                                </label>
                                <textarea class="comment-area form-control" cols="40" id="textarea1" name="textarea1" rows="10"></textarea>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <p>
                                            <div class="charfield" id="charfield">
                                                <span class="pleaseNote">Please Note:</span> The Additional comments field is limited to 4000 characters.
                                            </div>
                                        </p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>
                                            <div class="charNumCom" id="charNumCom"></div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $stickybar = array(
                                    'sets' => array(
                                        array(
                                            'position' => 'left',
                                            'classes' => array('visible-xs','visible-sm'),
                                            'html' => '
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Submit <i class="fa fa-caret-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active"><a href="#" id="growl-idea-success">Submit New Idea</a></li>
                                                        <li><a href="#" id="growl-implement-success">Submit and Implement Idea</a></li>
                                                    </ul>
                                                </div>
                                                <button class="btn btn-default">Cancel</button>
                                            ',
                                        ),
                                        array(
                                            'position' => 'left',
                                            'classes' => array('visible-md','visible-lg'),
                                            'html' => '
                                                <a class="btn btn-success" href="#" id="growl-idea-success">Submit New Idea</a>
                                                <a class="btn btn-success" href="#" id="growl-implement-success">Submit and Implement Idea</a>
                                                <button class="btn btn-default">Cancel</button>
                                            ',
                                        ),
                                    ),
                                );
                                echo createStickybar($stickybar);
                            ?>

                        </section>

                    </section>
                    <!-- /section-main -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /layout -->
    <?=
    createFooter($patterns['footer']);
    include_site_scripts($options);
    ?>
        <script>
        (function(window, $) {
            'use strict';

            window.HealthStream = window.HealthStream || {};
            var healthStream = window.HealthStream;

            healthStream.bright = {};

            healthStream.bright.hidden = function() {
                    $("#dollars").hide();
                    $("#hours").hide();

                    // toggle dollars
                    $('select.selectcosts').on('change', function(e) {
                        if ($('#selectcosts').val() == 2) {
                            $("#dollars").show();
                        } else {
                            $("#dollars").hide();
                        }
                    });

                    // toggle hours
                    $('select.selecthours').on('change', function(e) {
                        if ($('#selecthours').val() == 2) {
                            $("#hours").show();
                        } else {
                            $("#hours").hide();
                        }
                    });

                },

                healthStream.bright.charCount = function() {
                    $('textarea.name-area').keyup(function() {
                        var max = 55;
                        var charTen = max - 10;
                        var len = $(this).val().length;

                        if (len <= charTen) {
                            $('.charNumName').css("color", "black");
                        } else {
                            $('.charNumName').css("color", "red");
                        }


                        if (len > max) {
                            var charNeg = len - max;
                            $('.charNumName').text('-' + charNeg + ' characters remaining');
                        } else {
                            var char = max - len;
                            $('.charNumName').text(char + ' characters remaining');
                        }

                    })
                    $('textarea.comment-area').keyup(function() {
                        var max = 4000;
                        var charTen = max - 10;
                        var len = $(this).val().length;

                        if (len <= charTen) {
                            $('.charNumCom').css("color", "black");
                        } else {
                            $('.charNumCom').css("color", "red");
                        }


                        if (len > max) {
                            var charNeg = len - max;
                            $('.charNumCom').text('-' + charNeg + ' characters remaining');
                        } else {
                            var char = max - len;
                            $('.charNumCom').text(char + ' characters remaining');
                        }
                        $('.charfieldCom').show();
                    });
                    $('textarea.benefits-area').keyup(function() {
                        var max = 2500;
                        var charTen = max - 10;
                        var len = $(this).val().length;

                        if (len <= charTen) {
                            $('.charNumBen').css("color", "black");
                        } else {
                            $('.charNumBen').css("color", "red");
                        }
                        if (len > max) {
                            var charNeg = len - max;
                            $('.charNumBen').first().text('-' + charNeg + ' characters remaining');
                        } else {
                            var char = max - len;
                            $('.charNumBen').text(char + ' characters remaining');
                        }
                    });
                    $('textarea.description-area').keyup(function() {
                        var max = 255;
                        var charTen = max - 10;
                        var len = $(this).val().length;

                        if (len <= charTen) {
                            $('.charNumDes').css("color", "black");
                        } else {
                            $('.charNumDes').css("color", "red");
                        }


                        if (len > max) {
                            var charNeg = len - max;
                            $('.charNumDes').text('-' + charNeg + ' characters remaining');
                        } else {
                            var char = max - len;
                            $('.charNumDes').text(char + ' characters remaining');
                        }
                    });
                },
                healthStream.bright.select2 = function() {
                    function formatBasic(option) {
                        var userid = $(option.element).data('userid');
                        var dept = $(option.element).data('dept');
                        if (!option.id) return option.text; // optgroup
                        return '<div class="slat slat-select2"><div class="title">' + option.text + ' <span></span></div><ul class="meta"><li><span class="meta-label">Example:</span><span class="meta-value">' + dept + '</span></li></ul></div>';
                    }


                    $('.slat-basic').select2({
                        minimumInputLength: 1,
                        formatResult: formatBasic,
                        escapeMarkup: function(m) {
                            return m;
                        },
                        dropdownCssClass: 'select2-slats'
                    });
                },
                healthStream.bright.growl = function() {
                    $('#growl-idea-success, #growl-implement-success').click(function(e) {
                        e.preventDefault();
                        HealthStream.utilities.growl({
                            type: 'success',
                            title: 'Success',
                            text: '%3Cdl%20class%3D%22gritter-class%22%3E%0A%3Cdt%3ENew%20Bright%20Idea%20MHS15.8367%20Submitted Successfully',
                            sticky: true
                        });
                    });
                },
                healthStream.bright.toggleText = function() {

                    $(".lnkSortBy").click(function() {
                        //$(".widget_body_type").slideToggle("slow");
                        ($(".lnkSortBy").text() === "View Only My Facility") ? $(".lnkSortBy").text("All Facilities"): $(".lnkSortBy").text("View Only My Facility");
                    });
                }


            $(window).on('load', function() {
                healthStream.bright.hidden();
                healthStream.bright.charCount();
                healthStream.bright.select2();
                healthStream.bright.growl();
                healthStream.bright.toggleText();
            });


        }(window, jQuery));
        </script>
        <?php
include_site_end($options);
?>
