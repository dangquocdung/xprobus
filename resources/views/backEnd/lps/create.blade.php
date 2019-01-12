@extends('backEnd.layout')

@section('headerInclude')
    <link href="{{ URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.min.css") }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@endsection

@section('content')

<div class="padding">
    <div class="box">
        <div class="box-header dker">
            <h3><i class="material-icons">&#xe02e;</i> {{ trans('backLang.Them moi lich phat song') }}</h3>
            <small>
                <a href="{{ route('adminHome') }}">{{ trans('backLang.home') }}</a> /
                <a href="{{ route('lich-phat-song') }}">{{ trans('backLang.lich-phat-song') }}</a>
            </small>
        </div>
        <div class="box-tool">
            <ul class="nav">
                <li class="nav-item inline">
                    <a class="nav-link" href="{{route('lich-phat-song')}}">
                        <i class="material-icons md-18">×</i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="box-body">
                {{Form::open(['route'=>['LpsStore'],'method'=>'POST', 'files' => true ])}}
                {!! Form::hidden('section_id',$WebmasterLps->id) !!}

                

                <div class="form-group row">
                    <label for="time"
                            class="col-sm-2 form-control-label">{!!  trans('backLang.lpsTime') !!}
                    </label>
                    <div class="col-sm-10">
                        <div>
                            <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                                    format: 'hh:mm',
                                    icons: {
                                    time: 'fa fa-clock-o',
                                    date: 'fa fa-calendar',
                                    up: 'fa fa-chevron-up',
                                    down: 'fa fa-chevron-down',
                                    previous: 'fa fa-chevron-left',
                                    next: 'fa fa-chevron-right',
                                    today: 'fa fa-screenshot',
                                    clear: 'fa fa-trash',
                                    close: 'fa fa-remove'
                                    }
                                }">
                                {!! Form::text('date',date("d-m-Y H:i A"), array('placeholder' => '','class' => 'form-control','id'=>'time')) !!}
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title"
                            class="col-sm-2 form-control-label">{!!  trans('backLang.lpsTitle') !!}
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('title','', array('placeholder' => 'Tên chương trình','class' => 'form-control','id'=>'title_vi', 'dir'=>trans('backLang.ltr'))) !!}
                    </div>
                </div>

                

                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> {!! trans('backLang.add') !!}</button>
                        <a href="{{route("lich-phat-song")}}"
                            class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> {!! trans('backLang.cancel') !!}</a>
                    </div>
                </div>

                {{Form::close()}}


        </div>

    </div>
</div>
    
@endsection

@section('footerInclude')

    <script src="{{ URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.js") }}"></script>
    <script>
        $(function () {
            $('.icp-auto').iconpicker({placement: '{{ (trans('backLang.direction')=="rtl")?"topLeft":"topRight" }}'});
        });
    </script>
@endsection