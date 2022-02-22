<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set("display_errors",1);

error_reporting(E_ALL);

class Admin extends CI_Controller {

	public $M_Admin;

	public $M_Writer;

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->ci = get_instance();

		$this->load->model("M_Admin");
		$this->M_Admin = new M_Admin();

		$this->load->model("M_User");
		$this->M_User = new M_User();

		$this->load->model("M_Writer");
		$this->M_Writer = new M_Writer();

		$this->load->model("M_Article");
		$this->M_Article = new M_Article();

		$this->load->model("M_Author");
		$this->M_Author = new M_Author();

		$this->load->model("M_Pages");
		$this->M_Pages = new M_Pages();

		$this->load->model("M_Category");
		$this->M_Category = new M_Category();

		$this->load->model("M_Products");
		$this->M_Products = new M_Products();

		$this->load->model("M_Recipes");
		$this->M_Recipes = new M_Recipes();

		$this->load->model("M_Site");
		$this->M_Site = new M_Site();

		$this->load->model("M_Restaurant");
		$this->M_Restaurant = new M_Restaurant();

		$this->load->model("M_Columnist");
		$this->M_Columnist = new M_Columnist();

		$this->load->model("M_Events");
		$this->M_Events = new M_Events();
		
		$this->load->model("M_Plan");
		$this->M_Plan = new M_Plan();
		$this->load->model("M_Shop");
		$this->M_Shop = new M_Shop();
		$this->load->library('image_lib');
	}

	public function index()
	{
		$data = array();
		if($this->M_Admin->is_login())
		{
			$data['PageTitle'] = "Dashboard | ".SITE_NAME." | ADMIN ";
			$data['Writers'] = $this->M_Writer->getAllWriters();
			$data['Users'] = $this->M_User->getAllUsers();
			$data['Subs'] = $this->M_User->getSubscriber();
			$data['Events'] = $this->M_Events->getAllEvents();
			
			$data['Authors'] = $this->M_Author->getAllAuthors();
			$data['Columnist'] = $this->M_Columnist->getAllColumnist();
			$data['Recipe'] = $this->M_Recipes->getAllRecipes();
			$data['Restaurant'] = $this->M_Restaurant->getAllRestaurant();
			$data['Article'] = $this->M_Article->getAllArticle();

			$this->load->view("admin/dashboard", $data);
		}
		else
		{
			$data['PageTitle'] = "Admin Login | ".SITE_NAME;
			$this->load->view("admin/login", $data);
		}
		if ($_POST)
		{
			$LoginErrorMessage = $this->M_Admin->login($_POST['email'], $_POST['password'],$_POST['redirect']);
			$data['LoginErrorMessage'] = $LoginErrorMessage;
			if($data['LoginErrorMessage'])
			{
				$data['PageTitle'] = "Admin Login | ".SITE_NAME;
				$this->load->view("admin/login", $data);
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url()."admin");
	}
	public function setting()
	{
		if ($_POST)
		{
			$data['Message'] = $this->M_Admin->update($_POST);
			$data['Admin'] = $this->M_Admin->getDetail($this->session->userdata('Admin_Login'));
			$this->load->view("admin/setting",$data);
		}
		else
		{
			$data['Admin']=$this->M_Admin->getDetail($this->session->userdata('Admin_Login'));
			$this->load->view("admin/setting",$data);
		}
	}
	public function reset_password()
	{
		$this->session->sess_destroy();
		if ($_POST)
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			if ($this->form_validation->run() == FALSE) 
			{ 
				$data['LoginErrorMessage']=	validation_errors();
				$data['PageTitle'] = "Admin Reset Password | ".SITE_NAME;
				$this->load->view("admin/reset_password",$data);
			}
			else
			{
				$data['LoginErrorMessage']=$this->M_Admin->resetPassword($_POST['email']);
				$data['PageTitle'] = "Admin Reset Password | ".SITE_NAME;
				$this->load->view("admin/reset_password",$data);
			}
		}
		$data['PageTitle'] = "Admin Reset Password | ".SITE_NAME;
		$this->load->view("admin/reset_password",$data);
	}

	

	

	public function dashboard()
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		$data['Writers'] = $this->M_Writer->getAllWriters();
		$data['Users'] = $this->M_User->getAllUsers();
		$data['Authors'] = $this->M_Author->getAllAuthors();
		$data['Columnist'] = $this->M_Columnist->getAllColumnist();
		$data['Recipe'] = $this->M_Recipes->getAllRecipes();
		$data['Restaurant'] = $this->M_Restaurant->getAllRestaurant();
		$data['Article'] = $this->M_Article->getAllArticle();
		$data['Subs'] = $this->M_User->getSubscriber();
		$data['Events'] = $this->M_Events->getAllEvents();
		$data['PageTitle'] = "Dashboard | ".SITE_NAME." | ADMIN ";
		$this->load->view("admin/dashboard", $data);
	}

	

	public function manage_writer(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		$Writers = $this->M_Writer->getAllWriters();

		$data['Writers'] = $Writers;

		$data['PageTitle'] = "Manage Writer | ".SITE_NAME;

		$this->load->view("admin/writer/manage_writer", $data);

	}

	

	public function edit_writer($idWriter){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		if ($_POST){

			$this->M_Writer->updateWriter($idWriter, $_POST);

			redirect(base_url()."admin/manage_writer");

		}

		$data['WriterInfo'] = $this->M_Writer->getWriterInfo($idWriter);

		$this->load->view("admin/writer/edit_writer", $data);

	}



	public function delete_writer($idWriter){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		

		$this->M_Writer->deleteWriter($idWriter);

		redirect(base_url()."admin/manage_writer");

	}

	

	

	

	public function add_writer(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



			if ($_POST){

				$data['Message'] = $this->M_Writer->RegisterWriter($_POST);

				$this->load->view("admin/writer/add_writer",$data);

			}

			else{

					$this->load->view("admin/writer/add_writer");

				 }

			

	 }

	



