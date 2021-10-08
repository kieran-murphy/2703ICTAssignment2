<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use App\Models\Follow;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index']);


route::get('/logoutcheck', function(){
    return view('products.logoutcheck');
});

Route::get('/product/{id}/show_reviews', [ProductController::class, 'show_reviews']);
Route::resource('product', ProductController::class);

Route::get('/reviews/{id}/show', [ReviewsController::class, 'show']);
Route::get('/reviews/{id}/create', [ReviewsController::class, 'create']);
Route::get('/reviews/{id}/like', [ReviewsController::class, 'like']);
Route::get('/reviews/{id}/dislike', [ReviewsController::class, 'dislike']);

Route::resource('reviews', ReviewsController::class);

Route::get('user/{id}/show_following', [UserController::class, 'show_following']);
Route::get('user/{id}/show_followers', [UserController::class, 'show_followers']);
Route::resource('user', UserController::class);

Route::get('/follow/{id}/create', [FollowController::class, 'create']);
Route::resource('follow', FollowController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

route::get('ask_recommendation', function(){
    return view('products.ask_recommendation');
});

route::get('documentation', function(){
    return view('layouts.documentation');
});



route::get('show_recommendation', function(){
    $search = request('search');
    $products = Product::all();
    $review_ids = [];
    foreach ($products as $product){
        $reviews = $product->reviews()->whereRaw('review like ?', array("%$search%"))->get();
        for ($x = 0; $x <= (count($reviews) - 1); $x++) {
            $review_ids[] = $reviews[$x]['product_id'];
        }
    }
    if (count($review_ids) != 0){
        $arr_freq = array_count_values($review_ids);
        arsort($arr_freq);
        $new_arr = array_keys($arr_freq);
        $best_product_num = $new_arr[0];
        $best_product = Product::find($best_product_num);
        return view('products.show_recommendation')->with('search', $search)->with('product', $best_product);
    } else {
        return view('products.oops_recommendation');
    }
    
});

require __DIR__.'/auth.php';
