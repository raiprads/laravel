
@if(session('flash_message'))

    <div class="alert alert--{{ session('flash_message_level') }}">
    	{{ session('flash_message') }}
    </div>

@endif