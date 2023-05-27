<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.create') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Add Reservation</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guests
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Table_id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $reservation->name }}
                                </th>
                                <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                                    {{ $reservation->email }}
                                </td>
                                <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                                    {{ $reservation->phone }}
                                </td>
                                <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                                    {{ $reservation->date }}
                                </td>
                                <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                                    {{ $reservation->guests }}
                                </td>
                                <td class="px-6 py-4 text-gray-500 whitespace-nowrap">
                                    {{ $reservation->table_id }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.reservations.edit', $reservation->id) }}" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-700 rounded-lg text-white">Edit</a>
                                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" method="POST" action="{{ route('admin.reservations.destroy', $reservation->id) }}" onsubmit="return confirm('Are you Sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
