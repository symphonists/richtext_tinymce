<?php

Class extension_richtext_tinymce extends Extension {

	public function getSubscribedDelegates() {
		return array(
			array(
				'page' => '/backend/',
				'delegate' => 'InitaliseAdminPageHead',
				'callback' => 'initaliseAdminPageHead'
			),
			array(
				'page' => '/system/preferences/',
				'delegate' => 'AddCustomPreferenceFieldsets',
				'callback' => 'appendPreferences'
			),
			array(
				'page' => '/system/preferences/',
				'delegate' => 'Save',
				'callback' => 'savePreferences'
			)
		);
	}

	public function install() {
		// set default image folder path
		Symphony::Configuration()->set('imagepath', WORKSPACE . '/tinymce/images/', 'tinymce');
		Symphony::Configuration()->write();
		return (General::realiseDirectory(Symphony::Configuration()->get('imagepath', 'tinymce')));
	}

	public function uninstall() {
		// remove preferences
		Symphony::Configuration()->remove('tinymce');
	}

	public function initaliseAdminPageHead($context) {
		$page = Administration::instance()->Page;

		// only on publish pages
		if (!$page instanceOf contentPublish)
			return;

		// which are showing new/edit form
		$callback = Administration::instance()->getPageCallback();
		if (!in_array($callback['context']['page'], array('new', 'edit')))
			return;

		Administration::instance()->Page->addScriptToHead(URL . '/extensions/richtext_tinymce/lib/tinymce.min.js', 200);
		Administration::instance()->Page->addScriptToHead(URL . '/extensions/richtext_tinymce/assets/richtext_tinymce.publish.js', 201);
	}

	public function appendPreferences($context) {
		// add new fieldset
		$group = new XMLElement('fieldset');
		$group->setAttribute('class', 'settings');
		$group->appendChild(new XMLElement('legend', 'TinyMCE'));

		// add image path field
		$label = Widget::Label(__('Image path'));
		$label->appendChild(Widget::Input('settings[tinymce][imagepath]', Symphony::Configuration()->get('imagepath', 'tinymce'), 'text'));
		$group->appendChild($label);
		$group->appendChild(new XMLElement('p', 'The directory where uploaded images are stored (default: WORKSPACE/tinymce/images) Note: Trailing slash is required', array('class' => 'help')));

		$context['wrapper']->appendChild($group);
	}

}