/*	

Author Part For Admin	

	

*/

	public function manage_author(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$data['Authors'] = $this->M_Author->getAllAuthors();

		$data['PageTitle'] = "Manage Author | ".SITE_NAME;

		$this->load->view("admin/author/manage_author", $data);

	}

	

	public function edit_author($idAuthor){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		  if ($_POST){

			$this->M_Author->updateAuthor($idAuthor, $_POST);

			redirect(base_url()."admin/manage_author");

		}

		$data['AuthorInfo'] = $this->M_Author->getAuthorInfo($idAuthor);

		$data['PageTitle'] = "Edit Author | ".SITE_NAME;

		$this->load->view("admin/author/edit_author", $data);

	}



	public function delete_author($idAuthor){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Author->deleteAuthor($idAuthor);

		redirect(base_url()."admin/manage_author");

	}

	

	public function validate_author(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



	if($_POST){

			

			$this->load->library('form_validation');

			$this->form_validation->set_rules('FirstName', 'First Name', 'required');

			$this->form_validation->set_rules('LastName', 'Last Name', 'required');

			$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');

			if ($this->form_validation->run() == FALSE) { 

				 echo "<div class='alert alert-error'>".validation_errors()."</div>"; 

			} 

			else

			{

				return true;

			}

		}

	}

	

	

	

	

	

	public function add_author(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



			if($_POST){

			

				$data['Message'] = $this->M_Author->AddAuthor($_POST);

				$data['PageTitle'] = "Add Author | ".SITE_NAME;

				$this->load->view("admin/author/add_author",$data);

				

			}

			else

			{ 

			$data['PageTitle'] = "Add Author | ".SITE_NAME;

			$this->load->view("admin/author/add_author",$data); }

	 }





/*	

Columnist Part For Admin	

	

*/

	public function manage_columnist(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$Authors = $this->M_Columnist->getAllColumnist();

		$data['Authors'] = $Authors;

		$data['PageTitle'] = "Manage Columnist | ".SITE_NAME;

		$this->load->view("admin/columnist/manage_columnist", $data);

	}

	

	public function edit_columnist($idAuthor){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		if ($_POST){

			$this->M_Columnist->updateColumnist($idAuthor, $_POST);

			redirect(base_url()."admin/manage_columnist");

		}

		$data['AuthorInfo'] = $this->M_Columnist->getColumnistInfo($idAuthor);

		$data['PageTitle'] = "Edit Columnist | ".SITE_NAME;

		$this->load->view("admin/columnist/edit_columnist", $data);

	}



	public function delete_columnist($idAuthor){

				if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Columnist->deleteColumnist($idAuthor);

		redirect(base_url()."admin/manage_columnist");

	}

	

	public function add_columnist(){

			if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



			if($_POST){

				$data['MessageIns'] = $this->M_Columnist->AddColumnist($_POST);

				$data['PageTitle'] = "Add Columnist | ".SITE_NAME;

				$this->load->view("admin/columnist/add_columnist",$data);

			}

			else

			{ 

			$data['PageTitle'] = "Add Columnist | ".SITE_NAME;

			$this->load->view("admin/columnist/add_columnist",$data); }

	 }







/*	

Columnist Question Part For Admin	

	

*/

	public function manage_questions(){

				if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		

		$data['Authors'] = $this->M_Columnist->getAllQuestion();

		$data['PageTitle'] = "Manage Columnist | ".SITE_NAME;

		$this->load->view("admin/columnist/manage_question", $data);

	}

	

	public function edit_question($idAuthor){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		

		if ($_POST){

			$this->M_Columnist->updateQuestion($idAuthor, $_POST);

			redirect(base_url()."admin/manage_questions");

		}

		

		$data['Question']= $this->M_Columnist->getQuestionInfo($idAuthor);

		$data['Authors'] =$this->M_Columnist->getAllActiveColumnist();

		$data['PageTitle'] = "Edit Columnist | ".SITE_NAME;

		$this->load->view("admin/columnist/edit_question", $data);

	}



	public function delete_question($idAuthor){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Columnist->deleteQuestion($idAuthor);

		redirect(base_url()."admin/manage_questions");

	}

	

	public function add_questions(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



			if($_POST){

				$data['Messageupload'] = $this->M_Columnist->AddQuestion($_POST);

				$data['PageTitle'] = "Add Question | ".SITE_NAME;

				$data['Authors'] =$this->M_Columnist->getAllActiveColumnist();

				$this->load->view("admin/columnist/add_question",$data);

			}

			else

			{ 

			$data['PageTitle'] = "Add Columnist | ".SITE_NAME;

			$data['Authors'] =$this->M_Columnist->getAllActiveColumnist();

			$this->load->view("admin/columnist/add_question",$data); }

	 }







