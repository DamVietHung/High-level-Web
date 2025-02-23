<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Họ và Tên</th>
            <th>Vai trò</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Ngày sinh</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($accounts as $index => $account)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $account->name }}</td>
            <td>{{ $account->role }}</td>
            <td>{{ $account->username }}</td>
            <td>{{ $account->email }}</td>
            <td>{{ $account->birthdate }}</td>
            <td>
                <form action="{{ url('/delete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $account->id }}">
                    <button type="submit">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
