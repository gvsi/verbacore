<?php

class Post extends Eloquent{
	protected $fillable = array('user_id', 'query_id');
	protected $table = 'posts';

}