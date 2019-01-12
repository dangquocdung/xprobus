@extends('httv.layout')

@section('meta')

<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $Topic->title_vi }}" />
<meta property="og:description" content="{{ $Topic->title_vi }}" />
<meta property="og:image" content="{{ URL::asset('/uploads/topics/'.$Topic->photo_file) }}" />

@stop

@section('content')

<div class="container nen-trang">
    @include('httv.topic.topic')

</div>
@stop