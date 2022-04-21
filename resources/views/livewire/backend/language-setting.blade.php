<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" title="{{ __('Language') }}">
        <i class="fas fa-globe"></i>
        <i class="fas fa-caret-down"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right1">
        <p class="dropdown-item" wire:click.prevent="changeLanguage('vi')">
            <i class="fas fa-user-edit mr-2"></i> Vietnamese
        </p>
        <div class="dropdown-divider"></div>
        <p  class="dropdown-item" wire:click.prevent="changeLanguage('en')">
            <i class="fas fa-sign-out-alt mr-2"></i>English
        </p>
    </div>
</li>
