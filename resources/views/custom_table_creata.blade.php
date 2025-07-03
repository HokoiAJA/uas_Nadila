{{-- filepath: c:\xamppLaravel\htdocs\uas_Abdi_Putra_Zulkarnain\resources\views\orders_create.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Custom Table Data</h1>

        {{-- Tampilkan error validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('custom_table.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="field1" class="form-label">Field 1</label>
                <input type="text" class="form-control" id="field1" name="field1" value="{{ old('field1') }}" required>
            </div>
            <div class="mb-3">
                <label for="field2" class="form-label">Field 2</label>
                <input type="text" class="form-control" id="field2" name="field2" value="{{ old('field2') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('custom_table.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
