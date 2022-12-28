@extends('adminPanel.layouts.master')
@section('title','Users - Admin Panel')
@section('style')
    <style>
        .clearfix ul{
            margin-bottom: 0 !important;
        }
    </style>
@endsection
@section('pageHeader')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Users Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section('content')
    <div class="card p-0">
        <div class="card-header">
            <h3 class="card-title">Users</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Package</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Users as $key => $user)
                    <tr>
                        <th scope="row">{{ $key+ $Users->firstItem() }}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->email_verified_at ? 'Verified' : 'Pending'}}</td>
                        <td>{{implode(',',array_map('ucfirst', $user->getRoleNames()->toArray()))}}</td>
                        <td>{{$user->UserPlan ? $user->UserPlan->title : '--'}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
            {{ $Users->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
@endsection
