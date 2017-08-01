<?php
class PageTest extends TestCase
{
    /**
* A basic functional test example.
*
* @return void
*/
    public function testHomepage()
    {
        $this->visit('/') //routes
             ->see('Laravel 5');
    }

    public function testErrorHomepage()
    {
        $this->visit('/') // routes
             ->see('Laravel 5')
             ->dontSee('Error');
    }

    public function testDisplaysAlpha()
    {
        $this->visit('/alpha')
             ->see('Alpha')
             ->dontSee('Beta');
    }
}