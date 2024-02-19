<x-layouts.app>

    <h1 class="text-3xl">Customer list</h1>
    <table class="table-auto my-5">
        <thead>
            <tr class="border-2">
                <th class="bg-blue-100 border text-left px-2 py-2">Name</th>
                <th class="bg-blue-100 border text-left px-2 py-2">Email</th>
                <th class="bg-blue-100 border text-left px-2 py-2">Address</th>
                <th class="bg-blue-100 border text-left px-2 py-2">City</th>
                <th class="bg-blue-100 border text-left px-2 py-2">State</th>
                <th class="bg-blue-100 border text-left px-2 py-2">Zip</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
                <tr>
                    <td class="border text-left px-2 py-2">{{ $customer->user->name }}</td>
                    <td class="border text-left px-2 py-2">{{ $customer->user->email }}</td>
                    <td class="border text-left px-2 py-2">{{ $customer->address_1 }}</td>
                    <td class="border text-left px-2 py-2">{{ $customer->city }}</td>
                    <td class="border text-left px-2 py-2">{{ $customer->state }}</td>
                    <td class="border text-left px-2 py-2">{{ $customer->zip }}</td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>

</x-layouts.app>
