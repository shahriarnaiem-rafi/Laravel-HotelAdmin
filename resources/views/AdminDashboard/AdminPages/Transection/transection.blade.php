@extends('AdminDashboard.main')

@section('content')
<section class="">
    <div class="overflow-x-auto mt-6">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-6xl mx-auto">
            <h2 class="text-3xl text-center font-semibold bg-blue-500 text-white py-4 rounded-t-lg">Transaction List</h2>
            <table class="w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-800 text-white text-center text-sm md:text-base font-semibold">
                        <th class="px-6 py-3">SL</th>
                        <th class="px-6 py-3">Customer Id</th>
                        <th class="px-6 py-3">Customer Name</th>
                        <th class="px-6 py-3">Room Type</th>
                        <th class="px-6 py-3">Room Number</th>
                        <th class="px-6 py-3">Paid Amount</th>
                        <th class="px-6 py-3">Payment Method</th>
                        <th class="px-6 py-3">Receipt Generate</th>
                    </tr>
                </thead>
                <tbody class="text-center text-gray-700 text-sm md:text-base">
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">CUST001</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">Deluxe</td>
                        <td class="px-6 py-4">101</td>
                        <td class="px-6 py-4">$500</td>
                        <td class="px-6 py-4">Credit Card</td>
                        <td class="px-6 py-4">
                            <button class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Print</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection