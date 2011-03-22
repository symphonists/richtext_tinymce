<?php

	Class formattertinymce extends TextFormatter{
		
		function about(){
			return array(
						 'name' => 'Rich Text (TinyMCE)',
						 'version' => '2.0',
						 'release-date' => '2011-03-22',
						 'author' => array('name' => 'Symphony Community',
										   'website' => 'https://github.com/symphonists')
				 		);
		}
		
		function run($string){
			return str_replace('&nbsp;', '&#160;', $string);
		}
		
	}