<?php

it('includes a blade component icon', function () {
    $output = view('blade_component_icon_is_included')->render();

    expect($output)
        ->toContain('<svg')
        ->toContain('feather feather-activity');
});

it('includes a blade component icon with a custom css class', function () {
    $output = view('blade_component_icon_has_custom_css_class')->render();

    expect($output)
        ->toContain('<svg')
        ->toContain('feather feather-activity custom-class')
        ->toContain('color: red')
        ->toContain('x-show="showIcon === true"');
});
