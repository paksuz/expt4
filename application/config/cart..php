<?php
 
class Cart extends Controller { // Our Cart class extends the Controller class
     
    function Cart()
    {
        parent::Controller(); // We define the the Controller class is the parent.  
    }
 
 function index()
{
    $data['peliculas'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products
}
}
/* End of file cart.php */
/* Location: ./application/controllers/cart.php */