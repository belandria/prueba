<?php namespace Cine\Http\Controllers;
class PruebaController extends Controller {
    public function index()
    {
        return View("vista");
    }
    public function vista1()
    {
        return View("1");
    }
    public function vista2()
    {
        return View("2");
    }
    public function nombre($nombre)
    {
        return "quien te coje? ".$nombre;
    }
}
