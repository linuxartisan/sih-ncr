@extends('layouts.app')

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
    <li class="breadcrumb-item">Setup</li>
    <li class="breadcrumb-item">Components</li>
@endsection

@section('content')
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <div class="row">
          <div class="col-xs-8">
            <h2>Component <small>List</small></h2>
          </div>
          <div class="col-xs-4">
            <div class="pull-right">
              <a href="{{ action('ComponentController@create') }}" type="button" class="btn btn-primary">
                <i class="fa fa-plus"></i> Create New
              </a>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
        <table id="dt_component_list" class="table table-bordered" style="width: 100%;">
          <thead>
            <tr>
              
              <th>Name</th> <!-- 0 -->
              <th>Image</th> <!-- 1 -->
            <th>Lifetime (in years)</th>
                
              <th>Created At</th> <!-- 2 -->
              <th>Updated At</th> <!-- 3 -->
              <th></th> <!-- 4 -->
            </tr>
          </thead>

          <tbody>
            @foreach($components as $component)
              <tr>
                
                <td>{{ $component->name }}</td>
                <td> <a href="{{ action('ComponentController@showImage', $component->id) }}">
                    Image
                  </a></td>
                <td>{{ $component->lifetime }}</td>

                <td>{{ $component->created_at }}</td>
                <td>{{ $component->updated_at }}</td>
                <td>
                  <a href="{{ action('ComponentController@edit', $component->id) }}"
                     data-toggle="tooltip" data-placement="right" title="Edit">
                    <i class="fa fa-lg fa-edit"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
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
      var table = $('#dt_component_list').DataTable({
        "order": [[0, 'asc']],
        "responsive": true,
        "columnDefs": [
          {
            "targets": [3, 4],
            "orderable": false,
            "searchable": false
          },
          { "className": 'none', "targets": [3, 4] }, // don't display as column, show in child row
          { "responsivePriority": 1, "targets": [0, 1, -1] }, // -1 is last column
        ],
      });

      $('body').tooltip({selector: '[data-toggle="tooltip"]'});
    });
  </script>

@endsection
