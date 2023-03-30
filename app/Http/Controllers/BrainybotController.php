<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use OpenAI as GlobalOpenAI;
use OpenAI\Laravel\Facades\OpenAI;

class BrainybotController extends Controller
{
    public function index()
    {
        return view('master-brainybot', [
            'title' => 'Brainy Bot',
        ]);
    }
    public function chat(Request $request)
    {
        $input = $request->input('input');

        $response = OpenAI::completions()->create([
            'model' => 'text-davinci-002',
            'prompt' => $input,
            'max_tokens' => 100,
            'temperature' => 0.5,
            'n' => 1,
            'stop' => "\n"
        ]);

        $data = $response['choices'][0]['text'];
        dd($data);
        return redirect('master-brainybot')->with('response', $data);
    }
}