/*	

Article Part For Admin	

	

*/

	public function manage_article(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$data['Articles'] = $this->M_Article->getAllArticle();

		$this->load->view("admin/article/manage_article", $data);

	}
	
	public function manage_article_tag(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

	$article=$this->M_Article->getAllArticleFront();
			$tagx['tags'] = array();
			foreach ($article as $art):
			$tags = explode(',', $art->Tags);
				foreach ($tags as $tag): 
					$tagx['tags'][]=ucwords(strtolower(trim($tag)));
				endforeach;
			endforeach;


		//$data['Articles'] = $this->M_Article->getAllArticle();

		$this->load->view("admin/article/manage_article_tag", $tagx);

	}
	
	public function manage_recipe_tag(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

	$article=$this->M_Recipes->AllView();
			$tagx['tags'] = array();
			foreach ($article as $art):
			$tags = explode(',', $art->HashTags);
				foreach ($tags as $tag): 
					$tagx['tags'][]=ucwords(strtolower(trim($tag)));
				endforeach;
			endforeach;


		//$data['Articles'] = $this->M_Article->getAllArticle();

		$this->load->view("admin/article/manage_article_tag", $tagx);

	}	

	public function edit_article($idArticle){

		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if ($_POST)
		{
			$this->M_Article->updateArticle($idArticle, $_POST);
			redirect(base_url()."admin/manage_article");
		}
		$data['ArticleInfo'] = $this->M_Article->getArticleInfo($idArticle);
		$data['Authors'] = $this->M_Author->getAllActiveAuthors();
		$data['Category'] = $this->M_Category->getAllActiveCategoryArt();

		$this->load->view("admin/article/edit_article", $data);
	}

	

	 public function delete_article($idArticle)
	 {
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}

		$this->M_Article->deleteArticle($idArticle);
		redirect(base_url()."admin/manage_article");
	}

	public function add_article()
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if($_POST)
		{
			$data['Messageupload']= $this->M_Article->AddArticle($_POST);
			$data['Authors'] = $this->M_Author->getAllActiveAuthors();
			$data['Category'] = $this->M_Category->getAllActiveCategoryArt();
			$this->load->view("admin/article/add_article",$data);
		}
		else
		{
			$data['Authors'] = $this->M_Author->getAllActiveAuthors();
			$data['Category'] = $this->M_Category->getAllActiveCategoryArt();
			$this->load->view("admin/article/add_article",$data);
		}
	}

	 

	public function manage_article_cat(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$data['Articles'] = $this->M_Category->getAllCategoryArt();

		$this->load->view("admin/article/manage_category", $data);

	}

	

	public function edit_article_cat($idArticle)
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if ($_POST)
		{
			$this->M_Category->updateCategory_art($idArticle, $_POST);
			redirect(base_url()."admin/manage_article_cat");
		}

		$data['AuthorInfo'] = $this->M_Category->getCategoryInfo_art($idArticle);
		$this->load->view("admin/article/edit_category", $data);
	}

	

	public function delete_article_cat($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Category->deleteCategory_art($idPage);

		redirect(base_url()."admin/manage_article_cat");

	}

	

	public function add_article_cat(){
		if(!$this->session->userdata('Admin_Login'))
				{ $this->session->set_userdata('Redirect',current_url());
				  redirect(base_url()."admin"); }
				if($_POST)
				{
				$data['Message'] = $this->M_Category->AddCategory_art($_POST);
				$this->load->view("admin/article/add_category",$data);
				}
				else
				{
				$this->load->view("admin/article/add_category");
				}
	 }

	 public function manage_article_sub_cat($id){

		if(!$this->session->userdata('Admin_Login'))
				{ $this->session->set_userdata('Redirect',current_url());
				  redirect(base_url()."admin"); }
		$data['Articles'] = $this->M_Category->getAllSubCategoryArt($id);
		$this->load->view("admin/article/manage_sub_category", $data);
	}

	

	public function edit_article_sub_cat($id,$idArticle)
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if ($_POST)
		{
			$this->M_Category->updateSubCategory_art($idArticle, $_POST);
			redirect(base_url()."admin/manage_article_sub_cat/".$id);
		}

		$data['AuthorInfo'] = $this->M_Category->getArtSubcatInfo($idArticle);
		$this->load->view("admin/article/edit_sub_category", $data);
	}

	

	public function delete_article_sub_cat($id,$idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Category->deleteSubCategory_art($idPage);

		redirect(base_url()."admin/manage_article_sub_cat/".$id);

	}

	

	public function add_article_sub_cat($id){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

				if($_POST)

				{

				$data['Message'] = $this->M_Category->AddSubCategory_art($_POST);
				redirect(base_url()."admin/manage_article_sub_cat/".$id);
				

				}

				else

				{

				$this->load->view("admin/article/add_sub_category");

				}

				

			

	 }
 

	 

	 

	 

	 

	 

	 

	 

	 

	 

	 

	 

	 

	

	 public function pages(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$data['Pages'] = $this->M_Pages->getAllPages();

		$data['PageTitle'] = "Manage Pages | ".SITE_NAME;

		$this->load->view("admin/pages/manage_pages", $data);

	}

	

	public function add_page(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



			if ($_POST){

				$data['Message'] = $this->M_Pages->AddPage($_POST);

				$data['PageTitle'] = "Add New Page | ".SITE_NAME;

				$this->load->view("admin/pages/add_page",$data);

			}

			else

				{

				$data['PageTitle'] = "Add New Page | ".SITE_NAME;

				$this->load->view("admin/pages/add_page",$data);

				}

			

	 }

	

	 public function delete_page($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Pages->deletePage($idPage);

		redirect(base_url()."admin/pages");

	}

	

	 public function edit_page($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		if ($_POST){

			$this->M_Pages->updatePage($idPage, $_POST);

			redirect(base_url()."admin/pages");

		}

		$PageInfo = $this->M_Pages->getPageInfo($idPage);

		if($PageInfo)

		{

		$data['PageInfo'] = $PageInfo;

		$this->load->view("admin/pages/edit_page", $data);

		}

		else

		{

			show_404();

		}

	}

	

	

	/*	

 Part For Category

	

*/

	public function manage_category(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$data['Articles'] = $this->M_Category->getAllCategory();

		$this->load->view("admin/category/manage_category", $data);

	}

	

	public function edit_category($idArticle){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		if ($_POST){

			$this->M_Category->updateCategory($idArticle, $_POST);

			redirect(base_url()."admin/manage_category");

		}

		$data['AuthorInfo'] = $this->M_Category->getCategoryInfo($idArticle);

		$this->load->view("admin/category/edit_category", $data);

	}

	

	public function delete_category($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Category->deleteCategory($idPage);

		redirect(base_url()."admin/manage_category");

	}

	

	public function add_category(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



			if ($_POST){

				$data['Message'] = $this->M_Category->AddCategory($_POST);

				$this->load->view("admin/category/add_category",$data);

			}

			else{

				$this->load->view("admin/category/add_category");

			}

	 }

	 

	/*	

 Part For Products

	

*/

	public function manage_products(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		

		$data['Articles']= $this->M_Products->getAllProducts();

		$this->load->view("admin/products/manage_products", $data);

	}

	

	public function edit_products($idArticle){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		if ($_POST){

			$this->M_Products->updateProduct($idArticle, $_POST);

			redirect(base_url()."admin/manage_products");

		}

		$data['ProductInfo'] = $this->M_Products->getProductInfo($idArticle);

		$data['Authors'] = $this->M_Category->getAllCategory();

		$this->load->view("admin/products/edit_products", $data);

	}

	

	public function delete_products($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Category->deleteCategory($idPage);

		redirect(base_url()."admin/manage_products");

	}

	

	public function add_products(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



			if($_POST){

			

				$data['Message'] = $this->M_Products->AddProduct($_POST);

				$data['Authors'] = $this->M_Category->getAllCategory();

				$this->load->view("admin/products/add_products",$data);

				

			}

			else

			{

				$data['PageTitle']="Add Product";

				$data['Authors'] = $this->M_Category->getAllCategory();

				$this->load->view("admin/products/add_products",$data);

			}

	 }

	 

	

	 

