<div id="Modal-{{ $id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Check Participant</h4>
            </div>
            <div class="modal-body">

              <center>
              <b>Atas Nama :</b> {{ $bukti_pembayaran->atas_nama }} <br>
              <b>Nomor Rekening :</b> {{ $bukti_pembayaran->no_rek }} <br>
              <b>Bukti Pembayaran:</b>  <br>

                <img src="{!! asset('').'/'.$bukti_pembayaran->thumbnail !!}" style="width:350px">
               <br>
              <b>Waktu :</b> {{ $bukti_pembayaran->created_at }} <br>
              </center>
  
            </div>
        </div>
    </div>
</div><!-- /.modal -->
