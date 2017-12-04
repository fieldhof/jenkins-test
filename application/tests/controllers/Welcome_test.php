<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
	public function test_onetwo() {
		$this->assertEquals('1', '2');
	}

	public function test_index()
	{
		$output = $this->request('GET', 'welcome/index');
		$this->assertContains('<title>Welcome to CodeIgniter</title>', $output);
	}

	public function test_test() {
		$this->assertEquals('1', '1', "Dude where did it go wrong");
	}

	public function test_test1() {
		$this->assertEquals('1', '1', "Dude where did it go wrong");
	}

	public function test_test2() {
		$this->assertEquals('1', '1', "Dude where did it go wrong");
	}

	public function test_test3() {
		$this->assertEquals('1', '1', "Dude where did it go wrong");
	}

	public function test_method_404()
	{
		$this->request('GET', 'welcome/method_not_exist');
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
}
