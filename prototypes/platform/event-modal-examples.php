<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Event Modal Examples';
$patterns['header']['mainNavActive'] = false;
$patterns['focus']['title'] = 'Event Modal Examples';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>
<div class="layout layout-min">
    <div class="container">
        <section class="section section-main section-box">
            <?php

            $slat = array(
                 'attributes' => array(
                     array('class',array('slat')),
                 ),
                'title' => 'Example 1 - Bullet Points',
                'meta' => array(),
                'action' => array(
                    'type' => 'custom',
                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="example-1">View <i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                )
            );
            echo createSlat($slat);

            $slat = array(
                 'attributes' => array(
                     array('class',array('slat')),
                 ),
                'title' => 'Example 2 - Paragraph',
                'meta' => array(),
                'action' => array(
                    'type' => 'custom',
                    'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#" id="example-2">View <i class="fa fa-fw fa-chevron-right visible-xs"></i></a></div>',
                )
            );
            echo createSlat($slat);

            ?>
        </section>
    </div>
</div>
<!-- /layout -->


<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>


<style>
#modal-interrupt ul {
    padding-left: 20px;
}
</style>


<script type="text/javascript">
    $(function(){
        $('#example-1').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You are saving student grades',
                text: '<ul><li>Verify that all grades are correct.</li><li>Once saved, students with passing grades will be able to complete their evaluation and have their expiration dates on NRP Provider eCards advanced.</li><li>Grades SHOULD NOT be changed after saving.</li><li>Once graded, a student cannot be dropped from the roster.</li><li>If any grades are changed from Pass to Fail/No-Show, you are responsible for contacting both the student and the AAP.</li><li>Saving grades does not finalize the roster. The roster must still be submitted to receive credit for teaching the course.</li></ul>',
                actions: [
                    {
                        type: 'success',
                        label: 'Submit to AAP'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });
        $('#example-2').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You are saving student grades',
                text: 'Verify that all grades are correct. Once saved, students with passing grades will be able to complete their evaluation and have their expiration dates on NRP Provider eCards advanced. Grades SHOULD NOT be changed after saving. Once graded, a student cannot be dropped from the roster. If any grades are changed from Pass to Fail/No-Show, you are responsible for contacting both the student and the AAP. Saving grades does not finalize the roster. The roster must still be submitted to receive credit for teaching the course.',
                actions: [
                    {
                        type: 'success',
                        label: 'Submit to AAP'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });
    });
</script>
<?= createSiteEnd(); ?>

