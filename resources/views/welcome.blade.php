@extends('layouts.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="d-flex justify-content-center">
                <form action="{{ route('insertData') }}" method="POST">
                    @csrf
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" style="width: 400px;" class="form-control">
                    @error('name')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                    @error('email')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" id="password" class="form-control">
                    @error('password')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
