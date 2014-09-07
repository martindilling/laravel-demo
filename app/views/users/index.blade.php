@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info box-app-buttons">
                <div class="box-body">
                    <a class="btn btn-app" href="{{ route('users.create') }}">
                        <i class="fa fa-plus"></i> New
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User list</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{{ $user->present()->getName() }}}</td>
                                    <td>{{{ $user->email }}}</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td>{{{ $user->present()->getCreatedAt() }}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs btn-flat">{{ $user->roles->count() }} roles</button>
                                            <button type="button" class="btn btn-default btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                @forelse($user->roles as $role)
                                                    <li><a href="#">{{ $role->name }}</a></li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        {{ link_to_route('users.edit', "Edit", ['id' => $user->id], ['class' => 'btn btn-xs btn-flat btn-info']) }}
                                        {{ Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'class' => 'form-btn']) }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-xs btn-flat btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @empty
                                <p>There is no users in the system.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

@endsection