<?php
class Travel_booking_ctrl extends Main_ctrl
{
    public function index($req=null)
    {
        $req = obj($req);
      
        
        $meta_tags = "";
        $meta_desc = "";
        
        $GLOBALS['meta_seo'] = (object) array('title' => 'Booking', 'description' =>'Book you tour here', 'keywords' => 'booking, book now, travel booking');
        $context = (object) array(
            'page'=>'booking.php',
            'data' => (object) array(
                'req' => obj($req)
            )
        );
        $this->render_layout($context);
    }
}
