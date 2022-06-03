<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tous les ordres
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id ordre</th>
                                    <th>Total</th>
                                    <th>Remise</th>
                                    <th>Impot</th>
                                    <th>Totale</th>
                                    <th>Nom</th>
                                    <th>prenom</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Statu</th>
                                    <th>Date d'ordre</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->subtotal}} MRU</td>
                                        <td>{{$order->discount}} MRU</td>
                                        <td>{{$order->tax}} MRU</td>
                                        <td>{{$order->total}} MRU</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->lastname}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td><a href="{{ route('user.orderdetails',['order_id'=>$order->id]) }}" class="btn btn-info btn-sm">Details</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
