@extends('layouts.app')

@section('title')
    | Type
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="px-5 py-3">
            @if (session('delete'))
                <div class="alert alert-success" role="alert">
                    {!!session('delete')!!}
                </div>
            @endif
            <h1 class="text-uppercase text-black-50">Lista dei Tipi</h1>
            <div class="table-container pt-2">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>

        </div>

    </div>
</div>
@endsection
