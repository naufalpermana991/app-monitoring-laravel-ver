@include('includes.script')
<!-- Modal -->
<div class="modal fade" id="empModal" tabindex="-1" aria-labelledby="empModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="empModalLabel">
                    Detail Alat
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="w-100" id="tbl_tool_info">
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
 
       $('#tooTable').on('click','.viewdetails',function(){
           var toolsid = $(this).attr('data-id');
 
           if(toolsid > 0){
 
              // AJAX request
              var url = "{{ route('getToolsDetails',[':toolsid']) }}";
              url = url.replace(':toolsid',toolsid);
 
              // Empty modal data
              $('#tbl_tool_info tbody').empty();
 
              $.ajax({
                  url: url,
                  dataType: 'json',
                  success: function(response){
 
                      // Add employee details
                      $('#tbl_tool_info tbody').html(response.html);
 
                      // Display Modal
                      $('#empModal').modal('show'); 
                  }
              });
           }
       });
 
    });
 </script>