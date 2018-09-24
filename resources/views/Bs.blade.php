<script type="text/javascript">
    $("#ex").submit(function(e) {     
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
        }).then((result) => { 
        if (result.value)
        {
            swal({
                title: 'Please Wait..!',
                text: 'Is working..',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                onOpen: () => {
                    swal.showLoading()
                }
            })
            $.ajax({
                url: 'example.php',
                type: 'POST',
                data: $('#ex').serialize(),
                dataType: "json",
                success: function(result){
                    swal.hideLoading()
                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            });
        }
    });
    e.preventDefault();
});
</script>
