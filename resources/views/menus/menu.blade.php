@if(isset($innerLoop))
<ul class="nav-menu">
@endif

@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)
    
    @php
    
        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $listItemClass .= 'menu-has-children';
            $linkAttributes =  'class=""';

            if(url($item->link()) == url()->current()){
                $listItemClass .= 'active ';
            }else{
                $listItemClass .= ' ';
            }
        }
        else{
            if(url($item->link()) == LaravelLocalization::getNonLocalizedURL(url()->current())){
                $listItemClass .= 'active ';
            }else{
                $listItemClass .= ' ';
            }
        }
        //echo "<br>".url($item->link())."<br>".url()->current()."<br>".LaravelLocalization::getCurrentLocale();
        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $originalItem->icon_class . '"></i>';
        }
        
    @endphp

    <li class="{{ $listItemClass }}">
        <a  class="btn-get-started scrollto" href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes or '' !!}>
            {!! $icon !!}{{ $item->title }}{!! $caret !!}
        </a>
        @if(!$originalItem->children->isEmpty())
        @include('menus.menu', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
    </li>
@endforeach
@if(isset($innerLoop))
</ul>
@endif
