@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<<<<<<< HEAD
        <div class="col-md-8 col-md-offset-2">
=======
        <div class="col-md-10 col-md-offset-1">
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
<<<<<<< HEAD
                    <div class="alert alert-success">
                        <p>
                            Selamat Datang di ONPHPID Tutorial
                            @php
                                $check = Auth::user()->roles();
                            @endphp
                            @if (!$check)
                                <button type="button" id="upgrade" class="btn btn-xs btn-info" data-id="{{ Auth::id() }}" data-member="member">upgrade</button>
                            @endif
                        </p>
                    </div>
=======
                    You are logged in!
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<<<<<<< HEAD
@section('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function(){
        $('#upgrade').click(function(){
            var id = $(this).attr('data-id');
            var member = $(this).attr('data-member');
            var route = '{{ URL('home/upgrade') }}';
            var data = {
                id: id, level: member
            }
            var request = $.post(route, data);
                $(this).html('processing...');
                request.done(function(response){
                    $(this).html('upgrade');
                    if(response.success == 'true')
                        window.location.href = '{{ URL('member') }}';
                });
                request.always(function(response){
                    console.log('complete');
                    $(this).html('upgrade');
                });
        });
    });
</script>
@endsection
=======
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
