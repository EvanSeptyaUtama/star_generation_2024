<div class="modal fade" id="DataTenagaPengajar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>BIODATA TENAGA PENGAJAR</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form action="{{ route('store_tenaga_pengajar') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">NIP <br> (<i>Opsional</i>)</label>
                        <div class="col-sm-8">
                            <input type="number" name="nip" placeholder="Nomor Induk Pegawai" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                        </div>
                    </div>
                    <!---Foreign key table kelas---->
                    <div class="row mb-3">
                        <label class="col-sm-4 col-label-form">Wali Kelas <br> <i>(Opsional)</i></label>
                        <div class="col-sm-8">
                            <select name="kelas_id" class="form-control">
                                <option value="">- Pilih Kelas -</option>
                                @foreach ($data_kelas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-4 col-label-form">Foto</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" name="foto">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-4 col-label-form">Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" name="no_telp" placeholder="Nomor Aktif" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Jenis Kelamin</label>
                        <div class="col-sm-8 rounded">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="#">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Alamat</label>
                        <div class="col-sm-8">
                            <textarea type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" name="ttl" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" name="jabatan" placeholder="Jabatan" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Agama</label>
                        <div class="col-sm-8">
                            <select name="agama" class="form-control">
                                <option value="#">-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Suku <br> <i>(Opsional)</i></label>
                        <div class="col-sm-8">
                            <input type="text" name="suku" placeholder="suku" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">RT/RW <br> <i>(Opsional)</i></label>
                        <div class="col-sm-8">
                            <input type="text" name="rt_rw" placeholder="Contoh : 002/004"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Desa/Kelurahan <br> <i>(Opsional)</i></label>
                        <div class="col-sm-8">
                            <input type="text" name="desa_kelurahan" placeholder="Desa/Kelurahan"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Kecamatan/Kota <br> <i>(Opsional)</i></label>
                        <div class="col-sm-8">
                            <input type="text" name="kecamatan" placeholder="kecamatan/kota"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form">Kode Pos <br> <i>(Opsional)</i></label>
                        <div class="col-sm-8">
                            <input type="number" name="kode_pos" placeholder="kode_pos" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</div>
