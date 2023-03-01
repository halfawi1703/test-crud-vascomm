<?php

namespace App\Http\Controllers;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $url;

    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }
    
    public function index()
    {
        $response = Http::get($this->url->to('/').'/api/jobs');
        $jobs = $response->json();

        return view('index',[
            'jobs' => $jobs, 
            'base_url' => $this->url->to('/')
        ]);
    }

    public function form_add()
    {
        return view('add',['base_url' => $this->url->to('/')]);
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'education_level' => $request->education_level,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'quota' => $request->quota
        ];

        $response = Http::POST($this->url->to('/').'/api/jobs', $data);
        $jobs = $response->json();

        return redirect($this->url->to('/'));
    }

    public function form_edit($id)
    {
        $response = Http::get($this->url->to('/').'/api/jobs/'.$id);
        $jobs = $response->json();

        return view('edit', [
            'jobs' => $jobs, 
            'base_url' => $this->url->to('/')
        ]);
    }

    public function update(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'education_level' => $request->education_level,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'quota' => $request->quota
        ];

        $response = Http::patch($this->url->to('/').'/api/jobs/'.$request->id, $data);
        $jobs = $response->json();

        return redirect($this->url->to('/'));
    }

    public function destroy($id)
    {
        $response = Http::delete($this->url->to('/').'/api/jobs/'.$id);
        $jobs = $response->json();

        return redirect($this->url->to('/'));
    }
}
