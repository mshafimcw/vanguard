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
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Models\GalleryCategory;
use App\Models\Location;
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
		$whychoose = [];
		if ($category) {
			$whychoose = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'slider')->first();
		$slider = collect();
		if ($category) {
			$slider = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'commitment')->first();
		$commitment = collect();
		if ($category) {
			$commitment = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'about-s')->first();
		$abouts = collect();
		if ($category) {
			$abouts = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'about-us-home')->first();
		$aboutushome = null;
		if ($category) {
			$aboutushome = Post::where('post_category_id', $category->id)->first();
		}

		$category = PostCategory::where('slug', 'features')->first();
		$features = collect();
		if ($category) {
			$features = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'counter')->first();
		$counters = collect();
		if ($category) {
			$counters = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'whychooseus')->first();
		$whychooseus = collect();
		if ($category) {
			$whychooseus = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'facilities')->first();
		$facilities = collect();
		if ($category) {
			$facilities = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'gallery')->first();
		$gallery = collect();
		if ($category) {
			$gallery = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'testimonials')->first();
		$testimonials = collect();
		if ($category) {
			$testimonials = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'Highlights')->first();
		$Highlights = collect();
		if ($category) {
			$Highlights = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'faq')->first();
		$faq = collect();
		if ($category) {
			$faq = Post::where('post_category_id', $category->id)->get();
		}

		$products = Product::all();

		$programs = Program::orderBy('id', 'desc')->get();

		$events = Event::all();

		$category = PostCategory::where('slug', 'commondonation')->first();
		$commondonation = collect();
		if ($category) {
			$commondonation = Post::where('post_category_id', $category->id)->get();
		}

		$category = PostCategory::where('slug', 'companies')->first();
		$companies = collect();
		if ($category) {
			$companies = Post::where('post_category_id', $category->id)->get();
		}

		$services = Service::latest()->get();

		return view('index', [
			'aboutushome' => $aboutushome,
			'slider' => $slider,
			'commitment' => $commitment,
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
		if (!$editpost) return collect();
		return Post::where('post_category_id', $editpost->id)->get();
	}

	public static function getpbanner()
	{
		$editpost = PostCategory::where('slug', 'common-banner')->first();
		if (!$editpost) return null;
		$banner = Post::where('post_category_id', $editpost->id)->first();
		return $banner ? $banner->image : null;
	}

	public static function getphone1()
	{
		$editpost = PostCategory::where('slug', 'phone')->first();
		if (!$editpost) return null;
		$phone = Post::where('post_category_id', $editpost->id)->first();
		return $phone ? $phone->title : null;
	}

	public static function getemail()
	{
		$editpost = PostCategory::where('slug', 'email')->first();
		if (!$editpost) return null;
		$email = Post::where('post_category_id', $editpost->id)->first();
		return $email ? $email->title : null;
	}

	public static function getemail1()
	{
		$editpost = PostCategory::where('slug', 'email')->first();
		if (!$editpost) return null;
		$email = Post::where('post_category_id', $editpost->id)->first();
		return $email ? $email->title : null;
	}

	public static function getalladdress()
	{
		$editpost = PostCategory::where('slug', 'address')->first();
		if (!$editpost) return collect();
		return Post::where('post_category_id', $editpost->id)->get();
	}

	public static function gettimings()
	{
		$editpost = PostCategory::where('slug', 'timing')->first();
		if (!$editpost) return collect();
		return Post::where('post_category_id', $editpost->id)->get();
	}

	public static function getsocialicons()
	{
		$editpost = PostCategory::where('slug', 'social-icons')->first();
		if (!$editpost) return collect();
		return Post::where('post_category_id', $editpost->id)->get();
	}

	public static function getaddress()
	{
		$editpost = PostCategory::where('slug', 'address')->first();
		if (!$editpost) return null;
		return Post::where('post_category_id', $editpost->id)->first();
	}

	public static function getsecondlogo()
	{
		$editpost = PostCategory::where('slug', 'second-logo')->first();
		if (!$editpost) return null;
		return Post::where('post_category_id', $editpost->id)->first();
	}

	public static function getlogo()
	{
		$editpost = PostCategory::where('slug', 'logo')->first();
		if (!$editpost) return null;
		return Post::where('post_category_id', $editpost->id)->first();
	}

	public function about()
	{
		$category = PostCategory::where('slug', 'about-s')->first();
		$abouts = $category ? Post::where('post_category_id', $category->id)->first() : null;

		$category = PostCategory::where('slug', 'features')->first();
		$features = $category ? Post::where('post_category_id', $category->id)->get() : collect();

		$category = PostCategory::where('slug', 'commitment')->first();
		$commitment = $category ? Post::where('post_category_id', $category->id)->get() : collect();

		return view('about', [
			'abouts' => $abouts,
			'features' => $features,
			'commitment' => $commitment,
		]);
	}

	public function services()
	{
		$category = PostCategory::where('slug', 'diffservice')->first();
		$diffservice = collect();

		if ($category) {
			$diffservice = Post::where('post_category_id', $category->id)->get();
		}

		return view('services', compact('diffservice'));
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

	public function locations()
{
    $locations = Location::orderBy('id', 'desc')->get();

    return view('main', [
        'locations' => $locations,
    ]);
}

	public function blogDetails($id)
	{
		$category = PostCategory::where('slug', 'blogs')->first();

		if (!$category) {
			abort(404, 'Blog category not found');
		}

		$blog = Post::where('post_category_id', $category->id)
			->where('id', $id)
			->first();

		if (!$blog) {
			abort(404, 'Blog not found');
		}

		return view('blogdetails', compact('blog'));
	}

	public function blogs()
	{
		$category = PostCategory::where('slug', 'blogs')->first();

		if (!$category) {
			abort(404);
		}

		$blogs = Post::where('post_category_id', $category->id)
			->latest()
			->get();

		return view('blogs', compact('blogs'));
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
		// Helper function to safely get posts
		$getPosts = function ($slug, $single = false) {
			$category = PostCategory::where('slug', $slug)->first();
			if (!$category) {
				return $single ? null : collect();
			}
			$query = Post::where('post_category_id', $category->id);
			return $single ? $query->first() : $query->get();
		};

		$slider = $getPosts('slider');
		$abouts = $getPosts('about-s', true);
		$features = $getPosts('features');
		$counters = $getPosts('counter');
		$whychooseus = $getPosts('whychooseus', true);
		$facilities = $getPosts('facilities');
		$gallery = $getPosts('gallery');
		$testimonials = $getPosts('testimonials');
		$Highlights = $getPosts('Highlights');
		$faq = $getPosts('faq');

		$products = Product::all();
		$programs = Program::orderBy('id', 'desc')->get();
		$events = Event::all();
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

	public function contact()
	{
		$category = PostCategory::where('slug', 'contact')->first();

		if ($category) {
			$contact = Post::where('post_category_id', $category->id)->get();
		} else {
			$contact = collect();
		}

		return view('contact', compact('contact'));
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
