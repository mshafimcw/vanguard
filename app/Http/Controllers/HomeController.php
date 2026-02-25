<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Program;
use App\Models\Event;
use App\Models\Project;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Validator; // Add this line
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Models\GalleryCategory;
use App\Models\Service;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$category = PostCategory::where('slug', 'banner')->first();

		$banner = [];

		if ($category) {
			$banner = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'whychoose')->first();
		$catid = $category->id;
		$whychoose = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'slider')->first();
		$catid = $category->id;
		$slider = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'about-s')->first();
		$catid = $category->id;
		$abouts = Post::where('post_category_id', $catid)->first();

		$category = PostCategory::where('slug', 'about-us-home')->first();
		$catid = $category->id;
		$aboutushome = Post::where('post_category_id', $catid)->first();


		$category = PostCategory::where('slug', 'features')->first();
		$catid = $category->id;
		$features = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'counter')->first();
		$catid = $category->id;
		$counters = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'whychooseus')->first();
		$catid = $category->id;
		$whychooseus = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'facilities')->first();
		$catid = $category->id;
		$facilities = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'gallery')->first();
		$catid = $category->id;
		$gallery = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'testimonials')->first();
		$catid = $category->id;
		$testimonials = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'Highlights')->first();
		$catid = $category->id;
		$Highlights = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'faq')->first();
		$catid = $category->id;
		$faq = Post::where('post_category_id', $catid)->get();
		$products = Product::all();

		$category = PostCategory::where('slug', 'faq')->first();
		$catid = $category->id;
		$faq = Post::where('post_category_id', $catid)->get();

		$programs = Program::orderBy('id', 'desc')->get();

		$category = PostCategory::where('slug', 'faq')->first();
		$catid = $category->id;
		$faq = Post::where('post_category_id', $catid)->get();
		$events = Event::all();


		$category = PostCategory::where('slug', 'commondonation')->first();
		$catid = $category->id;
		$commondonation = Post::where('post_category_id', $catid)->get();


		$category = PostCategory::where('slug', 'companies')->first();
		$catid = $category->id;
		$companies = Post::where('post_category_id', $catid)->get();

		
		$services = Service::latest()->get();


		return view('index', [
			'aboutushome' => $aboutushome,
			'slider' => $slider,
			'abouts' => $abouts,
			'features' => $features,
			'products' => $products,
			'counters' => $counters,
			'whychooseus' => $whychooseus,
			'facilities' => $facilities,
			'gallery' => $gallery,
			'testimonials' => $testimonials,
			'faq' => $faq,
			'highlights' => $Highlights,
			'programs' => $programs,
			'events' => $events,
			'commondonation' => $commondonation,
			'companies' => $companies,
			'banner' => $banner,
			'whychoose' => $whychoose,
			'services' => $services,
			
		]);
	}
	public static function getphone()
	{

		$editpost = PostCategory::where('slug', 'phone')->first();
		$catid = $editpost->id;
		$phone = Post::where('post_category_id', $catid)->get();
		return $phone;
	}

	public static function getpbanner()
	{

		$editpost = PostCategory::where('slug', 'common-banner')->first();
		$catid = $editpost->id;
		$banner = Post::where('post_category_id', $catid)->first();
		return $banner->image;
	}
	public static function getphone1()
	{
		$editpost = PostCategory::where('slug', 'phone')->first();
		if (!$editpost) return null;
		$catid = $editpost->id;
		$phone = Post::where('post_category_id', $catid)->first();
		return $phone ? $phone->title : null;
	}

	public static function getemail()
	{
		$editpost = PostCategory::where('slug', 'email')->first();
		if (!$editpost) return null;
		$catid = $editpost->id;
		$email = Post::where('post_category_id', $catid)->first();
		return $email ? $email->title : null;
	}


	// public static function getemail()
	// {

	// 	$editpost = PostCategory::where('slug', 'email')->first();
	// 	$catid = $editpost->id;
	// 	$email = Post::where('post_category_id', $catid)->first();
	// 	return $email->email1;
	// } 
	public static function getemail1()
	{

		$editpost = PostCategory::where('slug', 'email')->first();
		$catid = $editpost->id;
		$email = Post::where('post_category_id', $catid)->first();
		return $email->title;
	}

	public static function getalladdress()
	{

		$editpost = PostCategory::where('slug', 'address')->first();
		$catid = $editpost->id;
		$address = Post::where('post_category_id', $catid)->get();
		return $address;
	}

	public static function gettimings()
	{

		$editpost = PostCategory::where('slug', 'timing')->first();
		$catid = $editpost->id;
		$timing = Post::where('post_category_id', $catid)->get();
		return $timing;
	}

	public static function getsocialicons()
	{
		$editpost = PostCategory::where('slug', 'social-icons')->first();
		$catid = $editpost->id;
		$socialicons = Post::where('post_category_id', $catid)->get();
		return $socialicons;
	}

	public static function getaddress()
	{

		$editpost = PostCategory::where('slug', 'address')->first();
		$catid = $editpost->id;
		$address = Post::where('post_category_id', $catid)->first();
		return $address;
	}
	public static function getsecondlogo()
	{

		$editpost = PostCategory::where('slug', 'second-logo')->first();
		$catid = $editpost->id;
		$logo = Post::where('post_category_id', $catid)->first();
		return $logo;
	}
	public static function getlogo()
	{

		$editpost = PostCategory::where('slug', 'logo')->first();
		$catid = $editpost->id;
		$logo = Post::where('post_category_id', $catid)->first();
		return $logo;
	}

	public function about()
	{

		$category = PostCategory::where('slug', 'about-s')->first();
		$catid = $category->id;
		$abouts = Post::where('post_category_id', $catid)->first();

		$category = PostCategory::where('slug', 'features')->first();
		$catid = $category->id;
		$features = Post::where('post_category_id', $catid)->get();


		return view('about', [

			//'banner'=>$banner,
			'abouts' => $abouts,
			//	'email'=>$email,
			//'phone'=>$phone,
			'features' => $features,
			//'quotes'=>$quotes
		]);
	}


	public function donationtime()
	{

		return view('donationtime');
	}

	public function projects()
	{
		$projects = Project::orderBy('id', 'desc')->get();
		return view('projects', compact('projects'));
	}
	public function projectDetails($id)
	{
		$project = Project::findOrFail($id);
		return view('projects.details', compact('project'));
	}

	public function programs()
	{
		$programs = Program::orderBy('id', 'desc')->get();

		return view('programs', [

			'programs' => $programs,
		]);
	}


	public function blogDetails($id)
	{


		$category = PostCategory::where('slug', 'blogs')->first();
		$catid = $category->id;
		$blog = Post::where('post_category_id', $catid)->first();

		return view('blogdetails', compact('blog'));
	}
	public function blogs()
	{
		$category = PostCategory::where('slug', 'blogs')->first();
		$catid = $category->id;
		$blogs = Post::where('post_category_id', $catid)
			->orderBy('created_at', 'desc') // Optional: order by latest
			->paginate(6); // Show 6 blogs per page

		return view('blogs', [
			'blogs' => $blogs,
		]);
	}

	public function showEvents()
	{
		$events = Event::all();
		return view('events', compact('events'));
	}

	public function donate($id)
	{
		$program = Program::findOrFail($id);

		return view('donate', [

			'program' => $program,
		]);
	}



	public function eventsdetails($id)
	{
		$event = Event::findOrFail($id);

		return view('eventsdetails', compact('event'));
	}



	public function programsdetails($id)
	{
		$program = Program::with('multipleImages')->findOrFail($id);
		return view('programsdetails', compact('program'));
	}




	public function portfolio()
	{
		$category = PostCategory::where('slug', 'slider')->first();
		$catid = $category->id;
		$slider = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'about-s')->first();
		$catid = $category->id;
		$abouts = Post::where('post_category_id', $catid)->first();

		$category = PostCategory::where('slug', 'features')->first();
		$catid = $category->id;
		$features = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'counter')->first();
		$catid = $category->id;
		$counters = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'whychooseus')->first();
		$catid = $category->id;
		$whychooseus = Post::where('post_category_id', $catid)->first();

		$category = PostCategory::where('slug', 'facilities')->first();
		$catid = $category->id;
		$facilities = Post::where('post_category_id', $catid)->get();

		// Only featured posts with images for the Gallery category
		$category = PostCategory::where('slug', 'gallery')->first();
		$catid = $category->id;
		$gallery = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'testimonials')->first();
		$catid = $category->id;
		$testimonials = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'Highlights')->first();
		$catid = $category->id;
		$Highlights = Post::where('post_category_id', $catid)->get();

		$category = PostCategory::where('slug', 'faq')->first();
		$catid = $category->id;
		$faq = Post::where('post_category_id', $catid)->get();

		$products = Product::all();
		$programs = Program::orderBy('id', 'desc')->get();
		$events = event::all();


		$gallerycategories = GalleryCategory::all();


		return view('portfolio', [
			'gallerycategories' => $gallerycategories,
			'slider' => $slider,
			'abouts' => $abouts,
			'features' => $features,
			'products' => $products,
			'counters' => $counters,
			'whychooseus' => $whychooseus,
			'facilities' => $facilities,
			'gallery' => $gallery,
			'testimonials' => $testimonials,
			'faq' => $faq,
			'highlights' => $Highlights,
			'programs' => $programs,
			'events' => $events,
		]);
	}


	public function Contact()
	{


		$category = PostCategory::where('slug', 'logo')->first();
		$catid = $category->id;
		$logo = Post::where('post_category_id', $catid)->first();

		$category = PostCategory::where('slug', 'phone')->first();
		$catid = $category->id;
		$phone = Post::where('post_category_id', $catid)->first();



		$category = PostCategory::where('slug', 'email')->first();
		$catid = $category->id;
		$email = Post::where('post_category_id', $catid)->first();

		$category = PostCategory::where('slug', 'email')->first();
		$catid = $category->id;
		$allemails = Post::where('post_category_id', $catid)->get();

		$editpost = PostCategory::where('slug', 'address')->first();
		$catid = $editpost->id;
		$address = Post::where('post_category_id', $catid)->first();



		$editpost = PostCategory::where('slug', 'social-icons')->first();
		$catid = $editpost->id;
		$socialicons = Post::where('post_category_id', $catid)->get();





		return view('contact', [
			'address' => $address,
			'socialicons' => $socialicons,
			'email' => $email,
			'phone' => $phone,

			'logo' => $logo,
			'allemails' => $allemails,
		]);
	}

	public function contactSubmit(Request $request)
	{


		// Validate the form data
		$validator = Validator::make($request->all(), [
			'name' => 'required|string|max:255',
			'email' => 'required|email|max:255',
			'phone' => 'nullable|string|max:20',
			'subject' => 'required|string|max:255',
			'message' => 'required|string|min:10',
		]);

		if ($validator->fails()) {
			return redirect()->back()
				->withErrors($validator)
				->withInput();
		}

		// Process the contact form
		try {
			// Save to database
			$contact = ContactSubmission::create($request->all());

			// Send email notification
			Mail::to(env('ADMIN_EMAIL', 'admin@example.com'))->send(new ContactFormSubmitted($contact));

			return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
		} catch (\Exception $e) {
			\Log::error('Contact form error: ' . $e->getMessage());

			return redirect()->back()
				->with('error', 'Sorry, there was an error sending your message. Please try again.')
				->withInput();
		}
	}
}
