<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact; 
use App\Models\Post;

use Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties\InvalidReason;


class PostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all(); 
        
        return view('posts.index')->with('posts', $posts); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:55',
            'email'=>'required|email',
            'note'=>'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        
        Contact::create($request->all()); 
        
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $post = Post::where('name', $name)->first();
        $items = scandir(public_path('images/'.$name.'/web'));
        $itemCount = count($items) - 2;

        return view('posts.post')->with('post',$post)->with('itemCount', $itemCount);
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
