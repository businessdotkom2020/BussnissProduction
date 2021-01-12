/********** ajax select ***********/
var base_url = $('#base_url').val();
$('#category_id').on('change',function(e){
    console.log(e);
    var category_id = e.target.value;
    $.get( base_url + '/ajax-subcats?category_id='+ category_id,function(data){
        $('#subcategory_id').empty();
        /*$('#subcategory_id').append('<option value="">-- choose / اختر --</option>');*/
        $.each(data,function(index, subcatObj){
            $('#subcategory_id').append('<option value="'+subcatObj.id+'">'+ subcatObj.name +'</option>');
        });
    });
});
$('#subcategory_id').on('change',function(e){
    console.log(e);
    var subcategory_id = e.target.value;
    $.get( base_url + '/ajax-subsubcats?subcategory_id='+ subcategory_id,function(data){
        $('#subsubcategory_id').empty();
        /*$('#subcategory_id').append('<option value="">-- choose / اختر --</option>');*/
        $.each(data,function(index, subSubcatObj){
            $('#subsubcategory_id').append('<option value="'+subSubcatObj.id+'">'+ subSubcatObj.name +'</option>');
        });
    });
});
$('#country_id').on('change',function(e){
    console.log(e);
    var country_id = e.target.value;
    $.get( base_url + '/ajax-states?country_id='+ country_id,function(data){
        $('#state_id').empty();
        /*$('#city_id').append('<option value="">-- choose / اختر --</option>');*/
        $.each(data,function(index, stateObj){
            $('#state_id').append('<option value="'+stateObj.id+'">'+ stateObj.name+'</option>');
        });
    });
});
$('#state_id').on('change',function(e){
    console.log(e);
    var state_id = e.target.value;
    $.get( base_url + '/ajax-cities?state_id='+ state_id,function(data){
        $('#city_id').empty();
        /*$('#city_id').append('<option value="">-- choose / اختر --</option>');*/
        $.each(data,function(index, cityObj){
            $('#city_id').append('<option value="'+cityObj.id+'">'+ cityObj.name+'</option>');
        });
    });
});
/******************************/
$(document).ready(function() {
    $('.alert-danger').fadeIn('fast').delay(1200).fadeOut('slow');
    $('.alert-success').fadeIn('fast').delay(1200).fadeOut('slow');
});
$(document).ready(function() {
    var base_url = $('#base_url').val();
    $('.delete_event_image').click(function () {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: true
        })
        swalWithBootstrapButtons.fire({
            icon: 'question',
            title: 'Are You Sure ?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'YES',
            cancelButtonText: 'NO',
        }).then((result) => {
            if (result.value) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                var id = $(this).attr('object_id');
                var d_url = $(this).attr('delete_url');
                var elem = $(this).parent('td').parent('tr');

                $.ajax({
                    type: 'get',
                    url: '/admin' + d_url + id,
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('.image_class' + id).remove();
                        swalWithBootstrapButtons.fire({
                            icon: 'success',
                            title: 'Image Deleted Successfully',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }
                });
            } else if (
                // / Read more about handling dismissals below /
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    icon: 'error',
                    title: 'Canceled',
                    showConfirmButton: false,
                    timer: 1000
                });

            }
        })
    });
});
/********** start upload image ****************/
function readURL(input) {
    $('#blah').fadeIn();
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL2(input) {
    $('#blah2').fadeIn();
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah2')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
/********** end upload image ****************/

/*********** start upload multi images *************/
document.addEventListener("DOMContentLoaded", init, false);

//To save an array of attachments
var AttachmentArray = [];

//counter for attachment array
var arrCounter = 0;

//to make sure the error message for number of files will be shown only one time.
var filesCounterAlertStatus = false;

//un ordered list to keep attachments thumbnails
var ul = document.createElement("ul");
ul.className = "thumb-Images";
ul.id = "imgList";

function init() {
    //add javascript handlers for the file upload event
    document
        .querySelector("#files")
        .addEventListener("change", handleFileSelect, false);
}

//the handler for file upload event
function handleFileSelect(e) {
    $('.col-image_class').fadeOut();
    //to make sure the user select file/files
    if (!e.target.files) return;

    //To obtaine a File reference
    var files = e.target.files;

    // Loop through the FileList and then to render image files as thumbnails.
    for (var i = 0, f; (f = files[i]); i++) {
        //instantiate a FileReader object to read its contents into memory
        var fileReader = new FileReader();

        // Closure to capture the file information and apply validation.
        fileReader.onload = (function(readerEvt) {
            return function(e) {
                //Apply the validation rules for attachments upload
                ApplyFileValidationRules(readerEvt);

                //Render attachments thumbnails.
                RenderThumbnail(e, readerEvt);

                //Fill the array of attachment
                FillAttachmentArray(e, readerEvt);
            };
        })(f);

        // Read in the image file as a data URL.
        // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
        // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
        fileReader.readAsDataURL(f);
    }
    document
        .getElementById("files")
        .addEventListener("change", handleFileSelect, false);
}

//To remove attachment once user click on x button
jQuery(function($) {
    $("div").on("click", ".img-wrap .close", function() {
        var id = $(this)
            .closest(".img-wrap")
            .find("img")
            .data("id");

        //to remove the deleted item from array
        var elementPos = AttachmentArray.map(function(x) {
            return x.FileName;
        }).indexOf(id);
        if (elementPos !== -1) {
            AttachmentArray.splice(elementPos, 1);
        }

        //to remove image tag
        $(this)
            .parent()
            .find("img")
            .not()
            .remove();

        //to remove div tag that contain the image
        $(this)
            .parent()
            .find("div")
            .not()
            .remove();

        //to remove div tag that contain caption name
        $(this)
            .parent()
            .parent()
            .find("div")
            .not()
            .remove();

        //to remove li tag
        var lis = document.querySelectorAll("#imgList li");
        for (var i = 0; (li = lis[i]); i++) {
            if (li.innerHTML == "") {
                li.parentNode.removeChild(li);
            }
        }
    });
});

//Apply the validation rules for attachments upload
function ApplyFileValidationRules(readerEvt) {
    //To check file type according to upload conditions
    if (CheckFileType(readerEvt.type) == false) {
        alert(
            "The file (" +
            readerEvt.name +
            ") does not match the upload conditions, You can only upload jpg/png/gif files"
        );
        e.preventDefault();
        return;
    }

    //To check file Size according to upload conditions
    if (CheckFileSize(readerEvt.size) == false) {
        alert(
            "The file (" +
            readerEvt.name +
            ") does not match the upload conditions, The maximum file size for uploads should not exceed 1 MB"
        );
        e.preventDefault();
        return;
    }

    //To check files count according to upload conditions
    if (CheckFilesCount(AttachmentArray) == false) {
        if (!filesCounterAlertStatus) {
            filesCounterAlertStatus = true;
            alert(
                "You have added more than 6 files. According to upload conditions you can upload 6 files maximum"
            );
        }
        e.preventDefault();
        return;
    }
}

//To check file type according to upload conditions
function CheckFileType(fileType) {
    if (fileType == "image/jpeg") {
        return true;
    } else if (fileType == "image/png") {
        return true;
    } else if (fileType == "image/gif") {
        return true;
    } else {
        return false;
    }
    return true;
}

//To check file Size according to upload conditions
function CheckFileSize(fileSize) {
    if (fileSize < 1000000) {
        return true;
    } else {
        return false;
    }
    return true;
}

//To check files count according to upload conditions
function CheckFilesCount(AttachmentArray) {
    //Since AttachmentArray.length return the next available index in the array,
    //I have used the loop to get the real length
    var len = 0;
    for (var i = 0; i < AttachmentArray.length; i++) {
        if (AttachmentArray[i] !== undefined) {
            len++;
        }
    }
    //To check the length does not exceed 10 files maximum
    if (len > 5) {
        return false;
    } else {
        return true;
    }
}

//Render attachments thumbnails.
function RenderThumbnail(e, readerEvt) {
    var li = document.createElement("li");
    ul.appendChild(li);
    li.innerHTML = [
        '<div class="img-wrap"> <span class="close">&times;</span>' +
        '<img class="thumb" src="',
        e.target.result,
        '" title="',
        escape(readerEvt.name),
        '" data-id="',
        readerEvt.name,
        '"/>' + "</div>"
    ].join("");

    var div = document.createElement("div");
    div.className = "FileNameCaptionStyle";
    li.appendChild(div);
    div.innerHTML = [readerEvt.name].join("");
    document.getElementById("Filelist").insertBefore(ul, null);
}

//Fill the array of attachment
function FillAttachmentArray(e, readerEvt) {
    AttachmentArray[arrCounter] = {
        AttachmentType: 1,
        ObjectType: 1,
        FileName: readerEvt.name,
        FileDescription: "Attachment",
        NoteText: "",
        MimeType: readerEvt.type,
        Content: e.target.result.split("base64,")[1],
        FileSizeInBytes: readerEvt.size
    };
    arrCounter = arrCounter + 1;
}

/*********** end upload multi images *************/



