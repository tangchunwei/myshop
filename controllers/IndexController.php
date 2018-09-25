<?php
namespace controllers;
class IndexController
{
    public function index(){
        return view("index/index");
    }
    public function main(){
        return view("index/main");
    }
    public function menu(){
        return view("index/menu");
    }
    public function top(){
        return view("index/top");
    }
}