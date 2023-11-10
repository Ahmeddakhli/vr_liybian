<?php

namespace Modules\DomainSetting\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Modules\DomainSetting\Domain;
use Cache;
use LaravelLocalization;

class domainsEvents
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    private function clearCaches(Domain $domains)
    {
        $supported_locales = LaravelLocalization::getSupportedLocales();
        Cache::forget('domain_'.$domains->id.'_value_'.'default');
        Cache::forget('domain_'.$domains->id.'_key_words_'.'default');
        Cache::forget('domain_'.$domains->id.'_short_description_'.'default');
        Cache::forget('domain_'.$domains->id.'_description_'.'default');
        Cache::forget('domain_'.$domains->id.'_popup_contact_us_title_'.'default');
        
        foreach ($supported_locales as $key => $supported_locale) {
            Cache::forget('domain_'.$domains->id.'_value_'.$key);
            Cache::forget('domain_'.$domains->id.'_key_words_'.$key);
            Cache::forget('domain_'.$domains->id.'_short_description_'.$key);
            Cache::forget('domain_'.$domains->id.'_description_'.$key);
            Cache::forget('domain_'.$domains->id.'_popup_contact_us_title_'.$key);
        }
    }

    public function domainsCreated(domain $domains)
    {
        $this->clearCaches($domains);
    }

    public function domainsUpdated(domain $domains)
    {
        $this->clearCaches($domains);
    }

    public function domainsSaved(domain $domains)
    {
        $this->clearCaches($domains);
    }

    public function domainsDeleted(domain $domains)
    {
        $this->clearCaches($domains);
    }

    public function domainsRestored(domain $domains)
    {
        $this->clearCaches($domains);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
