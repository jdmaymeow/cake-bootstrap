<?php
namespace CakeBootstrap\Test\TestCase\View\Helper;

use Bootstrap\View\Helper\FormHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * Bootstrap\View\Helper\FormHelper Test Case
 */
class FormHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Bootstrap\View\Helper\FormHelper
     */
    public $Form;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Form = new FormHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Form);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
