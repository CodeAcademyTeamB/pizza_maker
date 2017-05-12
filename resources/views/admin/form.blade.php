@extends ('admin.main')

@section ('admin.form')
    {!! Form::open(['url' => route('app.ingredients.adminEdit', $item['id'] )])!!}

    echo Form::text('email', 'example@gmail.com');


    @endsection


{!! Form::open(['url' => route('app.orderid', $record['id'] )])!!}


{{ Form::label('contacts ', 'Kontaktai') }}
{{ Form::text('contacts', $record['contacts']) }}

@if (isset ($error))
    'aaaaa'
@endif
<br>
{{Form::select('dough', $dough, $record['dough_id'])}}

<br/>
{{Form::select('cheese', $cheese, $record['cheese_id'])}}
<br/>
@foreach($ingredients as $key => $ingredient)

    <br>
    {{Form::checkbox('ingredient[]', $key
        @foreach ($record['ingredients'] as $key => $element)
            if ($key == 'id')  )}}
    {{$ingredient}}
    <br/>
@endforeach
{{Form::submit('submitint')}}
{!! Form::close() !!}

