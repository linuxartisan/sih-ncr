@extends('layouts.app')

@section('content')


  <link href="{{ asset('Main_Project/js/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('Main_Project/js/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('Main_Project/js/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('Main_Project/js/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('Main_Project/js/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />



            <div class="page-title">
            <div class="title_left">
              <h3>Dashboard</h3>
            </div>

    <!--        <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div> -->
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="x_panel">
               
                <div class="x_content">


                  <!-- Smart Wizard -->
         
                  <h2>Enter Component</h2>
                  <!-- Tabs -->
                  <div id="wizard_verticle" class="form_wizard wizard_verticle">
                    <ul class="list-unstyled wizard_steps">
                      <li>
                        <a href="#step-11">
                          <span class="step_no">1</span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-22">
                          <span class="step_no">2</span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-33">
                          <span class="step_no">3</span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-44">
                          <span class="step_no">4</span>
                        </a>
                      </li>
                    </ul>

                    <div id="step-11">
                      <h2 class="StepTitle">Step 1 Content</h2>
                      <form class="form-horizontal form-label-left">

                        <span class="section">Personal Info</span>

                        <div class="form-group">
                          <label class="control-label col-md-5 col-sm-5" for="first-name">First Name <span class="required">*</span>
                          </label>
                          <div class="col-md-7 col-sm-7">
                            <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-5 col-sm-5" for="last-name">Last Name <span class="required">*</span>
                          </label>
                          <div class="col-md-7 col-sm-7">
                            <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-5 col-sm-5">Middle Name</label>
                          <div class="col-md-7 col-sm-7">
                            <input id="middle-name2" class="form-control col-md-7 col-xs-7" type="text" name="middle-name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4 col-sm-4">Gender</label>
                          <div class="col-md-8 col-sm-8">
                            <div id="gender2" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                              </label>
                              <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="female" checked=""> Female
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-5 col-sm-5">DOB <span class="required">*</span>
                          </label>
                          <div class="col-md-7 col-sm-7">
                            <input id="birthday2" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                          </div>
                        </div>

                      </form>
                    </div>
                    <div id="step-22">
                      <h2 class="StepTitle">Step 2 Content</h2>
                     <form class="form-horizontal form-label-left">

                        <span class="section">Personal Info</span>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3" for="first-name">First Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3" for="last-name">Last Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3">Middle Name / Initial</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3">Gender</label>
                          <div class="col-md-6 col-sm-6">
                            <div id="gender2" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                              </label>
                              <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="female" checked=""> Female
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3">Date Of Birth <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input id="birthday2" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                          </div>
                        </div>

                      </form>
                    </div>
                    <div id="step-33">
                      <h2 class="StepTitle">Step 3 Content</h2>
                       <form class="form-horizontal form-label-left">

                        <span class="section">Personal Info</span>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3" for="first-name">First Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3" for="last-name">Last Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3">Middle Name / Initial</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3">Gender</label>
                          <div class="col-md-6 col-sm-6">
                            <div id="gender2" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                              </label>
                              <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="female" checked=""> Female
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3">Date Of Birth <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input id="birthday2" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                          </div>
                        </div>

                      </form>
                    </div>
                    <div id="step-44">
                      <h2 class="StepTitle">Step 4 Content</h2>
                       <form class="form-horizontal form-label-left">

                        <span class="section">Personal Info</span>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3" for="first-name">First Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3" for="last-name">Last Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3">Middle Name / Initial</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3">Gender</label>
                          <div class="col-md-6 col-sm-6">
                            <div id="gender2" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                              </label>
                              <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="female" checked=""> Female
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3">Date Of Birth <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input id="birthday2" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>

                  <!-- End SmartWizard Content -->


                </div>
              </div>
            </div>
              
              <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_content">
                          <h3>Uploaded Components</h3>   
                 <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                        <tr>
                        <th scope="row">6</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                        <tr>
                        <th scope="row">7</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                        <tr>
                        <th scope="row">8</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                        <tr>
                        <th scope="row">9</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                        <tr>
                        <th scope="row">10</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                       
                    </tbody>
                  </table>
                      </div>
                  </div>
              </div>

          </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="x_panel">
                <div class="x_title">
                  <h2>Pyramid</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div id="echart_pyramid" style="height:370px;"></div>

                </div>
              </div>
                </div>
                
                <div class="col-md-6 col-sm-12 col-xs-12">
                
                    <div class="x_panel">
                <div class="x_title">
                  <h2>Pie Graph</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div id="echart_pie" style="height:350px;"></div>

                </div>
              </div>
                
                
                </div>
            </div>
  

@endsection

@section('Plugins')
  <!-- form wizard -->
  <script type="text/javascript" src="{{ asset('Main_Project/js/wizard/jquery.smartWizard.js') }}"></script>


    <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="{{ asset('Main_Project/js/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/responsive.bootstrap.min.js') }}"></script>
        <script src="{{ asset('Main_Project/js/datatables/dataTables.scroller.min.js') }}"></script>

        <!-- echart -->

  <script src="{{ asset('Main_Project/js/echart/echarts-all.js') }}"></script>
  <script src="{{ asset('Main_Project/js/echart/green.js') }}"></script>

