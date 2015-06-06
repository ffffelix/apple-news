<?php

require_once __DIR__ . '/../../../includes/exporter/components/class-component.php';
require_once __DIR__ . '/../../../includes/exporter/components/class-intro.php';

use \Exporter\Components\Intro as Intro;

class BodyTest extends PHPUnit_Framework_TestCase {

	public function testBuildingRemovesTags() {
		$intro_component = new Intro( 'Test intro text.', null );

		$this->assertEquals(
			array(
				'role' => 'intro',
				'text' => 'Test intro text.',
		 	),
			$intro_component->value()
		);
	}

}

