@extends('layouts.app')

@section('content')
<div class="container mt-5">  
	<div class="col-12">
		<p class="font-weight-bold text-lighter text-uppercase">Legal Notice</p>
		<div class="card border shadow-none">
			<div class="card-body p-md-5 text-justify mx-md-3">
				@if($page && $page->content)
				{!! $page->content !!}
				@else
				<div class="terms">
					<h5 class="font-weight-bold">Legal</h5>
					<p class="">Hey</p>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection

@push('meta')
<meta property="og:description" content="Terms of Use">
@endpush
