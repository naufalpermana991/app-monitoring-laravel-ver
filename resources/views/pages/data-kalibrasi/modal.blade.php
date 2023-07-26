@include('includes.script')
<!-- Modal -->
<div class="modal fade" id="cabModal" tabindex="-1" aria-labelledby="cabModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cabModalLabel">
                    Detail Kalibrasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="w-100" id="tblcabinfo">
                    <tbody></tbody>
                 </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-abort" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script type='text/javascript'>
    $(document).ready(function(){
 
       $('#cabTable').on('click','.viewdetails',function(){
           var cabid = $(this).attr('data-id');
 
           if(cabid > 0){
 
              // AJAX request
              var url = "{{ route('getCalibrationsDetails',[':cabid']) }}";
              url = url.replace(':cabid',cabid);
 
              // Empty modal data
              $('#tblcabinfo tbody').empty();
 
              $.ajax({
                  url: url,
                  dataType: 'json',
                  success: function(response){
 
                      // Add employee details
                      $('#tblcabinfo tbody').html(response.html);
 
                      // Display Modal
                      $('#cabModal').modal('show'); 
                  }
              });
           }
       });
 
    });
    </script>