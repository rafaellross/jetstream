<div class="flex flex-col sm:justify-center items-center sm:pt-0 bg-gray-100">
    <div wire:loading wire:target="saveUser">
        @include('loading')
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form wire:submit.prevent="saveUser">

            <div>
                <label class="block font-medium text-sm text-gray-700" for="name">
                    Name
                </label>
                <input wire:model.lazy="name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" type="text">
                @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="email">
                    Email
                </label>
                <input wire:model.lazy="email"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                        type="text">
                @error('email') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>

            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="password">
                    Password
                </label>
                <input wire:model.lazy="password"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                    type="password">
                    @error('password') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>

            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
                    Confirm Password
                </label>
                <input wire:model.lazy="password_confirmation"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                type="password">
        </div>

            <div class="flex items-center justify-end mt-4">

                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
