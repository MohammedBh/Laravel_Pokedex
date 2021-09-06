@extends('template.index')
@section('content')
    <div class="mt-5">
        @include('partials.flash')
    </div>
    <section>
        <section class="mt-20 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="mb-10 text-lg font-semibold text-gray-700 dark:text-white">Add a new type of Pokemon</h2>
            <form action="/type" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="username">Type</label>
                        <input type="text" name="nom"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                </div>

                <div class=" flex
                            justify-end mt-6">
                    <button type="submit"
                        class="mt-10 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Create</button>
                </div>
            </form>
        </section>
    </section>
    <section>
        <div class="flex items-center justify-center mt-24">
            <div class="col-span-12">
                <div class="overflow-auto lg:overflow-visible ">
                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                        <thead class="bg-gray-800 text-gray-500">
                            <tr>
                                <th class="p-3">ID</th>
                                <th class="p-3 text-left">Type</th>
                                <th class="p-3 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                                <tr class="bg-gray-800">
                                    <td class="p-3">
                                        <div class="flex align-items-center">
                                            <div class="ml-3">
                                                <div class="">{{ $type->id }}</div>
                                    </div>
                                </td>
                                <td class="
                                                    p-3">{{ $type->nom }}
                                    </td>
                                    <td class="p-3 ">
                                        <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                            <i class="material-icons-outlined text-base">visibility</i>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                            <i class="material-icons-outlined text-base">edit</i>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                            <i class="material-icons-round text-base">delete_outline</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
            .table {
                border-spacing: 0 15px;
            }

            i {
                font-size: 1rem !important;
            }

            .table tr {
                border-radius: 20px;
            }

            tr td:nth-child(n+5),
            tr th:nth-child(n+5) {
                border-radius: 0 .625rem .625rem 0;
            }

            tr td:nth-child(1),
            tr th:nth-child(1) {
                border-radius: .625rem 0 0 .625rem;
            }

        </style>
    </section>
@endsection
