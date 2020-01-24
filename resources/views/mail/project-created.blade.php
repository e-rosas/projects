@component('mail::message')
# New project: {{ $project->title }}

{{ $project->description }}

You have created a new project.

@component('mail::button', ['url' => url('/projects/' . $project->id)])
View
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
