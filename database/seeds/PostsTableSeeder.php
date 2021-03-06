<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                'title' => 'Introduction to web development : All you need to know to start',
                'body' => 'So, you’re interested in learning web development and becoming a web developer? First of all, congratulations. You’ve made a great choice.

                And since you’re reading this, you may already be an active member of a Facebook group, subreddit, or other online coding community. Which is a great place to start, and to find support throughout your chosen pursuit.
                
                Again, you’re doing great so far.
                
                So depending on your background, you might be wondering where to start learning web development. If you’ve mainly been Googling around, you may feel just a tad bit overwhelmed by all the languages, frameworks, and learning resources out there.
                
                Well, don’t worry. You’re not alone. Google can be your best friend or your worst enemy. It just depends on how you use it.
                
                Start with the end in mind.
                One of the first things I recommend doing when starting out learning web development is to decide upon a clear end goal, and keep it in mind.
                
                Maybe you want to make a career change. Maybe you have a wicked idea for an app. Or maybe you just want to learn for fun.
                
                Whatever your goal, it’s important to understand why you are doing this. This understanding will help you be more productive with your learning time. It will also help encourage you through those times when you feel like giving up.
                
                Remember, no matter how elaborate and far away the end goal may seem now, you can achieve it with hard work and perseverance.
                
                Assuming you have no previous experience, it’s a good idea, in the beginning, to also decide if your interest lies in back end or front end development. Let me briefly explain the difference.
                
                Frontend — this is what the end-user see’s and interacts with on the page. Its all the design, fancy effects, layout and imagery that creates the user experience.
                
                Generally front end developers will be visual creatives with excellent design skills and a passion for accessibility and user experience. Technologies often associated with front end web development are HTML, CSS, jQuery and JavaScript.
                
                Backend — this is the part that typically processes, stores, and manipulates data. It’s how the website or application works. Back-end developers are generally good problem solvers, logical thinkers who are interested in the functionality of a website or application. Back-end development is usually associated with server side languages such as PHP, Python, and Ruby.
                
                I knew right from the off that I just didn’t have that flair for visual design that draws many developers to front-end development. I probably found this decision easier than most as, due to my background in engineering and construction. I am naturally more akin to problem solving, and figuring out how things work, than making things look pretty!
                
                Either way, wherever your interest lies, I still think that the best place to start is by learning some basic HTML and CSS. After all, it doesn’t matter what area of development that you ultimately want to work in, you still need to be able to display it on a webpage in some kind of mildly presentable form.
                
                First things first, head straight over to freeCodeCamp or Codecademy and take their “HTML & CSS” courses. This should give you a feel for what these technologies are all about.
                
                Also, due to their interactive learning environments, they will also get you started writing code straight away, rather than having to figure out how to setup a local development environment first. Nothing will build up your confidence more than writing some code and passing some tests straight away.
                
                Once you have done that, congratulations! You have started on your web development journey.
                Its now time to practice. This may seem hard at first. It’s hard to find time when you have a full time job, school, a partner, or kids all demanding your attention.
                
                But consistency is key. You’ll learn much more by coding for an hour every day, rather than spending seven hours coding on a Saturday.
                
                Humans are creatures of habit, so make coding part of your daily routine. Make time and keep going.',
                // 'created_at' => Carbon::now(),
                // 'updated_at' => '',
                'user_id' => '1',
                'cover_image' => 'no image',
            ]
        );
    }
}
