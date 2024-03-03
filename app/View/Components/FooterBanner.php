<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Fluent;

class FooterBanner extends Component
{
    public ?Fluent $footerBanner = null;
    public ?Fluent $cta = null;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->footerBanner = fluent(siteConfig('footer_banner'));
        $this->cta = fluent($this->footerBanner?->cta ?? []);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer-banner');
    }
}
