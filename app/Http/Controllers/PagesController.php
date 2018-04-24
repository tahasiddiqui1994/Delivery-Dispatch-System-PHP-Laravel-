<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exporter;
use App\Http\Controllers\Controller;
use DB;
use App\driver;
use PDF;

class PagesController extends Controller
{

    public function jumani() {
        return view('jumani') ;
    }

    public function makeExcelDrivers() {
        $query = DB::table('drivers')->select('firstName','lastName','streetNo','city','state','paymentType','emergencyContactName','emergencyPhoneNo');
        $excel = Exporter::make('Excel');
        $excel->loadQuery($query);
        $excel->stream('drivers.xlsx');
    }

    public function makeCsvDrivers() {
        $query = DB::table('drivers')->select('firstName','lastName','streetNo','city','state','paymentType','emergencyContactName','emergencyPhoneNo');
        $excel = Exporter::make('Csv');
        $excel->loadQuery($query);
        $excel->stream('drivers.csv');
    }

    public function makePdfDrivers() {
        $data = driver::all();
        
        $pdf = PDF::loadView('driverspdf', ['data' => $data]) ;

        return $pdf->download('drivers.pdf');
    }

    public function error_403() {
        return view('error_403') ;
    }    
    public function error_404() {
        return view('error_404') ;
    }    
    public function error_405() {
        return view('error_405') ;
    }
    public function error_500() {
        return view('error_500') ;
    }
    public function error_503() {
        return view('error_503');
    }
    
    public function webgenerals() {
        return view('generals') ;
    }    
    public function general_feed() {
        return view('general_feed') ;
    }    
    public function user_pages_list() {
        return view('user_pages_list') ;
    }
    public function user_pages_profile() {
        return view('user_pages_profile') ;
    }
    public function user_pages_profile_cover() {
        return view('user_pages_profile_cover');
    }

    public function user_pages_profile_tabbed() {
        return view('user_pages_profile_tabbed') ;
    }
    public function user_pages_cards() {
        return view('user_pages_cards') ;
    }

    public function index() {
        return view('index') ;
    }
    public function dashboard() {
        return view('index') ;
    }
    public function layout_navbar_fixed() {
        return view('layout_navbar_fixed');
    }

    public function welcome() {
    	$title = "Hello I am Taha \n" ;
    	//return view('welcome', compact('title'));
    	return view('welcome')->with('title', $title);

    }
    public function alpaca_advanced() {
    	return view('alpaca_advanced');
    }
    /*public function load() {
        return view('load');
    }
    public function addLoad() {
        return view('addLoad');
    }*/




    public function login_validation() {
        return view('login_validation');
    }
    public function login_unlock() {
        return view('login_unlock');
    }
    public function login_transparent() {
        return view('login_transparent');
    }
    public function login_tabbed() {
        return view('login_tabbed');
    }
    public function login_simple() {
        return view('login_simple');
    }
    public function login_registration_advanced() {
        return view('login_registration_advanced');
    }
    public function login_registration() {
        return view('login_registration');
    }
    public function login_password_recover(){
        return view('login_password_recover');
    }
    public function login_modals() {
        return view('login_modals');
    }
    public function login_hide_navbar() {
        return view('login_hide_navbar');
    }
    public function login_background() {
        return view('login_background');
    }
    public function login_advanced() {
        return view('login_advanced');
    }

    //login

    public function form_bootstrap_select() {
        return view('form_bootstrap_select');
    }
    public function form_checkboxes_radios() {
        return view('form_checkboxes_radios');
    }
    public function form_controls_extended() {
        return view('form_controls_extended');
    }
    public function form_dual_listboxes() {
        return view('form_dual_listboxes');
    }
    public function form_editable() {
        return view('form_editable');
    }
    public function form_floating_labels() {
        return view('form_floating_labels');
    }
    public function form_input_groups() {
        return view('form_input_groups');
    }
    public function form_inputs_basic(){
        return view('form_inputs_basic');
    }
    public function form_inputs_grid() {
        return view('form_inputs_grid');
    }
    public function form_layout_horizontal() {
        return view('form_layout_horizontal');
    }
    public function form_layout_vertical() {
        return view('form_layout_vertical');
    }
    public function form_multiselect() {
        return view('form_multiselect');
    }
    public function form_select_box_it() {
        return view('form_select_box_it');
    }
    public function form_select2() {
        return view('form_select2');
    }
    public function form_tag_inputs() {
        return view('form_tag_inputs');
    }
    public function form_validation() {
        return view('form_validation');
    }
}
