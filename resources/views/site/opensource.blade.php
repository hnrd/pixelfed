@extends('site.partial.template')

@section('section')

  <div class="title">
    <h3 class="font-weight-bold">Open Source</h3>
  </div>
  <hr>
  <section>
    <p class="lead">This website runs a modified version of the Pixelfed software, which you can find on <a href="https://git.zknt.org/chris/pixelfed/">Git</a> (original, unmodified software: <a href="https://github.com/pixelfed/pixelfed/">here on Github</a></p>
  </section>
@endsection

@push('meta')
<meta property="og:description" content="{{__('site.open_source_in_pixelfed')}}">
@endpush
