    <?php
    // Khởi tạo phiên
    // session_start();
    $status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}else
if($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', 'On');

// user : admin
// pass : admin1
    class Login extends Controller
    {
        public $Admin;

        public function __construct()
        {
            $this->Admin = $this->model("Admin");
        }
        public function admin()
        {
            $this->view1("aodep", [
                "Page" => "login",
            ]);
        }
        public function DangNhap()
        {
            if (isset($_SESSION['user'])) {
                //đã đăng nhapaj thì chuyển hướng đến trang quản trị
                header('Location:http://localhost/shop/H_admin/admin');
                exit();
            }

            // Kiểm tra xem ngừoi dùng đã submitr chưa
            if (isset($_POST['user']) && isset($_POST['pass'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $role = $this->Admin->authenticate($user, $pass);

                // kiểm tra xác thực tên đăng nhập và mật khẩu 
                if ($role) {
                    // Đăng nhập thành công, lưu thông tin người dùng vào phiên
                    $_SESSION['role'] = $role;

                    if ($role == 1) {
                        // chuyển hướng đến trang quản trị
                        header('Location:http://localhost/shop/H_admin/admin');
                        exit();
                    } else {
                        $erro = "User hoặc pass không tồn tại";
                    }
                } else {
                    // Đăng nhập thất bại, hiển thị thông báo lỗi
                    $error = 'Tên đăng nhập hoặc mật khẩu không đúng';
                }
            }
        }
    }
