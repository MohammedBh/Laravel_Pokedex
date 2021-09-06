@extends('template.index')
@section('content')
    <section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/2">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full"
                    style="background-image:url('https://images.alphacoders.com/998/thumb-1920-998181.jpg">
                </div>
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">Build Your Own <span
                        class="text-indigo-600 dark:text-indigo-400">Pokedex</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Quidem modi reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim expedita aperiam
                    mollitia iure consectetur dicta tenetur, porro consequuntur saepe accusantium consequatur.</p>

                <div class="mt-8">
                    <a href="/add-new"
                        class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">Add
                        New</a>
                </div>
            </div>
        </div>
    </section>

    <div>
        @if ($count > 0)
            <section>
                <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-y-5">
                    @foreach ($pokemons as $pokemon)
                        <div class="mt-10 max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="px-4 py-2">
                                <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">
                                    {{ $pokemon->name }}
                                </h1>
                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Type : {{ $pokemon->types->nom }}
                                </p>
                            </div>

                            <img class="object-cover w-full h-48 mt-2 px-10"
                                src="{{ asset('storage/img/' . $pokemon->photos->src) }}" alt="NIKE AIR">

                            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                                <h1 class="text-lg font-bold text-white mr-5">Level :
                                    @if ($pokemon->level <= 20)
                                        <h1 class="text-lg font-bold text-blue-400 mr-5">{{ $pokemon->level }}
                                        @elseif ($pokemon->level >= 20 && $pokemon->level <=40) <h1
                                                class="text-lg font-bold text-green-400 mr-5">
                                                {{ $pokemon->level }}
                                            @elseif ($pokemon->level >= 40 && $pokemon->level <=60) <h1
                                                    class="text-lg font-bold text-yellow-300 mr-5">
                                                    {{ $pokemon->level }}
                                                @elseif ($pokemon->level >= 60 && $pokemon->level <=80) <h1
                                                        class="text-lg font-bold text-yellow-500 mr-5">
                                                        {{ $pokemon->level }}
                                                    @elseif ($pokemon->level >= 80 && $pokemon->level <=100) <h1
                                                            class="text-lg font-bold text-red-500 mr-5">
                                                            {{ $pokemon->level }}
                                                        @else
                                                            {{ $pokemon->level }}
                                    @endif
                                </h1>
                                <button
                                    class="px-2 ml-5 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white rounded hover:text-white hover:bg-blue-400">More
                                    Details</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="mt-20 grid justify-items-center">
                    <div class="">
                        <div>
                            <img src="{{ asset('img/whoops.png') }}" alt="">
                        </div>
                        <div class="my-12">
                            <h1 class="text-center text-gray-400 text-6xl">Whoops !</h1>
                            <p class="text-center text-gray-400 text-2xl mt-4">Seems like the list is empty.</p>
                        </div>
                    </div>
                </div>
        @endif
        </section>
    @endsection
