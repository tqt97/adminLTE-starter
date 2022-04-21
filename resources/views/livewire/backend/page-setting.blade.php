<x-slot name="title"> title </x-slot>
<x-slot name="page">page </x-slot>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Information') }}</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ __('Title page') }}</label>
                                <input wire:model.lazy="state.title" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@push('custom_js')
    <script>
        $(document).ready(function() {
            Livewire.on('titleChanged', (changedName) => {
                $('[x-ref="title"]').text(changedName);
            })
        });
    </script>
@endpush