@endsection
@section('Sub_Plugins')


  <script type="text/javascript">
    $(document).ready(function() {
      // Smart Wizard
      $('#wizard').smartWizard();

      function onFinishCallback() {
        $('#wizard').smartWizard('showMessage', 'Finish Clicked');
        //alert('Finish Clicked');
      }
    });

    $(document).ready(function() {
      // Smart Wizard
      $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
      });

    });
  </script>

    <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
    <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>

    <script type="text/javascript">
            var myChart = echarts.init(document.getElementById('echart_pyramid'), theme);
    myChart.setOption({
      title: {
        text: 'Echart Pyramid Graph',
        subtext: 'Subtitle'
      },
      tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c}%"
      },
      toolbox: {
        show: true,
        feature: {
          restore: {
            show: true
          },
          saveAsImage: {
            show: true
          }
        }
      },
      legend: {
        data: ['Something #1', 'Something #2', 'Something #3', 'Something #4', 'Something #5'],
        orient: 'vertical',
        x: 'left',
        y: 'bottom'
      },
      calculable: true,
      series: [{
        name: '漏斗图',
        type: 'funnel',
        width: '40%',
        data: [{
          value: 60,
          name: 'Something #1'
        }, {
          value: 40,
          name: 'Something #2'
        }, {
          value: 20,
          name: 'Something #3'
        }, {
          value: 80,
          name: 'Something #4'
        }, {
          value: 100,
          name: 'Something #5'
        }]
      }]
    });


        
        
     var myChart = echarts.init(document.getElementById('echart_pie'), theme);
    myChart.setOption({
      tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
      },
      legend: {
        //orient: 'vertical',
        //x: 'left',
        x: 'center',
        y: 'bottom',
        data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
      },
      toolbox: {
        show: true,
        feature: {
          magicType: {
            show: true,
            type: ['pie', 'funnel'],
            option: {
              funnel: {
                x: '25%',
                width: '50%',
                funnelAlign: 'left',
                max: 1548
              }
            }
          },
          restore: {
            show: true
          },
          saveAsImage: {
            show: true
          }
        }
      },
      calculable: true,
      series: [{
        name: '访问来源',
        type: 'pie',
        radius: '55%',
        center: ['50%', '48%'], //left,top
        data: [{
          value: 335,
          name: 'Direct Access'
        }, {
          value: 310,
          name: 'E-mail Marketing'
        }, {
          value: 234,
          name: 'Union Ad'
        }, {
          value: 135,
          name: 'Video Ads'
        }, {
          value: 1548,
          name: 'Search Engine'
        }]
      }]
    });


    var dataStyle = {
      normal: {
        label: {
          show: false
        },
        labelLine: {
          show: false
        }
      }
    };
    var placeHolderStyle = {
      normal: {
        color: 'rgba(0,0,0,0)',
        label: {
          show: false
        },
        labelLine: {
          show: false
        }
      },
      emphasis: {
        color: 'rgba(0,0,0,0)'
      }
    };


    var myChartx = echarts.init(document.getElementById('echart_mini_pie'), theme);
    myChartx.setOption({
      title: {
        text: 'Chart #2',
        subtext: 'From ExcelHome',
        sublink: 'http://e.weibo.com/1341556070/AhQXtjbqh',
        x: 'center',
        y: 'center',
        itemGap: 20,
        textStyle: {
          color: 'rgba(30,144,255,0.8)',
          fontFamily: '微软雅黑',
          fontSize: 35,
          fontWeight: 'bolder'
        }
      },
      tooltip: {
        show: true,
        formatter: "{a} <br/>{b} : {c} ({d}%)"
      },
      legend: {
        orient: 'vertical',
        x: 170, //document.getElementById('main').offsetWidth / 2,
        y: 45,
        itemGap: 12,
        data: ['68%Something #1', '29%Something #2', '3%Something #3']
      },
      toolbox: {
        show: true,
        feature: {
          mark: {
            show: true
          },
          dataView: {
            show: true,
            readOnly: false
          },
          restore: {
            show: true
          },
          saveAsImage: {
            show: true
          }
        }
      },
      series: [{
        name: '1',
        type: 'pie',
        clockWise: false,
        radius: [105, 130],
        itemStyle: dataStyle,
        data: [{
          value: 68,
          name: '68%Something #1'
        }, {
          value: 32,
          name: 'invisible',
          itemStyle: placeHolderStyle
        }]
      }, {
        name: '2',
        type: 'pie',
        clockWise: false,
        radius: [80, 105],
        itemStyle: dataStyle,
        data: [{
          value: 29,
          name: '29%Something #2'
        }, {
          value: 71,
          name: 'invisible',
          itemStyle: placeHolderStyle
        }]
      }, {
        name: '3',
        type: 'pie',
        clockWise: false,
        radius: [25, 80],
        itemStyle: dataStyle,
        data: [{
          value: 3,
          name: '3%Something #3'
        }, {
          value: 97,
          name: 'invisible',
          itemStyle: placeHolderStyle
        }]
      }]
    });

    </script>
@endsection
