<?php
  $skills = array(
    "Languages" => array(
      "Typescript" => "know",
      "JavaScript (+ES6)" => "know",
      "Swift" => "know",
      "Python" => "know",
      "HTML" => "know",
      "CSS / SCSS / Less" => "know",
      "PHP" => "know",
      "VB.NET" => "know",
      "Go" => "learning",
      "Java" => "tolearn",
      "C / C++" => "tolearn"
    ),
    "Frameworks / Libraries" => array(
      "Node.js" => "know",
      "React" => "know",
      "Flux / Redux" => "know",
      "jQuery" => "know",
      "Express" => "know",
      "Laravel" => "know",
      "Backbone.js" => "know",
      "AngularJS" => "tolearn"
    ),
    "Platforms" => array(
      "Web" => "know",
      "Server" => "know",
      "iOS" => "know",
      "Arduino" => "know",
      "Android" => "tolearn"
    ),
    "Databases" => array(
      "MySQL" => "know",
      "PostgreSQL" => "know",
      "MsSQL" => "know",
      "DynamoDB" => "know",
      "MongoDB" => "know",
      "Redis" => "know"
    ),
    "Tools" => array(
      "Git" => "know",
      "Webpack" => "know",
      "Docker" => "know",
      "Rollup" => "know",
      "Gulp / Grunt" => "know",
      "Mocha" => "know",
      "Travis" => "know"
    ),
    "Others" => array(
      "APIs" => "know",
      "Microservices" => "know",
      "Web Sockets" => "know",
      "Analytics" => "know",
      "Elastic Search" => "know",
      "Sysadmin" => "know",
      "Social" => "know",
      "Payment Processing" => "know"
    )
  );

  $projects = array(
    "2017" => array(
      "TalkLife Clarity" => array(
        "image" => "/assets/img/websites/talklifeclarity.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "TalkLife",
          "color" => "talklife"
        ),
        "tagline" => "TalkLife Clarity automatically tags your content with 40+ advanced mental health models helping you quickly take nessesary action on users in danger",
        "body" => array(
          "This is the final large project I worked on at TalkLife. We decided to build Clarity after much success of using the machine learning models that MIT and Microsoft Research developed, internally.",
          "This is an invite only SASS platform that has a similar billing system to the likes of AWS and Google Cloud. The customer makes as many classification requests as they want during the month and they get invoiced at the end per request.",
          "Its built ontop of a scalable microservice driven platform writtern in Typescript. The frontend is writtern in React and uses the same custom State model used in Doorpass. The API is pretty simple as it just takes the incomming requests throws them onto a queue for the ML workers to classify them. Its written in Node.js and uses RabbitMQ for the worker queue. It also uses GoCardless for direct debit billing at the end of the month."
        ),
        "whatidid" => "Again I worked on this project completely alone, building and designing everything from Dashboard frontend to the backend Architecture powering it",
        "links" => array(
          "Website" => "https://talklifeclarity.com",
          "API Docs" => "https://docs.talklifeclarity.com",
        )
      ),
      "Doorpass" => array(
        "image" => "/assets/img/websites/doorpass.png",
        "imageclass" => "",
        "type" => array(
          "text" => "Doorpass",
          "color" => "green"
        ),
        "tagline" => "Doorpass is the simplest and safest way to manage your team’s access to cloud services",
        "body" => array(
          "It does this by connecting with many different 3rd party SASS platforms such as GitHub, AWS and Mixpanel. It then provides a standard interface to invite users, assign their permissions and also remove them in one click when the time comes.",
          "Its built ontop of a scalable microservice driven platform writtern in Typescript. The frontend for the webapp is rendered using React.js however it uses a custom state and store engine that we built in house. It allows us to make sure the user is always seeing the latest version of any model, and also allows us to build features such as websocket model updating really easily."
        ),
        "whatidid" => "Wrote the majority of the frontend code, a lot of the different integrations and general work on the rest of the Platform",
        "links" => array(
          "Website" => "https://doorpass.io"
        )
      )
    ),
    "2016" => array(
      "TalkLife Admin Panel" => array(
        "image" => "/assets/img/websites/talklifeadmin.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "TalkLife",
          "color" => "talklife"
        ),
        "tagline" => "The TalkLife Overview and Admin Panel",
        "body" => array(
          "This is one of the biggest projects I've worked on so far. This is the overview and admin dashboard for all of TalkLife and its connected services.",
          "The first notable part of this was that I used JWT tokens for authorisation as opposed to traditional session/cookie based auth that i've used for all the past projects i've worked on.",
          "As this plugs into our many different services (such as Connect and our Moderation platform) I had the chance to design a role based permissions system that lets you modify the permissions of a certain user or role group that they are a part of. An example of this is how our Therpists need to access the Connect chat client, but we don't want them accessing the Moderation section of the dashboard.",
          "As well as this, this is where i've intergrated many of the interesting hacks that i've worked on in my free time, such as creating a visualization to view certain trending topic on talklife against time (see screenshot).",
          "Another one of the interesting modules in the dashboard is the feed module, this is because all the posts have been run the <a href=\"http://talklife.co/research/\" target=_blank>machine learning classifier built by MIT</a>. The part I played in this was building a system to filter down and display users that trigger certain models, such as displaying all the users who's posts contain symptoms of \"planning suicide\""
        ),
        "whatidid" => "I created this entire dashboard, from design & frontend to the backend APIs that power it. The backend APIs from the different services are built in different languages but mostly node.js. The frontend is build completely using React.js and Flux.",
        "links" => array(
          
        )
      ),
      "Connect for Teams" => array(
        "image" => "/assets/img/websites/connectforteams.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "TalkLife",
          "color" => "talklife"
        ),
        "tagline" => "Add a Therapist to your team",
        "body" => array(
          "Connect for Teams links in with TalkLife Connects network of accredited therapists to provide slack teams with the ability to chat with a therapist from the comfort of a Slack thread.",
          "This slackbot service connects the Slack Realtime Messaging API to the Redis PUB/SUB datastore in TalkLife Connect. It is writtern in node.js, and the billing is powered by the Stripe API."
        ),
        "whatidid" => "Created a slackbot service that links into the already existing TalkLife Connect service",
        "links" => array(
          "Wired Article" => "https://www.wired.co.uk/article/talklife-connect-slack-mental-health-therapy"
        )
      ),
      "TalkLife Connect" => array(
        "image" => "/assets/img/websites/talklifeconnect.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "TalkLife",
          "color" => "talklife"
        ),
        "tagline" => "A Therapist in your pocket whenever you need them",
        "body" => array(
          "TalkLife Connect is a service that connects people with accredited therapists instantly at all hours of the day whenever they need to talk.",
          "The frontend is a SPA writtern with React.js that interacts with a REST api using reflux. The REST API is writtern in node.js, it uses MondoDB as a datastore, socket.io for realtime functiality and Redis PUB/SUB to keep everything in sync when it needs scales up. Elastic Search also indexes all messages transferred between users to allow a speedy search service to lookup old conversations. Billing is powered by the Stripe API."
        ),
        "whatidid" => "Designed and implemented a scalable and confidential messenging system",
        "links" => array(
          "Wired Article" => "https://www.wired.co.uk/article/talklife-connect-slack-mental-health-therapy"
        )
      )
    ),
    "2015" => array(
      "TalkLife Web" => array(
        "image" => "/assets/img/websites/talklifeweb.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "TalkLife",
          "color" => "talklife"
        ),
        "tagline" => "The responsive web version of TalkLife",
        "body" => array(
          "This is one of the more major project I worked on while at TalkLife. It is the Web version of the app, so that users without iOS and Android devices can still access the TalkLife community.",
          "I wrote the frontend using React and Reflux. The web version interacts with its own fully RESTful API writtern in Node.js which acts as a wrapper to the core SOAP TalkLife API.",
          "I very much enjoyed working on this project because it allowed me to work with new technologies such a Elastic Search, which I had not had the opportunity to use before"
        ),
        "whatidid" => "I designed and programmed the entire backend and the frontend of this project",
        "links" => array(
          "Website" => "https://web.talklife.co"
        )
      ),
      "NoNoSQL" => array(
        "image" => "/assets/img/websites/nonosql.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "Hackathon Project",
          "color" => "blue"
        ),
        "tagline" => "NoNoSQL abuses the Braintree Sandbox API to store unlimited amounts of data",
        "body" => array(
          "We hacked the <a href='https://www.braintreepayments.com' target=_blank>Braintree Sandbox API</a> to host a \"NoSQL Database\" with capability to create unlimited documents, for completely free.",
          "This was done by abusing the custom fields on their customer object. Each custom field is only allowed a max of 255 characters and has to be created manually. Firstly we wrote a bot to submit the create form on the control panel thousands of times overnight. And then to fix the limit problem we just base58 encoded the file and then chopped it up into 255 character pieces, which was then spread out over the thousands of different fields.",
          "We have then made an API which allows any file type to be uploaded and downloaded for this process to happen automaticaly.",
          "<a href='http://challengepost.com/software/nonosql' target=_blank>Winner of \"Judges Pick Prize\", at MLH Landing 2015</a>",
          "<a href='https://medium.com/@viralpickaxe/how-we-hacked-the-braintree-api-to-store-an-unlimited-number-of-files-302860736c25?source=latest' target=_blank>I also wrote this blog post that goes into more detail on how it was done</a>"
        ),
        "whatidid" => "Although this was built as a joke, the hack is technically pretty awesome",
        "links" => array(
          "ChallengePost" => "http://challengepost.com/software/nonosql"
        )
      )
    ),
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
        "image" => "/assets/img/websites/notifine.jpg",
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
          "GitHub" => "http://github.com/viralpickaxe/notifine"
        )
      ),
      "screenie server" => array(
        "image" => "/assets/img/websites/screenieserver.jpg",
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
        "image" => "/assets/img/websites/pollr.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "Weekend Hack",
          "color" => "blue"
        ),
        "tagline" => "pollr. ask awesomely.",
        "body" => array(
          "pollr was a little idea that I threw together on the weekend because I wanted to learn/use node.js, socket.io and mongoDB.",
          "pollr is a very simple website. As soon as you land on the website you are prompted to enter a question that you want to ask people. Once you do this, you are redirected to another page with your question and two buttons, yes and no. You can then share that link and when people vote either yes or no to your question, you will see the buttons flash and the counters increase."
        ),
        "whatidid" => "This is a hack, just a hack.",
        "links" => array(
          "GitHub" => "http://github.com/viralpickaxe/pollr"
        )
      ),
      "whatleads.to" => array(
        "image" => "/assets/img/websites/whatleadsto.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "whatleads.to Project",
          "color" => "whatleadsto"
        ),
        "tagline" => "Visualise what leads to your aims in just 2 steps.",
        "body" => array(
          "whatleads.to makes working together to make real change simple. It lets you visualise your aims and how you're going to achieve them really quickly. It's derived from the idea of a Theory of Change, which is a process where you define what your ultimate aim and then work backwards, setting out goals that will lead to it.",
          "It makes visualising your aims a breeze. By asking \"What leads to this?\" again and again, you build up a map of all your activities without having to draw it out yourself. Then, you can edit any step and share it with your team or anyone else."
        ),
        "whatidid" => "On this project I am in charge of programming the backend. In this case the backend is a REST API writtern in PHP. I also write a lot of the frontend code to both fetch data from the API and also to generate the visualisations.",
        "links" => array(
          
        )
      ),
      "Relations Tracker" => array(
        "image" => "/assets/img/websites/relationstracker.jpg",
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
        "image" => "/assets/img/websites/pixelapiece.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "Personal Project",
          "color" => "green"
        ),
        "tagline" => "A pixel art creation/sharing site.",
        "body" => array(
          "Pixel A Piece was a small pixel creation and sharing website that I made with a friend. Each pixel was 16x16 grid, the user would edit their pixel's using the flash editor, and then save/publish them.",
          "Behind the scenes the pixels would be saved as arrays of color codes, and then would be recreated by a PHP draw function (not the most efficient way, but certainly interesting)"
        ),
        "whatidid" => "I built the backend and some of the frontend for this site. The design and flash pixel editor was done by <a href='http://www.direzdev.nn.pe/Portfolio/' target=_blank>Jacob Jergensen</a>.",
        "links" => array(
          
        )
      )
    ),
    "2011" => array(
      "Minezone" => array(
        "image" => "/assets/img/websites/minezone.jpg",
        "imageclass" => "",
        "type" => array(
          "text" => "Personal Project",
          "color" => "green"
        ),
        "tagline" => "A social network for the game, MineCraft.",
        "body" => array(
          "MineZone was the first complete website that I built (that I am not completely embarrassed of). It was a small social network for the game Minecraft that allowed users to share resources such as skins, maps and servers."
        ),
        "whatidid" => "I built both the backend and frontend of this site, later on <a href='http://www.direzdev.nn.pe/Portfolio/'' target=_blank>Jacob Jergensen</a> came on board and helped with the design. At the time of this project I only knew PHP, HTML and CSS so it was quite slow and clunky.",
        "links" => array(
          
        )
      )
    )
  );
  
  $works = array(
    "TalkLife" => array(
      "role" => "Developer",
      "url" => "http://talklife.co",
      "period" => "Feb 2015 - Current"
    ),
    "Doorpass" => array(
      "role" => "Co-Founder and Developer",
      "url" => "http://doorpass.io",
      "period" => "Jun 2016 - Mar 2017"
    ),
    "whatleads.to" => array(
      "role" => "Co-Founder, Developer and Infrastructure",
      "url" => "http://whatleads.to",
      "period" => "Jan 2014 - Feb 2015"
    ),
    "Innovation Warehouse" => array(
      "role" => "Intern",
      "url" => "http://www.innovationwarehouse.org/",
      "period" => "Summer 2013"
    )
  );

  $hackathons = array(
    "2015" => array(
      "MLH Landing 2015" => "Judges Pick Prize"
    ),
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
    "2015" => array(
      "How we hacked the Braintree API to store an unlimited number of files" => array(
        "url" => "https://medium.com/@viralpickaxe/how-we-hacked-the-braintree-api-to-store-an-unlimited-number-of-files-302860736c25",
        "snap" => "Its 2015, and data is pretty important, so important that some companies are spending thousands, if not millions..."
      )
    ),
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
