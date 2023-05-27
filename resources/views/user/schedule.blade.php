@extends('layouts.app')
@section('content')
    <div class="w-full p-4 flex items-center justify-center">
        <div class="w-full max-w-4xl bg-blue-900 p-4 rounded-xl flex flex-col space-y-4">
            <h1 class="text-6xl text-white font-bold">Supletorio ({{$data['exam']->id}})</h1>
            <h2 class="text-2xl text-white font-bold">Intento {{$data['exam']->retry}}</h2>
            <h3 class="text-xl text-white font-bold">Parcial {{$data['exam']->parcial}}</h3>

            <form class="flex flex-col w-full space-y-4">
                <div class="flex flex-row w-full space-x-4">
                    <div class="flex items-center w-full p-4 border border-gray-200 rounded">
                        <label for="bordered-checkbox-2" class="w-full py-4 ml-2 text-lg font-medium text-white">Selecciona
                            una fecha y hora</label>

                        <div class="col-md-6  ">
                            <input type="datetime-local" class="form-control" name="birth_day">
                        </div>
                    </div>

                </div>
                {{session('success')}}
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <form method="POST" action="{{ route('user.success') }}">
                    <button type="submit"
                    class="text-blue-900 bg-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 text-center mr-3 md:mr-0">Agendar supletorio</button>
                </form>
            </form>
        </div>
    </div>
@endsection
