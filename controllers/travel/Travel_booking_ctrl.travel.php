<?php
class Travel_booking_ctrl extends Main_ctrl
{
    public function index($req=null)
    {
        $req = obj($req);
          
        $meta_tags = "";
        $meta_desc = "";
        
        if (isset($req->pkgid)) {
            $pkg = $this->get_pckage_details($req->pkgid);
        }

        $GLOBALS['meta_seo'] = (object) array('title' => 'Booking', 'description' =>'Book you tour here', 'keywords' => 'booking, book now, travel booking');
        $context = (object) array(
            'page'=>'booking.php',
            'data' => (object) array(
                'req' => obj($req),
                'pkg' => $pkg??null
            )
        );
        $this->render_layout($context);
    }
    function get_pckage_details($id){
        $db = new Dbobjects;
        return $db->showOne("select * from content where content.id = $id and content_group='package'");
    }
}
