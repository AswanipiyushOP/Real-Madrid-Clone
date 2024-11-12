<?php

include ('connection/connection.php');
// Step 1
if (!isset($_SESSION['user_data'])) {
  header('location:login.php');
}


$qry = "select * from piyush_logo where status=1";
$result = mysqli_query($conn, $qry);
$arr = mysqli_fetch_assoc($result);

$get_data = "select * from piyush_trophy where status=1 limit 0,5";
$view_data = mysqli_query($conn, $get_data);

$get_data1 = "select * from piyush_history where status=1";
$view_data1 = mysqli_query($conn, $get_data1);


// $get_data2="select * from history where status=1 limit 1,1"
// $view_data2=mysqli_query($conn,$_get_data2);


// $get_data3="select * from history where status=1 limit 2,1"
// $view_data3=mysqli_query($conn,$_get_data3);


// $get_data4="select * from history where status=1 limit 3,1"
// $view_data4=mysqli_query($conn,$_get_data4);


// $get_data1="select * from history where status=1 limit 0,1"
// $view_data1=mysqli_query($conn,$_get_data1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Madrid CF | Real Madrid CF Clone</title>
  <!--====================Fav ICON CSS=========================-->
  <link rel="icon" type="image/x-icon" href="./assets/images/madrid-logo.svg" sizes="48*48" />

  <!--=====================bootstrap css===================-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />

  <!--====================font awesome CDN===================-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
    type="text/css" />

  <!--====================custom css===========================-->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <!--====================header part====================================-->
  <?php include "heaadernav.php" ?>
  <!--=====================header part end===============================-->

  <!--=====================Main Part=====================================-->

  <!--=====================Football History Part==========================-->

  <div class="container">
    <!--==================Logo part========================================-->
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <h3 class="text-center">
          <img src="assets/uploads/<?php echo $arr['image']; ?>" alt="Real Madrid Logo" title="Real Madrid Logo"
            width="200px" height="200px" />
        </h3>
        <h2 class="text-center pt-5 pb-3"><?php echo $arr['title']; ?></h2>
      </div>
    </div>
    <!--==================Logo part end========================================-->

    <!--==================Trophies Part========================================-->
    <div class="row g-1 mt-4 mb-3">
      <?php foreach ($view_data as $show_data) { ?>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12 text-center">

          <div class="card border-0 border-end">
            <img src="assets/uploads/<?php echo $show_data['image']; ?>" class="card-img-top" alt="European_cup"
              title="<?php echo $show_data['titles']; ?>" />
            <div class="card-body">
              <h5 class="card-title text-center fs-5 text-secondary">
                <?php echo $show_data['names']; ?>
              </h5>
              <p class="card-text text-center fs-5 text-secondary"><?php echo $show_data['description']; ?></p>
            </div>
          </div>

        </div>
      <?php } ?>
    </div>
    <!--==================Trophies Part end====================================-->
  </div>

  <!--====================History Text=========================================-->
  <div class="container mb-3 mt-2">
    <div class="row">
      <div class="col-12 col-md-12 col-sm-12">
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <?php
          foreach ($view_data1 as $show1) {
            ?>
            <div class="accordion-item py-3 border-0">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne<?php echo $show1['id'] ?>" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  <?php echo $show1['name'] ?>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne<?php echo $show1['id'] ?>" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <div class="row offset-2">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                      <?php echo $show1['description'] ?>


                    </div>
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                      <img src="assets/uploads/<?php echo $show1['image'] ?>" alt="Champions League Trophy"
                        title="Champions League Trophy" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <!-- <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo">
                2011-2020
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      <strong>Real Madrid</strong> have once again defined an
                      era in world football, winning four European Cups and
                      four Club World Cup. In 2014, they lifted La Décima,
                      before winning the Club World Cup that same year.
                      Zidane's first two seasons in the dugout were historic,
                      clinching La Undécima and La Duodécima. What's more,
                      2017 became a record-breaking year when the team got
                      their hands on five trophies: The European Cup, the Club
                      World Cup, LaLiga and the European and Spanish Super
                      Cups. La Decimotercera then came in 2018, when they came
                      out on top against Liverpool in Kiev.
                    </p>

                    <p>
                      YOU CAN SEE THE DETAILS OF EACH SEASON ON OUR FACEBOOK
                      TIMELINE. In the first few years of this new decade
                      three trophies were added to the cabinet by José
                      Mourinho's Real Madrid. The most notable was the 2011-12
                      Liga title, which they won with a record-breaking 100
                      points, the highest score achieved in the history of the
                      championship at that stage, and 121 goals. They also
                      beat Barcelona to clinch a Copa del Rey and a Supercopa
                      de España.
                    </p>

                    <p>
                      In June 2013, Carlo Ancelotti arrived at Real Madrid.
                      The Italian won four trophies with the Whites, the first
                      coming in the shape of Real Madrid's nineteenth Copa del
                      Rey, after beating Barcelona 1-2 in the final. On 24 May
                      2014, Madrid lifted the European Cup once again,
                      claiming La Décima with a 4-1 victory over Atlético in
                      Lisbon. Goals from Ramos, Bale, Marcelo and Cristiano
                      secured the triumph.
                    </p>

                    <p>
                      Two further triumphs arrived in the second season under
                      Ancelotti: The European Super Cup, against Sevilla and
                      Real Madrid’s first World Club Cup, against San Lorenzo.
                      This meant Real Madrid capped of a historic year in
                      their history in 2014, making it the year in which most
                      trophies were won by the club. In June 2015, Rafa
                      Benítez returned to the club where he cut his teeth, to
                      take charge of the Whites. Then, in January 2016, Zidane
                      made the step up to first team coach, following his
                      legendary career as a player. His first season ended
                      with the team lifting the La Undécima trophy, against
                      Atlético in Milán.
                    </p>

                    <p>
                      The French tactician's second season in charge delivered
                      a clutch of silverware. Real Madrid secured the
                      Duodécima, becoming the first-ever team to successfully
                      defend their continental crown in the Champions League
                      era. Alongside this success in Europe's elite club
                      competition, the team also captured the 2016/17 LaLiga
                      crown, the club's third UEFA Super Cup and a second Club
                      World Cup, after overcoming Manchester United, as well
                      as a 10th Spanish Super Cup. In December 2017, the
                      Whites clinched another Club World Cup crown and this
                      fifth piece of silverware saw the team set a new record
                      for the number of titles claimed in a calendar year.
                    </p>

                    <p>
                      The year 2018 is also part of the madridista legacy
                      thanks to the club's Decimotercera, secured against
                      Liverpool following victory in the showpiece in Kiev,
                      whilst that year also yielded the club's seventh world
                      club crown, won in the United Arab Emirates against Al
                      Ain. Meanwhile, 2020 got up and running with an 11th
                      Spanish Super Cup, which came on the back of victory
                      over Atlético Madrid in Jeddah (Saudi Arabia). In July,
                      Zinedine Zidane's men captured the club's 34th league
                      crown.
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/champions_big.png" alt="Champions League Trophy"
                      title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThree">
                2001-2010
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      In this decade Real Madrid made a proud return to
                      triumph on the continent, winning its Ninth European Cup
                      and its third Intercontinental Cup as well as five
                      Ligas, among other titles. Also,<strong>Florentino Pérez</strong>
                      reorganised the club's economy to make it the richest on
                      the planet.
                    </p>

                    <p>
                      Vicente del Bosque stayed on as manager until 2003. His
                      philosophy and brand of football made Madrid into a team
                      of champions. During his time at the helm, the Whites
                      celebrated another European Cup victory, another
                      Intercontinental Cup, two domestic championships, a
                      Supercup of Spain and a UEFA Super Cup. It was an era
                      that is only comparable with the Real Madrid of the 50s
                      and 60s.
                    </p>

                    <p>
                      Florentino Pérez's management led to profound changes in
                      the club's structure. He reorganised the institution's
                      economy, making it the richest club in the world, and
                      made far-reaching changes at the top of the
                      organisation. He completely renovated the Santiago
                      Bernabéu, created a new sports complex in Valdebebas and
                      opened the Alfredo Di Stéfano stadium. Meanwhile, on the
                      pitch, he made the fans' dreams come true by bringing in
                      Zidane, Ronaldo and Beckham.
                    </p>

                    <p>
                      In his second spell (2006), the president continued to
                      delight the supporters, signing the best players and
                      managers in the world. Great players such as Cristiano
                      Ronaldo and Benzemá among others, were brought in, along
                      with manager José Mourinho. The Portuguese arrived in
                      the Santiago Bernabéu a week after being crowned
                      champions of Europe with Inter Milan in the same
                      stadium.
                    </p>

                    <p>
                      The French tactician's second season in charge delivered
                      a clutch of silverware. Real Madrid secured the
                      Duodécima, becoming the first-ever team to successfully
                      defend their continental crown in the Champions League
                      era. Alongside this success in Europe's elite club
                      competition, the team also captured the 2016/17 LaLiga
                      crown, the club's third UEFA Super Cup and a second Club
                      World Cup, after overcoming Manchester United, as well
                      as a 10th Spanish Super Cup. In December 2017, the
                      Whites clinched another Club World Cup crown and this
                      fifth piece of silverware saw the team set a new record
                      for the number of titles claimed in a calendar year.
                    </p>

                    <p>
                      The year 2018 is also part of the madridista legacy
                      thanks to the club's Decimotercera, secured against
                      Liverpool following victory in the showpiece in Kiev,
                      whilst that year also yielded the club's seventh world
                      club crown, won in the United Arab Emirates against Al
                      Ain. Meanwhile, 2020 got up and running with an 11th
                      Spanish Super Cup, which came on the back of victory
                      over Atlético Madrid in Jeddah (Saudi Arabia). In July,
                      Zinedine Zidane's men captured the club's 34th league
                      crown.
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/champions_big.png" alt="Champions League Trophy"
                      title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFour">
                1991-2000
              </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      <strong>Jorge Valdano</strong>,
                      <strong>Fabio Capello</strong> and
                      <strong>Vicente del Bosque</strong> were the names to
                      remember this decade. The three successful coaches took
                      Real Madrid to the top in La Liga and in Europe and they
                      were helped on their way by some superstars. Players
                      such as <strong>Redondo</strong>,
                      <strong>Laudrup</strong>, <strong>Seedorf,</strong>
                      <strong>Suker</strong>, <strong>Mijatovic</strong> and
                      <strong>Roberto Carlos</strong> all arrived at the club
                      in the 90s.
                    </p>

                    <p>
                      Having demonstrated his abilities at the helm of
                      Tenerife, where his team played an attractive and
                      efficient brand of football, Valdano returned to Real
                      Madrid in 1994. With new signings Redondo, Laudrup,
                      Amavisca and Cañizares, the Madrid side went on to win
                      the league title. That same season, youth-academy player
                      Raúl made his debut. On the 29th of October at 17 years
                      of age, the young player from Madrid filled in for
                      Martín Vázquez in La Romareda, where he would put in a
                      stunning performance. A new legend was born.
                    </p>

                    <p>
                      Early in 1995, Valdano's Real Madrid beat Johan Cruyff's
                      Barça 5-0 in the Santiago Bernabéu. It was a magical
                      game that was televised and followed by more than 10
                      million viewers. But the bad results in the 95-96 season
                      forced Lorenzo Sanz to bring in Fabio Capello, one of
                      the most sought-after coaches in European football. The
                      Italian had a dream squad. The signings of Seedorf,
                      Suker, Mijatovic and Roberto Carlos, together with Raúl,
                      Hierro and Redondo, took Madrid to a new league title.
                    </p>

                    <p>
                      The 20th of May 1998 was a historic day for the club.
                      After 32 years, and under the orders of Jupp Heynckes,
                      Real Madrid conquered Europe once more by beating
                      Juventus in the final of the Champions League. A goal
                      from Pedja Mijatovic in the 66th minute brought number
                      Seven from the Amsterdam Arena to the Santiago Bernabéu
                      trophy room. In December that year, this time at the
                      hands of Guus Hiddink, Madrid won its second
                      Intercontinental Cup.
                    </p>

                    <p>
                      In 1999, and after a lifetime connected to the club as a
                      player, Vicente del Bosque returned as the first-team
                      manager. The man from Salamanca managed to instil a
                      philosophy in the team that made them the best in the
                      continent. His first title came in 2000: the Eighth
                      European Cup. In the same year, Florentino Pérez
                      (enlazar ficha) took over the presidency and signed one
                      of the best players on the planet, Luis Figo
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/champions_big.png" alt="Champions League Trophy"
                      title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFive">
                1981-1990
              </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      The 80s were dominated by a brilliant generation of
                      youth-team players. ‘Vulture's Cohort’, led by
                      <strong>Emilio Butragueño</strong>, made Real Madrid
                      into one of the best teams in history. The goals of
                      <strong>Hugo Sánchez</strong> also played an important
                      role in this successful decade. The Whites won the first
                      two UEFA Cups with some historic comebacks in Europe and
                      magical nights in the Bernabéu.
                    </p>

                    <p>
                      In 1983, Castilla was crowned champion of the Segunda
                      División under the orders of Amancio and with some
                      stunning performances from five players: Pardeza,
                      Sanchís, Míchel, Martín Vázquez and Butragueño. These
                      gems from the academy were a real discovery and Di
                      Stéfano did not hesitate to prepare them for the first
                      team. The group made its breakthrough in 1985, winning
                      five consecutive La Ligas and setting important records,
                      such as the competition's top goal-scorer with 107.
                    </p>

                    <p>
                      Mexican striker Hugo Sánchez had a lot to do with this
                      success. Together with veterans Juanito, Valdano and
                      Santillana, he formed a 'Cohort' that was close to
                      perfection. In his seven seasons in white he scored 251
                      goals, and was the league's top goal-scorer in four of
                      them. His famous front-flip celebrations are burned into
                      the retinas of Madrid fans.
                    </p>

                    <p>
                      In this decade Real Madrid also won its first UEFA
                      title. It came in the 1984-85 season, in a two-legged
                      final where they beat Videoton, a little-known team who
                      had knocked out PSG, Partizán Belgrade and Manchester
                      United. In the following campaign, the Whites
                      successfully defended their title thanks to an
                      unbelievable comeback. After losing the first leg 5-1 to
                      Borussia Mönchengladbach, they won an epic tie in the
                      return match with two goals from Valdano and another
                      brace from Santillana to reach the quarters (4-0).
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/f_uefa.png" alt="Champions League Trophy" title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSix">
                1971-1980
              </button>
            </h2>
            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      The decade in which the team won its sixth La Liga
                      trophy to keep was also marked by the death of Santiago
                      Bernabéu. Football was in mourning on the 2nd of June
                      1978 at the loss of the president who took Real Madrid
                      to the top. <strong>Luis de Carlos</strong> replaced his
                      best friend and mentor. He ran the Whites for seven
                      years. In that time he was able to embody and transmit
                      the values of the club, earning himself recognition
                      around the world.
                    </p>

                    <p>
                      The team proved to be very solid at home in the league
                      in the 1978-79 season, with only five teams taking a
                      point from the Bernabéu: Espanyol, Sevilla, Hércules,
                      Las Palmas and Atlético de Madrid. Molowny knew how to
                      get the best out of his players, also making a
                      difference on the road. The win in the Molinón (0-1,
                      with a goal from Santillana) was key to the merengue's
                      sixth league title.
                    </p>

                    <p>
                      The team's brilliant performances were tarnished by the
                      death of the club's president. Real Madrid wanted to
                      make a posthumous gesture of thanks to the late Santiago
                      Bernabéu. The goal was for his great work at the club to
                      live on in the collective memory. On the 31st of August
                      1979 the first edition of the tournament that bore his
                      name was played. Four of continental football's great
                      champions took part: Real Madrid, Ajax, Bayern Munich
                      and Milan.
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/f_copa_rey.png" alt="Champions League Trophy"
                      title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThirteen">
                1961-1970
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      The team was going through a period of change. In Spain
                      it was far superior, winning eight league championships,
                      five of them on the trot and including and league-cup
                      double. Overseas it won its Sixth European Cup, with the
                      ‘yé-yé’ team.
                    </p>

                    <p>
                      In the 1961-62 season, Real Madrid again enjoyed an
                      excellent campaign as they claimed a league and cup
                      double, and were runners-up in the European Cup. On 18
                      March 1962, Madrid sealed another title win at their
                      stadium, with two matches to spare. On 8 July 1962, the
                      Whites beat Sevilla 2-1 in the cup final.
                    </p>

                    <p>
                      They were the kings of Spain and of Europe. On the 11th
                      of May 1966, Real Madrid were crowned champions of
                      Europe once again, against Partizán (2-1). Without Di
                      Stéfano and Puskas, the most experienced player was
                      Gento. The rest of the team was made up by Araquistáin,
                      Pachín, Pedro de Felipe, Sanchís, Pirri, Zoco, Serena,
                      Amancio, Grosso and Velázquez. After winning their Sixth
                      European Cup, four of the players were photographed
                      impersonating the Beatles. They then became known as the
                      ‘ye-yé’ Madrid because of the chorus of the English
                      group's song ‘She Loves You’.
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/f_liga.png" alt="Champions League Trophy" title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSeven">
                1951-1960
              </button>
            </h2>
            <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      This was a brilliant decade. A pleiad of players, led by
                      Alfredo Di Stéfano, put Real Madrid at the summit of
                      football. The team that won five European Cups in a row
                      amazed the world with its spectacular brand of football.
                      An endless torrent of success made the club the most
                      decorated in Europe. It was proclaimed the 'king of
                      kings' and it won the first edition of the
                      Intercontinental Cup (1960) to put the icing on the
                      cake.
                    </p>

                    <p>
                      YOU CAN SEE THE DETAILS OF EACH SEASON ON OUR FACEBOOK
                      TIMELINE. Football in Europe was being played at a high
                      standard. Aware of this fact, at the start of the 50s,
                      renowned French journalist Gabriel Hanot dreamed up a
                      competition that would bring together the champions of
                      each European league. His colleague Jacques Ferrán
                      joined the project. Between them they drew up some
                      regulations that reached the headquarters of the Union
                      of European Football Associations (UEFA). The proposal
                      was much to the liking of the heads of French
                      publication ‘L’Equipe’, which organised the tournament.
                    </p>

                    <p>
                      They named a commission that included Santiago Bernabéu
                      as one of its vice presidents. The championship became a
                      reality in 1956. Real Madrid won the first European Cup
                      in history on the 13th of June that year. It was the
                      first of the five consecutive cups it would win. This
                      great feat was achieved at the hands of one of history's
                      greatest footballers, Alfredo Di Stéfano, and during
                      Bernabéu's presidency.
                    </p>

                    <p>
                      Madrid discovered Di Stéfano in the club's fiftieth
                      anniversary year (1952), when the team took on
                      Millonarios (4-2). Since then the club had its sights
                      set on him and the following year he made his debut as a
                      Madrid player. He became the best footballer in the
                      Whites' history, receiving two Ballon d'Ors (1957 and
                      1959) as one of the stars of the team that ruled Europe
                      for five years in a row. Everyone was enchanted by his
                      wizardry and he raised the bar for the rest.
                    </p>

                    <p>
                      In the 1959-1960 season, ex-Madrid player Miguel Muñoz
                      (enlazar ficha) took the reins of Real Madrid. He won
                      the Fifth European Cup in his first season as manager,
                      becoming the first footballer to win the European Cup as
                      a player (three times) and as a manager. In 1960, the
                      merengues were also crowned champions of the world as
                      they won the first edition of the Intercontinental Cup
                      (Real Madrid 5-1 Peñarol de Montevideo).
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/f_copa_europa.png" alt="Champions League Trophy"
                      title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseEight">
                1941-1950
              </button>
            </h2>
            <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      This period would give rise to the entity's future
                      success stories and also to the rivalry with Barcelona.
                      The Chamartín stadium had to be rebuilt and a new team
                      had to be put together and brought up to speed for
                      competition. Thanks to
                      <strong>Santiago Bernabéu</strong>
                      , all these challenges were met with aplomb. It was in
                      this decade that the foundations were set for what would
                      later be recognised as the ‘Best Club of the Twentieth
                      Century’.
                    </p>

                    <p>
                      The Whites tried to alleviate the effects of the Civil
                      War (1936-39), which left it without some of its most
                      emblematic names. Some important players were brought
                      in, such as Pruden, Corona and Bañón. In 1943, in the
                      semi-final of the cup, Real Madrid met Barcelona. In Les
                      Corts, the eleven azulgranas won 3-0. In the return
                      match, the Whites knocked out their opponent with an
                      extraordinary comeback. Madrid won 11-1, and an eternal
                      rivalry was born.
                    </p>

                    <p>
                      On the 15th of December 1943, Santiago Bernabéu became
                      the club's president. It was the start of the legendary
                      mandate in which the club pulled off some great deeds.
                      He took charge intent on building bridges between all
                      the clubs. In 1948 he was named president of honour and
                      merit of the Whites “for his extraordinary work and
                      continuing concern for the well-being of the Sociedad
                      Real Madrid Club de Fútbol”.
                    </p>

                    <p>
                      Real Madrid faced Valencia in the final (June 9th 1946),
                      ten years after the team had won its previous Copa de
                      España. In the Montjuïc stadium the Whites dominated the
                      game, beating Valencia 3-1, to win the cup once more.
                      The mayor of Madrid presented Ipiña with the Sports
                      Medal of the City for his part in 237 official matches.
                      Each player received a leather purse with a one thousand
                      peseta (6€) note.
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/f_copa_general.png" alt="Champions League Trophy"
                      title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseNine">
                1931-1940
              </button>
            </h2>
            <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      The arrival of <strong>Ricardo Zamora</strong> was soon
                      followed by that of <strong>Ciriaco</strong> and
                      <strong>Quincoces</strong>. The trio formed the best
                      defence in the world. The result was four titles in as
                      many years (two in La Liga and two Copas). The seeds of
                      Madrid's reputation as winners had been sown, but the
                      outbreak of the Civil War was to cut their run short.
                    </p>

                    <p>
                      Real Madrid had now accepted the fact that the success
                      they craved would only be possible with the best
                      players. With Zamora, Ciriaco, Quincoces, among others,
                      the trophies came quickly. The 1931-1932 season was a
                      great one for Lippo Hertza's team. The Whites finished
                      the league as unbeaten champions. It was the start of an
                      era of Madrid dominance.
                    </p>

                    <p>
                      Just a month after the latest cup win (1936), civil war
                      broke out. Real Madrid's finest hour on the pitch so
                      far, was under threat and cut short by the military
                      conflict. It led to many players ending their careers or
                      leaving the country in exile. The club and team would
                      not be reassembled until after the war.
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/f_trofeo_mancomunado.png" alt="Champions League Trophy"
                      title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTen">
                1921-1930
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse">
              <div class="accordion-body">
                <div class="row offset-2">
                  <div class="col-12 col-lg-6 col-md-12 col-sm-12 justify-content">
                    <p>
                      In the early 20s, Real Madrid returned to its pioneering
                      role in Spanish football. The team made a series of
                      trips abroad, making it an international trailblazer. As
                      a result of the club's growing stature, two more stadium
                      changes were made in this period. First, to the
                      Velódromo de Ciudad Lineal, and then Chamartín was
                      built. The latter hosted the first match in the recently
                      created Campeonato de Liga (1928).
                    </p>

                    <p>
                      What began as a project between football fans at the
                      start of the century was starting to take on
                      unimaginable proportions. The silver medal won by the
                      national side in the Olympic Games in Antwerp (1920)
                      further bolstered its following. The outlook for our
                      club was looking optimistic.
                    </p>

                    <p>
                      The Campeonato de Liga was born out of these
                      circumstances and the enormous organisational problems
                      in Spanish football were a thing of the past. The
                      parties involved agreed that there should be three
                      divisiones. The six champions of Spain, the three
                      runners-up and the winner of a promotional tournament
                      between the clubs in the Segunda would play in the
                      Primera. It was a competition that would bring together
                      teams from every corner of our country each year.
                    </p>
                  </div>
                  <div class="col-12 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                    <img src="assets/images/f_regional.png" alt="Champions League Trophy"
                      title="Champions League Trophy" />
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!--====================History Text end======================================-->
  <!--=====================Football History Part end==========================-->

  <!--=====================gif part 2=====================================-->

  <div class="container-fluid bg-secondary-subtle">
    <div class="container pt-3 pb-3">
      <div class="row">
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-2 pb-2">
          <a class="navbar-brand" href="https://www.adidas.co.in/real_madrid" target="_blank">
            <img src="assets/images/gif2-1.jpeg" />
          </a>
        </div>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-2 pb-2">
          <a class="navbar-brand" href="https://www.emirates.com/es/english/discover-dubai/" target="_blank">
            <img src="https://tpc.googlesyndication.com/simgad/17072080768508996330" />
          </a>
        </div>
        <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-2 pb-2">
          <a class="navbar-brand"
            href="https://shop.realmadrid.com/en-gb/jerseys-kits/home?utm_source=web&utm_medium=display&utm_campaign=tie_launch-home-kit-24-25_20240605_en_gb&utm_content=banner_300x250"
            target="_blank">
            <img src="assets/images/gif2-3.gif" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--=====================Gif part 2end=====================================-->

  <!--=====================Main Part end=====================================-->

  <!--=====================footer part======================================-->
  <div class="container-fluid">
    <!--===========container super part========================-->
    <div class="container">
      <hr />
      <!--=============footer section==================-->

      <!--===================Row part 1====================-->
      <div class="container text-center">
        <div class="row mt-2 mb-2">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <gray>Download Now</gray><br />
            <blue>Official App Fan</blue>
          </div>
        </div>
      </div>
      <!--===================Row part 1 end====================-->

      <!--===================Row part 2========================-->
      <div class="container text-center">
        <div class="row g-2 offset-2 mt-2 mb-2">
          <div class="col-12 col-lg-3 col-md-12 col-sm-12">
            <a class="navbar-brand"
              href="https://play.google.com/store/apps/details?id=com.mcentric.mcclient.MyMadrid&hl=en&gl=US&pli=1"
              target="_blank">
              <img src="assets/images/Google+Play+Badge_en.svg" width="216px" height="64px" />
            </a>
          </div>
          <div class="col-12 col-lg-3 col-md-12 col-sm-12">
            <a class="navbar-brand" href="https://apps.apple.com/us/app/real-madrid/id1107624540" target="_blank">
              <img src="assets/images/App+Store+Badge_en.svg" width="216px" height="64px" />
            </a>
          </div>
          <div class="col-12 col-lg-3 col-md-12 col-sm-12">
            <a class="navbar-brand" href="https://appgallery.huawei.com/#/app/C102163903" target="_blank">
              <img src="assets/images/Huawei+Store+Badge_en.svg" width="216px" height="64px" />
            </a>
          </div>
        </div>
      </div>
      <hr />
      <!--===================Row part 2 end========================-->

      <!--==================footer section end====================-->

      <!--==================footer section  upper===================-->

      <!--==================Row part 3===============================-->
      <div class="row mt-2 mb-3 offset-3">
        <div class="col-12 col-lg-3 col-md-12 col-sm-12">
          <a class="navbar-brand" href="https://www.emirates.com/us/english/" target="_blank">
            <img src="assets/images/emirates_gray_big.svg" width="140px" height="116px" />
          </a>
        </div>
        <div class="col-12 col-lg-3 col-md-12 col-sm-12">
          <a class="navbar-brand" href="https://www.adidas.co.uk/football" target="_blank">
            <img src="assets/images/adidas_gray_big.svg" width="140px" height="116px" />
          </a>
        </div>
        <div class="col-12 col-lg-3 col-md-12 col-sm-12">
          <a class="navbar-brand" href="https://www.hp.com/us-en/home.html" target="_blank">
            <img src="assets/images/HP.svg" width="140px" height="117px" />
          </a>
        </div>
      </div>
      <!--==================Row part 3 end===========================-->

      <!--======================footer section  upper end=============-->

      <!--==================footer section Middle=====================-->

      <!--==================Row part 4===============================-->
      <div class="row mt-4 mb-3">
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/mahou_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/dubai_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/ea-sports_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/abbott_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/nivea_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/cantabria-labs_gray.svg" width="66px" height="55px" />
          </a>
        </div>
      </div>
      <!--==================Row part 4 end===========================-->

      <!--==================Row part 5===============================-->
      <div class="row mt-4 mb-2">
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/easymarkets_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/adobe_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/zegna_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/cisco_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/palladium_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/daktronics_gray.svg" width="66px" height="55px" />
          </a>
        </div>
      </div>
      <!--==================Row part 5 end===========================-->

      <!--==================Row part 6===============================-->
      <div class="row mt-2 mb-2">
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/softtek_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/canon_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/unicaja_gray_2.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/playstation_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/sanitas_gray.svg" width="66px" height="55px" />
          </a>
        </div>
        <div class="col-12 col-lg-2 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/cocacola_gray.svg" width="66px" height="55px" />
          </a>
        </div>
      </div>
      <!--==================Row part 6 end===========================-->

      <!--===================footer section Middle end============-->
    </div>

    <!--=========================container end super======================-->

    <!--=========================container part 2=====================-->
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 col-md-12 col-sm-12">
          <a class="navbar-brand" href="#">
            <img src="assets/images/2.svg" width="160" height="160" class="pb-4" />
          </a>
        </div>

        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
          <div class="ms-auto gap-5" style="line-height: 154px">
            <i class="fa fa-brands fa-facebook icon"></i>
            <i class="fa fa-brands fa-instagram icon"></i>
            <i class="fa fa-brands fa-x-twitter icon"></i>
            <i class="fa fa-brands fa-youtube icon"></i>
            <i class="fa fa-brands fa-twitch icon"></i>
            <i class="fa fab fa-snapchat-ghost icon"></i>
            <i class="fa fa-brands fa-tiktok icon"></i>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <!--=======================container part 2 enb=====================-->

  </div>
  <!--=======================container-fluid end=========================-->

  <!--======================Footer bottom part========================-->
  <div class="container-fluid bg-secondary-subtle fixed-bottom">
    <div class="row">
      <div class="col pt-2 pb-2">
        <img src="assets/images/madrid-logo.svg" width="30px" height="40px" />
        <span class="foot_text">Real Madrid © 2024. All rights reserved.</span>
      </div>
      <div class="col-3"></div>
      <div class="col pt-3 pb-2">
        <div class="row">
          <div class="col foot_text">Legal notice</div>
          <div class="col foot_text">Cookies policy</div>
          <div class="col foot_text">Privacy policy</div>
          <div class="col foot_text">realmadrid.com</div>
        </div>
      </div>
    </div>
  </div>
  <!--=======================Footer bottom part end===================-->

  <!--=====================footer part end============================-->
</body>
<!--=====================bootstrap js=========================-->
<script src="assets/js/bootstrap.bundle.min.js" rel="javascript" type="text/javascript"></script>

</html>