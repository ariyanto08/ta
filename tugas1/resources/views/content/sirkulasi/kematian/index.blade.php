<x-app>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="kematian/create" ket="Data Kematian" />
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Sebab</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_meninggal as $meninggal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$meninggal->penduduk->nik}}</td>
                                    <td>{{$meninggal->penduduk->nama}}</td>
                                    <td>{{ $meninggal->tgl_mendu }}</td>
                                    <td>{{ $meninggal->sebab }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.edit url="kematian" id="{{ $meninggal->id_mendu }}" />
                                            <x-button.delete url="kematian" id="{{ $meninggal->id_mendu }}" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
