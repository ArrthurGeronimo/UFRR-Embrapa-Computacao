@extends('backLayout.app')
@section('title')
Amostra
@stop

@section('content')

    <h1>Amostra <a href="{{ url('amostra/create') }}" class="btn btn-primary pull-right btn-sm">Add New Amostra</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblamostra">
            <thead>
                <tr>
                    <th>ID</th><th>Numero Amostra</th><th>Bloco</th><th>Tratamento</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($amostra as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('amostra', $item->id) }}">{{ $item->numero_amostra }}</a></td><td>{{ $item->bloco }}</td><td>{{ $item->tratamento }}</td>
                    <td>
                        <a href="{{ url('amostra/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['amostra', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblamostra').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection