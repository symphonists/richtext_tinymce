/*
	Implements tinyMCE for available textareas. The tinyMCE.init call can be
	extended with further buttons/configuration options. For details, see:
	http://tinymce.moxiecode.com/wiki.php/Configuration
*/

jQuery(document).ready(function() {

	tinymce.init({
		selector: 'textarea.tinymce',
		theme : 'modern',
		relative_urls : false,
		// block_formats: 'Paragraph=p;Header 2=h2;Header 3=h3;Header 4=h4',
		// plugins : 'link image media code preview searchreplace paste wordcount',
		// menu : {
	    //	edit: {title: 'Edit', items: 'copy paste pastetext | selectall'},
	    //	format: {title: 'Format', items: 'strikethrough superscript subscript | removeformat'}
		// },
		// toolbar : 'undo redo | formatselect | bold italic underline | bullist numlist | blockquote link unlink | image media | preview code searchreplace',
		// setup: function (editor) {
		// 	editor.addButton('customimage', {
		// 		icon: 'image',
	    //   		onclick: function () {
		// 			editor.insertContent('[image: <em>http://</em> caption: <em>lorem ipsum</em>]');
		// 		}
		//     }),
		// 	editor.addButton('customvideo', {
		// 		icon: 'media',
	    //   		onclick: function () {
		// 			editor.insertContent('[video: http://]');
		// 		}
		//     });
		// },
		// media_poster: false,
		// media_alt_source: false,
		// automatic_uploads: true,
		// image_dimensions: false,
		// image_caption: true
  	});

});
