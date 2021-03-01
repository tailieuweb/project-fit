<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| HomeController
|-------------------------------------------------------------------------------
| @author: ptnhuan
| @id: LPTE03
| @date: 11/04/2019
| @location: B111 - TDC
| @copyright: Lampart
|
*/

use Illuminate\Http\Request;
use URL, Route, Redirect;
use Illuminate\Support\Facades\App;

use Foostart\Front\Controllers\FrontController;

//Models
use Foostart\Category\Models\Category;
use Foostart\Post\Models\Post;

class PostUserController extends FrontController {

    public $obj_post = NULL;        
    public $obj_category = NULL;

    public function __construct() {

        parent::__construct();

        //object item
        $this->obj_post = new Post();        
    }

    /**
     * Home page
     * @param Request $request
     * @return type
     */
    public function index(Request $request)
    {
        var_dump('home');
        die();

        $obj_sample = new Samples();
        $samples = $obj_sample->get_samples();
        $this->data = array(
            'request' => $request,
            'samples' => $samples
        );
        return view('sample::sample.index', $this->data);
    }
    
    /**
     * News 
     * List page
     */
    public function listNews(Request $request) {
         //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('news_list'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.news_list', $this->data_view);
    }
    
    /**
     * News
     * Detail page
     * @param type $name
     * @param type $id
     */
    public function detailNews($name, $id) {
         //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(            
            'assets' => $this->getAssetPage('news_detail'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.news_detail', $this->data_view);
    }
    
    /**
     * Personnel
     * List page
     */
    public function listPersonnel(Request $request) {
         //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('personnel_list'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.personnel_list', $this->data_view);
    }
    
    /**
     * Personnel
     * Detail page
     * @param type $name
     * @param type $id
     */
    public function detailPersonnel($name, $id) {
         //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'assets' => $this->getAssetPage('personnel_detail'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.personnel_detail', $this->data_view);
    }
    
    /**
     * Student
     * List page
     */
    public function listStudent(Request $request) {
         //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('student_list'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.student_list', $this->data_view);
    }
    
    
    /**
     * Student
     * Detail page
     * @param type $name
     * @param type $id
     */
    public function detailStudent($name, $id) {
         //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'assets' => $this->getAssetPage('student_detail'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.student_detail', $this->data_view);
    }
    
    /**
     * Thematic
     * List page
     */
    public function listThematic(Request $request){
        
        //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('thematic_list'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.thematic_list', $this->data_view);
    }
    
    /**
     * Thematic
     * Detail page
     * @param type $name
     * @param type $id
     */
    public function detailThematic($name, $id) {
         //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'assets' => $this->getAssetPage('thematic_detail'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.thematic_detail', $this->data_view);
    }
    
    /**
     * Other page
     * Detail other page
     * @param type $name     
     */
    public function detailOtherpage($name) {
         //init
        $user = $this->getUser();

        //Load list of categories
        $params = [
            'order' => [
                'category_order' => 'ASC',
            ],           
        ];

        //Get root product category
        $categories = $this->obj_category->getCategoriesByRef('admin/posts', $params);
        //Get posts by root category
        $posts = $this->obj_post->getItemsByCategories($categories);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'assets' => $this->getAssetPage('news_list'),
            'title' => trans('front.pages.title-home'),
            'items' => $posts,
            'categories' => $categories,
            'user' => $user
        ));

        return view($this->package_name.'::pages.news_list', $this->data_view);
    }

}