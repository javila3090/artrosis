<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Banner;
use App\BannerType;
use App\Section;
use App\CompanyInfo;
use App\Post;


class HomeController extends Controller
{
    public function index(){

        $homeBanners = Banner::where('banner_type_id',1)->get();
        $aboutUs = Section::where('section_type_id',1)->first();
        $servicesBanners = Banner::where('banner_type_id',2)->get();
        $services = Section::where('section_type_id',2)->first();
        $contact = Section::where('section_type_id',3)->first();
        $galleryBanners = Banner::where('banner_type_id',3)->get();
        $gallery = Section::where('section_type_id',4)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        $secondary = Section::where('section_type_id',7)->first();
        $secondaryBanner = Banner::where('banner_type_id',6)->get();
        $clients = Section::where('section_type_id',5)->first();
        $clientBanners = Banner::where('banner_type_id',4)->get();
        $team = Section::where('section_type_id',10)->first();
        $whyus = Section::where('section_type_id',11)->first();
        $whyusBanners = Banner::where('banner_type_id',7)->get();

        return view('welcome',compact('homeBanners','aboutUs','servicesBanners','services','companyInfo','contact','gallery','galleryBanners','secondary','secondaryBanner','clients','clientBanners','team','whyus','whyusBanners'));
    }

    public function contact(){

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        //Mapa
        $config = array();
        $config['center'] = '-33.423199,-70.610193';
        $config['zoom'] = 16;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                });
            }
            centreGot = true;';

            app('map')->initialize($config);

            $marker = array();
            app('map')->add_marker($marker);

            $map = app('map')->create_map();
            $map = array('map_js' => $map['js'], 'map_html' => $map['html']);

        return view('contact',compact('map','companyInfo'));
    }

    public function quote(){

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('quote',compact('companyInfo'));
    }

    public function services(){

        $servicesBanner = Banner::where('banner_type_id',2)->get();
        $services = Section::where('section_type_id',2)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('services',compact('servicesBanner','services','companyInfo'));
    }

    public function aboutUs(){

        $aboutUs = Section::where('section_type_id',1)->first();
        $mission = Section::where('section_type_id',8)->first();
        $vision = Section::where('section_type_id',9)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        $clients = Section::where('section_type_id',5)->first();
        $clientBanners = Banner::where('banner_type_id',4)->get();
        $partners = Section::where('section_type_id',6)->first();
        $partnerBanners = Banner::where('banner_type_id',5)->get();
        $requirements = Section::where('section_type_id',12)->first();
        $special_atentions = Section::where('section_type_id',13)->first();
        $company_programs = Section::where('section_type_id',14)->first();

        return view('about',compact('aboutUs','clientBanners','clients','companyInfo','mission','vision','partners','partnerBanners','requirements','special_atentions','company_programs'));
    }

    public function requirements(){

        $aboutUs = Section::where('section_type_id',1)->first();
        $special_atentions = Section::where('section_type_id',13)->first();
        $company_programs = Section::where('section_type_id',14)->first();
        $requirements = Section::where('section_type_id',12)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('requirements',compact('aboutUs','requirements','special_atentions','company_programs','companyInfo'));
    }

    public function blog(){

        $posts = Post::orderBy('created_at', 'desc')->get();
        $last_posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('blog',compact('posts','last_posts','companyInfo'));
    }

    public function post($id){

        $post = Post::findOrFail($id);
        $last_posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('post',compact('post','last_posts','companyInfo'));
    }

    public function agreement(){

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('agreement',compact('companyInfo'));
    }

    public function entities(){
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('fonasa_isapre',compact('companyInfo'));
    }

    public function kinesiologist(){

        $kinesiologist = Section::where('section_type_id',15)->first();
        $kinesiologist_areas = Banner::where('banner_type_id',11)->get();
        $tips = Banner::where('banner_type_id',10)->get();
        $symptoms = Banner::where('banner_type_id',9)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('kinesiologist',compact('companyInfo','kinesiologist','kinesiologist_areas','tips','symptoms'));
    }

    public function kinesiologist_areas(){

        $kinesiologist = Section::where('section_type_id',15)->first();
        $kinesiologist_areas = Banner::where('banner_type_id',11)->get();
        $tips = Banner::where('banner_type_id',10)->get();
        $symptoms = Banner::where('banner_type_id',9)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('kinesiologist_areas',compact('companyInfo','kinesiologist','kinesiologist_areas','tips','symptoms'));
    }

    public function information(){

        $kinesiologist = Section::where('section_type_id',15)->first();
        $kinesiologist_areas = Banner::where('banner_type_id',11)->get();
        $tips = Banner::where('banner_type_id',10)->get();
        $symptoms = Banner::where('banner_type_id',9)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('information',compact('companyInfo','kinesiologist','kinesiologist_areas','tips','symptoms'));
    }

    public function symptoms(){

        $kinesiologist = Section::where('section_type_id',15)->first();
        $kinesiologist_areas = Banner::where('banner_type_id',11)->get();
        $tips = Banner::where('banner_type_id',10)->get();
        $symptoms = Banner::where('banner_type_id',9)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('symptoms',compact('companyInfo','kinesiologist','kinesiologist_areas','tips','symptoms'));
    }

    public function videos(){

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('videos',compact('companyInfo'));
    }
}
