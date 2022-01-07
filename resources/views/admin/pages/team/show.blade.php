@extends('admin.template.master')
@section('body')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Name: {{$team['name']}}</h3>
            <h4>job title: {{$team['job_title']}}</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">social media handle</h5>
            <p class="card-text">
            <h3>Twitter: {{$team->twitter_acc}}</h3>
            <h4>Faceebook: {{$team->facebook_acc}}</h4>
            <h3>Instragram: {{$team->instagram_acc}}</h3>
            <th></th>
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>

@endsection
