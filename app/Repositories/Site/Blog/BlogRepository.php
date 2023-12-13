<?php

namespace App\Repositories\Site\Blog;

use App\Models\Blog;
use DOMDocument;

class BlogRepository implements BlogInterface 
{
    public function index($request)
    {
        $data = Blog::
        when($request->search != null,function ($q) use($request){
            return $q->where('first_title_ar','like','%'.$request->search.'%');
        })
        ->when($request->search != null,function ($q) use($request){
            return $q->where('second_title_ar','like','%'.$request->search.'%');
        })
        ->when($request->search != null,function ($q) use($request){
            return $q->where('first_title_en','like','%'.$request->search.'%');
        })
        ->when($request->search != null,function ($q) use($request){
            return $q->where('second_title_en','like','%'.$request->search.'%');
        })
        ->when($request->search != null,function ($q) use($request){
            return $q->where('first_content_ar','like','%'.$request->search.'%');
        })
        ->when($request->search != null,function ($q) use($request){
            return $q->where('second_content_ar','like','%'.$request->search.'%');
        })
        ->when($request->search != null,function ($q) use($request){
            return $q->where('first_content_en','like','%'.$request->search.'%');
        })
        ->when($request->search != null,function ($q) use($request){
            return $q->where('second_content_en','like','%'.$request->search.'%');
        })
        ->paginate(config('myConfig.paginationCount'));

        return view('site.blog',compact('data'))->with(['search'  => $request->search]);
    }



    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        /*** start of knowledge table ***/
        $dom = new DOMDocument();
        $dom->loadHTML(mb_convert_encoding($blog->second_content, 'HTML-ENTITIES', 'UTF-8'))    ;
        $tds = $dom->getElementsByTagName('strong');
        $tableArray=array();
        foreach($tds as $key=>$td)
        {
            $row["key"]=$key;
            $row["content"]=$td->textContent;
            array_push($tableArray,$row);
            $td->setAttribute('id',$key);
        }
        $data = $dom->saveHTML();
        /*** end of knowledge table ***/

        return view('site.blog-defintion', compact('blog','data','tableArray'));
    }
}
