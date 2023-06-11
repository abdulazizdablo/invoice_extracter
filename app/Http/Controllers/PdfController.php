<?php

namespace App\Http\Controllers;
use Spatie\PdfToText\Pdf;
use Symfony\Component\Process\Process; 
use Symfony\Component\Process\Exception\ProcessFailedException;

use Illuminate\Http\Request;

class PdfController extends Controller
{


    public function index(){

        $path = public_path().'/all_pages_table(i).json';
        $file = json_decode(file_get_contents($path),true );
/*array_map(function($element){

if($element[])

},$file);*/


        return view('invoice_table')->with('file',$file);

    }
    public function extractText(Request $request)
    {
     /*  $process = new Process(["C:/Users/User/AppData/Local/Programs/Python/Python310/python.exe",  base_path() . '/table-ocr.py'], env: [
  'SYSTEMROOT' => getenv('SYSTEMROOT'),
  'PATH' => getenv("PATH")
]);
        $process->run();
        $process->getOutput();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }*/

       
        // $command = escapeshellcmd('python C:\Users\User\Desktop\project\table-ocr.py');



        $output = shell_exec('C:/Users/User/AppData/Local/Programs/Python/Python310/python.exe C:\Users\User\Desktop\project\table-ocr.py');
   

       // var_dump($process->run());
        //$text = (new Pdf(public_path('KWIR000737710.pdf')))->setPdf('KWIR000737710.pdf')->text();
       // echo $process->getOutput();

      
    }
}
