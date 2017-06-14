<?php

if( ! function_exists('hcview') ) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string $view
     * @param  array $data
     * @param  array $mergeData
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    function hcview($view = null, $data = [], $mergeData = [])
    {
        if( ! array_key_exists($view, config('hc.views')) ) {
            return view($view, $data, $mergeData);
        }

        return view(array_get(config('hc.views'), $view), $data, $mergeData);
    }
}