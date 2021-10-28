<?php

namespace App\Models;

use Faker\Provider\Lorem;

class Post_{
	private static $blog_posts = [
		[			
			"title" => "Judul Post Pertama",
			"slug" => "judul-post-pertama",
			"author" => "Fiyosa Wow",
			"body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aliquam accusamus tempore quibusdam dolores possimus ipsum dolore neque nostrum tempora dolor ea obcaecati nesciunt consequuntur, eos debitis ullam, exercitationem suscipit illum odit minus dicta molestiae iste doloribus? Blanditiis voluptatum ipsa saepe atque quas reiciendis soluta sed. Exercitationem, reiciendis quaerat? Quis illum in magni iure enim quod, minus nesciunt repudiandae aliquid cupiditate consectetur ipsa perspiciatis totam a fugit autem obcaecati dolorum exercitationem neque. Incidunt delectus, quisquam harum dignissimos eaque dolorum repudiandae."
		],
		[			
			"title" => "Judul Post Kedua",
			"slug" => "judul-post-kedua", 
			"author" => "Jidan Wow",
			"body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptates consequatur ab? Facere corrupti, eum, aperiam facilis doloremque perferendis, quibusdam perspiciatis iste saepe laudantium optio velit non recusandae sint animi quidem officia illum! Fugiat dignissimos laboriosam cupiditate adipisci sit distinctio ratione atque quas velit? Labore et ducimus dignissimos quibusdam asperiores architecto non. Dignissimos amet, quaerat nobis ipsum excepturi facilis? Ducimus atque animi consectetur quasi nostrum, nam totam ratione velit minus quo labore qui commodi ipsam natus illo necessitatibus fugit at."
		]
	];

	public static function all(){
		return collect(self::$blog_posts);  
	}

	public static function find($slug){
		$posts = static::all();		
		return $posts->firstWhere('slug', $slug);
	}
}
