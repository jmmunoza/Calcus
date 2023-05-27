@extends('layouts.app')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <div class="flex h-full">
        <div class='w-full'>
            {!! $data['averagechart']->container() !!}
            {!! $data['averagechart']->script() !!}
        </div>
        <div class='w-full'>
            {!! $data['averagechart2']->container() !!}
            {!! $data['averagechart2']->script() !!}
        </div>
        <div class='w-full'>
            {!! $data['averagechart3']->container() !!}
            {!! $data['averagechart3']->script() !!}
        </div>
    </div>
@endsection
