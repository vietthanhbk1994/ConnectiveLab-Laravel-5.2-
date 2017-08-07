$("body").on("submit", "form[name='delete']", function (e) {
    var form = this;
    e.preventDefault();
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirmed) {
        if (isConfirmed) {
            swal({
                title: "Deleted!",
                text: "Your file has been deleted.",
                type: "success",
                showCancelButton: true,
                cancelButtonText: "Undo!",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                form.submit();
            });
        } else {
            swal("Cancelled", "Your file is safe :)", "error");
        }
    });
});
//load xem truoc anh
function checkHinhAnh(input) {    
    var reader = new FileReader();
    reader.onload = function (e) {
        var img = document.getElementById("img");
        img.src = e.target.result;
    };
    reader.readAsDataURL(input.files[0]);
}