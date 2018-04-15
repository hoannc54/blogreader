# Blogspot reader

## Tên package : 

`123dok/blog-reader-ten_viet_tat`


Ví dụ `ten_viet_tat` : `hocvt`(vũ thái học) `hoannc`(nguyễn công hoan) `nhanpv`(phạm văn nhân) `anhnt`(nguyễn tuấn anh). **Chú ý tuyệt đối ko sửa namespace gốc.**

- namespace : `Dok123/BlogReader/`

- class giao tiếp chính : `Dok123/BlogReader/BlogReader`
- class giao tiếp với BlogSpot : `Dok123/BlogReader/Adapter/BlogReader`
- class giao tiếp với Wordpress Api v1 : `Dok123/BlogReader/Adapter/WpApiV1`
- class giao tiếp với Wordpress Api v2 : `Dok123/BlogReader/Adapter/WpApiV2`
- namespace của adapter interface `Dok123/BlogReader/Adapter/ReaderInterface`
- namespace của  adapter abstract class `Dok123/BlogReader/Adapter/ReaderAbstract`

## Yêu cầu

Package hỗ trợ đọc các thông tin từ 1 blog thuộc loại blogspot/wordpress

Khởi tạo:

- Từ url. Nếu không tìm thấy blog thì trả về 1 exception BlogNotFoundException. Nếu tìm thấy thì trả về 1 trong 3 loại WpApiV1/WpApiV2/BlogSpot(tự động detect loại)

```
$blog = BlogReader::fromUrl($url);
```

Đọc thông tin :

- Get info `$blog->getInfo()` lấy thông tin blog. là array chứa các thông tin có thể lấy được từ api

- Get các bài viết

```

$blog->posts(array $fields = null, $page = null, $per_page = 20);// lấy các bài viết trang hiện tại hoặc trang tương ứng page truyền vào. Biến fields dạng array, tùy chọn field muốn lấy ra từ 1 bài viết.
$blog->next();// đọc trang tiếp theo, trả về true nếu thành công, false nếu hết trang. Để dọc nội dung thì gọi hàm trên với $page và $per_page mặc định
$blog->current_page(); // get page hiện tại, page_token nếu là blogspot

```

- Tìm kiếm

```

$blog->setKeyword($keyword);// cài đặt keyword, sau khi cài keyword, các posts, pages đọc như trên
$blog->resetKeyword();// xóa điều kiện keyword hiện tại


```

- Lấy ra labels có trên trang

```
$blog->labels($limit = 100);
```

- Thông tin blog :

```
[
    'name' => 'Tên blog',
    'description' => 'Mô tả hoặc slogan',
    'url' => 'Link đến trang chủ của blog',
    ... // có thể thêm 1 số thông tin tùy loại blog, các thông tin trên là bắt buộc có
]
```

- Các giá trị thành phần của $fields có thể có

```
[
    'id',
    'title',
    'created',
    'published',
    'updated',
    'content',
    'labels'
]
```

**Lưu ý viết test cho các trường hợp sử dụng trên trước khi tiến hành code, có thể khởi tạo trước class để dễ viết test hơn nếu cần**