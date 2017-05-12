@extends ('admin.main')

@section ('admin.single')
<h2>admin single blade </h2>
<div class="container">
    <h2>Table</h2>
        <table class="table table-hover">
@foreach  ($item as $key => $value)
<tr>
    <th> {{$key}}</th>
                <td> {{$value}}</td>
    </tr>
            @endforeach
    <td>
        <a href="{{route($edit, $item['id'])}}" class="btn btn-default btn-sm"> edit </a>
    </td>
    <td>
        <a onclick="deleteItem('{{route($delete, $item['id'])}}')" class="btn btn-danger btn-sm">
            delete
        </a>
    </td>

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