/*	 

	 *****  ******   *****

	 ****** ******	***  **

	 **  ** **____	**

	 *****	**		**

	 ** **	******	***  **

	 **	 **	******	 *****	

	 

	 

	 

	*/ 

	 

	 

	 

	 

		/*	

 Part For Category

	

*/

	public function manage_recipes_cat(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$data['Articles'] = $this->M_Category->getAllCategory_rec();

		$this->load->view("admin/recipes/manage_recipes_cat", $data);

	}

	

	public function edit_category_rec($idArticle){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		if ($_POST){

			$this->M_Category->updateCategory_rec($idArticle, $_POST);

			redirect(base_url()."admin/manage_recipes_cat");

		}

		$data['AuthorInfo'] = $this->M_Category->getCategoryInfo_rec($idArticle);

		$this->load->view("admin/recipes/edit_category", $data);

	}

	

	public function delete_category_rec($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Category->deleteCategory_rec($idPage);

		redirect(base_url()."admin/manage_recipes_cat");

	}

	

	public function add_category_rec(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

				  

				  

		if($_POST)

		{

			$Message = $this->M_Category->AddCategory_rec($_POST);

			redirect(base_url()."admin/manage_recipes_cat"); 

			

		}

		else

		{

			$this->load->view("admin/recipes/add_category_rec");

		}		  



			

	 }

	 

	/*	

 Part For Products

Recipes	

*/

	public function manage_recipes(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		

		$data['Articles'] = $this->M_Recipes->getAllRecipes();

		$this->load->view("admin/recipes/manage_recipes", $data);

	}

	

	public function edit_recipes($idArticle){



		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		if ($_POST){

			$this->M_Recipes->updateRecipes($idArticle, $_POST);

			redirect(base_url()."admin/manage_recipes");

		}

		$data['Recipe'] = $this->M_Recipes->getRecipesInfo($idArticle);

		$data['Category'] = $this->M_Category->getAllCategory_rec();

		$data['Authors'] = $this->M_Author->getAllActiveAuthors();

		$this->load->view("admin/recipes/edit_recipes", $data);

	}

	

	public function delete_recipes($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Recipes->deleteRecipes($idPage);

		redirect(base_url()."admin/manage_recipes");

	}

	

	public function add_recipes(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

			if($_POST){

			

				$data['Messageupload'] = $this->M_Recipes->AddRecipes($_POST);

			   

				$data['Category'] = $this->M_Category->getAllCategory_rec();

				$data['Authors'] = $this->M_Author->getAllActiveAuthors();

				$this->load->view("admin/recipes/add_recipes",$data);

				

			}

			else

			{

				$data['Category'] = $this->M_Category->getAllCategory_rec();

				$data['Authors'] = $this->M_Author->getAllActiveAuthors();

				$this->load->view("admin/recipes/add_recipes",$data);

			}

	 }

	 

	 

	 

	 public function manage_restaurant(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		$data['Articles'] = $this->M_Restaurant->getAllRestaurant();

		$data['MetaTitle'] = "Manage Restaurants";

		$this->load->view("admin/restaurant/manage_restaurant", $data);

	}

	

	

	public function add_restaurant_regular(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

			if($_POST){

			$this->load->library('form_validation');

			$this->form_validation->set_rules('restaurantName', 'Restaurant Name', 'required');

			if ($this->form_validation->run() == FALSE) { 

				 echo "<div class='alert alert-error'>".validation_errors()."</div>"; 

			} 

			else

				{

			$data['Messageupload']= $this->M_Restaurant->AddRestaurant($_POST);

			$data['MetaTitle'] = "Add Restaurants";
						$data['Cities'] = $this->M_Restaurant->getAllCities();


			$this->load->view("admin/restaurant/add_restaurant",$data);

				}

			}

			else

			{

				$data['MetaTitle'] = "Add Restaurants";
								$data['Cities'] = $this->M_Restaurant->getAllCities();

				$this->load->view("admin/restaurant/add_restaurant",$data);

			}

	 }

	 

	 public function add_restaurant_premium(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

			if($_POST){

			$this->load->library('form_validation');

			$this->form_validation->set_rules('restaurantName', 'Restaurant Name', 'required');

			if ($this->form_validation->run() == FALSE) { 

				 echo "<div class='alert alert-error'>".validation_errors()."</div>"; 

			} 

			else

				{

				$data['Messageupload']=$this->M_Restaurant->AddRestaurantPremium($_POST);

				$data['MetaTitle'] = "Add Restaurants";
								$data['Cities'] = $this->M_Restaurant->getAllCities();
				$this->load->view("admin/restaurant/add_restaurant_premium",$data);

				}

			}

			else

			{

				$data['MetaTitle'] = "Add Restaurants";
								$data['Cities'] = $this->M_Restaurant->getAllCities();
				$this->load->view("admin/restaurant/add_restaurant_premium",$data);

			}

	 }

	 public function edit_restaurant($idArticle){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		if ($_POST){

			$this->M_Restaurant->updateRestaurant($idArticle, $_POST);

			redirect(base_url()."admin/manage_restaurant");

		}

		$data['Recipe'] = $this->M_Restaurant->getRestaurantInfo($idArticle);
		$data['Cities'] = $this->M_Restaurant->getAllCities();
		$data['MetaTitle'] = "Edit Restaurants";

		$this->load->view("admin/restaurant/edit_restaurant", $data);

	}

	 

	 

	 public function delete_restaurant($idPage){

		$this->M_Restaurant->deleteRestaurant($idPage);

		redirect(base_url()."admin/manage_restaurant");

	}

	 public function manage_rating(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		$data['Articles'] = $this->M_Restaurant->getAllRestaurantRating();

		$data['MetaTitle'] = "Manage Restaurants";

		$this->load->view("admin/restaurant/manage_rating", $data);

	}
	 public function delete_rating($idPage){

		$this->M_Restaurant->deleteReview($idPage);

		redirect(base_url()."admin/manage_rating");

	}
	 

	 

	 

