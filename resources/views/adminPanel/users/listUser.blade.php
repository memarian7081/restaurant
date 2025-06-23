


<div class="table">
    <table>
        <thead>
        <tr>
            <th>نام</th>
            <th>نام کاربری</th>
            <th>تلفن</th>
            <th>ایمیل</th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tbody>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->userName}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
            </tr>
            </tbody>
        @endforeach
    </table>
</div>
