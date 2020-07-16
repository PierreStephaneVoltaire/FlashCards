<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JpnForPhp\Transliterator\Romaji;
use JpnForPhp\Transliterator\System\Hiragana;
use JpnForPhp\Transliterator\Transliterator;

class JapaneseService extends ServiceProvider implements JapaneseTranslator
{
    protected static $hiragana;

    public function __construct()
    {
        self::$hiragana = (new Transliterator())->setSystem(new Hiragana());
    }

    public function translate($word)
    {


        return self::$hiragana->transliterate($word);

    }
}
