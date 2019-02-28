    //store the hash then remove it so the window doesn't scroll to the tab.  We want it to stay scrolled to the top'
    var target = window.location.hash,
    target = target.replace('#', '') || 'details';
    window.location.hash = "";

    $(function(){
        //RANDOM LITTLE DO-DADS

        // go to the tab in the URL
        if (target != '') {
            $('a[href="#' + target + '"]').tab('show');
            $('#' + target).addClass("active").addClass("in");
        }
       
        $('.nav-focus a[href="#details"]').click(function(){
            //if user clicks on the 'details assessments' focus nav item, 
            //then reset the filtering and sorting 
            //vs. if they get there by clicking on a group from the summary page. 
            resetGroupFilterSort();
        })

        var clickGroup = getUrlVars()["click"];
        var clickTitleid = getUrlVars()["titleid"];

        //group assessment based on click through
        if(clickGroup == 'title') {
            groupAssessmentsByTitle(clickTitleid.replace('#',''));
        }
        else if (clickGroup != '' && clickGroup !== undefined) {
            groupAssessmentsByState(clickGroup);
        }
        
        function getUrlVars()
        {
            var vars = [], hash;
            var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
            for(var i = 0; i < hashes.length; i++)
            {
                hash = hashes[i].split('=');
                vars.push(hash[0]);
                vars[hash[0]] = hash[1];
            }
            return vars;
        }

       


        // Change hash for page-reload
        $('a').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr("href");
            if(target == "#details"){
                //details assessments
                $(".btn-group li").removeClass("active");
            }
            else if (target == "#summary"){
                //Assessment summary 
                $('.focus-pageheader .meta-value:eq(0)').text($('#numberOfAssessments').val());
                $('.focus-pageheader .meta-value:eq(1)').text($('#numberOfActionItems').val());
            }
            updateCount();
        });


        $('.js-sort').on('change',function(){
            var $target = $('#' + $(this).attr('data-target'));
            var directions = $(this).find('option:selected').attr('data-directions').split('|');
            var html = '';

            html += '<option value="desc">'+directions[0]+'</option>';
            html += '<option value="asc">'+directions[1]+'</option>';
            $target.html(html);
        });

        $('.js-sort-primary').on('change',function(){
            var primary = $(this).find('option:selected').text();

            $('.js-sort-secondary option').show();

            if (  $('.js-sort-secondary').val() === primary ) {
                $('.js-sort-secondary').val('None').change();
            }

            $('.js-sort-secondary option').each(function(){
                if ( $(this).text() === primary ) {
                    $(this).hide();
                }
            });
        });
        $('.js-sort-primary-modal').on('change',function(){
            var primary = $(this).find('option:selected').text();

            $('.js-sort-secondary-modal option').show();

            if (  $('.js-sort-secondary-modal').val() === primary ) {
                $('.js-sort-secondary-modal').val('None').change();
            }

            $('.js-sort-secondary-modal option').each(function(){
                if ( $(this).text() === primary ) {
                    $(this).hide();
                }
            });
        });

        $('.js-state-detail').on('click',function(e){
            var name = $(this).attr('data-actor');
            var $modal = $('#modal-state-detail');
            var $body = $modal.find('.modal-body');
            e.preventDefault();
            $body.html('Waiting on ' + name + ' to sign off');
            $modal.modal('show');
        });

        $('.js-state-detail-approval').on('click',function(e){
            var $modal = $('#modal-state-detail-approval');
            e.preventDefault();
            $modal.modal('show');
        });

        $('.js-progress').on('click',function(){
            var $modal = $('#modal-progress');
            var id = $(this).attr('data-id');
            var html = '';
            var data = [
                {
                    'assessment' : 'Competency Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Employee','Conner, Rosalyn F.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 1','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 2','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 3','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>']
                    ]
                },
                {
                    'assessment' : 'Competency Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Employee','Juniper, Stephanie P.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 1','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 2','Not Yet Started'],
                        ['Peer','Peer 3','Not Yet Started']
                    ]
                },
                {
                    'assessment' : 'Competency Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','<div class="progress-bar" style="width:43%;">43%</div>'],
                        ['Employee','Montoya, Alice G.','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 1','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 2','Not Yet Started'],
                        ['Peer','Peer 3','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>']
                    ]
                },
                {
                    'assessment' : 'Competency Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','Not Yet Started'],
                        ['Employee','Park, Jennifer S.','<div class="progress-bar" style="width:43%;">43%</div>'],
                        ['Peer','Peer 1','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>'],
                        ['Peer','Peer 2','Not Yet Started'],
                        ['Peer','Peer 3','<div class="progress-bar progress-bar--submitted" style="width:100%;">Submitted</div>']
                    ]
                },
                {
                    'assessment' : 'Performance Appraisal',
                    'progress' : [
                        ['Rater','Crane, Darcy L.','Not Yet Started'],
                        ['Employee','Juniper, Stephanie P.','Not Yet Started'],
                        ['Peer','Peer 1','Not Yet Started'],
                        ['Peer','Peer 2','Not Yet Started'],
                        ['Peer','Peer 3','Not Yet Started']
                    ]
                }
            ];



            $(data[id].progress).each(function(){
                html += '<tr>';
                html += '<td class="modal-progress__role">' + this[0] + '</td>';
                html += '<td class="modal-progress__name">' + this[1] + '</td>';
                html += '<td class="modal-progress__progress"><div class="progress">' + this[2] + '</div></td>';
                html += '</tr>';
            });

            $modal.find('.modal-title').text(data[id].assessment);
            $modal.find('.modal-progress__table tbody').html(html);
            $modal.modal('show');

        });

        $('.js-revert').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'failure',
                title: 'You are about revert this assessment',
                text: '<p>Reverting an assessment from the Review state to the Evaluate state allows:</p><ul><li>Configuration of a new Reflective Plan</li><li>Modifications to the Reflective Plan configuration, if one was already created</li><li>The employee and peer(s) to submit their ratings, if they have not already done so</li></ul><p>Reverting this assessment to the Evaluate state will</p><ul><li>Delete any Sign Off(s) and Sign Off comments</li><li>Delete the Reflective Plan, if one was created</li><li>Delete any Approval(s) and Approval Comment(s)</li><li>Require movement through the Approval process again, if appropriate</li></ul>',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, Revert this Assessment'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });

        $('.js-reset').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'failure',
                title: 'You are about to reset this assessment',
                text: '<p>Resetting the assessment will:</p><ul><li>Delete all ratings, comments, goals, and associated documents</li><li>Remove alternate rater and peer(s)</li></ul>',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, Reset this Assessment'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });

        $('.js-delete').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'failure',
                title: 'You are about to delete this assessment',
                text: '<p>Are you sure you want to DELETE this assessment and all ratings, comments, goals, and associated documents?',
                actions: [
                    {
                        type: 'danger',
                        label: 'Yes, Delete this Assessment'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });

        //NEW SORTING GROUPING AND FILTERING STUFF

        //Reset filters buttons from the Sort & Filter modal and dropdown
        $(".reset-filters").click(function(){
             resetGroupFilterSort();             
        });

        //Column Header click even - we need to do some sorting now.
        $(".sort").click(function(e){

             e.preventDefault();

            //find out which column we're sorting
            var classNames = $(this).attr("class").toString().split(' ');
            var column = "";

            $.each(classNames, function (i, className) {
                if(className.match('^sort-')){
                    var parts = className.split('-');
                    column = parts[1];
                }
            });

            var dir;
            var secondarySortColumn;
            var secondarySortDirection;

            dir = $(this).attr("data-sortdir");

            sortAssessments (column, dir, 'none' ,'none');

            stripeAssessments();

        });
        $('.dd-filter').change(function() {
                console.log('dd fitler');
            filterAssessments(
                $('#filter-assignment').val(),
                $('#filter-state').val(),
                $('#filter-title').val(),
                $('#filter-employee').val(), 
                $('#filter-type').val()); 

            sortAssessments(
                $(".js-sort-primary").val(),
                $("#sort-direction-1").val(),
                $(".js-sort-secondary").val(),
                $("#sort-direction-2").val());

            updateCount();
        });

        $('.dd-sort').change(function() {
            sortAssessments(
                $(".js-sort-primary").val(),
                $("#sort-direction-1").val(),
                $(".js-sort-secondary").val(),
                $("#sort-direction-2").val());
        });
        
        //Submit button from the Filter & Sort modal
        $('#apply-sort-filter-button').click(function() {

            filterAssessments(
                $('#filter-assignment-modal').val(),
                $('#filter-state-modal').val(),
                $('#filter-title-modal').val(),
                $('#filter-employee-modal').val(), 
                $('#filter-type-modal').val()); 

            sortAssessments(
                $(".js-sort-primary-modal").val(),
                $("#sort-direction-1-modal").val(),
                $(".js-sort-secondary-modal").val(),
                $("#sort-direction-2-modal").val());

            updateCount();

            $('#modal-filter').modal('hide');
        });
        
        function groupAssessmentsByState(state)
        {
             filterAssessments(
                null,
                state,
                null,
                null, 
                true);

          updateCount();
        }
        function groupAssessmentsByTitle(titleid)
        {
             filterAssessments(
                null,
                null,
                titleid,
                null, 
                true);
               
             updateCount();
        }



        //FILTERING
        function filterAssessments(assignmentValue, stateValue, titleId, employeeId, type) {

            assignmentValue = assignmentValue || 'all';
            stateValue = stateValue || 'all-not-closed';
            titleId = titleId || 'all';
            employeeId = employeeId || 'all';
            type = type || 'all';

            //set the filter bar dropdowns
            $('#filter-assignment').val(assignmentValue);
            $('#filter-state').val(stateValue);
            $('#filter-title').val(titleId);
            $('#filter-employee').val(employeeId);
            $('#filter-type').val(type);

            //set the modal filter dropdowns
            $('#filter-assignment-modal').val(assignmentValue);
            $('#filter-state-modal').val(stateValue);
            $('#filter-title-modal').val(titleId);
            $('#filter-employee-modal').val(employeeId);
            $('#filter-type-modal').val(type);

            //define the assessments
            var $filterAssessments = $('.assessment').not(".assessment--header");
            $filterAssessments.show();

            //filter the assessments by each filter type
            $filterAssessments.each(function () {
                //FILTER BY ASSIGNMENT
                if (assignmentValue == "all") {
                    //do nothing - no need to hide anything
                }
                else if (assignmentValue == "assigned") {
                    if ($(this).find(".assessment__assignedto").text() === "") {
                        $(this).hide();
                    }
                }
                else if (assignmentValue == "actionable") {
                    if ($(this).attr("data-actionable") != "1") {
                        $(this).hide();
                    }
                }
                else if (assignmentValue == "not-assigned") {
                    if ($(this).find(".assessment__assignedto").text() !== "") {
                        $(this).hide();
                    }
                }
            }).each(function () {
                //FILTER BY STATE
                if (stateValue == "all") {
                    //do nothing - no need to hide anything
                }
                else if (stateValue == "all-not-closed") {
                   if($(this).find(".assessment__state").attr("data-state") == "closed") {
                        $(this).hide();
                   }
                }
                else {
                    if ($(this).find(".assessment__state").attr("data-state") != stateValue) {
                        $(this).hide();
                    }
                }
            }).each(function () {
                //FILTER BY TYPE
                if (type == "all") {
                    //do nothing - no need to hide anything
                }
                else if (type == "employee") {
                   if($(this).find(".meta-type").text().toLowerCase() != "employee assessment") {
                        $(this).hide();
                   }
                }
                else if (type == "approval") {
                    if ($(this).find(".meta-type").text().toLowerCase() != "approval") {
                        $(this).hide();
                    }
                }
            }).each(function () {
                //FILTER BY ASSESSMENT TITLE
                if (titleId == "all") {
                    //do nothing - no need to hide anything
                }
                else {
                    if ($(this).attr("data-titleid") != titleId) {
                        $(this).hide();
                    }
                }
            }).each(function () {
                //FILTER BY EMPLOYEE NAME
                if (employeeId == "all") {
                    //do nothing - no need to hide anything
                }
               
                else {
                    if ($(this).attr("data-empid") != employeeId) {
                        $(this).hide();
                    }
                }
            });

        }
        //SORTING
        function sortAssessments(primaryColumn, primaryDirection, secondaryColumn , secondaryDirection ) {
            
            primaryColumn = primaryColumn || 'due';
            primaryDirection = primaryDirection || 'desc';
            secondaryColumn = secondaryColumn || 'assessment';
            secondaryDirection = secondaryDirection || 'asc';

            primaryDirection = primaryDirection == 'asc' ? 'desc': 'asc';
            secondaryDirection = secondaryDirection == 'asc' ? 'desc': 'asc';

            secondaryDirection = secondaryColumn == 'none' ? '': secondaryDirection;

            var $assessments = $('.assessment-data');

            var secondarySelector = getSortSelector(secondaryColumn);
            var primarySelector = getSortSelector(primaryColumn);

            switch (secondarySelector)
            {
                case "":
                //no secondary selection criteria
                    if (primaryColumn == "state"){
                            tinysort('.assessment-data',
                            {selector:primarySelector,order:primaryDirection},
                            {selector:'.assessment__state-description', order:primaryDirection});
                    }
                    else {
                            tinysort('.assessment-data',
                            {selector:primarySelector,order:primaryDirection});  
                    }
                    break; 
                default:
                //sort on primary and secondary
                    if (primaryColumn == "state"){
                            if(secondaryColumn == "state") {
                                tinysort('.assessment-data',
                                {selector:primarySelector,order:primaryDirection},
                                {selector:'.assessment__state-description', order:primaryDirection},
                                {selector:secondarySelector,order:secondaryDirection},
                                {selector:'.assessment__state-description', order:secondaryDirection});
                            }
                            else {
                                tinysort('.assessment-data',
                                {selector:primarySelector,order:primaryDirection},
                                {selector:'.assessment__state-description', order:primaryDirection},
                                {selector:secondarySelector,order:secondaryDirection});
                            }
                    }
                    else {
                            if(secondaryColumn == "state") {
                                tinysort('.assessment-data',
                                {selector:primarySelector,order:primaryDirection},
                                {selector:secondarySelector,order:secondaryDirection},
                                {selector:'.assessment__state-description', order:secondaryDirection});
                            }
                            else {
                                tinysort('.assessment-data',{selector:primarySelector,order:primaryDirection},
                                {selector:secondarySelector,order:secondaryDirection});
                            }
                    }
                    break;
            }

            //set the sort pop out dropdowns
            $('.js-sort-primary').val(primaryColumn);
            $('#sort-direction-1').val(primaryDirection);
            $('.js-sort-secondary').val(secondaryColumn);
            $('#sort-direction-2').val(secondaryDirection);
            //set the modal sort dropdowns
            $('.js-sort-primary-modal').val(primaryColumn);
            $('#sort-direction-1-modal').val(primaryDirection);
            $('.js-sort-secondary-modal').val(secondaryColumn);
            $('#sort-direction-2-modal').val(secondaryDirection);

            var $target = $('#' + $('.js-sort-primary').attr('data-target'));
            var directions = $('.js-sort-primary').find('option:selected').attr('data-directions').split('|');

            var $modaltarget = $('#' + $('.js-sort-primary-modal').attr('data-target'));
            var modaldirections = $('.js-sort-primary-modal').find('option:selected').attr('data-directions').split('|');

            var html = '';

            html += '<option value="desc">'+directions[0]+'</option>';
            html += '<option value="asc">'+directions[1]+'</option>';
            $target.html(html);
            
            var modalhtml = '';

            modalhtml += '<option value="desc">'+modaldirections[0]+'</option>';
            modalhtml += '<option value="asc">'+modaldirections[1]+'</option>';
            $modaltarget.html(modalhtml);

             //change the sort direction in the column header
            $(".sort-" + primaryColumn).attr("data-sortdir",primaryDirection);

            displaySortIndicator(primaryColumn, primaryDirection, secondaryColumn, secondaryDirection);

        }

        function getSortSelector(column){
            var selector = "";
             switch(column) {
                case "employee":
                    selector = ".assessment__employee";
                    break;
                case "peerprogress":
                    selector = ".progress-peer";
                    break;
                case "state":
                    selector = ".data-state";
                    break;
                case "due":
                    selector = ".data-date";
                    break;
                case "assessment":
                    selector = ".assessment__title";
                    break;
                case "employeeprogress":
                    selector = ".data-employee-progress";
                    break;
                case "rater":
                    selector = ".rater-name";
                    break;
                case "raterprogress":
                    selector = ".data-rater-progress";
                    break;
            }
            return selector; 
        }

        //HELPER FUNCTIONS 
        function resetGroupFilterSort() {
            filterAssessments();
            sortAssessments ();
            updateCount();
        }
        
        function stripeAssessments() {
            var $assessments = $('.assessment:nth-child(n+3)');
            //clear all of the striping
            $assessments.removeClass("assessment--stripe");
            //stripe only the even slats
            $('.assessment:visible:even').not(".assessment--header").addClass("assessment--stripe");
        }

        function updateCount() {
            var totalAssessments = $('.assessment:visible').not(".assessment--header").length;
            var totalAssessmentsAttention = $('.assessment--attention:visible').not(".assessment--header").length;

            $(".results-count").text(totalAssessments);
            $('.focus-pageheader .meta-value:eq(0)').text(totalAssessments);
            $('.focus-pageheader .meta-value:eq(1)').text(totalAssessmentsAttention);
            
            if(totalAssessments === 0) {
                $(".no-assessments").show();
                $(".assessment--header").hide();
            }
            else{
                $(".no-assessments").hide();
                $(".assessment--header").show();
            }
            stripeAssessments();
        }

        function displaySortIndicator(primaryColumn, primaryDirection, secondaryColumn, secondaryDirection){
            var $allColumnHeaders = $(".sort");
            var $primaryColumnHeader = $('.sort-' + primaryColumn);
            var $secondaryColumnHeader = $('.sort-' + secondaryColumn);

            $allColumnHeaders.find("i").remove();

            $primaryColumnHeader.append("<i class='sortdir fa'></i>");
            $(".tag-sort-1-text").find(".fa").remove();
            $(".tag-sort-1-text").text($('.js-sort-primary').find('option:selected').text());
            $(".tag-sort-1-text").append("<span class='sortdir fa'></span>");

            $secondaryColumnHeader.append("<i class='sortdir fa'></i>");
            $(".tag-sort-2-text").find(".fa").remove();
            $(".tag-sort-2-text").text($('.js-sort-secondary').find('option:selected').text());
            $(".tag-sort-2-text").append("<span class='sortdir fa'></span>");

            //Primary Sort Header
            if (primaryDirection == 'desc'){
                $primaryColumnHeader.find("i").addClass("fa-caret-up");
                $(".tag-sort-1-text").find(".fa").addClass("fa-caret-up");
            }
            else if (primaryDirection == "asc") {
                $primaryColumnHeader.find("i").addClass("fa-caret-down");
                $(".tag-sort-1-text").find(".fa").addClass("fa-caret-down");
            }

            //Secondary Sort Header
             if (secondaryDirection == 'desc'){
                $secondaryColumnHeader.find("i").addClass("fa-caret-up");
                $(".tag-sort-2-text").find(".fa").addClass("fa-caret-up");
            }
            else if (secondaryDirection == "asc") {
                 $secondaryColumnHeader.find("i").addClass("fa-caret-down");
                $(".tag-sort-2-text").find(".fa").addClass("fa-caret-down");
            }
        }

        //ASSESSMENT SUMMARY 
       
        $(".assessment-group__box").click(function(){
            goToGroup($(this),false);
        })

        $(".assessment-group__actionable").click(function(){
            goToGroup($(this),true);
        })

        function goToGroup($elem, actionableOnly){
            var $assessmentGroup = $elem.parent(".assessment-group");
            var classNames = $assessmentGroup.attr("class").toString().split(' ');
            var type = "";
            var id = $assessmentGroup.attr("data-id");
            var title = $assessmentGroup.find(".assessment-group__title").text();
            var assignment = "";

            if(actionableOnly == true) {
                assignment = "actionable";
            }
            else {
                assignment = "";
            }

            $.each(classNames, function (i, className) {
                if(className.match('^assessment-group--')){
                    var parts = className.split('-');
                    type = parts[3];
                }
            });



            //reset the sort
            sortAssessments();

            switch (type){
                case "state":
                    filterAssessments(assignment, title.toLowerCase(), undefined, undefined, undefined);
                    break;

                case "employee":
                    filterAssessments(assignment, undefined, undefined, id, undefined);
                    break;

                case "title":
                    filterAssessments(assignment, undefined, id, undefined, undefined);
                    break;
            }
             $('.nav-focus a[href="#details"]').tab('show');

            updateCount();
        }

        $('.btn-sort').click(function() {
            //if sort options are open, close them.  If they're closed, then open them.
            if ($( "#SortOptions" ).hasClass("open")) {
                 $( "#SortOptions" ).hide();
                 $( "#SortOptions" ).removeClass("open");
            }
            else {
                $( "#SortOptions" ).show();
                $( "#SortOptions" ).addClass("open");
            }
        });

        $(document).mouseup(function (e)
        {
            //close sort options when click outside of box.
            var container = $("#SortOptions");
            if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0 && !$(e.target).is(".btn-sort")) // ... nor a descendant of the container
            {
                container.hide();
                container.removeClass("open");
            }
        });

        $('html,body').scrollTop(0);
        
        
    });

    