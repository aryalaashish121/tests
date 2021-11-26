<html>

<head>
    <title>Title here</title>
</head>

<body>
    <div>hello this is home page.</div>
    <div>
        data avaiable:
        <ul>
            @foreach($employee as $e)

            <li> {{ $e->name}}</li>
            @endforeach
        </ul>

        <div>

        </div>
    </div>
    <div>
        <form action="{{route('store-employee')}}" method="POST">
            @csrf
            <label for="check">Label for employee name</label>
            <input type="text" name="name" placeholder="Enter name">
            <button type="submit">
                Submit
            </button>
        </form>
    </div>
</body>

</html>