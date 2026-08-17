@extends('layout')
@section('title')
    บทความ
@endsection

@section('content')
    <h2 class="text text-center py-2">บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Titlt</th>
                {{-- <th scope="col">Content</th> --}}
                <th scope="col">Status</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog2 as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                   {{--  <td>{{ Str::limit($item->content, 10) }}</td> --}}

                    <td>
                        @if ($item->status == 1)
                            <a href="/change/{{ $item->id }}"class="btn btn-outline-success">เผยแพร่แล้ว</a>
                        @else
                            <a href="/change/{{ $item->id }}"class="btn btn-outline-danger">ยังไม่เผยแพร่</a>
                        @endif
                    </td>
                    <td>
                         <a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบบทความนี้จริงหรือไม่?')">ลบ</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
