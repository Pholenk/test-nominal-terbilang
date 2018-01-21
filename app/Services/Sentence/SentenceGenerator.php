<?php
namespace App\Services\Sentence;

use Illuminate\Http\Request;
use App\Traits\BilanganTrait;

class SentenceGenerator implements SentenceInterface {

    use BilanganTrait;

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function printSentence()
    {
        $hasil = $this->request->bilangan < 0 ? 'minus '.trim($this->nominalConverter($this->request->bilangan)) : trim($this->nominalConverter($this->request->bilangan));
        return $hasil;
    }
}
