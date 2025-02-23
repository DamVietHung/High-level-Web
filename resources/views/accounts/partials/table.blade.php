<table border="1" width="100%">
    <thead>
        <tr>
            <th></th>
            <th>STT</th>
            <th>Họ và Tên</th>
            <th>Vai trò</th>
            <th>Tên đăng nhập</th>
            <th>Pass</th>
            <th>Email</th>
            <th>Ngày Tháng năm sinh</th>
        </tr>
    </thead>
    <tbody>
        @foreach($accounts as $index => $account)
            <tr>
                <td><input type="checkbox"></td>
                <td>{{ $index + 1 }}</td>
                <td>{{ $account->name }}</td>
                <td>{{ $account->role }}</td>
                <td>{{ $account->username }}</td>
                <td>{{ $account->password }}</td>
                <td>{{ $account->email }}</td>
                <td>{{ \Carbon\Carbon::parse($account->dob)->format('d/m/Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
