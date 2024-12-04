<?php


use App\Http\Controllers\FoodController;
use App\Models\Restaurant;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;






Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/regisztracio', function () {
    return view('regisztracio');
});




Route::post('/regisztralas', [ProfileController::class, 'regisztralas'])->name('user.regisztralas');

Route::get('/belepes', function () {
    return view('belepes');
})->name('belepes');

Route::post('/belepes', [ProfileController::class, 'belepes'])->name('user.belepes');
Route::post('/logout', [ProfileController::class, 'kijelentkezes'])->name('kijelentkezes');

Route::get('/profil/{user}/edit', [ProfileController::class, 'edit'])->name('profil.edit');
Route::put('/profil/update', [ProfileController::class, 'update'])->name('profil.update');

Route::get('/loggedin', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('loggedin');

Route::get('/futar', function () {
    return view('futar');
})->middleware(['auth', 'verified'])->name('futar');

Route::get('/WelcomeAdmin', function () {
    return view('WelcomeAdmin');
})->middleware(['auth', 'verified'])->name('WelcomeAdmin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/WelcomeAdmin', [RestaurantController::class, 'adminIndex'])->name('WelcomeAdmin');
Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/restaurant/create', [RestaurantController::class, 'create'])->name('restaurant.create');
Route::post('/restaurant', [RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/restaurant/{restaurant}/edit', [RestaurantController::class, 'edit'])->name('restaurant.edit');
Route::put('/restaurant/{restaurant}/update', [RestaurantController::class, 'update'])->name('restaurant.update');
Route::delete('/restaurant/{restaurant}/destroy', [RestaurantController::class, 'destroy'])->name('restaurant.destroy');
Route::get('/add-food', [FoodController::class, 'create'])->name('food.create');
Route::post('food', [FoodController::class, 'store'])->name('food.store');
Route::get('restaurant/foods', [FoodController::class, 'index'])->name('food.index');
Route::get('/', [RestaurantController::class, 'welcome'])->name('welcome');
Route::get('cart', [FoodController::class, 'showCart'])->name('food.cart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/cart', [CartController::class, 'showCart'])->name('food.cart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::get('/food/cart', [FoodController::class, 'addToCart'])->name('food.cart');
Route::get('/checkout', [CartController::class, 'checkout'])->name('food.checkout');
Route::get('cart/clear', [FoodController::class, 'clearCart'])->name('food.clearCart');
Route::get('checkout', [FoodController::class, 'checkout'])->name('food.checkout');
Route::post('/food/{food}/add-to-cart', [FoodController::class, 'addToCart'])->name('food.addToCart');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('cart', [CartController::class, 'index'])->name('food.cart');
Route::post('cart/{foodId}/add', [FoodController::class, 'addToCart'])->name('food.addToCart');
Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
Route::delete('/cart/remove/{itemId}', [CartController::class, 'removeItem'])->name('cart.remove');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/user/address/store', [UserController::class, 'storeAddress'])->name('user.address.store');
Route::post('/checkout/placeOrder', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');
Route::get('/order/confirmation', [OrderController::class, 'confirmation'])->name('order.confirmation');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');










require __DIR__ . '/auth.php';
