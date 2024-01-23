<!-- Modal -->
<div class="modal fade" id="adminPiAktivitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><i><strong>Halaman Aktivitas Profil Instansi</strong></i>
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store_aktivitas') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Aktivitas</label>
                        <input type="text" name="nama_aktivitas" placeholder="Nama Aktivitas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penjelasan</label>
                        <textarea type="text" name="penjelasan_aktivitas" placeholder="Penejelasan tentang aktivitas" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar_aktivitas"class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</div>
