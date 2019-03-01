@extends('layouts._staff_')

@section('page_styles')
  <!-- Datatables -->
  <link href="{{ URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item">Basic</li>
    <li class="breadcrumb-item">Staff</li>
@endsection

@section('content')
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <div class="row">
          <div class="col-xs-8">
            <h2>Staff <small>List</small></h2>
          </div>
          <div class="col-xs-4">
            <div class="pull-right">
              <a href="{{ action('StaffController@create') }}" type="button" class="btn btn-primary">
                <i class="fa fa-plus"></i> Create New
              </a>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
        <table id="dt_staff_list" class="table table-bordered" style="width: 100%;">
          <thead>
            <tr>
              <th>Identifier</th> <!-- 0 -->
              <th>Name</th> <!-- 1 -->
              <th>Email</th> <!-- 2 -->
              <th>Mobile</th> <!-- 3 -->
              <th>Created At</th> <!-- 4 -->
              <th>Updated At</th> <!-- 5 -->
              <th></th> <!-- 6 -->
            </tr>
          </thead>
        </table>

      </div>
    </div>
  </div>
</div>

@endsection


@section('plugins')
  <!-- Datatables -->
  <script src="{{ URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
@endsection

@section('page_script')

  <script type="text/javascript">
    $(document).ready(function() {
      var table = $('#dt_staff_list').DataTable({
        "order": [[1, 'asc'], [0, 'asc']],
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": {
          "url": "{{ action('StaffController@getDTStaffsAjax') }}",
          "type": "POST",
          "data":{ _token: "{{csrf_token()}}"}
        },
        "columns": [
          { data: 'identifier', name: 'identifier' },
          { data: 'name', name: 'name' },
          { data: 'email', name: 'email' },
          { data: 'mobile', name: 'mobile' },
          { data: 'created_at', name: 'created_at', orderable: false, searchable: false },
          { data: 'updated_at', name: 'updated_at', orderable: false, searchable: false },
          { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
        "columnDefs": [
          { "className": 'none', "targets": [4, 5] }, // don't display as column, show in child row
          { "responsivePriority": 1, "targets": [0, 1, -1] }, // -1 is last column
          { "responsivePriority": 2, "targets": [2, 3] },
        ],
        "pageLength": 25,
        "searchDelay": {{ env('DT_SEARCH_DELAY', 750) }},
      });

      $('body').tooltip({selector: '[data-toggle="tooltip"]'});
    });
  </script>

@endsection
