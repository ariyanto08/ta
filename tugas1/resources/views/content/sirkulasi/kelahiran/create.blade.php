<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Tambah Data Kelahiran
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('kelahiran') }}">
                        @csrf
                        <x-layout.form.input type="text" name="nama" ket="Nama Bayi" />
                        <x-layout.form.input type="date" name="tgl_lh" ket="Tanggal Lahir" />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <select class="form-control select2" style="width: 100%;" name="jekel">
                                    <option selected="selected">-Pilih-</option>
                                    <option value="Laki-Laki">LK</option>
                                    <option value="Perempuan">PR</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Keluarga</label>
                            <div class="col-sm-6">
                                <select class="form-control select2" style="width: 100%;" name="id_kk">
                                    <option selected="selected">-Pilih-</option>
                                    @foreach ($keluarga as $keluarga)
                                    <option value="{{$keluarga->id_kk}}"> {{$keluarga->no_kk}}-{{$keluarga->kepala}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <x-button.save />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
