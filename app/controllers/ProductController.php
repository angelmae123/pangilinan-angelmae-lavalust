<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: ProductController
 * 
 * Automatically generated via CLI.
 */
class ProductController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function product() {
        $products = $this->ProductModel->all();
        $this->call->view('productViews', ['products' => $products]);
    }
   public function create()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = [
            'product_name' => $this->request->post('product_name'),
            'description' => $this->request->post('description'),
            'price' => $this->request->post('price'),
            'quantity' => $this->request->post('quantity')
        ];

        $this->ProductModel->insert($data);

        redirect('/productViews');

    } else {

        $this->call->view('createProd');
    }
}
    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'product_name' => $this->request->post('product_name'),
                'description' => $this->request->post('description'),
                'price' => $this->request->post('price'),
                'quantity' => $this->request->post('quantity')
            ];

            $this->ProductModel->update($id, $data);

            redirect('/productViews');

        } else {

            $product = $this->ProductModel->find($id);

            $this->call->view('updateProd', [
                'product' => $product
            ]);
        }
    }

    public function delete($id)
    {
        $this->ProductModel->delete($id);
        redirect('/productViews');
    }
}