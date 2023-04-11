<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Kematian
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('kematian', $meninggal->id_mendu) }}">
                        @csrf
                        @method('PUT')
                        <x-layout.form.edit type="text" name="name" ket="Nama" value="{{ $meninggal->nama }}" aria-disabled="true" />
                        <x-layout.form.edit type="date" name="tgl_mendu" ket="Tanggal Kematian"
                            value="{{ $meninggal->tgl_mendu }}" />
                        <x-layout.form.edit type="text" name="sebab" ket="Sebab"
                            value="{{ $meninggal->sebab }}" />

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
