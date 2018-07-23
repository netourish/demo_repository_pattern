<?php
namespace App\Repositories\ToggleCaching;

use App\Repositories\ToggleCaching\WhichCacheRepositoryInterface;
use App\Cache;

class DatabaseCachingRepository implements WhichCacheRepositoryInterface {
	
	public function get()
	{

		$whichCaching = \DB::table('cache')->where('key', 'type')->first();
		if (!$whichCaching) {
			$cache        = new Cache();
			$cache->key   = 'type'; 
			$cache->value = 'Database Caching';
			$cache->save();

			$whichCaching = \DB::table('cache')->where('key', 'type')->first();
		}

		return $whichCaching->value;

	}

}
