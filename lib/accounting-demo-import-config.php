<?php


function accounting_import_files() {
	return array(
		array(
			'import_file_name'             => 'accounting demo import',
		
			'local_import_file'            => trailingslashit( get_template_directory() ).'/Demo-content/accounting-demo-content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ).'/Demo-content/themedev-widgets.wie',
			'import_customizer_file_url' => trailingslashit( get_template_directory() ).'/Demo-content/accounting-export.dat',
           
		
		),
	);
}
add_filter( 'ocdi/import_files', 'accounting_import_files' );