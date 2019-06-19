@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                PEDIDOS
            </h1>
        </div>
        
        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Ver Detalle</th>
                            <th>Eliminar</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Subtotal</th>
                            <th>Envio</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <a 
                                        href="#" 
                                        class="btn btn-primary btn-detalle-pedido"
                                        data-id="{{ $order->id }}"
                                        data-path="{{ route('order.getItems')}}"
                                        data-toggle="modal" 
                                        data-target="#myModal"
                                        data-token="{{ csrf_token() }}"
                                    >
                                        link externo    
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('order.destroy' , $order->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                                Eliminar
                                            </button>
                                    </form>
                                </td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->user->name . " " . $order->user->lastname  }}</td>
                                <!--<td>{ $order->user->name . " " . $order->user->lastname }}</td>-->
                               
                                <td>S/.{{ number_format($order->subtotal,2) }}</td>
                                <td>S/.{{ number_format($order->shipping,2) }}</td>
                                <td>S/.{{ number_format($order->subtotal + $order->shipping,2) }}</td>
                            </tr>

                            <!--foreach ($order->order_items as $order_item)
                            <div class="card mt-3">
                                <div class="card-body">
                                    <p class="card-text">{ $order_item->id}}</p>
                                </div>
                            </div>
                            
                           endforeach-->
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            
            
        </div>
    </div>
    
    @include('admin.partials.modal-detalle-pedido')
    
@endsection
