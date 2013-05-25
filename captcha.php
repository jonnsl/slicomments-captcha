<?php
/**
 * @package		sliComments
 * @subpackage	Captcha Plugin
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgSlicommentsCaptcha extends JPlugin
{
	public function onContentPrepareForm($form, $data)
	{
		if ($form->getName() != 'com_slicomments.comment') return;
		if ($this->params->get('guest_only', true) && !JFactory::getUser()->guest) return;

		// Load the custom form
		$this->loadLanguage();
		$form->loadFile(dirname(__FILE__).'/forms/captcha.xml');
	}
}
