<?php
namespace App\Repositories\ToggleCaching;

use App\Repositories\ToggleCaching\WhichCacheRepositoryInterface;
use Cache;

class FileCachingRepository implements WhichCacheRepositoryInterface {
	
	public function get()
	{
		Cache::add('type', 'File Caching', 10);

		return Cache::get('type');
	}

}
