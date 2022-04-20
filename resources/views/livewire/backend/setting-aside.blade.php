<aside class="control-sidebar control-sidebar-dark">

    <div class="p-3 control-sidebar-content" style="">
        <h5>{{ __('Customize display') }}</h5>
        <hr class="mb-2">
        <div class="mb-4">
            <input wire:model.defer="state.dark_mode" type="checkbox" value="1" class="mr-1" id="darkMode">
            <span>{{ __('Dark Mode') }}</span>
        </div>

        <h6>{{ __('Header Options') }}</h6>
        <div class="mb-1">
            <input wire:model.defer="state.layout_navbar_fixed" type="checkbox" value="1" class="mr-1"
                id="layout_navbar_fixed">
            <span>{{ __('Fixed') }}</span>
        </div>
        <hr class="mb-2">

        <h6>{{ __('Sidebar Options') }}</h6>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar_collapsed" type="checkbox" value="1" class="mr-1"
                id="sidebar_collapsed">
            <span>{{ __('Collapsed') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar_fixed" type="checkbox" value="1" class="mr-1"
                id="sidebar_fixed">
            <span>{{ __('Fixed') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar_mini" type="checkbox" value="1" checked="checked"
                class="mr-1" id="sidebar_mini">
            <span>{{ __('Sidebar Mini') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar_mini_md" type="checkbox" value="1" class="mr-1"
                id="sidebar_mini_md">
            <span>{{ __('Sidebar Mini MD') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar_mini_xs" type="checkbox" value="1" class="mr-1"
                id="sidebar_mini_xs">
            <span>{{ __('Sidebar Mini XS') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.nav_flat" type="checkbox" value="1" class="mr-1" id="nav_flat">
            <span>{{ __('Nav Flat Style') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.nav_legacy" type="checkbox" value="1" class="mr-1" id="nav_legacy">
            <span>{{ __('Nav Legacy Style') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.nav_compact" type="checkbox" value="1" class="mr-1"
                id="nav_compact">
            <span>{{ __('Nav Compact') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.nav_child_indent" type="checkbox" value="1" class="mr-1"
                id="nav_child_indent">
            <span>{{ __('Nav Child Indent') }}</span>
        </div>

        <hr class="mb-2">
        <h6>{{ __('Footer Options') }}</h6>
        <div class="mb-4">
            <input wire:model.defer="state.footer_fixed" type="checkbox" value="1" class="mr-1"
                id="footer_fixed">
            <span>{{ __('Fixed') }}</span>
        </div>
    </div>
</aside>
@push('custom_js')
    <script>
        $('#dark_mode').on('change', function() {
            $('body').toggleClass('dark-mode');
        })
        $('#layout_navbar_fixed').on('change', function() {
            $('body').toggleClass('layout-navbar-fixed');
        })
        $('#sidebar_collapsed').on('change', function() {
            $('#aside_custom').toggleClass('sidebar-collapse');
        })
        $('#sidebar_fixed').on('change', function() {
            $('body').toggleClass('layout-fixed');
        })
        $('#sidebar_mini').on('change', function() {
            $('body').toggleClass('sidebar-mini');
        })
        $('#sidebar_mini_md').on('change', function() {
            $('body').toggleClass('sidebar-mini-md');
        })
        $('#sidebar_mini_xs').on('change', function() {
            $('body').toggleClass('sidebar-mini-xs');
        })
        $('#nav_flat').on('change', function() {
            $('#aside_custom').toggleClass('nav-flat');
        })
        $('#nav_legacy').on('change', function() {
            $('#aside_custom').toggleClass('nav-legacy');
        })
        $('#nav_compact').on('change', function() {
            $('#aside_custom').toggleClass('nav-compact');
        })
        $('#nav_child_indent').on('change', function() {
            $('#aside_custom').toggleClass('nav-child-indent');
        })
        $('#footer_fixed').on('change', function() {
            $('body').toggleClass('layout-footer-fixed');
        })
    </script>
@endpush