/* SITE CONFIG */

public function site_config(){
	if(!$this->session->userdata('Admin_Login'))
	{ $this->session->set_userdata('Redirect',current_url());
				  redirect(base_url()."admin"); }

		if($_POST)
		{
			$this->M_Site->updateConfig($_POST);
			redirect(base_url()."admin/site_config");
		}
		else{
			$data['Articles'] = $this->M_Article->getAllArticle();
			$data['Recipes'] = $this->M_Recipes->getAllRecipes();
			$data['Products'] = $this->M_Products->getAllProducts();
			$data['Columnist'] = $this->M_Columnist->getAllActiveColumnist();
			$data['Config'] = $this->M_Site->getAllConfig();
			$data['PageTitle'] = "Config | ".SITE_NAME;
			$this->load->view("admin/site/config", $data);
		}

	}

public function notification(){
	if(!$this->session->userdata('Admin_Login'))
	{ $this->session->set_userdata('Redirect',current_url());
				  redirect(base_url()."admin"); }

		if($_POST)
		{
			$this->M_Site->updateConfigNot($_POST);
			redirect(base_url()."admin/notification");
		}
		else{
			$data['Config'] = $this->M_Site->getAllConfigNot();
			$data['PageTitle'] = "Config | ".SITE_NAME;
			$this->load->view("admin/site/notitication", $data);
		}

	}


