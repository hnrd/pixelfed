@extends('site.partial.template')

@section('section')

  <div class="title">
    <h3 class="font-weight-bold">Open Source</h3>
  </div>
  <hr>
  <section>
    <p class="lead">This website runs a modified version of the Pixelfed software, which you can find on <a href="https://github.com/hnrd/pixelfed/">Github</a> (original, unmodified software: <a href="https://github.com/pixelfed/pixelfed/">here on Github</a></p>
  </section>
@endsection

@push('meta')
<meta property="og:description" content="Open source in Pixelfed">
@endpush
