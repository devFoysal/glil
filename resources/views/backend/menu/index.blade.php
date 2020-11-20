@extends('layouts.backend.master')

@section('title', 'Page Banner')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Menu</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Menu List</div>
                <button class="btn btn-success btn-icon m-2" data-toggle="modal" data-target="#addmenu"><i
                        class="fas fa-plus-square"></i>&nbsp; Add Menu</button>
            </div>
            @if(session('success'))
            <div class="alert alert-card alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ session('success') }}</p>
            </div>
            @endif
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-card alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $error }}</strong>
            </div>
            @endforeach
            @endif
            <!-- Data table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="basicDataTable" style="width: 100%;">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Menu Name (en)</th>
                            <th>Menu Name (bn)</th>
                            <th>Menu Orders</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($menus as $index => $menu)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $menu->name_en }}</td>
                            <td>{{ $menu->name_bn }}</td>
                            <td>{{ $menu->orders }}</td>
                            <td>
                                @if($menu->status)
                                <span class="badge badge-pill badge-success">Active</span>
                                @else
                                <span class="badge badge-pill badge-danger">Disable</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Action</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal"
                                            data-target="#editmenu{{ $menu->id }}">Edit</a>
                                        <a class="dropdown-item"
                                            href="{{ route('menu.destroy', ['id' => $menu->id]) }}">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Edit Menu Modal -->
                        <div class="modal fade" id="editmenu{{ $menu->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('menu.edit') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name_en">Menu Name (en)</label>
                                                <input id="name_en" class="form-control bg-light" type="text"
                                                    name="name_en" value="{{ $menu->name_en }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="name_bn">Menu Name (bn)</label>
                                                <input id="name_bn" class="form-control bg-light" type="text"
                                                    name="name_bn" value="{{ $menu->name_bn }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="orders">Menu Position</label>
                                                <input value="{{$menu->orders}}" id="orders"
                                                    class="form-control bg-light" type="text" name="orders"
                                                    placeholder="Enter Menu Name in Bangla">
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option selected disabled>-- Choose Status --</option>
                                                    <option value="1" @if($menu->status == 1) {{ 'selected' }}
                                                        @endif>Active</option>
                                                    <option value="0" @if($menu->status == 0) {{ 'selected' }}
                                                        @endif>Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{ $menu->id }}" name="id">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add Menu Modal -->
<div class="modal fade" id="addmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('menu.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name_en">Menu Name (en)</label>
                        <input id="name_en" class="form-control bg-light" type="text" name="name_en"
                            placeholder="Enter Menu Name in English">
                    </div>
                    <div class="form-group">
                        <label for="name_bn">Menu Name (bn)</label>
                        <input id="name_bn" class="form-control bg-light" type="text" name="name_bn"
                            placeholder="Enter Menu Name in Bangla">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option selected disabled>-- Choose Status --</option>
                            <option value="1" selected>Active</option>
                            <option value="0">Disable</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection