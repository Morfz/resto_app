<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                    Table Index
                </a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.tables.update', $table->id) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                        <div class="mt-1">
                          <input type="text" id="name" name="name" value="{{ $table->name }}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                        </div>
                        @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-3">
                        <label for="capacity" class="block text-sm font-medium text-gray-700"> Capacity </label>
                        <div class="mt-1">
                          <input type="number" min="0" max="8" id="capacity" name="capacity" value="{{ $table->capacity }}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('capacity') border-red-400 @enderror" />
                        </div>
                        @error('capacity')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-3">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <div class="mt-1">
                          <select id="status" name="status" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('status') border-red-400 @enderror">
                            @foreach(App\Enums\TableStatus::cases() as $status)
                              <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>{{ $status->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        @error('status')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      </div>
                      <div class=" flex justify-end mt-2 p-2">
                          <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Save</button>
                      </div>                      
                    </form>
                  </div>
                  
            </div>
        </div>
    </div>
</x-app-layout>
