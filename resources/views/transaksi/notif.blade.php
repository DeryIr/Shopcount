<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieModalLabel">Informasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Terimakasih sudah melakukan pembayaran di toko kami jangan lupa untuk mencetak invoice dan simpan di
                    perangkat anda, dan segera hubungi kami. Kami segera mengirim produk anda TERIMAKASIH</p><br>
                <i class="text-success">*Terimakasih telah melakukan pembelanjaan di toko kami</i><br><br>
                <i class="text-danger">*Jangan lupa untuk mengisi testimoni untuk membantu toko kami</i>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="acceptAllCookies">Mengerti</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    // Fungsi untuk menampilkan modal setelah halaman dimuat
    function showCookieModal() {
        $('#cookieModal').modal('show');
    }

    // Fungsi untuk menangani klik tombol "Accept All Cookies"
    function acceptAllCookies() {
        // Set cookie "cookieConsent" dengan nilai "true" dan masa berlaku selama 30 hari
        document.cookie = "cookieConsent=true; max-age=" + 30 * 24 * 60 * 60;
        // Tutup modal
        $('#cookieModal').modal('hide');
    }

    // Tampilkan modal setelah halaman dimuat jika cookie "cookieConsent" belum diatur
    $(document).ready(function() {
        if (document.cookie.indexOf('cookieConsent=true') < 1) {
            showCookieModal();
        }
    });

    // Tambahkan event listener untuk tombol "Accept All Cookies"
    document.getElementById('acceptAllCookies').addEventListener('click', acceptAllCookies);
</script>
