<?php namespace Cine\Http\Controllers;
class PruebaController extends Controller {
    public function index()
    {
        return View("vista");
    }
    public function nombre($nombre)
    {
        return "quien te coje? ".$nombre;
    }
}
