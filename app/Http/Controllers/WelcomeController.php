<?php

namespace codeCommerce\Http\Controllers;

class WelcomeController extends Controller{

	public function exemplo(){

		$nome = 'Eduardo';
		return view ('exemplo')->with('nome',$nome);
	}

}

?>