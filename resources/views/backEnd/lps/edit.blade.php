<?php
    $title_var = "title_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
?>

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
                {{Form::open(['route'=>['LpsUpdate',$Lps->id],'method'=>'POST', 'files' => true])}}

                {!! Form::hidden('section_id',$Lps->section_id) !!}

                <div class="form-group row">
                    <label for="time"
                            class="col-sm-2 form-control-label">{!!  trans('backLang.lpsTime') !!}
                    </label>
                    <div class="col-sm-10">
                        <div>
                            <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                                    format: 'DD-MM-YYYY hh:mm A',
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
                                {!! Form::text('date',Carbon\Carbon::parse($Lps->date)->format('d-m-Y H:i A'), array('placeholder' => '','class' => 'form-control','id'=>'date')) !!}
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                        <label for="section_id"
                            class="col-sm-2 form-control-label">{!!  trans('backLang.typeBanner') !!} </label>
                    <div class="col-sm-10">
                        
                        <select name="type_id" id="type_id" class="form-control select2-multiple"
                                ui-jp="select2"
                                ui-options="{theme: 'bootstrap'}" required>

                                @foreach ($TypeLps as $TypeLp)
                                    <option value="{{ $TypeLp->id }}" {{ ($TypeLp->id == $Lps->type_id) ? "selected='selected'":"" }}>
                                        {{ $TypeLp->title }}
                                    </option>
                                @endforeach
                                
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title"
                            class="col-sm-2 form-control-label">{!!  trans('backLang.lpsTitle') !!}
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('title',$Lps->title, array('placeholder' => 'Tên chương trình','class' => 'form-control','id'=>'title_vi', 'dir'=>trans('backLang.ltr'))) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="link"
                            class="col-sm-2 form-control-label">{!!  trans('backLang.lpsLink') !!}
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('link_url',$Lps->link_url, array('placeholder' => 'Đường dẫn','class' => 'form-control','id'=>'link_url', 'dir'=>trans('backLang.ltr'))) !!}
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="link_status"
                           class="col-sm-2 form-control-label">{!!  trans('backLang.status') !!}</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                {!! Form::radio('status','1',($Lps->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')) !!}
                                <i class="dark-white"></i>
                                {{ trans('backLang.active') }}
                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                {!! Form::radio('status','0',($Lps->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')) !!}
                                <i class="dark-white"></i>
                                {{ trans('backLang.notActive') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> {!! trans('backLang.update') !!}</button>
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
