<div id="con-close-modal-{{ $members->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"> Details Player</h4>
            </div>
            <div class="modal-body ">
            <center><h2> {{ $members->nama }}</span><span class="point-little">.</span></h2></center>
            <div class="">
              <center><img style="width:300px" src="{!! asset('').'/'.$members->foto !!}" alt="" /></center><br>
              <table class="table" style="border:10px">
                <tbody>            
                  <tr>
                    <td style="width:180px">Nama</td>
                    <td style="width:20px;">:</td>
                    <td>{{ $members->nama }}</td>
                  </tr>
                  <tr>
                     <td>Jenis Kelamin</td>
                    <td >:</td>
                    <td>{{ $members->jk }} </td>
                  </tr>
                  <tr>
                   <td>Tanggal Lahir</td>
                    <td >:</td>
                    <td>{{ $members->tgl_lhr}}</td>
                  </tr>
                  <tr>
                     <td>No Hp</td>
                    <td >:</td>
                    <td>{{ $members->no_hp }}</td>           
                  </tr>
                  <tr>
                     <td>Posisi</td>
                    <td >:</td>
                    <td>{{ $members->posisi }}</td>
                  </tr>
                  <tr>
                    <td>No Punggung</td>
                    <td >:</td>
                    <td>{{ $members->no_punggung }}</td>
                  </tr>
                </tbody>
              </table>
             
           </div>
            </div>
        </div>
    </div>
</div><!-- /.modal -->