<?php
class PageTest extends TestCase
{
    /**
* A basic functional test example.
*
* @return void
*/
    public function testBasicExample()
    {
        $this->visit('/') //routes
             ->see('Laravel 5');
    }

    public function testDisplaysHomepage()
    {
        $this->visit('/') // routes
             ->see('Laravel 5')
             ->dontSee('Error');
    }
}