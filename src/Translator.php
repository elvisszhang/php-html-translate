<?php
namespace Elviss\PhpTranslate;
use Sunra\PhpSimple\HtmlDomParser;

class Translator {
	public function __construct(){
		
	}
    public function transText($text) {
        return '[TR] ' . baidu_translate($text,'zh','en');
    }
	public function transHtml($html) {
		include( __DIR__ . '/baidu_transapi.php');
		$parser = HtmlDomParser::str_get_html( $html );
		// Register the callback function with it's function name
		$callback = function ($element) {
			if ($element->tag=='text' && !strstr($element->innertext,'[TR]')  ){
				$tr = baidu_translate($element->innertext,'zh','en');
				$element->innertext = $tr['trans_result'][0]['dst'];
			}
		};
		$parser->set_callback($callback);
		// Callback function will be invoked while dumping
		return $parser->save();
    }
}
