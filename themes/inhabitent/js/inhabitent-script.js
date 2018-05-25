(function ($){
    // $('body').append('hello');
    //search-field" for input, search-submit for button

    $('.search-submit').on('click',function (e){
                e.preventDefault();

                // $('.search-field').hide();
            
                $('.search-field').toggleClass('search-field-focus');
                $('.search-field').focus();
                $('.search-field').on('blur', function(){
                    $('.search-field').toggleClass('search-field-focus');
                }
            )
                // focus on the input field 


                // have an event for the enter key so we can search e.g. event keycodes check out css trcks for this

                // .search-field .focus 
    });

})(jQuery);