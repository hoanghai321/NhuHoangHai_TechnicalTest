<?php

namespace App\Http\Controllers;

use App\Helpers\Singleton;
use App\Models\A;
use App\Models\B;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\BinaryOp\Greater;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

use function PHPSTORM_META\map;

class HomeController extends Controller
{
    public function Index()
    {
        return view('Index');
    }
    //Section 1 Q1
    public function Section1Q1()
    {
        $total = 0;
        for ($i = 3; $i <= 30; $i = $i + 3) {
            $total = $total + $i;
            $i = $i + 2;
        }
        dd($total);
    }

    //Section 1 Q2
    public function Section1Q2()
    {
        $i = pow(2, 4);
        $calculate = $i / 2;
        dd($calculate);
    }

    //Section 1 Q3
    public function Section1Q3()
    {
        $greater  = collect([1, 2, 4, 8, 16]);

        $result = $greater->map(function ($it) {
            return $it * 2;
        });
        dd($result);
    }

    //Section 1 Q4
    public function Section1Q4()
    {
        $sudo = 'sudo là một chương trình của Linux. Nó cho phép user chạy chương trình với những đặc quyền bảo mật của user khác trong Linux.';
        $rm = 'rm là viết tắt của ‘remove’ được sử dụng để xóa hoặc xóa các tệp và thư mục trong UNIX.';
        $rf = '-rf là xóa các thư mục và nội dung của chúng một cách đệ quy đồng thời bỏ qua các tệp và đối số không tồn tại, không cần hỏi lại.';
        $logNginx = '/var/log/nginx/ là địa chỉ mà Nginx Server lưu file log, có thể là access log hoặc error log';
        echo $sudo . "<br />";
        echo $rm . "<br />";
        echo $rf . "<br />";
        echo $logNginx . "<br />";
    }
    //Section 1 Q5
    public function Section1Q5()
    {
        $text1 = '1. Bob enters a URL into the browser.';
        $text2a = '2a. Browser looks up IP in cache';
        $text2b = '2b. Browser looks up IP using recursive DNS lookup';
        $text3 = '3. Browser establishes TCP connection with the server';
        $text4 = '4.Browser sends HTTP request to the server';
        $text5 = '5. Server sends back HTTP response';
        $text6 = '6.Browser renders HTTP content';
        echo $text1 . "<br/>";
        echo $text2a . "<br/>";
        echo $text2b . "<br/>";
        echo $text3 . "<br/>";
        echo $text4 . "<br/>";
        echo $text5 . "<br/>";
        echo $text6 . "<br/>";
    }

    //Section 1 Q6
    public function Section1Q6()
    {
        $gitcheckout = 'Lệnh "git checkout feature_foo_bar" dùng để chuyển sang nhánh feature_foo_bar';
        $test = 'Ví dụ đang ở nhánh master thì dùng lệnh trên sẽ chuyển sang nhánh feature_foo_bar';
        echo $gitcheckout . "<br/>";
        echo $test;
    }
    //Section 1 Q7a
    public function Section1Q7a()
    {
        $text = "SELECT * FROM employees INNER JOIN dept_emp ON employees.emp_no = dept_emp.emp_no WHERE dept_emp.dept_no = 'Sale' ";
        return $text;
    }

    //Section 1 Q7
    public function Section1Q7b()
    {
        $text = "   SELECT * FROM employees
          WHERE employees.first_name LIKE '%Mike%' OR employees.last_name LIKE '%Mike%'";
        return $text;
    }

    //Section 2 Q1
    public function Section2Q1()
    {
        $Dependency_Injection = 'Dependency Injection (DI) là cung cấp cho một object những object nó phụ thuộc từ bên ngoài truyền vào mà không cần phải khởi tạo từ trong hàm Constructor';
        echo $Dependency_Injection . "<br/>";
        echo 'Ví dụ ở đây là inject class A vào hàm dựng Constructor trong class B' . "<br/>";
        $b = new B(new A);
        echo $b->hello() . "<br>";
        echo $b->__construct(new A);
    }

    //Section 2 Q2
    public function Section2Q2()
    {
        $text = 'Singleton Pattern là một mẫu thiết kế design pattern, nó bảo đảm rằng mỗi một class chỉ có được một instance duy nhất và mọi tương tác đều thông qua instance này.';
        echo $text . "<br>";
        return Singleton::log('Hello Hoang Hai');
    }
    //Section 2 Q3a
    public function Section2Q3a()
    {
        $text = 'SELECT * FROM salaries 
        INNER JOIN employees
        ON salaries.emp_no = employees.emp_no
        ORDER BY salaries.salary DESC
        LIMIT 3';
        return $text;
    }

    //Section 2 Q3b
    public function Section2Q3b()
    {
        $text = 'SELECT * FROM salaries, titles, employees 
         ORDER BY salaries.salary DESC
         LIMIT 1';
        return $text;
    }

    //Section 3 Q1
    public function Section3Q1()
    {
        $text = '180$ / year';
        return $text;
    }

    //Section 3 Q2
    public function Section3Q2()
    {
        $eavesdropping = 'Phòng chống eavesdropping có thể sử dụng tường lửa, cập nhật phần mềm chống virus, sử dụng mạng ảo VPN, tránh sử dụng wifi miễn phí và ko bảo mật';
        $data_tampering = 'Phòng chống data tempering là sử dụng tường lửa, cập nhật phần mềm bảo mật windows, mã hóa dữ liệu,  sử dụng ủy quyền mạnh, sử dụng các giao thức chống giả mạo';
        $MITM = 'Phòng chống MITM bằng cách, cập nhật phần mềm chống virus, tránh truy cập wifi công cộng kém bảo mật, đăng xuất sau khi sử dụng xong 1 trang web yêu cầu đăng nhập, sử dụng trang web có HTTPS, sử dụng xác thực nhiều bước, dùng mạng ảo VPN.';
        echo $eavesdropping . "<br>";
        echo $data_tampering . "<br>";
        echo $MITM;
    }
}
