<h1>Zifza Theme Opstions</h1>
<h3 class="title"> Manage Options</h3>
<p>Customize Sidebar Options</p>

<form method="post" action="">
	<?php settings_fields( 'zifza-settings-group' ); ?>
	<?php do_settings_sections( 'zifza' ); ?>
</form>