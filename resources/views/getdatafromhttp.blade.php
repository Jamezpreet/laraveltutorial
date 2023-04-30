<html>

<body>
    <table border="1px solid blue">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>picture</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <th>{{$item['id']}}</th>
                <th>{{$item['first_name']}}</th>
                <th><img src="{{$item['avatar']}}"></th>
            </tr>
        @endforeach

    </table>

</body>

</html>
