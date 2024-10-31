@extends('template.sidebar')
@section('content')
@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <link rel="stylesheet" href="css/listArisan.css">

    <body>
        <i class="ti ti-home" style="color: #D2D2D2; font-size: 1rem;"></i><small style="font-size: 0.875rem;"><span style="color: #D2D2D2;">></span> Event Arisan</small>
        <br>
        <br>
        <h2><b>Hai @auth {{ Auth::user()->name }}! @endauth
            </b></h2>
        <p>Event Arisan Baru Telah Dibuka! Jangan sampai ketinggalan kesempatan untuk bergabung di putaran arisan kali ini. Cek detailnya sekarang dan pastikan nama Anda ada di daftar peserta!</p>
        <br>
        <div class="table-container" style="border-radius: 10px">
            <table>
                <thead style="border-radius: 5px">
                    <tr>
                        <th>List Arisan</th>
                        <th>Pemilik Event</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>
                                <img src="{{ asset('assets/img/prof.jpg') }}">
                                <span>{{ $event['title'] }}</span>
                            </td>
                            <td>{{ $event['created_by'] ?? 'Tidak diketahui' }}</td>
                            <td>
                                <span class="status" style="background-color: orange; color: white;">
                                    {{ $event['status_arisan'] }}
                                </span>
                            </td>
                            <td>
                                <div class="icon d-flex">
                                    <a href="#"><i class="ti ti-edit"></i></a>
                                    <a href="{{ route('detail-event', ['id' => $event['id']]) }}"><i class="ti ti-eye"></i></a>
                
                                    <!-- Delete Button -->
                                    <form action="{{ route('delete-event', $event['id']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none;">
                                            <i class="ti ti-trash" style="color: red;"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>                
            </table>
            <ul class="pagination justify-content-end mt-3">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>
    </body>
@endsection
