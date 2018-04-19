<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 4/9/18
 * Time: 23:33
 */

namespace Dok123\BlogReader\Adapters;


interface ReaderInterface
{
    /** Get Info */
    public function getInfo();
    /**
     * lấy các bài viết trang hiện tại hoặc trang tương ứng page truyền vào.
     * Biến fields dạng array, tùy chọn field muốn lấy ra từ 1 bài viết.
     * */
    public function posts(array $fields = null, $page = null, $per_page = 20);
    /**
     * đọc trang tiếp theo, trả về true nếu thành công, false nếu hết trang.
     * Để dọc nội dung thì gọi hàm trên với $page và $per_page mặc định
     */
    public function next();
    /**
     *get page hiện tại, page_token nếu là blogspot
     */
    public function current_page();
    /**
     * cài đặt keyword, sau khi cài keyword, các posts, pages đọc như trên
     * @param $keyword
     * @return mixed
     */
    public function setKeyword($keyword);
    /**
     * xóa điều kiện keyword hiện tại
     */
    public function resetKeyword();

    /**
     * Lấy ra labels có trên trang
     * @param int $limit
     * @return mixed
     */
    public function labels($limit = 100);

}