$('document').ready(function(){
    
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
});
    

