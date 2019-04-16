@extends('layouts.app')
@section('content')

<H1>{{$title}}</H1>
<P>THIS WORK WAS DONE BY KEIR MCALEESE B00286108</P>
@if(count($services) >0 )
<ul class="list-group">
@foreach ($services as $service)
<li class="list-group-item">{{$service}}</li>
@endforeach
</ul>
@endif
@endsection
