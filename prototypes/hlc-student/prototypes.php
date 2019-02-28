<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Prototypes';
$patterns['header']['mainNavActive'] = 'none';
$patterns['focus']['title'] = 'All Prototypes';
$patterns['focus']['meta_secondary'] = array(
    array(
        'label' => 'Number of Prototypes:',
        'value' => '1',
    ),
    
);

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<style>
.section-main .section {
    margin-top: 0px;
}
.row {
    padding-left: 10px;
    padding-right: 10px ;
}
.row > div {
    padding: 5px;
}
.slat-default {
    padding: 0px !important;
}
.header {
    padding: 10px;
    margin: 7px 0;
}
.sort-date-created, .sort-date, .sort-name {
    font-weight: bold;
    cursor: pointer;
}
.name, .sort-name {
    width:65%;
    float:left;
}
.date, .sort-date{
    width:35%;
    float:left;
}
.date-created, .sort-date-created{
    width: 22%;
    float:left;
}
</style>
<div class="layout">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="section section-main section-box" data-equalize="layout-columns">
                    <section class="section">
                        <div class="header">
                            <div class="slat-default">
                                <div class="row">
                                    <div class="sort-name" data-direction="desc">Page File Name</div>
                                    <!--<div class="sort-date-created" data-direction="asc">Date Created</div>-->
                                    <div class="sort-date" data-direction="asc">Last Modified</div>
                                </div>
                            </div>
                        </div>
            <?php

            $iterator = new FilesystemIterator(getcwd());
            foreach($iterator as $fileInfo){
                if($fileInfo->isFile()){
                    if ($fileInfo->getExtension() == 'php'){
                        $mTime = new DateTime();
                        $mTime->setTimestamp($fileInfo->getMTime()); 
                        $mTime->setTimeZone(new DateTimeZone('America/Chicago'));
                        // $cTime = new DateTime();
                        // $cTime->setTimestamp($fileInfo->getCTime()); ?>

                            <div class="slat page">
                            <div class="slat-default">
                                <div class="row">
                                    <div class="name"><a href="<?=$fileInfo->getFileName()?>" class="title" target="_blank"><?=$fileInfo->getFileName()?></a></div>
                                    <div class="date"><?=$mTime->format('Y/m/d h:i:s a')?></div>
                                    <!--<div class="date"><?//=$cTime->format('m/d/Y h:i:s a')?></div>-->
                                </div>
                            </div>
                        </div>
                    <?php  
                    }
                }
            }
            ?>
                    </section>
                </section><!-- /section-main -->
            </div><!-- /column -->

            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <section class="section section-box">
                        <h3>Note</h3>
                        <p>This is just a pull from the directory of all files.</p>
                        <p>You can sort by page name and date modified</p>
                    </section>
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
$(document).ready(function(){
    tinysort('.page',{selector:'.name'});

    $('.sort-date').click(function() {
        tinysort('.page',{selector:'.date',order:$(this).data('direction')});
        if ($(this).data('direction') == 'asc') {
            $(this).data('direction','desc');
         }       
         else {
              $(this).data('direction','asc');
         }
    });
    $('.sort-date-created').click(function() {
        tinysort('.page',{selector:'.date-created',order:$(this).data('direction')});
        if ($(this).data('direction') == 'asc') {
            $(this).data('direction','desc');
         }       
         else {
              $(this).data('direction','asc');
         }
    });
    $('.sort-name').click(function() {
        tinysort('.page',{selector:'.name',order:$(this).data('direction')});
        if ($(this).data('direction') == 'asc') {
            $(this).data('direction','desc');
         }       
         else {
              $(this).data('direction','asc');
         }
    });
    $('.focus .meta-value').text($('.page').length);
    
});
</script>
<?= createSiteEnd(); ?>