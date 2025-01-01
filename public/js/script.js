$(function() {

    $('#addButton').on('click', () => {
        $('#judulModal').html("add data mahasiswa")
        $('.modal-footer button[type=submit]').html("tambah data")
    })

    $('.tampilModalEdit').on('click', function() {
        $('#judulModal').html('edit data mahasiswa')
        $('.modal-footer button[type=submit]').html("edit data")

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data['nama'])
                $('#nrp').val(data['nrp'])
                $('#email').val(data['email'])
                $('#jurusan').val(data['jurusan'])
            }
        })
    })

    

})