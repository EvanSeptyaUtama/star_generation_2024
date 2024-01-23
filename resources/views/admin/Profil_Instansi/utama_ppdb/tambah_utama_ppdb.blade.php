  <!-- Modal -->
  <div class="modal fade" id="halamanPPDB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i><strong>Halaman Utama PPDB</strong></i></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body m-2">
                  <form action="{{ route('store_utama_ppdb') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-1">
                          <label>Judul</label>
                          <input type="text" name="judul_ppdb" placeholder="Judul PPDB" class="form-control">
                      </div>

                      <div class="row mb-1">
                          <label>Penjelasan</label>
                          <textarea type="text" name="penjelasan_ppdb" placeholder="Penjelasan PPDB" class="form-control"></textarea>
                      </div>

                      <div class="row mb-1">
                          <label>Gambar</label>
                          <input type="file" name="gambar_brosur_ppdb" class="form-control">
                      </div>

                      <button type="submit" class="btn btn-primary mt-3">Submit</button>
                      <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
