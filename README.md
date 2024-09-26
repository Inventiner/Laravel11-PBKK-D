# Laravel11-PBKK-D
Currently there are three pages in the website that is still Work-In-Progress and will be updated overtime, there are also some more planned addition to the website
## Home Page
Right now the homepage is still a little bit bland, but it will be the front page of this website. I planned to make this home page more interesting.
![Screenshot of Home Page](https://github.com/user-attachments/assets/663fdf06-0c31-4572-8f28-01006dc06341)

<p align="center"> Preview of the current Work-In-Progress Home Page </p>  

<p align="center">
    <img src="https://github.com/user-attachments/assets/1ab80db7-29e7-4062-908e-e0e180ec2d8c" alt="Mobile Preview of Home Page">
</p>
<p align="center"> Mobile Device Preview of the current Work-In-Progress Home Page </p>



## About Me Page
Currently the about me page is a little bit simple, I planned to add more details for this page
![Screenshot of About Me Page](https://github.com/user-attachments/assets/af62dc46-3e28-4143-af16-58780e2066bc)

<p align="center"> Preview of the current About Me Page </p>  

<p align="center">
    <img src="https://github.com/user-attachments/assets/26811763-f376-4262-969c-81e8aa0dd1ca" alt="Mobile Preview 1 of About Me Page">
    <img src="https://github.com/user-attachments/assets/77a15e72-c666-4ef8-a208-4359696a0cd8" alt="Mobile Preview 2 of About Me Page">
</p>
<p align="center"> Mobile Device Previews of the current Work-In-Progress About Me Page </p>

## Blogs Page
Even though the blogs are still filled with dummy data, but it's already being handled by a model
![Screenshot of Blogs Page](https://github.com/user-attachments/assets/4fd937be-75fc-489c-b30e-8be1d662e13a)

<p align="center"> Preview of the current Blogs Page </p>  

<p align="center">
    <img src="https://github.com/user-attachments/assets/dddad700-8ce1-431c-ac07-fac3004d5c9a" alt="Mobile Preview of Blogs Page">
</p>
<p align="center"> Mobile Device Preview of the current Work-In-Progress Blogs Page </p>

## Individual Blog Page
![Screenshot of Blogs Page](https://github.com/user-attachments/assets/5043e979-14bd-48f7-b9c1-dad37182a843)

<p align="center"> Preview of the current Individual Blog Page </p>  

<p align="center">
    <img src="https://github.com/user-attachments/assets/574b744c-3a52-49eb-abff-7b679257d1a4" alt="Mobile Preview of Individual Blog Page">
</p>
<p align="center"> Mobile Device Preview of the current Individual Blog Page </p>

### Source of Blog
You can find the source of my blog posts from these link, I also provided the `php artisan tinker` code too:
- https://theonion.com/archaeological-dig-uncovers-ancient-race-of-skeleton-pe-1819567671/
    ```php
    App\Models\Post::create([
        'title' => 'Archaeological Dig Uncovers Ancient Race Of Skeleton People',
        'author' => 'the ONION',
        'slug' => 'archaeological-dig-uncovers-ancient-race-of-skeleton-people',
        'body' => "A team of archaeologists excavating a site in southern Peru has discovered the remains of a previously unknown ancient civilization, believed to have populated the region for thousands of years. The civilization, which researchers have tentatively dubbed the 'Skeleton People', were apparently skilled in the arts of stone carving and pottery, though their most enduring legacy appears to be their rather strange physical makeup. \n\n\"We've never seen anything like it,\" said lead archaeologist Dr. Maria Rodriguez. \"They were, quite literally, made entirely of bone. No flesh, no organs, just bone.\" \n\nRodriguez explained that the Skeleton People's bone structure was highly complex, with intricate systems of joints and ligaments that allowed them to walk, talk, and even perform intricate dances. \"They were very advanced for their time,\" she said. \"They had a sophisticated understanding of anatomy, and they were clearly very adept at sculpting and fashioning bone.\" \n\nRodriguez added that the Skeleton People's culture seemed to be heavily influenced by their skeletal form. \"Their art often featured bone motifs, and their religious beliefs appear to have centered around the concept of the human skeleton.\" \n\nThe discovery has sent shockwaves through the archaeological community, and experts are now scrambling to learn more about the mysterious Skeleton People. \"This is a truly groundbreaking find,\" said Dr. John Smith, a leading expert on ancient civilizations. \"It challenges everything we thought we knew about human evolution and the origins of civilization.\" \n\n\"I mean, what kind of crazy, weird world did they live in?\" said Smith. \"Did they live in a giant, bone-filled cathedral? Was there a Skeleton King? Did they have skeleton wars? We're just scratching the surface here.\" \n\nWhile the Skeleton People's civilization ultimately collapsed for reasons that remain unclear, their bones will continue to be studied and analyzed for years to come, providing valuable insights into the history of our planet. \n\n\"It's going to be a long, strange trip,\" said Smith. \"But it's going to be a fascinating one.\"",
    ]);
    ```
- https://theonion.com/fun-toy-banned-because-of-three-stupid-dead-kids-1819565691/
  ```php
    App\Models\Post::create([
        'title' => 'Fun Toy Banned Because Of Three Stupid Dead Kids',
        'author' => 'the ONION',
        'slug' => 'fun-toy-banned-because-of-three-stupid-dead-kids',
        'body' => "A popular children's toy has been banned in the U.S. after three young children died while playing with it. \n\nThe toy, known as the \"Fun Time Fun-O-Matic 5000\", is a plastic toy that resembles a large, colorful ball with various moving parts and flashing lights. While the toy is marketed as a fun and educational way for children to learn about shapes, colors, and numbers, it has been criticized for its lack of safety features, particularly its sharp edges and small, easily removable parts. \n\nThe three children, ages 3, 4, and 5, died within a week of each other, all after choking on small pieces of the toy that they had dislodged and swallowed. \n\n\"This is a tragedy,\" said Dr. Susan Jones, a pediatric specialist. \"The Fun Time Fun-O-Matic 5000 is a dangerous toy that should never have been sold to children. The manufacturer has a responsibility to ensure that their products are safe for children, and they have failed to do so.\" \n\nFollowing the deaths, the U.S. Consumer Product Safety Commission issued a recall for the Fun Time Fun-O-Matic 5000 and urged parents to dispose of the toy immediately. \n\nThe toy manufacturer, Fun Time Toys, has issued a statement expressing their condolences to the families of the deceased children and claiming that they are committed to ensuring the safety of their products. They have also announced that they will be conducting a full investigation into the matter. \n\nThe deaths of the three children have sparked a nationwide debate about the safety of toys and the role of toy manufacturers in protecting children. \"This is a wake-up call for all of us,\" said Jones. \"Parents need to be vigilant and make sure that the toys their children are playing with are safe.\" \n\nIn the meantime, many parents have begun removing all toys from their homes, opting instead to entertain their children with more traditional forms of play, such as board games and outdoor activities. \"It's just not worth the risk,\" said one parent. \"I'm not going to risk my child's life for some cheap plastic toy.\"",
    ]);
    ```

- https://theonion.com/local-history-museum-really-digging-deep-to-fill-2-15-b-1825465467/
  ```php
    App\Models\Post::create([
        'title' => 'Local History Museum Really Digging Deep To Fill 2 15-By-20-Foot Rooms',
        'author' => 'the ONION',
        'slug' => 'local-history-museum-really-digging-deep-to-fill-2-15-by-20-foot-rooms',
        'body' => "Faced with a 2.15-billion-dollar budget deficit, the local history museum announced its plans to \"really dig deep\" to fill the gap. \n\n\"We're going to unearth some new exhibits, you could say,\" said museum curator Dr. John Smith, whose voice cracked with fatigue as he read a statement to the museum's board of directors. \"We're talking about digging up some of the city's most cherished artifacts, some of the most valuable pieces in our collection. It's gonna be a lot of work, but it's gonna be worth it.\" \n\nSmith explained that the museum's budget has been steadily declining in recent years, due in part to a decrease in donations and a decline in visitor numbers. \"People just aren't interested in history like they used to be,\" said Smith. \"They're too busy with their phones and their social media.\" \n\nIn an attempt to attract new visitors and generate revenue, the museum has decided to dig up some of its most valuable artifacts, including a collection of Civil War-era muskets, a 19th-century horse-drawn carriage, and a rare collection of Native American arrowheads. \n\n\"These items are priceless,\" said Smith. \"But we have to do what we have to do to keep the doors open. We're going to be very careful, of course, and we'll be using the best experts in the field.\" \n\nHowever, some critics have raised concerns about the museum's decision to dig up its artifacts. \"This is a terrible idea,\" said Dr. Mary Jones, a local historian. \"These artifacts are part of our city's heritage. They should be preserved for future generations, not dug up and sold off.\" \n\nSmith, however, remains confident that the museum's plan will be successful. \"We're going to make this work,\" he said. \"We're going to find a way to keep the museum alive and well.\" \n\nThe museum's board of directors is scheduled to vote on the plan next week.",
    ]);
    ```
- https://theonion.com/mood-in-car-takes-grim-turn-after-dad-misses-exit-1819574120/
  ```php
	App\Models\Post::create([
    	'title' => 'Mood In Car Takes Grim Turn After Dad Misses Exit',
    	'author' => 'the ONION',
   	    'slug' => 'mood-in-car-takes-grim-turn-after-dad-misses-exit',
    	'body' => "What had begun as a pleasant road trip with the family quickly took a dark turn when the father of the 	group, 42-year-old Mark Jackson, missed his exit on the highway. \n\n\"Guys, I think we missed it,\" Jackson said, as his wife, Sarah, and their two children, 12-year-old Emily and 10-year-old Thomas, stared out the window. \n\nThe mood in the car, which had been lighthearted and full of laughter just moments before, suddenly turned tense. Emily, who had been humming along to a song on the radio, stopped abruptly. Thomas, who had been playing a game on his phone, put it away and stared out the window, his face now etched with worry. Sarah, who had been chatting with her husband, fell silent, her eyes fixed on the road ahead. \n\n\"It's okay, honey, it's just an exit,\" said Sarah, trying to soothe her husband's obvious anxiety. \"We'll just take the next one.\" \n\nJackson, however, was not so easily calmed. \"No, it's not just an exit,\" he said, his voice rising in pitch. \"It's the exit we were supposed to take. And now we're going to have to drive for another 20 minutes to get back there.\" \n\nThe silence in the car intensified as Jackson continued to rant about his mistake, his frustration growing with each passing second. \n\n\"It's going to be a long, unpleasant ride back,\" said Sarah, her voice barely above a whisper. \"Maybe we should just turn around and go back home.\" \n\n\"No, we're not going home,\" Jackson said, his voice now a menacing growl. \"We're going to finish this trip. We're going to go where we were supposed to go, even if it means driving for another hour.\" \n\nThe car continued on its journey, the mood as dark and oppressive as the stormy clouds gathering overhead.",
	]);
    ```
- https://theonion.com/everyone-involved-in-pizzas-preparation-delivery-purc-1819564897/
  ```php
    App\Models\Post::create([
        'title' => 'Everyone Involved In Pizza\'s Preparation, Delivery, Purchase Extremely High',
        'author' => 'the ONION',
        'slug' => 'everyone-involved-in-pizzas-preparation-delivery-purchase-extremly-high',
        'body' => "Sources close to the pizza industry are now alleging a wide-ranging, long-standing conspiracy involving nearly everyone in the pizza supply chain, from farmhands to delivery drivers to customers themselves. \n\n\"It's more than just a conspiracy, it's a lifestyle, a way of life,\" said one source, who spoke on the condition of anonymity for fear of reprisal from the Pizza Conspiracy. \"It's everywhere, it's always been everywhere. We're all in it, and we're all complicit.\" \n\nThe Pizza Conspiracy, as it's being called, is alleged to have its roots in the early days of pizza-making, dating back to the 18th century. It is thought to have been orchestrated by a secret society of pizza makers, known only as the \"Dough Boys,\" who sought to control the world's pizza supply and, by extension, the world's food supply. \n\n\"The Dough Boys have been manipulating the pizza industry for centuries,\" said the source. \"They control the price of flour, the quality of tomatoes, the amount of cheese on every pie. They've been profiting off of our love of pizza for generations.\" \n\nAccording to the source, the Pizza Conspiracy is a complex network of individuals, businesses, and institutions, all working in unison to maintain control over the pizza industry. The source claims that the conspiracy goes far beyond the simple act of making and selling pizza. \n\n\"It's about manipulating the public, controlling the food supply, and generating profit,\" said the source. \"They're using pizza as a weapon, a tool of control. And we're all being played.\" \n\nThe Pizza Conspiracy is a major story, with the potential to change the way we think about food and the world around us. But it's also a very dangerous story, one that could potentially lead to violence and unrest if the truth is revealed. \n\n\"We're talking about a global conspiracy here, folks,\" said the source. \"It's bigger than we can imagine. And it's time to wake up.\"",
    ]);
    ```
