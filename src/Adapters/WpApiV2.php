<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 4/9/18
 * Time: 23:29
 */

namespace Dok123\BlogReader\Adapters;


class WpApiV2 extends ReaderAbstract
{

    /** Get Info */
    public function getInfo()
    {
        // TODO: Implement getInfo() method.
    }

    public function check(){
        return true;
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