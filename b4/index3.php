<?php
// cac ham lam viec voi file (Tiep index2)
// 1 : kiem tra xem file co ton tai hay ko?
if(file_exists('database/data.txt')){
	echo "Yes";
} else {
	echo "No";
}

echo "<br/>";
// 2 : file co quyen ghi hay ko
if(is_writable('database/data.txt')){
	//echo "OK";
	// ghi noi dung vao file ma ko can dung den fwrite
	file_put_contents('database/data.txt', 'Do not need fwrite');
	echo "OK";
} else {
	echo "Not Right";
}

// 3: doi ten file








