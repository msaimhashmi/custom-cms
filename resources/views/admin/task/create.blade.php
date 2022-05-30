@extends('admin.layout.master')
{{-- @section('page-title')
@endsection
@section('meta-description')
@endsection --}}
@section('main-content')
{{-- <example-component></example-component> --}}
<div class="padding">

  {{-- <div class="row"> --}}
    {{-- <task-create></task-create> --}}
    {{-- <div class="col-lg-12"> --}}
      {{-- <div class="box">
        <div class="box-header">
          <h2>Create Task</h2>
          <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <form action="{{route('task.store')}}" method="post" role="form">
          	@csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Detail</label>
              <textarea name="detail" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Priority</label>
              <select name="priority" class="form-control">
              	<option value="high">High</option>
              	<option value="normal">Normal</option>
              	<option value="low">Low</option>
              </select>
            </div>
            <div class="form-group">
	            <div class="checkbox">
	              <label>
	                <input type="checkbox" name="status"> Active
	              </label>
	            </div>
	        </div>
            <a href="{{route('task.index')}}" class="btn red m-b">Cancel</a>
            <button type="submit" class="btn blue m-b float-right">Submit</button>
          </form>
        </div>
      </div> --}}
    {{-- </div> --}}
  {{-- </div> --}}
</div>

@endsection