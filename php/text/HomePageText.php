<?php

echo "
<div class=\"container w-45 p-3\">
  <h4>Introduction</h4>
    <p>
      Hello there! I've been wanting to put the knowladge I've gathered from the Cortex Academy courses to some practical use.
      In that regard I've started this project called ZeroBoot. The use of ZerBoot is a bit hard to explain because of its narrow and odd use case scenarios but it shouldn't
      be too hard to understand the idea! Online video games have become more popular over the years and with them so has DDoS-ing and botting of said games.
      Hackers or really anyone can just spend around 10$ in crypto on some random stresser website and give developers and server owners of those games a hard time.
      One of those games that has a lot of DDoS and Botting problems is a game called Minecraft. Minecraft allows anyone to use their free and semi open source software
      to host servers and play with their friends. Some people take it a step further and make whole communities of hundreds of people on minecraft, all hosted by the server owner.
      Minecraft doesn't include any real protection against ddos or bots in these softwares so various communities of developers have gathered up to fork Minecraft's sofware to make it more secure and user friendly to use.
    </p>
    <br>
    <h4>ZeroBoot</h4>
    <p>
      This is where ZeroBoot comes to play. When making any software you need to put it through various stress tests to make sure it will function properly in a production envorioment.
      ZeroBoot would allow you to attack your servers with various small scale attacks to simluate the most common attacks Minecraft servers get these days. Now you could just go to some other
      stresser and attack your server with that but chances are that website is illegal and using it could land you in trouble. Why is it illegal? Well because pretty much all stressers are made and used
      to attack other people's servers without their permission. Owners of these websites claim its not their responsobility how you use their services to try and avoid and legal action but they take no actual
      action to stop people from abusing their service. So how is ZeroBoot different? To attack a server with ZeroBoot you'd have to go through a automatic verification process to confirm that the server is indeed yours
      or at least under your managment. Currently ZeroBoot is just a proof of concept demo but in the future the verification process would work something like this: After the user creates their account they have the option to
      generate a random 16 digit string that they can put in the MOTD of their server (More on MOTD's below), after they put the string in their server's MOTD they can providfe ZerBoot with the address and port
      on which their server is hosted and click sync. After that ZeroBoot gets the server's MOTD and compares the code to the code associated to the user's profile, if the codes match that means that this user indeed owns this server
      and they are the only person who can attack it.
    </p>
    <br>
    <h4>What is an MOTD?</h4>
    <p>
      MOTD's are like the front page of a Minecraft server, when a player views the server in the Minecraft client the first thing they see is the MOTD. The MOTD can be used to advertise the custom features of the server, display
      the current player count of server or just be some eye candy for the players. The MOTD of a server can only be changed by people that have direct access to the server's files and console, meaning that if you see something on an MOTD
      you can be sure that the server owner put it there. This is a great way to verify the ownership of a server without having the owner install a software or go through manual verification. Here's an image of how an MOTD looks inside the Minecraft client:
    </p>
    <img src=\"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhypixel.net%2Fattachments%2Fscreen-shot-2020-08-22-at-11-54-49-pm-png.1943225%2F&f=1&nofb=1\" class=\"img-fluid\" alt=\"MOTD Image\">
    <br>
    <br>
    <br>
    <h4>Technical Explination</h4>
    <p>
      How do I plan on making this work? Well the current plan is to make a registration/login page that would rely on MongoDB as its database (I like mongo because its more file based and I'm kinnda used to working with it and Java).
      Once the user is logged in they can add up to 5 servers which would get saved uder their account in the database so whenever they open ZeroBoot they can press one button to attack their servers instead of having to constantly type in the server's address and port.
      After a user sends an attack all the info would be sent to a php rest api which would once again verify if the MOTD of the server contains the 16 bit string after which it would return a json response on if the attack was sent or not which would be displayed on the AttackOverview.php page so the user
      knows how the attack is going. As for the attack itself I'll be using some botting software written in Java that I got from a friend, the software would be hosted on various virtual private servers that php would access using the ssh2 library. After php logs in using ssh it would start bash script which would start the java program that
      actually does the botting itself. Of course required server info such as the address and port would be sent along.
    </p>
    <br>
    <h4>Source Code</h4>
    <p>The wbsite isn't currently fully functional, I've only done the bare minimum to start off but for now you can find the source code of the website on my Github. I won't be keeping
    it there for long because if someone with not so good intentions gets ahold of it they can easily turn it into another one of those illegal stressers. But since the website isn't functional yet I'll leave it there for now.</p>
</div>
";
