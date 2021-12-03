<section class="py-1 bg-blueGray-50">
    <div class="px-4 mx-auto mt-24 mb-12 w-full xl:w-8/12 xl:mb-0">
        <div class="flex relative flex-col mb-6 w-full min-w-0 break-words bg-white rounded shadow-lg">
            <div class="px-4 py-3 mb-0 rounded-t border-0">

                <div class="flex flex-wrap items-center">
                    <div class="relative flex-1 flex-grow px-4 w-full max-w-full">
                        <h2 class="text-base font-semibold text-blueGray-700">Contacts</h2>
                    </div>
                    {{--<div class="relative flex-1 flex-grow px-4 w-full max-w-full text-right">
                        <button class="px-3 py-1 mr-1 mb-1 text-xs font-bold text-white uppercase bg-indigo-500 rounded transition-all duration-150 ease-linear outline-none active:bg-indigo-600 focus:outline-none" type="button">See all</button>
                    </div>--}}

                    <div class="space-x-2">
                        <label for="searchTerm" class="text-xs font-semibold uppercase">Search Term</label>
                        <input type="text" id="searchTerm" wire:model="searchTerm" class="border">
                    </div>
                </div>
            </div>

            <div class="block overflow-x-auto w-full">
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle whitespace-nowrap border border-r-0 border-l-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            <a wire:click.prevent="orderBy('name', '{{ $sortOrder }}')" href="#">Name</a>
                            <span>
                                @if($sortCriterion==='name')
                                    @if($sortOrder === 'asc') ⌃
                                    @else ⌄
                                    @endif
                                @else
                                @endif
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle whitespace-nowrap border border-r-0 border-l-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            <a wire:click.prevent="orderBy('birthdate', '{{ $sortOrder }}')" href="#">Birthdate</a>
                            <span>
                                @if($sortCriterion==='birthdate')
                                    @if($sortOrder === 'asc') ⌃
                                    @else ⌄
                                    @endif
                                @else
                                @endif
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle whitespace-nowrap border border-r-0 border-l-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            <a wire:click.prevent="orderBy('last_contacted_at', '{{ $sortOrder }}')" href="#">Last contacted at</a>
                            <span>
                                @if($sortCriterion==='last_contacted_at')
                                    @if($sortOrder === 'asc') ⌃
                                    @else ⌄
                                    @endif
                                @else
                                @endif
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle whitespace-nowrap border border-r-0 border-l-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            <a wire:click.prevent="orderBy('favorite_color', '{{ $sortOrder }}')" href="#">Favorite color</a>
                            <span>
                                @if($sortCriterion==='favorite_color')
                                    @if($sortOrder === 'asc') ⌃
                                    @else ⌄
                                    @endif
                                @else
                                @endif
                            </span>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($this->contacts as $index => $contact)
                        <tr>
                            <th class="p-4 px-6 text-xs text-left align-middle whitespace-nowrap border-t-0 border-r-0 border-l-0 text-blueGray-700">
                                {{ $contact->name }}
                            </th>
                            <td class="p-4 px-6 text-xs align-middle whitespace-nowrap border-t-0 border-r-0 border-l-0">
                                {{ $contact->birthdate->format('d-m-Y') }}
                            </td>
                            <td class="p-4 px-6 text-xs whitespace-nowrap border-t-0 border-r-0 border-l-0 align-center">
                                {{ $contact->last_contacted_at->format('d-m-Y') }}
                            </td>
                            <td class="p-4 px-6 text-xs align-middle whitespace-nowrap border-t-0 border-r-0 border-l-0">
                                <i class="mr-4 text-emerald-500 fas fa-arrow-up"></i>
                                {{ $contact->favorite_color }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    {{ $this->contacts->links() }}
    <footer class="relative pt-8 pb-6 mt-16">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap justify-center items-center md:justify-between">
                <div class="px-4 mx-auto w-full text-center md:w-6/12">
                    <div class="py-1 text-sm font-semibold text-blueGray-500">
                        Contact list <a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">with Livewire</a> by <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> Emmanuelle Vo</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
