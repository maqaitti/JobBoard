<x-layout>
<h1>Job Detail</h1>
<strong>{{ $job->title }}:</strong><br>
<p>
  This Job pays {{ $job->salary }} per year
</p>

<p class="mt-6" >
    <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
  </p>
</x-layout>