
(function($){ 

    $(document).ready(function(){

        var chambersEls = document.getElementsByClassName( 'read-more' ),
            max = chambersEls.length;
            stateHidden = "Reveal details";
            HTMLReveal = 'Reveal details<span class="dashicons dashicons-arrow-right-alt2"></span>';
            HTMLHide = 'Hide details<span class="dashicons dashicons-arrow-up-alt2"></span>';

        // add event listeners 
        for( var i = 0; i < max; i++ ) {

            chambersEls[i].addEventListener( 'click', toggleCardView, false );

        }        

        
        function toggleCardView ( e ) {

            e.preventDefault();

            console.log ( e.target );
            console.log ( stateHidden );
            console.log ( e.target.innerText );

            if ( e.target.innerText == stateHidden ) {
                e.target.innerHTML = HTMLHide;
            } else {
                e.target.innerHTML = HTMLReveal;
            }

            e.target.parentElement.nextElementSibling.classList.toggle ( 'hidden' );
 
            if ( e.target.parentElement.nextElementSibling.nextElementSibling ) {
                e.target.parentElement.nextElementSibling.nextElementSibling.classList.toggle ( 'chambers-list-hide-top-border' );
            }
            
        }

    });

})(jQuery);
