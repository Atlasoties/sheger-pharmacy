<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\MiscellaneousController;
use App\Http\Controllers\Pages\NewsController;
use App\Http\Controllers\Pages\ShopController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index.html' , [HomeController::class,'home1']);
Route::get('/index-2.html', [HomeController::class,'home2']);
Route::get('/index-3.html', [HomeController::class,'home3']);

Route::get('/about.html', [AboutController::class,'about']);
Route::get('/service.html', [AboutController::class,'service']);
Route::get('/service-details.html', [AboutController::class,'service-details']);
Route::get('/portfolio.html' ,[AboutController::class,'portfolio']);
Route::get('/portfolio-2.html', [AboutController::class,'portfolio2']);
Route::get('/portfolio-details.html' ,[AboutController::class,'portfolio_details']);
Route::get('/team.html', [AboutController::class,'team']);
Route::get('/team-details.html', [AboutController::class,'team_details']);
Route::get('/faq.html', [AboutController::class,'faq']);
Route::get('/locations.html', [AboutController::class,'locations']);

Route::get('/contact.html', [ContactController::class,'contact']);

Route::get('/404.html', [MiscellaneousController::class,'error']);
Route::get('/coming-soon.html', [MiscellaneousController::class,'coming_soon']);
Route::get('/history.html', [MiscellaneousController::class,'history']);

Route::get('/blog.html', [NewsController::class,'blog']);
Route::get('/blog-details.html', [NewsController::class,'blog_details']);
Route::get('/blog-grid.html', [NewsController::class,'blog_grid']);
Route::get('/blog-right-sidebar.html', [NewsController::class,'blog_right']);
Route::get('/blog-left-sidebar.html', [NewsController::class,'blog_left']);


Route::get('/shop.html', [ShopController::class,'shop']);
Route::get('/shop-grid.html', [ShopController::class,'shop_grid']);
Route::get('/shop-right-sidebar.html', [ShopController::class,'shop_right']);
Route::get('/shop-left-sidebar.html', [ShopController::class,'shop_left']);
Route::get('/cart.html', [ShopController::class,'cart']);
Route::get('/checkout.html', [ShopController::class,'checkout']);
Route::get('/order-tracking.html', [ShopController::class,'order_tracking']);
Route::get('/product-details.html', [ShopController::class,'product_details']);
Route::get('/wishlist.html', [ShopController::class,'wishlist']);
Route::get('/account.html', [ShopController::class,'account']);
Route::get('/register.html', [ShopController::class,'register']);
Route::get('/login.html', [ShopController::class,'login']);





