@extends('layouts.user-frontend.user-dashboard')
@section('style')
    <style>

        ::-moz-focus-inner {
            padding: 0;
            border: 0;
        }


        button {
            position: relative;
            /*  background-color: #aaa;
              border-radius: 0 3px 3px 0;
              cursor: pointer;*/
        }
        .panel{
            border-radius: 0px;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
        }

        .copied::after {
            position: absolute;
            top: 12%;
            right: 110%;
            display: block;
            content: "COPIED";
            font-size: 1.40em;
            padding: 2px 10px;
            color: #fff;
            background-color: #22a;
            border-radius: 3px;
            opacity: 0;
            will-change: opacity, transform;
            animation: showcopied 1.5s ease;
        }

        @keyframes showcopied {
            0% {
                opacity: 0;
                transform: translateX(100%);
            }
            70% {
                opacity: 1;
                transform: translateX(0);
            }
            100% {
                opacity: 0;
            }
        }

    </style>
@endsection
@section('content')

@include('layouts.breadcam')

<div class="content_padding">
        <div class="container user-dashboard-body">
             <br>

<div class="clearfix"></div>
    <br>
<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text"> {{ $basic->symbol }} <span data-counter="counterup" data-value="{{ round($balance->balance, $basic->deci) }}">{{ round($balance->balance, $basic->deci) }}</span></div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Current Balance</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-recycle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text">
                                          {{ $basic->symbol }}  <span data-counter="counterup" data-value="{{ $repeat }}">{{ $repeat }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Repeat</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cloud-download fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text">  {{ $basic->symbol }}   <span data-counter="counterup" data-value="{{ $deposit }}">{{ $deposit }}</span></div>
                                   
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Deposits</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cloud-upload fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text">
                                          {{ $basic->symbol }} <span data-counter="counterup" data-value="{{ $withdraw }}">{{ $withdraw }}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Withdraws</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

    <br><br>

    <div class="row">
        <div class="col-md-12">
            <h3 class="page_title">{!! $reference_title  !!} </h3>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">


            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">

                        <thead>
                        <tr>
                            <th>ID#</th>
                            <th>Register Date</th>
                            <th>User Name</th>
                            <th>Username</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php $i=0;@endphp
                        @foreach($reference_user as $p)
                            @php $i++;@endphp
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ date('d-F-Y h:i A',strtotime($p->created_at))  }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->username }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->phone }}</td>
                                <td>
                                    @if($p->status == 1)
                                        <span class="label bold label-danger bold uppercase"><i class="fa fa-user-times"></i> Blocked</span>
                                    @else
                                        <span class="label bold label-success bold uppercase"><i class="fa fa-check"></i> Active</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div><!-- ROW-->
    <br>
    <br>

    <div class="row">
        <div class="col-md-12">
           
                <label><strong>YOUR REFERRAL LINK:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Number OF YOUR REFERRALS USER : {{ $refer }} </strong></label>
                <div class="input-group mb15">
                    <input type="text" class="form-control input-lg" id="ref" value="{{ route('auth.reference-register',Auth::user()->username) }}"/>
                    <span class="input-group-btn">
                        <button data-copytarget="#ref" class="btn btn-success btn-lg">COPY TO CLIPBOARD</button>
                    </span>
                </div>
         
        </div>
    </div>
    <br>
           
        </div>
</div>
@endsection
@section('script')
    <script>
        $('.has').tooltip({
            trigger: 'click',
            placement: 'bottom'
        });

        function setTooltip(btn, message) {
            $(btn).tooltip('hide')
                    .attr('data-original-title', message)
                    .tooltip('show');
        }

        function hideTooltip(btn) {
            setTimeout(function() {
                $(btn).tooltip('hide');
            }, 1000);
        }

        // Clipboard


        $(document).ready(function () {

            $(document).on("click", '.delete_button', function (e) {
                var id = $(this).data('id');
                $(".abir_id").val(id);

            });

        });
        $('#btnYes').click(function() {
            $('#formSubmit').submit();
        });
    </script>
    <script src="{{ asset('assets/admin/js/clipboard.min.js') }}"></script>
    <script>
        /*new Clipboard('.has');*/

    </script>
    <script>
        (function() {

            'use strict';

            // click events
            document.body.addEventListener('click', copy, true);

            // event handler
            function copy(e) {

                // find target element
                var
                        t = e.target,
                        c = t.dataset.copytarget,
                        inp = (c ? document.querySelector(c) : null);

                // is element selectable?
                if (inp && inp.select) {

                    // select text
                    inp.select();

                    try {
                        // copy text
                        document.execCommand('copy');
                        inp.blur();

                        // copied animation
                        t.classList.add('copied');
                        setTimeout(function() { t.classList.remove('copied'); }, 1500);
                    }
                    catch (err) {
                        alert('please press Ctrl/Cmd+C to copy');
                    }

                }

            }

        })();

    </script>
    <script src="{{ asset('assets/admin/js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/jquery.counterup.min.js') }}" type="text/javascript"></script>
@endsection