<ul class="list-inline no-margin">
	<li class="col-md-3">
		<b><?php echo $this->lang('registration_date') ?></b><br />
		<?php echo time_span($registration_date) ?>
	</li>
	<li class="col-md-3">
		<b><?php echo $this->lang('last_activity') ?></b><br />
		<?php echo time_span($last_activity_date) ?>
	</li>
	<li class="col-md-6">
		<b><?php echo $this->lang('groups') ?></b><br />
		<?php echo $groups ?>
	</li>
</ul>