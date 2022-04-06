@extends('layouts.site-front-wosidebar')

@section('content')
<div class="wrapper">


@include('front.dash-menu')


<div id="page-content-wrapper">
  @section('myaccountbar')
  <li class="breadcrumb-item active" aria-current="page">View Orders</li>
  @endsection
@include('front.breadcrumb-dash')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<h4 class="mt-3">View Your orders</h4>	

<div class="col-12 my-3"><div class="woocommerce-MyAccount-content"><div class="woocommerce-notices-wrapper"></div>



<div class="row">
		                <div class="col-12 col-sm-12">
                    <div class="table-responsive">
                                        <form action="" method='post' name='subsControlForm'>
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

                                                    <a class="btn btn-primary" href="{{ route('orders.show',$order->id) }}">View</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                               
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
</div>
</div>
@endsection