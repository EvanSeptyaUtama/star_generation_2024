<!-- Modal -->
<div class="modal fade" id="adminPiSejarah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4><i><strong>Halaman Sejarah Profil Instansi</strong></i></h4>
                <hr>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store_sejarah') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul_sejarah" placeholder="Judul Sejarah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penjelasan Singkat</label>
                        <textarea type="text" name="penjelasan_singkat" rows="4" placeholder="Penjelasan singkat tentang sejarah"
                            class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Penjelasan Lengkap</label>
                        <textarea type="text" name="penjelasan_lengkap" rows="4" placeholder="Penejlasan lengkap tentang sejarah"
                            class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar_sejarah"class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</div>
