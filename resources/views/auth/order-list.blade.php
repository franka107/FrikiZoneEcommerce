

@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                MIS ORDENES
            </h1>
        </div>
        
        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Ver Detalle</th>
                            <th>Confirmar Entrega</th>
                            <th>Fecha</th>
                            <th>Subtotal</th>
                            <th>Envio</th>
                            <th>Total</th>
                            <th>Estado</th>
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
                                    <form action="{{route('order.confirm' , $order->id)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button onClick="return confirm('¿Estas seguro que deseas confirmar? Luego no podras modicar el estado')" class="btn btn-warning">
                                                Confirmar
                                            </button>
                                    </form>
                                </td>
                                <td>{{ $order->created_at }}</td>
                                <!--<td>{ $order->user->name . " " . $order->user->lastname }}</td>-->
                               
                                <td>S/.{{ number_format($order->subtotal,2) }}</td>
                                <td>S/.{{ number_format($order->shipping,2) }}</td>
                                <td>S/.{{ number_format($order->subtotal + $order->shipping,2) }}</td>
                                <th>{{ $order->status }}</th>
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
