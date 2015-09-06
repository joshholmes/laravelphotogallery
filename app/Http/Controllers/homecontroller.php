<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;

class HomeController extends Controller
{
    public function index()
    {
        $blobRestProxy = ServicesBuilder::getInstance()->createBlobService(env('CUSTOMCONNSTR_BLOBCONNECTIONSTRING'));

				try {
						// List blobs.
						$blob_list = $blobRestProxy->listBlobs(env('CONTAINER'));
						$blobs = $blob_list->getBlobs();
						
						$photos = array();
						foreach($blobs as $blob)
						{
								$photos[] = array($blob->getUrl() => $blob->getName());
						}
							
						return view('home.index', [ 'photos' => $photos ]);
					
				} catch(ServiceException $e) {
						$code = $e->getCode();
						$error_message = $e->getMessage();
				}
				
				return view('home.index', [ 'photos' =>  [ NULL ] ]);
      
        //return view('home.index', ['name' =>['Cory', 'josh']]);
    }
}