<?php

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



Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name("help");
Route::get('/about', 'StaticPagesController@about')->name("about");

//用户
Route::get('signup','UsersController@create')->name('signup');
Route::resource('users','UsersController');


Route::get("login","SessionsController@create")->name("login");
Route::post("login","SessionsController@store")->name("login");
Route::get("logout","SessionsController@destroy")->name("logout");







//
//
//
//
//Route::get('/', function () {
//    return redirect('/blog');
//});
//
// /*=======**/
//
//Route::get('ck',function (){
//    return response()->json(
//        ['name'=>'fs','age'=>33]);
//    return response('kkk')->cookie('id',1111);
//})  ;
//
//Route::get('/fs',function (){
////    $re=2;
//
//     $data=['name'=>'于双',"age"=>35,"idcard"=>430527198509224239];
//     $data=[];
//     $arr=[
//        ["name"=>"adfadf"],
//        ["name"=>"testds"],
//     ];
//
//
//
//
//    return view('welcome',compact('data'));
//})        ;
//
//Route::get('/as', function () {
//    return route('post.index');
//});
//
//Route::get('/blog', 'BlogController@index')->name('blog.name');
//Route::get('/blog/{slug}', 'BlogController@showPost')->name('blog.detail');
//
//Route::group(['prefix' => 'gr'], function () {
//    Route::get('one', function () {
//        return 'gr/one';
//    });
//
//    Route::group(['prefix' => 'll'], function () {
//        Route::get('two', function () {
//            return 'gr/ll/two';
//        });
//    });
//}
//
//);
//
///*=======**/
////后台路由
//
//Route::get('/admin', function () {
//    return redirect('/admin/post');
//});
//
//
//Route::middleware('auth')->namespace('Admin')->group(function () {
//    Route::resource('admin/post', 'PostController');
//    Route::resource('admin/tag', 'TagController');
//    Route::get('admin/upload', 'UploadController@index');
//});
//
//
////登录退出
//
//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('/login', 'Auth\LoginController@login');
//Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
//
//
//
//
//Route::get('/dd',function (\Illuminate\Support\Facades\Request $request){
//    dd($request);
//}) ;
//




































