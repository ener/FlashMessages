<?php
/**
 * FlashMessages
 *
 * Show and Set Global and Local Messages
 *
 * @author Verstov Andrey <andrey@verstov.ru>
 * @copyright (c) 2010 EnerDesign <http://enerdesign.ru>
 */
class FlashMessages {
	/**
	 * @static
	 * @return mixed
	 */
	public static function getGlobalMessages() {
		return Session::instance()->get_once('globalMessages', array());
	}

	/**
	 * @static
	 * @return mixed
	 */
	public static function getLocalMessages() {
		return Session::instance()->get_once('localMessages', array());
	}

	/**
	 * @static
	 * @param  $message
	 * @return void
	 */
	public static function setGlobalMessage($message) {
		Session::instance()->set('globalMessages', array_merge(self::getGlobalMessages(), array($message)));
	}

	/**
	 * @static
	 * @param  $message
	 * @return void
	 */
	public static function setLocalMessage($message) {
		Session::instance()->set('localMessages', array_merge(self::getLocalMessages(), array($message)));
	}

	/**
	 * @static
	 * @return Kohana_View
	 */
	public static function showGlobalMessages() {
		$messages = self::getGlobalMessages();
		return View::factory('global')->set('messages', $messages);
	}

	/**
	 * @static
	 * @return Kohana_View
	 */
	public static function showLocalMessages() {
		$messages = self::getLocalMessages();
		return View::factory('local')->set('messages', $messages);
	}
}