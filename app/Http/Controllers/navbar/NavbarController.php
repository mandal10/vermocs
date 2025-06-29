<?php

namespace App\Http\Controllers\navbar;

use App\Http\Controllers\Controller;
use App\Services\LogServices;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    #Bind LogServices
    protected $logService;

    #Bind current controller name
    protected $controllerName = "NavbarController";


    public function __construct(LogServices $logService)
    {
        $this->logService = $logService;
    }
    /**
     * @method helps to get about
     * @param nothing
     * @return view
     */
    public function about()
    {
        try {
            return view('navbar.pages.about');
        } catch (\Throwable $e) {
            $this->logService->createErrorLog("Show about page" . $e->getMessage() . " In" . $this->controllerName . " inside about method");
            return redirect()->back();
        }
    }
    /**
     * @method helps to get cart page
     * @param nothing
     * @return view
     */
    public function cart()
    {
        try {
            return view('navbar.pages.cart');
        } catch (\Throwable $e) {
            $this->logService->createErrorLog("Show cart page" . $e->getMessage() . " In" . $this->controllerName . " inside cart method");
            return redirect()->back();
        }
    }
}
