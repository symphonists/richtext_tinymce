/*
 Implements tinyMCE for available textareas. The tinyMCE.init call can be
 extended with further buttons/configuration options. For details, see:
 http://tinymce.moxiecode.com/wiki.php/Configuration
 */

jQuery(document).ready(function () {

	var root = Symphony.Context.get('root');

	tinymce.init({
		selector: 'textarea.tinymce',
		theme: 'modern',
		menubar: "edit view insert format table tools",
		toolbar: "undo redo formatselect bold italic underline justifyleft justifycenter justifyright justifyfull outdent indent image code link numlist bullist",
		relative_urls: false,
		remove_script_host: false,
		convert_urls: true,
		entity_encoding: 'raw',
		plugins: "image imagetools table code link lists",
		imagetools_proxy: 'proxy.php',
		images_upload_url: root + "/extensions/richtext_tinymce/content/content.imageupload.php",
		automatic_uploads: true
	});

});
