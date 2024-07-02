<?php
  
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;  

  
// Route::get('/', function () {
//     return view('frontend.body');
// });

// Route::get('/services',[App\Http\Controllers\FrontController::class, 'ServiceFront'] )->name('services');
// Route::get('/contacts',[App\Http\Controllers\FrontController::class, 'ContactsFront'] )->name('contact-us');
// Route::get('/mission',[App\Http\Controllers\FrontController::class, 'MissionFront'] )->name('mission');
// Route::get('/Team',[App\Http\Controllers\FrontController::class, 'TeamFront'] )->name('our-team');
// Route::get('/About',[App\Http\Controllers\FrontController::class, 'AboutFront'] )->name('about-us');
// Route::get('/Approach',[App\Http\Controllers\FrontController::class, 'ApproachFront'] )->name('approach');

 Route::get('/HomePage',[App\Http\Controllers\FrontController::class, 'frontend'] )->name('frontend');
Route::get('/services2',[App\Http\Controllers\FrontController::class, 'ServiceFront'] )->name('services');
Route::get('/blog',[App\Http\Controllers\FrontController::class, 'BlogFront'] )->name('blog');
Route::get('/Gallery',[App\Http\Controllers\FrontController::class, 'GalleryFront'] )->name('gallery');
Route::get('/contacts',[App\Http\Controllers\FrontController::class, 'ContactsFront'] )->name('contact-us');
Route::get('/About',[App\Http\Controllers\FrontController::class, 'AboutFront'] )->name('about-us');

Auth::routes(); 

//Users Routes

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

//Manager Routes

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');
});  

