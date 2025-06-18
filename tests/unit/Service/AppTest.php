<?php

namespace OCA\EmailTemplates\Tests;

use OCA\EmailTemplates\AppInfo\Application;
use Test\TestCase;

class AppTest extends TestCase {

	public function setUp(): void {
		parent::setUp();
	}

	public function testDummy() {
		$app = new Application();
		$this->assertEquals('email_templates', $app::APP_ID);
	}
}
