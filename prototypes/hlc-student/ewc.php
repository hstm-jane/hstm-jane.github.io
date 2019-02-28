<?php
include "includes/helpers/helpers.php";
?>
<?= createSiteStart(); ?>
<div class="ewc-nav">
    <div class="row">
        <div class="col-sm-6">
            <table>
                <tr>
                    <td class="ewc-nav-page">Page 1 of 20</td>
                    <td class="ewc-nav-controls">
                        <div class="btn-group">
                          <a href="#" class="btn btn-default disabled"><i class="fa fa-chevron-left"></i><span>Previous</span></a>
                          <a href="#" class="btn btn-default"><i class="fa fa-repeat"></i><span>Replay</span></a>
                          <a href="#" class="btn btn-success"><span>Next</span><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table>
                <tr>
                    <td class="ewc-nav-powered"><div class="ewc-nav-logo"></div></td>
                    <td class="ewc-nav-exit"><a href="#" class="btn btn-inverse"><i class="fa fa-times"></i><span>Exit Lesson</span></a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="ewc-nav">
    <div class="row">
        <div class="col-sm-6">
            <table>
                <tr>
                    <td class="ewc-nav-page">Page 2 of 20</td>
                    <td class="ewc-nav-controls">
                        <div class="btn-group">
                          <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i><span>Previous</span></a>
                          <a href="#" class="btn btn-default"><i class="fa fa-repeat"></i><span>Replay</span></a>
                          <a href="#" class="btn btn-success"><span>Next</span><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table>
                <tr>
                    <td class="ewc-nav-powered"><div class="ewc-nav-logo"></div></td>
                    <td class="ewc-nav-exit"><a href="#" class="btn btn-inverse"><i class="fa fa-times"></i><span>Exit Lesson</span></a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="ewc-nav">
    <div class="row">
        <div class="col-sm-6">
            <table>
                <tr>
                    <td class="ewc-nav-page">Page 20 of 20</td>
                    <td class="ewc-nav-controls">
                        <div class="btn-group">
                          <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i><span>Previous</span></a>
                          <a href="#" class="btn btn-default"><i class="fa fa-repeat"></i><span>Replay</span></a>
                          <a href="#" class="btn btn-default disabled"><span>Next</span><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table>
                <tr>
                    <td class="ewc-nav-powered"><div class="ewc-nav-logo"></div></td>
                    <td class="ewc-nav-exit"><a href="#" class="btn btn-success"><i class="fa fa-times"></i><span>Exit Lesson</span></a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<?= createSiteEnd(); ?>