@extends('layouts.back')
@section('title', __('Messages'))
@section('content')
    <div class="main-content">
        <div class="main-content-inner ">
            <div class="widget-box-2 wd-listing">
                <div class="section-body">
                    <div class="row">
                        @livewire('admin.manage-message')
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script type="text/javascript">
        // close message  modal
        window.addEventListener('openModal', event => {
            $('#MessageModal').modal('show');
            //alert('parameter: ' + event.detail.someParameter);
        })
        window.addEventListener('closeModal', () => {
            $('#MessageModal').modal('hide');
            $('#InputRepyForm').modal('hide');
        });
    </script>
@endpush
