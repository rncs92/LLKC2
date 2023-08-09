<x-app-layout>
    <div class="flex justify-center items-center">
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg">
                        <img src="{{ asset('images/animals.jpg') }}" alt="farm">
                    </div>
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Pievienot fermai dzīvniekus</h3>
                        <form method="POST" action="/animals" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="farm">
                                    Izvēlies fermu
                                    <span class="text-red-500">*</span>
                                </label>
                                <select id="farm" name="farm" class="w-3/4 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                    <option selected>Izvēlieties fermu</option>
                                    @foreach($farms as $farm)
                                    <option value="{{$farm->id}}">{{$farm->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="number">
                                    Dzīvnieka numurs
                                    <span class="text-red-500">*</span>
                                </label>
                                <input
                                        class="w-3/4 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        name="number"
                                        id="number"
                                        type="text"
                                        placeholder="Ievadiet numuru"
                                />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="type">
                                    Dzīvnieka tips
                                    <span class="text-red-500">*</span>
                                </label>
                                <input
                                        class="w-3/4 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        name="type"
                                        id="type"
                                        type="text"
                                        placeholder="Ievadiet tipu"
                                />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="years">
                                    Vecums
                                    <span class="text-gray-400 font-medium">(Nav obligāti)</span>
                                </label>
                                <input
                                        class="w-3/4 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        name="years"
                                        id="years"
                                        type="text"
                                        placeholder="Ievadiet vecumu"
                                />
                            </div>
                            <div class="mb-6 text-center">
                                <button
                                        class="w-1/2 px-4 py-2 font-bold text-white bg-amber-600/75 rounded-full hover:bg-amber-600 focus:outline-none focus:shadow-outline"
                                        type="submit">
                                    Pievienot dzīvnieku
                                </button>
                            </div>
                            <hr class="mb-6 border-t"/>
                            <div class="text-center">
                                <a class="inline-block text-sm text-red-700 align-baseline hover:text-red-900"
                                   href="/dashboard">
                                    Atgriezties
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
