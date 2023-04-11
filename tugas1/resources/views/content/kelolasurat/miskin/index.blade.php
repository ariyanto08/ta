<x-app>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-file"></i> Su-Ket Tidak Mampu
            </h3>
        </div>
        <form target="_blank" action="su-miskin" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="nama" id="nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="tempat_lh" id="tempat_lh" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="tgl_lh" id="tgl_lh" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="number" name="nik" id="nik" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="jekel">
                            <option selected>-Pilih-</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="agama" id="agama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status Pekerjaan</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="status" id="status" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="alamat" id="alamat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RT/RW</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="number" name="rt" id="rt" required>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="number" name="rw" id="rw" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="tgl_sur" id="tgl_sur" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keperluan</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="keperluan" id="keperluan" required>
                    </div>
                </div>

            </div>
            <div class="card-footer">

                <input type="submit" name="su-miskin" value="Cetak" class="btn btn-info">
            </div>
        </form>
    </div>
</x-app>
