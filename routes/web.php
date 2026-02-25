<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\WarrantyRegistrationController;
use App\Http\Controllers\admin\WarrantyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\MultipleImageController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventMultipleImageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderItemController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\EventBookingController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\AllRegisterController;
use App\Http\Controllers\EwasteDonationController;
use App\Http\Controllers\MoneyDonationController;


Route::get('/admin/donations/export', [DonationReportController::class, 'export'])->name('admin.donations.export');
//Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contactSubmit'])->name('contact.submit');

//Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contactSubmit'])->name('contact.submit');

// // routes/web.php

// Frontend routes
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blogs'])->name('home.blogs');

Route::get('/blog/{id}', [HomeController::class, 'blogDetails'])->name('blogs.details');

Route::get('/time', [HomeController::class, 'donationtime'])->name('home.time');

Route::get('/join-our-mission', [AllRegisterController::class, 'showVolunteerForm'])->name('volunteer.register.form');
Route::post('/join-our-mission', [AllRegisterController::class, 'registerVolunteer'])->name('volunteer.register');


// E-Waste Donation Routes (Public)
Route::get('/donate-ewaste', [EwasteDonationController::class, 'showDonationForm'])->name('ewaste.donate.form');
Route::post('/donate-ewaste', [EwasteDonationController::class, 'registerDonation'])->name('ewaste.donate');

Route::get('/donate-money', [MoneyDonationController::class, 'showDonationForm'])->name('money.donate.form');
Route::post('/donate-money/create-order', [MoneyDonationController::class, 'createOrder'])->name('money.donate.create-order');
Route::post('/donate-money/verify-payment', [MoneyDonationController::class, 'verifyPayment'])->name('money.donate.verify-payment');
//Route::post('/contact', [App\Http\Controllers\SupportController::class, 'store'])->name('contact.submit');

Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {
	 Route::get('/money-donations', [MoneyDonationController::class, 'index'])->name('money-donations.index');
    Route::get('/money-donations/{order}', [MoneyDonationController::class, 'show'])->name('money-donations.show');
    Route::get('/money-donations/export', [MoneyDonationController::class, 'exportDonations'])->name('money-donations.export');
    Route::get('/money-donations/statistics', [MoneyDonationController::class, 'getStatistics'])->name('money-donations.statistics');
	
    Route::resource('gallery-categories', GalleryCategoryController::class);
	
	  Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::post('/contacts/{contact}/mark-read', [ContactController::class, 'markAsRead'])->name('contacts.mark-read');
    Route::post('/contacts/{contact}/mark-unread', [ContactController::class, 'markAsUnread'])->name('contacts.mark-unread');
	   Route::post('/bulk-action', [ContactController::class, 'bulkAction'])->name('contacts.bulk-action'); 
	   
	   
	    Route::get('/volunteers', [AllRegisterController::class, 'index'])->name('volunteers.index');
    Route::get('/volunteers/{volunteer}', [AllRegisterController::class, 'show'])->name('volunteers.show');
    Route::put('/volunteers/{volunteer}/status', [AllRegisterController::class, 'updateStatus'])->name('volunteers.status');
    Route::get('/volunteers/export', [AllRegisterController::class, 'exportVolunteers'])->name('volunteers.export');
    Route::get('/volunteers/statistics', [AllRegisterController::class, 'getStatistics'])->name('volunteers.statistics');
    Route::delete('/volunteers/{volunteer}', [AllRegisterController::class, 'destroy'])->name('volunteers.destroy');
	
	// E-Waste Donation Management Routes
    Route::get('/ewaste-donations', [EwasteDonationController::class, 'index'])->name('ewaste-donations.index');
    Route::get('/ewaste-donations/{ewasteDonation}', [EwasteDonationController::class, 'show'])->name('ewaste-donations.show');
    Route::put('/ewaste-donations/{ewasteDonation}/status', [EwasteDonationController::class, 'updateStatus'])->name('ewaste-donations.status');
    Route::get('/ewaste-donations/export', [EwasteDonationController::class, 'exportDonations'])->name('ewaste-donations.export');
    Route::get('/ewaste-donations/statistics', [EwasteDonationController::class, 'getStatistics'])->name('ewaste-donations.statistics');
    Route::delete('/ewaste-donations/{ewasteDonation}', [EwasteDonationController::class, 'destroy'])->name('ewaste-donations.destroy');
});

Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {
    // Support Messages
    Route::get('/support', [App\Http\Controllers\Admin\SupportController::class, 'index'])->name('support.index');
    Route::get('/support/{support}', [App\Http\Controllers\Admin\SupportController::class, 'show'])->name('support.show');
    Route::get('/support/{support}/edit', [App\Http\Controllers\Admin\SupportController::class, 'edit'])->name('support.edit');
    Route::put('/support/{support}', [App\Http\Controllers\Admin\SupportController::class, 'update'])->name('support.update');
    Route::delete('/support/{support}', [App\Http\Controllers\Admin\SupportController::class, 'destroy'])->name('support.destroy');
    Route::get('/support-stats', [App\Http\Controllers\Admin\SupportController::class, 'stats'])->name('support.stats');
	
	Route::get('users/create', [UserController::class, 'create'])->name('users.create'); // Show create form
Route::post('users', [UserController::class, 'store'])->name('users.store'); // Handle create form submission

     Route::get('users',       [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}',[UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}',[UserController::class, 'update'])->name('users.update');
});


