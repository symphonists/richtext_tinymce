<?php

	Class extension_richtext_tinymce extends Extension{

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'		=> '/backend/',
					'delegate'	=> 'InitaliseAdminPageHead',
					'callback'	=> 'initaliseAdminPageHead'
				)
			);
		}

		public function initaliseAdminPageHead($context) {
			$page = Administration::instance()->Page;

			// only on publish pages
			if(!$page instanceOf contentPublish) return;

			// which are showing new/edit form
			$callback = Administration::instance()->getPageCallback();
			if(!in_array($callback['context']['page'], array('new', 'edit'))) return;

			Administration::instance()->Page->addScriptToHead(URL . '/extensions/richtext_tinymce/lib/tinymce.min.js', 200);
			Administration::instance()->Page->addScriptToHead(URL . '/extensions/richtext_tinymce/assets/richtext_tinymce.publish.js', 201);
		}

	}
