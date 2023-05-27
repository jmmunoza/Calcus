@extends('layouts.app')
@section('content')
    <div class="w-full p-4 flex  max-w-7xl mx-auto flex-col items-center justify-center space-y-4">
        <div class="w-full flex justify-between">
            <h1 class="text-2xl font-semibold text-gray-900">Mis supletorios</h1>
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 text-center mr-3 md:mr-0">Crear supletorio</button>
        </div>

        <div class="relative w-full overflow-x-auto shadow-md space-y-4 sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Parcial
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Intento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Taller
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Monitoría
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            1123
                        </th>
                        <td class="px-6 py-4">
                            3
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            Aprobado
                        </td>
                        <td class="px-6 py-4">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                            </svg>
                        </td>
                        <td class="px-6 py-4">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </td>
                        <td class="px-6 py-4">
                            25-11-2020
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline">Agendar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