Route::get('/support', [SupportController::class, 'index'])->name('support');
Route::post('/support', [SupportController::class, 'store'])->name('support.submit');


// API routes (optional)
Route::get('/api/support-messages', [SupportController::class, 'getMessages']);



Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {
	
      Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('roles/store', [RoleController::class, 'store'])->name('roles.store');

    // Assign route names to roles
    Route::get('roles/{role}/routes', [RoleController::class, 'editRoutes'])->name('roles.edit_routes');
    Route::post('roles/{role}/routes', [RoleController::class, 'updateRoutes'])->name('roles.update_routes');
    
   Route::put('roles/{role}/update-name', [RoleController::class, 'updateName'])->name('admin.roles.update_name');

    });
Route::get('/projects', [HomeController::class, 'projects'])->name('projects.list');
Route::get('/projects/{id}/details', [HomeController::class, 'projectDetails'])->name('projects.details');

Route::post('/donate/store', [DonationController::class, 'store'])->name('donate.store');

Route::get('/signup', [RegisterController::class, 'show'])->name('signup');
Route::post('/signup', [RegisterController::class, 'register'])->name('signup.post');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// routes/web.php
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/reports', [ProfileController::class, 'reports'])->name('profile.reports');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/services', [HomeController::class, 'services'])->name('home.services');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('home.portfolio');
// Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/programs', [HomeController::class, 'programs'])->name('home.programs');

Route::get('/donate/{id}', [HomeController::class, 'donate'])->name('home.donate');


Route::get('/donate', [DonationController::class, 'showForm'])->name('donate.form');
Route::post('/donate', [DonationController::class, 'submitDonation'])->name('donate.submit');
Route::post('/donate/create-order', [DonationController::class, 'createOrder'])->name('donate.create-order');
Route::post('/donate/verify-payment', [DonationController::class, 'verifyPayment'])->name('donation.verify');


// Admin Donation Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/donations', [App\Http\Controllers\Admin\DonationReportController::class, 'index'])->name('admin.donations.index');
    Route::get('/donations/export', [App\Http\Controllers\Admin\DonationReportController::class, 'export'])->name('admin.donations.export');
    Route::get('/donations/{id}', [App\Http\Controllers\Admin\DonationReportController::class, 'show'])->name('admin.donations.show');
});
// routes/web.php (temporary test route)
Route::get('/test-razorpay', function() {
    if (class_exists('Razorpay\Api\Api')) {
        return "Razorpay class found!";
    } else {
        return "Razorpay class NOT found!";
    }
});
Route::get('/projects', [HomeController::class, 'projects'])->name('projects.list');
Route::get('/projects/{id}/details', [HomeController::class, 'projectDetails'])->name('projects.details');

Route::get('/eventsdetails/{id}', [HomeController::class, 'eventsdetails'])->name('events.details');
Route::get('/programsdetails/{id}', [HomeController::class, 'programsdetails'])->name('programs.details');



Route::post('/book-event', [EventBookingController::class, 'store'])->name('book.event');





