@extends ('admin.main')

@section ('admin.list')
    <h2>Admin list blade </h2>

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
                            delete
                        </a>
                    </td>


                </tr>

            @endforeach
            </tbody>
        </table>

    </div>

@endsection

@section('script')
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
                dataType: 'json', //jei cia json tada admindDestroy turi grazinti kazkoki json faila kad butu message success
                success: function () {
                    alert('Deleted')
                },
                error: function () {
                    alert('Error')
                }
            });
        }
    </script>
    @endsection


