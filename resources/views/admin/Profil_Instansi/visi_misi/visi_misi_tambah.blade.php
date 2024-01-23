<!-- Modal -->
<div class="modal fade" id="adminPiVisiMisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h4><i><strong>Tambah Data Visi-Misi Profil Instansi</strong></i></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('store_visi_misi') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Visi</label>
                    <input type="text" name="visi" placeholder="Misi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Misi</label>
                    <input type="text" name="misi" placeholder="Visi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar_visi_misi"class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
            </form>
        </div>
      </div>
    </div>
  </div>