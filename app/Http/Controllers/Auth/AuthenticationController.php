<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;  // Import User model
use Illuminate\Support\Facades\Hash;  // Import Hash facade

class AuthenticationController extends Controller
{
    // Menampilkan halaman login (sign-in)
    public function login() {
        return view('auth.sign-in', [
            'title' => 'Masuk'
        ]);
    }

    // Proses autentikasi/login
    public function authenticate(Request $request): RedirectResponse
    {
        // Validasi input login
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cek apakah kredensial valid dan login berhasil
        if (Auth::attempt($credentials)) {
            // Mengatur ulang sesi setelah berhasil login
            $request->session()->regenerate();

            // Setelah berhasil login, redirect ke halaman index atau halaman yang dituju
            return redirect()->intended('/');
        }

        // Jika login gagal, beri pesan error dalam bahasa Indonesia
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    // Proses pendaftaran pengguna (register)
    public function register(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // password_confirmation field is required
        ]);

        // Membuat pengguna baru setelah validasi
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),  // Hash password before saving
        ]);

        // Login otomatis setelah pendaftaran (optional, bisa dihapus jika hanya ingin ke halaman sign-in)
        // Auth::login($user); // Uncomment this line if you want auto login after registration

        // Redirect ke halaman sign-in setelah berhasil mendaftar
        return redirect('/sign-in')->with('success', 'Akun Anda berhasil dibuat! Silakan login.');
    }

    // Proses logout
    public function logout() {
        Auth::logout();

        // Menghapus sesi pengguna
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Redirect ke halaman sign-in setelah logout
        return redirect('/sign-in');
    }
}
