<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
//  public function index(){
//     return view('modules.home.home')->with("title","Hello world");
//  }

public function index () {
    $data = array();
    $data['title'] = "Blade Directive";
    $data['npm'] = 212310006;
    $students[] = array("npm"=>212310006, "name"=>"Mahesa Alghifari", "alamat"=>"Cilebut", "gender"=>"Male",);
    $students[] = array("npm"=>212310006, "name"=>"Mahesa Alghifari", "alamat"=>"Cilebut", "gender"=>"Male",);
    $students[] = array("npm"=>212310006, "name"=>"Mahesa Alghifari", "alamat"=>"Cilebut", "gender"=>"Male",);
    $students[] = array("npm"=>212310006, "name"=>"Mahesa Alghifari", "alamat"=>"Cilebut", "gender"=>"Male",);
    $students[] = array("npm"=>212310006, "name"=>"Mahesa Alghifari", "alamat"=>"Cilebut", "gender"=>"Male",);
    $students[] = array("npm"=>212310006, "name"=>"Mahesa Alghifari", "alamat"=>"Cilebut", "gender"=>"Male",);
    $data['students'] = $students;
    return view('modules.home.home')->with("data",$data);
}


}