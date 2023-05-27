@extends('layouts.app')
@section('content')
    <div class="w-full p-4 flex  max-w-7xl mx-auto flex-col items-center justify-center space-y-4">
        <div class="w-full flex justify-between">
            <h1 class="text-2xl font-semibold text-gray-900">Estudiantes</h1>
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 text-center mr-3 md:mr-0">Crear
                estudiante</button>
        </div>

        <div class="relative w-full overflow-x-auto shadow-md space-y-4 sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Epik ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Correo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Código de grupo
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['students'] as $student)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$student->epik_id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$student->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$student->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$student->group_code}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
