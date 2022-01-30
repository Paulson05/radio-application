@extends('frontend.template.master')
@section('body')
<section class="show-part mt-xl-5">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-12 mt-5">
                <div class="section-heading">
                    <h2>show Schedule</h2>
                </div>
            </div>
        </div>
        @include('frontend.template.partials.scheduler')
    </div>
</section>
@endsection
