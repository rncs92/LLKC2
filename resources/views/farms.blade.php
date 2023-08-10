<x-app-layout>
    <div class="flex justify-center items-center">
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg">
                        <img src="{{ asset('images/farm.jpg') }}" alt="farm">
                    </div>
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Pievienot jaunu fermu</h3>
                        <form method="POST" action="/farms" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                                    Fermas Nosaukums
                                    <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-3/4 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="name"
                                    id="name"
                                    type="text"
                                    placeholder="Ievadiet nosaukumu"
                                />
                                @error('name')
                                <span class="flex text-red-500 text-xs italic">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                    E-Pasts
                                    <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-3/4 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="email"
                                    id="email"
                                    type="email"
                                    placeholder="Ievadiet epastu"
                                />
                                @error('email')
                                <span class="flex text-red-500 text-xs italic">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="website">
                                    Mājaslapa
                                    <span class="text-gray-400 font-medium">(Nav obligāti)</span>
                                </label>
                                <input
                                    class="w-3/4 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="website"
                                    id="website"
                                    type="text"
                                    placeholder="Ievadiet mājaslapu"
                                />
                                @error('website')
                                <span class="flex text-red-500 text-xs italic">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 text-center">
                                <button
                                    class="w-1/2 px-4 py-2 font-bold text-white bg-amber-600/75 rounded-full hover:bg-amber-600 focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    Pievienot fermu
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
