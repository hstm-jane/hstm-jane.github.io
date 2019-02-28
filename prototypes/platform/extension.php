
<style>
    label{
        font-weight:600;
    }
</style>
<?php
// // Assuming the above tags are at www.example.com
// $tags = get_meta_tags('http://www.cnn.com/');

// // Notice how the keys are all lowercase now, and
// // how . was replaced by _ in the key.

// echo $tags['keywords'];     // php documentation
// echo $tags['title'];  // a php manual

libxml_use_internal_errors(true);
$c = file_get_contents('http://stackoverflow.com/');
$d = new DomDocument();
$d->loadHTML($c);
$xp = new domxpath($d);


foreach ($xp->query("//meta[@property='og:title']") as $el) {
    echo '<label>Title: </label>' .$el->getAttribute("content") . "<br />";
}
foreach ($xp->query("//meta[@property='og:type']") as $el) {
    echo "\n".'<label>Type: </label>' . $el->getAttribute("content"). "<br />";
}
foreach ($xp->query("//meta[@property='og:image']") as $el) {
    echo '<label>Image:</label> <img src="' . $el->getAttribute("content") . '"">'. "<br />";
}
foreach ($xp->query("//meta[@property='og:description']") as $el) {
    echo '<label>Description:</label>' . $el->getAttribute("content") . "<br />";
}


?>

