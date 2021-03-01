<div>
    <div wire:loading>
        @include('loading')
    </div>
    <div class="grid grid-flow-col grid-cols-2 grid-rows-1 gap-4">
        <div class="flex w-max mx-3 p-1 rounded my-5 ml-8 col-start-1 col-end-3">
            <a href="{{URL::to('employees/create')}}" class="border-2 border-transparent bg-blue-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Create</a>
        </div>

        <div class="pt-2 relative text-gray-600 mr-12 my-5 col-end-7 col-span-2">
            <input wire:model="search"  class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
              type="search" name="search" placeholder="Search" autocomplete="off">
            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
              <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
                <path
                  d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
              </svg>
            </button>
        </div>
      </div>
      <hr/>


    <div class="grid grid-cols-10 gap-4" style="display: none;">
        <div class="flex w-max mx-3 p-1 rounded my-5 col-start-1 col-end-3">
            <a href="{{URL::to('employees/create')}}" class="border-2 border-transparent bg-blue-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Create</a>
        </div>

        <div class="pt-2 relative text-gray-600 mr-2 my-5 col-end-7 col-span-2">
            <input wire:model="search"  class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
              type="search" name="search" placeholder="Search">
            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
              <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
                <path
                  d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
              </svg>
            </button>
          </div>
    </div>

<div></div>
    <div class="py-12">
        <div class="max-w-11xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 text-xs">
                                <thead class="bg-gray-400">
                                    <tr>
                                    <th scope="col" class="text-center">
                                        <input wire:model="selectPage" type="checkbox" />
                                        </th>

                                        <th scope="col" class="py-3 px-6 text-center">
                                            First Name
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-center">
                                            Last Name
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-center">
                                            Phone
                                        </th>

                                        <th scope="col" class="py-3 px-6 text-center">
                                            E-mail
                                        </th>

                                        <th scope="col" class="py-3 px-6 text-center">
                                            Status
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-center">
                                            Address
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-center">
                                            Date Created
                                        </th>
                                        <th class="py-3 px-6 text-center">Edit</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($employees as $employee)
                                        <tr class=" hover:bg-gray-100 {{ $loop->even ? 'bg-gray-50' : ''}}">
                                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                                <input wire:model="selecteds" type="checkbox" value="{{ $employee->id }}">
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                                {{ $employee->FirstName }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                                {{ $employee->LastName }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                                {{ $employee->Phone1 }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                                {{ $employee->Email }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                @if ($employee->IsActive)

                                                    <button wire:click="$emit('toggleStatus', {{ $employee->id }})"
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </button>
                                                @else
                                                <button wire:click="$emit('toggleStatus', {{ $employee->id }})"
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                                        Inactive
                                                    </button>

                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                                {{ $employee->Street }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ Carbon\Carbon::parse($employee->created_at)->format('d/m/Y') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex item-center justify-center">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <a href="/employees/edit/{{$employee->id}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </a>
                                                    </div>
                                                </div>
                                            </td>


                                        </tr>
                                    @endforeach


                                    <!-- More items... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</div>