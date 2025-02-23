@extends('AdminDashboard.main')

@section('content')

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4 text-center">Add Room Type</h2>
        <form id="roomTypeForm" class="flex space-x-2 mb-4" action="{{ route('createroomtype') }}" method="post">
            @csrf
            <input type="text" id="roomTypeName" name="typeroom" placeholder="Enter Room Type" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="bg-blue-400 ml-3 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add</button>
        </form>

        <table class="w-full bg-white border rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border">SL</th>
                    <th class="py-2 px-4 border">Room Type</th>
                    <th class="py-2 px-4 border">Action</th>
                </tr>
            </thead>
            <tbody id="roomTypeList">
                @foreach ($showroomType as $showroomt)
                <td class="py-2 px-4 border">{{ $showroomt->id}}</td>
                <td class="py-2 px-4 border">{{ $showroomt->typeroom}}</td>
                <td class="py-2 px-4 border">
                    <form action="{{ route('deleteroomtype', $showroomt->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <Button type="submit">Delete</Button> 
                    </form>
                </td>

                @endforeach

            </tbody>
        </table>
    </div>

    <script>
        let roomCount = 0;
        document.getElementById("roomTypeForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const roomTypeName = document.getElementById("roomTypeName").value.trim();
            if (roomTypeName === "") {
                alert("Please enter a room type!");
                return;
            }

            roomCount++;
            const tableBody = document.getElementById("roomTypeList");
            const row = document.createElement("tr");
            row.innerHTML = `
                <td class="py-2 px-4 border text-center">${roomCount}</td>
                <td class="py-2 px-4 border">${roomTypeName}</td>
                <td class="py-2 px-4 border text-center">
                    <button onclick="removeRow(this)" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Delete</button>
                </td>
            `;
            tableBody.appendChild(row);

            document.getElementById("roomTypeName").value = "";
        });

        function removeRow(button) {
            button.closest("tr").remove();
            updateSerialNumbers();
        }

        function updateSerialNumbers() {
            const rows = document.querySelectorAll("#roomTypeList tr");
            roomCount = 0;
            rows.forEach((row, index) => {
                row.cells[0].textContent = index + 1;
                roomCount++;
            });
        }
    </script>
</body>

</html>

@endsection