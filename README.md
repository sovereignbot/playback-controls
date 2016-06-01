# Audio Playback Controls

## Install

In your main sovereign bot install, run this:
```
composer require sovereignbot/playback-controls
```

Add the youtube-player service provider to your config file:
```
$config['serviceProviders'] = [
    ... 
    Sovereign\Service\PlaybackControlServiceProvider::class
];
```
And Restart Sovereign!
