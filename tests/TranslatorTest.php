<?php
namespace Elviss\HtmlTranslate\Tests;
use PHPUnit\Framework\TestCase;
use Elviss\HtmlTranslate\Translator;

final class TranslatorTest extends TestCase 
{
    public function testCannotBeShow(){
        $tr = new Translator;
        
        $this->expectOutputString($tr->translate('hello world'));
		print $tr->translate('hello world');
    }
}