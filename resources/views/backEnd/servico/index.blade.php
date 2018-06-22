@extends('backLayout.app')
@section('title')
Servico
@stop

@section('content')

    <h1>Servico <a href="{{ url('servico/create') }}" class="btn btn-primary pull-right btn-sm">Add New Servico</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblservico">
            <thead>
                <tr>
                    <th>ID</th><th>Nome</th><th>Unidade</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($servico as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('servico', $item->id) }}">{{ $item->nome }}</a></td><td>{{ $item->unidade }}</td>
                    <td>
                        <a href="{{ url('servico/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['servico', $item->id],
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
        $('#tblservico').DataTable({
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