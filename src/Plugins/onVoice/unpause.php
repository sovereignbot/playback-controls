<?php

namespace Sovereign\Plugins\onVoice;

use Discord\Discord;
use Discord\Parts\Channel\Channel;
use Discord\Parts\Channel\Message;
use Discord\WebSockets\WebSocket;
use Monolog\Logger;
use Sovereign\Lib\cURL;

class unpause
{
    public function run(Message $message, Discord $discord, WebSocket $webSocket, Logger $log, &$audioStreams, Channel $channel, cURL $curl)
    {
        $guildID = $channel->guild_id;
        if (isset($audioStreams[$guildID])) {
            $audioStreams[$guildID]->unpause();
            $message->reply("Resuming audio playback..");
        }
    }
}
