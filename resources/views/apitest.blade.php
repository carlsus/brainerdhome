@extends('layouts.app')

@section('content')

<section class="ftco-section">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Market ID</th>
                    <th>Market Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($markets as $market)
                    <tr>
                        <td>{{ $market['id'] }}</td>
                        <td>{{ $market['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</section>

@endsection
