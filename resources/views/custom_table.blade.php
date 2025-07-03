@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Custom Table List</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('custom_table.create') }}" class="btn btn-primary mb-3">Add Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Field 1</th>
                    <th>Field 2</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($custom_tables as $custom_table)
                    <tr>
                        <td>{{ $custom_table->id }}</td>
                        <td>{{ $custom_table->field1 }}</td>
                        <td>{{ $custom_table->field2 }}</td>
                        <td>{{ $custom_table->description }}</td>
                        <td>
                            <a href="{{ route('custom_table.show', $custom_table) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('custom_table.edit', $custom_table) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('custom_table.destroy', $custom_table) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
