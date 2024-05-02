<?php 

    function get_copyright(){
        
        $copyright = "
            <div class = 'copyright'>	
		        <div class = 'copyright-left-side'>©" 
                    . date('Y') . 
                    " All rights reserved. 
                    <strong class='strong-cp'>STORM</strong>
                    <strong class='strong-light'>BRAND</strong>
                </div>
		        <div class = 'copyright-right-side'>
			        <a href='./' target='_blank' class='footer-link underline'>ACCESIBILITY</a>
			        <a href='./' target='_blank' class='footer-link-copyright underline'>PRIVACY POLICY</a>
                    <a href='./' target='_blank' class='footer-link-copyright underline'>TERMS & CONDITIONS</a>
		        </div>
	        </div> 
        ";

        return $copyright;
    }
?>