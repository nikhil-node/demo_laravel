<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GithubController extends Controller
{
    public function searchGitRepo(Request $request)
    {
        $data = array();
        $search = $request->search ?? null;
        if(!empty($search)) {
            $response   = Http::accept('application/json')->get("https://api.github.com/users/".$search."/repos");
            $result = $response->json();
           
            if(!empty($result)){
                foreach($result as $key => $values)
                {
                    $data[$key]['name'] = $values['full_name'];
                    $data[$key]['url'] = $values['html_url'];
                    $data[$key]['description'] = $values['description'];
                }
            }
            return view('search',['data'=>$data]);
        }   
    }
}
