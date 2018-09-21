				
                $('#student_id').val(id);
                $('#studentModal').modal('show');
                $('#action').val('Edit');
                $('.modal-title').text('Edit Data');
                $('#button_action').val('update');
       <script type="text/javascript">
       $('.edit').click(function(){
      // backdrop : 'static' digunakan untuk mencegah modal ke close saat mengklik bagian luar modal
        $('#myModal2').modal({backdrop: 'static'});  
        $('#formedit')[0].reset();
      });
    // Menggunakan form dengan submit function
    $('#formedit').submit(function (e){
      // preventDefault adalah sebuah method yang berfungsi untuk mencegah terjadinya event bawaan dari sebuah DOM, misalnya tag "a href"
      e.preventDefault();
      var state = $('#btn-edit').val();
      $.ajax({
        // Method POST adalah method yang mengirim data
        type : "get",
        // Pengambilan URL
        url: "{{ route('Update') }}",
        // Serialize digunakan untuk mengambil semua nilai dari form
        // data : adalah Data yang akan dikirim ke server atau dalam kasus ini database
        data:$('#form').serialize(),
        // Type data yang akan dikembalikan oleh database
        dataType: 'json',
        success: function (data) {
            console.log(data);
             $('#table').DataTable().ajax.reload();
      		$('#myModal2').modal('hide');
				$('#Nama').val(data.Nama);
                $('#Lahir').val(data.Lahir);
            }
      });
    });
    $(document).on('click', '.edit', function(){
        var id = $(this).attr("id");
        var state = $('#btn-edit').val();
        $.ajax({
        url: "{{ route('update') }}",
            method:'get',
            data:{id:id},
            dataType:'json',
            success:function(data)
            {
                $('#first_name').val(data.first_name);
                $('#last_name').val(data.last_name);
                $('#studentModal').modal('show');
                $('#action').val('Edit');
                $('.modal-title').text('Edit Data');
                $('#button_action').val('update');
            }
        })
    });
    $('#formedit').submit(function (e){
      // preventDefault adalah sebuah method yang berfungsi untuk mencegah terjadinya event bawaan dari sebuah DOM, misalnya tag "a href"
      e.preventDefault();
      var state = $('#btn-edit').val();
      var id = $(this).attr("id");
      $.ajax({
        // Method POST adalah method yang mengirim data
        type : "get",
        // Pengambilan URL
        url: "{{ route('update') }}",
        // Serialize digunakan untuk mengambil semua nilai dari form
        // data : adalah Data yang akan dikirim ke server atau dalam kasus ini database
        data:$('#formedit').serialize(),
        // Type data yang akan dikembalikan oleh database
        dataType: 'json',
        success: function (data) {
            console.log(data);
             $('#table').DataTable().ajax.reload();
              $('#myModal').modal('hide');
              $('#Nama').val(data.Nama);
                $('#Lahir').val(data.Lahir);
            },

            error: function (data) {
              console.log(data.responseJSON.errors);
            }
      });
    });
       
                </script>