<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\akuncontroller;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\kelasController;





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

//Route::get('/', function () {
 //   return view('welcome');
// });

//Route::get('/hello', function () {
  //  echo "<h1>hello world </h1>" ;
    //return 'hello world';
// });


// Route::get('/akun/create', function () {
//    return '
//    <h1>Buat Account Baru</h1>
//    <h4>Sign Up Form</h4>
//    <form action="welocome.html" method="post">
//        <label for="first-name">First Name : </label>
//       <br>
//        <input type="text" name="first-name" id="first-name" class="name" placeholder="dadhag">
//        <br>
//        <label for="last-name">Last Name :</label>
//        <br>
//        <input type="text" name="last-name" id="last-name">
//        <br>
//         <label for="gender">Gender :</label>
//         <br>
//         <input type="radio" name="gender" id="">Male
//         <br> 
//         <input type="radio" name="gender" id="">Female
//         <br>
//         <label for="Nationatity">Nationality</label>
//         <br>
//         <select name="Nationatity" id="Nationatity">
//             <option value="wna">WNI</option>
//             <option value="wni">WNA</option>
//         </select>
//         <br>
//         <label for="language">Bahasa</label>
//         <br>
//         <input type="checkbox" name="language" id="">Bahasa Indonesia
//         <br>
//         <input type="checkbox" name="language" id="">English
//         <br>
//         <input type="checkbox" name="language" id="">Other
//         <br>
//         <label for="bio">Bio</label><br>
//         <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
//         <br>
//         <input type="submit" value="Sign Up">
//         </form>';
// });

// Route::get('/', function () {
//     return '
//     <h1>Media Online</h1>
//     <h3>Sosial Media Developer</h3>
//     <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
//     <h4>Benefit Join di Media Online</h4>
//     <ul>
//         <li>Mendapatkan motivasi dari sesama Developer</li>
//         <li>Sharing knowledge</li>
//         <li>Dibuat oleh calon web developer terbaik</li>
//     </ul>
//     <h4>Cara Bergabung ke media online</h4>
//     <ol>
//         <li>Mengunjunig website ini</li>
//         <li>Mendaftarkan di
//             <a href="form.html"> Form Sign Up </a></li>
//         <li>Selesai</li>
//     </ol>';
// });


// Route::get('/akun', [akuncontroller::class, 'index']);
// Route::get('/akun/form', [akuncontroller::class, 'form']);

Route::get('/akun', [akuncontroller::class, 'index']);
Route::get('/akun/create', [akuncontroller::class, 'create']);

//
// Route::get('/account', [AccountController::class, 'index']);
// Route::get('/account/create', [AccountController::class, 'create']);
// Route::get('/account/show', [AccountController::class, 'show']);

Route::view('/', 'template.master');
Route::view('/home', 'template.master');
Route::get('/data-table', [akuncontroller::class, 'index'])->name('indexakun');
Route::get('/table', [akuncontroller::class, 'create'])->name('createakun');
Route::get('/akun', [akuncontroller::class, 'indexakun']);
Route::get('/akun/create', [akuncontroller::class, 'createakun']);
//route untuk url Account

Route::get('/account', [AccountController::class, 'index'])->name('indexAccount');
Route::get('/account/create', [AccountController::class, 'create'])->name('createAccount');
Route::get('/account/show', [AccountController::class, 'show'])->name('showAccount');

// Route::get('/student', [SiswaController::class, 'index'])->name('studentindex');
// Route::get('/student/create', [SiswaController::class, 'create'])->name('studentcreate');
// Route::post('/student', [SiswaController::class, 'store'])->name('studentStore');
// Route::get('/student/{id}', [SiswaController::class, 'show'])->name('studentshow');
// Route::get('/student/{id}/edit', [SiswaController::class, 'edit'])->name('studentedit');
// Route::put('/student/{id}', [SiswaController::class, 'update'])->name('studentupdate');
// Route::delete('/student/{id}', [SiswaController::class, 'destroy'])->name('studentDestroy');

// Route::Controller(SiswaController::class)->group(function(){
//   Route::get('/student', 'index')->name('studentindex');
//   Route::get('/student/create', 'create')->name('studentcreate');
//   Route::post('/student', 'store')->name('studentStore');
//   Route::get('/student/{id}', 'show')->name('studentshow');
//   Route::get('/student/{id}/edit', 'edit')->name('studentedit');
//   Route::put('/student/{id}', 'update')->name('studentupdate');
//   Route::delete('/student/{id}', 'destroy')->name('studentDestroy');
// });

Route::resource('student', SiswaController::class);
Route::resource('class', kelasController::class);

Route::get('/student', [SiswaController::class, 'index'])->name('indexStudent');
Route::get('/student/create', [SiswaController::class, 'create'])->name('studentCreate');

Route::get('/class', [KelasController::class, 'index'])->name('indexClass');
Route::get('/class/create', [KelasController::class, 'create'])->name('classCreate');
