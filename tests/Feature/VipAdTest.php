<?php

namespace Tests\Feature;

use Tests\TestCase;

class VipAdTest extends TestCase
{
    public function test_vip_ad_page_loads()
    {
        $response = $this->get(route('vip.ad'));
        $response->assertStatus(200);
        $response->assertSee('Join our VIP Channel');
        $response->assertSee('50%');
        $response->assertSee(route('policy'));
        $response->assertSee(route('terms'));
        $response->assertSee(url('/'));
    }
}