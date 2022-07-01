<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class pageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_show_blogs_page()
    {
        $response = $this->get('/blogs');

        $response->assertStatus(200);
    }
    
    public function test_show_blogs_detail_page()
    {
        $response = $this->get('/blogs/18');

        $response->assertStatus(200);
    }

    public function test_show_categories_page()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }


    public function test_show_categories_detail_page()
    {
        $response = $this->get('/categories/6');

        $response->assertStatus(200);
    }

    public function test_show_author_page()
    {
        $response = $this->get('/author/6');

        $response->assertStatus(200);
    }

    public function test_show_search_page()
    {
        $response = $this->get('/blogs/search/list');

        $response->assertStatus(200);
    }

    public function test_show_dashboard_page()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_show_dashboard_blog_page()
    {
        $response = $this->get('/dashboard/blogs');

        $response->assertStatus(200);
    }

    public function test_show_dashboard_blog_add_page()
    {
        $response = $this->get('/dashboard/blogs/create');

        $response->assertStatus(200);
    }

    public function test_show_dashboard_blog_edit_page()
    {
        $response = $this->get('/dashboard/blogs/17/edit');

        $response->assertStatus(200);
    }

    public function test_show_dashboard_blog_detail_page()
    {
        $response = $this->get('/dashboard/blogs/17');

        $response->assertStatus(200);
    }


  
}
