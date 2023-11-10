<?php

namespace Modules\DomainSetting\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Modules\DomainSetting\DomainTranslation;
use Modules\DomainSetting\Domain;
use Cache;
use LaravelLocalization;

class DomainTranslationEvents
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

    private function clearCaches(DomainTranslation $domain_translation)
    {
        // Clearing domains
        $domains = Domain::find($domain_translation->domain_id);
        Cache::forget('domain_' . $domains->id . '_value_' . 'default');
        Cache::forget('domain_' . $domains->id . '_key_words_' . 'default');
        Cache::forget('domain_' . $domains->id . '_short_description_' . 'default');
        Cache::forget('domain_' . $domains->id . '_description_' . 'default');
        Cache::forget('domain_' . $domains->id . '_popup_contact_us_title_' . 'default');
        
        $supported_locales = LaravelLocalization::getSupportedLocales();
        foreach ($supported_locales as $key => $supported_locale) {
            Cache::forget('domain_' . $domains->id . '_value_' . $key);
            Cache::forget('domain_' . $domains->id . '_key_words_' . $key);
            Cache::forget('domain_' . $domains->id . '_short_description_' . $key);
            Cache::forget('domain_' . $domains->id . '_description_' . $key);
            Cache::forget('domain_' . $domains->id . '_popup_contact_us_title_' . $key);
            
        }
    }

    public function DomainTranslationCreated(DomainTranslation $domain_translation)
    {
        $this->clearCaches($domain_translation);
    }

    public function DomainTranslationUpdated(DomainTranslation $domain_translation)
    {
        $this->clearCaches($domain_translation);
    }

    public function DomainTranslationSaved(DomainTranslation $domain_translation)
    {
        $this->clearCaches($domain_translation);
    }

    public function DomainTranslationDeleted(DomainTranslation $domain_translation)
    {
        $this->clearCaches($domain_translation);
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
