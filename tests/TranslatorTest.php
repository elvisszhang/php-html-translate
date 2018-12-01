<?php
namespace Elviss\PhpTranslate\Tests;
use PHPUnit\Framework\TestCase;
use Elviss\PhpTranslate\Translator;

final class TranslatorTest extends TestCase 
{
    public function testHtml(){
        $tr = new Translator;
        
        //$this->expectOutputString($tr->transHtml('<a>你好世界</a>'));
		print $tr->transHtml('<a>你好世界</a>');
    }
}