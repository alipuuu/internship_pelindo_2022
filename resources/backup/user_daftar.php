 @foreach ($users as $data)
<tr>
    <td>{{ $data->name }}</td>
    <td>{{ $data->email }}</td>
    <td>{{ $data->nik }}</td>
    <td>{{ $data->instansi }}</td>
    <td>{{ $data->no_telp }}</td>
    <td><a href="{{ $data->berkas }}" target="_blank" download><span class="fa fa-download"></span><span class="icon-name"> {{ $data->berkas }}</a></span></td>
    <td>{{ $data->created_at}}</td>
    <td>
        <?php if($data->status == '1'){ ?>
        <a href="{{url('/update_pendaftaran',$data->id_users)}}" class="btn btn-success btn-xs mb-3">Lolos Seleksi</a>
        <?php }else{ ?>
        <a href="{{url('/update_pendaftaran',$data->id_users)}}" class="btn btn-danger btn-xs mb-3">Belum Lolos Seleksi</a>
        <?php } ?>
        <button class="btn btn-info btn-xs mb-3" data-toggle="modal" data-target="#edit{{ $data->id_users}}">Edit Data</button>
    </td>
        @if (!empty($data->magang->jenis_magang))
    <td>{{ $data->magang->jenis_magang}}</td>
        @else
    <td>{{ $data->jenis_magang }}</td>
        @endif


        @if (!empty($data->penempatan->lokasi))
    <td>{{ $data->penempatan->lokasi}}</td>
        @else
    <td>{{ $data->lokasi }}</td>
        @endif



        @if (!empty($data->divisi->departemen))
    <td>{{ $data->divisi->departemen}}</td>
        @else
    <td>{{ $data->departemen }}</td>
        @endif
</tr>
@endforeach
