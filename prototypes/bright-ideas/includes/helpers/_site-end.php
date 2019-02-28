<?php

function include_site_end( $options ) {

    global $defaults;
    $options = json_decode(json_encode(array_replace_recursive($defaults)), FALSE);
	include "_proto.php";
?>

</body>
</html>
<?php

}

?>