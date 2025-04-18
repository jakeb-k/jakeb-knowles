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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webPosts = Post::where('type', 'web')->get();

        $mobilePosts = Post::where('type', 'mobile')->get();


        
        return view('posts.index')->with('webPosts', $webPosts)->with('mobilePosts', $mobilePosts); 
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
         $token = $request->input('g-recaptcha-response');
         $ip = $request->ip();
     
         $captcha = app('captcha');
         $response = $captcha->verifyResponse($token, $ip);
     
         if (! $response) {
             Log::error('reCAPTCHA failed', [
                 'ip' => $ip,
                 'response' => $token,
                 'host' => $request->getHost(),
             ]);
     
             return back()->withErrors([
                 'g-recaptcha-response' => 'reCAPTCHA failed, try again.'
             ])->withInput();
         }
     
         // Manual check passed, now validate the rest
         $request->validate([
             'name' => 'required|max:55',
             'email' => 'required|email',
             'note' => 'required',
         ]);
     
         Contact::create($request->all());
     
         return redirect()->back()->with('success', 'Message sent successfully!');
     }
     

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    
    {
        $post = Post::where('name', $name)->first();

        
        // Check directories for web and mobile
        $webPath = public_path('images/'.$name.'/web');
        $mobilePath = public_path('images/'.$name.'/mobile');

        $webExists = is_dir($webPath);
        $mobileExists = is_dir($mobilePath);

        // Determine the view mode based on the available directories
        if ($webExists && !$mobileExists) {
            $viewMode = 'web';
            Session::put('viewMode', 'web');

            
        } elseif (!$webExists && $mobileExists) {
            $viewMode = 'mobile';
            Session::put('viewMode', 'mobile');
        } else {
            // Default to web if both exist or neither exists
            $viewMode = 'web';
        }
       
        $desc = explode('+',$post->description);
      

        $items = scandir(public_path('images/'.$name.'/'.$viewMode));
        $itemCount = count($items) - 2;

        $cleanName = str_replace("_"," ", $post->name); 
        return view('posts.post')->with('post', $post)->with('itemCount', $itemCount)->with('webExists', $webExists)->with('desc',$desc)->with('name', $cleanName);
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