//Super Admin Routes

Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
Route::get('/super-admin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('super.admin.dashboard');


// Dashboard Blog
Route::get('dashboard/Blog', [App\Http\Controllers\BlogController::class, 'index'])->name('Blog.index');
Route::get('dashboard/Blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('Blog.create');
Route::post('dashboard/Blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('Blog.store');
Route::get('dashboard/Blog/edit/{blog}', [App\Http\Controllers\BlogController::class, 'edit'])->name('Blog.edit');
Route::put('dashboard/Blog/update/{blog}', [App\Http\Controllers\BlogController::class, 'update'])->name('Blog.update');
Route::delete('dashboard/Blog/destroy/{blog}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('Blog.destroy');

// Dashboard Category Blog
Route::get('dashboard/CategoryBlog', [App\Http\Controllers\CategoryBlogController::class, 'index'])->name('CategoryBlog.index');
Route::get('dashboard/CategoryBlog/create', [App\Http\Controllers\CategoryBlogController::class, 'create'])->name('CategoryBlog.create');
Route::post('dashboard/CategoryBlog/store', [App\Http\Controllers\CategoryBlogController::class, 'store'])->name('CategoryBlog.store');
Route::get('dashboard/CategoryBlog/edit/{categoryBlog}', [App\Http\Controllers\CategoryBlogController::class, 'edit'])->name('CategoryBlog.edit');
Route::put('dashboard/CategoryBlog/update/{categoryBlog}', [App\Http\Controllers\CategoryBlogController::class, 'update'])->name('CategoryBlog.update');
Route::delete('dashboard/CategoryBlog/destroy/{categoryBlog}', [App\Http\Controllers\CategoryBlogController::class, 'destroy'])->name('CategoryBlog.destroy');

// Dashboard Category Gallary
Route::get('dashboard/CategoryGallary', [App\Http\Controllers\CategoryGallaryController::class, 'index'])->name('CategoryGallary.index');
Route::get('dashboard/CategoryGallary/create', [App\Http\Controllers\CategoryGallaryController::class, 'create'])->name('CategoryGallary.create');
Route::post('dashboard/CategoryGallary/store', [App\Http\Controllers\CategoryGallaryController::class, 'store'])->name('CategoryGallary.store');
Route::get('dashboard/CategoryGallary/edit/{categoryGallary}', [App\Http\Controllers\CategoryGallaryController::class, 'edit'])->name('CategoryGallary.edit');
Route::put('dashboard/CategoryGallary/update/{categoryGallary}', [App\Http\Controllers\CategoryGallaryController::class, 'update'])->name('CategoryGallary.update');
Route::delete('dashboard/CategoryGallary/destroy/{categoryGallary}', [App\Http\Controllers\CategoryGallaryController::class, 'destroy'])->name('CategoryGallary.destroy');

// Dashboard  Gallary
Route::get('dashboard/Gallary', [App\Http\Controllers\GallaryController::class, 'index'])->name('Gallary.index');
Route::get('dashboard/Gallary/create', [App\Http\Controllers\GallaryController::class, 'create'])->name('Gallary.create');
Route::post('dashboard/Gallary/store', [App\Http\Controllers\GallaryController::class, 'store'])->name('Gallary.store');
Route::get('dashboard/Gallary/edit/{gallary}', [App\Http\Controllers\GallaryController::class, 'edit'])->name('Gallary.edit');
Route::put('dashboard/Gallary/update/{gallary}', [App\Http\Controllers\GallaryController::class, 'update'])->name('Gallary.update');
Route::delete('dashboard/Gallary/destroy/{gallary}', [App\Http\Controllers\GallaryController::class, 'destroy'])->name('Gallary.destroy');

// Dashboard  Slider Position
Route::get('dashboard/sliderposition', [App\Http\Controllers\SliderPositionController::class, 'index'])->name('sliderposition.index');
Route::get('dashboard/sliderposition/create', [App\Http\Controllers\SliderPositionController::class, 'create'])->name('sliderposition.create');
Route::post('dashboard/sliderposition/store', [App\Http\Controllers\SliderPositionController::class, 'store'])->name('sliderposition.store');
Route::get('dashboard/sliderposition/edit/{sliderPosition}', [App\Http\Controllers\SliderPositionController::class, 'edit'])->name('sliderposition.edit');
Route::put('dashboard/sliderposition/update/{sliderPosition}', [App\Http\Controllers\SliderPositionController::class, 'update'])->name('sliderposition.update');
Route::delete('dashboard/sliderposition/destroy/{sliderPosition}', [App\Http\Controllers\SliderPositionController::class, 'destroy'])->name('sliderposition.destroy');

// Dashboard  Slider 
Route::get('dashboard/slider', [App\Http\Controllers\SliderController::class, 'index'])->name('slider.index');
Route::get('dashboard/slider/create', [App\Http\Controllers\SliderController::class, 'create'])->name('slider.create');
Route::post('dashboard/slider/store', [App\Http\Controllers\SliderController::class, 'store'])->name('slider.store');
Route::get('dashboard/slider/edit/{slider}', [App\Http\Controllers\SliderController::class, 'edit'])->name('slider.edit');
Route::put('dashboard/slider/update/{slider}', [App\Http\Controllers\SliderController::class, 'update'])->name('slider.update');
Route::delete('dashboard/slider/destroy/{slider}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('slider.destroy');

// Dashboard  team 
Route::get('dashboard/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team.index');
Route::get('dashboard/team/create', [App\Http\Controllers\TeamController::class, 'create'])->name('team.create');
Route::post('dashboard/team/store', [App\Http\Controllers\TeamController::class, 'store'])->name('team.store');
Route::get('dashboard/team/edit/{team}', [App\Http\Controllers\TeamController::class, 'edit'])->name('team.edit');
Route::put('dashboard/team/update/{team}', [App\Http\Controllers\TeamController::class, 'update'])->name('team.update');
Route::delete('dashboard/team/destroy/{team}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('team.destroy');

// Dashboard  about 
Route::get('dashboard/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('dashboard/about/create', [App\Http\Controllers\AboutController::class, 'create'])->name('about.create');
Route::post('dashboard/about/store', [App\Http\Controllers\AboutController::class, 'store'])->name('about.store');
Route::get('dashboard/about/edit/{about}', [App\Http\Controllers\AboutController::class, 'edit'])->name('about.edit');
Route::put('dashboard/about/update/{about}', [App\Http\Controllers\AboutController::class, 'update'])->name('about.update');
Route::delete('dashboard/about/destroy/{about}', [App\Http\Controllers\AboutController::class, 'destroy'])->name('about.destroy');

// Dashboard  approach 
Route::get('dashboard/approach', [App\Http\Controllers\ApproachController::class, 'index'])->name('approach.index');
Route::get('dashboard/approach/create', [App\Http\Controllers\ApproachController::class, 'create'])->name('approach.create');
Route::post('dashboard/approach/store', [App\Http\Controllers\ApproachController::class, 'store'])->name('approach.store');
Route::get('dashboard/approach/edit/{approach}', [App\Http\Controllers\ApproachController::class, 'edit'])->name('approach.edit');
Route::put('dashboard/approach/update/{approach}', [App\Http\Controllers\ApproachController::class, 'update'])->name('approach.update');
Route::delete('dashboard/approach/destroy/{approach}', [App\Http\Controllers\ApproachController::class, 'destroy'])->name('approach.destroy');

// Dashboard  client 
Route::get('dashboard/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client.index');
Route::get('dashboard/client/create', [App\Http\Controllers\ClientController::class, 'create'])->name('client.create');
Route::post('dashboard/client/store', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');
Route::get('dashboard/client/edit/{client}', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');
Route::put('dashboard/client/update/{client}', [App\Http\Controllers\ClientController::class, 'update'])->name('client.update');
Route::delete('dashboard/client/destroy/{client}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('client.destroy');

// Dashboard  Contacts 
Route::get('dashboard/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('dashboard/contact/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('dashboard/contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('dashboard/contact/edit/{contact}', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
Route::put('dashboard/contact/update/{contact}', [App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');
Route::delete('dashboard/contact/destroy/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');
});