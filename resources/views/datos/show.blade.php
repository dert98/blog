@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">dato {{ $dato->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/datos') }}" title="Back" class=""><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/datos/' . $dato->id . '/edit') }}" title="Edit dato"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('datos' . '/' . $dato->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete dato" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dato->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $dato->nombre }} </td></tr><tr><th> Apellido </th><td> {{ $dato->apellido }} </td></tr><tr><th> Descripcion </th><td> {{ $dato->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection