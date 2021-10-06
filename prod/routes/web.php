<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;

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




route::get('/test', function(){
    $products = Product::all();
    $name = 'chamudi';
    $review_ids = [];
    foreach ($products as $product){
        $temps = $product->reviews()->whereRaw('review like ?', array("%$name%"))->get();
        for ($x = 0; $x <= (count($temps) - 1); $x++) {
            $review_ids[] = $temps[$x]['product_id'];
        }
    }
    $arr_freq = array_count_values($review_ids); 
    arsort($arr_freq);
    $new_arr = array_keys($arr_freq);
    $best_product = $new_arr[0];
    dd($best_product);
});

route::get('/test2', function(){
    $review = Review::find(3);
    dd($review['review']);
});

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

route::get('ask_recommendation', function(){
    return view('products.ask_recommendation');
});

route::get('show_recommendation', function(){
    $search = request('search');
    return view('products.show_recommendation')->with('search', $search);
});

require __DIR__.'/auth.php';
