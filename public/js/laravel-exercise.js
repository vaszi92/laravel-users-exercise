$('document').ready(function(){
    
    $('.searchbar').keypress(function (e) {
        if (e.which == 13) {
    
            $.ajax({
                dataType: "json",
                url: '/results',
                data: {keyword: $('.searchbar').value()},
                success: function (result) {
                        console.log($user.name);
                },
                error: function(){
                        console.log("No results.");
                }
            });
            
        }
    });
    
});
    

