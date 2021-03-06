<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Portfolio;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\CardLists;
use Illuminate\Support\Facades\View;
use App\Models\CompanyTeam;
use App\Models\Blog;
use App\Models\Consultation;

class HomePageController extends Controller
{
    public function index(){
        // dd('hi');
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')->whereNull('deleted_at')
            ->get();
        $blogs = Blog::all();
        $services = Category::where('category_id', '=', 21)->whereNull('deleted_at')->get();
        $partnerships=Category::where('category_id', '=', 8)->whereNull('deleted_at')->where('image','<>', null)->get();
        return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'blogs'=>$blogs, 'partnerships'=>$partnerships, 'services'=>$services]);
    }

    public function getDynamicPage($page, $collections=null, $category_id=null, $translation='en')
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')->whereNull('deleted_at')
            ->get();
        if($category_id){
            $categories = Category::where('category_id', '=', $category_id)
                ->with('childrenCategories')->whereNull('deleted_at')
                ->get();
        }

        if(!view()->exists('front.pages.'.$page) || $page=='index'){
            return $this->index();
        }
        return view('page_controller', ['page'=>'front.pages.'.$page,'categories'=> $categories])->with($collections);

    }

    public function getBlade($page, $translation='en')
    {
        if(str_contains($page, 'blog')){
            $blogs = Blog::all();
            return $this->getDynamicPage($page, ['blogs' => $blogs]);
        }else if(str_contains($page, 'management_team')){
            $teams = CompanyTeam::all();
            $selection=  CompanyTeam::select('job')->distinct()->get();
            return $this->getDynamicPage($page, ['teams' => $teams, 'department'=>$selection]);
        }else if(str_contains($page, 'news')){
            $news = News::all();
            return $this->getDynamicPage($page, ['news' => $news]);
        }else if(str_contains($page, 'products')){
            $products = Product::all();
            return $this->getDynamicPage($page, ['products' => $products]);
        }else if(str_contains($page, 'portfolios')){
            $portfolios = Portfolio::all();
            return $this->getDynamicPage($page, ['portfolios'=> $portfolios]);
        }else if(str_contains($page, 'partnerships')){
            $partnerships=Category::where('category_id', '=', 8)->whereNull('deleted_at')->get();
            return $this->getDynamicPage($page, ['partnerships' => $partnerships]);
        }else if(str_contains($page, 'ecommerce')){
            $partners=Category::where('category_id', '=', 8)->whereNull('deleted_at')->get();
            return $this->getDynamicPage($page, ['partners' => $partners],  38);
        }else if(str_contains($page, 'about_company') || str_contains($page, 'awards_and_acknowledgement')
        || str_contains($page, 'testing_and_qa') || str_contains($page, 'healthcare') || str_contains($page, 'it_outsourcing') || str_contains($page, 'it_support')
        || str_contains($page, 'managed_it_services') || str_contains($page, 'data_analytics') || str_contains($page, 'e_commmerce_ecommerce_consulting')
        || str_contains($page, 'e_commerce_ecommerce_development') || str_contains($page, 'e_commerce_ecommerce_services')){
            $partners=Category::where('category_id', '=', 8)->whereNull('deleted_at')->get();
            return $this->getDynamicPage($page, ['partners' => $partners]);
        }else if(str_contains($page, 'contact_us')){
            return $this->getDynamicPage($page);
        }
        return $this->getDynamicPage($page);

    }
    public function getCategoryByName($name, $view)
    {
        $categories=Category::where('name', 'like', '%'.$name.'%')->first();
//      return View::make($view)->with(compact('categories'));
        return response($categories);
    }
    public function getBlogByTag(Request $request)
    {
        $blogs = Blog::all();
        if($blogs = Blog::where('tag','like', "%".$request->tag_name."%")->get()){
            return $this->getDynamicPage('blog', ['blogs'=>$blogs]);
        }
        return $this->getDynamicPage('blog', ['blogs'=>$blogs]);
    }
    public function getPortfolioByTechnology(Request $request)
    {
        $portfolios = Portfolio::latest();
        if($request->technology_name){
            $portfolios = $portfolios->where('technology', 'like', "%".$request->technology_name."%");
        }
        if($request->industry_name){
            $portfolios = $portfolios->where('industry', 'like', "%".$request->industry_name."%");
        }
        $portfolios=$portfolios->get();
        return $this->getDynamicPage('portfolios.portfolios', ['portfolios'=>$portfolios]);
    }

    public function getTeamByJob(Request $request)
    {
        $teams = CompanyTeam::latest();
        $selection=  CompanyTeam::select('job')->distinct()->get();
        if($request->team_job){
            $teams = $teams->where('job', 'like', "%" . $request->team_job . "%");
        }
        $teams=$teams->get();
        return $this->getDynamicPage('about.company.management_team', ['teams'=>$teams, 'department'=> $selection]);
    }

    public function getCategoryById($id)
    {
        $categories=Category::where('id', '=', $id)->first();
        return response($categories);
    }

    public function postConsultation(Request $request){

        $this->validate($request, [
            'fullname' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'description' => 'required',
        ]);

        $posts = new Consultation();
        $posts->fullname = $request->fullname;
        $posts->company = $request->company;
        $posts->email = $request->email;
        $posts->phone_number = $request->phone_number;
        $posts->description = $request->description;
        $posts->save();

        return back()->with('success', 'Your information has been sent successfully!');

    }

    public function postFile(Request $request){

        $this->validate($request, [
            'fullname' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'description' => 'required',
        ]);

        $posts = new Consultation();
        $posts->fullname = $request->fullname;
        $posts->company = $request->company;
        $posts->email = $request->email;
        $posts->phone_number = $request->phone_number;
        $posts->description = $request->description;
        $posts->save();

        return back()->with('success', 'Your information has been sent successfully!');

    }

    public function SingleBlog($id)
    {
        $blog = Blog::all()->find($id);
        return $this->getDynamicPage('blog_single_page', ['blog' => $blog]);
    }
    public function SingleProduct($id)
    {
        $product = Product::all()->find($id);
        return $this->getDynamicPage('products.product_single_page', ['product' => $product]);
    }
}
