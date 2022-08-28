<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Satuan </h6>
        </div>
        
        
        <div class="card-body"> 
            <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="fas fa-plus"></i>  Tambah Data </a>
        </div>
        <div class="col-lg-12">

       
        <div class="table-responsive py-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Satuan</th>
                        <th>Opsi</th> 
                    </tr>
                </thead> 
            </table>
        </div>

        </div>
    </div>
     

   
	<!-- form tambah dan ubah data -->
	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                              <form method="post" id="user_form" enctype="multipart/form-data">   
                                    <input type="hidden" name="id" id="id"> 
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_satuan" id="nama_satuan" class="form-control" placeholder="Nama Satuan" />
                                        </div>
                                    </div>
                                      
								   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="far fa-save"></i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="fas fa-ban"></i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>

   
   <script type="text/javascript"> 
      
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>satuan/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id);
                 $("#nama_satuan").val(result.nama_satuan); 
			 }
		 });
	 }
 
	 function Bersihkan_Form(){
        $(':input').val(''); 
         
     }

	 function Hapus_Data(id){
		if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('satuan/hapus_data')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
			   
               $('#dataTable').DataTable().ajax.reload(); 
			   
			    $.notify("Data berhasil dihapus!", {
					animate: {
						enter: 'animated fadeInRight',
						exit: 'animated fadeOutRight'
					}  
				 },{
					type: 'success'
					});
				 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
   
    }
	} 
  
	function Simpan_Data(){
		//setting semua data dalam form dijadikan 1 variabel 
		 var formData = new FormData($('#user_form')[0]); 
 
                 //transaksi dibelakang layar
                 $.ajax({
                 url:"<?php echo base_url(); ?>satuan/simpan_data",
                 type:"POST",
                 data:formData,
                 contentType:false,  
                 processData:false,   
                 success:function(result){ 
                    
                     $("#defaultModal").modal('hide');
                     $('#dataTable').DataTable().ajax.reload(); 
                     $('#user_form')[0].reset();
                     Bersihkan_Form();
                     
                     $.notify("Data berhasil disimpan!", {
                        animate: {
                            enter: 'animated fadeInRight',
                            exit: 'animated fadeOutRight'
                     } 
                     },{
                        type: 'success'
                    });
                 }
                }); 
  

	}
      
	 
       $(document).ready(function() {
		   
		$("#addmodal").on("click",function(){
			$("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
            $("#method").val('Add');
            $("#defaultModalLabel").html("Form Tambah Data");
		});

        var dateObj = new Date();
        var month = dateObj.getUTCMonth() + 1; //months from 1-12
        var day = dateObj.getUTCDate();
        var year = dateObj.getUTCFullYear();
  
		$('#dataTable').DataTable({  
			"ajax": "<?php echo base_url(); ?>satuan/fetch_satuan"
		});


	  
		 
	  });
  
		
		 
    </script>