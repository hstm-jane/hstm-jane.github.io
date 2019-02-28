<?php

function include_focus_bar( $options ) {

    global $defaults;
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);
    $title = $options->focus->title;
    $has_meta = (!empty($options->focus->meta));
    $btn = (!empty($options->focus->action));
    $btn_label = (!empty($options->focus->action->label))?$options->focus->action->label:"Next";
    $btn_url = (!empty($options->focus->action->url))?$options->focus->action->url:"#";

?>
    <div class="focus focus-default">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="primary" data-equalize="focus">
                        <h1 class="title"><?= $title ?></h1>

<?php
    if ( $has_meta ) {
?>
                        <ul class="meta">
<?php
        foreach ($options->focus->meta as $li) {

?>
                            <li>
<?php
            foreach ($li as $meta) {
?>
                                <span class="meta-<?= $meta[0]; ?>"><?= $meta[1]; ?></span>
<?php
            }
?>
                            </li>
<?php
        }
?>
                        </ul>
<?php
    }

    if ($btn) {
?>
                        <a href="<?= $btn_url ?>" class="btn btn-focus btn-lg"><?= $btn_label ?> <i class="fa fa-chevron-right"></i></a>
<?php
    }
?>
                    </div>
                </div>
                <div class="col-md-3">
<?php
    if ( !empty($options->focus->supporting) ) {

        if ( $options->focus->supporting->type === 'coach' ) {
?>
                    <div class="supporting supporting-coach" data-equalize="focus">
                        <img src="<?= $options->focus->supporting->data ?>" />
                    </div>
<?php
        }

        if ( $options->focus->supporting->type === 'chart' ) {
?>
                    <div class="supporting supporting-chart" data-equalize="focus">
                        <figure>
                            <canvas class="focus-chart" data-type="Doughnut" width="120" height="120" data-segments="<?= $options->focus->supporting->data ?>"></canvas>
                            <figcaption><?= $options->focus->supporting->value ?></figcaption>
                        </figure>
                    </div>
<?php
        }
    }
?>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>