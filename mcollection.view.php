<?php
require_once 'delovi/top.php';
require_once 'delovi/navbar.php';
?>
<div class="text-center p-2 p-md-4">
    <h1>MOVIE LIST</h1>
    <p>Whatever you want to watch, book online ahead of time to save.</p>
</div>

<div class="container">
    <div class="row g-4 py-2">
        <div class="col-12 col-md-6 col-lg-4">
            <select name="genre_list" id="genre_list" class="form-control py-3 px-4">
                <option value="Action">Action</option>
                <option value="Drama">Drama</option>
                <option value="Crime">Crime</option>
                <option value="Thriller">Thriller</option>
                <option value="Comedy">Comedy</option>
                <option value="Romance">Romance</option>
                <option value="Horror">Horror</option>
            </select>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <button type="button" name="search" id="search" class="btn btn-floating btn-bdg py-3 px-4"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="bladerunner.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Blade Runner 2049</h1>
                    <p class="card-sub-title">Director: Denis Villeneuve</p>
                    <p class="card-sub-title">Actors: Ryan Gosling, Harrison Ford, Ana de Armas </p>
                    <p class="card-info">Officer K (Ryan Gosling), a new blade runner for the Los Angeles Police
                        Department, unearths a long-buried secret that has the potential to plunge what's left of
                        society into chaos. His discovery leads him on a quest to find Rick Deckard (Harrison Ford), a
                        former blade runner who's been missing for 30 years.</p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="manhunter.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Manhunter</h1>
                    <p class="card-sub-title">Director: Michael Mann</p>
                    <p class="card-sub-title">Actors: William Petersen, Brian Cox </p>
                    <p class="card-info">Will Graham is a former FBI criminal profiler who has retired following a
                        mental breakdown after being attacked by a cannibalistic serial killer, Dr. Hannibal Lecktor,
                        whom he captured. Graham is approached at his Florida home by his former FBI superior Jack
                        Crawford, who is seeking help with a new serial killer case.</p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="trainspotting.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Trainspotting</h1>
                    <p class="card-sub-title">Director: Danny Boyle</p>
                    <p class="card-sub-title">Actors: Ewan McGregor, Jonny Lee Miller, Ewen Bremner </p>
                    <p class="card-info">A wild, freeform, Rabelaisian trip through the darkest recesses of Edinburgh
                        low-life, focusing on Mark Renton and his attempt to give up his heroin habit, and how the
                        latter affects his relationship with family and friends: Sean Connery wannabe Sick Boy, dimbulb
                        Spud and a psycho Begbie.</p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="bateman.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">American Psycho</h1>
                    <p class="card-sub-title">Director: Mary Harron</p>
                    <p class="card-sub-title">Actors: Christian Bale, Willem Dafoe, Chloë Sevigny</p>
                    <p class="card-info">In New York City in 1987, a handsome, young urban professional,
                        Patrick Bateman (Christian Bale), lives a second life as a gruesome
                        serial killer by night. The cast is filled by the detective (Willem Dafoe),
                        the fiance, the mistress, the coworker (Jared Leto), and the secretary (Chloë Sevigny). This is
                        a biting, wry comedy examining the elements that make a man a
                        monster.</p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="suspiria.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Suspiria</h1>
                    <p class="card-sub-title">Director: Dario Argento</p>
                    <p class="card-sub-title">Actors: Jessica Harper, Eva Axen</p>
                    <p class="card-info">Suzy (Jessica Harper) travels to Germany to attend ballet school. When she
                        arrives, late on a stormy night, no one lets her in, and she sees Pat (Eva Axen), another
                        student, fleeing from the school. When Pat reaches her apartment, she is murdered. The next day,
                        Suzy is admitted to her new school, but has a difficult time settling in. She hears noises, and
                        often feels ill. As more people die, Suzy uncovers the terrifying secret history of the place.
                    </p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="taxidriver.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Taxi Driver</h1>
                    <p class="card-sub-title">Director: Martin Scorsese</p>
                    <p class="card-sub-title">Actors: Robert De Niro, Jodie Foster</p>
                    <p class="card-info">Travis Bickle is a lonely, insomniac ex-marine, who spends his
                        nights driving his taxi throughout the shadowy streets of mid-70's New York City. Travis is fed
                        up with the society he finds himself surrounded by. As Travis grows increasingly more paranoid
                        of his situations, he
                        begins to sees these relationships he develops as 'missions' of which he will need to be the
                        saviour.</p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="fallenangels.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Fallen Angels</h1>
                    <p class="card-sub-title">Director: Wong Kar-Wai</p>
                    <p class="card-sub-title">Actors: Leon Lai, Michelle Reis, Takeshi Kaneshiro</p>
                    <p class="card-info">This Hong Kong-set crime drama features two intertwined storylines—one tells
                        the story of a hitman wishing
                        to leave the criminal underworld (Leon Lai), and his agent, who is infatuated with him (Michelle
                        Reis). The other story is of a mute
                        ex-convict on the run from the police (Takeshi Kaneshiro) and a mentally unstable woman dumped
                        by her boyfriend (Charlie Yeung).</p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="zodiac.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Zodiac</h1>
                    <p class="card-sub-title">Director: David Fincher</p>
                    <p class="card-sub-title">Actors: Jake Gyllenhaal, Robert Downey Jr., Mark Ruffalo</p>
                    <p class="card-info">Between 1968 and 1983, a San Francisco cartoonist becomes an amateur detective
                        obsessed with tracking down the Zodiac Killer, an unidentified individual who terrorizes
                        Northern California with a killing spree. A serial killer in the San Francisco Bay Area taunts
                        police with his letters and cryptic messages.</p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="nightcrawler.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Nightcrawler</h1>
                    <p class="card-sub-title">Director: Dan Gilroy</p>
                    <p class="card-sub-title">Actors: Jake Gyllenhaal, Rene Russo</p>
                    <p class="card-info">Los Angeles denizen Louis Bloom (Jake Gyllenhaal) survives by scavenging and
                        petty theft. He stumbles into a new career as a cameraman and begins nocturnal forays across the
                        city in search of shocking and grisly
                        crimes. When he catches the eye of a shopworn news director (Rene Russo), Louis goes to
                        increasingly greater lengths to catch the "money
                        shot."
                    </p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="chungkinge.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Chungking Express</h1>
                    <p class="card-sub-title">Director: Wong Kar-Wai</p>
                    <p class="card-sub-title">Actors: Takeshi Kaneshiro, Tony Leung, Faye Wong</p>
                    <p class="card-info">The film consists of two stories told in sequence. The first story stars Takeshi
                        Kaneshiro as a cop obsessed by his breakup with a woman named May, and his encounter with a 
                        drug smuggler. The second stars Tony Leung as a police officer roused
                        from his gloom over the loss of his flight attendant girlfriend by the attentions
                        of a quirky snack bar worker.</p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="dogda.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Dog Day Afternoon</h1>
                    <p class="card-sub-title">Director: </p>
                    <p class="card-sub-title">Actors: Al Pacio</p>
                    <p class="card-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel in quisquam quam
                        quod porro? Officiis placeat illum unde aliquam quas tenetur sit voluptatibus molestiae, harum
                        animi necessitatibus libero ratione! Ad. Officiis placeat illum unde aliquam quas tenetur sit
                        voluptatibus molestiae, harum
                        animi necessitatibus libero ratione! Ad. </p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="fightclub.jpg" class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title">Fight Club</h1>
                    <p class="card-sub-title">Director: </p>
                    <p class="card-sub-title">Actors: </p>
                    <p class="card-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel in quisquam quam
                        quod porro? Officiis placeat illum unde aliquam quas tenetur sit voluptatibus molestiae, harum
                        animi necessitatibus libero ratione! Ad. Officiis placeat illum unde aliquam quas tenetur sit
                        voluptatibus molestiae, harum
                        animi necessitatibus libero ratione! Ad. </p>
                    <button class="card-btn">Book <i class="fa-regular fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php require_once 'delovi/footer.php'; ?>