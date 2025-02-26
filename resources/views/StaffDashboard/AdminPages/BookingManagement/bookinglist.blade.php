@extends('AdminDashboard.main')

@section('content')

<section>
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">SL</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">User Name</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">User Email</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Room Type</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Room Number</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Booking Date</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Chekin Date</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Checkout Date</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Payment</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Total Amount</th>
                        <!-- <th class="px-6 py-3 text-left text-gray-700 font-semibold">Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">john@example.com</td>
                        <td class="px-6 py-4">Single</td>
                        <td class="px-6 py-4">101</td>
                        <td class="px-6 py-4">Date</td>
                        <td class="px-6 py-4">Date</td>
                        <td class="px-6 py-4">Date</td>
                        <td class="px-6 py-4">paid</td>
                        <td class="px-6 py-4">500</td>
                        <!-- <td class="px-6 py-4">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mb-1">Edit</button><br>
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 ">Delete</button>
                        </td> -->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection