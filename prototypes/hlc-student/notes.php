<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'My Notes';
$patterns['header']['mainNavActive'] = 'profile';
$patterns['focus']['type'] = 'search';
$patterns['focus']['title'] = 'My Notes';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

<div class="layout layout-search">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <section class="section section-box section-main" data-equalize="layout-columns">
                    <section class="section">
                        <h2>Results <small>Showing 1-10 of 15</small></h2>
                        <?php

                        $content = '
                            <section class="section">
                                <h5>Detail</h5>
                                <p>This is a longer form area for the note detail. The text is input into a textarea without any wysiwyg controls but seems to be able to hold a large amount of text.</p>
                            </section>
                            <section class="section">
                                <h5>Attachments</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-paperclip"></i> <a href="#">This is a document</a></li>
                                </ul>
                            </section>
                        ';
                        $slat = array(
                            'title' => 'This is my note',
                            'meta' => array(
                                array(
                                    'label' => 'Regarding:',
                                    'value' => 'Stephanie Juniper',
                                ),
                                array(
                                    'label' => 'Updated: ',
                                    'value' => 'Mar 1, 2014 at 2:13pm',
                                    'attributes' => array(
                                        array('class','meta-callout'),
                                    )
                                ),

                            ),
                            'action' => array(
                                'type' => 'custom',
                                'content' => '<div class="action"><a class="btn btn-sm btn-default" href="#modal-note-edit" data-toggle="modal">Manage <i class="fa fa-fw fa-pencil visible-xs"></i></a></div>',
                            ),
                            'nested' => array(
                                'hide' => array($content),
                            )
                        );
                        echo createSlat($slat);

                        echo createSlat($slat);

                        echo createSlat($slat);

                        echo createSlat($slat);

                        echo createSlat($slat);

                        ?>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'position' => 'left',
                                    'html' => '<a href="#modal-note-add" data-toggle="modal" class="btn btn-success">Add Note</a>',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('hidden-xs','hidden-sm'),
                                    'html' => '
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Results 1-10 of 15 <i class="fa fa-caret-up"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="#">10 per page</a></li>
                                                <li><a href="#">50 per page</a></li>
                                                <li><a href="#">Show all</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                                array(
                                    'position' => 'right',
                                    'classes' => array('visible-xs','visible-sm'),
                                    'html' => '
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </section><!-- /section-main -->
            </div><!-- /column -->
            <div class="col-md-3">
                <section class="section section-sidebar" data-equalize="layout-columns">
                    <?php include_sidebar(); ?>
                </section><!-- /section-sidebar -->
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /layout -->

<?php
include ('includes/modals/_modal-note-add.php');
include ('includes/modals/_modal-note-edit.php');
include ('includes/modals/_modal-documents.php'); 
include ('includes/modals/_modal-document-add.php');
?>



<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    $(function() {
        var validobj = $('#AddNewNote').validate({
               errorClass: 'help-block',
        
              highlight: function (element, errorClass, validClass) {
                   var elem = $(element);
                   elem.parents('.form-group').addClass('has-error');
               },

               unhighlight: function (element, errorClass, validClass) {
                   var elem = $(element);
                   elem.parents('.form-group').removeClass('has-error');
               }, 
               submitHandler: function(form) {
                   $('#modal-note-add').modal('hide');
                 }
           });


      



       

        $("#modal-note-add").on('shown.bs.modal', function() {
           handleNoteTypeChange($('input[name=type]:checked').val());
        });

        $('input[name=type]').change(function() {
            handleNoteTypeChange($(this).val());
        });
        $(document).on('select2-opening', function (arg) {
               var elem = $(arg.target);
               if ($('#s2id_' + elem.attr('id') + ' ul').parents('.form-group').hasClass('has-error')) {
                    //jquery checks if the class exists before adding.
                   $('.select2-drop ul').addClass('has-error');
               } else {
                   $('.select2-drop ul').removeClass('has-error');
               }
           });

         // TEMPLATE FOR THE SELECT2 RESULTS
            function formatEmployee(option) {
                var aff = $(option.element).data('aff');
                var dept = $(option.element).data('dept');
                var jobtitle = $(option.element).data('jobtitle');
                console.log(jobtitle);
                if (!option.id) return option.text; // optgroup
                return '<div class="slat slat-select2">' + 
                '<div class="title">' + option.text + '</div>' + 
                '   <ul class="meta">' + 
                '      <li>' + 
                '          <span class="meta-label">Affiliation:</span>' + 
                '          <span class="meta-value">' + aff + '</span>' + 
                '       </li>' + 
                '       <li>' + 
                '           <span class="meta-label">Department:</span>' + 
                '           <span class="meta-value">' + dept + '</span>' + 
                '       </li>' + 
                '      <li1>' + 
                '          <span class="meta-label">Job Title:</span>' + 
                '          <span class="meta-value">' + jobtitle + '</span>' + 
                '       </li>' + 
                '   </ul>' + 
                '</div>';
            }

            // INITIALIZE SELECT2
            $('.js-employee-list select').select2({
                // minimumInputLength: 1,
                formatResult: formatEmployee,
                escapeMarkup: function(m) { return m; },
                dropdownCssClass: 'select2-slats',
                minimumInputLength: 2
            });

            // WHEN VALUE CHANGES, SWITCH TO SLAT
            $('.js-employee-list').on('change select2-close', 'select', function(){
                var $list = $(this).closest('.js-employee-list'),
                    $selection = $list.siblings('.js-employee-selection');

                if ( $list.find('option:selected').val() !== '' ) {
                    $selection.find('.title').text( $list.find('option:selected').val() );
                    $selection.find('.meta-value').text( $list.find('option:selected').attr('data-inst') );
                    $selection.show();
                    $list.hide();
                }
            });

            // SWITCH FROM SLAT TO SELECT2
            $('.js-employee-selection').on('click', '.btn', function(e){
                var $selection = $(this).closest('.js-employee-selection'),
                    $list = $selection.siblings('.js-employee-list');

                e.preventDefault();
                $selection.hide();
                $list.show().find('select').select2('open');
            });

            // RESET SLAT AND SELECT2 FOR ADDING NEW EMPLOYEES
            $('#modal-note-add').on('show.bs.modal',function(){
                var $modal = $(this);
                $modal.find('.js-employee-list').show().find('select').select2("val", "");
                $modal.find('.js-employee-selection').hide();
            });
            $('.attach-document').click(function(){
                console.log("hey");
                $('#modal-select-documents').modal('show');
                $('#modal-note-add').modal('hide');
            });

    });

    function handleNoteTypeChange(type) {
        if (type == "self") {
            $(".assigned-to").hide();
        }
        else if (type == "other") {
            console.log("hi");
            $(".assigned-to").show();
        }

    }

  
</script>

<?= createSiteEnd(); ?>
