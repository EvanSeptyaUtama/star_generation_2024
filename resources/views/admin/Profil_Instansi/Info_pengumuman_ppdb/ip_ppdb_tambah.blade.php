<!-- Modal -->
<div class="modal fade" id="halamanIpPPDB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><i><strong>Informasi Pengumuman PPDB</strong></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-2">
                <form action="{{ route('store_ip_ppdb') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-1">
                        <label>Jalur</label>
                        <input type="text" name="judul_informasi_pengumuman" placeholder="Judul informasi pengumuman"
                            class="form-control">
                    </div>

                    <div class="row mb-1">
                        <label>Gambar</label>
                        <input type="file" name="gambar_informasi_pengumuman" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</div>
