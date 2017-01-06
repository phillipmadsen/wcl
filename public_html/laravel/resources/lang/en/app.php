<?php

return [

    'by'               => 'By',
    'name'             => 'Name',
    'email'            => 'Email',
    'password'         => 'Password',
    'password-confirm' => 'Confirm Password',
    'message'          => 'Message',
    'information'      => 'Information',
    'phone'            => 'Phone',
    'btn-submit'       => 'Submit',
    'btn-read-more'    => 'Read more',
    'all'              => 'All',

    'menu' => [
        'home'    => 'Home',
        'resume'  => 'Resume',
        'works'   => 'Works',
        'blog'    => 'Blog',
        'contact' => 'Contact',
    ],

    'auth' => [
        'login-page-title'     => 'Sign In!',
        'login-title'          => 'Sign in to start your session',
        'remember-me'          => 'Remember me',
        'btn-sign-in'          => 'Sign In',
        'forgot-password'      => 'I forgot my password!',
        'profile'              => 'Profile',
        'welcome'              => 'Welcome, :user_name!',
        'reset-password-title' => 'Reset your Password now',
    ],

    'emails' => [
        'contact'  => [
            'contact-message'    => 'Contact Message',
            'contact-heading'    => 'Hello Master,',
            'contact-info-text'  => 'A Contact form has been filled on the website <a href=":website_url">:website_url</a>!',
            'here-are-the-infos' => 'Here are the informations:',
            'bottom-message'     => 'Sincerely,<br>BB8',
        ],
        'password' => [
            'password-reset'    => 'Password Reset',
            'password-heading'  => 'Hello sir,',
            'password-content1' => "You asked for a password reset, and because I am kind, I'll give you one new!",
            'password-content2' => 'Here is the link to create a new password: :reset_url',
            'bottom-message'    => 'Sincerely,<br>BB8',
        ],
    ],

    'errors' => [
        '404'        => 'Four Oh Four!',
        '503'        => 'Be right back.',
        'formErrors' => [
            'heading'      => '<strong>Whoops!</strong> Houston, we have a problem!',
            'fix-mistakes' => 'Please fix those mistakes:',
        ],
    ],

    'backend' => [

    ],

    'frontend' => [
        'contact' => [
            'page-title'       => 'Get in Touch!',
            'breadcrumb-title' => 'Contact',
            'form-heading'     => "Let's get in touch!",
            'form-text'        => "Feel free to fill that form to enter in contact with me. I'll try to answer you as quick as possible!",
            'confirmMailSent'  => "<strong>Contact Form received!</strong><p>Your contact form has been received. I'll try to answer you as soon as possible!<br>Thank you ;)</p>",
        ],
        'home'    => [
            'carousel'      => [
                1 => [
                    'title'   => 'Passionate & Flexible',
                    'content' => "You might have not realized it yet, but I'm in love with my job! Indeed, I always wanted to work on computers and started to learn how to code very early in my life. Since then I try to keep up to date and adapt to new technologies and new techniques...",
                    'link'    => 'Check out my Resume for more',
                ],
                2 => [
                    'title'   => 'Laravel enthousiast',
                    'content' => "During my studies, I discovered this PHP Framework and I gotta say : I LOVE IT!<br>To sum things up, this amazing framework allows you to create websites and apps blazing fast! More importantly and I think It's a big feature : you code just like you speak! ;)",
                    'link'    => 'Check out my Blog for more',
                ],
                3 => [
                    'title'   => 'Sharing is Caring',
                    'content' => "The thing is, if you are able to teach something to someone, you can validate the fact that you fully understand the subject. More interesting, with the power of the Internet, all the things that would have taken years to learn now only take a little bit of time.  You can pretty choose what you want to learn and find it within minutes. With all this knowledge around you can pretty much become what ever you want. Finally, you start to correct yourself and you become better...",
                ],
            ],
            'three-reasons' => [
                1 => [
                    'title'   => 'All for the Code.',
                    'content' => "When I was a child, I wanted to work on computers. That's why I became an engineer and Web Developer!",
                ],
                2 => [
                    'title'   => 'Never stop learning.',
                    'content' => 'I have been graduated for several years now, and I keep learning many things everyday. I am the kind of guy that love new technologies and trending projects.',
                ],
                3 => [
                    'title'   => 'Family is Everything',
                    'content' => 'I have 6 kids and a beautiful wife that I love to spend my time with. ',
                ],
            ],
            'about-me'      => [
                'title' => 'About Me',
                'link'  => 'Need to know more? Check out My Resume',
                1       => [
                    'title'   => 'Raise the PHP Flag!',
                    'content' => "<p>Since I'm a child (well, actually I started nerd stuff when I was 14...) I develop applications in PHP.</p>
                                  <p>That being said, I could see the evolution of this language since PHP4. At this time (and because I was a novice), nothing was really structured. You didn't have the Framework echosystem and I have to admit that it was really painful...</p>
                                  <p>Nowadays, with tools like Laravel, Carbon, PHPUnit and others, it's becoming something big and you no longer hear \"No big website runs with PHP. It's a fact. Period. (insert Trollface here)\"</p>",
                ],
                2       => [
                    'title'   => 'Brace yourself. Laravel is coming!',
                    'content' => '<p>Recently (well, for two years now), I discovered the Laravel Framework and I felt in love! Indeed, this Framework based on Symfony and other useful libraries is meant to be "easy" and allows you to develop and deploy projects really quickly!</p>
                                  <p>If you check my <a href=":blog_url">Blog</a>, you\'ll be able to find tips, ideas and other stuff linked to Laravel... Don\'t hesitate to check them and leave me some feedback ;)</p>',
                ],
                3       => [
                    'title'   => 'Code is not everything... Get a life bro!',
                    'content' => "<p>Well, now come the cool part, at least I hope it is. As you can imagine, I'm not a robot and I don't have only nerdy activities in my life!</p>
                                  <p>Indeed, I love hanging out with friends and family, I watch a lot of TV shows and other cool stuff!</p>",
                ],
            ],
            'recent-work'   => [
                'title'         => 'Recent Work',
                'no-work-found' => 'There is no Work in the database.',
            ],
            'customers'     => [
                'title'             => 'Customers',
                'no-customer-found' => 'There is no Customer in the database.',
            ],
        ],
        'resume'  => [
            'page-title'       => 'My Resume',
            'breadcrumb-title' => 'Resume',
            'work-experience'  => [
                'title' => 'Work Experience',
                1       => [
                    'job-title' => 'Engineer @ <strong>CarvingLabs</strong>',
                    'dates'     => 'September 2015 - Today',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Developed Web Applications on Laravel.</li>
                                        <li>Created and maintained Open Source packages.</li>
                                    </ul>',
                ],
                2       => [
                    'job-title' => 'Google Deployment Specialist @ <strong>NRX</strong>',
                    'dates'     => 'October 2012 - September 2015',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Developed Web Applications on Laravel, Symfony 2 and Zend Framework 3.</li>
                                        <li>Developed Core Java Applications.</li>
                                        <li>Passed the following Google certifications :
                                            <ul class="list-arrow-color no-margin">
                                                <li>Google Deployment Specialist (Google Search Appliance)</li>
                                                <li>Google Apps 100</li>
                                                <li>Google Cloud Platform 300</li>
                                            </ul>
                                        </li>
                                        <li>Deployed Google Search Appliance projects for some customers.</li>
                                        <li>Search & Development based on solutions related to Google for Work.</li>
                                        <li>Created a dynamic library on PHP to administrate and monitor a GSA.</li>
                                    </ul>',
                ],
                3       => [
                    'job-title' => 'Developer Web & Mobile @ <strong>Lemonway</strong>',
                    'dates'     => 'September 2011 - September 2012',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Developed the company\'s Website.</li>
                                        <li>Developed the company\'s Mobile App.</li>
                                        <li>Developed iPhone and Android applications for some customers.</li>
                                    </ul>',
                ],
                4       => [
                    'job-title' => 'Sys Admin @ <strong>Autoscout24 France</strong>',
                    'dates'     => 'January 2010 - August 2011',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Management of Software Interface for some customers.</li>
                                        <li>Handling of the Computers Listing.</li>
                                        <li>Helpdesk customers.</li>
                                        <li>Developed softwares in PHP to automatize some tasks.</li>
                                    </ul>',
                ],
                5       => [
                    'job-title' => 'Web Developer @ <strong>Call Assurances</strong>',
                    'dates'     => 'September 2008 - December 2009',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Developed and remade the entire Websites of the Company.</li>
                                        <li>Created some tools and technics for SEO and SEM.</li>
                                    </ul>',
                ],
            ],
            'education'        => [
                'title' => 'Education',
                1       => [
                    'title' => 'Master Web & e-Business @ <strong>ESGI</strong>',
                    'dates' => '2012 - 2014',
                ],
                2       => [
                    'title' => 'Bachelor Web & Mobile @ <strong>ECTEI</strong>',
                    'dates' => '2011 - 2012',
                ],
                3       => [
                    'title' => 'BTS Sys Admin @ <strong>ISEFAC Paris</strong>',
                    'dates' => '2008 - August 2010',
                ],
            ],
            'skills'           => [
                'title' => 'Technical Skills',
                1       => [
                    'label' => 'PHP',
                    'level' => 'Expert',
                ],
                2       => [
                    'label' => 'Laravel',
                    'level' => 'Expert',
                ],
                3       => [
                    'label' => 'Symfony 2',
                    'level' => 'Working on it',
                ],
                4       => [
                    'label' => 'Mobile (iOS &amp; Android)',
                    'level' => 'Made some cool things!',
                ],
                5       => [
                    'label' => 'HTML &amp; CSS (Bootstrap and other tools)',
                    'level' => 'Expert',
                ],
                6       => [
                    'label' => 'Versioning (Git) and Agile',
                    'level' => "We're getting good here...",
                ],
                7       => [
                    'label' => 'Design',
                    'level' => 'Rainbows and Unicorns!',
                ],
            ],
        ],
        'blog'    => [
            'index' => [
                'page-title'       => 'Blog',
                'breadcrumb-title' => 'Blog',
                'no-post-found'    => 'No Post have been found in the database...',
            ],
            'show'  => [
                'page-title'       => 'Blog',
                'breadcrumb-title' => 'Blog',
            ],
            'tag'   => [
                'page-title'       => 'Blog - All Posts with tag ":tag_name"',
                'breadcrumb-title' => 'Blog',
                'no-post-found'    => 'No Post have been found in the database...',
            ],
        ],
        'works'   => [
            'index' => [
                'page-title'       => 'My Works',
                'breadcrumb-title' => 'Works',
                'no-work-found'    => 'No Work have been found in the database...',
            ],
            'show'  => [
                'page-title'       => 'My Works',
                'breadcrumb-title' => 'Works',
                'recent-work'      => 'Recent Work',
            ],
            'tag'   => [
                'page-title'       => 'My Works - All works with tag ":tag_name"',
                'breadcrumb-title' => 'Works',
                'no-work-found'    => 'No Work have been found in the database...',
            ],
        ],
    ],
    'blocks'   => [
        'blog'   => [
            'sidebar'    => [
                'title' => 'The Laboratory',
                'text'  => "In this section, I'll try to share cool ideas, tools and techniques I learnt along the way with you. I think that sharing my knowlege with you guys is important and I hope it might be useful for some of you. ",
            ],
            'last-posts' => [
                'title'         => 'Last Posts',
                'no-post-found' => 'No Post found in the database.',
            ],
            'tags'       => [
                'title' => 'Tags',
            ],
        ],
        'common' => [
            'about'      => [
                'title' => 'About Me',
                'text'  => "My name is Phillip Madsen and I'm an engineer specialised in Web Development. I work mainly on PHP applications and especially on the Laravel Framework.",
                'link'  => 'Want to know more?',
            ],
            'contact'    => [
                'title' => 'Get in touch!',
            ],
            'copyright'  => 'Copyright &copy; 1996:2016 (and still counting...) <strong>Phillip Madsen</strong>. All rights reserved. Website crafted with <i class="fa fa-heart"></i> (and coffee...) in Laravel.',
            'last-posts' => [
                'title'         => 'From the Blog',
                'no-post-found' => 'No Post found in the database.',
            ],
            'social'     => [
                'title' => 'Social Networks',
            ],
        ],
    ],

];
