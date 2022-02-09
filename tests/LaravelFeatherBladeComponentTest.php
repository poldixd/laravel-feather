<?php

namespace poldixd\LaravelFeather\Tests;

class LaravelFeatherBladeComponentTest extends TestCase
{
    /** @test */
    public function icon_is_included()
    {
        $output = view('blade_component_icon_is_included')->render();

        $this->assertStringContainsString('<svg', $output);
        $this->assertStringContainsString('feather feather-activity', $output);
    }

    /** @test */
    public function icon_has_custom_css_class()
    {
        $output = view('blade_component_icon_has_custom_css_class')->render();

        $this->assertStringContainsString('<svg', $output);
        $this->assertStringContainsString('class="feather feather-activity custom-class" style="color: red" x-show="showIcon === true"', $output);
    }
}