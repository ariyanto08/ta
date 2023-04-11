<x-app>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-file"></i> Su-Ket Kematian
            </h3>
        </div>
        <form target="_blank" action="su-mati" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="nama" id="nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="tempat_lh" id="tempat_lh" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="date" name="tgl_lh" id="tgl_lh" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="number" name="nik" id="nik" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="jekel">
                                    <option selected>-Pilih-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="agama" id="agama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status Pekerjaan</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="status" id="status" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="alamat" id="alamat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">RT/RW</label>
                            <div class="col-sm-3">
                                <input class="form-control" type="number" name="rt" id="rt" required>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" type="number" name="rw" id="rw" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hari Meninggal</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="hari" id="hari" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Meninggal</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="date" name="tgl_mati" id="tgl_mati" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Meninggal</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="tempat_mati" id="tempat_mati" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penyebab Meninggal</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="sebab" id="sebab" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dimakamkan</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="tempat_makam" id="tempat_makam" required>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h4>
                   Pelapor
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Pelapor</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="nama_pelapor" id="nama_pelapor" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">NIK Pelapor</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="number" name="nik_pelapor" id="nik_pelapor" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tempat Lahir Pelapor</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="tmp_lh_pelapor" id="tmp_lh_pelapor" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Lahir Pelapor</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="tgl_lh_pelapor" id="tgl_lh_pelapor" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pekerjaan Pelapor</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="pekerjaan_pelapor" id="pekerjaan_pelapor" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat Pelapor</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="alamat_pelapor" id="alamat_pelapor" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Hubungan Pelapor</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="hub_pelapor" id="hub_pelapor" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="tgl_sur" id="tgl_sur" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">

                <input type="submit" name="su-mati" value="Cetak" class="btn btn-info">
            </div>
        </form>
    </div>
</x-app>
