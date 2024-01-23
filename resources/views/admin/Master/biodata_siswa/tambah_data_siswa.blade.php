<!-- Modal -->
<div class="modal fade" id="dataSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i><strong>BIODATA SISWA</strong></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store_siswa') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">NISN</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" name="nisn" placeholder="Nisn">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Nama</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="nama_siswa" placeholder="Nama Lengkap"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Alamat</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" type="text" name="alamat_siswa" placeholder="Alamat" rows="4"
                                class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir"
                                class="form-control">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Foto Siswa</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" name="foto_siswa">
                        </div>
                    </div>

                    <!---Foreign key table kelas---->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Kelas</label>
                        <div class="col-sm-9">
                            <select name="kelas_id" class="form-control">
                                <option value="">- Pilih Kelas -</option>
                                @foreach ($data_kelas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="date" name="ttl" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Jenis Kelamin</label>
                        <div class="col-sm-9 rounded">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="#">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Agama</label>
                        <div class="col-sm-9 rounded">
                            <select name="agama" class="form-control">
                                <option value="#">-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Khonghucu</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Anak ke-</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="anak_ke"
                                placeholder="Contoh : Pertama, Kedua, ....">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Suku</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="suku" placeholder="Suku">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Jumlah Saudara</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" name="jumlah_saudara"
                                placeholder="Contoh: 1,2,3,4... / Boleh tidak di isi">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Cita-Cita</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="cita_cita" placeholder="Cita-cita">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Hobi</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="hobi" placeholder="Hobi">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">No Telepon</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="no_telp" placeholder="Nomor Aktif">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Tinggal bersama</label>
                        <div class="col-sm-9 rounded">
                            <select name="tinggal_bersama" class="form-control">
                                <option value="#">-- Tinggal bersama --</option>
                                <option value="OrangTua">Orang Tua</option>
                                <option value="Wali">Wali</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">RT/RW</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="rt_rw" placeholder="Contoh: 02/04">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Desa/Kelurahan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="desa_kelurahan"
                                placeholder="Desa/Kelurahan">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Kecamatan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-label-form">Kode Pos</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="kode_pos"
                                placeholder="Contoh : 75611..">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                </form>

            </div>

        </div>
    </div>
</div>
