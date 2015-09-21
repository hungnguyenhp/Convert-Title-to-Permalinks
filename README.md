## Convert-Title-to-Permalinks
Chuyển đổi 1 đoạn tiếng Việt sang URL tiếng Anh, for SEO :)

### Cách sử dụng
Tạo 1 file test.php với nội dung đại loại như sau
    
	<?php
	include 'converV2E.php';
	
	echo convertV2E('Tôi là Nguyễn An Hưng');	// Tra ve gia tri: Toi la Nguyen An Hung
	echo convertV2E('Tôi là Nguyễn An Hưng', true);	// Tra ve gia tri: toi la nguyen an hung
	echo convertV2E('Tôi là Nguyễn An Hưng!', true);	// Tra ve gia tri: toi la nguyen an hung!
	echo convertV2E('Tôi là Nguyễn An Hưng!', true, 'postname');	// Tra ve gia tri: toi la nguyen an hung
	echo convertV2E('Tôi là Nguyễn An Hưng!', true, 'postname', true);	// Tra ve gia tri: toi-la-nguyen-an-hung

	?>
Ngoài ra có thể tham khảo thêm file Example.php