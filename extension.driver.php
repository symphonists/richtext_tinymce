<?php

	Class extension_richtext_tinymce extends Extension{

		public function about(){
			return array('name' => 'Formatter: Rich Text (TinyMCE)',
						 'version' => '2.0',
						 'release-date' => '2011-03-22',
						 'author' => array('name' => 'Symphony Community',
										   'website' => 'https://github.com/symphonists')
				 		);
		}
		
		public function getSubscribedDelegates(){
			return array(
						array(
							'page' => '/backend/',
							'delegate' => 'ModifyTextareaFieldPublishWidget',
							'callback' => 'modifyTextarea'
						),
						
			);
		}
		
		public function modifyTextarea($context){
			if($context['field']->get('formatter') != 'tinymce') return;
			
			if(!defined('__TINYMCE_SCRIPTS_IN_HEAD__') || !__TINYMCE_SCRIPTS_IN_HEAD__){
				define_safe('__TINYMCE_SCRIPTS_IN_HEAD__', TRUE);
				Administration::instance()->Page->addScriptToHead(URL . '/extensions/richtext_tinymce/lib/jquery.tinymce.js', 200);
				Administration::instance()->Page->addScriptToHead(URL . '/extensions/richtext_tinymce/assets/richtext_tinymce.publish.js', 201);
			}
			
			$context['textarea']->setAttribute('id', trim($context['textarea']->getAttribute('id') . ' ' . $context['field']->get('element_name')));
				
		}
		
		
	}