public function advertisement_config(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		if($_POST)

		{

			$this->M_Site->updateAddConfig($_POST);

			redirect(base_url()."admin/advertisement_config");

		}

		else{

			$data['Config'] = $this->M_Site->getAllAddConfig();

			$data['PageTitle'] = "Config | ".SITE_NAME;

			$this->load->view("admin/site/config_add", $data);

		}

	}

	

	public function seo(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		if($_POST)

		{

			$this->M_Site->updateSeoConfig($_POST);

			redirect(base_url()."admin/seo");

		}

		else{

			$data['Home'] = $this->M_Site->getSeo('home');
			$data['Contact'] = $this->M_Site->getSeo('contact');
			$data['About'] = $this->M_Site->getSeo('about');
			$data['Advt'] = $this->M_Site->getSeo('advt');
			$data['Recp'] = $this->M_Site->getSeo('alwayshungry');
			$data['Rest'] = $this->M_Site->getSeo('restaurant');
			$data['News'] = $this->M_Site->getSeo('newsletter');
			$data['Eve'] = $this->M_Site->getSeo('events');
			$data['PageTitle'] = "Config Seo | ".SITE_NAME;

			$this->load->view("admin/site/seo", $data);

		}

	}

	

	

	public function menu(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		if($_POST)

		{

			$this->M_Site->updateMenuConfig($_POST);

			redirect(base_url()."admin/menu");

		}

		else{

			$data['Config'] = $this->M_Site->getAllMenuConfig();

			$data['PageTitle'] = "Config | ".SITE_NAME;

			$this->load->view("admin/site/config_menu", $data);

		}

	}

	

	public function users(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		

			$data['Users'] = $this->M_User->getAllUsers();

			$data['PageTitle'] = "Manage Users | ".SITE_NAME;

			$this->load->view("admin/users/manage_users", $data);

		

	}

	

	public function user_ban($id){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

				  

			

			$this->M_User->Bann($id);

				redirect(base_url()."admin/users");  

		

		

	}

	public function user_activate($id){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

				  

			

			$this->M_User->unBann($id);

		redirect(base_url()."admin/users");

		

	}

	

	

	public function subscriber(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

		

			$data['Users'] = $this->M_User->getSubscriber();

			$data['PageTitle'] = "Manage Subscriber | ".SITE_NAME;

			$this->load->view("admin/users/manage_subs", $data);

		

	}

	

	

	

	public function events(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$data['Pages'] = $this->M_Events->getAllEvents();

		$data['PageTitle'] = "Manage Events | ".SITE_NAME;

		$this->load->view("admin/events/manage_events", $data);

	}

	

	public function add_event(){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



			if (!$_POST){

				$data['PageTitle'] = "Add New Event | ".SITE_NAME;

				$this->load->view("admin/events/add_event",$data);

			}

			else{

				$this->M_Events->addEvent($_POST);

				redirect(base_url()."admin/events");

				}

			

	 }

	

	 public function delete_event($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }



		$this->M_Events->deleteEvent($idPage);

		redirect(base_url()."admin/events");

	}

	

	 public function edit_event($idPage){

		if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."events"); }



		if ($_POST){

			$this->M_Events->updateEvent($idPage, $_POST);

			redirect(base_url()."admin/events");

		}

		$PageInfo = $this->M_Events->getEventdetail($idPage);

		if($PageInfo)

		{

		$data['PageInfo'] = $PageInfo;

		$this->load->view("admin/events/edit_event", $data);

		}

		else

		{

			show_404();

		}

	}

	

	function ExportCSV()

    {

	if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

				  else

				  {

	//	$this->load->dbutil();

	//	$this->load->helper('file');

	//	$this->load->helper('download');

	//	$delimiter = ",";

//		$newline = "\r\n";

		$filename = "newsletter_".date('d_m_y_h_i').".csv";

	//	$query = "SELECT * FROM newslatter";

		$result = $this->M_User->getSubscriber();

//		$data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
		
		

//		force_download($filename, $data);
       // file name
        
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
 
        // file creation
        $file = fopen('php://output', 'w');
 
        $header = array("Name","Email","Sub For","Sub On");
        fputcsv($file, $header);
 
        foreach ($result as $line){
            //$Ldate = new DateTime($line->subOn);
            $subf= "";
            if($line->type_id==0)
            {  $subf= "Both";}
            if($line->type_id==1)
            {  $subf= "Vegan News & More";}
            if($line->type_id==2)
            {  $subf= "Vegan Recipes";}
            
            fputcsv($file,array($line->Name,$line->Email,$subf,$line->subOn));
        }
 
        fclose($file);
        exit;

				  }


}

function ExportArticle()

    {

	if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

				  else

				  {

	

		$filename = "article_".date('d_m_y_h_i').".csv";

		$result = $this->M_Article->getAllArticle();


        
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        $file = fopen('php://output', 'w');
 
        $header = array("Article Name","Article Author","Category","Tags","Published","Featured","Views");
        fputcsv($file, $header);
 
        foreach ($result as $line){
            //$Ldate = new DateTime($line->subOn);
            $status= ""; $Featured ="";
            if($line->isPublished==1)
			{	$status ="Yes"; }
			else { $status ="No";	}
									
		if($line->Featured==1)
		{	$Featured ="Yes"; }
		else { $Featured ="No";	}
	    $catTitle='';
		$cat = $this->M_Category->getCategoryInfo_art($line->category);
		if($cat){$catTitle=$cat->CategoryTitle;}
            
            fputcsv($file,array($line->PageTitle,$line->FirstName.' '.$line->LastName ,$catTitle,$line->Tags,$status,$Featured,$line->Views));
        }
 
        fclose($file);
        exit;

	 }


}

