<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    public function store()
    {
        $url = new Url;
    
        $url->url = Request::get('http://static.sekawanmedia.co.id/data.json');
        $url->description = Request::get('description');
        $url->save();
    
    
        return Response::json(array(
            'error' => false,
            'message' => 'test',
            'urls' => $url->toArray()),
            200
        );
    }
}
