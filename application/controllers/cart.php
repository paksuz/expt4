<?php
 
class Cart extends Controller { // Our Cart class extends the Controller class
     
    function Cart()
    {
        parent::Controller(); // We define the the Controller class is the parent.  
        $this->load->model('cart_model'); // Load our cart model for our entire class
    }

    function index()
{
    $data['peliculas'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products
     
    $data['content'] = 'cart/peliculas'; // Select our view file that will display our products
    $this->load->view('index', $data); // Display the page with the above defined content
}
 
}
/* End of file cart.php */
/* Location: ./application/controllers/cart.php */