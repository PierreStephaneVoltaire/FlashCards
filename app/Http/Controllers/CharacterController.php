<?php


namespace App\Http\Controllers;

use App\Models\Word;
use App\Providers\JapaneseTranslator;
use Illuminate\Http\Request;
use Log;

class CharacterController extends Controller
{
    protected $translator = null;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(JapaneseTranslator $translator)
    {
        \Hamcrest\Util::registerGlobalFunctions();
        $this->translator = $translator;
    }


    public function getAllWords()
    {
        return Word::all();
    }

    public function addWord(Request $newWord)
    {
        if (!$newWord->has(['english', 'hiragana'])) {
            return response()->json(['error' => 'Unprocessable entity'], 422);
        }
        $word = Word::create([
            'isChar' => $newWord->isChar,
            'english' => $newWord->english,
            'hiragana' => $newWord->hiragana
        ]);

        return $word;
    }

    public function updateWord($updatedWord)
    {
        $word = Word::find($updatedWord->id);
        $word->english = $updatedWord->english;
        $word->hiragana = $updatedWord->hiragana;
        $word->isChar = $updatedWord->isChar;
        $word->save();
        return $word->isDirty();


    }

    public function deleteWord($updatedWord)
    {
        $word = Word::find($updatedWord . id);
        Word::destroy($updatedWord . id);
    }

    public function getAllCharacters()
    {
        return Word::where('ischar', true);
    }

    public function getXRandomWords($number)
    {
        return Word::all()->random($number);
    }

    public function translate($word)
    {
        Log::info($word);
        return (!isset($word) || trim($word) === '') ? $word : $this->translator->translate($word);
    }

}
