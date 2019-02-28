<?php

function include_site_scripts( $options ) {

    global $defaults;
    $options = json_decode(json_encode(array_replace_recursive($defaults)), FALSE);

?>

    <script src="./scripts/jquery.js"></script>
    <script src="./scripts/bootstrap.plugins.js"></script>
    <script src="./scripts/bootstrap-datepicker.js"></script>
    <script src="./scripts/charts.js"></script>
    <script src="./scripts/gritter.js"></script>
    <script src="./scripts/select2.js"></script>
    <script src="./scripts/slick.js"></script>
    <script src="./scripts/healthstream.js"></script>
    <script src="./scripts/healthstream.utilities.equalize.js"></script>
    <script src="./scripts/healthstream.utilities.limitHeight.js"></script>
    <script src="./scripts/healthstream.utilities.growl.js"></script>
    <script src="./scripts/healthstream.utilities.interrupt.js"></script>
    <script src="./scripts/healthstream.focusbar.js"></script>
    <script src="./scripts/healthstream.stickybar.js"></script>
    <script src="./scripts/healthstream.filtermini.js"></script>
    <script src="./scripts/healthstream.checklist.js"></script>


<?php

}

?>