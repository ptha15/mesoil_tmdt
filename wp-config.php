<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'mis' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' *x))Iyw:>->0w%h$nSIyXH6Ig8Qz>@I4pY.#]!( w~)Yx8yO$0Nu%zX+3@pqbel' );
define( 'SECURE_AUTH_KEY',  'WZx6 dwH^c9Z{_AkEPuIp9YSt}GF.T!{;#ffM}6s!rm#C#u$l;RsDN/m3 )U?K3k' );
define( 'LOGGED_IN_KEY',    '?:W+j|~18Xk+5qj1f72`T$O9,.=psi{4FRp$~}`YkyGl!}~3To{$_VgurPwe~R+:' );
define( 'NONCE_KEY',        '(ZBfBW9WM$c~ax<0!G}^gwPKfpH9.%X(V!+=cbV!Wmu9mf(Y%AE~ _m b[M%Oog:' );
define( 'AUTH_SALT',        'OW.t3W zo+#h 2k>k=,FTTCg`TL%CbdI$IMQT7z_(hGa$o:M;RnoiB9jM8e41^OQ' );
define( 'SECURE_AUTH_SALT', 'JsL!dhDvU@B%E`$URN[y&k`,# a0Xb&]rx*9(u:!mW};ncj|)Yjgye7Q(e{KMs1d' );
define( 'LOGGED_IN_SALT',   '1-7vi0aDGj(>KfHc=~*y3/ZeNo<O>)<gomTe)jWBij4nwtk5jPM%&!bb2Ej`m^~C' );
define( 'NONCE_SALT',       '|gkxSrHmUU7Bf{=r=xxJlOPOn)/0}luk@x>Ua6M)vXm^40AAz6qX$UpaKw$8!{}c' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
