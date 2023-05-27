@extends('layouts.app')
@section('content')
    <div class="w-full p-4 flex items-center justify-center">
        <div class="w-full max-w-4xl bg-blue-900 p-4 rounded-xl flex flex-col space-y-4">
            <h1 class="text-6xl text-white font-bold">202010100010</h1>
            <h2 class="text-2xl text-white font-bold">Juan David Perez Uribe</h2>
            <h3 class="text-xl text-white font-bold">sasssds@eafit.edu.co</h3>
            <h3 class="text-xl text-white font-bold">Codigo de grupo de calculo 2023</h3>

            <form class="flex flex-col w-full space-y-4">
                <div class="flex flex-row w-full space-x-4">
                    <div class="flex items-center w-full pl-4 border border-gray-200 rounded">
                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox"
                            class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2">
                        <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-lg font-medium text-white">¿Completó
                            el supletorio?</label>
                    </div>
                    <div class="flex w-full items-center pl-4 border border-gray-200 rounded">
                        <input checked id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox"
                            class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2">
                        <label for="bordered-checkbox-2" class="w-full py-4 ml-2 text-lg font-medium text-white">¿Asistió a
                            monitoría?</label>
                    </div>
                </div>

                <button type="sumbit"
                    class="text-blue-900 bg-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 text-center mr-3 md:mr-0">Guardar cambios</button>
            </form>
        </div>
    </div>
@endsection
