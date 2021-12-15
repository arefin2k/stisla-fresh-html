(function($){

    "use strict";

    $(".colorpickerinput").colorpicker({
        format: 'hex',
        component: '.input-group-append',
    });

    $(".inputtags").tagsinput('items');

    $(document).ready(function() {
        $('#example1').DataTable();
    });

})(jQuery);