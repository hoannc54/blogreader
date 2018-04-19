<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 4/9/18
 * Time: 23:29
 */

namespace Dok123\BlogReader\Adapters;


class WpApiV1 extends ReaderAbstract
{
    const BASE_URL = 'https://public-api.wordpress.com/rest/v1.1/';
    /** Get Info */
    function __construct($url)
    {
        $url = preg_replace('/(http|https):\/\//', '', $url);
        parent::__construct($url);

    }

    public function getInfo()
    {

        $request_url = self::BASE_URL . 'sites/' . $this->url;

        $response = $this->client->get($request_url);
        $data = json_decode($response->getBody()->getContents());
        return $data;
        // TODO: Implement getInfo() method.
    }

    public function check(){
        $request_url = self::BASE_URL . 'sites/' . $this->url;
        $response = $this->client->get($request_url);
        if ($response->getStatusCode() == 200){
            return true;
        }else{
            return false;
        }
    }

    /**
     * lấy các bài viết trang hiện tại hoặc trang tương ứng page truyền vào.
     * Biến fields dạng array, tùy chọn field muốn lấy ra từ 1 bài viết.
     * */
    public function posts(array $fields = null, $page = null, $per_page = 20)
    {
        // TODO: Implement posts() method.
    }

    /**
     * đọc trang tiếp theo, trả về true nếu thành công, false nếu hết trang.
     * Để dọc nội dung thì gọi hàm trên với $page và $per_page mặc định
     */
    public function next()
    {
        // TODO: Implement next() method.
    }

    /**
     *get page hiện tại, page_token nếu là blogspot
     */
    public function current_page()
    {
        // TODO: Implement current_page() method.
    }

    /**
     * cài đặt keyword, sau khi cài keyword, các posts, pages đọc như trên
     * @param $keyword
     * @return mixed
     */
    public function setKeyword($keyword)
    {
        // TODO: Implement setKeyword() method.
    }

    /**
     * xóa điều kiện keyword hiện tại
     */
    public function resetKeyword()
    {
        // TODO: Implement resetKeyword() method.
    }

    /**
     * Lấy ra labels có trên trang
     * @param int $limit
     * @return mixed
     */
    public function labels($limit = 100)
    {
        // TODO: Implement labels() method.
    }
}