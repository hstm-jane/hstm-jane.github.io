<script>
    $(function(){
        // $('.js-grading-save').click(function(e){
        //     e.preventDefault();
        //     HealthStream.utilities.interrupt({
        //         type: 'warning',
        //         title: 'You have entered student grades.',
        //         text: 'Once saved, students will be able to complete their evaluation and have their expiration dates on NRP Provider eCards advanced. Verify that grades are correct prior to saving. Once graded, a student cannot be dropped from the roster. If you have changed any grades from the initial grade, you need to notify the student.',
        //         actions: [
        //             {
        //                 type: 'success',
        //                 label: 'Save'
        //             },
        //             {
        //                 label: 'Cancel'
        //             }
        //         ]
        //     });
        // });
        // $('.js-grading-submit').click(function(e){
        //     e.preventDefault();
        //     HealthStream.utilities.interrupt({
        //         type: 'warning',
        //         title: 'You are about to submit this roster and finalize student grades.',
        //         text: 'Once submitted, the event will be marked as finalized and the instructor will receive credit for teaching the event. After submitting the roster, after submitting the roster, students cannot be ungraded.',
        //         actions: [
        //             {
        //                 type: 'success',
        //                 label: 'Finalize and Submit to AAP'
        //             },
        //             {
        //                 label: 'Cancel'
        //             }
        //         ]
        //     });
        // });
        $('.js-grading-save').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You are saving student grades',
                text: '<ul><li>Verify that all grades are correct.</li><li>Once saved, students with passing grades will be able to complete their evaluation and have their expiration dates on NRP Provider eCards advanced.</li><li>Grades SHOULD NOT be changed after saving.</li><li>Once graded, a student cannot be dropped from the roster.</li><li>If any grades are changed from Pass to Fail/No-Show, you are responsible for contacting both the student and the AAP.</li><li>Saving grades does not finalize the roster. The roster must still be submitted to receive credit for teaching the course.</li></ul>',
                actions: [
                    {
                        type: 'success',
                        label: 'Save'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });
        $('.js-grading-submit').click(function(e){
            e.preventDefault();
            HealthStream.utilities.interrupt({
                type: 'warning',
                title: 'You are about to submit this roster and finalize student grades',
                text: '<ul><li>Verify that all grades are correct.</li><li>Once saved, students with passing grades will be able to complete their evaluation and have their expiration dates on NRP Provider eCards advanced.</li><li>Grades SHOULD NOT be changed after saving.</li><li>Once graded, a student cannot be dropped from the roster.</li><li>If any grades are changed from Pass to Fail/No-Show, you are responsible for contacting both the student and the AAP.</li><li>Once submitted, the event will be marked as finalized and the instructor will receive credit for teaching the event.</li><li>After submitting the roster, students cannot be ungraded.</li></ul>',
                actions: [
                    {
                        type: 'success',
                        label: 'Finalize and Submit to AAP'
                    },
                    {
                        label: 'Cancel'
                    }
                ]
            });
        });
    });
</script>