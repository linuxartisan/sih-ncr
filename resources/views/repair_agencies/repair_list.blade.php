@extends('layouts.app')
   

@section('page_styles')

<!-- iCheck -->
    <link href="{{ URL::asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

<style>
    
    /******** TOGGLE FILTER ********/


.ToggleSidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #ffffff;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 5px;
}

.ToggleSidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.ToggleSidebar a:hover {
    color: #f1f1f1;
}

.ToggleSidebar .closebtn {
    
    font-size: 36px;
    margin-right: 5px;
    float:right;
}

.openbtn {
    font-size: 16px;
    cursor: pointer;
    background-color: #2E21EA;
    color: white;
    padding: 8px 13px;
    border: none;
    margin-left:40px;
    float:left;
}

.openbtn:hover {
    background-color: #444;
}

#ToggleBtn {
    transition: margin-left .5s;
    padding: 14px;
    
}







/******** TOGGLE FILTER **END***/

    
</style>

@endsection

@section('content')

 <div class="page-title">
            <div class="title_left d-inline-flex p-2">
              <h2>Dashboard</h2>
                
            </div>

            <div class="title_right">
              <div class="hidden-md col-sm-5 col-xs-12 d-inline-flex p-2">
                  
<!--
                <div class="input-group">

                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                </span>

                </div>
-->
                  
                  
                  <div id="ToggleBtn" class="hidden-md hidden-lg hidden-xl">
                        <div onclick="openNav()"><i class="fa fa-filter fa-3x pull-right" aria-hidden="true"><span style="font-family:'roboto', sans-serif"> </span></i></div> 
                    </div> 
              </div>
            </div> 
          </div>    

           


          <div class="clearfix"></div>

        <div class="row">
            

                    <div class="col-xl-2 d-flex d-xs-block d-sm-block d-md-block d-lg-block d-xl-none">
                    
                    
                    
             <div id="myToggleSidebar" class="ToggleSidebar">
                 
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
              
                  <div class="x_panel">
                      <div class="x_content">
  
                             
                          
                              
                              {!! Form::open(['action' => 'FilterController@filterGet',
                                'method' => 'post',
                                
                                'id' => 'component-form',
                                'autocomplete' => 'off']) !!}
                              
                          <h1>Filters</h1>  <br> 
                            <div class="">
                                <h3>Device</h3>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="flat" name="device[]" value="1"> laptop
                                  </label> <br> <br>
                                  <label>
                                    <input type="checkbox" class="flat" name="device[]" value="0" > mobile
                                  </label>
                                </div>
                            </div> <br>
                            <div class="">
                                <h3>Device Type</h3>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="flat" name="device_type[]" value="lenovo"> Lenovo
                                  </label> <br> <br>
                                  <label>
                                    <input type="checkbox" class="flat" name="device_type[]" value="dell"> Dell
                                  </label>  <br> <br>
                                    <label>
                                    <input type="checkbox" class="flat" name="device_type[]" value="xiomi"> Xiomi
                                  </label>  <br> <br>
                                    <label>
                                    <input type="checkbox" class="flat" name="device_type[]" value="vivo"> vivo
                                  </label>
                                </div>
                            </div>  <br>
                            <div class="">
                                <h3>Component</h3>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="flat" name="component[]" value="screen"> Screen
                                  </label> <br> <br>
                                  <label>
                                    <input type="checkbox" class="flat" name="component[]" value="battery"> Battery
                                  </label>
                                </div>
                            </div>  <br>
                            <div class="">
                                <h3>Category</h3>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="flat" name="Category[]" value="new"> New
                                  </label> <br> <br>
                                  <label>
                                    <input type="checkbox" class="flat" name="Category[]" value="used"> Used
                                  </label>
                                </div>
                            </div>  <br>
                              
                              <div class="">
                                
                                <div class="">
                                  <label>
                                    <input type="submit" class="btn btn-success" id="btnSave" value="Filter"/>
                                  </label> <br> <br>
                                 
                                </div>
                            </div>  <br>
                          
                         
                          
                           {!! Form::close() !!}
                          
                          
                        </div>
                          
                      </div>
        
            </div>


                    
    
        </div>
        </div>

          <div class="row">

            <div class="col-md-9 col-sm-12 col-xs-12">
            @foreach($result as $component)
              <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                    
                      <div>
                          <div class="component_details" style="">
                              <div class="component_image">
                                <img src="#" max-width="50px" height="200px">
                              </div>
                              <div class="component_info">
                                  <h4 class="component_name">{{ $component->name }}</h4>
                                  <p>Component Details</p>
                              </div>
                          </div>
                      </div>

                  </div>
                </div>
              </div>
            @endforeach
                
            </div>
              
              <div class="col-md-3 col-sm-12 col-xs-12 hidden-md hidden-sm hidden-xs">
                  <div class="x_panel">
                      <div class="x_content">
                          
                          
                              
                              {!! Form::open(['action' => 'FilterController@filterGet',
                                'method' => 'post',
                                
                                'id' => 'component-form',
                                'autocomplete' => 'off']) !!}
                              
                          <h1>Filters</h1>  <br> 
                            <div class="">
                                <h3>Device</h3>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="flat" name="device[]" value="1"> laptop
                                  </label> <br> <br>
                                  <label>
                                    <input type="checkbox" class="flat" name="device[]" value="0" > mobile
                                  </label>
                                </div>
                            </div> <br>
                            <div class="">
                                <h3>Device Type</h3>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="flat" name="device_type[]" value="lenovo"> Lenovo
                                  </label> <br> <br>
                                  <label>
                                    <input type="checkbox" class="flat" name="device_type[]" value="dell"> Dell
                                  </label>  <br> <br>
                                    <label>
                                    <input type="checkbox" class="flat" name="device_type[]" value="xiomi"> Xiomi
                                  </label>  <br> <br>
                                    <label>
                                    <input type="checkbox" class="flat" name="device_type[]" value="vivo"> vivo
                                  </label>
                                </div>
                            </div>  <br>
                            <div class="">
                                <h3>Component</h3>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="flat" name="component[]" value="screen"> Screen
                                  </label> <br> <br>
                                  <label>
                                    <input type="checkbox" class="flat" name="component[]" value="battery"> Battery
                                  </label>
                                </div>
                            </div>  <br>
                            <div class="">
                                <h3>Category</h3>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" class="flat" name="Category[]" value="new"> New
                                  </label> <br> <br>
                                  <label>
                                    <input type="checkbox" class="flat" name="Category[]" value="used"> Used
                                  </label>
                                </div>
                            </div>  <br>
                              
                              <div class="">
                                
                                <div class="">
                                  <label>
                                    <input type="submit" class="btn btn-success" id="btnSave" value="Filter"/>
                                  </label> <br> <br>
                                 
                                </div>
                            </div>  <br>
                          
                         
                          
                           {!! Form::close() !!}
                          
                        </div>
                          
                      </div>
                  </div>
              </div>


@endsection

@section('plugins')

<!-- iCheck -->
    <script src="{{ URL::asset('vendors/iCheck/icheck.min.js') }}"></script>
@endsection

@section('page_script')

<!-- Toggle Filter (Mobile)-->
    
    
<script>
function openNav() {
    document.getElementById("myToggleSidebar").style.width = "250px";
    document.getElementById("ToggleBtn").style.marginLeft = "0px";
}

function closeNav() {
    document.getElementById("myToggleSidebar").style.width = "0";
    document.getElementById("ToggleBtn").style.marginLeft= "0";
}
</script>
    
    
<!-- Toggle Filter (Mobile) END-->

@endsection