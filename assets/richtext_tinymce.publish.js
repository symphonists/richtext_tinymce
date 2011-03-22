/*
	Implements tinyMCE for available textareas. The tinyMCE.init call can be
	extended with further buttons/configuration options. For details, see:
	http://tinymce.moxiecode.com/wiki.php/Configuration
*/

jQuery(document).ready(function() {
	
	jQuery('textarea.tinymce').tinymce({
		
		script_url: Symphony.Context.get('root') + '/extensions/richtext_tinymce/lib/tiny_mce.js',

		theme: 'advanced',
		plugins: '',
		skin: 'symphony',

		theme_advanced_buttons1 : 'formatselect,bold,italic,underline,|,bullist,numlist,outdent,indent,|,blockquote,link,unlink,image,|,copy,paste,pastetext,pasteword,|,undo,redo,|,cleanup,code',
		theme_advanced_buttons2 : '',
		theme_advanced_buttons3 : '',
		theme_advanced_buttons4 : '',
		theme_advanced_toolbar_location : 'top',
		theme_advanced_toolbar_align : 'left',
		theme_advanced_resizing : true,

		template_external_list_url : 'lists/template_list.js',
		external_link_list_url : 'lists/link_list.js',
		external_image_list_url : 'lists/image_list.js',
		media_external_list_url : 'lists/media_list.js',
		
		entities: ''
		
	});
	
});