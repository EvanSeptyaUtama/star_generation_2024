

<!-- Modal -->
<div class="modal fade" id="adminPiInformasiAkademik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel"><i><strong>Tambah Halaman Informasi Akadmeik</strong></i></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('store_informasi_akademik') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Hari</label>
                    <input type="text" name="hari_informasi_akademik"class="form-control" placeholder="Hari">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal_informasi_akademik"class="form-control" >
                </div>
                <div class="form-group">
                    <label>Informasi</label>
                    <input type="text" name="informasi_informasi_akademik"class="form-control" placeholder="Informasi yang akan disampaikan">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan_informasi_akademik"class="form-control" placeholder="Keterangan tambahan dari informasi">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar_informasi_akademik"class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
            </form>
        </div>
      </div>
    </div>
  </div>