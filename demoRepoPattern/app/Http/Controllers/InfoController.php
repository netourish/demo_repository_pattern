<?php
namespace App\Http\Controllers;

use App\Repositories\ToggleCaching\WhichCacheRepositoryInterface;

class InfoController extends Controller {

	public function __construct(WhichCacheRepositoryInterface $info)
	{
		$this->info = $info;
	}

	public function whichCaching() {
		echo $this->info->get();
		//echo 46;
		exit;
	}

}
