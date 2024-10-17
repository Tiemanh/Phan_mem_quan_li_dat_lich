<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\VerifyAccount;
use App\Models\Password_reset_token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function login()
    {
        return view('account.login');
    }

    public function logout()
    {
        // auth()->logout();

        return redirect()->route('account.login')->with('ok', 'Logout success');
    }

    public function check_login(Request $request)
    {
        return redirect()->route('trangchu.index')->with('ok', 'Chào mừng quay trở lại.');
    }

    public function register()
    {
        return view('account.register');
    }

    public function check_register(Request $request)
    {
        // $request->validate(
        //     [
        //         'fullname' => 'required|min:6|max:100',
        //         'phone_number' => 'required|min:10|max:20',
        //         'email' => 'required|email|min:6|max:100|unique:users',
        //         'password' => 'required|min:6',
        //         'birthday' => 'required',
        //         'gender' => 'required',
        //         'confirm_password' => 'required|same:password',
        //     ],
        //     [
        //         'name.required' => 'Họ tên không được để trống',
        //         'name.min' => 'Họ tên phải nhiều hơn 6 ký tự',
        //         'name.max' => 'Họ tên phải nhỏ hơn 100 ký tự',

        //         'phone.required' => 'Số điện thoại không được để trống',
        //         'phone.min' => 'Số điện thoại phải đủ 10 ký tự',
        //         'phone.max' => 'Số điện thoại phải ít hơn 20 ký tự',

        //         'email.required' => 'Email không được để trống',
        //         'email.min' => 'Email phải đủ 6 ký tự',
        //         'email.max' => 'Email phải ít hơn 100 ký tự',
        //         'email.unique' => 'Email đã được đăng ký',

        //         'password.required' => 'Mật khẩu không được để trống',
        //         'password.min' => 'Mật khẩu phải nhiều hơn 6 ký tự',

        //         'birthday.required' => 'Ngày sinh không được để trống',

        //         'gender.required' => 'Giới tính không được để trống',
        //     ]
        // );

        // $data = $request->only('fullname', 'phone_number', 'email', 'birthday');
        // $data['password'] = bcrypt($request->password);
        // if ($request->gender == 1) {
        //     $data['gender'] = 'Nam';
        // }
        // if ($request->gender == 0) {
        //     $data['gender'] = 'Nữ';
        // }
        // if ($request->gender == 0) {
        //     $data['gender'] = 'Khác';
        // }

        // if ($acc = User::create($data)) {
        //     // Mail::to($acc->email)->send(new VerifyAccount($acc));

        //     return redirect()->route('account.login')->with('ok', 'Đăng ký thành công, vui lòng kiểm tra email để kích hoạt tài khoản.');
        // }

        return redirect()->route('account.login')->with('ok', 'Đăng ký thành công, vui lòng kiểm tra email để kích hoạt tài khoản.');
    }

    public function verify($email)
    {
        User::where('email', $email)->whereNull('email_verified_at')->firstOrFail();
        User::where('email', $email)->update(['email_verified_at' => date('Y-m-d H:i:s')]);

        return redirect()->route('account.login')->with('ok', 'Xác nhận tài khoản thành công, vui lòng đăng nhập để bắt đầu sử dụng dịch vụ của chúng tôi');
    }

    public function profile()
    {
        $auth = auth()->user();

        return view('account.profile', compact('auth'));
    }

    public function check_profile(Request $request)
    {
        $auth = auth()->user();

        $request->validate(
            [
                'fullname' => 'required|min:6|max:100',
                'phone_number' => 'required|min:10|max:20',
                'email' => 'required|email|min:6|max:100|unique:users,email,' . $auth->id,
                'password' => ['required', function ($attr, $value, $fail) use ($auth) {
                    if (!Hash::check($value, $auth->password)) {
                        return $fail('Sai mật khẩu');
                    }
                }],
            ],
            [
                'name.required' => 'Họ tên không được để trống',
                'name.min' => 'Họ tên phải nhiều hơn 6 ký tự',
                'name.max' => 'Họ tên phải nhỏ hơn 100 ký tự',

                'phone.required' => 'Số điện thoại không được để trống',
                'phone.min' => 'Số điện thoại phải đủ 10 ký tự',
                'phone.max' => 'Số điện thoại phải ít hơn 20 ký tự',

                'email.required' => 'Email không được để trống',
                'email.min' => 'Email phải đủ 6 ký tự',
                'email.max' => 'Email phải ít hơn 100 ký tự',
                'email.unique' => 'Email đã được đăng ký',
            ]
        );
        $data = $request->only('fullname', 'phone_number', 'email');
        $address = 'xã ' . $request->xa . ', huyện ' . $request->huyen . ', tỉnh ' . $request->tinh;
        $data['address'] = $address;

        $check = User::where('email', $auth->email)->update($data);
        if ($check) {
            return redirect()->back()->with('ok', 'Cập nhật thông tin thành công');
        }

        return redirect()->back()->with('no', 'Lỗi');
    }

    public function change_password()
    {
        return view('account.change_password');
    }

    public function check_change_password(Request $request)
    {
        $auth = auth()->user();
        $request->validate(
            [
                'password' => ['required', function ($attr, $value, $fail) use ($auth) {
                    if (!Hash::check($value, $auth->password)) {
                        return $fail('Sai mật khẩu');
                    }
                }],
                'newpass' => 'required|min:6',
                'confirm-newpass' => 'required|same:newpass',
            ],
            [
                'password.required' => 'Mật khẩu không được để trống',
                'newpass.required' => 'Vui lòng nhập mật khẩu mới',
                'newpass.min' => 'Mật khẩu phải nhiều hơn 6 ký tự',
                'confirm-newpass.required' => 'Xác nhận lại mật khẩu',
                'confirm-newpass.same' => 'Mật khẩu xác nhận không khớp với mật khẩu mới',
            ]
        );

        $data['password'] = bcrypt($request->newpass);
        $check = User::where('password', $auth->password)->update($data);
        if ($check) {
            auth()->logout();

            return redirect()->route('account.login');
        }

        return redirect()->back()->with('no', 'Lỗi, hãy kiểm tra lại');
    }

    public function forgot_password()
    {
        return view('account.forgot_password');
    }

    public function check_forgot_password(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users',
        ]);
        $user = User::where('email', $request->email)->first();
        $token = Str::random(50);
        $tokenData = [
            'email' => $request->email,
            'token' => $token,
        ];

        // if (Password_reset_token::create($tokenData)) {
        //     Mail::to($request->email)->send(new ForgotPassword($user, $token));

        //     return redirect()->back()->with('ok', 'Vui lòng kiểm tra email');
        // }

        return redirect()->back()->with('no', 'Lỗi vui lòng kiểm tra lại');
    }

    public function reset_password($token)
    {
        // Password_reset_token::where('token', $token)->firstOrFail();

        return view('account.reset_password');
    }

    public function check_reset_password(Request $request, $token)
    {
        // $tokenData = Password_reset_token::where('token', $token)->firstOrFail();
        // $user = User::where('email', $tokenData->email)->firstOrFail();

        $request->validate(
            [
                'password' => 'required|min:6',
                'confirm-password' => 'required|same:password',
            ],
            [
                'password.required' => 'Vui lòng nhập mật khẩu mới',
                'passwords.min' => 'Mật khẩu phải nhiều hơn 6 ký tự',
                'confirm-password.required' => 'Xác nhận lại mật khẩu',
                'confirm-password.same' => 'Mật khẩu xác nhận không khớp với mật khẩu vừa nhập',
            ]
        );
        $data = [
            'password' => bcrypt($request->password),
        ];

        // $check = $user->update($data);
        $check = true;
        if ($check) {
            return redirect()->route('account.login')->with('ok', 'Thay đổi mật khẩu thành công');
        }

        return redirect()->back()->with('no', 'Lỗi vui lòng kiểm tra lại');
    }
}
