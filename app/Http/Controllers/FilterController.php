<?php

namespace App\Http\Controllers;

use App\Component;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    //
    public function filterShow()
    {
        $result = Component::all();
        return view('repair_agencies.repair_list', compact('result'));
    }
    
    public function filterGet(Request $request)
    {

        $input=$request->all();

     
        $query = Component::whereHas('products', function($q1) use($input) {
            if(array_key_exists('device', $input)) {
                $q1->where('products.type', '=', $input['device'][0]);
                foreach($input["device"] as $x) {
                    $q1->orWhere('products.type', '=' ,$x);
                }
            }
            
            $q1->whereHas('company', function($q2) use($input) {
                if(array_key_exists('device_type', $input)) {
                    $q2->where('companies.name', 'like', '%'.$input['device_type'][0].'%');
                    foreach($input["device_type"] as $x) {
                        $q2->orWhere('companies.name', 'like', '%'.$x.'%');
                    }
                }
            });
          });
        
          if(array_key_exists('component', $input)) {
              foreach($input['component'] as $x) {
                $query->where('components.name', 'like', $x);
              }
          }
        
          $result = $query->get();

          return view('repair_agencies.repair_list', compact('result'));

    }
}

