<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title">Data User</h3> </div>
    <div class="panel-body">
        <table class="table table-striped" id="data">
            <thead>
              <tr>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>NIK</th>
                <th>Level</th>
                <th>Alamat</th>
              </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>NIK</th>
                    <th>Level</th>
                    <th>Alamat</th>
                </tr>
            </tfoot>

          </table>
    </div>
</div>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script> -->

<script type="text/javascript">
	$(document).ready(function(){
		// Setup - add a text input to each footer cell
	    $('#data tfoot th').each( function () {
	        var title = $(this).text();
	        if(title !=''){
	        	 $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
	        }
	       
		});
	    
	    // DataTable
		var table = $('#data').DataTable();   
		
		// Apply the search
		table.columns().every( function () {
			var that = this;
			$( 'input', this.footer() ).on( 'keyup change', function () {
				if ( that.search() !== this.value ) {
					that
						.search( this.value )
						.draw();
				}
			});
		} );
	});
</script>