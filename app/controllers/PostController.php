<?php

class PostController extends BaseController {

		public function makePost(){
			if(Auth::check()){
					 $array = Query::where('query', '=', Input::get('query_text'));

					 if(!empty($array)){
					 $user = Post::create(array(
					 	 'user_id' => Auth::user()->id,
					 	 'query_id' => 2
					 	));
					$posts = Post::all();
			        return Redirect::to('/')
			                       ->with('posts',$posts);
			   		}else{
			   			return Redirect::to('/')
			                       ->with('global', "Please make sure you chose one of our options.");
			   		}
			}

		}
}