<?php

/*esta ruta solo consultable por el metodo GET

*/
Route::post("usuario/registro","UserController@registrar");

Route::post("usuario/login","UserController@logear");
