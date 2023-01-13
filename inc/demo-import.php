<?php
function accounting_import_files() {
	return [
		[
			'import_file_name'             => 'Accounting Demo Import',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-content/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-content/widget.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-content/customizer.dat',

		]
	];

}

add_filter( 'ocdi/import_files', 'accounting_import_files' );