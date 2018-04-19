<?php
use PHPUnit\Framework\TestCase;

class BlogspotTest extends TestCase
{
    public $url = 'http://khoacongnghethongtin.blogspot.com/2016/12/download-quan-ly-chuyen-nghiep-cho.html';
	public function testGetInfo(){
	    try{
            $url = 'http://khoacongnghethongtin.blogspot.com';
            $blog = new \Dok123\BlogReader\Adapters\Blogspot($url);
            $info = $blog->getInfo();
            if (isset($info['name']) && isset($info['description']) && isset($info['url'])){
                if (!empty($info['name']) && !empty($info['description']) && !empty($info['url'])){
                    $this->assertTrue(true);
                }else{
                    $this->assertTrue(false);
                }
            }else{
                $this->assertTrue(false);
            }
        }catch (Exception $exception){
	        echo $exception->getMessage();
	        $this->assertTrue(false);
        }

    }

    /** *********************** posts() ****************************** */

    /**
     * Lấy bài viết từ trang hiện tại
     */
    public function testPostsNormal(){
        $url = 'http://khoacongnghethongtin.blogspot.com';
        $blog = new \Dok123\BlogReader\Adapters\Blogspot($url);
        $posts = $blog->posts();
        foreach ($posts as $post){
            $this->assertEquals('blogger#post', $post['kind']);
        }
    }

    public function testPostsFromPage(){
        $url = 'http://khoacongnghethongtin.blogspot.com';
        $page_token ='CgkIAhjh9cW7xCoQ17mr6sSivNp6';
        $blog = new \Dok123\BlogReader\Adapters\Blogspot($url);
        $posts = $blog->posts([], $page_token);
//        echo $blog->current_page();
        $this->assertEquals($page_token, $blog->current_page());
        foreach ($posts as $post){
            $this->assertEquals('blogger#post', $post['kind']);
        }
    }



    public function testPostsWithPerPage(){
        $per_page = 2;
        $url = 'http://khoacongnghethongtin.blogspot.com';
        $blog = new \Dok123\BlogReader\Adapters\Blogspot($url);
        $posts = $blog->posts([], [], 2);
        $this->assertCount($per_page, $posts);
    }

    /**
     * Lấy bài viết có lọc theo fields
     */
    public function testPostsFromFields(){
        $url = 'http://khoacongnghethongtin.blogspot.com/';
        $blog = new \Dok123\BlogReader\Adapters\Blogspot($url);
        $fields = [
            'id',
            'title',
            'published',
            'updated',
        ];
        $posts = $blog->posts($fields);
        foreach ($posts as $key => $post){
            $number_true = 0;
            foreach ($fields as $field){
                if (isset($post[$field])){
                    $number_true += 1;
                }
            }
            if ($number_true == count($fields)){
                $this->assertTrue(true);
            }else{
                $this->assertTrue(false);
            }
        }
    }

    /**
     * Đọc trang tiếp theo
     */

    public function testNext(){
        $url = '';
        $blog = new \Dok123\BlogReader\Adapter\BlogReader($url);
        $next = $blog->next();
    }

    public function testCurrentPage(){
        $url = 'http://khoacongnghethongtin.blogspot.com/';
        $blog = new \Dok123\BlogReader\Adapter\BlogReader($url);
        $data = $blog->current_page();
        print_r($data);

    }

    public function testSetKeyword(){

    }

    public function testResetKeyword(){

    }

    public function testLabels(){

    }
}