<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>
    <title>Title of the document</title>
</head>

<body>
<h2>admin list blade </h2>

<div class="container">
    <h2>Table</h2>
    <p>The .table-hover class enables a hover state on table rows within a tbody:</p>
    <table class="table table-hover">
        <thead>
        @foreach ($list[0] as $key => $value)
            <th> {{$key}}</th>
        @endforeach
        </thead>
        <tbody>
        @foreach( $list as $key => $record)
            <tr>
                @foreach ($record as $value)
                    <td>{{$value}}</td>
                @endforeach

                <td>
                    <a href="{{route($delete, $record['id'])}}" class="btn btn-primary btn-sm"> view </a>
                </td>
                <td>
                    <a href="{{route($edit, $record['id'])}}" class="btn btn-default btn-sm"> edit </a>
                </td>
                <td>
                    <a onclick="deleteItem('{{route($delete, $record['id'])}}')" class="btn btn-danger btn-sm">
                        delete </a>
                </td>


            </tr>

        @endforeach
        </tbody>
    </table>

</div>


    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem(route) {
            $.ajax({
                url: route,
                type: 'DELETE',
                dataType: 'json',
                success: function () {
                    alert('Deleted')
                },
                error: function () {
                    alert('Error')
                }
            });
        }
    </script>
</body>

</html>

