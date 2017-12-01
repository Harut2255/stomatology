//////////////////////////// Print Function  ///////////////////////
function printFunction() {
    window.print();
}

//////////////////////////// delete confirm  ///////////////////////
$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
    e.preventDefault();
    var $form=$(this);
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .on('click', '#delete-btn', function(){
            $form.submit();
        });
});



/////////////////// Canvas Table drug and drop  ///////////////////////
$(function() {
    $("#allfields li").draggable({
        appendTo: "body",
        helper: "clone",
        cursor: "select",
        revert: "invalid"
    });
    initDroppable($(".textarea"));
    function initDroppable($elements) {
        $elements.droppable({

            hoverClass: "textarea",
            addClass: ":not(.ui-sortable-helper)",
            drop: function(event, ui) {
                var $this = $(this);

                var tempid = ui.draggable.text();
                var dropText;
                dropText =   tempid;
                var droparea = $this;
                var range1 = $this.selectionStart;
                var range2 = $this.selectionEnd;
                var val = $this.val();
                var str1 = val.substring(0, range1);
                var str3 = val.substring(range1, val.length);
                $this.val(str1 + dropText )  ;
            }
        });
    }
});



// $(function() {
//     $("#allfields li").draggable({
//         appendTo: "body",
//         helper: "clone",
//         cursor: "select",
//         revert: "invalid"
//     });
//     initDroppable($(".textarea"));
//     function initDroppable($elements) {
//         $elements.droppable({
//             hoverClass: "textarea",
//             accept: ":not(.ui-sortable-helper)",
//             drop: function(event, ui) {
//                 var $this = $(this);
//
//                 var tempid = ui.draggable.text();
//                 var dropText;
//                 dropText = tempid;
//                 var droparea = document.getElementsByClassName('textarea');
//                 var range1 = droparea.selectionStart;
//                 var range2 = droparea.selectionEnd;
//                 var val = droparea.value;
//                 var str1 = val.substring(0, range1);
//                 var str3 = val.substring(range1, val.length);
//                 droparea.value = str1 + dropText + str3;
//             }
//         });
//     }
// });
