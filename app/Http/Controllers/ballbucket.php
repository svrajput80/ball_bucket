<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\box_book;
use App\Models\boxe;
use Illuminate\Support\Facades\DB;

class ballbucket extends Controller
{
    public function addBox(Request $request)
    {
        $request->validate([
            'box' => 'required',
            'volume' => 'required',
        ]);

        $box = boxe::where([['box', $request->box]])->first();
        if($box != null){
            return redirect()->back()->with([
                'status'=> 'Box already present with same name ......!'
            ]);
        }
    
        
        try{

            boxe::create($request->all());

            return redirect()->route('')->with([
                'status'=> 'Box Added'
            ]);

        } catch (\Exception $e){

            return redirect()->back()->with([
                'status'=> 'Something went wrong' . $e->getMessage() . '......!'
            ]);
        }
       

    }

    public function addBook(Request $request)
    {
        $request->validate([
            'book' => 'required',
            'author' => 'required',
            'volume' => 'required',
        ]);

        $book = book::where([['book', $request->book],['author', $request->author]])->get()->toArray();
       
        if($book != null){
            $volume = $request->volume + $book[0]["volume"];
        }
        else{
            $volume = $request->volume;
        }
       
        
        try{
            book::updateOrCreate(
                ['book' => $request->book, 'author' => $request->author],
                ['volume' => $volume]
            );
            return redirect()->route('')->with([
                'status'=> 'Book Added'
            ]);

        } catch (\Exception $e){

            return redirect()->back()->with([
                'status'=> 'Something went wrong' . $e->getMessage() . '......!'
            ]);
        }
        
    }

    public function showBook(Request $request)
    {
       
        $book = book::all();
        return view('show', compact('book'));
    }

    public function showBox(Request $request)
    {
       $book_id = $request->bookname;
       $qty = $request->bookname;
        $boxe = boxe::orderBy('volume', 'DESC')->get()->toArray();
        $box_book = box_book::all()->toArray();
        $book = book::where([['id', $request->bookname]])->get()->toArray();
        $volume = $book[0]["volume"] * $request->qty;
        if($box_book == null){
            if($boxe[0]['volume'] < $volume){
                return redirect()->back()->with([
                    'status'=> 'Something went wrong ......!'
                ]);
            }else {
                $remaning_box = $boxe;
                return view('box', compact('remaning_box', 'book_id', 'qty'));
            }
        }else{
            $boxVolumn = DB::select("SELECT bx.id, bx.box, (bx.volume - (b.volume * bb.qty)) AS volume FROM box_books AS bb RIGHT JOIN boxes AS bx ON bx.id = bb.box_id RIGHT JOIN books AS b ON b.id = bb.book_id WHERE bx.id IS NOT null ");
            $boxVolumn = json_decode(json_encode($boxVolumn), true);
            $Where = [
                
            ];
            foreach($boxVolumn as $data){
                array_push($Where, ['id', '!=' ,$data['id']]);
            }

            $remaning_box = boxe::where($Where)->get()->toArray();

            $remaning_box = array_merge($remaning_box, $boxVolumn);
            $cnt = 0;
            foreach($remaning_box as $data){
                $cnt = $cnt + 1;
                if($data['volume'] < $volume){
                    unset($remaning_box[$cnt-1]);
                }
            }

        }
        return view('box', compact('remaning_box', 'book_id', 'qty'));
    }

    public function savebox(Request $request)
    {
        $request->validate([
            'box_id' => 'required',
            'book_id' => 'required',
            'qty' => 'required',
        ]);
        box_book::updateOrCreate(
            ['box_id' => $request->box_id, 'book_id' => $request->book_id],
            ['qty' => $request->box_id]
        );
        $book = book::all();
        return view('show', compact('book'));;
    }
}
