<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Title of the document</title>
</head>

<body>
<h2>admin list blade </h2>

<div class="container">
    <h2>Table</h2>
    <p>The .table-hover class enables a hover state on table rows within a tbody:</p>
    <table class="table table-hover">
        <thead>
        <tr>
            @foreach ($list[0] as $key => $value)
                <th> {{$key}}</th>
            @endforeach

        @foreach( $list as $key=>$value)
                    <tr>
            @foreach ($value as $element)
                <td>{{$element}}</td>
                @endforeach
                    </tr>
            @endforeach

            {{dd($list)}}

        </tbody>
    </table>
</div>
</body>

</html>