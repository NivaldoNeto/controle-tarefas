@component('mail::message')
# {{ $tarefa }}

completion deadline: {{ $data_limite_conclusao }}


@component('mail::button', ['url' => $url])
Click here to see your task!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
