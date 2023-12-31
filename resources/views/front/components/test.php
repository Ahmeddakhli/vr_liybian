
    $ui_style = [
        'icons_tooltips'=>1,
        'preview_room_slider'=>1,
        'items'=>[
            'list'=>[
                'background_initial'=>'',
                'background'=>'rgba(0,0,0,0.1)',
            ],
            'annotation'=>[
                'position'=>'top_left',
                'color'=>'rgba(255,255,255,1)',
                'background'=>'rgba(0,0,0,0.4)',
            ],
            'title'=>[
                'color'=>'rgba(255,255,255,1)',
                'background'=>'rgba(0,0,0',
                'background_height'=>85
            ],
            'comments'=>[
                'color'=>'rgba(255,255,255,1)'
            ],
            'nav_control'=>[
                'color'=>'rgba(255,255,255,0.6)',
                'color_hover'=>'rgba(255,255,255,1)',
                'background'=>'rgba(0,0,0,0.4)'
            ],
            'logo'=>[
                'position'=>'top_right',
                'height'=>40,
                'padding_top'=>0,
                'padding_left'=>0,
                'padding_right'=>0
            ],
            'map'=>[
                'position'=>'top_right',
                'color'=>'rgba(50,50,50,1)',
                'color_hover'=>'rgba(0,0,0,1)',
                'background'=>'rgba(255,255,255,1)'
            ],
        ],
        'icons'=>[
            'menu'=>[
                'color'=>'rgba(255,255,255,0.8)',
                'color_hover'=>'rgba(255,255,255,1)',
            ],
            'list_alt'=>[
                'color'=>'rgba(255,255,255,0.8)',
                'color_hover'=>'rgba(255,255,255,1)',
            ],
            'audio'=>[
                'color'=>'rgba(255,255,255,0.8)',
                'color_hover'=>'rgba(255,255,255,1)',
            ],
            'floorplan'=>[
                'color'=>'rgba(255,255,255,0.8)',
                'color_hover'=>'rgba(255,255,255,1)',
            ],
            'map'=>[
                'color'=>'rgba(255,255,255,0.8)',
                'color_hover'=>'rgba(255,255,255,1)',
            ],
            'fullscreen'=>[
                'color'=>'rgba(255,255,255,0.8)',
                'color_hover'=>'rgba(255,255,255,1)',
            ]
        ],
        'controls'=>[
            'list_alt_menu'=>[
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon_color'=>'rgba(0,0,0,1)',
                'icon_color_hover'=>'rgba(0,0,0,1)'
            ],
            'list'=>[
                'type'=>'default',
                'position'=>'left',
                'order'=>0,
                'style'=>'background-color:rgba(0,0,0,0.6);color:rgba(255,255,255,0.8);',
                'style_hover'=>'background-color:rgba(0,0,0,0.8);color:rgba(255,255,255,1);'
            ],
            'arrows'=>[
                'type'=>'default',
                'position'=>'left',
                'order'=>0,
                'style'=>'background-color:rgba(0,0,0,0.6);color:rgba(255,255,255,0.8);',
                'style_hover'=>'background-color:rgba(0,0,0,0.8);color:rgba(255,255,255,1);'
            ],
            'nav_arrows'=>[
                'style'=>'background-color:transparent;color:rgba(255,255,255,0.8);',
                'style_hover'=>'background-color:transparent;color:rgba(255,255,255,1);'
            ],
            'voice'=>[
                'type'=>'button',
                'position'=>'left',
                'order'=>0
            ],
            'custom'=>[
                'type'=>'button',
                'position'=>'left',
                'order'=>10,
                'style'=>'background-color:rgba(0,0,0,0.6);color:rgba(255,255,255,1);',
                'style_hover'=>'background-color:rgba(0,0,0,0.8);color:rgba(255,255,255,1);',
                'icon'=>'fas fa-bullhorn',
                'label'=>'Custom'
            ],
            'info'=>[
                'type'=>'button',
                'position'=>'left',
                'order'=>1,
                'style'=>'background-color:rgba(0,0,0,0.6);color:rgba(255,255,255,1);',
                'style_hover'=>'background-color:rgba(0,0,0,0.8);color:rgba(255,255,255,1);',
                'icon'=>'fas fa-info'
            ],
            'dollhouse'=>[
                'type'=>'button',
                'position'=>'left',
                'order'=>3,
                'style'=>'background-color:rgba(0,0,0,0.6);color:rgba(255,255,255,1);',
                'style_hover'=>'background-color:rgba(0,0,0,0.8);color:rgba(255,255,255,1);',
                'icon'=>'fas fa-cube'
            ],
            'gallery'=>[
                'type'=>'button',
                'position'=>'left',
                'order'=>2,
                'style'=>'background-color:rgba(0,0,0,0.6);color:rgba(255,255,255,1);',
                'style_hover'=>'background-color:rgba(0,0,0,0.8);color:rgba(255,255,255,1);',
                'icon'=>'fas fa-images'
            ],
            'facebook'=>[
                'type'=>'button',
                'position'=>'right',
                'order'=>1,
                'style'=>'background-color:rgba(66,103,178,0.8);color:rgba(255,255,255,1);',
                'style_hover'=>'background-color:rgba(66,103,178,0.9);color:rgba(255,255,255,1);',
                'icon'=>'fab fa-facebook-messenger'
            ],
            'whatsapp'=>[
                'type'=>'button',
                'position'=>'right',
                'order'=>2,
                'style'=>'background-color:rgba(37,211,102,0.8);color:rgba(255,255,255,1);',
                'style_hover'=>'background-color:rgba(37,211,102,0.9);color:rgba(255,255,255,1);',
                'icon'=>'fab fa-whatsapp'
            ],
            'presentation'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>5,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'fas fa-play'
            ],
            'share'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>6,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'fas fa-share-alt',
                'providers'=>'email,whatsapp,facebook,twitter,linkedin,telegram,facebook_messenger,pinterest,reddit,line,viber,vk,qzone,wechat'
            ],
            'form'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>7,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>$form_icon
            ],
            'live'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>9,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'fas fa-phone'
            ],
            'meeting'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>8,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'fas fa-handshake'
            ],
            'vr'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>3,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'fas fa-vr-cardboard'
            ],
            'compass'=>[
                'type'=>'button',
                'position'=>'right',
                'order'=>3,
                'style'=>'background-color:rgba(0,0,0,0.6);color:rgba(255,255,255,1);',
                'style_hover'=>'background-color:rgba(0,0,0,0.8);color:rgba(255,255,255,1);'
            ],
            'icons'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>0,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'far fa-dot-circle'
            ],
            'measures'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>0,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'fas fa-ruler-combined'
            ],
            'autorotate'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>1,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'fas fa-sync-alt'
            ],
            'orient'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>2,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'far fa-compass'
            ],
            'annotations'=>[
                'type'=>'menu',
                'position'=>'left',
                'order'=>4,
                'style'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'style_hover'=>'background-color:rgba(255,255,255,1);color:rgba(0,0,0,1);',
                'icon'=>'far fa-comment-alt'
            ],
            'location'=>[
                'type'=>'button',
                'position'=>'right',
                'order'=>0,
                'style'=>'background-color:rgba(0,0,0,0.6);color:rgba(255,255,255,1);',
                'style_hover'=>'background-color:rgba(0,0,0,0.8);color:rgba(255,255,255,1);',
                'icon'=>'fas fa-map-marker-alt',
                'label'=>'Location'
            ],
        ]
    ];


   
    <div class="noselect" id="context_info"><?php echo $context_info; ?></div>
    <div id="vt_container">
        <div class="loading hidden" style="color:<?php echo $loading_text_color; ?>">
            <i onclick="start_vt();" id="icon_play" class="fas fa-play"></i>
            <div class="protect <?php echo ($protect_type=='mailchimp') ? 'protect_mc' : ''; ?>">
                <?php if($protect_type=='password') { ?>
                    <span class="protect_title noselect"><?php echo $password_title; ?></span><br>
                    <span class="protect_description noselect"><?php echo $password_description; ?></span>
                    <div class="password-wrapper cf">
                        <input autocomplete="new-password" placeholder="<?php echo _("type your password"); ?>" id="vt_password" type="text" style="box-shadow:none;color:<?php echo $loading_text_color; ?>" />
                        <button style="background-color:<?php echo $loading_text_color; ?>;color:<?php echo $loading_background_color; ?>" id="btn_check_password" onclick="check_password_vt();"><i class="fas fa-sign-in-alt"></i></button>
                    </div>
                <?php } else if($protect_type=='lead') { ?>
                    <span class="protect_title noselect"><?php echo $password_title; ?></span><br>
                    <span class="protect_description noselect"><?php echo $password_description; ?></span>
                    <form method="post" action="#" class="form_leads_vt">
                        <label>
                            <input id="lead_input_already_vt" onclick="toggle_lead_already_vt();" type="checkbox" />&nbsp;&nbsp;<span class="lead_already_msg"><?php echo _("I have already entered my data"); ?></span>
                        </label>
                        <div class="lead-wrapper">
                            <input placeholder="<?php echo _("E-Mail"); ?>" required id="lead_email_vt" type="email" style="color:<?php echo $loading_text_color; ?>" />
                        </div>
                        <br>
                        <div class="lead-wrapper">
                            <input placeholder="<?php echo _("Name"); ?>" required id="lead_name_vt" type="text" style="color:<?php echo $loading_text_color; ?>" />
                        </div>
                        <br>
                        <div class="lead-wrapper">
                            <input placeholder="<?php echo _("Phone"); ?>" required pattern="^[+]?[0-9]{9,12}$" id="lead_phone_vt" type="tel" style="color:<?php echo $loading_text_color; ?>" />
                        </div>
                        <br>
                        <input type="hidden" id="protect_email_vt" value="<?php echo $protect_email; ?>">
                        <button style="background-color:<?php echo $loading_text_color; ?>;color:<?php echo $loading_background_color; ?>" type="submit" id="btn_check_leads_vt" class="fas fa-check"></button>
                    </form>
                <?php } else if($protect_type=='mailchimp') { ?>
                <div style="color:black;" id="lead_mc_form_vt">
                    <?php
                    $fixedCode = preg_replace('/fnames\[(\d+)\]=(\w+);/', "fnames[$1]='$2';", $form_mc);
                    $fixedCode = preg_replace('/ftypes\[(\d+)\]=(\w+);/', "ftypes[$1]='$2';", $fixedCode);
                    $fixedCode = str_replace(';,',';',$fixedCode);
                    echo $fixedCode;
                    ?>
                    <script>
                        const targetNode_mc = document.querySelector('#lead_mc_form_vt #mce-success-response');
                        var change_mc_vt = false;
                        const observer_mc_vt = new MutationObserver(function(mutationsList, observer) {
                            mutationsList.forEach(mutation => {
                                if (mutation.attributeName === 'style' && targetNode_mc.style.display === 'block') {
                                    if(!change_mc_vt) {
                                        setTimeout(function() {
                                            check_mc_subscribe_vt();
                                        },1000);
                                        observer.disconnect();
                                        change_mc_vt = true;
                                    }
                                }
                            });
                        });
                        const config_mc_vt = { attributes: true };
                        observer_mc_vt.observe(targetNode_mc, config_mc_vt);
                    </script>
                </div>
                <?php } ?>
            </div>
            <style>
                #vt_password::placeholder, #lead_email_vt::placeholder, #lead_name_vt::placeholder, #lead_phone_vt::placeholder {
                    color: <?php echo $loading_text_color; ?>;
                    opacity: 1;
                }
                #vt_password:-ms-input-placeholder, #lead_email_vt:-ms-input-placeholder, #lead_name_vt:-ms-input-placeholder, #lead_phone_vt:-ms-input-placeholder {
                    color: <?php echo $loading_text_color; ?>;
                }
                #vt_password::-ms-input-placeholder, #lead_email_vt::-ms-input-placeholder, #lead_name_vt::-ms-input-placeholder, #lead_phone_vt::-ms-input-placeholder {
                    color: <?php echo $loading_text_color; ?>;
                }
            </style>
            <div class="progress-circle noselect"></div>
            <div class="progress">
                <?php if($logo!='') : ?>
                    <img src="<?php echo ($s3_enabled) ? $s3_url : ''; ?>content/<?php echo $logo; ?>" />
                <?php endif; ?>
                <h3 class="noselect" id="name_virtualtour"><?php echo $name_virtualtour; ?></h3>
                <h2 class="noselect <?php echo (empty($author_virtualtour)) ? 'hidden' : ''; ?>" id="author_virtualtour"><?php echo sprintf(_("presented by %s"),$author_virtualtour); ?></h2>
            </div>
        </div>
        <div id="background_loading" class="background_opacity"></div>
        <div id="dialog">
            <div id="typed" class="noselect"></div>
        </div>
        <div class="live_call">
            <style>
                <?php if($peer_id=='') { ?>
                .video_background_my {
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JBMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JCMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MUM4N0ZDRkYwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MUM4N0ZEMDAwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                    border: 2px solid #00aced;
                }
                .video_background_remote {
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JFMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JGMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QzI3RURDQkMwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QzI3RURDQkQwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                    border: 2px solid #ffa90b;
                }
                .floating-chat .chat .messages li.self:before {
                    left: -45px;
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JBMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JCMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MUM4N0ZDRkYwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MUM4N0ZEMDAwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                }
                .floating-chat .chat .messages li.other:before {
                    right: -45px;
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JFMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JGMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QzI3RURDQkMwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QzI3RURDQkQwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                }
                <?php } else { ?>
                .video_background_remote {
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JBMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JCMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MUM4N0ZDRkYwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MUM4N0ZEMDAwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                    border: 2px solid #00aced;
                }
                .video_background_my {
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JFMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JGMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QzI3RURDQkMwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QzI3RURDQkQwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                    border: 2px solid #ffa90b;
                }
                .floating-chat .chat .messages li.self:before {
                    left: -45px;
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JFMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JGMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QzI3RURDQkMwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QzI3RURDQkQwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                }
                .floating-chat .chat .messages li.other:before {
                    right: -45px;
                    background-image: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMuaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0NjAsIDIwMjAvMDUvMTItMTY6MDQ6MTcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMyN0VEQ0JBMEM2MDExRUI4QjlGRTgyODRCODIxQzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMyN0VEQ0JCMEM2MDExRUI4QjlGRTgyODRCODIxQzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MUM4N0ZDRkYwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MUM4N0ZEMDAwQzYwMTFFQjhCOUZFODI4NEI4MjFDNjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAACAgICAgICAgICAwICAgME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);
                }
                <?php } ?>
            </style>
            <div class="live_status noselect">
                <i id="btn_live_end" class="fas fa-phone-slash" onclick="close_live();"></i>
                <i id="btn_link_session" class="fas fa-link" onclick="open_live_link_modal();"></i>
                <i id="btn_lock_session" title="<?php echo _("lock / unlock the receiver's control of the tour"); ?>" class="fas fa-lock tooltip" onclick="unlock_receiver();"></i>
                <i id="btn_live_status" class="fas fa-circle"></i>
                <span style="float: left"><?php echo _("initializing ..."); ?></span>
            </div>
            <div class="video_my_wrapper">
                <div class="video-wrapper">
                    <div class="video_background video_background_my">
                        <video id="webcam_my" autoplay="true" crossorigin="anonymous" muted="muted" playsinline ></video>
                    </div>
                </div>
            </div>
            <div class="video_remote_wrapper">
                <div class="video-wrapper">
                    <div class="video_background video_background_remote">
                        <video id="webcam_remote" autoplay="true" crossorigin="anonymous" playsinline ></video>
                    </div>
                </div>
            </div>
            <div class="floating-chat">
                <i class="fa fa-comments" aria-hidden="true"></i>
                <div class="chat">
                    <div class="header">
                        <span class="title noselect"><?php echo _("Chat"); ?></span>
                        <button>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                    <ul class="messages"></ul>
                    <div class="footer">
                        <div class="text-box" contenteditable="true" disabled="true"></div>
                        <button id="sendMessage"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
            <div class="msg_lock noselect"><i class="fas fa-lock"></i> <?php echo _("input locked"); ?></div>
        </div>
        <div id="floatingSocialShare">
            <i onclick="toggle_share()" class="fa fa-times-circle"></i>
            <?php
            $array_share_providers = explode(",",$ui_style['controls']['share']['providers']);
            $array_share_providers_settings = explode(",",$share_providers);
            ?>
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                <?php if(in_array('email',$array_share_providers_settings)) : ?><a class="a2a_button_email <?php echo (in_array('email',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('whatsapp',$array_share_providers_settings)) : ?><a class="a2a_button_whatsapp <?php echo (in_array('whatsapp',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('facebook',$array_share_providers_settings)) : ?><a class="a2a_button_facebook <?php echo (in_array('facebook',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('twitter',$array_share_providers_settings)) : ?><a class="a2a_button_twitter <?php echo (in_array('twitter',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('linkedin',$array_share_providers_settings)) : ?><a class="a2a_button_linkedin <?php echo (in_array('linkedin',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('telegram',$array_share_providers_settings)) : ?><a class="a2a_button_telegram <?php echo (in_array('telegram',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('facebook_messenger',$array_share_providers_settings)) : ?><a class="a2a_button_facebook_messenger <?php echo (in_array('facebook_messenger',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('pinterest',$array_share_providers_settings)) : ?><a class="a2a_button_pinterest <?php echo (in_array('pinterest',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('reddit',$array_share_providers_settings)) : ?><a class="a2a_button_reddit <?php echo (in_array('reddit',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('line',$array_share_providers_settings)) : ?><a class="a2a_button_line <?php echo (in_array('line',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('viber',$array_share_providers_settings)) : ?><a class="a2a_button_viber <?php echo (in_array('viber',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('vk',$array_share_providers_settings)) : ?><a class="a2a_button_vk <?php echo (in_array('vk',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('qzone',$array_share_providers_settings)) : ?><a class="a2a_button_qzone <?php echo (in_array('qzone',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
                <?php if(in_array('wechat',$array_share_providers_settings)) : ?><a class="a2a_button_wechat <?php echo (in_array('wechat',$array_share_providers) ? '' : 'hidden'); ?>"></a><?php endif; ?>
            </div>
            <script>
                function share_config(share_data) {
                    if(show_share==2) {
                        if(current_panorama_type=='image' || is_iOS() || current_panorama_type=='hls' || current_panorama_type=='lottie') {
                            var current_yaw = parseFloat(pano_viewer.getYaw());
                            var current_pitch = parseFloat(pano_viewer.getPitch());
                        } else {
                            var current_yaw = parseFloat(video_viewer.pnlmViewer.getYaw());
                            var current_pitch = parseFloat(video_viewer.pnlmViewer.getPitch());
                        }
                        var url_vt = window.base_url+'viewer/index.php?code='+window.code+'&room='+current_id_panorama+'&yaw='+current_yaw+'&pitch='+current_pitch;
                        return {
                            url: url_vt,
                        };
                    }
                }
                var a2a_config = a2a_config || {};
                a2a_config.callbacks = a2a_config.callbacks || [];
                a2a_config.callbacks.push({
                    share: share_config,
                });
            </script>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
        </div>
        <div id="flyin"></div>
        <div id="map_zoomed_background"></div>
        <div id="box_poi_fullscreen_div"></div>
        <div id="div_panoramas">
            <?php if($ar_simulator) : ?>
                <div id="unsupported_ar_simulator">
                    <span class="noselect"><?php echo _("This device is not compatible for augmented reality simulation"); ?></span>
                </div>
                <div id="msg_camera_ar_simulator">
                    <span class="noselect"><?php echo _("Activate the camera to start the augmented reality simulation"); ?></span>
                </div>
                <div id="activate_ar_simulator">
                    <span class="noselect"><?php echo _("Move the camera to overlay the underlying image"); ?></span>
                </div>
                <button class="noselect" onclick="start_ar_simulator();" id="btn_ar_simulator"><i class="fas fa-play"></i>&nbsp;&nbsp;<?php echo _("START"); ?></button>
                <button class="noselect" id="btn_toggle_camera_ar_simulator"><i class="fas fa-camera"></i>&nbsp;&nbsp;<?php echo _("Toggle Camera"); ?></button>
                <div id="container_ar_simulator">
                    <video id="webcam_ar_simulator" autoplay="true" crossorigin="anonymous" playsinline ></video>
                    <i id="loading_ar">
                        <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                                    <stop stop-color="#fff" stop-opacity="0" offset="0%"/>
                                    <stop stop-color="#fff" stop-opacity=".631" offset="63.146%"/>
                                    <stop stop-color="#fff" offset="100%"/>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <g transform="translate(1 1)">
                                    <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                                    </path>
                                    <circle fill="#fff" cx="36" cy="18" r="1">
                                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                                    </circle>
                                </g>
                            </g>
                        </svg>
                    </i>
                </div>
            <?php endif; ?>
            <div class="passcode_div">
                <h2></h2>
                <p></p>
                <div class="input_material">
                    <input placeholder=" " id="passcode" type="text" autocomplete="new-password" /><span class="highlight"></span><span class="bar"></span>
                    <label><?php echo _("Passcode"); ?></label>
                </div>
                <i onclick="check_passcode();" id="btn_check_passcode" class="fas fa-unlock-alt"></i>
                <i onclick="close_protect_form();" id="btn_close_passcode" class="fas fa-times"></i>
            </div>
            <div class="leads_div">
                <h2></h2>
                <p></p>
                <form method="post" action="#" class="form_leads">
                    <label>
                        <input id="lead_input_already" onclick="toggle_lead_already();" style="margin-bottom:20px;padding-bottom:2px;" type="checkbox" />&nbsp;&nbsp;<span style="vertical-align:middle;"><?php echo _("I have already entered my data"); ?></span>
                    </label>
                    <div class="input_material">
                        <input placeholder=" " required id="lead_email" type="email" /><span class="highlight"></span><span class="bar"></span>
                        <label><?php echo _("E-Mail"); ?> *</label>
                    </div>
                    <br>
                    <div class="input_material">
                        <input placeholder=" " required id="lead_name" type="text" /><span class="highlight"></span><span class="bar"></span>
                        <label><?php echo _("Name"); ?> *</label>
                    </div>
                    <br>
                    <div class="input_material">
                        <input placeholder=" " required pattern="^[+]?[0-9]{9,12}$" id="lead_phone" type="tel" /><span class="highlight"></span><span class="bar"></span>
                        <label><?php echo _("Phone"); ?> *</label>
                    </div>
                    <input type="hidden" id="protect_email" value="">
                    <button type="submit" id="btn_check_leads" class="fas fa-check"></button>
                    <i onclick="close_protect_form();" id="btn_close_leads" class="fas fa-times"></i>
                </form>
            </div>
            <div class="mailchimp_form_div">
            </div>
            <div class="header_vt">
                <div class="name_vt"></div>
                <div class="room_vt"></div>
                <div class="comments_vt" onclick="toggle_comments();">
                    <i id="comments_control" class="fas fa-comments"></i>
                    <span class="disqus-comment-count" data-disqus-identifier="0"></span>
                </div>
                <div class="visitors_rt_stats"><div class="visitors_block"><span id="visitors_here">1</span>&nbsp;<?php echo _("here"); ?>&nbsp;&nbsp;<i class="fas fa-users"></i>&nbsp;&nbsp;<span id="visitors_total">1</span>&nbsp;<?php echo _("total"); ?></div><div class="separator_block">&nbsp;&nbsp;|&nbsp;&nbsp;</div><div class="views_block"><i class="fas fa-eye"></i>&nbsp;<span id="views_total_count">0</span> <?php echo _("views"); ?></div></div>
                <div class="rooms_view_sel"></div>
                <?php if($shop_type=='snipcart') { ?>
                <?php if($use_cart && !empty($snipcart_api_key)) : ?>
                    <button class="snipcart-checkout"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;<span class="snipcart-total-price">--</span>&nbsp;&nbsp;<span class="snipcart-items-count">0</span></button>
                <?php endif;
                } else if($shop_type=='woocommerce') { ?>
                    <button onclick="open_cart_wc(false);" class="woocommerce-checkout"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;<span class="woocommerce-total-price">--</span>&nbsp;&nbsp;<span class="woocommerce-items-count">0</span></button>
                <?php } ?>
            </div>
            <div class="header_vt_vr">
                <div class="name_vt"></div>
                <div class="room_vt"></div>
                <div class="author_vt"></div>
            </div>
            <div id="btn_stop_presentation" onclick="stop_presentation();" class="p_control tooltip pnlm-controls pnlm-control small-element">
                <i class="fa fa-stop"></i>
            </div>
            <div id="btn_stop_vr" onclick="disable_vr();" class="p_control tooltip pnlm-controls pnlm-control small-element">
                <i class="fas fa-times"></i>
            </div>
            <div id="btn_stop_vr_2" onclick="disable_vr();" class="p_control tooltip pnlm-controls pnlm-control small-element">
                <i class="fas fa-times"></i>
            </div>
            <div id="controls_bottom_left">
                <div style="order:<?php echo ($ui_style['controls']['voice']['order']); ?>" class="voice_control"></div>
                <?php if($ui_style['controls']['arrows']['position']=='left' || $ui_style['controls']['list']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['arrows']['order']); ?>;" class="controls_arrows noselect <?php echo ($ui_style['controls']['list']['type']=='default' && $ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>">
                        <i onclick="toggle_list()" class="fa fa-chevron-up list_control_alt noselect small-element <?php echo ($ui_style['controls']['list']['type']=='default') ? 'hidden' : ''; ?>"></i>
                        <i data-roomtarget="" title="" class="fa fa-chevron-left prev_arrow noselect disabled small-element <?php echo ($ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>"></i>
                        <i data-roomtarget="" title="" class="fa fa-chevron-right next_arrow noselect disabled small-element <?php echo ($ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>"></i>
                    </div>
                <?php endif; ?>
                <?php if($ui_style['controls']['info']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['info']['order']); ?>;" title="<?php echo _("Info"); ?>" class="small-element controls_btn info_control tooltip disabled <?php echo ($ui_style['controls']['info']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_info_box()"><?php echo print_library_icon('info','icon'); ?><i style="<?php echo ($ui_style['controls']['info']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['info']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['dollhouse']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['dollhouse']['order']); ?>;" title="<?php echo _("3D View"); ?>" class="small-element controls_btn dollhouse_control tooltip disabled <?php echo ($ui_style['controls']['dollhouse']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_dollhouse()"><?php echo print_library_icon('dollhouse','icon'); ?><i style="<?php echo ($ui_style['controls']['dollhouse']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['dollhouse']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['gallery']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['gallery']['order']); ?>;" title="<?php echo _("Gallery"); ?>" id="gallery_control" class="small-element controls_btn gallery_control tooltip <?php echo ($ui_style['controls']['gallery']['type']=='menu') ? 'hidden' : ''; ?>" onclick="open_gallery()"><?php echo print_library_icon('gallery','icon'); ?><i style="<?php echo ($ui_style['controls']['gallery']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['gallery']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['facebook']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['facebook']['order']); ?>;" title="<?php echo _("Facebook Chat"); ?>" class="small-element controls_btn facebook_control tooltip <?php echo ($ui_style['controls']['facebook']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_facebook_messenger()"><?php echo print_library_icon('facebook','icon'); ?><i style="<?php echo ($ui_style['controls']['facebook']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['facebook']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['whatsapp']['position']=='left') : ?>
                    <a style="order:<?php echo ($ui_style['controls']['whatsapp']['order']); ?>;" title="<?php echo _("Whatsapp Chat"); ?>" class="small-element controls_btn whatsapp_control tooltip <?php echo ($ui_style['controls']['whatsapp']['type']=='menu') ? 'hidden' : ''; ?>" target="_blank" href="#"><?php echo print_library_icon('whatsapp','icon'); ?><i style="<?php echo ($ui_style['controls']['whatsapp']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['whatsapp']['icon']; ?>"></i></a>
                <?php endif; ?>
                <?php if($ui_style['controls']['presentation']['position']=='left') : ?>
                    <?php if($is_presentation_video) { ?>
                        <a style="order:<?php echo ($ui_style['controls']['presentation']['order']); ?>;" title="<?php echo _("Presentation"); ?>" class="small-element controls_btn presentation_control tooltip <?php echo ($ui_style['controls']['presentation']['type']=='menu') ? 'hidden' : ''; ?>" href="<?php echo $presentation_video; ?>" data-fancybox ><?php echo print_library_icon('presentation','icon'); ?><i style="<?php echo ($ui_style['controls']['presentation']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['presentation']['icon']; ?>"></i></a>
                    <?php } else if($presentation_type!='video') { ?>
                        <div style="order:<?php echo ($ui_style['controls']['presentation']['order']); ?>;" title="<?php echo _("Presentation"); ?>" class="small-element controls_btn presentation_control tooltip <?php echo ($ui_style['controls']['presentation']['type']=='menu') ? 'hidden' : ''; ?>" onclick="start_presentation()"><?php echo print_library_icon('presentation','icon'); ?><i style="<?php echo ($ui_style['controls']['presentation']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['presentation']['icon']; ?>"></i></div>
                    <?php } ?>
                <?php endif; ?>
                <?php if($ui_style['controls']['form']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['form']['order']); ?>;" title="" class="small-element controls_btn form_control tooltip <?php echo ($ui_style['controls']['form']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_form()"><?php echo print_library_icon('form','icon'); ?><i style="<?php echo ($ui_style['controls']['form']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['form']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['share']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['share']['order']); ?>;" title="<?php echo _("Share"); ?>" class="small-element controls_btn share_control tooltip <?php echo ($ui_style['controls']['share']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_share()"><?php echo print_library_icon('share','icon'); ?><i style="<?php echo ($ui_style['controls']['share']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['share']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['live']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['live']['order']); ?>;" title="<?php echo _("Start Live Session"); ?>" class="small-element controls_btn live_control tooltip <?php echo ($ui_style['controls']['live']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_live()"><?php echo print_library_icon('live','icon'); ?><i style="<?php echo ($ui_style['controls']['live']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['live']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['meeting']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['meeting']['order']); ?>;" title="<?php echo _("Join Meeting"); ?>" class="small-element controls_btn meeting_control tooltip <?php echo ($ui_style['controls']['meeting']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_meeting()"><?php echo print_library_icon('meeting','icon'); ?><i style="<?php echo ($ui_style['controls']['meeting']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['meeting']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['vr']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['vr']['order']); ?>;" title="<?php echo _("Web VR"); ?>" class="small-element controls_btn vr_control tooltip <?php echo ($ui_style['controls']['vr']['type']=='menu') ? 'hidden' : ''; ?>" onclick="enable_vr()"><?php echo print_library_icon('vr','icon'); ?><i style="<?php echo ($ui_style['controls']['vr']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['vr']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['compass']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['compass']['order']); ?>;" id="compass_icon" class="small-element controls_btn compass_control"><i class="icon-compass"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom']['order']); ?>;" title="<?php echo $ui_style['controls']['custom']['label']; ?>" class="small-element controls_btn custom_control tooltip disabled <?php echo ($ui_style['controls']['custom']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom_box()"><?php echo print_library_icon('custom','icon'); ?><i style="<?php echo ($ui_style['controls']['custom']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom2']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom2']['order']); ?>;" title="<?php echo $ui_style['controls']['custom2']['label']; ?>" class="small-element controls_btn custom2_control tooltip disabled <?php echo ($ui_style['controls']['custom2']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom2_box()"><?php echo print_library_icon('custom2','icon'); ?><i style="<?php echo ($ui_style['controls']['custom2']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom2']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom3']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom3']['order']); ?>;" title="<?php echo $ui_style['controls']['custom3']['label']; ?>" class="small-element controls_btn custom3_control tooltip disabled <?php echo ($ui_style['controls']['custom3']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom3_box()"><?php echo print_library_icon('custom3','icon'); ?><i style="<?php echo ($ui_style['controls']['custom3']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom3']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['location']['position']=='left') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['location']['order']); ?>;" title="<?php echo $ui_style['controls']['location']['label']; ?>" class="small-element controls_btn location_control tooltip disabled <?php echo ($ui_style['controls']['location']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_location_box()"><?php echo print_library_icon('location','icon'); ?><i style="<?php echo ($ui_style['controls']['location']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['location']['icon']; ?>"></i></div>
                <?php endif; ?>
            </div>
            <div id="controls_bottom_center">
                <?php if($ui_style['controls']['arrows']['position']=='center' || $ui_style['controls']['list']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['arrows']['order']); ?>;" class="controls_arrows noselect <?php echo ($ui_style['controls']['list']['type']=='default' && $ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>">
                        <i onclick="toggle_list()" class="fa fa-chevron-up list_control_alt noselect small-element <?php echo ($ui_style['controls']['list']['type']=='default') ? 'hidden' : ''; ?>"></i>
                        <i data-roomtarget="" title="" class="fa fa-chevron-left prev_arrow noselect disabled small-element <?php echo ($ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>"></i>
                        <i data-roomtarget="" title="" class="fa fa-chevron-right next_arrow noselect disabled small-element <?php echo ($ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>"></i>
                    </div>
                <?php endif; ?>
                <?php if($ui_style['controls']['info']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['info']['order']); ?>;" title="<?php echo _("Info"); ?>" class="small-element controls_btn info_control tooltip disabled <?php echo ($ui_style['controls']['info']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_info_box()"><?php echo print_library_icon('info','icon'); ?><i style="<?php echo ($ui_style['controls']['info']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['info']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['dollhouse']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['dollhouse']['order']); ?>;" title="<?php echo _("3D View"); ?>" class="small-element controls_btn dollhouse_control tooltip disabled <?php echo ($ui_style['controls']['dollhouse']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_dollhouse()"><?php echo print_library_icon('dollhouse','icon'); ?><i style="<?php echo ($ui_style['controls']['dollhouse']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['dollhouse']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['gallery']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['gallery']['order']); ?>;" title="<?php echo _("Gallery"); ?>" id="gallery_control" class="small-element controls_btn gallery_control tooltip <?php echo ($ui_style['controls']['gallery']['type']=='menu') ? 'hidden' : ''; ?>" onclick="open_gallery()"><?php echo print_library_icon('gallery','icon'); ?><i style="<?php echo ($ui_style['controls']['gallery']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['gallery']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['facebook']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['facebook']['order']); ?>;" title="<?php echo _("Facebook Chat"); ?>" class="small-element controls_btn facebook_control tooltip <?php echo ($ui_style['controls']['facebook']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_facebook_messenger()"><?php echo print_library_icon('facebook','icon'); ?><i style="<?php echo ($ui_style['controls']['facebook']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['facebook']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['whatsapp']['position']=='center') : ?>
                    <a style="order:<?php echo ($ui_style['controls']['whatsapp']['order']); ?>;" title="<?php echo _("Whatsapp Chat"); ?>" class="small-element controls_btn whatsapp_control tooltip <?php echo ($ui_style['controls']['whatsapp']['type']=='menu') ? 'hidden' : ''; ?>" target="_blank" href="#"><?php echo print_library_icon('whatsapp','icon'); ?><i style="<?php echo ($ui_style['controls']['whatsapp']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['whatsapp']['icon']; ?>"></i></a>
                <?php endif; ?>
                <?php if($ui_style['controls']['presentation']['position']=='center') : ?>
                    <?php if($is_presentation_video) { ?>
                        <a style="order:<?php echo ($ui_style['controls']['presentation']['order']); ?>;" title="<?php echo _("Presentation"); ?>" class="small-element controls_btn presentation_control tooltip <?php echo ($ui_style['controls']['presentation']['type']=='menu') ? 'hidden' : ''; ?>" href="<?php echo $presentation_video; ?>" data-fancybox ><?php echo print_library_icon('presentation','icon'); ?><i style="<?php echo ($ui_style['controls']['presentation']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['presentation']['icon']; ?>"></i></a>
                    <?php } else if($presentation_type!='video') { ?>
                        <div style="order:<?php echo ($ui_style['controls']['presentation']['order']); ?>;" title="<?php echo _("Presentation"); ?>" class="small-element controls_btn presentation_control tooltip <?php echo ($ui_style['controls']['presentation']['type']=='menu') ? 'hidden' : ''; ?>" onclick="start_presentation()"><?php echo print_library_icon('presentation','icon'); ?><i style="<?php echo ($ui_style['controls']['presentation']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['presentation']['icon']; ?>"></i></div>
                    <?php } ?>
                <?php endif; ?>
                <?php if($ui_style['controls']['form']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['form']['order']); ?>;" title="" class="small-element controls_btn form_control tooltip <?php echo ($ui_style['controls']['form']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_form()"><?php echo print_library_icon('form','icon'); ?><i style="<?php echo ($ui_style['controls']['form']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['form']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['share']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['share']['order']); ?>;" title="<?php echo _("Share"); ?>" class="small-element controls_btn share_control tooltip <?php echo ($ui_style['controls']['share']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_share()"><?php echo print_library_icon('share','icon'); ?><i style="<?php echo ($ui_style['controls']['share']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['share']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['live']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['live']['order']); ?>;" title="<?php echo _("Start Live Session"); ?>" class="small-element controls_btn live_control tooltip <?php echo ($ui_style['controls']['live']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_live()"><?php echo print_library_icon('live','icon'); ?><i style="<?php echo ($ui_style['controls']['live']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['live']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['meeting']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['meeting']['order']); ?>;" title="<?php echo _("Join Meeting"); ?>" class="small-element controls_btn meeting_control tooltip <?php echo ($ui_style['controls']['meeting']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_meeting()"><?php echo print_library_icon('meeting','icon'); ?><i style="<?php echo ($ui_style['controls']['meeting']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['meeting']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['vr']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['vr']['order']); ?>;" title="<?php echo _("Web VR"); ?>" class="small-element controls_btn vr_control tooltip <?php echo ($ui_style['controls']['vr']['type']=='menu') ? 'hidden' : ''; ?>" onclick="enable_vr()"><?php echo print_library_icon('vr','icon'); ?><i style="<?php echo ($ui_style['controls']['vr']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['vr']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['compass']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['compass']['order']); ?>;" id="compass_icon" class="small-element controls_btn compass_control"><i class="icon-compass"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom']['order']); ?>;" title="<?php echo $ui_style['controls']['custom']['label']; ?>" class="small-element controls_btn custom_control tooltip disabled <?php echo ($ui_style['controls']['custom']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom_box()"><?php echo print_library_icon('custom','icon'); ?><i style="<?php echo ($ui_style['controls']['custom']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom2']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom2']['order']); ?>;" title="<?php echo $ui_style['controls']['custom2']['label']; ?>" class="small-element controls_btn custom2_control tooltip disabled <?php echo ($ui_style['controls']['custom2']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom2_box()"><?php echo print_library_icon('custom2','icon'); ?><i style="<?php echo ($ui_style['controls']['custom2']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom2']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom3']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom3']['order']); ?>;" title="<?php echo $ui_style['controls']['custom3']['label']; ?>" class="small-element controls_btn custom3_control tooltip disabled <?php echo ($ui_style['controls']['custom3']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom3_box()"><?php echo print_library_icon('custom3','icon'); ?><i style="<?php echo ($ui_style['controls']['custom3']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom3']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['location']['position']=='center') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['location']['order']); ?>;" title="<?php echo $ui_style['controls']['location']['label']; ?>" class="small-element controls_btn location_control tooltip disabled <?php echo ($ui_style['controls']['location']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_location_box()"><?php echo print_library_icon('location','icon'); ?><i style="<?php echo ($ui_style['controls']['location']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['location']['icon']; ?>"></i></div>
                <?php endif; ?>
            </div>
            <div id="controls_bottom_right">
                <?php if($ui_style['controls']['arrows']['position']=='right' || $ui_style['controls']['list']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['arrows']['order']); ?>;" class="controls_arrows noselect <?php echo ($ui_style['controls']['list']['type']=='default' && $ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>">
                        <i onclick="toggle_list()" class="fa fa-chevron-up list_control_alt noselect small-element <?php echo ($ui_style['controls']['list']['type']=='default') ? 'hidden' : ''; ?>"></i>
                        <i data-roomtarget="" title="" class="fa fa-chevron-left prev_arrow noselect disabled small-element <?php echo ($ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>"></i>
                        <i data-roomtarget="" title="" class="fa fa-chevron-right next_arrow noselect disabled small-element <?php echo ($ui_style['controls']['arrows']['type']=='default') ? 'hidden' : ''; ?>"></i>
                    </div>
                <?php endif; ?>
                <?php if($ui_style['controls']['info']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['info']['order']); ?>;" title="<?php echo _("Info"); ?>" class="small-element controls_btn info_control tooltip disabled <?php echo ($ui_style['controls']['info']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_info_box()"><?php echo print_library_icon('info','icon'); ?><i style="<?php echo ($ui_style['controls']['info']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['info']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['dollhouse']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['dollhouse']['order']); ?>;" title="<?php echo _("3D View"); ?>" class="small-element controls_btn dollhouse_control tooltip disabled <?php echo ($ui_style['controls']['dollhouse']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_dollhouse()"><?php echo print_library_icon('dollhouse','icon'); ?><i style="<?php echo ($ui_style['controls']['dollhouse']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['dollhouse']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['gallery']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['gallery']['order']); ?>;" title="<?php echo _("Gallery"); ?>" id="gallery_control" class="small-element controls_btn gallery_control tooltip <?php echo ($ui_style['controls']['gallery']['type']=='menu') ? 'hidden' : ''; ?>" onclick="open_gallery()"><?php echo print_library_icon('gallery','icon'); ?><i style="<?php echo ($ui_style['controls']['gallery']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['gallery']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['facebook']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['facebook']['order']); ?>;" title="<?php echo _("Facebook Chat"); ?>" class="small-element controls_btn facebook_control tooltip <?php echo ($ui_style['controls']['facebook']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_facebook_messenger()"><?php echo print_library_icon('facebook','icon'); ?><i style="<?php echo ($ui_style['controls']['facebook']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['facebook']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['whatsapp']['position']=='right') : ?>
                    <a style="order:<?php echo ($ui_style['controls']['whatsapp']['order']); ?>;" title="<?php echo _("Whatsapp Chat"); ?>" class="small-element controls_btn whatsapp_control tooltip <?php echo ($ui_style['controls']['whatsapp']['type']=='menu') ? 'hidden' : ''; ?>" target="_blank" href="#"><?php echo print_library_icon('whatsapp','icon'); ?><i style="<?php echo ($ui_style['controls']['whatsapp']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['whatsapp']['icon']; ?>"></i></a>
                <?php endif; ?>
                <?php if($ui_style['controls']['presentation']['position']=='right') : ?>
                    <?php if($is_presentation_video) { ?>
                        <a style="order:<?php echo ($ui_style['controls']['presentation']['order']); ?>;" title="<?php echo _("Presentation"); ?>" class="small-element controls_btn presentation_control tooltip <?php echo ($ui_style['controls']['presentation']['type']=='menu') ? 'hidden' : ''; ?>" href="<?php echo $presentation_video; ?>" data-fancybox ><?php echo print_library_icon('presentation','icon'); ?><i style="<?php echo ($ui_style['controls']['presentation']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['presentation']['icon']; ?>"></i></a>
                    <?php } else if($presentation_type!='video') { ?>
                        <div style="order:<?php echo ($ui_style['controls']['presentation']['order']); ?>;" title="<?php echo _("Presentation"); ?>" class="small-element controls_btn presentation_control tooltip <?php echo ($ui_style['controls']['presentation']['type']=='menu') ? 'hidden' : ''; ?>" onclick="start_presentation()"><?php echo print_library_icon('presentation','icon'); ?><i style="<?php echo ($ui_style['controls']['presentation']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['presentation']['icon']; ?>"></i></div>
                    <?php } ?>
                <?php endif; ?>
                <?php if($ui_style['controls']['form']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['form']['order']); ?>;" title="" class="small-element controls_btn form_control tooltip <?php echo ($ui_style['controls']['form']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_form()"><?php echo print_library_icon('form','icon'); ?><i style="<?php echo ($ui_style['controls']['form']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['form']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['share']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['share']['order']); ?>;" title="<?php echo _("Share"); ?>" class="small-element controls_btn share_control tooltip <?php echo ($ui_style['controls']['share']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_share()"><?php echo print_library_icon('share','icon'); ?><i style="<?php echo ($ui_style['controls']['share']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['share']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['live']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['live']['order']); ?>;" title="<?php echo _("Start Live Session"); ?>" class="small-element controls_btn live_control tooltip <?php echo ($ui_style['controls']['live']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_live()"><?php echo print_library_icon('live','icon'); ?><i style="<?php echo ($ui_style['controls']['live']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['live']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['meeting']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['meeting']['order']); ?>;" title="<?php echo _("Join Meeting"); ?>" class="small-element controls_btn meeting_control tooltip <?php echo ($ui_style['controls']['meeting']['type']=='menu') ? 'hidden' : ''; ?>" onclick="toggle_meeting()"><?php echo print_library_icon('meeting','icon'); ?><i style="<?php echo ($ui_style['controls']['meeting']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['meeting']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['vr']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['vr']['order']); ?>;" title="<?php echo _("Web VR"); ?>" class="small-element controls_btn vr_control tooltip <?php echo ($ui_style['controls']['vr']['type']=='menu') ? 'hidden' : ''; ?>" onclick="enable_vr()"><?php echo print_library_icon('vr','icon'); ?><i style="<?php echo ($ui_style['controls']['vr']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['vr']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['compass']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['compass']['order']); ?>;" id="compass_icon" class="small-element controls_btn compass_control"><i class="icon-compass"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom']['order']); ?>;" title="<?php echo $ui_style['controls']['custom']['label']; ?>" class="small-element controls_btn custom_control tooltip disabled <?php echo ($ui_style['controls']['custom']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom_box()"><?php echo print_library_icon('custom','icon'); ?><i style="<?php echo ($ui_style['controls']['custom']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom2']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom2']['order']); ?>;" title="<?php echo $ui_style['controls']['custom2']['label']; ?>" class="small-element controls_btn custom2_control tooltip disabled <?php echo ($ui_style['controls']['custom2']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom2_box()"><?php echo print_library_icon('custom2','icon'); ?><i style="<?php echo ($ui_style['controls']['custom2']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom2']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['custom3']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['custom3']['order']); ?>;" title="<?php echo $ui_style['controls']['custom3']['label']; ?>" class="small-element controls_btn custom3_control tooltip disabled <?php echo ($ui_style['controls']['custom3']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_custom3_box()"><?php echo print_library_icon('custom3','icon'); ?><i style="<?php echo ($ui_style['controls']['custom3']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom3']['icon']; ?>"></i></div>
                <?php endif; ?>
                <?php if($ui_style['controls']['location']['position']=='right') : ?>
                    <div style="order:<?php echo ($ui_style['controls']['location']['order']); ?>;" title="<?php echo $ui_style['controls']['location']['label']; ?>" class="small-element controls_btn location_control tooltip disabled <?php echo ($ui_style['controls']['location']['type']=='menu') ? 'hidden' : ''; ?>" onclick="view_location_box()"><?php echo print_library_icon('location','icon'); ?><i style="<?php echo ($ui_style['controls']['location']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['location']['icon']; ?>"></i></div>
                <?php endif; ?>
            </div>
            <div title="<?php echo _("Fullscreen"); ?>" class="small-element fullscreen_control tooltip noselect" onclick="toggle_fullscreen();"><i class="fas fa-expand"></i></div>
            <div title="<?php echo _("Audio"); ?>" class="small-element song_control tooltip noselect" onclick="toggle_song()"><i class="fas fa-volume-down"></i></div>
            <div title="<?php echo _("Floorplan"); ?>" class="small-element map_control tooltip noselect" onclick="toggle_map()"><i class="icon-map_on"></i></div>
            <div title="<?php echo _("Map"); ?>" class="small-element map_tour_control tooltip noselect" onclick="toggle_tour_map();"><i class="far fa-map"></i></div>
            <div class="small-element list_control <?php echo ($ui_style['controls']['list']['type']=='button') ? 'hidden' : ''; ?>" style="display: none;" onclick="toggle_list()"><i class="fas fa-chevron-up"></i></div>
            <div class="list_alt_menu noselect">
                <div class="title"><i class="fas fa-layer-group small-element" onclick="click_list_alt_menu()"></i>
                    <div class="arrow"></div>
                </div>
                <div class="dropdown"></div>
            </div>
            <div class="menu_controls noselect">
                <div class="title"><i class="fas fa-bars small-element" onclick="click_menu_controls()"></i>
                    <div class="arrow"></div>
                </div>
                <div class="dropdown">
                    <div id="menu_controls_mt" style="height:5px;order:0;"></div>
                    <p style="order:<?php echo ($ui_style['controls']['info']['order']); ?>" class="info_control disabled <?php echo ($ui_style['controls']['info']['type']=='button') ? 'hidden' : ''; ?>" onclick="view_info_box()"><?php echo print_library_icon('info','list'); ?><i style="<?php echo ($ui_style['controls']['info']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['info']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Info"); ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['dollhouse']['order']); ?>" class="dollhouse_control disabled <?php echo ($ui_style['controls']['dollhouse']['type']=='button') ? 'hidden' : ''; ?>" onclick="view_dollhouse()"><?php echo print_library_icon('dollhouse','list'); ?><i style="<?php echo ($ui_style['controls']['dollhouse']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['dollhouse']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("3D View"); ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['gallery']['order']); ?>" class="gallery_control <?php echo ($ui_style['controls']['gallery']['type']=='button') ? 'hidden' : ''; ?>" onclick="open_gallery()"><?php echo print_library_icon('gallery','list'); ?><i style="<?php echo ($ui_style['controls']['gallery']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['gallery']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Gallery"); ?></p>
                    <p style="display:none;order:<?php echo ($ui_style['controls']['facebook']['order']); ?>" class="facebook_control <?php echo ($ui_style['controls']['facebook']['type']=='button') ? 'hidden' : ''; ?>" onclick="view_facebook_messenger()"><?php echo print_library_icon('facebook','list'); ?><i style="<?php echo ($ui_style['controls']['facebook']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['facebook']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Facebook Chat"); ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['whatsapp']['order']); ?>" class="whatsapp_control  <?php echo ($ui_style['controls']['whatsapp']['type']=='button') ? 'hidden' : ''; ?>" onclick=""><?php echo print_library_icon('whatsapp','list'); ?><i style="<?php echo ($ui_style['controls']['whatsapp']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['whatsapp']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Whatsapp Chat"); ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['orient']['order']); ?>" class="orient_control" onclick="toggle_orient()"><?php echo print_library_icon('orient','list'); ?><i style="<?php echo ($ui_style['controls']['orient']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['orient']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Device Orientation"); ?> <i class="fa fa-circle not_active"></i></p>
                    <p style="order:<?php echo ($ui_style['controls']['vr']['order']); ?>" class="vr_control <?php echo ($ui_style['controls']['vr']['type']=='button') ? 'hidden' : ''; ?>" onclick="enable_vr()"><?php echo print_library_icon('vr','list'); ?><i style="<?php echo ($ui_style['controls']['vr']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['vr']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Web VR"); ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['icons']['order']); ?>" class="icons_control active_control" onclick="toggle_icons()"><?php echo print_library_icon('icons','list'); ?><i style="<?php echo ($ui_style['controls']['icons']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['icons']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Icons"); ?> <i class="fa fa-circle active"></i></p>
                    <p style="order:<?php echo ($ui_style['controls']['measures']['order']); ?>" class="measures_control active_control" onclick="toggle_measures()"><?php echo print_library_icon('measures','list'); ?><i style="<?php echo ($ui_style['controls']['measures']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['measures']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Measures"); ?> <i class="fa fa-circle active"></i></p>
                    <p style="order:<?php echo ($ui_style['controls']['autorotate']['order']); ?>" class="autorotate_control active_control" onclick="toggle_autorotate()"><?php echo print_library_icon('autorotate','list'); ?><i style="<?php echo ($ui_style['controls']['autorotate']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['autorotate']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Auto Rotation"); ?> <i class="fa fa-circle active"></i></p>
                    <p style="order:<?php echo ($ui_style['controls']['annotations']['order']); ?>" class="annotations_control active_control" onclick="toggle_annotations()"><?php echo print_library_icon('annotations','list'); ?><i style="<?php echo ($ui_style['controls']['annotations']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['annotations']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Annotations"); ?> <i class="fa fa-circle active"></i></p>
                    <?php if($is_presentation_video) { ?>
                        <p style="order:<?php echo ($ui_style['controls']['presentation']['order']); ?>" class="presentation_control <?php echo ($ui_style['controls']['presentation']['type']=='button') ? 'hidden' : ''; ?>" href="<?php echo $presentation_video; ?>" data-fancybox ><?php echo print_library_icon('presentation','list'); ?><i style="<?php echo ($ui_style['controls']['presentation']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['presentation']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Presentation"); ?></p>
                    <?php } else if($presentation_type!='video') { ?>
                        <p style="order:<?php echo ($ui_style['controls']['presentation']['order']); ?>" class="presentation_control <?php echo ($ui_style['controls']['presentation']['type']=='button') ? 'hidden' : ''; ?>" onclick="start_presentation()"><?php echo print_library_icon('presentation','list'); ?><i style="<?php echo ($ui_style['controls']['presentation']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['presentation']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Presentation"); ?></p>
                    <?php } ?>
                    <p style="order:<?php echo ($ui_style['controls']['form']['order']); ?>" class="form_control <?php echo ($ui_style['controls']['form']['type']=='button') ? 'hidden' : ''; ?>" onclick="view_form()"><?php echo print_library_icon('form','list'); ?><i style="<?php echo ($ui_style['controls']['form']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['form']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<span id="mform_name"></span></p>
                    <p style="order:<?php echo ($ui_style['controls']['share']['order']); ?>" class="share_control <?php echo ($ui_style['controls']['share']['type']=='button') ? 'hidden' : ''; ?>" onclick="toggle_share()"><?php echo print_library_icon('share','list'); ?><i style="<?php echo ($ui_style['controls']['share']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['share']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Share"); ?> <i class="fa fa-circle not_active"></i></p>
                    <p style="order:<?php echo ($ui_style['controls']['live']['order']); ?>" class="live_control <?php echo ($ui_style['controls']['live']['type']=='button') ? 'hidden' : ''; ?>" onclick="toggle_live()"><?php echo print_library_icon('live','list'); ?><i style="color:green;<?php echo ($ui_style['controls']['live']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['live']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo _("Start Live Session"); ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['meeting']['order']); ?>" class="meeting_control <?php echo ($ui_style['controls']['meeting']['type']=='button') ? 'hidden' : ''; ?>" onclick="toggle_meeting()"><?php echo print_library_icon('meeting','list'); ?><i style="color:green;<?php echo ($ui_style['controls']['meeting']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['meeting']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<span><?php echo _("Join Meeting"); ?></span></p>
                    <p style="order:<?php echo ($ui_style['controls']['custom']['order']); ?>" class="custom_control disabled <?php echo ($ui_style['controls']['custom']['type']=='button') ? 'hidden' : ''; ?>" onclick="view_custom_box()"><?php echo print_library_icon('custom','list'); ?><i style="<?php echo ($ui_style['controls']['custom']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo $ui_style['controls']['custom']['label']; ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['custom2']['order']); ?>" class="custom2_control disabled <?php echo ($ui_style['controls']['custom2']['type']=='button') ? 'hidden' : ''; ?>" onclick="view_custom2_box()"><?php echo print_library_icon('custom2','list'); ?><i style="<?php echo ($ui_style['controls']['custom2']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom2']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo $ui_style['controls']['custom2']['label']; ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['custom3']['order']); ?>" class="custom3_control disabled <?php echo ($ui_style['controls']['custom3']['type']=='button') ? 'hidden' : ''; ?>" onclick="view_custom3_box()"><?php echo print_library_icon('custom3','list'); ?><i style="<?php echo ($ui_style['controls']['custom3']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['custom3']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo $ui_style['controls']['custom3']['label']; ?></p>
                    <p style="order:<?php echo ($ui_style['controls']['location']['order']); ?>" class="location_control disabled <?php echo ($ui_style['controls']['location']['type']=='button') ? 'hidden' : ''; ?>" onclick="view_location_box()"><?php echo print_library_icon('location','list'); ?><i style="<?php echo ($ui_style['controls']['location']['icon_library']!=0) ? 'display:none':''; ?>" class="<?php echo $ui_style['controls']['location']['icon']; ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo $ui_style['controls']['location']['label']; ?></p>
                    <div id="menu_controls_md" style="height:5px;order:9999;"></div>
                </div>
            </div>
            <div class="arrows_nav <?php echo ($ui_style['controls']['arrows']['type']=='button') ? 'hidden' : ''; ?>">
                <i data-roomtarget="" title="" class="arrows prev_arrow fas fa-chevron-left disabled small-element"></i>
                <i data-roomtarget="" title="" class="arrows next_arrow fas fa-chevron-right disabled small-element"></i>
            </div>
            <div class="annotation annotation_<?php echo $ui_style['items']['annotation']['position']; ?> noselect">
                <h2 class="annotation_title"></h2>
                <hr>
                <p class="annotation_description"></p>
            </div>
            <div class="logo logo_<?php echo $ui_style['items']['logo']['position']; ?>"></div>
            <div class="map map_<?php echo $ui_style['items']['map']['position']; ?>"></div>
            <div class="nav_control">
                <i onclick="nav_control_cmd('up');" class="nav_up fas fa-chevron-up small-element"></i>
                <i onclick="nav_control_cmd('down');" class="nav_down fas fa-chevron-down small-element"></i>
                <i onclick="nav_control_cmd('left');" class="nav_left fas fa-chevron-left small-element"></i>
                <i onclick="nav_control_cmd('right');" class="nav_right fas fa-chevron-right small-element"></i>
                <i onclick="nav_control_cmd('rotate');" class="nav_rotate fas fa-sync-alt small-element"></i>
            </div>
            <div class="panorama" id="panorama_viewer"></div>
            <div id="vs_before">
                <div style="width:100vw;" class="panorama" id="panorama_viewer_alt"></div>
            </div>
            <div id="vs_slider"></div>
            <div id="vs_grab" class="grabbable small-element"><i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i></div>
            <div style="display: none;width:50%;left:50%;" class="panorama" id="panorama_viewer_vr"></div>
            <i id="cursor_vr_left" class="fas fa-dot-circle cursor_vr"></i>
            <i id="cursor_vr_right" class="fas fa-dot-circle cursor_vr"></i>
            <img id="background_pano" src="" />
            <img id="background_pano_vr" src="" />
            <i id="loading_pano">
                <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                            <stop stop-color="#fff" stop-opacity="0" offset="0%"/>
                            <stop stop-color="#fff" stop-opacity=".631" offset="63.146%"/>
                            <stop stop-color="#fff" offset="100%"/>
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <g transform="translate(1 1)">
                            <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                                <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                            </path>
                            <circle fill="#fff" cx="36" cy="18" r="1">
                                <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                            </circle>
                        </g>
                    </g>
                </svg>
            </i>
            <div style="display:none" id="canvas_p"></div>
            <div style="display:none" id="canvas_p_vr"></div>
        </div>
        <div class="intro_img"><img src="" /></div>
        <div class="loading_vr"><span style="margin: 0 auto;"><?php echo _("LOADING VR EXPERIENCE ..."); ?></span></div>
        <div class="list_slider">
            <ul class="slidee"></ul>
            <i id="list_left" class="fa fa-chevron-left"></i>
            <i id="list_right" class="fa fa-chevron-right"></i>
        </div>
        <div id="draggable_container"></div>
        <div id="dollhouse">
            <div class="info_dollhouse" id="info_dollhouse_pc">
                <b><?php echo _("Orbit"); ?></b> - <?php echo _("Left mouse"); ?><br><b><?php echo _("Zoom"); ?></b> - <?php echo _("Middle mouse or mousewheel"); ?><br><b><?php echo _("Pan"); ?></b> - <?php echo _("Right mouse or left mouse + ctrl/meta/shiftKey"); ?>
            </div>
            <div style="display:none" class="info_dollhouse" id="info_dollhouse_mobile">
                <b><?php echo _("Orbit"); ?></b> - <?php echo _("One-finger move"); ?><br><b><?php echo _("Zoom"); ?></b> - <?php echo _("Two-finger spread or squish"); ?><br><b><?php echo _("Pan"); ?></b> - <?php echo _("Two-finger move"); ?>
            </div>
            <i onclick="toggle_dollhouse_help();" class="help_dollhouse fas fa-question-circle"></i>
            <div id="css_container_dollhouse"></div>
            <div id="container_dollhouse"></div>
            <div class="dropdown-menu dropdown-anchor-top-left dropdown-has-anchor dark" id="select_level_dollhouse"></div>
            <div id="button_level_dollhouse" data-dropdown="#select_level_dollhouse"><i class="fas fa-layer-group"></i>&nbsp;&nbsp;<?php echo _("All"); ?></div>
            <div id="button_close_dollhouse" onclick="close_dollhose();"><i class="fas fa-times"></i>&nbsp;&nbsp;<?php echo _("Close"); ?></div>
        </div>
        <div id="custom_html"><?php echo $custom_html; ?></div>
    </div>
    <div onclick="toggle_jitsi_hide();" id="jitsi_show"><span><?php echo _("Meeting"); ?></span>&nbsp;<i class="fas fa-eye"></i></div>
    <div id="jitsi_div">
        <i onclick="toggle_jitsi_fullscreen()" id="btn_jitsi_fullscreen" class="fas fa-expand"></i>
        <i onclick="toggle_jitsi_hide()" id="btn_jitsi_hide" class="fas fa-eye-slash"></i>
    </div>
    <div id="info_panel_div">
    </div>
    <div id="map_tour_div"></div>
    <div id="gallery_container"></div>
    <?php if($snipcart_api_key!='' && $use_cart && $shop_type=='snipcart') : ?>
        <script>
            window.use_snipcart=1;
            window.SnipcartSettings = {
                publicApiKey: "<?php echo $snipcart_api_key; ?>",
                loadStrategy: "on-user-interaction",
                currency: "<?php echo strtolower($snipcart_currency); ?>",
                modalStyle: "side",
                version: '3.4.1'
            };
            (function(){var c,d;(d=(c=window.SnipcartSettings).version)!=null||(c.version="3.0");var s,S;(S=(s=window.SnipcartSettings).timeoutDuration)!=null||(s.timeoutDuration=2750);var l,p;(p=(l=window.SnipcartSettings).domain)!=null||(l.domain="cdn.snipcart.com");var w,u;(u=(w=window.SnipcartSettings).protocol)!=null||(w.protocol="https");var m,g;(g=(m=window.SnipcartSettings).loadCSS)!=null||(m.loadCSS=!0);var y=window.SnipcartSettings.version.includes("v3.0.0-ci")||window.SnipcartSettings.version!="3.0"&&window.SnipcartSettings.version.localeCompare("3.4.0",void 0,{numeric:!0,sensitivity:"base"})===-1,f=["focus","mouseover","touchmove","scroll","keydown"];window.LoadSnipcart=o;document.readyState==="loading"?document.addEventListener("DOMContentLoaded",r):r();function r(){window.SnipcartSettings.loadStrategy?window.SnipcartSettings.loadStrategy==="on-user-interaction"&&(f.forEach(function(t){return document.addEventListener(t,o)}),setTimeout(o,window.SnipcartSettings.timeoutDuration)):o()}var a=!1;function o(){if(a)return;a=!0;let t=document.getElementsByTagName("head")[0],n=document.querySelector("#snipcart"),i=document.querySelector('src[src^="'.concat(window.SnipcartSettings.protocol,"://").concat(window.SnipcartSettings.domain,'"][src$="snipcart.js"]')),e=document.querySelector('link[href^="'.concat(window.SnipcartSettings.protocol,"://").concat(window.SnipcartSettings.domain,'"][href$="snipcart.css"]'));n||(n=document.createElement("div"),n.id="snipcart",n.setAttribute("hidden","true"),document.body.appendChild(n)),h(n),i||(i=document.createElement("script"),i.src="".concat(window.SnipcartSettings.protocol,"://").concat(window.SnipcartSettings.domain,"/themes/v").concat(window.SnipcartSettings.version,"/default/snipcart.js"),i.async=!0,t.appendChild(i)),!e&&window.SnipcartSettings.loadCSS&&(e=document.createElement("link"),e.rel="stylesheet",e.type="text/css",e.href="".concat(window.SnipcartSettings.protocol,"://").concat(window.SnipcartSettings.domain,"/themes/v").concat(window.SnipcartSettings.version,"/default/snipcart.css"),t.prepend(e)),f.forEach(function(v){return document.removeEventListener(v,o)})}function h(t){!y||(t.dataset.apiKey=window.SnipcartSettings.publicApiKey,window.SnipcartSettings.addProductBehavior&&(t.dataset.configAddProductBehavior=window.SnipcartSettings.addProductBehavior),window.SnipcartSettings.modalStyle&&(t.dataset.configModalStyle=window.SnipcartSettings.modalStyle),window.SnipcartSettings.currency&&(t.dataset.currency=window.SnipcartSettings.currency),window.SnipcartSettings.templatesUrl&&(t.dataset.templatesUrl=window.SnipcartSettings.templatesUrl))}})();
        </script>
    <?php endif; ?>
    <?php if($shop_type=='woocommerce') : ?>
    <div class="wc">
        <div class="wc-modal__container wc-cart-summary--edit wc-cart-summary-side">
            <div class="wc-layout wc-modal">
                <div class="wc-layout__content wc-layout__content--side wc-cart--edit">
                    <div class="wc-cart__secondary-header"><h1
                                class="wc__font--secondary wc-cart__secondary-header-title wc__font--bold wc__font--xlarge">
                            <?php echo _("Cart summary"); ?> </h1>
                        <button onclick="close_cart_wc();">
                            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Remove item"
                                 title="Remove item"
                                 class="wc__icon--medium wc__icon--angled wc__icon">
                                <path d="M33.23 30.77H48v2.46H33.23V48h-2.46V33.23H16v-2.46h14.77V16h2.46v14.77z"
                                      fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <section class="wc-cart__content">
                        <ul class="wc-item-list wc-scrollbar wc-item-list--no-shadow">

                        </ul>
                        <div class="wc-cart__footer">
                            <div class="wc-cart__footer-col cart__footer-discount-box wc-cart__actions"></div>
                            <div class="wc-cart__footer-col">
                                <div class="wc-summary-fees wc-cart-summary-fees--reverse">
                                    <div class="wc-summary-fees__notice wc__font--regular"> <?php echo _("Shipping and taxes will be calculated at checkout."); ?></div>
                                    <div class="wc-summary-fees">
                                        <div class="wc-summary-fees__item wc-summary-fees__total wc__font--bold wc__font--secondary">
                                            <span class="wc-summary-fees__title wc-summary-fees__title--highlight wc__font--large"><?php echo _("Total"); ?></span><span
                                                    class="wc-summary-fees__amount wc-summary-fees__amount--highlight wc__font--large">--</span>
                                        </div>
                                    </div>
                                </div>
                                <footer class="wc-cart__footer-buttons">
                                    <a id="checkout_url_btn" href="#" target="_blank" type="button"
                                            class="wc-button-primary wc-base-button is-icon-right">
                                        <div class="wc-base-button__wrapper">
                                            <div class="wc-base-button__label"> <?php echo _("Checkout"); ?></div>
                                            <div class="wc-base-button__icon">
                                                <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                     alt="" title="" class="wc__icon">
                                                    <path d="M51.364 30.158H6v3.423h45.628l-9.148 9.055L44.868 45 58 32 44.868 19l-2.388 2.364 8.884 8.794z"
                                                          fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="cart_url_btn" href="#" target="_blank" type="button" class="wc-button-link"><?php echo _("View detailed cart"); ?></a>
                                </footer>
                                <div class="wc-cart__featured-payment-methods-container"></div>
                            </div>
                        </div>
                    </section>
                    <section style="display:none;" class="wc-empty-cart">
                        <h1 class="wc-empty-cart__title wc__font--secondary wc__font--xlarge wc__font--bold">
                            <?php echo _("Your cart is empty."); ?> </h1>
                        <button onclick="close_cart_wc();" type="button"
                                class="wc-button-secondary wc-base-button is-fit-content is-icon-left">
                            <div class="wc-base-button__wrapper">
                                <div class="wc-base-button__label"> <?php echo _("Back to store"); ?></div>
                                <div class="wc-base-button__icon">
                                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" alt=""
                                         title="" class="wc__icon">
                                        <path d="M12.636 30.158H58v3.423H12.372l9.148 9.055L19.132 45 6 32l13.132-13 2.388 2.364-8.884 8.794z"
                                              fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.wc, .woocommerce-checkout').length) {
                close_cart_wc();
            }
        });
    </script>
    <?php endif; ?>
    <?php if($record==1) : ?>
        <div onclick="open_screencast_app()" id="record_button"><i class="fas fa-circle"></i>&nbsp;&nbsp;<?php echo _("OPEN SCREENCAST APP"); ?></div>
    <?php endif; ?>
    <script>
        window.viewer_labels = {
            "loading":`<?php echo _("LOADING"); ?>`,
            "initializing":`<?php echo _("INITIALIZING"); ?>`,
            "lsc_title":`<?php echo _("Live Session"); ?>`,
            "lsc_content":`<?php echo _("Are you sure you want to end this live session? The link generated will be invalidated."); ?>`,
            "lsc_content2":`<?php echo _("Are you sure you want to end this live session?"); ?>`,
            "lsc_endcall":`<?php echo _("End Call"); ?>`,
            "ls_initializing":`<?php echo _("initializing ..."); ?>`,
            "ls_awaiting":`<?php echo _("awaiting connection ..."); ?>`,
            "ls_connecting":`<?php echo _("connecting ..."); ?>`,
            "ls_connected":`<?php echo _("connected"); ?>`,
            "ls_connection_closed":`<?php echo _("connection closed"); ?>`,
            "ls_invalid":`<?php echo _("invalid session"); ?>`,
            "ls_link_msg":`<?php echo _("Send this link to the person you want to invite"); ?>`,
            "ls_webcam_msg":`<?php echo _("Do you want to join the live session with video or audio only?"); ?>`,
            "ls_video_audio":`<?php echo _("Video + Audio"); ?>`,
            "ls_audio":`<?php echo _("Only Audio"); ?>`,
            "by":`<?php echo _("by"); ?>`,
            "cancel":`<?php echo _("Cancel"); ?>`,
            "join_meeting":`<?php echo _("Join Meeting"); ?>`,
            "exit_meeting":`<?php echo _("Exit Meeting"); ?>`,
            "close_ad":`<?php echo _("Skip"); ?>`,
            "play_video":`<?php echo _("Play Video"); ?>`,
            "wait_video":`<?php echo _("Wait until the video ends ..."); ?>`,
            "enable_audio":`<?php echo _("ENABLE AUDIO?"); ?>`,
            "enable_device_motion":`<?php echo _("ENABLE DEVICE ORIENTATION?"); ?>`,
            "open_vr_msg":`<?php echo _("ENABLE VR MODE?"); ?>`,
            "yes":`<?php echo _("Yes"); ?>`,
            "no":`<?php echo _("No"); ?>`,
            "password_meeting":`<?php echo _("Password Meeting"); ?>`,
            "password_livesession":`<?php echo _("Password Live Session"); ?>`,
            "check":`<?php echo _("check"); ?>`,
            "buy":`<?php echo _("BUY"); ?>`,
            "add_to_cart":`<?php echo _("ADD TO CART"); ?>`,
            "all":`<?php echo _("All"); ?>`,
            "comments":`<?php echo _("Comments"); ?>`,
            "comment":`<?php echo _("Comment"); ?>`,
            "out_of_stock":`<?php echo _("OUT OF STOCK"); ?>`,
            "choose_an_option":`<?php echo _("Choose an option"); ?>`,
        };
        window.peer_server_host = '<?php echo $peerjs_host; ?>';
        window.peer_server_port = '<?php echo $peerjs_port; ?>';
        window.peer_server_path = '<?php echo $peerjs_path; ?>';
        window.peer_turn_host = '<?php echo $turn_host; ?>';
        window.peer_turn_port = '<?php echo $turn_port; ?>';
        window.peer_turn_u = '<?php echo $turn_username; ?>';
        window.peer_turn_p = '<?php echo $turn_password; ?>';
        window.jitsi_domain = '<?php echo $jitsi_domain; ?>';
        window.street_basemap_url = '<?php echo $leaflet_street_basemap; ?>';
        window.satellite_basemap_url = '<?php echo $leaflet_satellite_basemap; ?>';
        window.street_subdomain = '<?php echo $leaflet_street_subdomain; ?>';
        window.street_maxzoom = '<?php echo $leaflet_street_maxzoom; ?>';
        window.satellite_subdomain = '<?php echo $leaflet_satellite_subdomain; ?>';
        window.satellite_maxzoom = '<?php echo $leaflet_satellite_maxzoom; ?>';
        window.hfov_mobile_ratio = <?php echo $hfov_mobile_ratio; ?>;
    </script>
    <script type="text/javascript" src="js/index.js?v=<?php echo $v; ?>"></script>
    <?php if(file_exists(__DIR__.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'custom.js')) : ?>
        <script type="text/javascript" src="js/custom.js?v=<?php echo time(); ?>"></script>
    <?php endif; ?>
    <?php if(file_exists(__DIR__.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'custom_'.$code.'.js')) : ?>
        <script type="text/javascript" src="js/custom_<?php echo $code; ?>.js?v=<?php echo time(); ?>"></script>
    <?php endif; ?>
    <?php if($export==0) : ?>
        <script>
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('service-worker.js', {
                    scope: '.'
                });
            }
        </script>
    <?php endif; ?>
    <script>
        (function ($) {
            'use strict';
            window.base_url = '<?php echo $base_url; ?>';
            window.auto_start = <?php echo $auto_start; ?>;
            window.ignore_embedded = <?php echo $ignore_embedded; ?>;
            window.preview = <?php echo $preview; ?>;
            window.preview_presentation = <?php echo $preview_presentation; ?>;
            switch(window.auto_start) {
                case 0:
                    window.auto_start=false;
                    break;
                case 1:
                    window.auto_start=true;
                    break;
                case 2:
                    if ((window.self !== window.top) && (window.ignore_embedded==0)) {
                        window.auto_start=false;
                    } else {
                        window.auto_start=true;
                    }
                    break;
            }
            if(window.preview==1 || window.preview_presentation==1) {
                window.auto_start=true;
            }
            window.nostat = <?php echo $nostat; ?>;
            window.export_mode = <?php echo $export; ?>;
            if(window.export_mode==1) {
                window.rooms_json = `<?php echo $rooms_json; ?>`;
                window.maps_json = `<?php echo $maps_json; ?>`;
                window.presentation_json = `<?php echo $presentation_json; ?>`;
                window.advertisement_json = `<?php echo $advertisement_json; ?>`;
                window.gallery_json = `<?php echo $gallery_json; ?>`;
                window.info_box_json = `<?php echo $info_box_json; ?>`;
                window.custom_box_json = `<?php echo $custom_box_json; ?>`;
                window.voice_commands_json = `<?php echo $voice_commands_json; ?>`;
                window.ip_visitor = '';
                window.id_visitor = '';
                window.s3_enabled = 0;
                window.s3_url = '';
            } else {
                window.rooms_json = '';
                window.maps_json = '';
                window.presentation_json = '';
                window.advertisement_json = '';
                window.gallery_json = '';
                window.info_box_json = '';
                window.custom_box_json = '';
                window.voice_commands_json = '';
                window.ip_visitor = '<?php echo $ip_visitor; ?>';
                window.id_visitor = '<?php echo $session_id; ?>';
                window.s3_enabled = <?php echo ($s3_enabled) ? 1 : 0; ?>;
                window.s3_url = '<?php echo $s3_url; ?>';
            }
            window.url_vt = location.href.substring(0, location.href.lastIndexOf("/"))+"/";
            window.hide_loading = <?php echo $hide_loading; ?>;
            window.virtual_tour_initialized = false;
            window.id_virtualtour = <?php echo $id_virtualtour; ?>;
            window.password_protected = <?php echo $password_protected; ?>;
            window.protect_type = '<?php echo $protect_type; ?>';
            window.protect_pc = '<?php echo $protect_pc; ?>';
            window.protect_remember = <?php echo $protect_remember; ?>;
            window.background_image = '<?php echo $background_image; ?>';
            window.background_image_mobile = '<?php echo $background_image_mobile; ?>';
            window.background_video = '<?php echo $background_video; ?>';
            window.background_video_delay = <?php echo $background_video_delay; ?>;
            window.background_video_mobile = '<?php echo $background_video_mobile; ?>';
            window.background_video_delay_mobile = <?php echo $background_video_delay_mobile; ?>;
            window.background_video_elapsed = 0;
            window.interval_background_video_elapsed = null;
            window.video_loading_ended = false;
            window.code = '<?php echo $code; ?>';
            window.logo = '<?php echo $logo; ?>';
            window.link_logo = '<?php echo $link_logo; ?>';
            window.live_session_force = <?php echo $live_session_force; ?>;
            window.meeting = <?php echo $meeting; ?>;
            window.meeting_force = <?php echo $meeting_force; ?>;
            window.peer_id = '<?php echo $peer_id; ?>';
            window.peer = null;
            window.peer_conn = null;
            if(peer_id=='') {
                window.webcam_my = document.getElementById('webcam_my');
                window.webcam_remote = document.getElementById('webcam_remote');
            } else {
                window.webcam_my = document.getElementById('webcam_remote');
                window.webcam_remote = document.getElementById('webcam_my');
            }
            window.stream_sender = null;
            window.live_chat = $('.floating-chat');
            window.initial_id_room = '<?php echo $initial_id_room; ?>';
            window.initial_yaw = '<?php echo $initial_yaw; ?>';
            window.initial_pitch = '<?php echo $initial_pitch; ?>';
            window.flyin = <?php echo $flyin; ?>;
            window.flyin_enabled = <?php echo $flyin; ?>;
            window.name_app_vt = `<?php echo strtolower(str_replace(" ","_","$name_app $name_virtualtour")); ?>`;
            window.name_vt = `<?php echo $name_virtualtour; ?>`;
            window.meeting_protected = <?php echo $meeting_protected; ?>;
            window.livesession_protected = <?php echo $livesession_protected; ?>;
            window.lat_panorama = '<?php echo $lat; ?>';
            window.lon_panorama = '<?php echo $lon; ?>';
            window.external_embed = <?php echo $external_embed; ?>;
            window.dollhouse_open = false;
            window.url_screencast = '<?php echo $url_screencast; ?>';
            window.vr_button = <?php echo $vr_button; ?>;
            window.webvr = <?php echo $webvr; ?>;
            window.icon_tooltips = <?php echo $ui_style['icons_tooltips']; ?>;
            window.preview_room_slider = <?php echo $ui_style['preview_room_slider']; ?>;
            window.loading_text_color = '<?php echo $loading_text_color; ?>';
            window.snipcart_currency = '<?php echo strtolower($snipcart_currency); ?>';
            window.woocommerce_store_url = '<?php echo $woocommerce_store_url; ?>';
            window.mouse_zoom = <?php echo $mouse_zoom; ?>;
            switch(window.mouse_zoom) {
                case 0:
                    window.mouse_zoom=false;
                    break;
                case 1:
                    window.mouse_zoom=true;
                    break;
                case 2:
                    if (window.self !== window.top) {
                        window.mouse_zoom=false;
                    } else {
                        window.mouse_zoom=true;
                    }
                    break;
            }
            window.comments = <?php echo $comments; ?>;
            window.disqus_shortname = '<?php echo $disqus_shortname; ?>';
            window.disqus_public_key = '<?php echo $disqus_public_key; ?>';
            $(document).bind("contextmenu",function(event){
                event.preventDefault();
                if($.trim($("#context_info").html())!='') {
                    if(!dollhouse_open) {
                        $("#context_info").show().css({top: event.pageY + "px", left: event.pageX + "px"});
                    }
                }
                return false;
            });
            if($.trim($("#context_info").html())!='') {
                $(document).on("click pointerdown mousedown touchstart", function (event) {
                    if (!$(event.target).closest("#context_info").length) {
                        $("#context_info").hide();
                    }
                });
            }
            $(document).ready(function () {
                check_svt();
            });
        })(jQuery);
    </script>
    <?php if($ga_tracking_id!='' && $export==0) : ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_tracking_id; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo $ga_tracking_id; ?>');
        </script>
    <?php endif; ?>
    <?php if($fb_messenger) : ?>
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v13.0'
                });
                FB.Event.subscribe('customerchat.load', function() {
                    $('.facebook_control').show();
                });
            };
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div class="fb-customerchat"
             attribution="setup_tool"
             greeting_dialog_display="hide"
             minimized="true"
             logged_in_greeting=""
             logged_out_greeting=""
             mobile_bottom_spacing="120"
             page_id="<?php echo $fb_page_id; ?>"
        ></div>
    <?php endif; ?>
    <?php if($comments!=0) : ?>
        <script src="//<?php echo $disqus_shortname; ?>.disqus.com/count.js"></script>
    <?php endif; ?>
    <div id="comments_div">
        <div id="disqus_thread"></div>
    </div>
    </body>
    </html>
<?php
function print_favicons_vt($code,$logo,$export) {
    $path = '';
    $version = time();
    $path_m = 'v_'.$code.'/';
    if (file_exists(dirname(__FILE__).'/../favicons/v_'.$code.'/favicon.ico')) {
        $path = $path_m;
        $version = preg_replace('/[^0-9]/', '', $logo);
    } else if (file_exists(dirname(__FILE__).'/../favicons/custom/favicon.ico')) {
        $path = 'custom/';
    }
    if($export==1) {
        $path = "favicons/".$path;
        $manifest = "";
    } else {
        $path = "../favicons/".$path;
        if (file_exists(dirname(__FILE__).'/../favicons/v_'.$code.'/site.webmanifest')) {
            $manifest = '<link rel="manifest" href="../favicons/'.$path_m.'site.webmanifest?v='.$version.'">';
        } else {
            $manifest = "";
        }
    }
    return '<link rel="apple-touch-icon" sizes="180x180" href="'.$path.'apple-touch-icon.png?v='.$version.'">
    <link rel="icon" type="image/png" sizes="32x32" href="'.$path.'favicon-32x32.png?v='.$version.'">
    <link rel="icon" type="image/png" sizes="16x16" href="'.$path.'favicon-16x16.png?v='.$version.'">
    '.$manifest.'
    <link rel="mask-icon" href="'.$path.'safari-pinned-tab.svg?v='.$version.'" color="#ffffff">
    <link rel="shortcut icon" href="'.$path.'favicon.ico?v='.$version.'">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="'.$path.'browserconfig.xml?v='.$version.'">
    <meta name="theme-color" content="#ffffff">';
}
function getIPAddress() {
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
function curl_request($url,$fields) {
    $fields_string = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_HEADER, false);
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $response = addslashes(curl_exec($ch));
    curl_close($ch);
    return $response;
}
function print_library_icon($element,$w) {
    global $ui_style,$array_library_icons,$array_public_library_icons,$s3_enabled,$s3_url;
    $image_library_icon = "";
    if(!empty($ui_style['controls'][$element]['icon_library']) && $ui_style['controls'][$element]['icon_library']!=0) {
        if(array_key_exists($ui_style['controls'][$element]['icon_library'],$array_library_icons)) {
            $image_library_icon = $array_library_icons[$ui_style['controls'][$element]['icon_library']];
        } else {
            $ui_style['controls'][$element]['icon_library'] = 0;
            return '';
        }
    } else {
        $ui_style['controls'][$element]['icon_library'] = 0;
        return '';
    }
    if($s3_enabled) {
        if(array_key_exists($ui_style['controls'][$element]['icon_library'],$array_public_library_icons)) {
            $url_icon = "../viewer/icons/$image_library_icon";
        } else {
            $url_icon = $s3_url."icons/$image_library_icon";
        }
    } else {
        $url_icon = "../viewer/icons/$image_library_icon";
    }
    switch($w) {
        case 'list':
            return '<img style="width:12px;height:12px;vertical-align:middle;margin-bottom:2px;" src="'.$url_icon.'" />';
            break;
        case 'icon':
            return '<img style="width:100%;height:100%;" src="'.$url_icon.'" />';
            break;
    }
}
?>