<x-layout>

    <section class="text-center py-6 mb-6">
        <x-forms.form action='/search' class="mt-6">
            <x-forms.input name="q" placeholder="Web Developer..." :label="false" :value="request('q')" />
        </x-forms.form>
    </section>

    <x-page-heading>Results</x-page-heading>

    <div class="space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
