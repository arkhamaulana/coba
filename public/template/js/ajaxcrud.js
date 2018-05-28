

	var url = "http://localhost/coba/public/dashboard";

	//display modal form for product editing
	$(document).on('click', '.open_modal', function() {
		var id = $(this).val();

		$.get(url + '/' + id, function (data) {
			//success data
			console.log(data);
			$('#id').val(data.id);
			$('#nama').val(data.nama);
			$('#email').val(data.email);
			$('#deal').val(data.deal);
			$('#btn-save').val("update");
			$('#myModal').modal('show');
		})
	});

	//display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');

    });

    //delete product and remove it from list
    $(document).on('click','.delete_product',function(){
        var id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + id,
            success: function (data) {
                console.log(data);
                $("#id" + id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    //create new product / update existing product
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault();
        var formData = {
        	nama: $('#nama').val(),
            email: $('#email').val(),
            deal : $('#deal').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var id = $('#id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var product = '<tr id="id' + data.id + '"><td>' + data.id + '</td><td>' + data.nama + '</td><td>' + data.email + '</td><td>' + data.deal + '</td>';
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                product += ' <button class="btn btn-danger btn-delete delete_product" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#products-list').append(product);
                }else{ //if user updated an existing record
                    $("#id" + id).replaceWith( product );
                }
                $('#frmProducts').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

