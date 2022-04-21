<aside class="control-sidebar control-sidebar-dark">

    <div class="p-3 control-sidebar-content" style="">
        <h5>{{ __('Customize display') }}</h5>
        <hr class="mb-2">
        <div class="mb-4">
            <input wire:model="state.dark-mode" wire:click="toggleSingleSetting('dark-mode')" type="checkbox"
                class="mr-1" id="dark_mode">
            <span>{{ __('Dark Mode') }}</span>
        </div>

        <h6>{{ __('Header Options') }}</h6>
        <div class="mb-1">
            <input wire:model.defer="state.layout-navbar-fixed" wire:click="toggleSingleSetting('layout-navbar-fixed')"
                type="checkbox" value="1" class="mr-1" id="layout_navbar_fixed">
            <span>{{ __('Fixed') }}</span>
        </div>
        <hr class="mb-2">

        <h6>{{ __('Sidebar Options') }}</h6>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar-collapsed" wire:click="toggleAsideSetting('sidebar-collapsed')"
                type="checkbox" value="1" class="mr-1" id="sidebar_collapsed">
            <span>{{ __('Collapsed') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar-fixed" wire:click="toggleAsideSetting('sidebar-fixed')"
                type="checkbox" value="1" class="mr-1" id="sidebar_fixed">
            <span>{{ __('Fixed') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar-mini" wire:click="toggleAsideSetting('sidebar-mini')" type="checkbox"
                value="1" checked="checked" class="mr-1" id="sidebar_mini">
            <span>{{ __('Sidebar Mini') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar-mini-md" wire:click="toggleAsideSetting('sidebar-mini-md')"
                type="checkbox" value="1" class="mr-1" id="sidebar_mini_md">
            <span>{{ __('Sidebar Mini MD') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.sidebar-mini-xs" wire:click="toggleAsideSetting('sidebar-mini-xs')"
                type="checkbox" value="1" class="mr-1" id="sidebar_mini_xs">
            <span>{{ __('Sidebar Mini XS') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.nav-flat" wire:click="toggleAsideSetting('nav-flat')" type="checkbox"
                value="1" class="mr-1" id="nav_flat">
            <span>{{ __('Nav Flat Style') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.nav-legacy" wire:click="toggleAsideSetting('nav-legacy')" type="checkbox"
                value="1" class="mr-1" id="nav_legacy">
            <span>{{ __('Nav Legacy Style') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.nav-compact" wire:click="toggleAsideSetting('nav-compact')" type="checkbox"
                value="1" class="mr-1" id="nav_compact">
            <span>{{ __('Nav Compact') }}</span>
        </div>
        <div class="mb-1">
            <input wire:model.defer="state.nav-child-indent" wire:click="toggleAsideSetting('nav-child-indent')"
                type="checkbox" value="1" class="mr-1" id="nav_child_indent">
            <span>{{ __('Nav Child Indent') }}</span>
        </div>

        <hr class="mb-2">
        <h6>{{ __('Footer Options') }}</h6>
        <div class="mb-4">
            <input wire:model.defer="state.layout-footer-fixed" wire:click="toggleSingleSetting('layout-footer-fixed')"
                type="checkbox" value="1" class="mr-1" id="layout-footer-fixed">
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
        $('#layout-footer-fixed').on('change', function() {
            $('body').toggleClass('layout-footer-fixed');
        })
    </script>
@endpush
