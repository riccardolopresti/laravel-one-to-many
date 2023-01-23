@extends('layouts.app')

@section('title')
    | Type
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="px-5 py-3">
            @if (session('msg'))
                <div class="alert alert-success" role="alert">
                    {!!session('msg')!!}
                </div>
            @endif
            <h1 class="text-uppercase text-black-50">Lista dei Tipi</h1>
            <div class="table-container pt-2 w-50">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Categoria</th>
                        <th scope="col">Numero Progetti</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <td class="d-flex">
                                    <form  action="{{route('admin.types.update', $type)}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input class="border-0 my-1" type="text" name="name" value="{{$type->name}}">
                                        <button type="submit me-2" class="btn btn-warning">Modifica</button>
                                    </form>

                                </td>
                                <td><span class="badge text-bg-dark">{{count($type->projects)}}</span></td>
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>

        </div>

    </div>
</div>
@endsection
