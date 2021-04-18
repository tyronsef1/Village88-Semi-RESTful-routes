<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function index()
	{
        // $this->output->enable_profiler(TRUE); //enables the profiler
        $this->load->model("Product"); //loads the model
        $view_data['products'] = $this->Product->get_all_products();  //calls the get_course_by_id method
		$this->load->view('products/products.php', $view_data);
	}
	public function new()
	{
		$this->load->view('products/new.php');
	}
	public function create()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules("description", "Description", "required");
		$this->form_validation->set_rules("price", "Price", "required");
		if($this->form_validation->run() === FALSE)
		{
			$this->view_data["errors"] = validation_errors();
			echo validation_errors();
		}
		else
		{
			$this->load->model("Product");
			$product_details = array(
				"name" => $this->input->post('name'),
				"description" => $this->input->post('description'),
				"price" => $this->input->post('price')
			); 
			$add_product = $this->Product->add_product($product_details);
			if($add_product === TRUE) {
				redirect('products');
			}
		}
	}
	public function show($id)
	{
		$this->load->model("Product");
		$product = $this->Product->get_product_by_id($id);
		$this->load->view('products/show.php', $product);
	}
	public function edit($id)
	{
		$this->load->model("Product");
		$product = $this->Product->get_product_by_id($id);
		$this->load->view('products/edit.php', $product);
	}
	public function update($id)
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules("description", "Description", "required");
		$this->form_validation->set_rules("price", "Price", "required");
		if($this->form_validation->run() === FALSE)
		{
			$this->view_data["errors"] = validation_errors();
			echo validation_errors();
		}
		else
		{
			$this->load->model("Product");
			$product_details = array(
				"id" => $id,
				"name" => $this->input->post('name'),
				"description" => $this->input->post('description'),
				"price" => $this->input->post('price')
			); 
			$update_product = $this->Product->update_product($product_details);
			if($update_product === TRUE) {
				redirect('products');
			}
		}
	}
	public function destroy($id)
	{
		$this->load->model("Product");
		$delete_product = $this->Product->destroy_product($id);
		if($delete_product === TRUE) {
			redirect('products');
		}
	}
}
