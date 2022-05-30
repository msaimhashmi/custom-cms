@extends('admin.layout.master')
@section('page-title')
@endsection
@section('meta-description')
@endsection
@section('main-content')
<div class="padding">
      {{-- <router-link to="/create">Create</router-link> --}}

  {{-- <task-index></task-index> --}}
  {{-- <div class="box">
    <div class="box-header">
      <h3>Table with elements</h3>
    </div>
    <div class="row p-a">
      <div class="col-sm-5">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm white">Apply</button>
        <router-link to="/create">Add New</router-link>            
         <a href="" class="btn btn-sm white">Add New</a>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn b-a white" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="ui-check m-0">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Title</th>
            <th>Detail</th>
            <th>Priority</th>
            <th>Status</th>
            <th style="width:50px;">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tasks as $task)
          <tr>
            <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
            <td>{{$task->title}}</td>
            <td>{{$task->detail}}</td>
            <td>{{$task->priority}}</td>
            <td>{{$task->status}}</td>
            <td>
              <a href="#" ><i class="fa fa-edit text-success inline"></i></a>
              <a href="#" ><i class="fa fa-trash text-danger inline"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="dker p-a">
      <div class="row">
        <div class="col-sm-4 hidden-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select>
          <button class="btn btn-sm white">Apply</button>                  
        </div>
        <div class="col-sm-4 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-4 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-0">
            <li><a href><i class="fa fa-chevron-left"></i></a></li>
            <li class="active"><a href>1</a></li>
            <li><a href>2</a></li>
            <li><a href>3</a></li>
            <li><a href>4</a></li>
            <li><a href>5</a></li>
            <li><a href><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div> --}}
</div>

@endsection