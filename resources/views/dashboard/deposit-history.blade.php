@extends('layouts.dashboard')
@section('content')




        <div class="row">
            <div class="col-md-12">


                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="samle_1">

                            <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Deposit Date</th>
                                <th>Transaction ID</th>
                                <th>Depositor User Name</th>
                                <th>Deposit Method</th>
                                <th>Send Amount</th>
                                <th>Deposit Charge</th>
                                <th>Deposit Balance</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $i=0;@endphp
                            @foreach($deposit as $p)
                                @php $i++;@endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ date('d-F-Y h:i A',strtotime($p->created_at))  }}</td>
                                    <td>{{ $p->transaction_id }}</td>
                                    <td>{{ $p->member->username }}</td>
                                    <td>
                                        @if($p->payment_type == 1)
                                            <span class="label label-primary  bold uppercase"><i class="fa fa-paypal"></i> Paypal</span>
                                        @elseif($p->payment_type == 2)
                                            <span class="label label-primary  bold uppercase"><i class="fa fa-money"></i> Perfect Money</span>
                                        @elseif($p->payment_type == 3)
                                            <span class="label label-primary  bold uppercase"><i class="fa fa-btc"></i> BTC - BlockChain</span>
                                        @elseif($p->payment_type == 4)
                                            <span class="label label-primary  bold uppercase"><i class="fa fa-credit-card"></i> Credit Card</span>
                                        @else
                                            <span class="label label-primary  bold uppercase"><i class="fa fa-bank"></i> {{ $p->bank->name }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($p->payment_type == 1 or $p->payment_type == 2 or $p->payment_type == 3 or $p->payment_type == 4)
                                            {{ round(($p->net_amount / $p->rate),$basic->deci) }} - USD
                                        @else
                                            {{ $p->net_amount }} - {{ $basic->currency }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($p->payment_type == 1 or $p->payment_type == 2 or $p->payment_type == 3 or $p->payment_type == 4)
                                            {{ round(($p->charge / $p->rate),$basic->deci) }} - USD
                                        @else
                                            {{ $p->charge }} - {{ $basic->currency }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($p->payment_type == 1 or $p->payment_type == 2 or $p->payment_type == 3 or $p->payment_type == 4)
                                            {{ $p->amount }} - {{ $basic->currency }}
                                        @else
                                            {{ $p->amount }} - {{ $basic->currency }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($p->status == 1)
                                            <span class="label label-primary  bold uppercase"><i class="fa fa-check"></i> Completed</span>
                                        @elseif($p->status == 2)
                                            <span class="label label-danger  bold uppercase"><i class="fa fa-times"></i> Cancel</span>
                                        @else
                                            <span class="label label-warning  bold uppercase"><i class="fa fa-spinner"></i> Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                    @if($p->status == 0)
                                        <div class="">
                                            <button type="button" class="btn btn-success bold uppercase btn-block delete_button"
                                        data-toggle="modal" data-target="#DelModal{{$p->id}}"
                                                    data-id="{{ $p->id }}">
                                                <i class='fa fa-check'></i> Approve
                                            </button>
                                        </div>
                                    @else
                                        <button class="btn btn-danger sr-only">Deactivate</button>
                                    @endif
                                    </td>

                                </tr>

                            <div class="modal fade" id="DelModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                            
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel"> <i class='fa fa-exclamation-triangle'></i><strong>Confirmation..!</strong> </h4>
                                            </div>
                            
                                            <div class="modal-body">
                                                <strong>Are You Sure You Want to Approve This Deposit..?</strong>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post" action="{{ route('new-deposit-history', $p->id ) }}" class="form-inline">
                                                    {!! csrf_field() !!}
                                                    <input type="hidden" name="id" class="abir_id" value="0">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Yes I'm Sure..!</button>
                                                </form>
                                            </div>
                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="text-center">
                            {!! $deposit->links() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- ROW-->


        



@endsection
