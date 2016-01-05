<?php

use Helpers\Assets;
use Helpers\Hooks;
use Helpers\Url;

//initialise hooks
$hooks = Hooks::get();

$hooks->run('footer');
?>

<!-- JS -->
<?php
Assets::js(array(
	Url::templatePath().'assets/js/jquery.min.js',
	Url::templatePath().'assets/bootstrap/js/bootstrap.js'
	));
$hooks->run('js');
?>
</body>
</html>