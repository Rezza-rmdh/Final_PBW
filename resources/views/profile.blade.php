@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Icon Profile -->
    <div class="flex flex-col items-center">
        <img src="{{ asset('img/profile.png') }}" alt="Profile" class="rounded-full w-32 h-32">
        <h3 class="text-2xl font-semibold mt-4">{{ Auth::user()->name }}</h3>
        <p class="text-gray-600">Joined in: {{ Auth::user()->created_at->format('d M Y') }}</p>
    </div>

    <!-- Informasi Akun -->
    <div class="max-w-md mx-auto mt-6 border rounded-lg p-6 shadow-md bg-white">
        <h4 class="text-lg font-semibold mb-4">Informasi Akun</h4>
        <div class="grid grid-cols-1 gap-3">
            <p><strong>Username:</strong> {{ Auth::user()->username }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Password:</strong> ********</p>
        </div>

        <!-- Tombol Edit Password -->
        <div class="text-center mt-4">
            <button type="button" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600"
                data-bs-toggle="modal" data-bs-target="#editPasswordModal">
                Edit Password
            </button>
        </div>
    </div>
</div>

<!-- Modal Edit Password -->
<div class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50" id="editPasswordModal">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <div class="flex justify-between items-center border-b pb-2">
            <h5 class="text-lg font-semibold">Edit Password</h5>
            <button type="button" class="text-gray-500 hover:text-gray-700" onclick="document.getElementById('editPasswordModal').classList.add('hidden')">✖</button>
        </div>
        <div class="mt-4">
            <form action="{{ route('profile.updatePassword') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Password Lama</label>
                    <input type="password" name="old_password" class="w-full border rounded-md p-2" required>
                </div>

                <div class="mb-3">
                    <label>Password Baru</label>
                    <input type="password" name="new_password" class="w-full border rounded-md p-2" required>
                </div>

                <div class="mb-3">
                    <label>Konfirmasi Password Baru</label>
                    <input type="password" name="confirm_password" class="w-full border rounded-md p-2" required>
                </div>

                <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const editPasswordButton = document.querySelector("[data-bs-toggle='modal']");
        const editPasswordModal = document.getElementById("editPasswordModal");
        const closeButton = editPasswordModal.querySelector("button");

        editPasswordButton.addEventListener("click", function () {
            editPasswordModal.classList.remove("hidden");
        });

        closeButton.addEventListener("click", function () {
            editPasswordModal.classList.add("hidden");
        });

        editPasswordModal.addEventListener("click", function (e) {
            if (e.target === editPasswordModal) {
                editPasswordModal.classList.add("hidden");
            }
        });
    });
</script>
@endsection