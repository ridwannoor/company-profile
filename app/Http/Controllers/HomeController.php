<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Feature;
use App\Models\Testi;
use App\Services\Trending;
use Spatie\Analytics\Period;
use Analytics;  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    //  function posts()
    // {

    // }
    
    public function index()
    {
        // $features = Feature::find($id);
        $category= $categories = Categorie::withCount('blog')->get();
        $posts = Blog::where('is_published','=', '1')->paginate(3);
        $posts2 = Blog::inRandomOrder()->paginate(1);
        $posts3 = Blog::where('is_published','=','1')->inRandomOrder()->paginate(5);
        $sliders = Slider::all();
        $gens = General::all();
        $testimonial = Testi::all();
        return view('home', compact('gens','sliders', 'posts','category','posts2','posts3', 'testimonial'));
    }
}
