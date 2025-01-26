<x-layout title="Add Job">
    <div class="bg-dwhite p-5 rounded-lg">
        <x-page_heading>Add Job:</x-page_heading>
        <x-forms.form method="POST" action="/jobs">
            <x-forms.input label="title" name="title" />
            <x-forms.input label="salary" name="salary" />
            <x-forms.input label="location" name="location" type="text" />

            <x-forms.select label="Schedule" name="schedule">
                <option>Part Time</option>
                <option>Full Time</option>
            </x-forms.select>

            <x-forms.input label="info url" name="url" type="url" />
            <x-forms.checkbox label="Vip" name="vip" />

            <x-forms.input label="Tags:" name="tags" placeholder="laravel, react, mysql..." />


            <x-forms.button>Create Job</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>
