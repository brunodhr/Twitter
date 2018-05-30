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