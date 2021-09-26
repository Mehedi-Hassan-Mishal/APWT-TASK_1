<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companycontroller extends Controller
{
    //
    function Home()
    {
        return view('pages.home');
    }

    function About()
    {
        return view('pages.about');
    }
    function Product()
    {
        return view('pages.product');
    }
    function Teams()
    {
        return view('pages.teams');
    }
    function Contact()
    {
        return view('pages.contact');
    }


    public function show(){
        $items = array('Cake','Biscuits','Drinks','Burger');
        return view('pages.product', ['product'=>$items]);
    }
}
