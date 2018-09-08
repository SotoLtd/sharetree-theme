
(function($){ 

    $(document).ready(function(){

        var chambersEls = document.getElementsByClassName( 'read-more' ),
            max = chambersEls.length;

        // add event listeners 
        for( var i = 0; i < max; i++ ) {

            chambersEls[i].addEventListener( 'click', toggleCardView, false );

        }        

        
        function toggleCardView ( e ) {

            e.preventDefault();

            // next element sibling should be a section element
            e.target.nextElementSibling.classList.toggle ( 'hidden' );

        }

    });

})(jQuery);
