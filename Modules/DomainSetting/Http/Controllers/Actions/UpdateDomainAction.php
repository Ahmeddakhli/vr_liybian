<?php

namespace Modules\DomainSetting\Http\Controllers\Actions;

use Modules\DomainSetting\Domain;
use Modules\DomainSetting\DomainTranslation;
use DB;
use Carbon\Carbon;

use Modules\DomainSetting\Http\Resources\domainsResource;

class UpdateDomainAction
{
    public function execute($id, array $data): domainsResource
    {
        $created_at = Carbon::now()->toDateTimeString();
        $updated_at = Carbon::now()->toDateTimeString();

        // Get the domains
        $domains = Domain::find($id);

        // Update the domains
        // Trigger update domains on domains to cache its values
        if (isset($data['is_active']) && $data['is_active'] == 'on') {
            $data['is_active'] = 1;
        } else {
            $data['is_active'] = 0;
        }
        $domains->update($data);

        $path = public_path("../../../../$domains->domain/public_html/index.html");
        if ($domains->folder_name) {
            $path = public_path("../../../../$domains->domain/public_html/$domains->folder_name/index.html");

}
        
        if (!is_dir(public_path("../../../../$domains->domain/public_html/$domains->folder_name"))) {
            // If the folder doesn't exist, create it
            mkdir(public_path("../../../../$domains->domain/public_html/$domains->folder_name"), 0755, true);
        }
        $tourContent = "
        <html>
        <head>
            <title>API Sample</title>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1'>
        </head>
        <body>
            <style>
        iframe {
          position: absolute;  
          top: 0;
          left: 0;  
          width: 100vw;
          height: 100vh;
        }  
        </style>
        <!-- viewer embed code !-->
        <iframe id='svt_iframe_$domains->tour_code' allow='accelerometer; camera; display-capture; fullscreen; geolocation; gyroscope; magnetometer; microphone; midi; xr-spatial-tracking;' width='100%' height='600px' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://libyancube.com/software/viewer/index.php?code=$domains->tour_code'></iframe>
        
        <script>
            var id_iframe = 'svt_iframe_$domains->tour_code';
            var iframe_svt = document.getElementById(id_iframe).contentWindow;
            window.addEventListener('message', function(evt) {
                if(evt.data.payload=='initialized') {
                    //Tour initialized -> put your code here
                    var buttons = document.querySelectorAll('button');
                    for (var i = 0; i < buttons.length; ++i) {
                        buttons[i].disabled = false;
                    }
                }
            }, false);
          
        </script>
        </body>
        </html>"; // Replace with the content you want to put in the sitemap

        // Check if the file exists
        // If the file exists, update its content
        file_put_contents($path, $tourContent);

        // Reload the instance
        $domains = Domain::find($domains->id);

        // Transform the result
        $domains = new domainsResource($domains);

        return $domains;
    }
}
