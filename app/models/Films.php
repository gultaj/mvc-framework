<?php 

class Films extends Model
{
	public function getFilms()
	{
		return [
			[
				'name' => 'Avatar',
				'genre' => 'fantasy',
			],
			[
				'name' => 'Terminator',
				'genre' => 'fiction',
			]
		];
	}
}