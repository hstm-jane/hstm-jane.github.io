<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Error';
$patterns['header']['mainNavActive'] = false;
$patterns['footer']['focus'] = false;

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<div class="focus focus-error focus-error-message">
    <div class="container">
        <div class="primary">
            <div class="row">
                <div class="col-md-offset-5 col-md-7 col-lg-offset-5 col-lg-7">
                    <section class="section">
                        <h1>Looks like something is&nbsp;broken</h1>
                        <p>Help us find the problem by describing what you were trying to do.</p>
                        <div class="well well-sm">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Email <small>Optional</small></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Phone <small>Optional</small></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <button class="btn btn-default btn-block" id="btn-message" data-states="Thank You">Submit</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="index.php" class="btn btn-default btn-block">View my To Do list</a>
                            </div>
                            <div class="col-sm-6">
                                <a href="completed.php" class="btn btn-default btn-block">View my Transcript</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(function(){
        $('#btn-message').on('click', function () {
            var $btn = $(this),
                messages = $btn.attr('data-states').split('|'),
                delay = 1500;

            function updateText(text,delay){
                setTimeout(function(){
                    $('#btn-message').text(text);
                }, delay);
            }

            $btn.css({'outline':'none'}).closest('.section').find('button, textarea, input').attr('disabled','disabled');

            // do something ajaxy

            for ( var i = 0; i < messages.length; i++) {
                updateText(messages[i],delay * i);
            }
        });
    });
</script>
<?= createSiteEnd(); ?>