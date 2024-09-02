<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Hero;
use App\Models\Menu;
use App\Models\About;
use App\Models\Event;
use App\Models\Whyus;
use App\Models\Gallery;
use App\Models\Special;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $hero       = Hero::where('section_name','HeroSection')->get();
        $about      = About::where('section_name','AboutSection')->first();
        $whyus      = Whyus::where('section_name','WhyUsSection')->first();
        $menu       = Menu::where('section_name','MenuSection')->get();
        $special    = Special::where('section_name','SpecialSection')->get();
        $event      = Event::where('section_name','EventSection')->get();
        $gallery    = Gallery::where('section_name','GallerySection')->get();
        $chef       = Chef::where('section_name','ChefSection')->get();
        $testimonial= Testimonial::where('section_name','TestimonialSection')->get();
        return view('frontend.layouts.master',compact('hero','about','whyus','menu','special','event','gallery','chef','testimonial'));
    }
    public function home(){
        return view('frontend.module.hero');
    }
    public function about(){
        return view('frontend.module.about');
    }
    public function menu(){
        return view('frontend.module.menu');
    }
    public function special(){
        return view('frontend.module.special');
    }
    public function event(){
        return view('frontend.module.event');
    }
    public function gallery(){
        return view('frontend.module.gallery');
    }
    public function contact(){
        return view('frontend.module.contact');
    }

    public function table(){
        return view('frontend.module.table');
    }

}
