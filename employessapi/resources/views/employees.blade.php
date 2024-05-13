<div>
<h1>Employee List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Lastname</th>
            <th>Second Lastname</th>
            <th>First Name</th>
            <th>Other Names</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->rowid }}</td>
                <td>{{ $employee->firstLastName }}</td>
                <td>{{ $employee->secondLastName }}</td>
                <td>{{ $employee->firstName }}</td>
                <td>{{ $employee->otherNames }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
