<?php

class PluginTest extends TestCase
{
    public function test_plugin_installed() {
        activate_plugin( 'ramadan-2025/ramadan-2025.php' );

        $this->assertContains(
            'ramadan-2025/ramadan-2025.php',
            get_option( 'active_plugins' )
        );
    }
}
