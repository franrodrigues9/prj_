@extends('layouts.app')

@section('content')

    {{--@can('create',Auth::User())--}}

    <div><a class="btn btn-primary" href="{{route('criarMovimento')}}">Adicionar movimento</a></div>

        {{--<a class="btn btn-primary" href="{{route('home')}}">Return</a></div>--}}


    <table class="table table-striped">
        <thead>
        <tr>
            <th>Data</th>
            <th>Hora descolagem</th>
            <th>Hora aterragem</th>
            <th>Natureza</th>
            <th>Confirmado</th>

        </tr>
        </thead>
        <tbody>
            @if (count($movimentos))
                @foreach ($movimentos as $movimento)
                    <tr>
                        <td>{{ $movimento->data}}</td>
                        <td>{{ $movimento->hora_descolagem}}</td>
                        <td>{{ $movimento->hora_aterragem}}</td><!-- inserir só os mais importantes-->
                        <td>{{ $movimento->natureza}}</td>
                        <td>{{ $movimento->confirmado}}</td>
                       {{-- <td>
                            @can('update',$movimento)
                                <a class="btn btn-xs btn-primary" href="{{route('users.edit', $movimento->id)}}">Edit</a>
                            @else
                                <span class="btn btn-xs btn-secondary disabled">Edit</span>
                            @endcan
                            @can('delete',$movimento)
                                <form action="{{route('movimentos.destroy', $movimento->id)}}" method="POST" role="form" class="inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                </form>
                            @else
                                <span class="btn btn-xs btn-secondary disabled">Delete</span>
                            @endcan

                        </td>--}}
                    </tr>
            @endforeach
        @else
                <tr><td colspan="5">No users found</td></tr>
        @endif
    </table>

    {{ $movimentos->links() }}

@endsection