/*  Route::get('/services', 'App\Http\Controllers\HomeController@services')->name('home.services');
 Route::get('/gallery', 'App\Http\Controllers\HomeController@gallery')->name('home.gallery');
  Route::get('/offer', 'App\Http\Controllers\HomeController@offer')->name('home.offer');
 Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('home.contact');
  Route::get('/clients', 'App\Http\Controllers\HomeController@clients')->name('home.clients');
   Route::get('/portfolio', 'App\Http\Controllers\HomeController@portfolio')->name('home.portfolio');
   

*/

Route::prefix('admin')->middleware(['auth', 'route.access'])->group(function () {
    Route::get('user/change-password', [UserController::class, 'showChangePasswordForm'])->name('admin.user.change-password.form');
    Route::post('user/change-password', [UserController::class, 'changePassword'])->name('admin.user.change-password');
});




Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {

    //Route::get('/maintenance/{maintenance}', [MaintenanceController::class, 'show'])->name('maintenance.show');
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
		
		 
    Route::get('/dashboard/stats', [DashboardController::class, 'getStats'])->name('dashboard.stats');
    Route::get('/dashboard/activity', [DashboardController::class, 'getRecentActivity'])->name('dashboard.activity');
    Route::get('/dashboard/status-distribution', [DashboardController::class, 'getDonationStatusDistribution'])->name('dashboard.status-distribution');
    

    // you can keep adding more admin routes here
    // Route::get('/users', [UserController::class, 'index']);

    // routes/web.php

    Route::resource('orders', OrderController::class);
    Route::resource('orderitems', OrderItemController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('projects', ProjectController::class);

    Route::resource('post-categories', PostCategoryController::class);
    Route::resource('posts', PostController::class);



    Route::get('users',       [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');


    

    Route::resource('product-categories', ProductCategoryController::class);
    Route::resource('products', ProductController::class);

    Route::get('page/{slug}', [PageController::class, 'create'])->name('page.create');
    Route::post('page', [PageController::class, 'store'])->name('page.store');
    Route::get('pageview/{id}', [PageController::class, 'show'])->name('page.show');
    Route::get('pagelist/{slug}', [PageController::class, 'index'])->name('page.index');

    Route::get('pageedit/{id}', [PageController::class, 'edit'])->name('page.edit');
    Route::put('pageupdate/{id}', [PageController::class, 'update'])->name('page.update');
    Route::post('pagedelete/{id}', [PageController::class, 'destroy'])->name('page.destroy');
	  Route::delete('pagedelete/{id}', [PageController::class, 'destroy'])->name('page.destroy');
});

Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {
    Route::resource('programs', ProgramController::class);
});

Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {
    Route::resource('programs', ProgramController::class);
});

Route::post('programs/{program}/images', [MultipleImageController::class, 'store'])->name('admin.programs.images.store');

//Route::resource('events', EventController::class)->names('admin.events');


Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {
    Route::resource('events', EventController::class)->names('admin.events');
    // other admin routes...
});

Route::post('events/{event}/images', [EventMultipleImageController::class, 'store'])
    ->name('admin.events.images.store');



Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {
    Route::resource('highlights', App\Http\Controllers\Admin\HighlightController::class);
});


Route::get('/events', [App\Http\Controllers\HomeController::class, 'showEvents'])->name('events');

// Route::get('/events', [EventController::class, 'index'])->name('events.index');
// Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');


Route::prefix('admin')->middleware(['auth', 'route.access'])->name('admin.')->group(function () {
    Route::resource('events', EventController::class);
});

// Add this route for image uploads
Route::post('/admin/upload-image', function(Request $request) {
    $request->validate([
        'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    if ($request->hasFile('file')) {
        $path = $request->file('file')->store('uploads', 'public');
        return response()->json([
            'location' => asset('storage/' . $path)
        ]);
    }

    return response()->json(['error' => 'Upload failed'], 500);
})->name('admin.upload.image');
Route::get('/cancellation-and-refunds', [PagesController::class, 'cancellationAndRefunds'])->name('cancellation-and-refunds');
Route::get('/termsandconditions', [PagesController::class, 'termsandconditions'])->name('termsandconditions');
Route::get('/shipping', [PagesController::class, 'shipping'])->name('shipping');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
