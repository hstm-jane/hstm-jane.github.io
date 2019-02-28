<?php

function include_filtersidebar() {

	?>
    <section class="section section-refinement-options equalized section-side-panels">
        <div class="panel-container">
            <h2>Filter Results</h2>
            <hr>
            <!-- <h3>Search Terms</h3> -->
            <div class="tag-group">
                <a href="#" class="tag">State<i class="fa fa-times"></i></a>
                <a href="#" class="tag">Country<i class="fa fa-times"></i></a>
            </div>
            <hr class="hidden-xs">
        </div>
        <div class="panel-group" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <strong>Date Range</strong>
                    </h4>
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>From: </label>
                            <input type="text" class="form-control" placeholder="1/14/2015">
                        </div>
                        <div class="form-group">
                            <label>To: </label>
                            <input type="text" class="form-control" placeholder="2/14/2015">
                        </div>
                    </div>
                </div>
            </div>
            <!-- panel one end -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="collapsed tg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <strong>Building</strong><i class="indicator fa fa-chevron-down pull-right"></i>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="resource-picker">
                            <div class="resource-picker-search">
                                <input type="text" class="form-control resource-picker-input" placeholder="Search" data-type="people" tabindex="4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- panel two end -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                <div class="row">
                <div class="col-xs-3">
                    <h4 class="panel-title">
                        <a class="collapsed tg" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Location</strong><span class="pull-right" style="min-width:19px"><i class="indicator fa fa-chevron-down"></i></span>
                        </a>
                    </h4>
                    </div>
                    </div>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label>Country: </label>
                                <input type="text" class="form-control" placeholder="country">
                            </div>
                            <div class="form-group">
                                <label>State: </label>
                                <input type="text" class="form-control" placeholder="state">
                            </div>
                            <div class="form-group">
                                <label>City: </label>
                                <input type="text" class="form-control" placeholder="city">
                            </div>
                            <div class="form-group">
                                <label>Zipcode: </label>
                                <input type="text" class="form-control" placeholder="zip">
                            </div>
                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- panel three end -->
        </div>
    </section>
    <?php
}
?>
