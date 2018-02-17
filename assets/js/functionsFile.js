$(document).ready(function() {
    section();
    food();
    console.log("hii");
});

function d() {
    console.log("hii");
}

function Block(base_url, day, month, year) {

    var url = base_url + "index.php/welcome/BlockDay";

    $.ajax({
        url: url,
        type: 'POST',

        dataType: 'json',
        data: { day: day, month: month, year: year },
        success: function(data) {


        },
        error: function(jqXHR, textStatus, errorThrown) {


        }

    });

    location.reload();
}

function UnBlock(base_url, day, month, year) {

    var url = base_url + "index.php/welcome/UnBlock";


    $.ajax({
        url: url,
        type: 'POST',

        dataType: 'json',
        data: { day: day, month: month, year: year },
        success: function(data) {


        },
        error: function(jqXHR, textStatus, errorThrown) {


        }

    });

    location.reload();


}

function section() {
    var base_url = document.getElementById("base_url").value
    var url = base_url + "index.php/admin/sections";


    $.post(url, function(data, status) {

        $("#tableData").html(data);
    });


}

$(document).on("change", "#sectiontype", function() {


    var id = document.getElementById("sectiontype").value;

    food(id);
});

function food(id = 0) {
    var base_url = document.getElementById("base_url").value
    var url = base_url + "index.php/admin/food";

    var data = { id: id };



    $.post(url, data, function(data) {

        $("#tableData1").html(data);
    });


}



function SubmitForm(FormID, Controller, FunctionName, ResultDivId, Message) {

    $("#" + FormID).unbind('submit').submit(function(event) {

        var formData = $(this).serialize();
        $.ajax({
                type: 'GET',
                url: "http://localhost/reservations/index.php/" + Controller + "/" + FunctionName,
                data: formData
            })
            .done(function(data) {
                $("#" + ResultDivId).html(data);
                if (Message != "none") {
                    $('#' + Message).fadeIn().delay(1000).fadeOut();
                }
            });
        event.preventDefault();

        $("#" + FormID)[0].reset();
    });

}

function deletesection(id) {


    var base_url = document.getElementById("base_url").value
    var url = base_url + "index.php/admin/removeSection";


    var data = {
        id: id
    };

    alert(data);
    $.post(url, data, function(data) {

        alert("Removed successfully ");

        location.reload();
    });



}

function deletefood(id) {


    var base_url = document.getElementById("base_url").value
    var url = base_url + "index.php/admin/removeFood";


    var data = {
        id: id
    };

    // alert(data);
    $.post(url, data, function(data) {

        alert("Removed successfully ");

        location.reload();
    });



}
$(document).on("change", "#serviceChoice", function() {
    var service = document.getElementById("serviceChoice").value
    var base_url = document.getElementById("base_url").value
    var url = base_url + "index.php/welcome/serviceprice";


    var data = {
        id: service
    };

    // alert(data);
    $.post(url, data, function(data) {
        $("#Serviceprice").val(data);


        // location.reload();
    });


});




$(document).on("click", "#editfood", function() {
    var price = $(this).data('price')
    var name = $(this).data('name');
    var id = $(this).data('id');
    var section = $(this).data('section');

    $("#idsectionEditFood").val(id);
    $("#namesectionEditFood").val(name);
    $("#priceEditFood").val(price);
    $("#sectionEditFood").val(section);

});



$(document).on("click", "#editsection", function() {

    var name = $(this).data('name');
    var id = $(this).data('id');


    $("#idEditSection").val(id);
    $("#nameEditSection").val(name);

});



function editDataOfDay(id, name, paid, service, time, day, year, month, bookingnumber) {

    alert(name);
    alert(paid);

    alert(service);
    alert(time);
    alert(day);
    alert(year);
    alert(month);

    // var base_url = document.getElementById("base_url").value;

    // var url = base_url + "index.php/welcome/editData";


    // $("#edit_id").val(id);
    // $("#name_edit").val(name);
    // $("#edeit_paid").val(paid);
    // $("#edit_phone").val(phone);
    // $("#edit_Service").val(service);
    // $("#edit_time").val(time);
    // $("#edit_day").val(day);
    // $("#edit_year").val(year);
    // $("#edit_month").val(month);
    // $("#bookingnumber").val(bookingnumber);

}