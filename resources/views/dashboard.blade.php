<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl text-4xl mx-auto sm:px-6 lg:px-8 flex justify-center items-center h-full">
            Sveiki, {{ Auth::user()->name }}!
        </div>
    </div>
    <div class="flex justify-center items-center">
        <a href="/farms">
            <button
                    class="bg-amber-600/75 rounded-l-lg w-64 h-24 mr-1 drop-shadow-xl hover:bg-amber-600 hover:drop-shadow-2xl">
                + Pievienot jaunu fermu
            </button>
        </a>
        <a href="/animals">
            <button
                    class="bg-orange-700/75 rounded-r-lg w-64 h-24 ml-1 drop-shadow-xl hover:bg-orange-700 hover:drop-shadow-2xl">
                + Pievienot dzīvnieku fermai
            </button>
        </a>
    </div>
    <div class="flex justify-center items-center mt-8">
        <div
                class="align-middle inline-block w-4/5 shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
            <table class="min-w-full">
                <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                        Fermas ID
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Fermas Nosaukums
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        E-Pasts
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Mājaslapa
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Pievienots
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                </tr>
                </thead>
                @foreach($farms as $farm)
                    <tbody class="bg-white">
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                                <div>
                                    <div class="text-sm leading-5 text-gray-800">{{$farm->id}}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 text-blue-900">{{$farm->name}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                            {{$farm->email}}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                            {{$farm->website}}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                        <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative text-xs">{{$farm->created_at}}</span>
                                    </span>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                            <div x-data="{ showModal: false, selectedFarm: null }">
                                <button
                                        class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none"
                                        @click="selectedFarm = {{ $farm->id }}; showModal = true">
                                    Apskatīt dzīvniekus
                                </button>
                                <div x-show="showModal && selectedFarm === {{ $farm->id }}"
                                     class="fixed inset-0 flex items-center justify-center z-50">
                                    <div class="bg-white p-6 rounded shadow-lg">
                                        <h2 class="flex justify-center font-semibold mb-2">Dzīvnieki šajā fermā</h2>
                                        <div class="relative overflow-x-auto">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3">
                                                        Product name
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Color
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Category
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Price
                                                    </th>
                                                </tr>
                                                </thead>
                                                @foreach ($farm->animals as $animal)
                                                    <tbody>
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{$animal->id}}
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{ $animal->animal_number }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            {{ $animal->type_name }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            {{ $animal->years }}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                        <button @click="showModal = false"
                                                class="mt-4 bg-gray-300 hover:bg-gray-400 px-3 py-1 rounded">Aizvērt
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
            <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                <div>
                    <p class="text-sm leading-5 text-blue-700">
                        Attēlots
                        <span class="font-medium">1</span>
                        lidz
                        <span class="font-medium">10</span>
                        no
                        <span class="font-medium">{{ count($farms) }}</span>
                        rezultātiem
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex shadow-sm">
                        <div>
                            <a href="#"
                               class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="#"
                               class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                1
                            </a>
                            <a href="#"
                               class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                2
                            </a>
                            <a href="#"
                               class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                3
                            </a>
                        </div>
                        <div>
                            <a href="#"
                               class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                               aria-label="Next">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
