<form>
	<h3>Why are you taking this learning?</h3>
	<ul class="list--auto-width text-left">
		<li class="checkbox">
			<label><input type="radio" name="reason"> I'm earning credit to renew a Certification </label>
		</li>
		<li class="checkbox">
			<label><input type="radio" name="reason"> I'm interested in this content </label>
		</li>
		<li class="checkbox">
			<label><input type="radio" name="reason"> I'm an admin previewing this course</label>
		</li>
		<li class="checkbox">
			<label><input type="radio" name="reason"> Other</label>
		</li>
	</ul>
	<div class="form-group text-left comments ">
		<label class="control-label ">Comments <small>Optional</small></label>
		<textarea class="form-control"></textarea>
	</div>

	<?php
$stickybar = array(
'sets' => array(
array(
'position' => 'left',
'classes' => array('hidden-xs', 'hidden-sm'),
'html' => '
<a href="#" class="btn btn-success">Save</a>
',
),
array(
'position' => 'left',
'classes' => array('visible-xs', 'visible-sm'),
'html' => '
<a href="#modal-print" class="btn btn-success">Save</a>
',
),
),
);
echo createStickybar($stickybar);
?>
</form>