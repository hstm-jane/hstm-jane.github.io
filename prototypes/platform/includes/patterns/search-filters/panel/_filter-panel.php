<?php


function get_filter_title ( $data ) {
    
    $filter_title = ''; 
    $filter_title .= $data->text;
    
    return $filter_title;


}
function get_filter_body ( $data ) {
    
    $filter_body = '';
    if ( $data->type !== "default") {
        $filter_body .= '<section class="hire-rehire">';
    }
    switch ( $data->type ) {
        case "multiselect":
            $filter_body .= '
                                    <div class="search-filter-body collapse in" id="job-title">
                                        <div class="row">
                                            <div class="col-md-3 pull-right">
                                                <div class="filter">
                                                    <input type="text" class="form-control input-sm filter-input-box" placeholder="Filter">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pull-left">
                                                <div class="filter-select-all">
                                                    <label class="checkbox-inline" checked>
                                                        <input class="check-all" type="checkbox" id="checkAllTwo" value="option1" checked> Select All
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="multiselect multi-filter" id="two">
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="1" checked>
                                                <span class="check-text">Account Mgr - CC</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="2" checked>
                                                <span class="check-text">Accounting Coordinator</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="3" checked>
                                                <span class="check-text">Accounting/Payroll Coordinator</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="4" checked>
                                                <span class="check-text">Accreditation Coordinator</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="5" checked>
                                                <span class="check-text">Acctg & Quality Review Anal</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="6" checked>
                                                <span class="check-text">Administrative Assitant</span>
                                            </label>
                                            <label class="filter-label">
                                                <input type="checkbox" class="check-filter" name="option[]" value="7" checked>
                                                <span class="check-text">AP Coordinator</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- filter -->' . "\n";
            break;
        case "default":
            $filter_body .= '<section class="hire-rehire"><form class="form-inline"><div class="row"><div class="col-md-4"><div class="form-group"><label for="hire-from-date">From Date </label><div class="input-group date" id="hire-from-date">
                                        <input type="text" class="form-control" value="10/20/2015" />
                                        <span class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="hire-through-date">Through Date </label>
                                    <div class="input-group date" id="hire-through-date">
                                        <input type="text" class="form-control" value="10/20/2015" />
                                        <span class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>' . "\n";
            break;
    }
    if ( $data->type !== "default") {
        $filter_body .= '</section>';
    }

     return $filter_body;

}
function get_filter_attr ( $data ) {
    
    $filter_attr = '';
     return $filter_attr;

}
function get_filter_panel($options) {
    $defaults = json_decode('{
        "attributes": [
            ["class","filter_panel"]
        ],
        "title":{
            "text": "This is a required parameter"
        }
    }',true);

    $options = json_decode($options,true);
    $options = json_decode(json_encode(array_replace_recursive($defaults,$options)), FALSE);

    $filter_attr = (!empty($options->filter_attr))?get_filter_attr( $options->filter_attr ):'';
    $filter_title = (!empty($options->filter_title))?get_filter_title( $options->filter_title ):'';
    $filter_body = (!empty($options->filter_body))?get_filter_body( $options->filter_body ):'';

    $html =  "\n";
    $html .= '<div class="row">' ."\n";
    $html .= '<div class="col-md-12">' . "\n";
    $html .= '<div class="search-filter">' . "\n";
    $html .= '<div class="search-filter-header">' . "\n";
    $html .= '<span class="filter-title">' . $filter_title . '</span>' . "\n";
    $html .= '<span class="pull-right"><i class="fa fa-caret-up move-filter"></i><i class="fa fa-caret-up remove-filter"></i></span>' . "\n";
    $html .= '</div>' . "\n";
    $html .= '<div class="search-filter-body">' . "\n";
    $html .= '<section class="' . $filter_attr . '">' . "\n";
    $html .= $filter_body;
    $html .= '</section>' . "\n";
    $html .= '</div>' . "\n";
    $html .= '</div>' . "\n";
    $html .= '</div>' . "\n";
    $html .= '</div>' . "\n\n";                


    return $html;
}

function include_filter_panel($options) {
    echo get_filter_panel($options);
}