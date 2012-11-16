<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.mobly.com.br/");
  }

  public function testMyTestCase()
  {
    $this->open("/");
    $this->click("css=#cat_322 > span.nav-subTxt");
    $this->waitForPageToLoad("30000");
    $this->verifyTextPresent("");
  }
}
?>