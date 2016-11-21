$('document').ready(function(){

//      AJAX search on Results page
//    $('.searchbar').keypress(function (e) {
//        if (e.which == 13) {
//    
//            $.ajax({
//                dataType: "json",
//                url: '/results',
//                data: {keyword: $('.searchbar').value()},
//                success: function (result) {
//                        console.log($user.name);
//                },
//                error: function(){
//                        console.log("No results.");
//                }
//            });
//            
//        }
//    });

    //  Real time search
        var $rows = $('#userinfo tr');
        $('.searchbar').keyup(function() {

            var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
            reg = RegExp(val, 'i'),
            text;

            $rows.show().filter(function() {
                text = $(this).text().replace(/\s+/g, ' ');
                return !reg.test(text);
            }).hide();
        });
        
    //  Delete user and remove it from list

        $('.btn-delete').click(function(){
            
            var id = $(this).val();
            var token = $(this).data('token');
            
            $.ajax({
                type: 'POST',
                url: '/laravel-exercise/public/index/'+id,
                data: {_method: 'delete', _token :token},
                success: function (data) {
                    console.log('Success:', data);
                    $('#'+id).remove();
                    $( "body" ).prepend( "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>The user has been deleted.</div>" );

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
        
});
    

