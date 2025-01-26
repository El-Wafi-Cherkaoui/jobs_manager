<x-layout title="Login">
    <div class="bg-dwhite p-5 rounded-lg">
        <x-page_heading>Login:</x-page_heading>
        <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.button>Login</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>
