@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.users.index') }}">User Manager</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$user->name}} Orders</li>
@endsection
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
                            <div class="card-header">
                            <div class='float-left'>
Orders
</div>
                           
<div class='float-none'></div>
                            </div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="table-responsive">
                                        <form action="{{ route('admin.orders.multiaction') }}" method='post' name='subsControlForm'>
                                            @csrf
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>X</th>
                                                    <th></th>
                                                    <th>Order ID</th>
                                                    <th>Customer</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Total</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            @if(!empty($data) && $data->count())
                                               
                                                
                                                @foreach ($data as $k=>$order)
                                                
                                                
                                                <tr>
                                                    <th scope="row"><?php echo ($k+1) ?></th>
                                                    <td><input type='checkbox' name='uids[]' value="{{$order->id}}" /></td>
                                                    <td>{{ $order->orderId }}</td>
                                                    <td>{{ $order->first_name.' '.$order->last_name }}</td>
                                                    <td>{{ $order->email }}</td>
                                                    <td>{{ $order->address }}</td>
                                                    <td>${{ $order->total }}</td>
                                                    <td>{{ date('m/d/Y h:ia',strtotime($order->created_at)) }}</td>
                                                    <td>

                                                    <a class="btn btn-primary" href="{{ route('admin.orders.show',$order->id) }}">View</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tr><td colspan="6">
                                                <input type='button' value='Select All' class="btn btn-primary"   onclick="selectAll()" />
      <input type='button' value='Select None' class="btn btn-primary"    onclick="selectNone()" />
      <input type='submit' name="Submit_delete" value='Delete Selected' class="btn btn-primary" onclick="return confirmDelete()" />

                                                </td>
                                            
                                            </tr>
                                                @else
            <tr>
                <td colspan="6">There are no orders.</td>
            </tr>
        @endif
        
                                            </tbody>
                                        </table>
</form>
                                    </div>
                                    {!! $data->appends(Request::all())->links() !!}
                                </div>
                            </div>
                        </div>
</div>
                    @endsection