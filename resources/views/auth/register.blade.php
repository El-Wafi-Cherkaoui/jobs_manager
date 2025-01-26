<x-layout title="Register">
    <div class="bg-dwhite p-5 rounded-lg">
        <x-page_heading>Register:</x-page_heading>
        <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

            <x-forms.divider />

            <x-forms.input label="Employer" name="name" />
            <x-forms.input label="Employer Logo" name="logo" type="file" />

            <x-forms.button>Create Account</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>
