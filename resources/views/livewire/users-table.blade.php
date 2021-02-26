<div>
    <div wire:loading>
        @include('loading')
    </div>
    <div class="grid grid-flow-col grid-cols-2 grid-rows-1 gap-4">
        <div class="flex w-max mx-3 p-1 rounded my-5 ml-8 col-start-1 col-end-3">
            <a href="{{URL::to('users/create')}}" class="border-2 border-transparent bg-blue-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Create</a>
        </div>

        <div class="pt-2 relative text-gray-600 mr-12 my-5 col-end-7 col-span-2">
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
      <hr/>


    <div class="grid grid-cols-10 gap-4" style="display: none;">
        <div class="flex w-max mx-3 p-1 rounded my-5 col-start-1 col-end-3">
            <a href="{{URL::to('users/create')}}" class="border-2 border-transparent bg-blue-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Create</a>
            <!-- Buttons Template
            <button class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">DELETE</button>
            <button class="border-2 border-transparent bg-purple-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-purple-500 hover:bg-transparent hover:text-purple-500">secondary</button>
            <button class="border-2 border-transparent bg-green-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">success</button>
            <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">warning</button>
            -->

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
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-3 px-6 text-center">
                                            Name
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-center">
                                            Status
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-center">
                                            Role
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-center">
                                            Date Created
                                        </th>
                                        <th class="py-3 px-6 text-center">Actions</th>


                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr class="hover:bg-gray-100 {{ $loop->even ? 'bg-gray-50' : ''}}">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <svg class="h-10 w-10 rounded-full" id="Layer_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><g><g><g><g id="XMLID_504_"><g id="XMLID_505_"><g id="XMLID_506_"><g id="XMLID_507_"><g id="XMLID_508_"><g id="XMLID_509_"><g id="XMLID_510_"><g id="XMLID_511_"><g id="XMLID_512_"><g id="XMLID_513_"><g id="XMLID_514_"><g id="XMLID_515_"><g id="XMLID_516_"><g id="XMLID_517_"><g><path d="m512 256c0 58.44-19.59 112.31-52.55 155.4-28.06 36.69-65.83 40.96-109.46 38.51-29.1-1.63-60.81-6.25-93.99-6.25-82.94 0-156.67 28.89-203.45-32.26-32.96-43.09-52.55-96.96-52.55-155.4 0-141.38 114.62-256 256-256 139.98 0 253.73 112.36 255.96 251.81.03 1.39.04 2.79.04 4.19z" fill="#fbe280"/></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g><path d="m512 256c0 58.44-19.59 112.31-52.55 155.4-28.06 36.69-65.83 40.96-109.46 38.51l-83.9-129.01-104.32-104.31 174.97-140 175.22 175.22c.03 1.39.04 2.79.04 4.19z" fill="#efc859"/><path d="m199.97 250.232h112.06v118.84h-112.06z" fill="#eaa678"/><path d="m256 250.236h56.03v118.84h-56.03z" fill="#d38c5b"/><path d="m199.97 324.824h112.06v118.84h-112.06z" fill="#ffc397"/><path d="m256 324.824h56.03v118.84h-56.03z" fill="#eaa678"/><path d="m344.251 152.225c-3.728-56.6-49.511-77.517-88.251-77.517s-84.523 20.917-88.251 77.517c-10.018 1.938-17.134 15.077-16.014 25.701l1.717 24.177c1.175 11.157 10.982 19.301 21.79 18.089l1.864-.202c22.138 59.446 56.857 65.644 78.894 69.124 22.038-3.48 56.756-9.678 78.894-69.124l1.864.202c10.807 1.212 20.614-6.932 21.79-18.089l1.717-24.177c1.12-10.624-5.996-23.763-16.014-25.701z" fill="#ffc397"/><path d="m360.265 177.926-1.717 24.177c-1.175 11.157-10.982 19.301-21.79 18.089l-1.864-.202c-7.566 20.293-16.592 34.388-26.078 44.277-18.291 19.081-38.299 22.552-52.817 24.847v-214.406c38.74 0 84.523 20.917 88.251 77.517 10.019 1.938 17.135 15.077 16.015 25.701z" fill="#eaa678"/><path d="m256 49.064c-64.729 0-112.668 20.849-90.052 129.627l16.527 19.036 15.824-65.67c37.63 11.824 77.77 11.824 115.4 0l15.824 65.67 16.527-19.036c22.618-108.777-25.321-129.627-90.05-129.627z" fill="#515151"/><path d="m346.05 178.69-16.53 19.04-15.82-65.67c-18.82 5.91-38.26 8.86-57.7 8.86v-91.86c64.73 0 112.67 20.85 90.05 129.63z" fill="#3d3d3d"/><path d="m459.45 388.02v23.38c-10.66 13.93-23.03 10.85-36.27 22.31-11.36 9.84-23.28 34.57-36.26 42.31-5.256 3.133-10.632-7.059-16.125-4.299-5.273 2.65-10.654 18.267-16.125 20.549-30.36 12.71-63.7 19.73-98.67 19.73s-68.31-7.02-98.67-19.73c-5.473-2.283-10.85-13.599-16.125-16.25-5.492-2.759-10.871 3.132-16.125 0-11.65-6.94-23.03-23.71-33.39-32.36-14.63-12.21-27.55-17.11-39.14-32.26v-23.38c0-34.9 28.3-63.2 63.2-63.2h84.22s10.58 51.91 56.03 59.42c45.45-7.51 56.03-59.42 56.03-59.42h84.22c34.9 0 63.2 28.3 63.2 63.2z" fill="#5bbc96"/><path d="m459.45 388.02v23.38c-10.66 13.93-23.03 10.85-36.27 22.31-11.36 9.84-23.28 34.57-36.26 42.31-5.26 3.13-10.63-7.06-16.12-4.3-5.28 2.65-10.66 18.27-16.13 20.55-30.36 12.71-63.7 19.73-98.67 19.73v-127.76c45.45-7.51 56.03-59.42 56.03-59.42h84.22c34.9 0 63.2 28.3 63.2 63.2z" fill="#399e73"/><path d="m125.08 399.2v76.82c-28.11-16.75-52.73-38.74-72.53-64.62v-12.2z" fill="#ffc397"/><path d="m459.45 399.2v12.2c-19.8 25.88-44.42 47.87-72.53 64.62v-76.82z" fill="#eaa678"/><path d="m125.08 399.2h32.25v93.07c-11.17-4.66-21.95-10.11-32.25-16.25" fill="#399e73"/><path d="m354.67 399.2h32.25v76.82c-10.3 6.14-21.08 11.59-32.25 16.25" fill="#258258"/></g></svg>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $user->name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $user->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                @if ($user->status)

                                                    <button wire:click="$emit('toggleStatus', {{ $user->id }})"
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </button>
                                                @else
                                                <button wire:click="$emit('toggleStatus', {{ $user->id }})"
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                                        Inactive
                                                    </button>

                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ !is_null($user->current_team_id) ? $user->currentTeam->name : null }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex item-center justify-center">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </div>
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </div>
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
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