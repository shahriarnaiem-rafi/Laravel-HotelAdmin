@extends('AdminDashboard.main')

@section('content')
<section class="py-20">
    <div class="overflow-x-auto">
        <h2 class="text-3xl">Room Status List</h2>
        <table class="max-w-lg md:mx-auto mx-4 table table-xs md:table-md mb-20">
            
            <thead>
                <tr class="bg-[--secondary-color] text-[--primary-color] border-b border-gray-200 text-center text-xs md:text-sm font-thin">
                    <th>SL</th>
                    <th>Room Type</th>
                    <th>Room Number</th>
                    <th>Checkout Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="bg-[--primary-color]">

                <tr class="text-center text-sm">
                    <td>1</td>
                    <td>Double</td>
                    <td>103</td>
                    <td>None</td>
                    <td><span class="text-green-500">Available</span></td>
                </tr>
                <tr class="text-center text-sm">
                    <td>2</td>
                    <td>Cozy Corner</td>
                    <td>600</td>
                    <td>None</td>
                    <td><span class="text-green-500">Available</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection