<?php
  $skills = array(
    "Languages" => array(
      "PHP" => "know",
      "JavaScript" => "know",
      "HTML" => "know",
      "CSS / SCSS / Less" => "know",
      "Python" => "know",
      "Visual Basic" => "know",
      "Java" => "learning",
      "C / C++" => "tolearn",
      "CoffeeScript" => "tolearn",
      "Swift" => "tolearn"
    ),
    "Frameworks / Libraries" => array(
      "Node.js" => "know",
      "jQuery" => "know",
      "Express" => "know",
      "Restify" => "know",
      "React" => "know",
      "Sails.js" => "know",
      "Laravel" => "learning",
      "AngularJS" => "tolearn",
      "Backbone.js" => "tolearn"
    )
    ,
    "Databases" => array(
      "MySQL" => "know",
      "MongoDB" => "know",
      "PostgreSQL" => "know"
    ),
    "Tools" => array(
      "Git" => "know",
      "Gulp / Grunt" => "know"
    ),
    "Others" => array(
      "APIs" => "know",
      "Payment Processing" => "know",
      "REST/RESTful" => "know",
      "Web Sockets" => "know",
      "Sysadmin" => "know",
      "Vagrant" => "learning"
    )
  );

  $projects = array(
    "2014" => array(
      "Crowdless" => array(
        "image" => "/assets/img/websites/crowdless.png",
        "imageclass" => "noshadow",
        "type" => array(
          "text" => "Hackathon Project",
          "color" => "blue"
        ),
        "tagline" => "Crowdless let's it's users visit their favourite attractions in London when they are less busy.",
        "body" => array(
          "We scrape public, geo-tagged information from social sources such as Twitter, Instagram and Facebook to generate a base understanding of busy hours at popular attractions (listed from Foursquare).",
          "We then use a neural network to continually update our models, keeping them daily, weekly and seasonally updated with estimates of busy times.",
          "When the user opens the Crowdless app, they can choose the destinations they want to see. We then develop an itinerary for them that takes them through London (with convenient Routing from esri), which avoids the predicted crowds as much as possible.",
          "Say bye bye to your beloved queues with Crowdless! <a href='http://challengepost.com/software/crowdless-cxa52' target=_blank>Winner of \"Best Use of Esri's tools\", at TechCrunch Disrupt EU 2014</a>"
        ),
        "whatidid" => "Crowdless was a hackathon project at, TechCrunch Disrupt EU 2014. I worked on it with <a href='http://twitter.com/byteofbits' target=_blank>Alexander Christie</a> and <a href='http://twitter.com/krishan711' target=_blank>Krishan Patel</a>",
        "links" => array(
          "ChallengePost" => "http://challengepost.com/software/crowdless-cxa52",
          "GitHub" => "http://github.com/Crowdless"
        )
      ),
      "Notifine" => array(
        "image" => "/assets/img/websites/notifine.png",
        "imageclass" => "",
        "type" => array(
          "text" => "Libary",
          "color" => "purple"
        ),
        "tagline" => "Daym, those some fine looking notifications.",
        "body" => array(
          "notifine, is a lightweight but powerful jQuery notification system. Jazz up your site with these good looking, responsive, growl like notifications.",
          "I built this libary/plugin mainly because I wanted a powerful notification system that I could easily implement into hack projects. The main reason that I built something new, rather than use something that already exists is because I wanted more control over the notifications, things like event callbacks."
        ),
        "whatidid" => "I built most of this pretty quickly while on the train. And then just threw this documetation page together on the weekend.",
        "links" => array(
          "Website" => "http://notifine.iamjamiedavies.com",
          "GitHub" => "http://github.com/viralpickaxe/notifine"
        )
      ),
      "screenie server" => array(
        "image" => "/assets/img/websites/screenieserver.png",
        "imageclass" => "",
        "type" => array(
          "text" => "Live Hack",
          "color" => "blue"
        ),
        "tagline" => "A node.js based self hosted web screenshot server",
        "body" => array(
          "So while working on <a href='http://whatleads.to' target=_blank>whatleads.to</a> we ran into an issue. The problem was that we wanted to be able to show screenshots (images) of the aims that people were creating, so that we could put them on things like twitter cards.",
          "From looking around for a while all I could find, were some pretty bad APIs that were free, and some pretty awesome APIs that were very (very) expensive. So... I decided that I would build one.",
          "If you like it, or want to use it feel free to grab the code and deploy it on your servers :)"
        ),
        "whatidid" => "This was built in 30 minutes during a GCSE Computer Science Lesson.",
        "links" => array(
          "GitHub" => "http://github.com/viralpickaxe/screenie-server"
        )
      ),
      "pollr" => array(
        "image" => "/assets/img/websites/pollr.png",
        "imageclass" => "",
        "type" => array(
          "text" => "Weekend Hack 14w33",
          "color" => "blue"
        ),
        "tagline" => "pollr. ask awesomely.",
        "body" => array(
          "pollr was a little idea that I threw together on the weekend because I wanted to learn/use node.js, socket.io and mongoDB.",
          "pollr is a very simple website. As soon as you land on the website you are prompted to enter a question that you want to ask people. Once you do this, you are redirected to another page with your question and two buttons, yes and no. You can then share that link and when people vote either yes or no to your question, you will see the buttons flash and the counters increase."
        ),
        "whatidid" => "This is a hack, it is in no way a finished product.",
        "links" => array(
          "Website" => "http://pollr.iamjamiedavies.com",
          "GitHub" => "http://github.com/viralpickaxe/pollr"
        )
      ),
      "whatleads.to" => array(
        "image" => "/assets/img/websites/whatleadsto.png",
        "imageclass" => "",
        "type" => array(
          "text" => "whatleads.to Project",
          "color" => "black"
        ),
        "tagline" => "Visualise what leads to your aims in just 2 steps.",
        "body" => array(
          "whatleads.to makes working together to make real change simple. It lets you visualise your aims and how you're going to achieve them really quickly. It's derived from the idea of a Theory of Change, which is a process where you define what your ultimate aim and then work backwards, setting out goals that will lead to it.",
          "It makes visualising your aims a breeze. By asking \"What leads to this?\" again and again, you build up a map of all your activities without having to draw it out yourself. Then, you can edit any step and share it with your team or anyone else."
        ),
        "whatidid" => "On this project I am in charge of programming the backend. In this case the backend is a REST API writtern in PHP. I also write a lot of the frontend code to both fetch data from the API and also to generate the visualisations.",
        "links" => array(
          "Website" => "http://whatleads.to"
        )
      ),
      "Relations Tracker" => array(
        "image" => "/assets/img/websites/relationstracker.png",
        "imageclass" => "",
        "type" => array(
          "text" => "Hackathon Project",
          "color" => "blue"
        ),
        "tagline" => "Visualing the UKs relationship with other countries through data sources provided by the FCO. A winning hack @ <a href='http://hacks.rewiredstate.org/events/fcohack' target=_blank>FCOHack 2014</a>",
        "body" => array(
          "This project was conceived at the Rewired State Foreign Commonwealth Hack in 2014. This is an API for tracking and qualifying several variables relating to the UK's Diplomatic Relationships. The data is colour coded onto a map giving a visual scale for reflecting the overall strength of the country's relationship with the UK, relative to all other countries. You can select different datasets to include for consideration.",
          "Unfortunately, the data that was given to us was very poorly formatted. There were many inconsistencies with basic things like what countries were called. This made it pretty hard to generate a good score. After the hackathon I then went on and blogged about the experience in a post titled, <a href='https://medium.com/words-by-causehub-io/making-data-useful-2851ac7a9335' target=_blank>Making Data Useful</a>.",
          "However, the concept was proven and we won the prize for the <a href='http://hacks.rewiredstate.org/events/fcohack/relations-tracker' target=_blank>Best App showing the value of diplomacy</a>!"
        ),
        "whatidid" => "I built the API that scraped data from data.gov.uk and the FCO's data sources. It then returned this data to the frontend so that it could be easily inserted into the map.",
        "links" => array(
          "GitHub" => "https://github.com/CauseHub/relations-tracker"
        )
      )
    ),
    "2012" => array(
      "Pixel A Piece" => array(
        "image" => "/assets/img/websites/pixelapiece.png",
        "imageclass" => "",
        "type" => array(
          "text" => "Personal Project",
          "color" => "green"
        ),
        "tagline" => "A pixel art creation/sharing site.",
        "body" => array(
          "I haven't writtern this project description yet :("
        ),
        "whatidid" => "I built the backend and some of the frontend for this site. The design and flash pixel editor was done by <a href='http://www.direzdev.nn.pe/Portfolio/' target=_blank>Jacob Jergensen</a>.",
        "links" => array(
          "Website" => "http://pixelapiece.com"
        )
      )
    ),
    "2011" => array(
      "Minezone" => array(
        "image" => "/assets/img/websites/minezone.png",
        "imageclass" => "",
        "type" => array(
          "text" => "Personal Project",
          "color" => "green"
        ),
        "tagline" => "A social network for the game, MineCraft.",
        "body" => array(
          "I haven't writtern this project description yet :("
        ),
        "whatidid" => "I built both the backend and frontend of this site, later on <a href='http://www.direzdev.nn.pe/Portfolio/'' target=_blank>Jacob Jergensen</a> came on board and helped with the design. At the time of this project I only knew PHP, HTML and CSS so it was quite slow and clunky. (It is no longer online)",
        "links" => array(
          
        )
      )
    )
  );
  
  $hackathons = array(
    "2014" => array(
      "HackNotts 2014" => "Best Use of SendGrid & Best Use of Braintree",
      "McDonalds Hack 2014" => "First Grand Prize Winner",
      "TechCrunch Disrupt EU Hackathon 2014" => "Best Use of ESRI Mapping",
      "Foreign & Commonwealth Office Hack 2014" => "Winner of the Best App showing the value of diplomacy"
    ),
    "2013" => array(
      "Hack4Good 0.2" => "Third Place"
    )
  );

  $blogs = array(
    "2014" => array(
      "Making Data Useful" => array(
        "url" => "https://medium.com/thoughts-behind-whatleads-to/making-data-useful-2851ac7a9335",
        "snap" => "My experience with public (gov) data, and how it could be improved."
      ),
      "Schools Getting in the Way of My Work" => array(
        "url" => "https://medium.com/thoughts-behind-whatleads-to/schools-getting-in-the-way-of-my-work-5749cf53f110",
        "snap" => "As some of you might know, starting up a social enterprise is pretty hard, but starting one while trying to complete GCSEs is even harder..."
      )
    )
  );
?>