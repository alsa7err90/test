<?php 
  

function uploadImage($request)
{ 
    $path_img = 'uploads';

  $rand = quickRandom(8);
  $rand2 = quickRandom(8);
  $fileName_passport = $rand . '_' . time() . '.' . $request->passport_picture->extension();
  $fileName_personal = $rand2 . '_' . time() . '.' . $request->personal_picture->extension();
  $request->passport_picture->move(public_path($path_img), $fileName_passport);
  $request->personal_picture->move(public_path($path_img), $fileName_personal);
  $data = $request->all();
  $data['passport_picture'] = $fileName_passport;
  $data['personal_picture'] = $fileName_personal;
  return $data;
}

function quickRandom($length = 16)
{
  $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
}

  function setEnv($key, $val, $clearCache = true)
    {
        file_put_contents(\App::environmentFilePath(), str_replace(
            $key . '=' . env($key),
            $key . '=' . $val,
            file_get_contents(\App::environmentFilePath())
        ));
        if ($clearCache && file_exists(\App::getCachedConfigPath())) {
            \Artisan::call("config:cache");
        };
    }