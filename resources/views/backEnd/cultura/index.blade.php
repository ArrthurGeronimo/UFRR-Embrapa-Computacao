@extends('backLayout.app')
@section('title')
Cultura
@stop

@section('content')

    <h1>Cultura <a href="{{ url('cultura/create') }}" class="btn btn-primary pull-right btn-sm">Add New Cultura</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcultura">
            <thead>
                <tr>
                    <th>ID</th><th>Especie</th><th>Material</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cultura as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('cultura', $item->id) }}">{{ $item->especie }}</a></td><td>{{ $item->material }}</td>
                    <td>
                        <a href="{{ url('cultura/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['cultura', $item->id],
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
        $('#tblcultura').DataTable({
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