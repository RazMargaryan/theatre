$(document).ready(function () {

    let url, div;
    $(".free").click(function () {
        url = $(this).data('url');
        div = this;
    });

    $('.orderTicket').click(function () {
        let name = $("#exampleInputName").val();
        let phoneNumber = parseInt($('#inputPhoneNumber').val());
        let email = $('#exampleInputEmail').val();

        if(name != '' && phoneNumber != "" && email != '' ){
            let data = {'name': name, 'phoneNumber': phoneNumber, "email": email};
            $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'PUT',
                data: data,
                dataType: 'json',
                success:function (success) {
                    $('#exampleModal').modal('toggle');
                    $("#exampleInputName, #inputPhoneNumber, #exampleInputEmail").val('');
                    $('small').text('');
                    $(div).removeClass('free').addClass('selected');
                    $(div).attr({'modal-toggle': '', 'data-target':''});
                    div = '';
                    setTimeout(function () {
                        alert(success.message);
                    }, 1000);
                },error: function(xhr) {
                    console.log(xhr);
                    let error = xhr.responseJSON.errors;
                    console.log(error);
                    if(error.name) $('.errorName').text(error.name[0]);
                    else $('.errorName').css('display', 'none');
                    if(error.phoneNumber) $('.errorNumber').text(error.phoneNumber[0]);
                    else $('.errorNumber').css('display', 'none');
                    if(error.email) $('.errorEmail').text(error.email[0]);
                    else $('.errorEmail').css('display', 'none');

                }
            });
        }

        else {
            alert("All fields are required")
        }



    });
});