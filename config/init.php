<?php

namespace iem;

use iem\core\tags;
use iem\core\widgets;
use iem\api\customizer;
use iem\api\settings;
use iem\api\Widgets\TextWidget;
use iem\setup\setup;
use iem\setup\menus;
use iem\setup\header;
use iem\setup\enqueue;
use iem\custom\custom;
use iem\custom\admin;
use iem\custom\extras;
use iem\plugins\jetpack;
use iem\plugins\acf;

class init
{
	private static $loaded = false;

	/*
	 * Construct class to activate actions and hooks as soon as the class is initialized
	 */
	public function __construct()
	{
		$this->initClasses();
	}

	public function initClasses()
	{
		if (self::$loaded) {
			return;
		}

		self::$loaded = true;

		new setup();
		new enqueue();
		new header();
		new customizer();
		new TextWidget();
		new extras();
		new jetpack();
		new acf();
		new menus();
		new tags();
		new widgets();

//		new custom();
//		new admin();
	}
}
