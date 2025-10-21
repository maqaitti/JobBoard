<x-layout>
<h1>Job Detail</h1>
<strong>{{ $job['title'] }}:</strong><br>
<p>This Job pays {{ $job['salary'] }} per year</p>

  <a href="/jobs" class="font-bold text-blue-500">Go Back</a>
</x-layout>