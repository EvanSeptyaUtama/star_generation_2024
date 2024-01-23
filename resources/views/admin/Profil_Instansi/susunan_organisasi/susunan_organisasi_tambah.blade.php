<!-- Modal -->
<div class="modal fade" id="adminPiSusunanOrganisasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i><strong>Tambah Halaman Susunan Organisasi</strong></i></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('store_susunan_organisasi') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap dalam Susunan Organisasi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" placeholder="Jabatan dalam Susunan Organisasi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="gambar"class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
            </form>
        </div>
      </div>
    </div>
  </div>