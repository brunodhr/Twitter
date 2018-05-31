<?php 

if(!function_exists('avatar')){
	function avatar($avatar){
		if(is_null($avatar)){
			return 'storage/avatars/avatar.png';
		}else{
			$avatar=Auth::user()->avatar;
			return $avatar;
		}
	}
}

if(!function_exists('upload_avatar')){
	function upload_avatar($path, $file, $id) 
	{
		if(!empty($file)){
		    $filename = basename($file->getClientOriginalName());
		   	$fullPath = $path . $id;
		   	Storage::disk('public')->put($fullPath, file_get_contents($file), 'public');
		   	return '/storage/avatars/'.$fullPath;
		}else{
			return '/storage/avatar.png';
		}
	   	
	}
}
if(!function_exists('upload')){
	function upload($path, $file) 
	{
	    $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension());
	    $filename_counter = 1;
	    while (Storage::disk('public')->exists($path.$filename.'.'.$file->getClientOriginalExtension())) {
	       $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension()).(string) ($filename_counter++);
	    }
	   $fullPath = $path.$filename.'.'.$file->getClientOriginalExtension();
	   Storage::disk('public')->put($fullPath, file_get_contents($file), 'public');
	   return $fullPath;
	}
}