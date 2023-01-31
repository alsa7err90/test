<?php 
  

function uploadImage($request)
{ 
  $data = $request->all();

if(isset($request->passport_picture)){
 $fileName =  uploadOne($request,'passport_picture');
  $data['passport_picture'] = $fileName;
}

if(isset($request->personal_picture)){
  $fileName = uploadOne($request,'personal_picture');
  $data['personal_picture'] = $fileName;

}

if(isset($request->comp_passport_picture)){
  $fileName = uploadOne($request,'comp_passport_picture');
  $data['comp_passport_picture'] = $fileName;
}

if(isset($request->comp_personal_picture)){
  $fileName = uploadOne($request,'comp_personal_picture');
  $data['comp_personal_picture'] = $fileName;
}
 
  return $data;
}
function uploadOne($request,$name){
  $path_img = 'uploads';
  $rand = quickRandom(8);
  $fileName = $rand . '_' . time() . '.' . $request->$name->extension();
  $request->$name->move(public_path($path_img), $fileName);
  return $fileName;
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