<?php

include "includes/helpers.php";

$patterns['start']['title'] = 'Manage Colors';
$patterns['focus']['title'] = 'Manage Colors';
$patterns['header']['mainNavActive'] = 'scheduling';

?>
<?= createSiteStart($patterns['start']); ?>
<?= createHeader($patterns['header']); ?>
<?= createFocus($patterns['focus']); ?>

    <div class="layout layout-min">
        <div class="container">
            <section class="section section-box section-main">
                <form action="/Platform/Scheduling/SaveColors" method="post">
                    <input name="__RequestVerificationToken" type="hidden" value="3ePDCRWZRCZoZmBX1jZbsmei1gA_GL9hOyFKQsXEZIexEkebS_xdJ2vOZtRPLQdXcYZTA3I5pASQFFoly96ze5gpQbRUujMDzXs5x7t0i-I1">
                    <section class="container" style="margin-bottom: 150px;">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Rooms</h3>
                                <div class="form-group">
                                    <div class="select2-container select2-container-multi" id="s2id_txtRoomSearch" style="width: 100%;">
                                        <ul class="select2-choices">
                                            <li class="select2-search-field">
                                                <label for="s2id_autogen2" class="select2-offscreen"></label>
                                                <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen2" placeholder="" style="width: 523px;"> </li>
                                        </ul>
                                        <div class="select2-drop select2-drop-multi select2-display-none select2-slats">
                                            <ul class="select2-results"> </ul>
                                        </div>
                                    </div>
                                    <input type="text" id="txtRoomSearch" tabindex="-1" class="select2-offscreen">
                                </div>
                                <div id="divRooms">
                                    <section class="section">
                                        <div class="collapsable-table">
                                            <div class="collapsable-table-header collapsable-row">
                                                <div class="collapsable-name collapsable-cell">Name</div>
                                                <div class="collapsable-meta collapsable-cell">Color</div>
                                                <div class="collapsable-remove collapsable-cell">Remove</div>
                                                <div class="collapsable-options collapsable-cell"></div>
                                            </div>
                                            <div class="collapsable-row" data-calendarcolorid="18d057ee-8fb3-e511-80cd-005056a35e6e" data-color="#ffff00" data-coloritemtype="2" data-itemid="a52cdf07-88b3-e511-80cd-005056a35e6e" id="divRooma52cdf07-88b3-e511-80cd-005056a35e6e">
                                                <div class="collapsable-name collapsable-cell">AT-RM611</div>
                                                <div class="collapsable-meta collapsable-cell">
                                                    <span class="collapsable-limit" style="overflow: visible;">
                                                        <span class="collapsable-cell-label">Color</span>
                                                        <select id="selectColora52cdf07-88b3-e511-80cd-005056a35e6e" style="display: none;">
                                                            <option data-color="#003366" value="#13158"></option>
                                                            <option data-color="#336699" value="#3368601"></option>
                                                            <option data-color="#3366cc" value="#3368652"></option>
                                                            <option data-color="#003399" value="#13209"></option>
                                                            <option data-color="#000099" value="#153"></option>
                                                            <option data-color="#0000cc" value="#204"></option>
                                                            <option data-color="#000066" value="#102"></option>
                                                            <option data-color="#006666" value="#26214"></option>
                                                            <option data-color="#006699" value="#26265"></option>
                                                            <option data-color="#0099cc" value="#39372"></option>
                                                            <option data-color="#0066cc" value="#26316"></option>
                                                            <option data-color="#0033cc" value="#13260"></option>
                                                            <option data-color="#0000ff" value="#255"></option>
                                                            <option data-color="#3333ff" value="#3355647"></option>
                                                            <option data-color="#333399" value="#3355545"></option>
                                                            <option data-color="#669999" value="#6723993"></option>
                                                            <option data-color="#009999" value="#39321"></option>
                                                            <option data-color="#33cccc" value="#3394764"></option>
                                                            <option data-color="#00ccff" value="#52479"></option>
                                                            <option data-color="#0099ff" value="#39423"></option>
                                                            <option data-color="#0066ff" value="#26367"></option>
                                                            <option data-color="#3366ff" value="#3368703"></option>
                                                            <option data-color="#3333cc" value="#3355596"></option>
                                                            <option data-color="#666699" value="#6710937"></option>
                                                            <option data-color="#339966" value="#3381606"></option>
                                                            <option data-color="#00cc99" value="#52377"></option>
                                                            <option data-color="#00ffcc" value="#65484"></option>
                                                            <option data-color="#00ffff" value="#65535"></option>
                                                            <option data-color="#33ccff" value="#3394815"></option>
                                                            <option data-color="#3399ff" value="#3381759"></option>
                                                            <option data-color="#6699ff" value="#6724095"></option>
                                                            <option data-color="#6666ff" value="#6711039"></option>
                                                            <option data-color="#6600ff" value="#6684927"></option>
                                                            <option data-color="#6600cc" value="#6684876"></option>
                                                            <option data-color="#339933" value="#3381555"></option>
                                                            <option data-color="#00cc66" value="#52326"></option>
                                                            <option data-color="#00ff99" value="#65433"></option>
                                                            <option data-color="#66ffcc" value="#6750156"></option>
                                                            <option data-color="#66ffff" value="#6750207"></option>
                                                            <option data-color="#66ccff" value="#6737151"></option>
                                                            <option data-color="#99ccff" value="#10079487"></option>
                                                            <option data-color="#9999ff" value="#10066431"></option>
                                                            <option data-color="#9966ff" value="#10053375"></option>
                                                            <option data-color="#9933ff" value="#10040319"></option>
                                                            <option data-color="#9900ff" value="#10027263"></option>
                                                            <option data-color="#006600" value="#26112"></option>
                                                            <option data-color="#00cc00" value="#52224"></option>
                                                            <option data-color="#00ff00" value="#65280"></option>
                                                            <option data-color="#66ff99" value="#6750105"></option>
                                                            <option data-color="#99ffcc" value="#10092492"></option>
                                                            <option data-color="#ccffff" value="#13434879"></option>
                                                            <option data-color="#ccccff" value="#13421823"></option>
                                                            <option data-color="#cc99ff" value="#13408767"></option>
                                                            <option data-color="#cc66ff" value="#13395711"></option>
                                                            <option data-color="#cc33ff" value="#13382655"></option>
                                                            <option data-color="#cc00ff" value="#13369599"></option>
                                                            <option data-color="#9900cc" value="#10027212"></option>
                                                            <option data-color="#003300" value="#13056"></option>
                                                            <option data-color="#009933" value="#39219"></option>
                                                            <option data-color="#33cc33" value="#3394611"></option>
                                                            <option data-color="#66ff66" value="#6750054"></option>
                                                            <option data-color="#99ff99" value="#10092441"></option>
                                                            <option data-color="#ccffcc" value="#13434828"></option>
                                                            <option data-color="#ffffff" value="#16777215"></option>
                                                            <option data-color="#ffccff" value="#16764159"></option>
                                                            <option data-color="#ff99ff" value="#16751103"></option>
                                                            <option data-color="#ff66ff" value="#16738047"></option>
                                                            <option data-color="#ff00ff" value="#16711935"></option>
                                                            <option data-color="#cc00cc" value="#13369548"></option>
                                                            <option data-color="#660066" value="#6684774"></option>
                                                            <option data-color="#333300" value="#3355392"></option>
                                                            <option data-color="#009900" value="#39168"></option>
                                                            <option data-color="#66ff33" value="#6750003"></option>
                                                            <option data-color="#99ff66" value="#10092390"></option>
                                                            <option data-color="#ccff99" value="#13434777"></option>
                                                            <option data-color="#ffffcc" value="#16777164"></option>
                                                            <option data-color="#ffcccc" value="#16764108"></option>
                                                            <option data-color="#ff99cc" value="#16751052"></option>
                                                            <option data-color="#ff66cc" value="#16737996"></option>
                                                            <option data-color="#ff33cc" value="#16724940"></option>
                                                            <option data-color="#cc0099" value="#13369497"></option>
                                                            <option data-color="#993399" value="#10040217"></option>
                                                            <option data-color="#336600" value="#3368448"></option>
                                                            <option data-color="#669900" value="#6723840"></option>
                                                            <option data-color="#99ff33" value="#10092339"></option>
                                                            <option data-color="#ccff66" value="#13434726"></option>
                                                            <option data-color="#ffff99" value="#16777113"></option>
                                                            <option data-color="#ffcc99" value="#16764057"></option>
                                                            <option data-color="#ff9999" value="#16751001"></option>
                                                            <option data-color="#ff6699" value="#16737945"></option>
                                                            <option data-color="#ff3399" value="#16724889"></option>
                                                            <option data-color="#cc3399" value="#13382553"></option>
                                                            <option data-color="#990099" value="#10027161"></option>
                                                            <option data-color="#666633" value="#6710835"></option>
                                                            <option data-color="#99cc00" value="#10079232"></option>
                                                            <option data-color="#ccff33" value="#13434675"></option>
                                                            <option data-color="#ffff66" value="#16777062"></option>
                                                            <option data-color="#ffcc66" value="#16764006"></option>
                                                            <option data-color="#ff9966" value="#16750950"></option>
                                                            <option data-color="#ff6666" value="#16737894"></option>
                                                            <option data-color="#ff0066" value="#16711782"></option>
                                                            <option data-color="#d60094" value="#14024852"></option>
                                                            <option data-color="#993366" value="#10040166"></option>
                                                            <option data-color="#a58800" value="#10848256"></option>
                                                            <option data-color="#cccc00" value="#13421568"></option>
                                                            <option data-color="#ffff00" value="#16776960"></option>
                                                            <option data-color="#ffcc00" value="#16763904"></option>
                                                            <option data-color="#ff9933" value="#16750899"></option>
                                                            <option data-color="#ff6600" value="#16737792"></option>
                                                            <option data-color="#ff0033" value="#16711731"></option>
                                                            <option data-color="#cc0066" value="#13369446"></option>
                                                            <option data-color="#660033" value="#6684723"></option>
                                                            <option data-color="#996633" value="#10053171"></option>
                                                            <option data-color="#cc9900" value="#13408512"></option>
                                                            <option data-color="#ff9900" value="#16750848"></option>
                                                            <option data-color="#cc6600" value="#13395456"></option>
                                                            <option data-color="#ff3300" value="#16724736"></option>
                                                            <option data-color="#ff0000" value="#16711680"></option>
                                                            <option data-color="#cc0000" value="#13369344"></option>
                                                            <option data-color="#990033" value="#10027059"></option>
                                                            <option data-color="#663300" value="#6697728"></option>
                                                            <option data-color="#996600" value="#10053120"></option>
                                                            <option data-color="#cc3300" value="#13382400"></option>
                                                            <option data-color="#993300" value="#10040064"></option>
                                                            <option data-color="#990000" value="#10027008"></option>
                                                            <option data-color="#800000" value="#8388608"></option>
                                                            <option data-color="#993333" value="#10040115"></option>
                                                        </select>
                                                        <div class="dropdown dropdown-colorselector">
                                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                                <span class="btn-colorselector" style="background-color: rgb(51, 153, 255);"></span>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-caret">
                                                                <li style="margin-left: 65px;">
                                                                    <a class="color-btn" href="#" data-color="#003366" data-value="#13158" title="" style="background-color: rgb(0, 51, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#336699" data-value="#3368601" title="" style="background-color: rgb(51, 102, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3366cc" data-value="#3368652" title="" style="background-color: rgb(51, 102, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#003399" data-value="#13209" title="" style="background-color: rgb(0, 51, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#000099" data-value="#153" title="" style="background-color: rgb(0, 0, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0000cc" data-value="#204" title="" style="background-color: rgb(0, 0, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#000066" data-value="#102" title="" style="background-color: rgb(0, 0, 102);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 55px;">
                                                                    <a class="color-btn" href="#" data-color="#006666" data-value="#26214" title="" style="background-color: rgb(0, 102, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#006699" data-value="#26265" title="" style="background-color: rgb(0, 102, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0099cc" data-value="#39372" title="" style="background-color: rgb(0, 153, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0066cc" data-value="#26316" title="" style="background-color: rgb(0, 102, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0033cc" data-value="#13260" title="" style="background-color: rgb(0, 51, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0000ff" data-value="#255" title="" style="background-color: rgb(0, 0, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3333ff" data-value="#3355647" title="" style="background-color: rgb(51, 51, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#333399" data-value="#3355545" title="" style="background-color: rgb(51, 51, 153);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 45px;">
                                                                    <a class="color-btn" href="#" data-color="#669999" data-value="#6723993" title="" style="background-color: rgb(102, 153, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#009999" data-value="#39321" title="" style="background-color: rgb(0, 153, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#33cccc" data-value="#3394764" title="" style="background-color: rgb(51, 204, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ccff" data-value="#52479" title="" style="background-color: rgb(0, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0099ff" data-value="#39423" title="" style="background-color: rgb(0, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0066ff" data-value="#26367" title="" style="background-color: rgb(0, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3366ff" data-value="#3368703" title="" style="background-color: rgb(51, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3333cc" data-value="#3355596" title="" style="background-color: rgb(51, 51, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#666699" data-value="#6710937" title="" style="background-color: rgb(102, 102, 153);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 35px;">
                                                                    <a class="color-btn" href="#" data-color="#339966" data-value="#3381606" title="" style="background-color: rgb(51, 153, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00cc99" data-value="#52377" title="" style="background-color: rgb(0, 204, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ffcc" data-value="#65484" title="" style="background-color: rgb(0, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ffff" data-value="#65535" title="" style="background-color: rgb(0, 255, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#33ccff" data-value="#3394815" title="" style="background-color: rgb(51, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn selected" href="#" data-color="#3399ff" data-value="#3381759" title="" style="background-color: rgb(51, 153, 255);"><i class="fa fa-check"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#6699ff" data-value="#6724095" title="" style="background-color: rgb(102, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#6666ff" data-value="#6711039" title="" style="background-color: rgb(102, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#6600ff" data-value="#6684927" title="" style="background-color: rgb(102, 0, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#6600cc" data-value="#6684876" title="" style="background-color: rgb(102, 0, 204);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 25px;">
                                                                    <a class="color-btn" href="#" data-color="#339933" data-value="#3381555" title="" style="background-color: rgb(51, 153, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00cc66" data-value="#52326" title="" style="background-color: rgb(0, 204, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ff99" data-value="#65433" title="" style="background-color: rgb(0, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ffcc" data-value="#6750156" title="" style="background-color: rgb(102, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ffff" data-value="#6750207" title="" style="background-color: rgb(102, 255, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ccff" data-value="#6737151" title="" style="background-color: rgb(102, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ccff" data-value="#10079487" title="" style="background-color: rgb(153, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9999ff" data-value="#10066431" title="" style="background-color: rgb(153, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9966ff" data-value="#10053375" title="" style="background-color: rgb(153, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9933ff" data-value="#10040319" title="" style="background-color: rgb(153, 51, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9900ff" data-value="#10027263" title="" style="background-color: rgb(153, 0, 255);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 15px;">
                                                                    <a class="color-btn" href="#" data-color="#006600" data-value="#26112" title="" style="background-color: rgb(0, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00cc00" data-value="#52224" title="" style="background-color: rgb(0, 204, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ff00" data-value="#65280" title="" style="background-color: rgb(0, 255, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ff99" data-value="#6750105" title="" style="background-color: rgb(102, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ffcc" data-value="#10092492" title="" style="background-color: rgb(153, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccffff" data-value="#13434879" title="" style="background-color: rgb(204, 255, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccccff" data-value="#13421823" title="" style="background-color: rgb(204, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc99ff" data-value="#13408767" title="" style="background-color: rgb(204, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc66ff" data-value="#13395711" title="" style="background-color: rgb(204, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc33ff" data-value="#13382655" title="" style="background-color: rgb(204, 51, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc00ff" data-value="#13369599" title="" style="background-color: rgb(204, 0, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9900cc" data-value="#10027212" title="" style="background-color: rgb(153, 0, 204);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 5px;">
                                                                    <a class="color-btn" href="#" data-color="#003300" data-value="#13056" title="" style="background-color: rgb(0, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#009933" data-value="#39219" title="" style="background-color: rgb(0, 153, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#33cc33" data-value="#3394611" title="" style="background-color: rgb(51, 204, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ff66" data-value="#6750054" title="" style="background-color: rgb(102, 255, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ff99" data-value="#10092441" title="" style="background-color: rgb(153, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccffcc" data-value="#13434828" title="" style="background-color: rgb(204, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffffff" data-value="#16777215" title="" style="background-color: rgb(255, 255, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffccff" data-value="#16764159" title="" style="background-color: rgb(255, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff99ff" data-value="#16751103" title="" style="background-color: rgb(255, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff66ff" data-value="#16738047" title="" style="background-color: rgb(255, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff00ff" data-value="#16711935" title="" style="background-color: rgb(255, 0, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc00cc" data-value="#13369548" title="" style="background-color: rgb(204, 0, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#660066" data-value="#6684774" title="" style="background-color: rgb(102, 0, 102);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 15px;">
                                                                    <a class="color-btn" href="#" data-color="#333300" data-value="#3355392" title="" style="background-color: rgb(51, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#009900" data-value="#39168" title="" style="background-color: rgb(0, 153, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ff33" data-value="#6750003" title="" style="background-color: rgb(102, 255, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ff66" data-value="#10092390" title="" style="background-color: rgb(153, 255, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccff99" data-value="#13434777" title="" style="background-color: rgb(204, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffffcc" data-value="#16777164" title="" style="background-color: rgb(255, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffcccc" data-value="#16764108" title="" style="background-color: rgb(255, 204, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff99cc" data-value="#16751052" title="" style="background-color: rgb(255, 153, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff66cc" data-value="#16737996" title="" style="background-color: rgb(255, 102, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff33cc" data-value="#16724940" title="" style="background-color: rgb(255, 51, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc0099" data-value="#13369497" title="" style="background-color: rgb(204, 0, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#993399" data-value="#10040217" title="" style="background-color: rgb(153, 51, 153);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 25px;">
                                                                    <a class="color-btn" href="#" data-color="#336600" data-value="#3368448" title="" style="background-color: rgb(51, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#669900" data-value="#6723840" title="" style="background-color: rgb(102, 153, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ff33" data-value="#10092339" title="" style="background-color: rgb(153, 255, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccff66" data-value="#13434726" title="" style="background-color: rgb(204, 255, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffff99" data-value="#16777113" title="" style="background-color: rgb(255, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffcc99" data-value="#16764057" title="" style="background-color: rgb(255, 204, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff9999" data-value="#16751001" title="" style="background-color: rgb(255, 153, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff6699" data-value="#16737945" title="" style="background-color: rgb(255, 102, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff3399" data-value="#16724889" title="" style="background-color: rgb(255, 51, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc3399" data-value="#13382553" title="" style="background-color: rgb(204, 51, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#990099" data-value="#10027161" title="" style="background-color: rgb(153, 0, 153);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 35px;">
                                                                    <a class="color-btn" href="#" data-color="#666633" data-value="#6710835" title="" style="background-color: rgb(102, 102, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99cc00" data-value="#10079232" title="" style="background-color: rgb(153, 204, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccff33" data-value="#13434675" title="" style="background-color: rgb(204, 255, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffff66" data-value="#16777062" title="" style="background-color: rgb(255, 255, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffcc66" data-value="#16764006" title="" style="background-color: rgb(255, 204, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff9966" data-value="#16750950" title="" style="background-color: rgb(255, 153, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff6666" data-value="#16737894" title="" style="background-color: rgb(255, 102, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff0066" data-value="#16711782" title="" style="background-color: rgb(255, 0, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#d60094" data-value="#14024852" title="" style="background-color: rgb(214, 0, 148);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#993366" data-value="#10040166" title="" style="background-color: rgb(153, 51, 102);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 45px;">
                                                                    <a class="color-btn" href="#" data-color="#a58800" data-value="#10848256" title="" style="background-color: rgb(165, 136, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cccc00" data-value="#13421568" title="" style="background-color: rgb(204, 204, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffff00" data-value="#16776960" title="" style="background-color: rgb(255, 255, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffcc00" data-value="#16763904" title="" style="background-color: rgb(255, 204, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff9933" data-value="#16750899" title="" style="background-color: rgb(255, 153, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff6600" data-value="#16737792" title="" style="background-color: rgb(255, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff0033" data-value="#16711731" title="" style="background-color: rgb(255, 0, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc0066" data-value="#13369446" title="" style="background-color: rgb(204, 0, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#660033" data-value="#6684723" title="" style="background-color: rgb(102, 0, 51);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 55px;">
                                                                    <a class="color-btn" href="#" data-color="#996633" data-value="#10053171" title="" style="background-color: rgb(153, 102, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc9900" data-value="#13408512" title="" style="background-color: rgb(204, 153, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff9900" data-value="#16750848" title="" style="background-color: rgb(255, 153, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc6600" data-value="#13395456" title="" style="background-color: rgb(204, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff3300" data-value="#16724736" title="" style="background-color: rgb(255, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff0000" data-value="#16711680" title="" style="background-color: rgb(255, 0, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc0000" data-value="#13369344" title="" style="background-color: rgb(204, 0, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#990033" data-value="#10027059" title="" style="background-color: rgb(153, 0, 51);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 65px;">
                                                                    <a class="color-btn" href="#" data-color="#663300" data-value="#6697728" title="" style="background-color: rgb(102, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#996600" data-value="#10053120" title="" style="background-color: rgb(153, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc3300" data-value="#13382400" title="" style="background-color: rgb(204, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#993300" data-value="#10040064" title="" style="background-color: rgb(153, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#990000" data-value="#10027008" title="" style="background-color: rgb(153, 0, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#800000" data-value="#8388608" title="" style="background-color: rgb(128, 0, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#993333" data-value="#10040115" title="" style="background-color: rgb(153, 51, 51);"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="collapsable-remove collapsable-cell collapsable-options" style="display: inline;">
                                                    <div class="collapsable-check-label">
                                                        <label>Remove</label>
                                                    </div>
                                                    <div class="collapsable-checkbox">
                                                        <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="hidden">
                                                    <button class="btn btn-default btn-sm" data-title=" Options" type="button">
                                                        <span class="collapsable-options-label">Options</span><i class="fa fa-gear collapsable-options-icon"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h3>Personnel</h3>
                                <div class="form-group">
                                    <div class="select2-container select2-container-multi" id="s2id_txtPersonnelSearch" style="width: 100%;">
                                        <ul class="select2-choices">
                                            <li class="select2-search-field">
                                                <label for="s2id_autogen1" class="select2-offscreen"></label>
                                                <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" placeholder="" style="width: 523px;"> </li>
                                        </ul>
                                        <div class="select2-drop select2-drop-multi select2-display-none select2-slats">
                                            <ul class="select2-results"> </ul>
                                        </div>
                                    </div>
                                    <input type="text" id="txtPersonnelSearch" tabindex="-1" class="select2-offscreen">
                                </div>
                                <div id="divPersonnel">
                                    <section class="section">
                                        <div class="collapsable-table">
                                            <div class="collapsable-table-header collapsable-row">
                                                <div class="collapsable-name collapsable-cell">Name</div>
                                                <div class="collapsable-meta collapsable-cell">Color</div>
                                                <div class="collapsable-remove collapsable-cell">Remove</div>
                                                <div class="collapsable-options collapsable-cell"></div>
                                            </div>
                                            <div class="collapsable-row" data-calendarcolorid="16d057ee-8fb3-e511-80cd-005056a35e6e" data-color="#ffff00" data-coloritemtype="1" data-itemid="8ee0ccf0-86b3-e511-9de7-005056aa3b8e" id="divPerson8ee0ccf0-86b3-e511-9de7-005056aa3b8e">
                                                <div class="collapsable-name collapsable-cell">MT Itest InstAdmin(UID1774)</div>
                                                <div class="collapsable-meta collapsable-cell">
                                                    <span class="collapsable-limit" style="overflow: visible;">
                                                        <span class="collapsable-cell-label">Color</span>
                                                        <select id="selectColor8ee0ccf0-86b3-e511-9de7-005056aa3b8e" style="display: none;">
                                                            <option data-color="#003366" value="#13158"></option>
                                                            <option data-color="#336699" value="#3368601"></option>
                                                            <option data-color="#3366cc" value="#3368652"></option>
                                                            <option data-color="#003399" value="#13209"></option>
                                                            <option data-color="#000099" value="#153"></option>
                                                            <option data-color="#0000cc" value="#204"></option>
                                                            <option data-color="#000066" value="#102"></option>
                                                            <option data-color="#006666" value="#26214"></option>
                                                            <option data-color="#006699" value="#26265"></option>
                                                            <option data-color="#0099cc" value="#39372"></option>
                                                            <option data-color="#0066cc" value="#26316"></option>
                                                            <option data-color="#0033cc" value="#13260"></option>
                                                            <option data-color="#0000ff" value="#255"></option>
                                                            <option data-color="#3333ff" value="#3355647"></option>
                                                            <option data-color="#333399" value="#3355545"></option>
                                                            <option data-color="#669999" value="#6723993"></option>
                                                            <option data-color="#009999" value="#39321"></option>
                                                            <option data-color="#33cccc" value="#3394764"></option>
                                                            <option data-color="#00ccff" value="#52479"></option>
                                                            <option data-color="#0099ff" value="#39423"></option>
                                                            <option data-color="#0066ff" value="#26367"></option>
                                                            <option data-color="#3366ff" value="#3368703"></option>
                                                            <option data-color="#3333cc" value="#3355596"></option>
                                                            <option data-color="#666699" value="#6710937"></option>
                                                            <option data-color="#339966" value="#3381606"></option>
                                                            <option data-color="#00cc99" value="#52377"></option>
                                                            <option data-color="#00ffcc" value="#65484"></option>
                                                            <option data-color="#00ffff" value="#65535"></option>
                                                            <option data-color="#33ccff" value="#3394815"></option>
                                                            <option data-color="#3399ff" value="#3381759"></option>
                                                            <option data-color="#6699ff" value="#6724095"></option>
                                                            <option data-color="#6666ff" value="#6711039"></option>
                                                            <option data-color="#6600ff" value="#6684927"></option>
                                                            <option data-color="#6600cc" value="#6684876"></option>
                                                            <option data-color="#339933" value="#3381555"></option>
                                                            <option data-color="#00cc66" value="#52326"></option>
                                                            <option data-color="#00ff99" value="#65433"></option>
                                                            <option data-color="#66ffcc" value="#6750156"></option>
                                                            <option data-color="#66ffff" value="#6750207"></option>
                                                            <option data-color="#66ccff" value="#6737151"></option>
                                                            <option data-color="#99ccff" value="#10079487"></option>
                                                            <option data-color="#9999ff" value="#10066431"></option>
                                                            <option data-color="#9966ff" value="#10053375"></option>
                                                            <option data-color="#9933ff" value="#10040319"></option>
                                                            <option data-color="#9900ff" value="#10027263"></option>
                                                            <option data-color="#006600" value="#26112"></option>
                                                            <option data-color="#00cc00" value="#52224"></option>
                                                            <option data-color="#00ff00" value="#65280"></option>
                                                            <option data-color="#66ff99" value="#6750105"></option>
                                                            <option data-color="#99ffcc" value="#10092492"></option>
                                                            <option data-color="#ccffff" value="#13434879"></option>
                                                            <option data-color="#ccccff" value="#13421823"></option>
                                                            <option data-color="#cc99ff" value="#13408767"></option>
                                                            <option data-color="#cc66ff" value="#13395711"></option>
                                                            <option data-color="#cc33ff" value="#13382655"></option>
                                                            <option data-color="#cc00ff" value="#13369599"></option>
                                                            <option data-color="#9900cc" value="#10027212"></option>
                                                            <option data-color="#003300" value="#13056"></option>
                                                            <option data-color="#009933" value="#39219"></option>
                                                            <option data-color="#33cc33" value="#3394611"></option>
                                                            <option data-color="#66ff66" value="#6750054"></option>
                                                            <option data-color="#99ff99" value="#10092441"></option>
                                                            <option data-color="#ccffcc" value="#13434828"></option>
                                                            <option data-color="#ffffff" value="#16777215"></option>
                                                            <option data-color="#ffccff" value="#16764159"></option>
                                                            <option data-color="#ff99ff" value="#16751103"></option>
                                                            <option data-color="#ff66ff" value="#16738047"></option>
                                                            <option data-color="#ff00ff" value="#16711935"></option>
                                                            <option data-color="#cc00cc" value="#13369548"></option>
                                                            <option data-color="#660066" value="#6684774"></option>
                                                            <option data-color="#333300" value="#3355392"></option>
                                                            <option data-color="#009900" value="#39168"></option>
                                                            <option data-color="#66ff33" value="#6750003"></option>
                                                            <option data-color="#99ff66" value="#10092390"></option>
                                                            <option data-color="#ccff99" value="#13434777"></option>
                                                            <option data-color="#ffffcc" value="#16777164"></option>
                                                            <option data-color="#ffcccc" value="#16764108"></option>
                                                            <option data-color="#ff99cc" value="#16751052"></option>
                                                            <option data-color="#ff66cc" value="#16737996"></option>
                                                            <option data-color="#ff33cc" value="#16724940"></option>
                                                            <option data-color="#cc0099" value="#13369497"></option>
                                                            <option data-color="#993399" value="#10040217"></option>
                                                            <option data-color="#336600" value="#3368448"></option>
                                                            <option data-color="#669900" value="#6723840"></option>
                                                            <option data-color="#99ff33" value="#10092339"></option>
                                                            <option data-color="#ccff66" value="#13434726"></option>
                                                            <option data-color="#ffff99" value="#16777113"></option>
                                                            <option data-color="#ffcc99" value="#16764057"></option>
                                                            <option data-color="#ff9999" value="#16751001"></option>
                                                            <option data-color="#ff6699" value="#16737945"></option>
                                                            <option data-color="#ff3399" value="#16724889"></option>
                                                            <option data-color="#cc3399" value="#13382553"></option>
                                                            <option data-color="#990099" value="#10027161"></option>
                                                            <option data-color="#666633" value="#6710835"></option>
                                                            <option data-color="#99cc00" value="#10079232"></option>
                                                            <option data-color="#ccff33" value="#13434675"></option>
                                                            <option data-color="#ffff66" value="#16777062"></option>
                                                            <option data-color="#ffcc66" value="#16764006"></option>
                                                            <option data-color="#ff9966" value="#16750950"></option>
                                                            <option data-color="#ff6666" value="#16737894"></option>
                                                            <option data-color="#ff0066" value="#16711782"></option>
                                                            <option data-color="#d60094" value="#14024852"></option>
                                                            <option data-color="#993366" value="#10040166"></option>
                                                            <option data-color="#a58800" value="#10848256"></option>
                                                            <option data-color="#cccc00" value="#13421568"></option>
                                                            <option data-color="#ffff00" value="#16776960"></option>
                                                            <option data-color="#ffcc00" value="#16763904"></option>
                                                            <option data-color="#ff9933" value="#16750899"></option>
                                                            <option data-color="#ff6600" value="#16737792"></option>
                                                            <option data-color="#ff0033" value="#16711731"></option>
                                                            <option data-color="#cc0066" value="#13369446"></option>
                                                            <option data-color="#660033" value="#6684723"></option>
                                                            <option data-color="#996633" value="#10053171"></option>
                                                            <option data-color="#cc9900" value="#13408512"></option>
                                                            <option data-color="#ff9900" value="#16750848"></option>
                                                            <option data-color="#cc6600" value="#13395456"></option>
                                                            <option data-color="#ff3300" value="#16724736"></option>
                                                            <option data-color="#ff0000" value="#16711680"></option>
                                                            <option data-color="#cc0000" value="#13369344"></option>
                                                            <option data-color="#990033" value="#10027059"></option>
                                                            <option data-color="#663300" value="#6697728"></option>
                                                            <option data-color="#996600" value="#10053120"></option>
                                                            <option data-color="#cc3300" value="#13382400"></option>
                                                            <option data-color="#993300" value="#10040064"></option>
                                                            <option data-color="#990000" value="#10027008"></option>
                                                            <option data-color="#800000" value="#8388608"></option>
                                                            <option data-color="#993333" value="#10040115"></option>
                                                        </select>
                                                        <div class="dropdown dropdown-colorselector">
                                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                                <span class="btn-colorselector" style="background-color: rgb(255, 255, 0);"></span>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-caret">
                                                                <li style="margin-left: 65px;">
                                                                    <a class="color-btn" href="#" data-color="#003366" data-value="#13158" title="" style="background-color: rgb(0, 51, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#336699" data-value="#3368601" title="" style="background-color: rgb(51, 102, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3366cc" data-value="#3368652" title="" style="background-color: rgb(51, 102, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#003399" data-value="#13209" title="" style="background-color: rgb(0, 51, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#000099" data-value="#153" title="" style="background-color: rgb(0, 0, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0000cc" data-value="#204" title="" style="background-color: rgb(0, 0, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#000066" data-value="#102" title="" style="background-color: rgb(0, 0, 102);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 55px;">
                                                                    <a class="color-btn" href="#" data-color="#006666" data-value="#26214" title="" style="background-color: rgb(0, 102, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#006699" data-value="#26265" title="" style="background-color: rgb(0, 102, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0099cc" data-value="#39372" title="" style="background-color: rgb(0, 153, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0066cc" data-value="#26316" title="" style="background-color: rgb(0, 102, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0033cc" data-value="#13260" title="" style="background-color: rgb(0, 51, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0000ff" data-value="#255" title="" style="background-color: rgb(0, 0, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3333ff" data-value="#3355647" title="" style="background-color: rgb(51, 51, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#333399" data-value="#3355545" title="" style="background-color: rgb(51, 51, 153);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 45px;">
                                                                    <a class="color-btn" href="#" data-color="#669999" data-value="#6723993" title="" style="background-color: rgb(102, 153, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#009999" data-value="#39321" title="" style="background-color: rgb(0, 153, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#33cccc" data-value="#3394764" title="" style="background-color: rgb(51, 204, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ccff" data-value="#52479" title="" style="background-color: rgb(0, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0099ff" data-value="#39423" title="" style="background-color: rgb(0, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#0066ff" data-value="#26367" title="" style="background-color: rgb(0, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3366ff" data-value="#3368703" title="" style="background-color: rgb(51, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3333cc" data-value="#3355596" title="" style="background-color: rgb(51, 51, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#666699" data-value="#6710937" title="" style="background-color: rgb(102, 102, 153);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 35px;">
                                                                    <a class="color-btn" href="#" data-color="#339966" data-value="#3381606" title="" style="background-color: rgb(51, 153, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00cc99" data-value="#52377" title="" style="background-color: rgb(0, 204, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ffcc" data-value="#65484" title="" style="background-color: rgb(0, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ffff" data-value="#65535" title="" style="background-color: rgb(0, 255, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#33ccff" data-value="#3394815" title="" style="background-color: rgb(51, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#3399ff" data-value="#3381759" title="" style="background-color: rgb(51, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#6699ff" data-value="#6724095" title="" style="background-color: rgb(102, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#6666ff" data-value="#6711039" title="" style="background-color: rgb(102, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#6600ff" data-value="#6684927" title="" style="background-color: rgb(102, 0, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#6600cc" data-value="#6684876" title="" style="background-color: rgb(102, 0, 204);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 25px;">
                                                                    <a class="color-btn" href="#" data-color="#339933" data-value="#3381555" title="" style="background-color: rgb(51, 153, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00cc66" data-value="#52326" title="" style="background-color: rgb(0, 204, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ff99" data-value="#65433" title="" style="background-color: rgb(0, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ffcc" data-value="#6750156" title="" style="background-color: rgb(102, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ffff" data-value="#6750207" title="" style="background-color: rgb(102, 255, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ccff" data-value="#6737151" title="" style="background-color: rgb(102, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ccff" data-value="#10079487" title="" style="background-color: rgb(153, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9999ff" data-value="#10066431" title="" style="background-color: rgb(153, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9966ff" data-value="#10053375" title="" style="background-color: rgb(153, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9933ff" data-value="#10040319" title="" style="background-color: rgb(153, 51, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9900ff" data-value="#10027263" title="" style="background-color: rgb(153, 0, 255);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 15px;">
                                                                    <a class="color-btn" href="#" data-color="#006600" data-value="#26112" title="" style="background-color: rgb(0, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00cc00" data-value="#52224" title="" style="background-color: rgb(0, 204, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#00ff00" data-value="#65280" title="" style="background-color: rgb(0, 255, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ff99" data-value="#6750105" title="" style="background-color: rgb(102, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ffcc" data-value="#10092492" title="" style="background-color: rgb(153, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccffff" data-value="#13434879" title="" style="background-color: rgb(204, 255, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccccff" data-value="#13421823" title="" style="background-color: rgb(204, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc99ff" data-value="#13408767" title="" style="background-color: rgb(204, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc66ff" data-value="#13395711" title="" style="background-color: rgb(204, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc33ff" data-value="#13382655" title="" style="background-color: rgb(204, 51, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc00ff" data-value="#13369599" title="" style="background-color: rgb(204, 0, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#9900cc" data-value="#10027212" title="" style="background-color: rgb(153, 0, 204);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 5px;">
                                                                    <a class="color-btn" href="#" data-color="#003300" data-value="#13056" title="" style="background-color: rgb(0, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#009933" data-value="#39219" title="" style="background-color: rgb(0, 153, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#33cc33" data-value="#3394611" title="" style="background-color: rgb(51, 204, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ff66" data-value="#6750054" title="" style="background-color: rgb(102, 255, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ff99" data-value="#10092441" title="" style="background-color: rgb(153, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccffcc" data-value="#13434828" title="" style="background-color: rgb(204, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffffff" data-value="#16777215" title="" style="background-color: rgb(255, 255, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffccff" data-value="#16764159" title="" style="background-color: rgb(255, 204, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff99ff" data-value="#16751103" title="" style="background-color: rgb(255, 153, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff66ff" data-value="#16738047" title="" style="background-color: rgb(255, 102, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff00ff" data-value="#16711935" title="" style="background-color: rgb(255, 0, 255);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc00cc" data-value="#13369548" title="" style="background-color: rgb(204, 0, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#660066" data-value="#6684774" title="" style="background-color: rgb(102, 0, 102);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 15px;">
                                                                    <a class="color-btn" href="#" data-color="#333300" data-value="#3355392" title="" style="background-color: rgb(51, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#009900" data-value="#39168" title="" style="background-color: rgb(0, 153, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#66ff33" data-value="#6750003" title="" style="background-color: rgb(102, 255, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ff66" data-value="#10092390" title="" style="background-color: rgb(153, 255, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccff99" data-value="#13434777" title="" style="background-color: rgb(204, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffffcc" data-value="#16777164" title="" style="background-color: rgb(255, 255, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffcccc" data-value="#16764108" title="" style="background-color: rgb(255, 204, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff99cc" data-value="#16751052" title="" style="background-color: rgb(255, 153, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff66cc" data-value="#16737996" title="" style="background-color: rgb(255, 102, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff33cc" data-value="#16724940" title="" style="background-color: rgb(255, 51, 204);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc0099" data-value="#13369497" title="" style="background-color: rgb(204, 0, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#993399" data-value="#10040217" title="" style="background-color: rgb(153, 51, 153);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 25px;">
                                                                    <a class="color-btn" href="#" data-color="#336600" data-value="#3368448" title="" style="background-color: rgb(51, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#669900" data-value="#6723840" title="" style="background-color: rgb(102, 153, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99ff33" data-value="#10092339" title="" style="background-color: rgb(153, 255, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccff66" data-value="#13434726" title="" style="background-color: rgb(204, 255, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffff99" data-value="#16777113" title="" style="background-color: rgb(255, 255, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffcc99" data-value="#16764057" title="" style="background-color: rgb(255, 204, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff9999" data-value="#16751001" title="" style="background-color: rgb(255, 153, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff6699" data-value="#16737945" title="" style="background-color: rgb(255, 102, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff3399" data-value="#16724889" title="" style="background-color: rgb(255, 51, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc3399" data-value="#13382553" title="" style="background-color: rgb(204, 51, 153);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#990099" data-value="#10027161" title="" style="background-color: rgb(153, 0, 153);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 35px;">
                                                                    <a class="color-btn" href="#" data-color="#666633" data-value="#6710835" title="" style="background-color: rgb(102, 102, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#99cc00" data-value="#10079232" title="" style="background-color: rgb(153, 204, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ccff33" data-value="#13434675" title="" style="background-color: rgb(204, 255, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffff66" data-value="#16777062" title="" style="background-color: rgb(255, 255, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffcc66" data-value="#16764006" title="" style="background-color: rgb(255, 204, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff9966" data-value="#16750950" title="" style="background-color: rgb(255, 153, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff6666" data-value="#16737894" title="" style="background-color: rgb(255, 102, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff0066" data-value="#16711782" title="" style="background-color: rgb(255, 0, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#d60094" data-value="#14024852" title="" style="background-color: rgb(214, 0, 148);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#993366" data-value="#10040166" title="" style="background-color: rgb(153, 51, 102);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 45px;">
                                                                    <a class="color-btn" href="#" data-color="#a58800" data-value="#10848256" title="" style="background-color: rgb(165, 136, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cccc00" data-value="#13421568" title="" style="background-color: rgb(204, 204, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn selected" href="#" data-color="#ffff00" data-value="#16776960" title="" style="background-color: rgb(255, 255, 0);"><i class="fa fa-check"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ffcc00" data-value="#16763904" title="" style="background-color: rgb(255, 204, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff9933" data-value="#16750899" title="" style="background-color: rgb(255, 153, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff6600" data-value="#16737792" title="" style="background-color: rgb(255, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff0033" data-value="#16711731" title="" style="background-color: rgb(255, 0, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc0066" data-value="#13369446" title="" style="background-color: rgb(204, 0, 102);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#660033" data-value="#6684723" title="" style="background-color: rgb(102, 0, 51);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 55px;">
                                                                    <a class="color-btn" href="#" data-color="#996633" data-value="#10053171" title="" style="background-color: rgb(153, 102, 51);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc9900" data-value="#13408512" title="" style="background-color: rgb(204, 153, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff9900" data-value="#16750848" title="" style="background-color: rgb(255, 153, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc6600" data-value="#13395456" title="" style="background-color: rgb(204, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff3300" data-value="#16724736" title="" style="background-color: rgb(255, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#ff0000" data-value="#16711680" title="" style="background-color: rgb(255, 0, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc0000" data-value="#13369344" title="" style="background-color: rgb(204, 0, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#990033" data-value="#10027059" title="" style="background-color: rgb(153, 0, 51);"></a>
                                                                </li>
                                                                <li style="clear: both; margin-left: 65px;">
                                                                    <a class="color-btn" href="#" data-color="#663300" data-value="#6697728" title="" style="background-color: rgb(102, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#996600" data-value="#10053120" title="" style="background-color: rgb(153, 102, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#cc3300" data-value="#13382400" title="" style="background-color: rgb(204, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#993300" data-value="#10040064" title="" style="background-color: rgb(153, 51, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#990000" data-value="#10027008" title="" style="background-color: rgb(153, 0, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#800000" data-value="#8388608" title="" style="background-color: rgb(128, 0, 0);"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="color-btn" href="#" data-color="#993333" data-value="#10040115" title="" style="background-color: rgb(153, 51, 51);"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="collapsable-remove collapsable-cell collapsable-options" style="display: inline;">
                                                    <div class="collapsable-check-label">
                                                        <label>Remove</label>
                                                    </div>
                                                    <div class="collapsable-checkbox">
                                                        <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="hidden">
                                                    <button class="btn btn-default btn-sm" data-title=" Options" type="button">
                                                        <span class="collapsable-options-label">Options</span><i class="fa fa-gear collapsable-options-icon"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php
                        $stickybar = array(
                            'sets' => array(
                                array(
                                    'html' => '
                                        <button class="btn btn-success" id="btnSave" name="SaveColors" type="submit">Save</button>
                                        <a class="btn btn-default" href="/scheduling-calendar.php">Cancel</a>
                                    ',
                                ),
                            ),
                        );
                        echo createStickybar($stickybar);
                    ?>

                </form>
            </section>
        </div>
    </div>
    <?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>

