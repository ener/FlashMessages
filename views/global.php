<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div id="globalMessages" style="display:block;">
	<ul>
		<li>
		<?php echo implode('</li>,<li>', $messages)?>
		</li>
	</ul>
</div>