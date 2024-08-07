@extends('layouts.back')
@section('title', 'Liste des Terrains')
@section('content')
    <div class="main-content">
        <div class="main-content-inner ">
            <div class="button-show-hide show-mb">
                <span class="body-1">Volet de Naviguation </span>
            </div>
            <div class="section-body">
                <div class="row">
                    @livewire('admin.manage-estate')
                </div>
            </div>

        </div>
        {{-- <div class="footer-dashboard">
            <p class="text-variant-2">©2024 Well-done Real Estate. All Rights Reserved.</p>
        </div> --}}
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        // close adding Estate  modal
        window.addEventListener('openModal', event => {
            $('#EstateModal').modal('show');
            //alert('parameter: ' + event.detail.someParameter);
        })
        window.addEventListener('closeModal', () => {
            $('#EstateModal').modal('hide');
        });

        // close delete Estate  modal
        window.addEventListener('openDeleteModal', event => {
            $('#deleteEstate').modal('show');
            //alert('parameter: ' + event.detail.someParameter);
        })
        window.addEventListener('closeModal', () => {
            $('#deleteEstate').modal('hide');
        });
    </script>
@endpush
