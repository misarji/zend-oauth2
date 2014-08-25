<?php

return array(
    
    'service_manager' => array(
        
        'factories' => array(
            
            'ZendOAuth2\Google' => 'ZendOAuth2\Client\GoogleFactory',
            
            'ZendOAuth2\LinkedIn' => 'ZendOAuth2\Client\LinkedInFactory',

            'ZendOAuth2\Github' => 'ZendOAuth2\Client\GithubFactory',
            
            'ZendOAuth2\Facebook' => 'ZendOAuth2\Client\FacebookFactory'
            
        ),
        
        'invokables' => array(
            'ZendOAuth2\Auth\Adapter' => 'ZendOAuth2\Authentication\Adapter\ZendOAuth2',  
        ),
        
    ),
    
    'zendoauth2' => array(
        
        'google' => array(
            'scope' => array(
                'https://www.googleapis.com/auth/userinfo.profile',
                'https://www.googleapis.com/auth/userinfo.email'   
             ),
            'auth_uri'      => 'https://accounts.google.com/o/oauth2/auth',
            'token_uri'     => 'https://accounts.google.com/o/oauth2/token',
            'info_uri'      => 'https://www.googleapis.com/oauth2/v1/userinfo',
            'client_id'     => 'your id',
            'client_secret' => 'your secret',
            'redirect_uri'  => 'your callback url which links to your controller',
        ),
        
        'facebook' => array(
            'scope' => array(
                /*
                'user_about_me',
                'user_activities',
                'user_birthday',
                'read_friendlists',
                //'...'
                */
             ),
            'auth_uri'      => 'https://www.facebook.com/dialog/oauth',
            'token_uri'     => 'https://graph.facebook.com/oauth/access_token',
            'info_uri'      => 'https://graph.facebook.com/me',
            'client_id'     => 'your id',
            'client_secret' => 'your secret',
            'redirect_uri'  => 'your callback url which links to your controller',
        ),
            
        'github' => array(
            'scope' => array(
                /*
                'user',
                'public_repo',
                'repo',
                'repo:status',
                'delete_repo',
                'gist'
                */
            ),
            'auth_uri'      => 'https://github.com/login/oauth/authorize',
            'token_uri'     => 'https://github.com/login/oauth/access_token',
            'info_uri'      => 'https://api.github.com/user',
            'client_id'     => 'your id',
            'client_secret' => 'your secret',
            'redirect_uri'  => 'your callback url which links to your controller',
        ),

        'linkedin' => array(
            'scope' => array(
                /*
                'user',
                'public_repo',
                'repo',
                'repo:status',
                'delete_repo',
                'gist'
                */
            ),
            'auth_uri'      => 'https://www.linkedin.com/uas/oauth2/authorization',
            'token_uri'     => 'https://www.linkedin.com/uas/oauth2/accessToken',
            'info_uri'      => 'https://api.linkedin.com/v1/people/~',
            'client_id'     => 'your api key',
            'client_secret' => 'your api secret',
            'redirect_uri'  => 'your callback url which links to your controller',
        ),

    )
    
);