function ExportRecipes()

    {

	if(!$this->session->userdata('Admin_Login'))

				{ $this->session->set_userdata('Redirect',current_url());

				  redirect(base_url()."admin"); }

				  else

				  {

	

		$filename = "Recipe_".date('d_m_y_h_i').".csv";

		$result = $this->M_Recipes->getAllRecipes();


        
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        $file = fopen('php://output', 'w');
 
        $header = array("Recipe Name","Recipe By","Category","Tags","Published","View");
        fputcsv($file, $header);
 
        foreach ($result as $line){
            $cat=$this->m_category->getCategoryInfo_rec($line->Category);
			if($line->isActive==1){$status ="Yes";}else { $status ="No";}
            
            fputcsv($file,array($line->PageTitle,$line->FirstName.' '.$line->LastName ,$cat->CategoryTitle,$line->HashTags,$status,$line->Views));
        }
 
        fclose($file);
        exit;

	 }


}

	public function manage_cities()
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		$data['Cities'] = $this->M_Restaurant->getAllCities();

		$this->load->view("admin/cities/manage_cities", $data);
	}
	
	public function add_city()
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if($_POST)
		{
			$data['Message'] = $this->M_Restaurant->Addcity($_POST);
			$this->load->view("admin/cities/add_city",$data);
		}
		else
		{
			$this->load->view("admin/cities/add_city");
		}
	}

	public function edit_city($id)
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if ($_POST)
		{
			$this->M_Restaurant->updateCity($id, $_POST);
			redirect(base_url()."admin/manage_cities");
		}
		$data['City'] = $this->M_Restaurant->getCityById($id);
		$this->load->view("admin/cities/edit_city", $data);
	}

	public function delete_city($idPage)
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		$this->M_Restaurant->deleteCity($idPage);
		redirect(base_url()."admin/manage_cities");
	}
	public function add_images($id)
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}	
		if ($_POST)
		{
			if ($this->M_Restaurant->addImagesToRestaurant($id, $_POST))
			{
				$data['Messageupload'] = "Images Uploaded Succesfully";
				$data['Images'] = $this->M_Restaurant->getAllImagesByRestaurantId($id);
				$this->load->view('admin/restaurant/add_images', $data);
			}
			else
			{
				$data['Messageupload'] = "Error Uploading Images";
				$data['Images'] = $this->M_Restaurant->getAllImagesByRestaurantId($id);
				$this->load->view('admin/restaurant/add_images', $data);
			}
		}
		else
		{
			$data['Images'] = $this->M_Restaurant->getAllImagesByRestaurantId($id);
			$this->load->view('admin/restaurant/add_images', $data);
		}
	}
	public function delete_restaurant_image($idPage,$idRest)
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}

		$this->M_Restaurant->deleteRestaurantImage($idPage);
		redirect(base_url()."admin/add_images/".$idRest);
	}

	public function manage_video()
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		$data['Videos'] = $this->M_Article->getAllVideos();

		$this->load->view("admin/video/manage_video", $data);
	}

	public function add_video()
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if($_POST)
		{
			$data['Messageupload']= $this->M_Article->AddVideo($_POST);
			$data['Authors'] = $this->M_Author->getAllActiveAuthors();
			$data['Category'] = $this->M_Category->getAllCategoryArt();
			$this->load->view("admin/video/add_video",$data);
		}
		else
		{
			$data['Authors'] = $this->M_Author->getAllActiveAuthors();
			$data['Category'] = $this->M_Category->getAllCategoryArt();
			$this->load->view("admin/video/add_video",$data);
		}
	}

	public function edit_video($idArticle)
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if ($_POST)
		{
			$this->M_Article->updateVideo($idArticle, $_POST);
			redirect(base_url()."admin/manage_video");
		}
		$data['ArticleInfo'] = $this->M_Article->getVideoById($idArticle);
		$data['Authors'] = $this->M_Author->getAllAuthors();
		$data['Category'] = $this->M_Category->getAllCategoryArt();

		$this->load->view("admin/video/edit_video", $data);
	}
	public function delete_video($idArticle)
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}

		$this->M_Article->deleteArticle($idArticle);
		redirect(base_url()."admin/manage_video");
	}

	public function add_tags()
	{
		if(!$this->session->userdata('Admin_Login'))
		{
			$this->session->set_userdata('Redirect',current_url());
			redirect(base_url()."admin"); 
		}
		if ($_POST)
		{
			$this->M_Site->addTags($_POST);
			$data['tags'] = $this->M_Site->getAllTags();
			$this->load->view("admin/site/add_tags", $data);
		}
		else
		{
			$data['tags'] = $this->M_Site->getAllTags();
			$this->load->view("admin/site/add_tags", $data);
		}
	}
	
		public function crop_all()
		{
			$this->db->select('*');
			$this->db->from('article');
			$this->db->where("type", 1);
			$Query = $this->db->get();
			if ($Query->num_rows > 0)
			{
				$result= $Query->result();
			}
			$count=0;
			foreach($result as $rs)
			{
			$count++;
			$this->M_Article->thumb($rs->FeaturedImage);
			}
			//echo $rs->FeaturedImage;
			//$this->M_Article->crop($rs->FeaturedImage);
			echo $count;
			}


		public function crop_allR()
		{
			$this->db->select('*');
			$this->db->from('recepie');
			//$this->db->where("type", 1);
			$Query = $this->db->get();
			if ($Query->num_rows > 0)
			{
				$result= $Query->result();
			}
			$count=0;
			foreach($result as $rs)
			{
			$count++;
			$this->M_Recipes->crop($rs->FeaturedImage);
			}
			//echo $rs->FeaturedImage;
			//$this->M_Article->crop($rs->FeaturedImage);
			echo $count;
	}
	
	
	
     public function home_banners()
	{
		  $data['MetaTitle'] = "Home Banners | ".SITE_NAME;
		  $data['Banners'] = $this->M_Site->getAllBanner();
		  $this->load->view("admin/site/manage_banner", $data);
	} 

		/*public function home_banners(){
		if(!$this->session->userdata('Admin_Login'))
		{ $this->session->set_userdata('Redirect',current_url());
					  redirect(base_url()."admin"); }
	
			if($_POST)
			{
				$this->M_Site->updateConfig($_POST);
				redirect(base_url()."admin/site_config");
			}
			else{
				$data['Articles'] = $this->M_Article->getAllArticle();
				$data['Recipes'] = $this->M_Recipes->getAllRecipes();
				
				$data['Config'] = $this->M_Site->getAllConfig();
				$data['PageTitle'] = "Home Banners  | ".SITE_NAME;
				$this->load->view("admin/site/home_banner", $data);
			}
	
		}*/
	public function editbanner($id)
	{
		
		$data['MetaTitle'] = "Edit Home Banner | ".SITE_NAME;
		if($_POST)
		{
			$this->M_Site->UpdateBanner($id,$_POST);
		}
		$data['Banner'] = $this->M_Site->getBanner($id);
		$this->load->view("admin/site/edit_banner", $data);
	}
	public function addbanner()
	{
		
		$data['MetaTitle'] = "Add Home Banner | ".SITE_NAME;
		if($_POST)
		{
			$this->M_Site->AddBanner($_POST);
			redirect(base_url()."admin/home_banners"); 
		}
		$this->load->view("admin/site/add_banner", $data);
	}
	public function deletebanner($id)
	{
		$this->M_Site->DeleteBanner($id);
		redirect(base_url()."admin/home_banners"); 
	} 
	
	public function subscription()
	{
		  $data['PageTitle'] = "Manage Plans | ".SITE_NAME;
		  $data['Plans'] = $this->M_Plan->getAllPlans();
		  $this->load->view("admin/subscription/manage", $data);
	}
	public function add_plan()
	{
		
		$data['PageTitle'] = "Add Plan | ".SITE_NAME;
		if($_POST)
		{
			$this->M_Plan->AddPlan($_POST);
			redirect(base_url()."admin/subscription"); 
		}
		$this->load->view("admin/subscription/add", $data);
	}
	public function edit_plan($id)
	{
		  $data['PageTitle'] = "Edit Plans | ".SITE_NAME;
		  if($_POST)
		  {
			$this->M_Plan->UpdatePlan($id,$_POST); 
			redirect(base_url()."admin/subscription"); 
		  }
		  
		  
		  $data['Plan'] = $this->M_Plan->getPlanInfo($id);
		  $this->load->view("admin/subscription/edit", $data);
	}
	public function delete_plan($id)
	{
			$this->M_Plan->deletePlan($id); 
			redirect(base_url()."admin/subscription"); 
		  
	}
	
	public function testimonials()
	{
		  $data['PageTitle'] = "Manage Plans | ".SITE_NAME;
		  $data['Testis'] = $this->M_Site->getAllTesti();
		  $this->load->view("admin/testimonials/manage", $data);
	}
	public function add_testim()
	{
		
		$data['PageTitle'] = "Add Plan | ".SITE_NAME;
		if($_POST)
		{
			$this->M_Site->AddTesti($_POST);
			redirect(base_url()."admin/testimonials"); 
		}
		$this->load->view("admin/testimonials/add", $data);
	}
	public function edit_testim($id)
	{
		  $data['PageTitle'] = "Edit Plans | ".SITE_NAME;
		  if($_POST)
		  {
			$this->M_Site->UpdateTesti($id,$_POST); 
			redirect(base_url()."admin/testimonials"); 
		  }
		  
		  
		  $data['Testi'] = $this->M_Site->getTestiInfo($id);
		  $this->load->view("admin/testimonials/edit", $data);
	}
	public function delete_testim($id)
	{
			$this->M_Site->deleteTesti($id); 
			redirect(base_url()."admin/testimonials"); 
		  
	}
	
	public function online_course()
	{
		  $data['PageTitle'] = "Manage Course | ".SITE_NAME;
		  $data['Courses'] = $this->M_Shop->getAllCourses();
		  $this->load->view("admin/online_course/manage", $data);
	}
	public function add_course()
	{
		
		$data['PageTitle'] = "Add Course | ".SITE_NAME;
		if($_POST)
		{
			$this->M_Shop->AddCourses($_POST);
			redirect(base_url()."admin/online_course"); 
		}
		$this->load->view("admin/online_course/add", $data);
	}
	public function edit_course($id)
	{
		  $data['PageTitle'] = "Edit Course | ".SITE_NAME;
		  if($_POST)
		  {
			$this->M_Shop->UpdateCourse($id,$_POST); 
			redirect(base_url()."admin/online_course"); 
		  }
		  
		  
		  $data['Course'] = $this->M_Shop->getCourseInfo($id);
		  $this->load->view("admin/online_course/edit", $data);
	}
	public function delete_course($id)
	{
			$this->M_Shop->deleteCourse($id); 
			redirect(base_url()."admin/online_course"); 
		  
	}
	public function online_webinar()
	{
		  $data['PageTitle'] = "Manage Webinar | ".SITE_NAME;
		  $data['Webinars'] = $this->M_Shop->getAllWebinars();
		  $this->load->view("admin/webinar/manage", $data);
	}
	public function add_webinar()
	{
		
		$data['PageTitle'] = "Add Webinar | ".SITE_NAME;
		if($_POST)
		{
			$this->M_Shop->AddWebinar($_POST);
			redirect(base_url()."admin/online_webinar"); 
		}
		$this->load->view("admin/webinar/add", $data);
	}
	public function edit_webinar($id)
	{
		  $data['PageTitle'] = "Edit Webinar | ".SITE_NAME;
		  if($_POST)
		  {
			$this->M_Shop->UpdateWebinar($id,$_POST); 
			redirect(base_url()."admin/online_webinar"); 
		  }
		  
		  
		  $data['Webinar'] = $this->M_Shop->getWebinarInfo($id);
		  $this->load->view("admin/webinar/edit", $data);
	}
	public function delete_webinar($id)
	{
			$this->M_Shop->deleteWebinar($id); 
			redirect(base_url()."admin/online_webinar"); 
		  
	}
	
	
	public function getAllSubCategoryArt($id){
        $this->db->select('*');
        $this->db->from('art_sub_category');
        $this->db->where('parent_cat',$id);

        $Query = $this->db->get();
        
        if ($Query->num_rows() > 0){
            echo json_encode($Query->result());
        }
    }
	
	


}