<?php

it('includes an icon', function () {
    $output = view('icon_is_included')->render();

    expect($output)
        ->toContain('<svg')
        ->toContain('feather feather-activity');
});

it('includes an icon with a custom css class', function () {
    $output = view('icon_has_custom_css_class')->render();

    expect($output)
        ->toContain('<svg')
        ->toContain('class="feather feather-activity custom-class" style="color: red"');
});
