<?php
namespace App\Helpers;
use App\Language;
use Illuminate\Support\Facades\Auth;
class languageUsers
{
	public static function privilege()
	{
		
        $user = Auth::user();
        $privilege=$user->privilege;
		return ($privilege);

	}
	public static function idLanguage()
	{
		
        $user = Auth::user();
        $idLanguage=$user->language_id;

		return ($idLanguage);

	}

}