<?php

define('DEBUG_THEME', true);

class FolioTheme extends Theme
{
	function action_template_header($theme) {
		// Add the HTML5 shiv for IE < 9
		Stack::add('template_header_javascript', array('http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js', null, '<!--[if lt IE 9]>%s<![endif]-->'), 'html5_shiv');

		// Add this line to your config.php to show an error and a notice, and
		// to process the raw LESS code via javascript instead of the rendered CSS:  define('DEBUG_THEME', 1);
		if(defined('DEBUG_THEME')) {
//			Session::error('This is a <b>sample error</b>');
//			Session::notice('This is a <b>sample notice</b> for ' . $_SERVER['REQUEST_URI']);

			Stack::add('template_header_javascript', $theme->get_url('/less/less-1.3.0.min.js'), 'less');
			Stack::add('template_stylesheet', array($theme->get_url('/less/styles.less'), null, array('type'=> null, 'rel' => 'stylesheet/less')), 'style');
		}
		else {
			Stack::add('template_stylesheet', $theme->get_url('/css/styles.css'), 'style');
		}
		Stack::add('template_header_javascript', Site::get_url('vendor', '/jquery.js'), 'jquery');
		Stack::add('template_header_javascript', Site::get_url('vendor', '/jquery-ui.min.js'), 'jquery.ui', 'jquery');
		Stack::add('template_header_javascript', $this->get_url('/js/bootstrap-modal.js'), 'boostrap-modal', 'require');
		Stack::add('template_header_javascript', $this->get_url('/js/require.js'), 'require');
	}

}

?>