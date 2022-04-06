@extends('layouts.admin-layout')

@section('content')
<div class="page-title">
                        
                    </div>
                    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error-user'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                            <div class="card-header">Users</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="table-responsive">
                                        <form action="{{ route('admin.users.multiaction') }}" method='post' name='subsControlForm'>
                                            @csrf
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>X</th>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Created</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            @if(!empty($users) && $users->count())
                                               
                                                
                                                @foreach ($users as $k=>$user)
                                                
                                                
                                                <tr>
                                                    <th scope="row"><?php echo ($k+1) ?></th>
                                                    <td><input type='checkbox' name='uids[]' value="{{$user->id}}" /></td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ date('m/d/Y h:ia',strtotime($user->created_at)) }}</td>
                                                    <td>
                                                       <a href="{{ route('admin.orders.byuser',$user->id) }}">
                                                        View Orders({{ $user->orders->count()}})
</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tr><td colspan="5">
                                                <input type='button' value='Select All' class="btn btn-primary"   onclick="selectAll()" />
      <input type='button' value='Select None' class="btn btn-primary"    onclick="selectNone()" />
      <input type='submit' name="Submit_delete" value='Delete Selected' class="btn btn-primary" onclick="return confirmDelete()" />

                                                </td></tr>
                                                @else
            <tr>
                <td colspan="4">There are no users.</td>
            </tr>
        @endif
        
                                            </tbody>
                                        </table>
</form>
                                    </div>
                                    {!! $users->appends(Request::all())->links() !!}
                                </div>
                            </div>
                        </div>
</div>
                    @endsection