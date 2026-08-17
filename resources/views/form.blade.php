@extends('layout')

@section('title')
    เคลมสินค้า
@endsection

@section('content')
    <h2 class="text-center py-3">Product Claim Form</h2>

    <form method="POST" action="{{ route('claim') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Serial Number</label>
            <input type="text" name="serial_number" class="form-control" value="{{ old('serial_number') }}">

            @error('serial_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email ผู้ติดต่อ</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">

            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">อาการชำรุด</label>

            <textarea name="problem" class="form-control" rows="4">{{ old('problem') }}</textarea>

            @error('problem')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">

            <label class="form-label">ระดับความเร่งด่วน</label>

            <select name="priority" class="form-select">

                <option value="">-- กรุณาเลือก --</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>

            </select>

            @error('priority')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <button class="btn btn-primary">
            ส่งข้อมูลเคลม
        </button>

        <button type="reset" class="btn btn-secondary">
            ล้างข้อมูล
        </button>

    </form>
@endsection
